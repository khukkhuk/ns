<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารสัญญาจ้าง ลาว</h4>
                <div class="page-title-right">
                    <ul class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv3</a></li>
                        <li class="breadcrumb-item">เอกสารสัญญาจ้าง กัมพูชา</li>
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
    <div class="col-8">
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
                                            <div class="form-group col-md-12">
                                                <label for="">ข้อมูลนายจ้าง</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อนายจ้าง</label>
                                                <input class="form-control" type="text" name="f1"value="@if(@$pdf) {{$pdf->f1}} @else {{$resultr->name_th}} {{$resultr->surname_th}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ที่อยู่นายจ้าง</label>
                                                <input class="form-control" type="text" name="f2" value="@if(@$pdf) {{$pdf->f2}} @else {{$resultr->address_th}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <select class="form-control" name="f3" id="province1">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    @foreach($province as $row)
                                                        <option @if(@$pdf->f3 == $row->id) selected @endif @if(@$resultr->province_id == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ</label>
                                                <select class="form-control" name="f4" id="district1">
                                                    @foreach($district as $row)
                                                        <option @if(@$pdf->f4 == $row->id) selected @endif @if(@$resultr->district_id == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล</label>
                                                <select class="form-control"  name="f5" id="subdistrict1">
                                                    @foreach($subdistrict as $row)
                                                        <option @if(@$pdf->f5 == $row->id) selected @endif @if(@$resultr->subdistrcit_id == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-md-12">
                                                <label for="">ข้อมูลแรงงาน</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อแรงงาน</label>
                                                <input class="form-control" type="text" name="f6" value="@if(@$pdf) {{$pdf->f6}} @else {{$resulte->name_th}} {{$resulte->surname_th}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ที่อยู่แรงงาน</label>
                                                <input class="form-control" type="text" name="f7" value="@if(@$pdf) {{$pdf->f7}} @else {{$resulte->address_th}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <select class="form-control" name="f8" id="province2">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    @foreach($province as $row)
                                                        <option @if(@$pdf->f8 == $row->id) selected @endif @if(@$resulte->province_id == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ</label>
                                                <select class="form-control" name="f9" id="district2">
                                                    @foreach($district as $row)
                                                        <option @if(@$pdf->f9 == $row->id) selected @endif @if(@$resulte->district_id == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล</label>
                                                <select class="form-control"  name="f10" id="subdistrict2">
                                                    @foreach($subdistrict as $row)
                                                        <option @if(@$pdf->f10 == $row->id) selected @endif @if(@$resulte->subdistrcit_id == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">ตำแหน่งงานและอัตราค่าจ้าง</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตำแหน่งงาน</label>
                                                <input class="form-control" type="text" name="f11" value="@if(@$pdf) {{$pdf->f11}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อัตราค่าจ้าง</label>
                                                <input class="form-control" type="text" name="f12" value="@if(@$pdf) {{$pdf->f12}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">โดยตกลงจ่ายค่าจ้างทุกวันที่</label>
                                                <input class="form-control" type="text" name="f25" value="@if(@$pdf) {{$pdf->f25}} @endif">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">ระยะเวลาและสถานที่ทำงาน</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ระยะเวลาจ้าง</label>
                                                <input class="form-control" type="text" name="f13" value="@if(@$pdf) {{$pdf->f13}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สถานที่ทำงาน</label>
                                                <input class="form-control" type="text" name="f14" value="@if(@$pdf) {{$pdf->f14}} @endif">
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <select class="form-control" name="f15" id="province3">
                                                    <option value="" hidden>กรุณาเลือกข้อมูล</option>
                                                    @foreach($province as $row)
                                                        <option @if(@$pdf->f15 == $row->id) selected @endif @if(@$resultr->w_province == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ</label>
                                                <select class="form-control" name="f16" id="district3">
                                                    @foreach($district as $row)
                                                        <option @if(@$pdf->f16 == $row->id) selected @endif @if(@$resultr->w_district == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล</label>
                                                <select class="form-control"  name="f17" id="subdistrict3">
                                                    @foreach($subdistrict as $row)
                                                        <option @if(@$pdf->f17 == $row->id) selected @endif @if(@$resultr->w_subdistrict == $row->id) selected @endif value="{{$row->id}}">{{$row->name_th}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">ชั่วโมงการทำงาน</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชั่วโมงการทำงานปกติไม่เกิน</label>
                                                <input class="form-control" type="text" name="f18" value="@if(@$pdf) {{$pdf->f18}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">วันทำงานใน 1 สัปดาห์</label>
                                                <input class="form-control" type="text" name="f19" value="@if(@$pdf) {{$pdf->f19}} @endif">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">วันหยุด</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">นายจ้างต้องจัดให้ลูกจ้างมีวันหยุด ประจำสัปดาห์โดยได้ค่าจ้างสัปดาห์ละ</label>
                                                <input class="form-control" type="text" name="f20" value="@if(@$pdf) {{$pdf->f20}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">นายจ้างต้องจัดให้ลูกจ้างมีวันหยุดตามประเพณีไทยโดยได้รับค่าจ้างปีละ</label>
                                                <input class="form-control" type="text" name="f21" value="@if(@$pdf) {{$pdf->f21}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เมื่อทำงานครบปีนายจ้างตกลงจัดให้ลูกจ้างมีวันหยุดพักผ่อนประจำปี โดยได้รับค่าจ้างเป็นเวลา</label>
                                                <input class="form-control" type="text" name="f22" value="@if(@$pdf) {{$pdf->f22}} @endif">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">ค่าล่วงเวลาและค่าจ้างในวันหยุด</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ถ้านายจ้างให้ลูกจ้างทำงานเกินเวลาทำงานปกตินายจ้างต้องจ่ายค่าล่วงเวลาให้ลูกจ้างในอัตรา</label>
                                                <input class="form-control" type="text" name="f23" value="@if(@$pdf) {{$pdf->f23}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ถ้านายจ้างให้ลูกจ้างทำงานในวันหยุดนายจ้างต้องจ่ายค่าจ้างในวันหยุดให้ลูกจ้างในอัตรา</label>
                                                <input class="form-control" type="text" name="f24" value="@if(@$pdf) {{$pdf->f24}} @endif">
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