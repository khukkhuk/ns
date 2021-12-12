<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webpanel as Webpanel;
use App\Http\Controllers\Frontend as Frontend;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {return view('welcome');});



//====================  ====================
//================  Backend ================
//====================  ====================

Route::get('/', [Webpanel\HomeController::class,'index']);




Route::get('webpanel/login', [Webpanel\AuthController::class,'getLogin']);
Route::post('webpanel/login', [Webpanel\AuthController::class,'postLogin']);
Route::get('webpanel/logout', [Webpanel\AuthController::class,'logOut']);


Route::get('/ajax/get_province_en', [Frontend\AjaxController::class,'get_province_en']);
Route::get('/ajax/get_district_en', [Frontend\AjaxController::class,'get_district_en']);
Route::get('/ajax/get_subdistrict_en', [Frontend\AjaxController::class,'get_subdistrict_en']);
Route::get('/ajax/get_distirct', [Frontend\AjaxController::class,'get_district']);
Route::get('/ajax/get_subdistirct', [Frontend\AjaxController::class,'get_subdistrict']);
Route::get('/ajax/get_zipcode', [Frontend\AjaxController::class,'get_zipcode']);
Route::post('/ajax/get_employee', [Frontend\AjaxController::class,'get_employee']);
Route::get('/ajax/get_formdata', [Frontend\AjaxController::class,'get_formdata']);
Route::post('/ajax/get_data_employee', [Frontend\AjaxController::class,'get_data_employee']);
Route::get('/ajax/get_data_formdata', [Frontend\AjaxController::class,'get_data_formdata']);



// Rout e::get('/test', [Webpanel\P DFController::class,'formPDF']);
Route::get('/webpanel/view_pdf/{id}', [Webpanel\PDFController::class,'view_pdf']);
Route::post('/webpanel/form', [Webpanel\PDFController::class,'pdf_index']);

Route::get('/view/{type}/{id}', [Webpanel\PDFController::class,'view']);
Route::get('/form/{type}/{id}', [Webpanel\PDFController::class,'form']);
Route::post('/form/{type}/{id}', [Webpanel\PDFController::class,'store']);


