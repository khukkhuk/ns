<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">บต. 30</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item">บต. 30</li>
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
                                        <h4>ข้อมูลคนต่างด้าว</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">คำนำหน้า</label>
                                                <select class="form-control" name="f[]" id="">
                                                    <option hidden>กรุณาเลือกข้อมูล</option>
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                                
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อ</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สกุล</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เกิดวันที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อายุ</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ซอย</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ถนน</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">โทรสาร</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ไปรษณีย์อิเล็กทรอนิกส์</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label for="">เอกสารแสดงการได้รับอนุญาตให้อยู่ในรายอาณาจักร</label>
                                                <select class="form-control">
                                                    <option value="0">หนังสือเดินทาง</option>
                                                    <option value="1">เอกสารใช้แทนหนังสือเดินทาง</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้โดย</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ประเทศ</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้วันที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตรวจลงตราประเภท</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้ที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้วันที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เดินทางมาถึงวันที่</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ได้รับอนุญาติจากพนักงานเจ้าหน้าที่ตรวจคนเข้าเมือง ณ ที่ทำการตรวจคนเข้าเมือง</label>
                                                <input class="form-control" type="text" name="f[]">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ให้อยู่ถึงวันที่</label>
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
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                        <h4>ข้อมูลการทำงาน</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">ใบอนุญาตทำงานปัจจุบัน เลขที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้วันที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้ที่ (จังหวัด)</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ใช้ได้ถึงวันที่</label>
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
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                        <h4>ข้อมูลการขออนุญาต</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">ประเภทที่ขออนุญาต</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ลักษณะงาน</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อนายจ้าง</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ซอย</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ถนน</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">โทรสาร</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ซอย</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ถนน</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">โทรสาร</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>
                                            <hr>      
                                            <div class="form-group col-md-6">
                                                <label for="">ระยะเวลาขอต่อใบอนุญาตทำงาน</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ตั้งแต่วันที่</label>
                                                <input class="form-control" type="text" name="f[]"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ถึงวันที่</label>
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
                                                <input type="text" hidden name="pages" value="100">
                                                <input type="text" hidden name="title_id" value="{{$title_id}}">
                                                <input type="text" hidden name="pdf_id" value="@if(isset($pdf)) {{$pdf->id}} @endif">
                                                <input type="text" hidden name="pdf_type" value="wv4">
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