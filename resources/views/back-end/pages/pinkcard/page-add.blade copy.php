<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">จัดทำ บัตรชมพู </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เพิ่มข้อมูลบัตรชมพู</a></li>
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
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group col-md-3">
                
                                    <select class="form-control" name="select_type" id="select_type">
                                        <option value="pinkcard" selected >บัตรชมพู</option>
                                    </select>
                                    
                                    <div class="form-group col-md-3">
                                    เลือกประเทศ
                                    <select class="form-control" name="select_country" id="select_country">
                                        <option value="" hidden>เลือกประเทศ</option>
                                        <option value="ลาว">ลาว</option>
                                        <option value="กัมพูชา">กัมพูชา</option>
                                        <option value="พม่า">พม่า</option>
                                    </select>
                                                </div>
                                    
                                    <div class="form-group col-md-3">
                                    เลือกนายจ้าง
                                    <select class="form-control" name="select_employer" id="select_employer">
                                        <option value="" hidden>เลือกนายจ้าง</option>
                                        @foreach($rows as $row)
                                            <option value="{{$row->id}}">{{$row->prefix_th}}{{$row->name_th}} {{$row->surname_th}}</option>
                                        @endforeach

                                    </select>
                                                </div>
                                    
                                    <div class="form-group col-md-3">
                                    เลือกแรงงาน
                                    <select class="form-control" name="select_employee" id="select_employee">
                                        <option value="" hidden>เลือกแรงงาน</option>
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
    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <input type="radio" name="type" id="type_person" value="person">
                                                        <label for="position">บุคคล</label>   
                                                        <input type="radio" name="type" id="type_office" value="office"> 
                                                        <label for="position">บริษัท</label>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="position">เลขบัตรประชาชน</label>
                                                        <input class="form-control" name="id_card" id="id_card" type="number">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="position">เลขนิติบุคคล</label>
                                                        <input class="form-control" name="legal_number" id="legal_number" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label for="position">ชื่อบริษัท</label>
                                                        <input class="form-control" name="company_name" id="company_name" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">คำนำหน้า</label>
                                                        <select class="form-control" name="prefix_th" id="prefix_th">
                                                            <option value="นาย">นาย</option>
                                                            <option value="นาง">นาง</option>
                                                            <option value="นางสาว">นางสาว</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อ(TH)</label>
                                                        <input class="form-control" name="name_th" id="name_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">นามสกุล(TH)</label>
                                                        <input class="form-control"name="surname_th" id="surname_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อเล่น(TH)</label></label>
                                                        <input class="form-control" name="nickname_th" id="nickname_th" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">คำนำหน้า(EN)</label>
                                                        <select class="form-control" name="prefix_en"  id="prefix_en">
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                            <option value="Miss">Miss</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อ(EN)</label>
                                                        <input class="form-control"name="name_en"  id="name_en" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">นามสกุล(EN)</label>
                                                        <input class="form-control"name="surname_en"  id="surname_en" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อเล่น(EN)</label></label>
                                                        <input class="form-control"name="nickname_en"  id="nickname_en" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">ที่อยู่(TH)</label>
                                                        <input class="form-control"name="address_th"  id="address_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">หมู่(TH)</label>
                                                        <input class="form-control"name="group_th"  id="group_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ถนน(TH)</label>
                                                        <input class="form-control"name="road_th"  id="road_th" type="text">
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ซอย(TH)</label>
                                                        <input class="form-control"name="alley_th"  id="alley_th" type="text">
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label>จังหวัด(TH)</label>
                                                        <select name="province" id="province" class="form-control">
                                                            <option value="">เลือกจังหวัด</option>
                                                               
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="district">อำเภอ(TH)</label>
                                                        <select name="district" id="district" class="form-control">
                                                            <option value="">เลือกอำเภอ</option>
                                                        </select>
                                                        <!-- <div id="fetch_amphure"></div> -->
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="subdistrict">ตำบล(TH)</label>
                                                        <select name="subdistrict" id="subdistrict" class="form-control">
                                                            <option value="">เลือกตำบล</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">รหัสไปรษณีย์(TH)</label>
                                                        <input class="form-control" name="zipcode" id="zipcode" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">ที่อยู่(EN)</label>
                                                        <input class="form-control"name="address_en"  id="address_en" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">หมู่(EN)</label>
                                                        <input class="form-control"name="group_en"  id="group_en" type="text">
                                                        <input class="form-control"name="road_en"  id="road_en" type="text">
                                                        <input class="form-control"name="alley_en"  id="alley_en" type="text">
                                                    
                                                        <input class="form-control"  type="text" id="province_en" name="province_en">
                                                        <input class="form-control"  type="text" id="district_en" name="district_en">
                                                        <input class="form-control"  type="text" id="subdistrict_en" name="subdistrict_en">
                                                        <label for="position">รหัสไปรษณีย์(EN)</label>
                                                        <input class="form-control" name="zipcode_en" id="zipcode_en" type="text">
                                                        <input class="form-control"name="tel_number"  id="tel_number" type="text">
                                                        <input class="form-control"name="email"  id="email" type="text">
                                                        <select class="form-control" name="prefix" id="prefix">
                                                            <option value="" hidden>กรุณาเลือก</option>
                                                            <option checked value="นาย">นาย</option>
                                                            <option value="นาง">นาง</option>
                                                            <option value="นางสาว">นางสาว</option>
                                                        </select>
                                                        <input class="form-control" name="name" id="name" type="text">
                                                        <input class="form-control" name="surname" id="surname" type="text">
                                                        <select class="form-control" name="gender" id="gender">
                                                            <option value="" hidden>กรุณาเลือก</option>
                                                            <option value="ชาย">ชาย</option>
                                                            <option value="หญิง">หญิง</option>
                                                            <option value="อื่นๆ">อื่นๆ</option>
                                                        </select>
                                                        <input type="date" class="form-control" name="b_date" id="b_date">
                                                        <input type="number" class="form-control" name="age" id="age" min="1" max="99">
                                                        <input class="form-control" name="b_place" id="b_place" type="text">
                                                        <input class="form-control" name="em_tel_number" id="em_tel_number" type="text">
                                                        <input type="radio" name="couple_status" value="โสด" id="couple_1">โสด
                                                        <input type="radio" name="couple_status" value="สมรส" id="couple_2">สมรส
                                                        <input type="radio" name="couple_status" value="หย่า" id="couple_3">หย่า
                                                        <input type="radio" name="couple_status" value="หม้าย" id="couple_4">หม้าย
                                                        <select class="form-control" name="f_prefix" id="f_prefix">
                                                            <option value="" hidden>กรุณาเลือก</option>
                                                            <option select value="นาย">นาย</option>
                                                        </select>
                                                        <input class="form-control" name="f_name" id="f_name" type="text">
                                                        <input class="form-control" name="f_surname" id="f_surname" type="text">
                                                        <select class="form-control" name="m_prefix" id="m_prefix">
                                                            <option value="" hidden>กรุณาเลือก</option>
                                                            <option selected value="นาง">นาง</option>
                                                            <option value="นางสาว">นางสาว</option>
                                                        </select>
                                                        <input class="form-control" name="m_name" id="m_name" type="text">
                                                        <input class="form-control" name="m_surname" id="m_surname" type="text">
                                                        <input class="form-control" name="business"  id="business" type="text">
                                                        <input class="form-control" name="e_position"  id="e_position" type="text">
                                                        <input type="radio" value="1" name="workplace_type" id="workplace_1"> 
                                                        <label for="position">ที่เดียวกับที่ตั้งที่อยู่ของนายจ้าง</label>   
                                                        <input type="radio" value="0" name="workplace_type" id="workplace_2"> 
                                                        <input class="form-control" type="text" name="e_address_th"  id="e_address_th">
                                                        <input class="form-control" type="text" name="e_group_th"  id="e_group_th"> 
                                                        <input class="form-control" type="text" name="e_road_th"  id="e_road_th"> 
                                                        <input class="form-control"  type="text" id="e_alley_th" name="e_alley_th">
                                                        <select name="e_province_id" id="e_province_id" class="form-control"><option value="">เลือกจังหวัด</option>
                                                        </select>
                                                        <select name="e_district_id" class="form-control" id="e_district_id"><option value="">เลือกอำเภอ</option>
                                                        </select>
                                                        <select name="e_subdistrict_id" class="form-control" id="e_subdistrict_id"><option value="">เลือกตำบล</option>
                                                        </select>
                                                        <input class="form-control" name="e_zipcode" id="e_zipcode" type="number">
                                                        <input class="form-control" type="text" name="e_address_en"  id="e_address_en">
                                                        <input class="form-control" type="text" name="e_group_en"  id="e_group_en"> 
                                                        <input class="form-control "type="text" name="e_road_en"  id="e_road_en"> 
                                                        <input class="form-control"  type="text" id="e_alley_en" name="e_alley_en">
                                                        <input class="form-control" type="text" id="e_province_en" name="e_province_en">
                                                        <input class="form-control" type="text" id="e_district_en" name="e_district_en">
                                                        <input class="form-control" type="text" id="e_subdistrict_en" name="e_subdistrict_en">
                                                        <input class="form-control" type="number" id="ezipcode" name="ezipcode"> 
                                                        <input type="radio" name="passport_type" id="passport_1" value="ไม่มีหนังสือเดินทาง"> 
                                                        <input type="radio" name="passport_type" id="passport_2" value="Passport"> 
                                                        <input type="radio" name="passport_type" id="passport_3" value="BorderPass">
                                                        <input class="form-control" type="text" name="passport_number"  id="passport_number"> 
                                                        <input class="form-control" type="text" name="passport_place"  id="passport_place"> 
                                                        <input class="form-control" type="text" name="passport_country"  id="passport_country"> 
                                                        <input class="form-control" type="date" name="passport_create"  id="passport_create"> 
                                                        <input class="form-control" type="date" name="passport_expire"  id="passport_expire"> 
                                                        <input class="form-control" type="number" name="permit_number"  id="permit_number">
                                                        <input class="form-control" type="date" name="permit_create"  id="permit_create"> 
                                                        <input class="form-control" type="date" name="permit_expire"  id="permit_expire">
                                        <hr>
                                        <div class="form-group">
                                            <input type="text" hidden id="employer_id" name="employer_id">
                                            <input type="text" hidden id="employee_id" name="employee_id">
                                            <button class="btn btn-primary" type="submit" name="signup" value="Create">บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="{{url("$segment/$folder")}}">ยกเลิก</a>
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
