<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารbd5</h4>

                <div class="page-title-right">
                    <ul class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv3</a></li>
                        <li class="breadcrumb-item">เอกสารbd5</li>
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
                                        <hr>   --><div class="row">
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
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">เขียนที่</label>
                                                <input class="form-control" type="text" name="f5">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">วัน/เดือน/ปี</label>
                                                <input class="form-control" type="text" name="f6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">คำนำหน้า</label>
                                                <select class="form-control" name="f1" id="f1">
                                                    <option hidden>กรุณาเลือกข้อมูล</option>
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อสกุล</label>
                                                <input class="form-control" type="text" name="f7">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อตัว</label>
                                                <input class="form-control" type="text" name="f8">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อรอง</label>
                                                <input class="form-control" type="text" name="f9">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อายุ</label>
                                                <input class="form-control" type="text" name="f10">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เกิดวัน/เดือน/ปี</label>
                                                <input class="form-control" type="text" name="f11">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สถานที่เกิด</label>
                                                <input class="form-control" type="text" name="f12">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f13">
                                            </div>
                                        </div>
                                            <hr>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <h4>หนังสือเดินทาง</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f14">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ลงวันที่</label>
                                                <input class="form-control" type="text" name="f15">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้ที่</label>
                                                <input class="form-control" type="text" name="f16">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">มีอายุถึงวันที่</label>
                                                <input class="form-control" type="text" name="f17">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ประเภทของวีซ่า</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ได้โดยสารโดยพาหนะ</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จาก</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เข้ามาทางด่าน</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">วันเดือนปี</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ลำดับที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">กำหนด</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เหตุผลที่ขออยู่ต่อ</label>
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
                                                <label for="">สถานที่พักในประเทศไทย</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="position">ผู้เขียน</label>
                                                <input class="form-control" type="text" name="f20"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">บ้านเลขที่</label>
                                                <input class="form-control" type="text" name="f21"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f22"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f23"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f25"> 
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