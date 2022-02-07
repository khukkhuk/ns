<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">ตม.7</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item">บัตรชมพู</li>
                        <li class="breadcrumb-item">ตม.7</li>
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
                                            <h4>ข้อมูลแรงงาน</h4></div>
                                            <div class="form-group col-md-4">
                                                <label for="position">คำนำหน้า</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f1}} @else {{$resulte->prefix_th}} @endif" type="text" name="f1"> 
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>ชื่อ</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f2}} @else {{$resulte->name_th}} {{$resulte->surname_th}} @endif" type="text" name="f2">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="position">ชื่อรอง</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f3}}  @endif" type="text" name="f3"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อายุ</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f4}} @else {{$resulte->age}} @endif" type="text" name="f4"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">วันเดือนปีเกิด</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f5}} @else {{$resulte->b_date}} @endif" type="text" name="f5"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สถานที่เกิด</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f6}} @else {{$resulte->b_place}} @endif" type="text" name="f6"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สัญชาติ</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f7}} @else {{$resulte->nationality}} @endif" type="text" name="f7">
                                            </div>
                                        </div>
                                            <hr>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <h4>หนังสือเดินทาง</h4>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f8}} @else {{$resulte->passport_number}} @endif" type="text" name="f8">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ลงวันที่</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f9}} @else {{$resulte->passport_create}} @endif" type="text" name="f9">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้ที่</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f10}} @else {{$resulte->passport_place}} @endif" type="text" name="f10">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">มีอายุถึงวันที่</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f11}} @else {{$resulte->passport_expire}} @endif" type="text" name="f11">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ประเภทของวีซ่า</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f12}} @endif" type="text" name="f12">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ได้โดยสารโดยพาหนะ</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f13}} @endif" type="text" name="f13">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จาก</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f14}} @endif" type="text" name="f14">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เข้ามาทางด่าน</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f15}} @endif" type="text" name="f15">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">วันเดือนปี</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f16}} @endif" type="text" name="f16">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ลำดับที่</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f17}} @endif" type="text" name="f17">
                                            </div>  
                                            <div class="form-group col-md-6">
                                                <label for="">กำหนด</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f18}} @endif" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เหตุผลที่ขออยู่ต่อ</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f19}} @endif" type="text" name="f19">
                                            </div>
                                        <div class="col-md-12"><h4>เพิ่มเติม</h4>
                                            
                                        </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label for="">สถานที่พักในประเทศไทย</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f20}} @endif" type="text" name="f20">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">คำขออนุญาตฉบับนี้ ข้าพเจ้า</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f21}} @endif" type="text" name="f21">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f22}} @endif" type="text" name="f22">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ถนน</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f23}} @endif" type="text" name="f23">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f24}} @endif" type="text" name="f24">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f25}} @endif" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <input class="form-control"value="@if(@$pdf) {{$pdf->f26}} @endif" type="text" name="f26">
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
                                                <input type="text" hidden name="pages" value="26">
                                                <input type="text" hidden name="title_id" value="{{$title_id}}">
                                                <input type="text" hidden name="pdf_id" value="@if(isset($pdf)) {{$pdf->id}} @endif">
                                                <input type="text" hidden name="pdf_type" value="wv3">
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