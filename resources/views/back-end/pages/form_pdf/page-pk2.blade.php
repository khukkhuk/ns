<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">ท.บ.2</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item">บัตรชมพู</li>
                        <li class="breadcrumb-item">ท.บ.2</li>
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
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            
                                            <div class="form-group col-md-12">
                                                <h4>ข้อมูลผู้ติดตาม</h4></div>
                                            <div class="form-group col-md-6">
                                                <label for="position">พิสูจน์สัญชาติ</label>
                                                <select name="f1" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f1 == 1) selected @endif @endif value="1">พิสูจน์แล้ว</option>
                                                    <option @if(@$pdf) @if($pdf->f1 == 2) selected @endif @endif value="2">ยังไม่พิสูจน์</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>เลขประจำตัวผู้ติดตาม</label>
                                                <input class="form-control" type="text" name="f2" value="@if(@$pdf) {{$pdf->f2}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">คำนำหน้า</label>
                                                <select name="f3" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f3 == 1) selected @endif @endif value="1">เด็กชาย</option>
                                                    <option @if(@$pdf) @if($pdf->f3 == 2) selected @endif @endif value="2">เด็กหญิง</option>
                                                    <option @if(@$pdf) @if($pdf->f3 == 3) selected @endif @endif value="3">นาย</option>
                                                    <option @if(@$pdf) @if($pdf->f3 == 4) selected @endif @endif value="4">นางสาว</option>
                                                    <option @if(@$pdf) @if($pdf->f3 == 5) selected @endif @endif value="5">นาง</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เพศ</label>
                                                <select name="f4" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f4 == 1) selected @endif @endif value="1">ชาย</option>
                                                    <option @if(@$pdf) @if($pdf->f4 == 2) selected @endif @endif value="2">หญิง</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อ(TH)</label>
                                                <input class="form-control" type="text" name="f5" value="@if(@$pdf) {{$pdf->f5}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>นามสกุล(TH)</label>
                                                <input class="form-control" type="text" name="f6" value="@if(@$pdf) {{$pdf->f6}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อ(EN)</label>
                                                <input class="form-control" type="text" name="f7" value="@if(@$pdf) {{$pdf->f7}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>นามสกุล(EN)</label>
                                                <input class="form-control" type="text" name="f8" value="@if(@$pdf) {{$pdf->f8}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <select name="f9" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f9 == 1) selected @endif @endif value="1">เมียนมา</option>
                                                    <option @if(@$pdf) @if($pdf->f9 == 2) selected @endif @endif value="2">ลาว</option>
                                                    <option @if(@$pdf) @if($pdf->f9 == 3) selected @endif @endif value="3">กัมพูชา</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>วันเดือนปีเกิด</label>
                                                <input class="form-control" type="Date" name="f10" value="@if(@$pdf) {{$pdf->f10}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สถานภาพ</label>
                                                <select name="f11" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f11 == 1) selected @endif @endif value="1">โสด</option>
                                                    <option @if(@$pdf) @if($pdf->f11 == 2) selected @endif @endif value="2">สมรส</option>
                                                    <option @if(@$pdf) @if($pdf->f11 == 3) selected @endif @endif value="3">สมรส(แยกกันอยู่)</option>
                                                    <option @if(@$pdf) @if($pdf->f11 == 4) selected @endif @endif value="4">หย่า</option>
                                                    <option @if(@$pdf) @if($pdf->f11 == 5) selected @endif @endif value="5">หม้าย</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อบิดา</label>
                                                <input class="form-control" type="text" name="f12"value="@if(@$pdf) {{$pdf->f12}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>เลขประจำตัว</label>
                                                <input class="form-control" type="text" name="f13"value="@if(@$pdf) {{$pdf->f13}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อมารดา</label>
                                                <input class="form-control" type="text" name="f14"value="@if(@$pdf) {{$pdf->f14}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>เลขประจำตัว</label>
                                                <input class="form-control" type="text" name="f15"value="@if(@$pdf) {{$pdf->f15}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ติดตามผู้ปกครอง</label>
                                                <select name="f16" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f16 == 1) selected @endif @endif value="1">บิดา</option>
                                                    <option @if(@$pdf) @if($pdf->f16 == 2) selected @endif @endif value="2">มารดา</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>รหัสประจำบ้านผู้ปกครอง(ที่ติดตาม)</label>
                                                <input class="form-control" type="text" name="f17"value="@if(@$pdf) {{$pdf->f17}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>เดินทางเข้ามาทางด้าน/อำเภอ</label>
                                                <input class="form-control" type="text" name="f18"value="@if(@$pdf) {{$pdf->f18}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>จังหวัด</label>
                                                <input class="form-control" type="text" name="f19"value="@if(@$pdf) {{$pdf->f19}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>เมื่อวันที่</label>
                                                <input class="form-control" type="date" name="f20"value="@if(@$pdf) {{$pdf->f20}} @endif">
                                            </div>
                                            <div class="col-12">
                                                <h4>ข้อมูลหน้าสือเดินทาง</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ข้อมูลตามหลักฐานจากต้นทางเลขที่</label>
                                                <input class="form-control" type="text" name="f21"value="@if(@$pdf) {{$pdf->f21}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ประเภทหนังสือเดินทาง</label>
                                                <select name="f22" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f22 == 1) selected @endif @endif value="1">Passport(PP)</option>
                                                    <option @if(@$pdf) @if($pdf->f22 == 2) selected @endif @endif value="2">Temporary Passport(PT)</option>
                                                    <option @if(@$pdf) @if($pdf->f22 == 3) selected @endif @endif value="3">Certificate of Identity(CI)</option>
                                                    <option @if(@$pdf) @if($pdf->f22 == 4) selected @endif @endif value="4">Travel Document(TD)</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>สถานที่ออกหนังสือ</label>
                                                <input class="form-control" type="text" name="f23"value="@if(@$pdf) {{$pdf->f23}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ประเทศ</label>
                                                <input class="form-control" type="text" name="f24"value="@if(@$pdf) {{$pdf->f24}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>วันเดือนปีที่ออก(คศ)</label>
                                                <input class="form-control" type="date" name="f25"value="@if(@$pdf) {{$pdf->f25}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>วันหมดอายุ(คศ)</label>
                                                <input class="form-control" type="date" name="f26"value="@if(@$pdf) {{$pdf->f26}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ตม.6 เลขที่</label>
                                                <input class="form-control" type="text" name="f27"value="@if(@$pdf) {{$pdf->f27}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>กรณี</label>
                                                <select name="f28" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f28 == 1) selected @endif @endif value="1">การตรวจลงตราและประทับตราอนุญาตให้อยู่ในราชอาณาจักร</option>
                                                    <option @if(@$pdf) @if($pdf->f28 == 2) selected @endif @endif value="2">ขออยู่ต่อ</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>วันเดือนปีที่ออก(คศ)</label>
                                                <input class="form-control" type="date" name="f29"value="@if(@$pdf) {{$pdf->f29}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>วันหมดอายุ(คศ)</label>
                                                <input class="form-control" type="date" name="f30"value="@if(@$pdf) {{$pdf->f30}} @endif">
                                            </div>
                                            <div class="col-12">
                                                <h4>ข้อมูลสุขภาพ</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>สิทธิการรักษาโรงพยาบาล</label>
                                                <input class="form-control" type="text" name="f31"value="@if(@$pdf) {{$pdf->f31}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>โรงพยาบาลที่ตรวจสุขภาพ</label>
                                                <input class="form-control" type="text" name="f32"value="@if(@$pdf) {{$pdf->f32}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>การตรวจสุขภาพ</label>
                                                <select name="f33" class="form-control" id="">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    <option @if(@$pdf) @if($pdf->f33 == 1) selected @endif @endif value="1">ยังไม่ตรวจสุขภาพ</option>
                                                    <option @if(@$pdf) @if($pdf->f33 == 2) selected @endif @endif value="2">ตรวจสุขภาพแล้ว(มีใบรับรองแพทย์ไม่เกิน 90 วัน)</option>
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" hidden name="pages" value="33">
                                                <input type="text" hidden name="title_id" value="{{$title_id}}">
                                                <input type="text" hidden name="pdf_id" value="@if(isset($pdf)) {{$pdf->id}} @endif">
                                                <input type="text" hidden name="pdf_type" value="pk2">
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