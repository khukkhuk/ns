<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสาร บ.ต. 29</h4>

                <div class="page-title-right">
                    <ul class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item">เอกสาร บ.ต. 29</li>
                    </ul>
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
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-12">1.ข้อมูลคนต่างด้าว</div>
                                            <div class="form-group col-md-6">
                                                <label>คำนำหน้า</label>
                                                <select name="f1" class="form-control" id="">
                                                    <option value="1">นาย</option>
                                                    <option value="2">นาง</option>
                                                    <option value="3">นางสาว</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อ</label>
                                                <input class="form-control" type="text" name="f2" value="@if(isset($pdf)) {{$pdf->f3}} @else {{$resulte->name}} {{$resulte->surname}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>นามสกุล</label>
                                                <input class="form-control" type="text" name="f3" value="@if(isset($pdf)) {{$pdf->f4}} @else {{$resulte->name}} {{$resulte->surname}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f4" value="กัมพูชา"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เกิดวันที่</label>
                                                <input class="form-control" type="date" name="f5" value="@if(isset($pdf)){{$pdf->f6}}@else{{$resulte->b_date}}@endif" > 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อายุ</label>
                                                <input class="form-control" type="text" name="f6"> 
                                            </div>
                                            <div class="form-group col-md-12">2.ข้อมูลที่อยู่</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f7" value=""> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f8"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f9"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f10"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f11"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f12"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f13"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f14"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f15"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรสาร</label>
                                                <input class="form-control" type="text" name="f16"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ไปรษณีย์อิเล็กทรอนิกส์</label>
                                                <input class="form-control" type="text" name="f17"> 
                                            </div>
                                            <div class="form-group col-md-12">3.เอกสารแสดงการได้รับอนุญาต</div>
                                            <div class="form-group col-md-6">
                                                <select name="f18" id="" class="form-control">
                                                    <option value="">บัตรผ่านแดน</option>
                                                    <option value="">เอกสารอื่นที่อธิกรมการจัดหางานกำหนด</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>
                                            <div class="form-group col-md-12"></div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f20" value="@if(isset($pdf)) {{$pdf->f22}} @else {{$resulte->passport_number}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ออกให้โดย</label>
                                                <input class="form-control" type="text" name="f21" value="@if(isset($pdf)) {{$pdf->f23}} @else {{$resulte->passport_place}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ประเทศ</label>
                                                <input class="form-control" type="text" name="f22" value="@if(isset($pdf)) {{$pdf->f24}} @else {{$resulte->passport_country}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ออกให้วันที่</label>
                                                <input class="form-control" type="date" name="f23" value="@if(isset($pdf)) {{$pdf->f25}} @else {{$resulte->passport_create}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="date" name="f24" value="@if(isset($pdf)) {{$pdf->f26}} @else {{$resulte->passport_expire}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตรวจลงตราประเภท</label>
                                                <input class="form-control" type="text" name="f25" > 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f26"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ออกให้พี่</label>
                                                <input class="form-control" type="text" name="f27"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ออกให้วันที่</label>
                                                <input class="form-control" type="date" name="f28"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="date" name="f29"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เดินทางมาถึงราชอาณาจักร เมื่อวันที่</label>
                                                <input class="form-control" type="date" name="30"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ได้รับอนุญาตจากพนักงานเจ้า ณ</label>
                                                <input class="form-control" type="text" name="f31"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ให้อยู่ในราชอาณาจักร ถึงวันที่</label>
                                                <input class="form-control" type="date" name="f32"> 
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
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                        <h4>2.ข้อมูลการทำงาน</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="">เลือกข้อมูล</label>
                                                <select class="form-control" name="f33" id="">
                                                    <option value="">ไม่เคยมีใบอนุญาตทำงาน</option>
                                                    <option value="">เคยมีใบอนุญาตทำงาน</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>เลขที่</label>
                                                <input class="form-control" type="text" name="f34">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>ออกให้ที่(จังหวัด)</label>
                                                <input class="form-control" type="text" name="f35">
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
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                        <h4>3.ข้อมูลการขออนุญาต</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            
                                        <div class="form-group col-md-4">
                                                <label>ประเภทงานที่ขออนุญาต</label>
                                                <input class="form-control" type="text" name="f36">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>ลักษณะงาน</label>
                                                <input class="form-control" type="text" name="f37">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>ชื่อนายจ้าง</label>
                                                <input class="form-control" type="text" name="f38">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f39" value=""> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f40"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f41"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f42"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f43"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f44"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f45"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f46"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f47"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรสาร</label>
                                                <input class="form-control" type="text" name="f48"> 
                                            </div>

                                            
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f49" value=""> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f50"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f51"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f52"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f53"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f54"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f55"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f56"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f57"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรสาร</label>
                                                <input class="form-control" type="text" name="f58"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ระยะเวลาการขออนุญาตทำงาน/ขอต่อใบอนุญาตทำงาน</label>
                                                <input class="form-control" type="text" name="f59"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตั้งแต่วันที่</label>
                                                <input class="form-control" type="text" name="f60"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถึงวันที่</label>
                                                <input class="form-control" type="text" name="f61"> 
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
                                                <input type="text" hidden name="pdf_type" value="{{$page}}">
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
        
    </script>
    </div>