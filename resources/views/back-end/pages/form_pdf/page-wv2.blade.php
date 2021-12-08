<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารwv2</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv2</a></li>
                        <li class="breadcrumb-item">เอกสารwv2</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <form id="menuForm" method="post" action="">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <!-- <div class="form-group">
                                            <button class="btn btn-primary" type="submit" name="signup" value="Create">บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="{{url("$segment/$folder")}}">ยกเลิก</a>
                                        </div> 
                                        <hr>   -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                        <h4>1</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row" id="form_div">
                                            <div class="form-group col-md-6">
                                                <label for="">ประเภทนนายจ้าง</label>
                                                <select class="form-control" name="f1" id="f1">
                                                    <option hidden>กรุณาเลือกข้อมูล</option>
                                                    <option value="1">นิติบุคคลไทย</option>
                                                    <option value="2">นิติบุคคลต่างด้าว</option>
                                                    <option value="3">บุคคลธรรมดา</option>
                                                </select>
                                            </div>

                                        </div>
                                        <hr>
                                        <div class="row">
                                            
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อนานจ้าง/สถานประกอบการ</label>
                                                <input class="form-control" type="text" name="f5">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ที่ตั้งสถานประกอบการ</label>
                                                <input class="form-control" type="text" name="f6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ประเภทกิจการ</label>
                                                <input class="form-control" type="text" name="f7">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ปี พ.ศ.</label>
                                                <input class="form-control" type="text" name="f8">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">รายได้</label>
                                                <input class="form-control" type="text" name="f9">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ภาษีเงินได้</label>
                                                <input class="form-control" type="text" name="f10">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">รายได้ปัจจุบัน</label>
                                                <input class="form-control" type="text" name="f11">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ในช่วงระยะเวลา</label>
                                                <input class="form-control" type="text" name="f12">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">มูลค่าการส่งออก</label>
                                                <input class="form-control" type="text" name="f13">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ได้นำคนต่างประเทศเข้ามาท่องเที่ยวในรอบปีที่ผ่านมา</label>
                                                <input class="form-control" type="text" name="f14">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">มีพนักงานคนไทย</label>
                                                <input class="form-control" type="text" name="f15">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">มีคนต่างต้าวทำงานอยู่ด้วยแล้ว</label>
                                                <input class="form-control" type="text" name="f16">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จำนวนห้องเรียน</label>
                                                <input class="form-control" type="text" name="f17">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จำนวนนักเรียน</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                
                
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                        <h4>2</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อคนต่างด้าว</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f20"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่โลหิต</label>
                                                <input class="form-control" type="text" name="f21"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ที่อยู่ในประเทศไทย</label>
                                                <input class="form-control" type="text" name="f22"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ประเภทงาน</label>
                                                <input class="form-control" type="text" name="f23"> 
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>ลักษณะงาน</label>
                                                <textarea row="5" name="f24" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สถานที่ทำงานของคนต่างด้าว</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ระยะเวลาการจ้าง</label>
                                                <input class="form-control" type="date" name="f26"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">มีสัญญาจ้างถึงวันที่</label>
                                                <input class="form-control" type="text" name="f27"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ค่าจ้างหรือรายได้</label>
                                                <input class="form-control" type="text" name="f28"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ผลประโยชน์อื่น</label>
                                                <input class="form-control" type="text" name="f29"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ระดับการศึกษาสูงสุด</label>
                                                <input class="form-control" type="text" name="f30"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ประสบการณ์ทำงาน</label>
                                                <input class="form-control" type="text" name="f31"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สถานะภาพ</label>
                                                <select name="f32" class="form-control">
                                                    <option value="โสด">โสด</option>
                                                    <option value="สมรส">สมรส</option>
                                                </select> 
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                
                
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                        <h4>3</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="position">เหตุผลที่ไม่จ้างบุคคลสัญชาติไทยเข้าทำงาน</label>
                                                <textarea name="f33" class="form-control"></textarea>
                                                <!-- <input class="form-control" type="text" name="f30">  -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" hidden name="pages" value="30">
                                                <input type="text" hidden name="title_id" value="{{$title_id}}">
                                                <input type="text" hidden name="pdf_id" value="@if(isset($pdf)) {{$pdf->id}} @endif">
                                                <input type="text" hidden name="pdf_type" value="wv2">
                                                <button class="btn btn-primary" type="submit" name="signup" value="Create">บันทึกข้อมูล</button>
                                                <a class="btn btn-danger" href="{{url("$segment/$folder")}}">ยกเลิก</a>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="backend/libs/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        
        form_tmp  = ''+
        '<div class="form-group col-md-6">'+
        '<label for="">ประเภทนนายจ้าง</label>'+
        '<select class="form-control" name="f1" id="f1">'+
        '<option value="1">นิติบุคคลไทย</option>'+
        '<option value="2">นิติบุคคลต่างด้าว</option>'+
        '<option value="3">บุคคลธรรมดา</option>'+
        '</select>'+
        '</div>';

        $(document).on('change', '#f1', function(){
            f1  = $("#f1").val()
            if(f1 == 1){
                form = form_tmp +
                    '<div class="form-group col-md-6">'+
                    '<label for="position">จดทะเบียนเมื่อ</label>'+
                    '<input class="form-control" type="text" name="f2">'+ 
                    '</div>'+
                    '<div class="form-group col-md-6">'+
                    '<label for="position">เลขที่</label>'+
                    '<input class="form-control" type="text" name="f3">'+ 
                    '</div>'+
                    '<div class="form-group col-md-6">'+
                    '<label for="position">ทุนจดทะเบียนชำระแล้ว</label>'+
                    '<input class="form-control" type="text" name="f4">'+ 
                    '</div>'
            }
            else if(f1 == 2){
                form = form_tmp +'</div>'+
                    '<div class="form-group col-md-6">'+
                    '<label for="position">จดทะเบียนเมื่อ</label>'+
                    '<input class="form-control" type="text" name="f2">'+ 
                    '</div>'+
                    '<div class="form-group col-md-6">'+
                    '<label for="position">จำนวนเงินที่นำเข้ามาจากต่างประเทศ</label>'+
                    '<input class="form-control" type="text" name="f3">'+ 
                    '</div>'    
            }else if(f1 == 3 ){
                form = form_tmp +'</div>'+
                    '<div class="form-group col-md-6">'+
                    '<label for="position">บัตรประจำตัวประชาชนเลขที่</label>'+
                    '<input class="form-control" type="text" name="f2">'+ 
                    '</div>'+
                    '<div class="form-group col-md-6">'+
                    '<label for="position">ใบอนุญาตทำงานเลขที่</label>'+
                    '<input class="form-control" type="text" name="f3">'+ 
                    '</div>'  
            }
                $("#form_div").html(form);
                $('select option[value="' + f1 +'"]').prop("selected", true);
        });
    </script>
    </div>