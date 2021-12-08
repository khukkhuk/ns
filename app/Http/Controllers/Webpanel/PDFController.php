<?php
namespace App\Http\Controllers\Webpanel;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\User;
use App\Models\Backend\Employer;
use App\Models\Backend\Employee;
use App\Models\Backend\Follower;
use App\Models\Backend\title_data;
use App\Models\Backend\employer_data;
use App\Models\Backend\employee_data;
use App\Models\Backend\follower_data;
use App\Models\Backend\Provinces;
use App\Models\Backend\District;
use App\Models\Backend\SubDistrict;
use App\Models\Backend\pdf_detail;
// use Codedge\Fpdf\Fpdf\Fpdf;
use PDF;
 
class PDFController extends Controller
{
   private $fpdf;
   protected $prefix = 'back-end';
   protected $segment = 'webpanel';
   protected $controller = 'pdf';
   protected $folder = 'file_pdf';

    public function getdata($id,$type){
        $result = title_data::find($id);
        $employer_id  = $result->employer_id;
        $employee_id  = $result->employee_id;
        // $chk = pdf_detail::where("title_id",$id)->first();
        $chk = pdf_detail::leftjoin("pdf_detail2","pdf_detail.id","pdf_detail2._id")
        ->where("title_id",$id)
        ->where("pdf_type",$type)
        ->first();
        // dd($chk);
        if($chk != null){
            
            $result = array(
                'result' => $result,
                'pdf' => $chk,
            );
        }else{
            /* code for test */
            $pdf = new \stdClass();
                for($i=1;$i<150;$i++){
            $pdf->{"f".$i} = $i ;
            }
            /* end test code */

            $resultr = employer_data::where("id","=",$employer_id)->first();
            $resulte = employee_data::where("id","=",$employee_id)->first();
            $rowrp = Provinces::where("id","=",$resultr->province_id)->first();
            $rowrd = District::where("id","=",$resultr->district_id)->first();
            $rowrsd = SubDistrict::where("id","=",$resultr->subdistrict_id)->first();
            $rowep = Provinces::where("id","=",$resulte->workplace_province_id)->first();
            $rowed = District::where("id","=",$resulte->workplace_district_id)->first();
            $rowesd = SubDistrict::where("id","=",$resulte->workplace_subdistrict_id)->first();
            $result = array(
                'result' => $result,
                'resulte' => $resulte,
                'resultr' => $resultr,
                'rowrp' => $rowrp,
                'rowrd' => $rowrd,
                'rowrsd' => $rowrsd,
                'rowep' => $rowep,
                'rowed' => $rowed,
                'rowesd' => $rowesd,
                /*test code*/'pdf' => $pdf,
            );
        }
        // dd($result);
        return $result;
    }
    public function view(request $request,$type,$id){
        // dd($result);
        $stype = substr($type,0,2);
        $file = substr($type,2,1);
        $result = $this->getdata($id,$type);
        if($stype=="wv"){
            $folder = "work_visa";
        }else if($stype =="bd"){
            $folder = "borderpass";
        }else if($stype =="pk"){
            $folder = "pinkcard";
        }else if($stype =="mm"){
            $folder = "mou/myanmar";
        }else if($stype =="ml"){
            $folder = "mou/lao";
        }else if($stype =="mc"){
            $folder = "mou/cambodia";
        }
        
        view()->share('result',$result);
        $pdf = PDF::loadView('back-end/pages/file_pdf/'.$folder.'/'.$file,$result); 
        return $pdf->stream();    
    }

