<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\User;
use App\Http\Controllers\Webpanel\Log_backendController;
use Yajra\DataTables\DataTables;
use App\Models\Backend\Employer;
use App\Models\Backend\Employee;
use App\Models\Backend\Follower;
use App\Models\Backend\title_data;
use App\Models\Backend\employer_data;
use App\Models\Backend\employee_data;
use App\Models\Backend\follower_data;
use App\Models\Backend\detail_data;
use App\Models\Backend\type;
use App\Models\Backend\bill;
use App\Models\Backend\billdetail;

class BillController extends Controller
{
    protected $prefix = 'back-end';
    protected $segment = 'webpanel';
    protected $controller = 'bill';
    protected $folder = 'bill';

    public function datatable(Request $request)
    {
        $like = $request->Like;
        $sTable = bill::get();
        // $sTable = title_data::leftjoin('employer_data','title_data.employer_id','=','employer_data.id')
        // ->leftjoin('employee_data','title_data.employee_id','=','employee_data.id')
        // ->leftjoin('follower_data','follower_data.employee_id','=','employee_data.id')
        // ->leftjoin('users','title_data.created_by',"=","users.id")
        // ->where('title_data.received_by','=',null)
        // ->orWhere('title_data.type','=','mou')
        // ->orWhere('title_data.type','=','borderpass')
        // ->where('title_data.type','=','pinkcard')
        // ->select('*','title_data.created as title_created','employee_data.name as em_name','employee_data.surname as em_surname','employer_data.tel_number as tel','title_data.id as title_id')
        // ->when($like, function($query) use ($like){
        //     if(@$like['name'] != "")
        //     {
        //         $query->where('employer_data.name_th','like','%'.$like['name'].'%');
        //     }
        //     if(@$like['num_search'] != "")
        //     {
        //         $query->where('employer_data.tel_number','like','%'.$like['num_search'].'%');
        //     }
        // })
        // ->get();
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
                
                ["type"=>"text/javascript","src"=>"backend/build/backend/bill.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'index',
            // 'rows' => User::orderby('id','desc')->get(),
        ]);
    }
    public function add(Request $request)
    {
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/bill.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'add',
            'id' => $request->id, 
            'rows' => Type::orderby('id','asc')->get(), 
        ]);
    }
    public function insert_bill(Request $request)
    {    
        \DB::beginTransaction();
        try
        {   
            // dd($request);
            $data = new bill;
            $data->created = date('Y-m-d H:i:s');
            // $data->delete_status = "off";
            // $data->title_id = $request->title_id;
            
            $data->bill_type = "pay";
            $data->type = "-";
            $data->bill_number = $request->bill_number;
            $data->bill_date = $request->bill_date;
            $data->company = $request->company;
            $data->tax_id = $request->tax_id;
            $data->name = $request->name;
            $data->tel_number = $request->tel_number;
            $data->notes = $request->notes;
            $data->payee = $request->payee;
            $data->payer = $request->payer;

            $bill = bill::orderby('id','DESC')->first();
            $bill_id = $bill + 1;

            for($i=1;$i<$request->maxline;$i++){
                $dataDetail = new billdetail;
                $dataDetail->bill_id = $bill_id;
                // dd($request->input('amount'.$i));
                // dd($i);
                // dd($request);
                $dataDetail->amount = $request->input('amount'.$i);
                $dataDetail->type_id = $request->input('select_type'.$i);
                $dataDetail->save();
            }

            if($data->save()){
                \DB::commit();
                return view("$this->prefix.alert.success",['url'=> url("$this->segment/$this->folder")]);
            }else{
                return view("$this->prefix.alert.error",['url'=> url("$this->segment/$this->folder/add")]);
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
    public function getdata(Request $request,$id){
        return $data = type::find($id);
    }
    public function report(request $request){
        return view("$this->prefix.pages.$this->folder.index",[
            'js' => [
                ["type"=>"text/javascript","src"=>"backend/build/backend/bill.js"],
                ["src"=>'backend/js/sweetalert2.all.min.js'],
                ["src"=>'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js'],
                ["src"=>'backend/js/js/charts.js'],
            ],
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'page' => 'report',
            'rows' => Bill::orderby('id','asc')->get(),
        ]);
    }
    public function get_report(request $request,$id){
        $type = $id;
        if($type == "1"){
            $date = date("d");
            $result = Bill::whereDay("created",$date)->get();
        }
        else if($type == "2"){
            $date = date("m");
            $date = 10;
            $result = Bill::whereMonth("created",$date)->get();
        }
        else if($type == "3"){
            $date = date("y");
            $result = Bill::whereYear("created",$date)->get();
        }
        $pay = 0;
        $income =0;
        foreach($result as $row){
            $data1 = BillDetail::leftjoin("type","bill_detail.type_id","type.id")->where("bill_id",$row->id)->get();
            foreach($data1 as $row){
                if($row->bill_type == "pay"){
                    $pay +=  ($row->cost * $row->amount);
                }else{
                    $income +=  ($row->cost * $row->amount);
                }
            }
        }
        $data = array();
        array_push($data ,$income ,$pay);
        // dd($data);
        return $data;
    }
}