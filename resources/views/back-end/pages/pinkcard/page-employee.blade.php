<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">แก้ไขข้อมูลแรงงาน</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder")}}">ข้อมูลบัตรชมพู</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลแรงงาน</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <form id="menuForm" method="POST" action="">

                                        @csrf
                                        <!-- <div class="form-group">
                                            <button class="btn btn-primary" type="submit" name="signup" value="Create">บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="{{url("$segment/$folder")}}">ยกเลิก</a>
                                        </div> 
                                        <hr>   -->
                                        
                                        @php 
                                            $prefix = $rows->prefix;
                                            $gender = $rows->gender;
                                            $couple_status = $rows->couple_status;
                                            $f_prefix = $rows->f_prefix;
                                            $m_prefix = $rows->m_prefix;
                                            $f_prefix = $rows->f_prefix;
                                            $workplace_type = $rows->workplace_type;
                                            $passport_type = $rows->passport_type;
                                        @endphp
                                        <input type="text" hidden id="province_old" value="{{$rows->province_id}}">
                                        <input type="text" hidden id="district_old" value="{{$rows->district_id}}">
                                        <input type="text" hidden id="subdistrict_old" value="{{$rows->subdistrict_id}}">

                                        
                                        <h4>ข้อมูลหนังสือเดินทาง</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="position">คำนำหน้า</label>
                                                                <select class="form-control" name="prefix" id="prefix">
                                                                    <option value="" hidden>กรุณาเลือก</option>
                                                                    <option checked value="นาย" @if($prefix=='นาย')selected @endif>นาย</option>
                                                                    <option value="นาง" @if($prefix=='นาง') selected @endif >นาง</option>
                                                                    <option value="นางสาว"@if($prefix=='นางสาว')selected @endif>นางสาว</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="position">ชื่อ</label>
                                                                <input class="form-control" value="{{$rows->name}}"  name="name" id="name" type="text">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="position">นามสกุล</label>
                                                                <input class="form-control" value="{{$rows->surname}}"   name="surname" id="surname" type="text">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="position">เพศ</label>
                                                                <select class="form-control" name="gender" id="gender">
                                                                    <option value="" hidden>กรุณาเลือก</option>
                                                                    <option @if($gender=='ชาย')selected @endif value="ชาย">ชาย</option>
                                                                    <option @if($gender=='หญิง')selected @endif value="หญิง">หญิง</option>
                                                                    <option @if($gender=='อื่นๆ')selected @endif value="อื่นๆ">อื่นๆ</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="position">วันเดือนปีเกิด</label>
                                                                <input type="date"  value="{{$rows->b_date}}" class="form-control" name="b_date" id="b_date">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="position">อายุ</label>
                                                                <input type="number"  value="{{$rows->age}}" class="form-control" name="age" id="age" min="1" max="99">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="position">สถานที่เกิด</label>
                                                                <input class="form-control" value="{{$rows->b_place}}"  name="b_place" id="b_place" type="text">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <label for="position">เบอร์โทร</label>
                                                                <input class="form-control" value="{{$rows->tel_number}}"  name="tel_number" id="tel_number" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="position">สัญชาติ</label>
                                                                <input type="text" required class="form-control" name="nationality" id="nationality" value="{{$rows->nationality}}">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="position">เชื้อชาติ</label>
                                                                <input type="text" required class="form-control" name="race" id="race" value="{{$rows->race}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="form-group col-md-8">
                                                                <label for="position">สถานภาพ</label>
                                                                <input type="radio" name="couple_status"@if($couple_status=='โสด')checked @endif value="โสด" id="couple_status">โสด
                                                                <input type="radio" name="couple_status"@if($couple_status=='สมรส')checked @endif value="สมรส" id="couple_status">สมรส
                                                                <input type="radio" name="couple_status"@if($couple_status=='หย่า')checked @endif value="หย่า" id="couple_status">หย่า
                                                                <input type="radio" name="couple_status"@if($couple_status=='หม้าย')checked @endif value="หม้าย" id="couple_status">หม้าย
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-12 col-xs-12 col-md-12 col-xl-12">
                                                        <h6><span style="color:red;">*</span>รูปภาพ</h6>
                                                        <img src="@if(@$rows->image == null) {{url("noimage.jpg")}} @endif" class="img-thumbnail" id="preview">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 col-xs-12 col-md-12 col-xl-12">
                                                        <small class="help-block">*รองรับไฟล์ <strong class="text-danger">(jpg, jpeg, png)</strong> เท่านั้น</small>
                                                        <small class="text-danger">Auto Resize </small>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input form-control" name="image" id="image">
                                                            <label class="custom-file-label" for="image">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>ข้อมูลเพิ่มเติม</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label for="position">คำนำหน้าบิดา</label>
                                                        <select class="form-control" name="f_prefix" id="position">
                                                            <option value="" hidden>กรุณาเลือก</option>
                                                            <option selected value="นาย">นาย</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อบิดา</label>
                                                        <input class="form-control"  value="{{$rows->f_name}}"  name="f_name" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">นามสกุลบิดา</label>
                                                        <input class="form-control"  value="{{$rows->f_surname}}" name="f_surname" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label for="position">คำนำหน้ามารดา</label>
                                                        <select class="form-control" name="m_prefix" id="position">
                                                            <option value="" hidden>กรุณาเลือก</option>
                                                            <option value="นาง" @if($m_prefix=='นาง')selected @endif >นาง</option>
                                                            <option value="นางสาว"@if($m_prefix=='นางสาว')selected @endif >นางสาว</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อมารดา</label>
                                                        <input class="form-control" value="{{$rows->m_name}}"  name="m_name" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">นามสกุลมารดา</label>
                                                        <input class="form-control"  value="{{$rows->m_surname}}" name="m_surname" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h4>ข้อมูลสถานที่ทำงานของคนงานต่างด้าว</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label for="position">กิจการ</label>
                                                        <input class="form-control"   value="{{$rows->business}}" name="business"  id="business" type="text">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label for="position">ตำแหน่งงาน</label>
                                                        <input class="form-control"  value="{{$rows->position}}" name="position"  id="position" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <input type="radio" value="ที่เดียวกับนายจ้าง" name="workplace_type"@if($workplace_type=='ที่เดียวกับนายจ้าง')checked @endif  id="workplace_type"> 
                                                        <label for="position">ที่เดียวกับที่ตั้งที่อยู่ของนายจ้าง</label>   
                                                        <input type="radio" value="อื่นๆ" checked name="workplace_type"@if($workplace_type=='อื่นๆ')checked @endif  id="workplace_type"> 
                                                        <label for="position">อื่นๆ</label>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">ที่อยู่(TH)</label>
                                                        <input class="form-control" value="{{$rows->address_th}}"  type="text" name="address_th"  id="address_th"> 
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">หมู่(TH)</label>
                                                        <input class="form-control"  value="{{$rows->group_th}}" type="text" name="group_th"  id="group_th"> 
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ซอย(TH)</label>
                                                        <input class="form-control"  type="text" value="{{$rows->alley_th}}" name="alley_th"  id="alley_th"> 
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ถนน(TH)</label>
                                                        <input class="form-control"  type="text" value="{{$rows->road_th}}" name="road_th"  id="road_th"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label for="position">จังหวัด(TH)</label>
                                                        <select name="province_id"  id="province_id" class="form-control">
                                                            <option value="">เลือกจังหวัด</option>
                                                            @foreach($rowsP as $row)
                                                                    <option @if($row->id == $rows->province_id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">อำเภอ(TH)</label>
                                                        <select name="district_id"  class="form-control" id="district_id">
                                                                    <option value="{{$rowD->id}}">{{$rowD->name_th}}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ตำบล(TH)</label></label>
                                                        <select name="subdistrict_id"  class="form-control" id="subdistrict_id">
                                                                    <option value="{{$rowSD->id}}">{{$rowSD->name_th}}</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">รหัสไปรษณีย์(TH)</label>
                                                        <input class="form-control"  value="{{$rows->zipcode}}" name="zipcode" id="zipcode" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ที่อยู่(EN)</label>
                                                        <input class="form-control"  value="{{$rows->address_en}}" type="text" name="address_en"  id="address_en"> 
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">หมู่(EN)</label>
                                                        <input class="form-control"  type="text" value="{{$rows->group_en}}" name="group_en"  id="group_en"> 
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ซอย(EN)</label>
                                                        <input class="form-control"  type="text" value="{{$rows->alley_en}}" name="alley_en"  id="alley_en"> 
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ถนน(EN)</label>
                                                        <input class="form-control  "type="text" value="{{$rows->road_en}}" name="road_en"  id="road_en"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label for="position">จังหวัด(EN)</label>
                                                        <input class="form-control"  type="text" value="{{$rowP->name_en}}" id="province_en" name="province_en">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">อำเภอ(EN)</label>
                                                        <input class="form-control"  type="text" value="{{$rowD->name_en}}" id="district_en" name="district_en" readonly>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ตำบล(EN)</label></label>
                                                        <input class="form-control"  type="text" value="{{$rowSD->name_en}}" id="subdistrict_en" name="subdistrict_en" readonly>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">รหัสไปรษณีย์(EN)</label>
                                                        <input class="form-control"  type="number" value="{{$rows->zipcode}}" id="zipcode_en" name="zipcode_en" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <h4>ข้อมูลหนังสือเดินทาง</h4>
                                        <hr>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="position">ประเภทหนังสือเดินทาง</label>    
                                                        <label for="position">ไม่มีหนังสือเดินทาง</label>   
                                                        <input type="radio"  @if($passport_type =="ไม่มีหนังสือเดินทาง") checked @endif name="passport_type" id="passport_type" value="ไม่มีหนังสือเดินทาง"> 
                                                        <label for="position">PASSPORT</label> 
                                                        <input type="radio"  @if($passport_type =="passport") checked @endif name="passport_type" id="passport_type" value="passport"> 
                                                        <label for="position">BorderPass</label> 
                                                        <input type="radio"  @if($passport_type =="BorderPass") checked @endif name="passport_type" id="passport_type" value="BorderPass">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label for="position">เลขหนังสือเดินทาง</label>
                                                        <input class="form-control"  type="text" value="{{$rows->passport_number}}" name="passport_number"  id="passport_number"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="position">สถานที่ออกหนังสือเดินทาง</label>
                                                        <input class="form-control"  type="text" value="{{$rows->passport_place}}" name="passport_place"  id="passport_place"> 
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="position">ประเทศที่ออก</label>
                                                        <input class="form-control"  type="text" value="{{$rows->passport_country}}" name="passport_country"  id="passport_country"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="position">วันที่ออกหนังสือเดินทาง</label>
                                                        <input class="form-control"  type="date" value="{{$rows->passport_create}}" name="passport_create"  id="passport_create"> 
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="position">วันหมดอายุหนังสือเดินทาง</label>
                                                        <input class="form-control"  type="date" value="{{$rows->passport_expire}}" name="passport_expire"  id="passport_expire"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <h4>ข้อมูลใบอนุญาติทำงาน</h4>
                                        <hr>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label for="position">เลขที่ใบอนุญาติทำงาน</label>
                                                        <input class="form-control"  type="number" value="{{$rows->permit_number}}" name="permit_number"  id="permit_number"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="position">วันที่ออกใบอนุญาติทำงาน</label>
                                                        <input class="form-control"  type="date" value="{{$rows->permit_create}}" name="permit_create"  id="permit_create"> 
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="position">วันหมดอายุใบอนุญาติทำงาน</label>
                                                        <input class="form-control"  type="date" value="{{$rows->permit_expire}}" name="permit_expire"  id="permit_expire"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                   
                                       
                                        <hr>
                                        <div class="form-group">
                                            <input type="text" hidden value="{{$id}}" id="id" name="id">
                                            <button class="btn btn-primary" type="submit" name="signup" value="Create">บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="{{url("$segment/$folder/index/$id")}}">ยกเลิก</a>
                                    </form>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script type="text/javascript">
        
    </script>
</div>