Route::group(['middleware' => ['Webpanel']], function () {
    
    Route::prefix('webpanel')->group(function () {
        Route::get('/', [Webpanel\HomeController::class,'index']);
        
        // Route::get('/view_pdf/{folder}/{name}', [Webpanel\PDFController::class,'view_pdf']);
        // Route::get('/view_pdf/wv1', [Webpanel\PDFController::class,'view_pdf']);
        // Route::get('/view_pdf', [Webpanel\PDFController::class,'view_pdf']);

        // === Controller Fixed Webpage ===
        Route::prefix('menu')->group(function(){
            Route::get('/', [Webpanel\MenuController::class,'index']);
            Route::post('/datatable', [Webpanel\MenuController::class,'datatable']);
            Route::get('/add', [Webpanel\MenuController::class,'add']);
            Route::post('/add', [Webpanel\MenuController::class,'insert']);
            Route::get('/{id}', [Webpanel\MenuController::class,'edit'])->where(['id' => '[0-9]+']);
            Route::post('/{id}', [Webpanel\MenuController::class,'update'])->where(['id' => '[0-9]+']);
            Route::get('/icon', [Webpanel\MenuController::class,'icon']);
            Route::get('/status/{id}', [Webpanel\MenuController::class,'status'])->where(['id' => '[0-9]+']);
            Route::get('/sub_status/{id}', [Webpanel\MenuController::class,'sub_status'])->where(['id' => '[0-9]+']);
            Route::get('/destroy', [Webpanel\MenuController::class,'destroy']);
        });

        Route::prefix('user')->group(function(){
            Route::get('/', [Webpanel\UserController::class,'index']);
            Route::post('/datatable', [Webpanel\UserController::class,'datatable']);
            Route::get('/add', [Webpanel\UserController::class,'add']);
            Route::post('/add', [Webpanel\UserController::class,'insert']);
            Route::get('/{id}', [Webpanel\UserController::class,'edit'])->where(['id' => '[0-9]+']);
            Route::post('/{id}', [Webpanel\UserController::class,'update'])->where(['id' => '[0-9]+']);
            Route::get('/status/{id}', [Webpanel\UserController::class,'status'])->where(['id' => '[0-9]+']);
            Route::get('/destroy', [Webpanel\UserController::class,'destroy']);
        });

        
        Route::prefix('customer')->group(function(){
            Route::get('/', [Webpanel\CustomerController::class,'index']);
            Route::post('/datatable', [Webpanel\CustomerController::class,'datatable']);
            Route::get('/add', [Webpanel\CustomerController::class,'add']);
            Route::post('/add', [Webpanel\CustomerController::class,'insert']);
            Route::get('/{id}', [Webpanel\CustomerController::class,'edit'])->where(['id' => '[0-9]+']);
            Route::post('/{id}', [Webpanel\CustomerController::class,'update'])->where(['id' => '[0-9]+']);
            Route::get('/status/{id}', [Webpanel\CustomerController::class,'status'])->where(['id' => '[0-9]+']);
            Route::get('/destroy', [Webpanel\CustomerController::class,'destroy']);
        });

        Route::prefix('employee')->group(function(){
            Route::get('/index/{id}', [Webpanel\EmployeeController::class,'index']);
            Route::post('/datatable/{id}', [Webpanel\EmployeeController::class,'datatable']);
            Route::get('/add/{id}', [Webpanel\EmployeeController::class,'add']);
            Route::post('/add/{id}', [Webpanel\EmployeeController::class,'insert']);
            Route::get('/{id}', [Webpanel\EmployeeController::class,'edit']);
            Route::post('/{id}', [Webpanel\EmployeeController::class,'update']);
        });
        Route::prefix('follower')->group(function(){
            Route::get('/index/{id}', [Webpanel\FollowerController::class,'index']);
            Route::post('/datatable/{id}', [Webpanel\FollowerController::class,'datatable']);
            Route::get('/add/{id}', [Webpanel\FollowerController::class,'add']);
            Route::post('/add/{id}', [Webpanel\FollowerController::class,'insert']);
            Route::get('/{id}', [Webpanel\FollowerController::class,'edit']);
            Route::post('/{id}', [Webpanel\FollowerController::class,'update']);
            Route::get('/destroy/{id}',[Webpanel\FollowerController::class,'destroy']);
        });
        
        Route::prefix('mou')->group(function(){
            Route::get('/', [Webpanel\MouController::class,'index']);
            Route::post('/datatable', [Webpanel\MouController::class,'datatable']);
            Route::get('/add', [Webpanel\MouController::class,'add']);
            Route::post('/add', [Webpanel\MouController::class,'insert']);
            Route::get('/edit/{id}', [Webpanel\MouController::class,'edit']);
            Route::post('/edit/{id}', [Webpanel\MouController::class,'update']);
            Route::get('/detail/{id}', [Webpanel\MouController::class,'detail']);
            Route::post('/file_pdf', [Webpanel\MouController::class,'file_pdf']);
            Route::get('/detail_employee/{id}', [Webpanel\MouController::class,'detail_employee']);
            Route::get('/detail_follower/{id}', [Webpanel\MouController::class,'detail_follower']);
            Route::get('/destroy', [Webpanel\MouController::class,'destroy']);
            Route::get('/mou_status', [Webpanel\MouController::class,'mou_status']);
            Route::get('/tb_mou_status', [Webpanel\MouController::class,'tb_mou_status']);
            Route::get('/check_doc', [Webpanel\MouController::class,'check_doc']);
            Route::post('/tb_check_doc', [Webpanel\MouController::class,'tb_check_doc']);
            Route::get('/notes/{id}', [Webpanel\MouController::class,'notes']);
            Route::post('/check_doc', [Webpanel\MouController::class,'up_notes']);
            Route::get('/shownote/{id}', [Webpanel\MouController::class,'shownote']);
            Route::get('/formnote/{id}', [Webpanel\MouController::class,'formnote']);
            Route::get('/confirmcheck/{id}', [Webpanel\MouController::class,'confirmcheck']);
            Route::get('/mou_detail/{id}', [Webpanel\MouController::class,'mou_detail']);
            Route::post('/mou_detail', [Webpanel\MouController::class,'up_mou_detail']);
            Route::post('/showdoc', [Webpanel\MouController::class,'showdoc']);
        });
        
        Route::prefix('borderpass')->group(function(){
            Route::get('/', [Webpanel\BorderPassController::class,'index']);
            Route::post('/datatable', [Webpanel\BorderPassController::class,'datatable']);
            Route::get('/add', [Webpanel\BorderPassController::class,'add']);
            Route::post('/add', [Webpanel\BorderPassController::class,'insert']);
            Route::get('/edit/{id}', [Webpanel\BorderPassController::class,'edit']);
            Route::post('/edit/{id}', [Webpanel\BorderPassController::class,'update']);
            Route::get('/detail/{id}', [Webpanel\BorderPassController::class,'detail']);
            Route::post('/file_pdf', [Webpanel\BorderPassController::class,'file_pdf']);
            Route::get('/detail_employee/{id}', [Webpanel\BorderPassController::class,'detail_employee']);
            Route::get('/detail_follower/{id}', [Webpanel\BorderPassController::class,'detail_follower']);
            Route::get('/destroy', [Webpanel\BorderPassController::class,'destroy']);
            Route::get('/borderpass_status', [Webpanel\BorderPassController::class,'borderpass_status']);
            Route::get('/tb_borderpass_status', [Webpanel\BorderPassController::class,'tb_borderpass_status']);
            Route::get('/check_doc', [Webpanel\BorderPassController::class,'check_doc']);
            Route::post('/tb_check_doc', [Webpanel\BorderPassController::class,'tb_check_doc']);
            Route::get('/notes/{id}', [Webpanel\BorderPassController::class,'notes']);
            Route::post('/check_doc', [Webpanel\BorderPassController::class,'up_notes']);
            Route::get('/shownote/{id}', [Webpanel\BorderPassController::class,'shownote']);
            Route::get('/formnote/{id}', [Webpanel\BorderPassController::class,'formnote']);
            Route::get('/confirmcheck/{id}', [Webpanel\BorderPassController::class,'confirmcheck']);
            Route::get('/borderpass_detail/{id}', [Webpanel\BorderPassController::class,'borderpass_detail']);
            Route::post('/borderpass_detail', [Webpanel\BorderPassController::class,'up_borderpass_detail']);
            Route::post('/showdoc', [Webpanel\BorderPassController::class,'showdoc']);
        });
        
        Route::prefix('pinkcard')->group(function(){
            Route::get('/', [Webpanel\PinkcardController::class,'index']);
            Route::get('/add', [Webpanel\PinkcardController::class,'add']);
            Route::post('/add', [Webpanel\PinkcardController::class,'insert']);
            Route::get('/edit/{id}', [Webpanel\PinkcardController::class,'edit']);
            Route::post('/edit/{id}', [Webpanel\PinkcardController::class,'update']);
            Route::get('/detail/{id}', [Webpanel\PinkcardController::class,'detail']);
            Route::post('/datatable', [Webpanel\PinkcardController::class,'datatable']);
            Route::get('/add_pinkcard', [Webpanel\PinkcardController::class,'add_pinkcard']);
            Route::get('/health_check', [Webpanel\PinkcardController::class,'health_check']);
            Route::post('/datatable_health', [Webpanel\PinkcardController::class,'datatable_health']);
            Route::get('/visa', [Webpanel\PinkcardController::class,'Visa']);
            Route::post('/datatable_visa', [Webpanel\PinkcardController::class,'datatable_visa']);
            Route::get('/work_permit', [Webpanel\PinkcardController::class,'work_permit']);
            Route::post('/datatable_workpermit', [Webpanel\PinkcardController::class,'datatable_workpermit']);
            Route::get('/pinkcard', [Webpanel\PinkcardController::class,'pinkcard']);
            Route::post('/datatable_pinkcard', [Webpanel\PinkcardController::class,'datatable_pinkcard']);
            Route::get('/nationality_proof', [Webpanel\PinkcardController::class,'nationality_proof']);
            Route::post('/datatable_nationalproof', [Webpanel\PinkcardController::class,'datatable_nationalproof']);
            Route::get('/destroy', [Webpanel\PinkcardController::class,'destroy']);
            Route::post('/setStatus', [Webpanel\PinkcardController::class,'setStatus']);
        });
        
        Route::prefix('renew')->group(function(){
            Route::get('/', [Webpanel\RenewController::class,'index']);
            Route::get('/add', [Webpanel\RenewController::class,'add']);
            Route::post('/add', [Webpanel\RenewController::class,'insert']);
            Route::post('/datatable', [Webpanel\RenewController::class,'datatable']);
            Route::get('/move', [Webpanel\RenewController::class,'move']);
            Route::get('/move_add', [Webpanel\RenewController::class,'move_add']);
            Route::post('/move_add', [Webpanel\RenewController::class,'insert']);
            Route::get('/report', [Webpanel\RenewController::class,'report']);
            Route::post('/datatable_report', [Webpanel\RenewController::class,'datatable_report']);
            Route::get('/add_report', [Webpanel\RenewController::class,'add_report']);
            Route::get('/edit_report/{id}', [Webpanel\RenewController::class,'edit_report']);
            Route::post('/edit_report/{id}', [Webpanel\RenewController::class,'update_report']);
            Route::post('/get_employer', [Webpanel\RenewController::class,'get_employer']);
            Route::post('/get_employee', [Webpanel\RenewController::class,'get_employee']);
            Route::post('/employee_data', [Webpanel\RenewController::class,'employee_data']);
            Route::post('/add_report', [Webpanel\RenewController::class,'insert_report']);
            Route::get('/report_detail/{id}', [Webpanel\RenewController::class,'report_detail']);
            Route::get('/destroy', [Webpanel\RenewController::class,'destroy']);
            
        });
        Route::prefix('health')->group(function(){
            Route::get('/', [Webpanel\HealthController::class,'index']);
            Route::post('/', [Webpanel\HealthController::class,'add_health']);
            Route::post('/datatable', [Webpanel\HealthController::class,'datatable']);
            Route::post('/formhealth', [Webpanel\HealthController::class,'formhealth']);
            
            Route::post('/datatable_health', [Webpanel\HealthController::class,'datatable_health']);
            Route::get('/destroy', [Webpanel\HealthController::class,'destroy']);
        });
        
        Route::prefix('bill')->group(function(){
            Route::get('/', [Webpanel\BillController::class,'index']);
            Route::get('/add', [Webpanel\BillController::class,'add']);
            Route::get('/report', [Webpanel\BillController::class,'report']);
            Route::get('/get_report/{id}', [Webpanel\BillController::class,'get_report']);
            Route::post('/add', [Webpanel\BillController::class,'insert_bill']);
            Route::get('/getdata/{id}', [Webpanel\BillController::class,'getdata']);
            Route::post('/datatable', [Webpanel\BillController::class,'datatable']);
            Route::get('/destroy', [Webpanel\BillController::class,'destroy']);
        });

        Route::prefix('incomebill')->group(function(){
            Route::get('/', [Webpanel\IncomeBillController::class,'index']);
            Route::get('/add', [Webpanel\IncomeBillController::class,'add']);
            Route::get('/getdata/{id}', [Webpanel\IncomeBillController::class,'getdata']);
            Route::post('/add', [Webpanel\IncomeBillController::class,'insert']);
            Route::post('/datatable', [Webpanel\IncomeBillController::class,'datatable']);
            Route::get('/destroy', [Webpanel\IncomeBillController::class,'destroy']);
        });
        
        Route::prefix('type')->group(function(){
            Route::get('/', [Webpanel\TypeController::class,'index']);
            Route::post('/datatable', [Webpanel\TypeController::class,'datatable']);
            Route::get('/add', [Webpanel\TypeController::class,'add']);
            Route::post('/add', [Webpanel\TypeController::class,'insert']);
            Route::get('/edit/{id}', [Webpanel\TypeController::class,'edit']);
            Route::post('/edit/{id}', [Webpanel\TypeController::class,'update']);
            Route::get('/type_detail/{id}', [Webpanel\TypeController::class,'type_detail']);
            Route::post('/datatable_type_detail', [Webpanel\TypeController::class,'datatable_type_detail']);
            Route::post('/type_detail/{id}', [Webpanel\TypeController::class,'store_detail']);
            Route::get('/getdata/{id}', [Webpanel\TypeController::class,'getdata']);
            Route::get('/destroy', [Webpanel\TypeController::class,'destroy']);
        });
        // === End Fixed Controller ===

    });
    
}); 