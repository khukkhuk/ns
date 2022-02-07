<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">หนังสือแสดงความต้องการ</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item">หนังสือแสดงความต้องการ</li>
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
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-12">ข้อมูลนายจ้าง</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ชื่อนายจ้าง/สถานประกอบการ</label>
                                                <input class="form-control" type="text" name="f1"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ประเภทกิจการ</label>
                                                <input class="form-control" type="text" name="f2">
                                            </div>
                                            <div class="form-group col-md-12">ข้อมูลนายจ้าง</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ที่อยู่</label>
                                                <input class="form-control" type="text" name="f3"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่</label>
                                                <input class="form-control" type="text" name="f4"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f5"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f6"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" type="text" name="f7"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" type="text" name="f8"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f9"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f10"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">มือถือ</label>
                                                <input class="form-control" type="text" name="f11"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรสาร</label>
                                                <input class="form-control" type="text" name="f12"> 
                                            </div>


                                            <div class="form-group col-md-12">2.ตำแหน่งงานที่ต้องการจ้าง</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลือกตำแหน่งที่ต้องการ</label>
                                                <select class="form-control" name="f13" id="f13">
                                                    <option value="1">งานกรรมกร</option>
                                                    <option value="2">งานรับใช้ในบ้าน</option>
                                                </select> 
                                            </div>
                                            <div class="form-group col-md-12">3.จำนวนคนงานที่ต้องการ</div>
                                            <div class="form-group col-md-4">
                                                <label for="position">จำนวน</label>
                                                <input class="form-control" type="text" name="f14"> 
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="position">ชาย</label>
                                                <input class="form-control" type="text" name="f15"> 
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="position">หญิง</label>
                                                <input class="form-control" type="text" name="f16"> 
                                            </div>
                                            <div class="form-group col-md-12">4.ระยะเวลาจ้าง</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลือกวัน/เดือน/ปี</label>
                                                <input class="form-control" type="text" name="f17"> 
                                            </div>
                                            <div class="form-group col-md-12">5.สถานที่ทำงาน</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ที่อยู่</label>
                                                <input class="form-control" type="text" name="f18"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f20"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f21"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล</label>
                                                <input class="form-control" type="text" name="f22"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ</label>
                                                <input class="form-control" type="text" name="f23"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f24"> 
                                            </div>
                                            <div class="form-group col-md-12">6.ต้องการนำแรงงานเข้ามาทำงานทางด่านตรวจคนเข้าเมือง</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลือกสถานที่</label>
                                                <select class="form-control" name="f25" id="f25">
                                                    <option value="1">บ้านผักกาด อำเภอโป่งน้ำร้อน</option>
                                                    <option value="2">บ้านแหลม อำเภอโป่งน้ำร้อน</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">7.ต้องการรับแรงงานวันที่</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลือกวัน/เดือน/ปี</label>
                                                <input class="form-control" type="text" name="f26"> 
                                            </div>
                                            <div class="form-group col-md-12">8.อัตราค่างจ้าง/เงินเดือน</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ระบุค่าจ้าง/เงินเดือน</label>
                                                <input class="form-control" type="text" name="f27"> 
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
                                                <input type="text" hidden name="pages" value="27">
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