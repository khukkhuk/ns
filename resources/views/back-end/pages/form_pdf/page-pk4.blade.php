<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารwv3</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv3</a></li>
                        <li class="breadcrumb-item">เอกสารpk4</li>
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
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อผู้รับมอบอำนาจ</label>
                                                <input class="form-control" type="text" name="f2" value="@if($pdf){{$pdf->f2}}@endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อายุ</label>
                                                <input class="form-control" type="text" name="f1" value="@if($pdf){{$pdf->f1}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เชื้อชาติ</label>
                                                <input class="form-control" type="text" name="f3" value="@if($pdf){{$pdf->f3}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f4" value="@if($pdf){{$pdf->f4}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ถือบัตร</label>
                                                <input class="form-control" type="text" name="f5" value="@if($pdf){{$pdf->f5}}@endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f6" value="@if($pdf){{$pdf->f6}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">บ้านเลขที่</label>
                                                <input class="form-control" type="text" name="f7" value="@if($pdf){{$pdf->f7}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f8" value="@if($pdf){{$pdf->f8}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f9" value="@if($pdf){{$pdf->f9}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่</label>
                                                <input class="form-control" type="text" name="f10" value="@if($pdf){{$pdf->f10}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" type="text" name="f11" value="@if($pdf){{$pdf->f11}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" type="text" name="f12" value="@if($pdf){{$pdf->f12}}@endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f13" value="@if($pdf){{$pdf->f13}}@endif"> 
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