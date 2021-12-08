<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารpk6</h4>

                <div class="page-title-right">
                    <ul class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv3</a></li>
                        <li class="breadcrumb-item">เอกสารpk6</li>
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
                                                <label for="">ชื่อนายจ้าง</label>
                                                <input class="form-control" type="text" name="f1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ที่อยู่นายจ้าง</label>
                                                <input class="form-control" type="text" name="f2">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อแรงงาน</label>
                                                <input class="form-control" type="text" name="f3">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ที่อยู่แรงงาน</label>
                                                <input class="form-control" type="text" name="f4">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตำแหน่งงาน</label>
                                                <input class="form-control" type="text" name="f5">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อัตราค่าจ้าง</label>
                                                <input class="form-control" type="text" name="f6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ระยะเวลาจ้าง</label>
                                                <input class="form-control" type="text" name="f7">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สถานที่ทำงาน</label>
                                                <input class="form-control" type="text" name="f8">
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