    public function form(request $request,$type,$id){
        // dd($result);
        $stype = substr($type,0,2);
        $file = substr($type,2,1);
        $result = $this->getdata($id,$type);
        if($stype=="wv"){
            $folder = "work_visa";
        }else if($stype =="bd"){
            $folder = "borderpass";
        }else if($stype =="pk"){
            $folder = "pinkcard";
        }else if($stype =="mm"){
            $folder = "mou/myanmar";
        }else if($stype =="ml"){
            $folder = "mou/lao";
        }else if($stype =="mc"){
            $folder = "mou/cambodia";
        }
        $result = title_data::find($id);
        $employer_id  = $result->employer_id;
        $employee_id  = $result->employee_id;

        $resultr = employer_data::where("id","=",$employer_id)->first();
        $resulte = employee_data::where("id","=",$employee_id)->first();
        $rowrp = Provinces::where("id","=",$resultr->province_id)->first();
        $rowrd = District::where("id","=",$resultr->district_id)->first();
        $rowrsd = SubDistrict::where("id","=",$resultr->subdistrict_id)->first();
        $rowep = Provinces::where("id","=",$resulte->workplace_province_id)->first();
        $rowed = District::where("id","=",$resulte->workplace_district_id)->first();
        $rowesd = SubDistrict::where("id","=",$resulte->workplace_subdistrict_id)->first();
        
        $pdf = pdf_detail::leftjoin("pdf_detail2","pdf_detail.id","pdf_detail2._id")
        ->where("title_id",$id)
        ->where("pdf_type",$type)
        ->first();
        // dd($pdf);
        // dd($pdf);
        $url = "$this->prefix.pages.form_pdf.index";
        if($pdf){
            return view($url,[
                'js' => [
                    ["type"=>"text/javascript","src"=>"backend/build/backend/employee.js"],
                    ["src"=>'backend/js/sweetalert2.all.min.js'],
                ],
                'prefix' => $this->prefix,
                'folder' => "form_pdf",
                'segment' => $this->segment,
                'pdf' => $pdf,
                'page'=> $type,
                'title_id'=> $id,
            ]);
        }else{
            return view($url,[
                'js' => [
                    ["type"=>"text/javascript","src"=>"backend/build/backend/employee.js"],
                    ["src"=>'backend/js/sweetalert2.all.min.js'],
                ],
                'prefix' => $this->prefix,
                'folder' => "form_pdf",
                'segment' => $this->segment,
                'result' => $result,
                'resulte' => $resulte,
                'resultr' => $resultr,
                'rowrp' => $rowrp,
                'rowrd' => $rowrd,
                'rowrsd' => $rowrsd,
                'rowep' => $rowep,
                'rowed' => $rowed,
                'rowesd' => $rowesd,
                'page'=> $type,
                'title_id'=> $id,
            ]);
        }
    }
    public function store(Request $request){
        $data = pdf_detail::where("title_id",$request->title_id)
        ->where("pdf_type",$request->pdf_type)->first();
        if($data){
            
        }else{
            $data = new pdf_detail;
            $data->pdf_type = $request->pdf_type;
            $data->title_id = $request->title_id;
        }
        if(isset($request->f61)){
            $data2 = new pdf_detail2;
            $new_id  = pdf_detail::first();
            $data2->_id = $new_id + 1;
        }
        for($i=1;$i < $request->pages+1;$i++){
            if($request->input('f'.$i) == ""){

            }else{
                if($i>60){
                    $data2->{"f".$i} = $request->input('f'.$i);  
                }else{
                    $data->{"f".$i} = $request->input('f'.$i);         
                }
            }
        }
        // dd($data);
        if($data->save()){
            if(isset($data2)){
                $data2->save();
            }
            $stype = substr($request->pdf_type,0,2);
            $file = substr($request->pdf_type,2,1);
            if($stype=="wv"){
                $folder = "work_visa";
            }else if($stype =="bd"){
                $folder = "borderpass";
            }else if($stype =="pk"){
                $folder = "pinkcard";
            }else if($stype =="mm"){
                $folder = "mou/myanmar";
            }else if($stype =="ml"){
                $folder = "mou/lao";
            }else if($stype =="mc"){
                $folder = "mou/cambodia";
            }
            return redirect("view/$request->pdf_type/$request->title_id");
        }
    }
    public function view_pdf(Request $request,$id){
        if($id == 1){
            $url = "back-end/pages/file_pdf/bill/index";
        }else{
            $url = "back-end/pages/file_pdf/bill/bill";
        }
        $pdf = PDF::loadView($url); 
        return $pdf->stream();    
    }
}