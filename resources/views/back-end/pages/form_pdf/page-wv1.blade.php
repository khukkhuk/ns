<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">หนังสือมอบอำนาจ</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <!-- <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">หนังสือมอบอำนาจ</a></li> -->
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
<div class="row">
    <div class="col-8">
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
                                            <div class="form-group col-md-3">
                                                <label for="">คำนำหน้า</label>
                                                <select class="form-control" name="f[]" id="f3">
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                            </div>      
                                            <div class="form-group col-md-3">
                                                <label for="position">ชื่อ</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">นามสกุล</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">อายุ</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="position">เชื้อชาติ</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">ถือบัตร</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="position">อยู่บ้านเลขที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">หมู่ที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f[]"> 
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
    <div class="col-8">
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
                                            <div class="form-group col-md-2">
                                                <label for="">คำนำหน้า</label>
                                                <select class="form-control" name="f[]" id="">
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                            </div>      
                                            <div class="form-group col-md-4">
                                                <label for="position">ชื่อ-นามสกุล</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="">อายุ</label>
                                                <input type="text" class="form-control" name="f[]">
                                            </div>      
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="position">เชื้อชาติ</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">ถือบัตร</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="position">อยู่บ้านเลขที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">หมู่ที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>เป็นผู้มีอำนาจ</label>
                                                <textarea row="5" col="5" name="f[]" class="form-control"></textarea>
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
                                                <input type="text" hidden name="pages" value="50">
                                                <input type="text" hidden name="type" value="f">
                                                <input type="text" hidden name="title_id" value="{{$title_id}}">
                                                <input type="text" hidden name="pdf_id" value="@if(isset($pdf)) {{$pdf->id}} @endif">
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