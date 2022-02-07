<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">แก้ไขข้อมูลนายจ้าง</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">ข้อมูลนายจ้าง</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลนายจ้าง</li>
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

                                    <form id="menuForm" method="post" action="">
                                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <!-- <div class="form-group">
                                            <button class="btn btn-primary" type="submit" name="signup" value="Create">บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="{{url("$segment/$folder")}}">ยกเลิก</a>
                                        </div> 
                                        <hr>   -->

                                            <a class="btn btn-danger" href="{{url("$segment/$folder")}}">ย้อนกลับ</a>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <input type="radio" checked name="type" id="type1" value="บุคคล" @if($rows->type=="บุคคล") checked @endif>
                                                        <label for="position">บุคคล</label>   
                                                        <input type="radio" name="type" id="type2" value="บริษัท" @if($rows->type=="บริษัท") checked @endif> 
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
                                                        <input class="form-control" value="{{$rows->id_card}}" name="id_card" id="id_card" type="number">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="position">เลขนิติบุคคล</label>
                                                        <input class="form-control" value="{{$rows->legal_number}}" name="legal_number" id="legal_number" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label for="position">ชื่อบริษัท</label>
                                                        <input class="form-control" value="{{$rows->company_name}}" name="company_name" id="company_name" type="text">
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
                                                        <input class="form-control" value="{{$rows->name_th}}"  name="name_th" id="name_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">นามสกุล(TH)</label>
                                                        <input class="form-control" value="{{$rows->surname_th}}" name="surname_th" id="surname_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อเล่น(TH)</label></label>
                                                        <input class="form-control" value="{{$rows->nickname_th}}"name="nickname_th" id="nickname_th" type="text">
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
                                                            <option value="Mr.">นาย</option>
                                                            <option value="Mrs.">นาง</option>
                                                            <option value="Miss">นางสาว</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อ(EN)</label>
                                                        <input class="form-control"name="name_en" value="{{$rows->name_en}}" id="name_en" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">นามสกุล(EN)</label>
                                                        <input class="form-control"name="surname_en" value="{{$rows->surname_en}}" id="surname_en" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ชื่อเล่น(EN)</label></label>
                                                        <input class="form-control"name="nickname_en" value="{{$rows->nickname_en}}" id="nickname_en" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">ที่อยู่(TH)</label>
                                                        <input class="form-control"name="address_th" value="{{$rows->address_th}}" id="address_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">หมู่(TH)</label>
                                                        <input class="form-control"name="group_th" value="{{$rows->group_th}}" id="group_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ถนน(TH)</label>
                                                        <input class="form-control"name="road_th" value="{{$rows->road_th}}" id="road_th" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ซอย(TH)</label>
                                                        <input class="form-control" type="text" value="{{$rows->alley_th}}" id="alley_th" name="alley_th">
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
                                                            @foreach($rowsP as $row)
                                                                <option @if($row->id == $rows->province_id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="district">อำเภอ(TH)</label>
                                                        <select name="district" id="district" class="form-control">
                                                            @foreach($rowsD as $row)
                                                                <option @if($row->id == $rows->district_id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                            @endforeach
                                                        </select>
                                                        <!-- <div id="fetch_amphure"></div> -->
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="subdistrict">ตำบล(TH)</label>
                                                        <select name="subdistrict" id="subdistrict" class="form-control">
                                                            @foreach($rowsSD as $row)
                                                                <option @if($row->id == $rows->subdistrict_id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">รหัสไปรษณีย์(TH)</label>
                                                        <input class="form-control" name="zipcode" value="{{$rows->zipcode}}" id="zipcode" readonly type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">ที่อยู่(EN)</label>
                                                        <input class="form-control"name="address_en" value="{{$rows->address_en}}" id="address_en" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">หมู่(EN)</label>
                                                        <input class="form-control"name="group_en" value="{{$rows->group_en}}" id="group_en" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ถนน(EN)</label>
                                                        <input class="form-control"name="road_en" value="{{$rows->road_en}}" id="road_en" type="text">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ซอย(EN)</label>
                                                        <input class="form-control" type="text" value="{{$rows->alley_en}}" id="alley_en" name="alley_en">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label>จังหวัด(EN)</label>
                                                        <input class="form-control" value="{{$rowP->name_en}}" type="text" id="province_en" name="province_en" readonly>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="district">อำเภอ(EN)</label>
                                                        <input class="form-control" value="{{$rowD->name_en}}" type="text" id="district_en" name="district_en" readonly>
                                                        <!-- <div id="fetch_amphure"></div> -->
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="subdistrict">ตำบล(EN)</label>
                                                        <input class="form-control" value="{{$rowSD->name_en}}" type="text" id="subdistrict_en" name="subdistrict_en" readonly>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">รหัสไปรษณีย์(EN)</label>
                                                        <input class="form-control" name="zipcode_en" value="{{$rows->zipcode}}" id="zipcode_en" readonly type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <label for="position">เบอร์โทร</label>
                                                        <input class="form-control"name="tel_number" value="{{$rows->tel_number}}" id="tel_number" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        
                                        <div class="row">
                                            <h4>ที่อยู่สถานประกอบการ</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">ที่อยู่(TH)</label>
                                                        <input class="form-control"name="w_address_th"  id="w_address_th" type="text" value="{{$rows->w_address_th}}">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">หมู่(TH)</label>
                                                        <input class="form-control"name="w_group"  id="w_group" type="text" value="{{$rows->w_group}}">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ถนน(TH)</label>
                                                        <input class="form-control"name="w_road_th"  id="w_road_th" type="text" value="{{$rows->w_road_th}}">
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ซอย(TH)</label>
                                                        <input class="form-control" type="text" id="w_alley_th" name="w_alley_th" value="{{$rows->w_alley_th}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label>จังหวัด(TH)</label>
                                                        <select name="w_province" id="w_province" class="form-control">
                                                            <option value="">เลือกจังหวัด</option>
                                                                @foreach($rowsP as $row)
                                                                    <option @if($row->id == $rows->w_province) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="district">อำเภอ(TH)</label>
                                                        <select name="w_district" id="w_district" class="form-control">
                                                                @foreach($rowsD as $row)
                                                                    <option @if($row->id == $rows->w_district) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                                @endforeach
                                                        </select>
                                                        <!-- <div id="fetch_amphure"></div> -->
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="subdistrict">ตำบล(TH)</label>
                                                        <select name="w_subdistrict" id="w_subdistrict" class="form-control">
                                                                @foreach($rowsSD as $row)
                                                                    <option @if($row->id == $rows->w_subdistrict) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">รหัสไปรษณีย์(TH)</label>
                                                        <input class="form-control" name="w_zipcode" id="w_zipcode" readonly type="text" value="{{$rows->w_zipcode}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                <div class="form-group col-md-2">
                                                        <label for="position">ที่อยู่(EN)</label>
                                                        <input class="form-control"name="w_address_en"  id="w_address_en" type="text"value="{{$rows->w_address_en}}">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">หมู่(EN)</label>
                                                        <input class="form-control"name="w_group_en"  id="w_group_en" type="text"value="{{$rows->w_group}}">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ถนน(EN)</label>
                                                        <input class="form-control"name="w_road_en"  id="w_road_en" type="text"value="{{$rows->w_road_en}}">
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">ซอย(EN)</label>
                                                        <input class="form-control" type="text" id="w_alley_en" name="w_alley_en"value="{{$rows->w_alley_en}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label>จังหวัด(EN)</label>
                                                        <input class="form-control"  type="text" id="w_province_en" name="w_province_en" readonly value="{{$rowWP->name_en}}">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="district">อำเภอ(EN)</label>
                                                        <input class="form-control"  type="text" id="w_district_en" name="w_district_en" readonly value="{{$rowWD->name_en}}">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="subdistrict">ตำบล(EN)</label>
                                                        <input class="form-control"  type="text" id="w_subdistrict_en" name="w_subdistrict_en" readonly value="{{$rowWSD->name_en}}">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="position">รหัสไปรษณีย์(EN)</label>
                                                        <input class="form-control" name="w_zipcode_en" id="w_zipcode_en" readonly type="text"  value="{{$rows->w_zipcode}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <div class="form-group">
                                            <input type="text" hidden value="{{$rows->id}}" name="id" id="id">
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
