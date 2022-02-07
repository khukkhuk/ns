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


class StoreController extends Controller
{
    protected $prefix = 'back-end';
    protected $segment = 'webpanel';
    protected $controller = 'pinkcard';
    protected $folder = 'pinkcard';

    public function store_system($request, $id=null)
    {    
        \DB::beginTransaction();
        try
        {   
            // dd($request);
            // dd($id);
            if($request->id == null){
                $data = new title_data;      
                $data->created = date('Y-m-d H:i:s');
                $data->delete_status = "off";
                $data->created_by=  Auth::guard()->id();
                $data->type_name = $request->select_type; //1
                $data->type = 'pinkcard';
                
                $data->employer_id = employer_data::latest()->first()->id+1;
                $data->employee_id = employee_data::latest()->first()->id+1;
                // dd(employee_data::max('id')+1);
                // dd($data);
                $store_employee = new employee_data;
                $store_employer = new employer_data;
                $employer_data = employer::find($request->select_employer); //2
                $employee_data = employee::find($request->select_employee); //3
                // dd($employee_data);
                $store_employee->province_id = $employee_data->province_id;
                $store_employee->district_id = $employee_data->district_id;
                $store_employee->subdistrict_id = $employee_data->subdistrict_id;
                $employee_id = $request->select_employee;
            }
            else{
                $data = title_data::find($request->id);
                $data->updated = date('Y-m-d H:i:s');
                if($request->notes!=null){
                    $data->notes = $request->notes;
                }
                $store_employer = employer_data::find($request->employer_id);
                $store_employee = employee_data::find($request->employee_id);
                $employee_id = $store_employee->id;
                $store_employee->province_id = $request->province_id_edit;
                $store_employee->district_id = $request->district_id_edit;
                $store_employee->subdistrict_id = $request->subdistrict_id_edit;
            }
                        
            // dd($store_employee);
            // dd($store_employer);
            // dd($data);

            if($request->id == null){
                // dd("insert");
                $data->country = $employee_data->nationality;
                $store_employer->type = $employer_data->type;
                $store_employer->id_card = $employer_data->id_card;
                $store_employer->legal_number = $employer_data->legal_number;
                $store_employer->company_name = $employer_data->company_name;
                $store_employer->prefix_th = $employer_data->prefix_th;
                $store_employer->name_th = $employer_data->name_th;
                $store_employer->surname_th = $employer_data->surname_th;
                $store_employer->nickname_th = $employer_data->nickname_th;
                $store_employer->prefix_en = $employer_data->prefix_en;
                $store_employer->name_en = $employer_data->name_en;
                $store_employer->surname_en = $employer_data->surname_en;
                $store_employer->nickname_en = $employer_data->nickname_en;
                $store_employer->address_th = $employer_data->address_th;
                $store_employer->group_th = $employer_data->group_th;
                $store_employer->alley_th = $employer_data->alley_th;
                $store_employer->road_th =  $employer_data->road_th;
                $store_employer->address_en = $employer_data->address_en;
                $store_employer->group_en = $employer_data->group_en;
                $store_employer->alley_en = $employer_data->alley_en;
                $store_employer->road_en = $employer_data->road_en;
                $store_employer->province_id = $employer_data->province_id;
                $store_employer->district_id = $employer_data->district_id;
                $store_employer->subdistrict_id = $employer_data->subdistrict_id;
                $store_employer->zipcode = $employer_data->zipcode;
                $store_employer->tel_number = $employer_data->tel_number;

                    
                $store_employee->prefix = $employee_data->prefix;
                $store_employee->name = $employee_data->name;
                $store_employee->surname = $employee_data->surname;
                $store_employee->gender = $employee_data->gender;
                $store_employee->b_date = $employee_data->b_date;
                $store_employee->age = $employee_data->age;
                $store_employee->b_place = $employee_data->b_place;
                $store_employee->tel_number = $employee_data->tel_number;
                $store_employee->race = $employee_data->race;
                $store_employee->nationality = $employee_data->nationality;
                $store_employee->couple_status = $employee_data->couple_status;
                $store_employee->business = $employee_data->business;
                $store_employee->position = $employee_data->position;
                $store_employee->workplace_type = $employee_data->workplace_type;
                $store_employee->address_th = $employee_data->address_th;
                $store_employee->group_th = $employee_data->group_th;
                $store_employee->road_th = $employee_data->road_th;
                $store_employee->address_en = $employee_data->address_en;
                $store_employee->group_en = $employee_data->group_en;
                $store_employee->road_en = $employee_data->road_en;
                $store_employee->alley_th = $employee_data->alley_th;
                $store_employee->alley_en = $employee_data->alley_en;
                $store_employee->f_prefix = $employee_data->f_prefix;
                $store_employee->f_name = $employee_data->f_name;
                $store_employee->f_surname = $employee_data->f_surname;
                $store_employee->m_prefix = $employee_data->m_prefix;
                $store_employee->m_name = $employee_data->m_name;
                $store_employee->m_surname = $employee_data->m_surname;
                $store_employee->passport_type = $employee_data->passport_type;
                $store_employee->passport_number = $employee_data->passport_number;
                $store_employee->passport_place = $employee_data->passport_place;
                $store_employee->passport_country = $employee_data->passport_country;
                $store_employee->passport_create = $employee_data->passport_create;
                $store_employee->passport_expire = $employee_data->passport_expire;
                $store_employee->permit_number = $employee_data->permit_number;
                $store_employee->permit_create = $employee_data->permit_create;
                $store_employee->permit_expire = $employee_data->permit_expire;
                $store_employee->province_id = $employee_data->province_id;
                $store_employee->district_id = $employee_data->district_id;
                $store_employee->subdistrict_id = $employee_data->subdistrict_id;
                $store_employee->zipcode = $employee_data->zipcode;
                if($employee_data->image){
                    $store_employee->image = $this->copy($employee_data->image);
                }
                // dd($store_employee);
                // dd($employee_data);

            }else{
                // dd("update");
                $data->country = $request->country;
                $store_employer->type = $request->type;
                $store_employer->id_card = $request->id_card;
                $store_employer->legal_number = $request->legal_number;
                $store_employer->company_name = $request->company_name;
                $store_employer->prefix_th = $request->prefix_th;
                $store_employer->name_th = $request->name_th;
                $store_employer->surname_th = $request->surname_th;
                $store_employer->nickname_th = $request->nickname_th;
                $store_employer->prefix_en = $request->prefix_en;
                $store_employer->name_en = $request->name_en;
                $store_employer->surname_en = $request->surname_en;
                $store_employer->nickname_en = $request->nickname_en;
                $store_employer->address_th = $request->address_th;
                $store_employer->group_th = $request->group_th;
                $store_employer->alley_th = $request->alley_th;
                $store_employer->road_th =  $request->road_th;
                $store_employer->address_en = $request->address_en;
                $store_employer->group_en = $request->group_en;
                $store_employer->alley_en = $request->alley_en;
                $store_employer->road_en = $request->road_en;
                $store_employer->province_id = $request->province;
                $store_employer->district_id = $request->district;
                $store_employer->subdistrict_id = $request->subdistrict;
                $store_employer->zipcode = $request->zipcode;
                $store_employer->tel_number = $request->tel_number;

                $store_employee->prefix = $request->prefix;
                $store_employee->name = $request->name;
                $store_employee->surname = $request->surname;
                $store_employee->gender = $request->gender;
                $store_employee->b_date = $request->b_date;
                $store_employee->age = $request->age;
                $store_employee->b_place = $request->b_place;
                $store_employee->tel_number = $request->e_tel_number;
                $store_employee->couple_status = $request->couple_status;
                $store_employee->business = $request->business;
                $store_employee->position = $request->e_position;
                $store_employee->workplace_type = $request->workplace_type;
                $store_employee->address_th = $request->e_address_th;
                $store_employee->group_th = $request->e_group_th;
                $store_employee->road_th = $request->e_road_th;
                $store_employee->alley_th = $request->e_alley_th;
                $store_employee->address_en = $request->e_address_en;
                $store_employee->group_en = $request->e_group_en;
                $store_employee->road_en = $request->e_road_en;
                $store_employee->road_en = $request->e_road_en;
                $store_employee->zipcode = $request->w_zipcode;
                $store_employee->f_prefix = $request->f_prefix;
                $store_employee->f_name = $request->f_name;
                $store_employee->f_surname = $request->f_surname;
                $store_employee->m_prefix = $request->m_prefix;
                $store_employee->m_name = $request->m_name;
                $store_employee->m_surname = $request->m_surname;
                $store_employee->passport_type = $request->passport_type;
                $store_employee->passport_number = $request->passport_number;
                $store_employee->passport_place = $request->passport_place;
                $store_employee->passport_country = $request->passport_country;
                $store_employee->passport_create = $request->passport_create;
                $store_employee->passport_expire = $request->passport_expire;
                $store_employee->permit_number = $request->permit_number;
                $store_employee->permit_create = $request->permit_create;
                $store_employee->permit_expire = $request->permit_expire;
                $store_employee->race = $request->race;
                $store_employee->nationality = $request->nationality;
                if($request->image){
                    $store_employee->image = $this->copy($request->image);
                }
            }   
                //follower_store 
                //dd($employee_id);
                $follower_data = follower::where("employee_id",$employee_id)->get();
               if($request->id!=Null){
                    // dd($follower_data->count());
                    /*for($i=1;$i<=$max_follower;$i++){
                        $store_follower = follower_data::find($request->input('follower_id'.$i));
                        $store_follower->image = $request->input('follower_image'.$i);
                        $store_follower->prefix = $request->input('follower_prefix'.$i);
                        $store_follower->name = $request->input('follower_name'.$i);
                        $store_follower->surname = $request->input('follower_surname'.$i);
                        $store_follower->age = $request->input('follower_age'.$i);
                        $store_follower->b_date = $request->input('follower_b_date'.$i);
                        $store_follower->employee_id = $employee_id;
                        $store_follower->save();
                    }*/
                }else{
                    if($follower_data->count()>0){
                        foreach($follower_data as $row){
                            if($row->image){
                                $store_follower->image = $this->copy($row->image);
                            }
                            $store_follower = new follower_data;
                            $store_follower->image = $row->image;
                            $store_follower->prefix = $row->prefix;
                            $store_follower->name = $row->name;
                            $store_follower->surname = $row->surname;
                            $store_follower->age = $row->age;
                            $store_follower->b_date = $row->b_date;
                            $store_follower->employee_id = $row->employee_id;
                            $store_follower->save();
                        }
                    }
                }
            if(($data->save())&&($store_employer->save())&&($store_employee->save())){
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
    public function update($request, $id , $table){
        // dd($request);
        // dd($id);
        $data_id = title_data::find($id);
        if($table == "employer"){
            $data = employer_data::find($data_id->employer_id);
            $data->country = $request->country;
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
            $data->alley_th = $request->alley_th;
            $data->road_th =  $request->road_th;
            $data->address_en = $request->address_en;
            $data->group_en = $request->group_en;
            $data->alley_en = $request->alley_en;
            $data->road_en = $request->road_en;
            $data->province_id = $request->province;
            $data->district_id = $request->district;
            $data->subdistrict_id = $request->subdistrict;
            $data->zipcode = $request->zipcode;
            $data->tel_number = $request->tel_number;
            $data->updated = date('Y-m-d H:i:s');
            $data->save();
        }else if($table == "employee"){

            $data = employee_data::find($data_id->employee_id);
            $data->province_id = $request->province_id;
            $data->district_id = $request->district_id;
            $data->subdistrict_id = $request->subdistrict_id;
            $data->prefix = $request->prefix;
            $data->name = $request->name;
            $data->surname = $request->surname;
            $data->gender = $request->gender;
            $data->b_date = $request->b_date;
            $data->age = $request->age;
            $data->b_place = $request->b_place;
            $data->tel_number = $request->tel_number;
            $data->couple_status = $request->couple_status;
            $data->business = $request->business;
            $data->position = $request->position;
            $data->workplace_type = $request->workplace_type;
            $data->address_th = $request->address_th;
            $data->group_th = $request->group_th;
            $data->road_th = $request->road_th;
            $data->alley_th = $request->alley_th;
            $data->address_en = $request->address_en;
            $data->group_en = $request->group_en;
            $data->road_en = $request->road_en;
            $data->road_en = $request->road_en;
            $data->zipcode = $request->w_zipcode;
            $data->f_prefix = $request->f_prefix;
            $data->f_name = $request->f_name;
            $data->f_surname = $request->f_surname;
            $data->m_prefix = $request->m_prefix;
            $data->m_name = $request->m_name;
            $data->m_surname = $request->m_surname;
            $data->passport_type = $request->passport_type;
            $data->passport_number = $request->passport_number;
            $data->passport_place = $request->passport_place;
            $data->passport_country = $request->passport_country;
            $data->passport_create = $request->passport_create;
            $data->passport_expire = $request->passport_expire;
            $data->permit_number = $request->permit_number;
            $data->permit_create = $request->permit_create;
            $data->permit_expire = $request->permit_expire;
            $data->race = $request->race;
            $data->nationality = $request->nationality;
            if($request->image){
                $data->image = $this->copy($request->image);
            }
            $data->updated = date('Y-m-d H:i:s');
            $data->save();
        }else if($table == "follower"){
            for($i=1;$i<=$request->max_line;$i++){
                $data = follower_data::find($request->input('follower_id'.$i));
                $data->updated = date('Y-m-d H:i:s');
                $data->image = $request->input('follower_image'.$i);
                $data->prefix = $request->input('follower_prefix'.$i);
                $data->name = $request->input('follower_name'.$i);
                $data->surname = $request->input('follower_surname'.$i);
                $data->age = $request->input('follower_age'.$i);
                $data->b_date = $request->input('follower_b_date'.$i);
                $data->save();
            }
        }
        
        return view("$this->prefix.alert.success",['url'=> url("$this->segment/$this->folder")]);
    }
    public static function upload($file)
    {
        if ($file) 
        {
            $new = "img_".date("Y-m-d H:i:s");
            $filename = $file->getClientOriginalName();
            $lg = Image::make($file->getRealPath());
            $height = Image::make($file)->height();
            $width = Image::make($file)->width();
            $lg->resize($width, $height)->stream();
            $newLG = 'uploads/img/'.$new;
            $store = Storage::disk('public')->put($newLG, $lg);
            return $newLG;
        }
    }
    public static function copy($file){
        $oldPath = $file;
        $fileExtension = \File::extension($oldPath);
        $newName = date("Y-m-d H:i:s").$fileExtension;
        $newPathWithName = 'uploads/img/'.$newName;
        return $newPathWithName;
    }

}