<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\User;
use App\Models\Backend\Employer;
use App\Models\Backend\Employee;
use App\Models\Backend\Provinces;
use App\Models\Backend\District;
use App\Models\Backend\SubDistrict;
use App\Models\Backend\mNews;
use App\Http\Controllers\Webpanel\Log_backendController;
use Yajra\DataTables\DataTables;


class CustomerController extends Controller
{
    protected $prefix = 'back-end';
    protected $segment = 'webpanel';
    protected $controller = 'customer';
    protected $folder = 'customer';

    public function datatable(Request $request)
    {
        $like = $request->Like;
        $sTable = Employer::orderby('id','desc')
        ->when($like, function($query) use ($like){
            if(@$like['name'] != "")
            {
                $query->where('name_th','like','%'.$like['name'].'%');
            }
            // if(@$like['status_user'] != "")
            // {
            //     $query->where('status',$like['status_user']);
            // }
        })
        ->get();
        return Datatables::of($sTable)
        ->addIndexColumn()
        ->addColumn('created_at', function($row)
        {
            $data = date('d/m/Y',strtotime($row->created_at));
            return $data;
        })
        ->rawColumns(['created_at'])
        ->make(true);
        
    }
    
    public function index(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                
                ["type"=>"text/javascript","src"=>"backend/build/backend/customer.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'index',
            'rows' => Employer::orderby('id','desc')->get(),
        ]);
    }
    public function add(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/customer.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'add',
            'rows' => Provinces::orderby('id','asc')->get(), 
        ]);
        
    }

    public function get_district(Request $request){
        echo $request;
        $id = $request;
        $result = District::where(_id,id)->get();

        foreach($result as $row){
            $data.='<option>'.$row->name_th.'</option>';
        }
        return response()->json(['success' => true, 'html' => $html]);
    }
    public function insert(Request $request)
    {
        return $this->store_system($request,$id=NULL);
    }

    public function update(Request $request, $id=null)
    {
        return $this->store_system($request,$id);
    }

    public function store_system($request, $id=null)
    {   
        \DB::beginTransaction();
        try
        {
            if($id==null){
                $data = new Employer;
                $data->delete_status = "off";
                $data->created = date('Y-m-d H:i:s');
            }
            else{
                $data = Employer::find($id);
                $data->updated = date('Y-m-d H:i:s');
            }
            $data->type = $request->type;
            $data->id_card = $request->id_card;
            $data->legal_number = $request->legal_number;
            $data->company_name = $request->company_name;
            $data->prefix_th = $request->prefix_th;
            $data->name_th = $request->name_th;
            $data->surname_th = $request->surname_th;
            $data->nickname_th = $request->nickname_th;
            $data->prefix_en = $request->prefix_en;
            $data->name_en = $request->name_en;
            $data->surname_en = $request->surname_en;
            $data->nickname_en = $request->nickname_en;
            $data->address_th = $request->address_th;
            $data->group_th = $request->group_th;
            $data->road_th =  $request->road_th;
            $data->alley_th =  $request->alley_th;
            $data->alley_en =  $request->alley_en;
            $data->address_en = $request->address_en;
            $data->group_en = $request->group_en;
            $data->road_en = $request->road_en;
            $data->province_id = $request->province;
            $data->district_id = $request->district;
            $data->subdistrict_id = $request->subdistrict;
            $data->zipcode = $request->zipcode;
            
            $data->w_address_th = $request->w_address_th;
            $data->w_address_en = $request->w_address_en;
            $data->w_group = $request->w_group;
            $data->w_road_th =  $request->w_road_th;
            $data->w_road_en = $request->w_road_en;
            $data->w_alley_th = $request->w_alley_th;
            $data->w_alley_en = $request->w_alley_en;
            $data->w_province = $request->w_province;
            $data->w_district = $request->w_district;
            $data->w_subdistrict = $request->w_subdistrict;
            $data->w_zipcode = $request->w_zipcode;

            $data->tel_number = $request->tel_number;            
            $filename = 'research_' . date('dmY-His');
            $file = $request->image;
            if ($file) 
            {
                $lg = Image::make($file->getRealPath());
                $ext = explode("/", $lg->mime())[1];
                $height = Image::make($file)->height();
                $width = Image::make($file)->width();
                $lg->resize($width, $height)->stream();
                $newLG = 'uploads/research/' . $filename . '.' . $ext;
                $store = Storage::disk('public')->put($newLG, $lg);
                
                if($store)
                {
                    $data->image = $newLG;
                    // dd($newLG);
                }
            }
            // dd($request);
            if($data->save()){
                \DB::commit();
                return view("$this->prefix.alert.success",['url'=> url("$this->segment/$this->folder")]);
            }else{
                dd($data);
                return view("$this->prefix.alert.error",['url'=> url("$this->segment/$this->folder/$id")]);
            }
            
        }
        catch(\Exception $e)
        {
            \DB::rollback();
            $error_log = $e->getMessage();
            $error_line = $e->getLine();
            $type_status = 'error';
            $error_url = url()->current();
            echo $error_log." ".$error_line." ".$error_url;
        }
    }
    public function edit(Request $request,$id)
    {
        $rows = Employer::find($id);
        $rowP = Provinces::find($rows->province_id);
        $rowD = District::find($rows->district_id);
        $rowSD = SubDistrict::find($rows->subdistrict_id);
        $rowWP = Provinces::find($rows->w_province);
        $rowWD = District::find($rows->w_district);
        $rowWSD = SubDistrict::find($rows->w_subdistrict);
        $rowsP = Provinces::get();
        $rowsD = District::get();
        $rowsSD = SubDistrict::get();
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/customer.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'edit',
            'rows' => $rows,
            'rowsP' => $rowsP,
            'rowsD' => $rowsD,
            'rowsSD' => $rowsSD,
            'rowP' => $rowP,
            'rowD' => $rowD,
            'rowSD' => $rowSD,
            'rowWP' => $rowWP,
            'rowWD' => $rowWD,
            'rowWSD' => $rowWSD,
            'rows_province' => Provinces::orderby('id','desc')->get(),
        ]);
    }
}