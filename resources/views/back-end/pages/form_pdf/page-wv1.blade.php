<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารwv1</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv1</a></li>
                        <li class="breadcrumb-item">เอกสารwv1</li>
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
                                                <label for="position">ทำที่</label>
                                                <input class="form-control" type="text" name="f1"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">วัน/เดือน/ปี</label>
                                                <input class="form-control" type="date" name="f2"> 
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
                                        <h4>ผู้มอบอำนาจ</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">คำนำหน้า</label>
                                                <select class="form-control" name="f3" id="f3">
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="position">ชื่อ-นามสกุล</label>
                                                <input class="form-control" type="text" name="f4"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อายุ</label>
                                                <input class="form-control" type="text" name="f5"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เชื้อชาติ</label>
                                                <input class="form-control" type="text" name="f6"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f7"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถือบัตร</label>
                                                <input class="form-control" type="text" name="f8"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f9"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อยู่บ้านเลขที่</label>
                                                <input class="form-control" type="text" name="f10"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f11"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f12"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่ที่</label>
                                                <input class="form-control" type="text" name="f13"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" type="text" name="f14"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" type="text" name="f15"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f16"> 
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
                                        <h4>ผู้รับมอบอำนาจ</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">คำนำหน้า</label>
                                                <select class="form-control" name="f17" id="">
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="position">ชื่อ-นามสกุล</label>
                                                <input class="form-control" type="text" name="f18"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อายุ</label>
                                                <input type="text" class="form-control" name="f9">
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="position">เชื้อชาติ</label>
                                                <input class="form-control" type="text" name="f20"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f21"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถือบัตร</label>
                                                <input class="form-control" type="text" name="f22"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f23"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อยู่บ้านเลขที่</label>
                                                <input class="form-control" type="text" name="f24"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f26"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่ที่</label>
                                                <input class="form-control" type="text" name="f27"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" type="text" name="f28"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" type="text" name="f29"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f30"> 
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>เป็นผู้มีอำนาจ</label>
                                                <textarea row="5" name="31" class="form-control"></textarea>
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
                                                <input type="text" hidden name="pages" value="31">
                                                <input type="text" hidden name="title_id" value="{{$title_id}}">
                                                <input type="text" hidden name="pdf_id" value="@if($pdf) {{$pdf->id}} @endif">
                                                <input type="text" hidden name="pdf_type" value="wv1">
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