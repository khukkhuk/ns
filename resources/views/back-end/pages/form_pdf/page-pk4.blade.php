<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">หนังสือมอบอำนาจ</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item">หนังสือมอบอำนาจ</li>
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
                                            <div class="form-group col-md-12">ข้อมูลนายจ้าง</div>
                                            <div class="form-group col-md-4">
                                                <label for="position">คำนำหน้า</label>
                                                <input class="form-control" value="@if(@$resultr) {{$resultr->prefix_th}} @else {{$pdf->f1}} @endif" type="text" name="f1"> 
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="position">ชื่อ</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f2}} @else {{$resultr->name_th}} {{$resultr->surname_th}} @endif" type="text" name="f2"> 
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>อายุ</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f3}} @else {{$resultr->age}} @endif" type="text" name="f3">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เชื้อชาติ</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f4}} @else {{$resultr->race}} @endif" type="text" name="f4"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f5}} @else {{$resultr->nationality}} @endif" type="text" name="f5"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="position">ถือบัตร</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f6}}  @endif" type="text" name="f6"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f7}} @endif" type="text" name="f7"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อยู่บ้านเลขที่</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f8}} @else {{$resultr->address_th}} @endif" type="text" name="f8"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f9}} @else {{$resultr->alley_th}} @endif" type="text" name="f9"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f10}} @else {{$resultr->road_th}} @endif" type="text" name="f10"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่ที่</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f11}} @else {{$resultr->group_th}} @endif" type="text" name="f11"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f12}} @else {{$rowesd->name_th}} @endif" type="text" name="f12"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f13}} @else {{$rowed->name_th}} @endif" type="text" name="f13"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" value="@if(@$pdf) {{$pdf->f14}} @else {{$rowep->name_th}} @endif" type="text" name="f14"> 
                                            </div>
                                            
                                            <div class="form-group col-md-12">ข้อมูลผู้รับอำนาจ</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">คำนำหน้า</label>
                                                <input class="form-control" type="text" name="f15"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ชื่อ</label>
                                                <input class="form-control" type="text" name="f16"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>อายุ</label>
                                                <input class="form-control" type="text" name="f17">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เชื้อชาติ</label>
                                                <input class="form-control" type="text" name="f18"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="position">ถือบัตร</label>
                                                <input class="form-control" type="text" name="f20"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f21"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อยู่บ้านเลขที่</label>
                                                <input class="form-control" type="text" name="f22"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f23"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f24"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่ที่</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" type="text" name="f26"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" type="text" name="f27"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f28"> 
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
                                                <input type="text" hidden name="pages" value="28">
                                                <input type="text" hidden name="title_id" value="{{$title_id}}">
                                                <input type="text" hidden name="pdf_id" value="@if(isset($pdf)) {{$pdf->id}} @endif">
                                                <input type="text" hidden name="pdf_type" value="pk4">
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