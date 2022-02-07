<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\User;
use App\Http\Controllers\Webpanel\Log_backendController;
use App\Http\Controllers\Webpanel\AjaxController;
use Yajra\DataTables\DataTables;
use App\Models\Backend\Employer;
use App\Models\Backend\Employee;
use App\Models\Backend\Follower;
use App\Models\Backend\title_data;
use App\Models\Backend\employer_data;
use App\Models\Backend\employee_data;
use App\Models\Backend\follower_data;
use App\Models\Backend\detail_data;
use App\Models\Backend\visa;
use App\Models\Backend\report;
use App\Models\Backend\nationalproof;
use App\Models\Backend\pinkcard;
use App\Models\Backend\Provinces;
use App\Models\Backend\District;
use App\Models\Backend\SubDistrict;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;


class PinkcardController extends Controller
{
    protected $prefix = 'back-end';
    protected $segment = 'webpanel';
    protected $controller = 'pinkcard';
    protected $folder = 'pinkcard';

    public function datatable(Request $request)
    {
        $like = $request->Like;
        $sTable = title_data::leftjoin('employer_data','title_data.employer_id','=','employer_data.id')
        ->leftjoin('employee_data','title_data.employee_id','=','employee_data.id')
        ->leftjoin('follower_data','follower_data.employee_id','=','employee_data.id')
        ->leftjoin('users','title_data.created_by',"=","users.id")
        ->where('title_data.received_by','=',null)
        ->where('title_data.type','=','pinkcard')
        ->where('title_data.delete_status','=','off')
        ->select('*','title_data.created as title_created','employee_data.name_th as em_name','employee_data.surname_th as em_surname','employer_data.tel_number as tel','title_data.id as title_id')
        ->when($like, function($query) use ($like){
            if(@$like['name'] != "")
            {
                $query->where('employer_data.name_th','like','%'.$like['name'].'%');
            }
            if(@$like['num_search'] != "")
            {
                $query->where('employer_data.tel_number','like','%'.$like['num_search'].'%');
            }
        })
        ->get();
        // dd($sTable);
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
    public function datatable_health(Request $request)
    {
        $like = $request->Like;
        $sTable = title_data::leftjoin('employer_data','title_data.employer_id','=','employer_data.id')
        ->leftjoin('employee_data','title_data.employee_id','=','employee_data.id')
        ->leftjoin('follower_data','follower_data.employee_id','=','employee_data.id')
        ->leftjoin('users','title_data.created_by',"=","users.id")
        ->leftjoin('healthy','title_data.id',"=","healthy.title_id")
        ->where('title_data.received_by','=',null)
        ->where('title_data.type','=','pinkcard')
        ->where('title_data.delete_status','=','off')
        ->select('*','title_data.created as title_created','employee_data.name_th as em_name','employee_data.surname_th as em_surname','employer_data.tel_number as tel','title_data.id as title_id')
        ->when($like, function($query) use ($like){
            if(@$like['name'] != "")
            {
                $query->where('employer_data.name_th','like','%'.$like['name'].'%');
            }
            if(@$like['num_search'] != "")
            {
                $query->where('employer_data.tel_number','like','%'.$like['num_search'].'%');
            }
        })
        ->get();
        // dd($sTable);
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
    public function datatable_workpermit(Request $request)
    {
        $like = $request->Like;
        $sTable = title_data::leftjoin('employer_data','title_data.employer_id','=','employer_data.id')
        ->leftjoin('employee_data','title_data.employee_id','=','employee_data.id')
        ->leftjoin('follower_data','follower_data.employee_id','=','employee_data.id')
        ->leftjoin('users','title_data.created_by',"=","users.id")
        ->leftjoin('visa','title_data.id',"=","visa.title_id")
        ->where('title_data.received_by','=',null)
        ->where('title_data.type','=','pinkcard')
        ->where('title_data.delete_status','=','off')
        ->select('*','visa.status as visa_status','visa.notes as visa_note','title_data.created as title_created','employee_data.name_th as em_name','employee_data.surname_th as em_surname','employer_data.tel_number as tel','title_data.id as title_id')
        ->when($like, function($query) use ($like){
            if(@$like['name'] != "")
            {
                $query->where('employer_data.name_th','like','%'.$like['name'].'%');
            }
            if(@$like['num_search'] != "")
            {
                $query->where('employer_data.tel_number','like','%'.$like['num_search'].'%');
            }
        })
        ->get();
        // dd($sTable);
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
    public function datatable_visa(Request $request)
    {
        $like = $request->Like;
        $sTable = title_data::leftjoin('employer_data','title_data.employer_id','=','employer_data.id')
        ->leftjoin('employee_data','title_data.employee_id','=','employee_data.id')
        ->leftjoin('follower_data','follower_data.employee_id','=','employee_data.id')
        ->leftjoin('users','title_data.created_by',"=","users.id")
        ->leftjoin('visa','title_data.id',"=","visa.title_id")
        ->where('title_data.received_by','=',null)
        ->where('title_data.type','=','pinkcard')
        ->where('title_data.delete_status','=','off')
        ->select('*','visa.status as visa_status','visa.notes as visa_note','title_data.created as title_created','employee_data.name_th as em_name','employee_data.surname_th as em_surname','employer_data.tel_number as tel','title_data.id as title_id')
        ->when($like, function($query) use ($like){
            if(@$like['name'] != "")
            {
                $query->where('employer_data.name_th','like','%'.$like['name'].'%');
            }
            if(@$like['num_search'] != "")
            {
                $query->where('employer_data.tel_number','like','%'.$like['num_search'].'%');
            }
        })
        ->get();
        // dd($sTable);
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
    public function datatable_nationalproof(Request $request)
    {
        $like = $request->Like;
        $data = title_data::where('received_by','=',null)
        ->where('type','=','pinkcard')
        ->where('delete_status','=','off')->get();
        // dd($data);


        $sTable = title_data::leftjoin('employer_data','title_data.employer_id','=','employer_data.id')
        ->leftjoin('employee_data','title_data.employee_id','=','employee_data.id')
        ->leftjoin('follower_data','follower_data.employee_id','=','employee_data.id')
        ->leftjoin('users','title_data.created_by',"=","users.id")
        ->leftjoin('nationalproof','title_data.id',"=","nationalproof.title_id")
        ->where('title_data.received_by','=',null)
        ->where('title_data.type','=','pinkcard')
        ->where('title_data.delete_status','=','off')
        ->select('*','nationalproof.status as nationalproof_status','nationalproof.notes as nationalproof_note','title_data.created as title_created','employee_data.name_th as em_name','employee_data.surname_th as em_surname','employer_data.tel_number as tel','title_data.id as title_id')
        ->when($like, function($query) use ($like){
            if(@$like['name'] != "")
            {
                $query->where('employer_data.name_th','like','%'.$like['name'].'%');
            }
            if(@$like['num_search'] != "")
            {
                $query->where('employer_data.tel_number','like','%'.$like['num_search'].'%');
            }
        })
        ->get();
        // dd($sTable);
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
    public function datatable_pinkcard(Request $request)
    {
        $like = $request->Like;
        $sTable = title_data::leftjoin('employer_data','title_data.employer_id','=','employer_data.id')
        ->leftjoin('employee_data','title_data.employee_id','=','employee_data.id')
        ->leftjoin('follower_data','follower_data.employee_id','=','employee_data.id')
        ->leftjoin('users','title_data.created_by',"=","users.id")
        ->leftjoin('pinkcard','title_data.id',"=","pinkcard.title_id")
        ->where('title_data.received_by','=',null)
        ->where('title_data.type','=','pinkcard')
        ->where('title_data.delete_status','=','off')
        ->select('*','pinkcard.status as pinkcard_status','pinkcard.notes as pinkcard_note','title_data.created as title_created','employee_data.name_th as em_name','employee_data.surname_th as em_surname','employer_data.tel_number as tel','title_data.id as title_id')
        ->when($like, function($query) use ($like){
            if(@$like['name'] != "")
            {
                $query->where('employer_data.name_th','like','%'.$like['name'].'%');
            }
            if(@$like['num_search'] != "")
            {
                $query->where('employer_data.tel_number','like','%'.$like['num_search'].'%');
            }
        })
        ->get();
        // dd($sTable);
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
                
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'index',
            'rows' => User::orderby('id','desc')->get(),
        ]);
    }
    public function add(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'add',
            'id' => $request->id, 
            'rows' => Employer::orderby('id','asc')->get(), 
        ]);
        
    }
    
    public function insert(Request $request)
    {
        $Store = app(\App\Http\Controllers\Webpanel\StoreController::class);
        return $Store->store_system($request,$id=Null);
    }

    public function update(Request $request, $id=null)
    {
        $Store = app(\App\Http\Controllers\Webpanel\StoreController::class);
        return $Store->store_system($request,$id=Null);
    }

    public function edit(Request $request,$id)
    {
        
        $row = title_data::find($id);
        $employer_id  = $row->employer_id;
        $employee_id  = $row->employee_id;
        
        $resultr = employer_data::where("id","=",$employer_id)->first();
        $resulte = employee_data::where("id","=",$employee_id)->first();
        // $data = employer_data::find($employer_id);
        // dd($data);
        $ajax = app(\App\Http\Controllers\Frontend\AjaxController::class);
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'edit',
            'rowD' => title_data::find($id),
            'rowr' => employer_data::find($row->employer_id),
            'rowe' => employee_data::find($row->employee_id),
            'province'=> Provinces::get(),
            'district'=> District::get(),
            'subdistrict'=> SubDistrict::get(),
           
        ]);
        
    }
    public function detail(Request $request,$id)
    {
        
        $row = title_data::find($id);
        $employer_id  = $row->employer_id;
        $employee_id  = $row->employee_id;
        
        $resultr = employer_data::where("id","=",$employer_id)->first();
        $resulte = employee_data::where("id","=",$employee_id)->first();
        // $data = employer_data::find($row->employer_id);
        // dd($data);
        $ajax = app(\App\Http\Controllers\Frontend\AjaxController::class);
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pickcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'detail',
            'row' => title_data::find($id),
            'rowr' => employer_data::find($row->employer_id),
            'rowe' => employee_data::find($row->employee_id),
            'province'=> Provinces::get(),
            'district'=> District::get(),
            'subdistrict'=> SubDistrict::get(),
           
        ]);
        
    }
    public function add_pinkcard(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'add_pinkcard',
           
        ]);
        
    }
    public function health_check(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'health_check',
           
        ]);
        
    }
    public function setStatus(Request $request){
        $id = $request->id;
        $type = $request->type;
        $status = $request->status;
        // dd($request);
        \DB::beginTransaction();
        try
        {   
            if($type == "visa"){
                $data = visa::where("title_id","=",$id)->first();
                if($data == null){
                    $data = new visa;
                }
            }else if($type == "nationalproof"){
                $data = nationalproof::where("title_id","=",$id)->first();
                if($data == null){
                    $data = new nationalproof;
                }
            }else if($type == "pinkcard"){
                $data = pinkcard::where("title_id","=",$id)->first();
                if($data == null){
                    $data = new pinkcard;
                }
            }
            if($data->title != null){
                if(isset($request->notes)){
                    $data->notes = $request->notes;
                }
                $data->updated = date('Y-m-d H:i:s');
            }else{
                $data->title_id = $id;
                $data->created = date('Y-m-d H:i:s');
                $data->delete_status = "off";
            }
            $data->status = $status;
            
            if($data->save()){
                \DB::commit();
            }else{
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
    public function visa(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'visa',
           
        ]);
        
    }
    public function work_permit(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'work_permit',
           
        ]);
        
    }
    public function pinkcard(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'pinkcard',
           
        ]);
        
    }
    public function nationality_proof(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'nationlity_proof',
           
        ]);
    }
    public function employer(Request $request,$id)
    {
        $title = title_data::find($id);
        $rows = employer_data::find($title->employer_id);
        $rowP = Provinces::find($rows->province_id);
        $rowD = District::find($rows->district_id);
        $rowSD = SubDistrict::find($rows->subdistrict_id);
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
            'page' => 'employer',
            'rows' => $rows,
            'rowsP' => $rowsP,
            'rowsD' => $rowsD,
            'rowsSD' => $rowsSD,
            'rowP' => $rowP,
            'rowD' => $rowD,
            'rowSD' => $rowSD,
            'rows_province' => Provinces::orderby('id','desc')->get(),
        ]);

    }
    public function employee(Request $request,$id)
    {
        $title = title_data::find($id);
        $row = employee_data::find($title->employee_id);
        $rowsP = Provinces::get();
        $rowP = Provinces::find($row->province_id);
        $rowD = District::find($row->district_id);
        $rowSD = SubDistrict::find($row->subdistrict_id);
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/employee.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'employee',
            'id' => $id,
            'rows' => $row,
            'rowsP' => $rowsP,
            'rowP' => $rowP,
            'rowD' => $rowD,
            'rowSD' => $rowSD,
        ]);
    }
    public function follower(Request $request,$id)
    {
        $title = title_data::find($id);
        $rows = follower_data::where("employee_id",$title->employee_id)->get();
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/pinkcard.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'follower',
            'rows' => $rows,
            'employee_id' => $title->employee_id,
            'employer_id' => $id,
        ]);
    }
    public function update_employer(Request $request,$id){
        $Store = app(\App\Http\Controllers\Webpanel\StoreController::class);
        return $Store->update($request,$id,"employer");
    }
    public function update_employee(Request $request,$id){
        $Store = app(\App\Http\Controllers\Webpanel\StoreController::class);
        return $Store->update($request,$id,"employee");
    }
    public function update_follower(Request $request,$id){
        $Store = app(\App\Http\Controllers\Webpanel\StoreController::class);
        return $Store->update($request,$id,"follower");
    }
    public function store_follower(Request $request){
        
        \DB::beginTransaction();
        try
        {   
            // dd($request);
            if(!$request->follower_id){
                $data = new follower_data;
                $data->created = date('Y-m-d H:i:s');
            }else{
                $data = follower_data::find($request->follower_id);
                $data->updated = date('Y-m-d H:i:s');
            }
            $data->prefix = $request->prefix;
            $data->name_th = $request->name_th;
            $data->surname_th = $request->surname_th;
            $data->name_en = $request->name_en;
            $data->surname_en = $request->surname_en;
            $data->age = $request->age;
            $data->b_date = $request->b_date;
            $data->employee_id = $request->employee_id;
            // dd($request);
            if($request->image){
                $file = $request->image;
                $new = "img_".date("YmdHis");
                $filename = $file->getClientOriginalName();
                $lg = Image::make($file->getRealPath());
                $height = Image::make($file)->height();
                $width = Image::make($file)->width();
                $lg->resize($width, $height)->stream();
                $newLG = 'uploads/img/'.$new;
                $store = Storage::disk('public')->put($newLG, $lg);
                $data->image = $newLG;
            }
            if($data->save()){
                \DB::commit();
                return view("$this->prefix.alert.success",['url'=> url("$this->segment/$this->folder/follower/".$request->employer_id)]);
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
    public function get_follower(Request $request,$id){
        $data  = follower_data::find($id);
        return $data;
    }
}
