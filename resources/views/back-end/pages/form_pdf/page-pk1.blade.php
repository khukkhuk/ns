<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารpk1</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv3</a></li>
                        <li class="breadcrumb-item">เอกสารpk1</li>
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
                                        <h4>1</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">จัดทำขึ้นเมื่อ</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="position">ณ</label>
                                                <input class="form-control" type="text" name="f20"> 
                                            </div>
                                            
                                            <div class="form-group col-md-12">ข้อมูลนายจ้าง</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ชื่อ</label>
                                                <input class="form-control" type="text" name="f20"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>นามสกุล</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ที่อยู่ปัจจุบัน</label>
                                                <input class="form-control" type="text" name="f22"> 
                                            </div>
                                            <div class="form-group col-md-12">ข้อมูลแรงงาน</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ชื่อ</label>
                                                <input class="form-control" type="text" name="f23"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>นามสกุล</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ที่อยู่ปัจจุบัน</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>

                                            <div class="form-group col-md-12">1.ตำแหน่งและอัตราค่าจ้าง</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำแหน่ง</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อัตราค่าจ้าง</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ต่อ</label>
                                                <select name="" id="">
                                                    <option value="">ชั่วโมง</option>
                                                    <option value="">วัน</option>
                                                    <option value="">เดือน</option>
                                                </select> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โดยจะออกค่าจ้างทุกวันที่</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-12">2.ระยะเวลาการจ้างและสถานที่ทำงาน</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ระยะเวลาการจ้างมีกำหนด</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ต่อ</label>
                                                <select name="" id="">
                                                    <option value="">เดือน</option>
                                                    <option value="">ปี</option>
                                                </select> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สถานที่ทำงาน</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-12">3.ชั่วโมงการทำงาน</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ชั่วโมงการทำงานปกติไม่เกิน</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ต่อ</label>
                                                <select name="" id="">
                                                    <option value="">วัน</option>
                                                </select> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ใน 1 สัปดาห์ทำงาน</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-12">4.วันหยุด</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">มีวันหยุดประจำสัปดาห์โดยได้รับค่าจ้างสัปดาห์ละ</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">มีวันหยุดตามประเพณีไทยโดยได้รับค่าจ้างปีละ</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เมื่อลูกจ้างทำงานครบ 1 ปี นายจ้างตกลงจัดให้ลูกจ้างหยุดพักผ่อนประจำปี โดยได้รับค่าจ้างเป็นเวลา</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-12">5.ค่าล่วงเวลาและค่าจ้างในวันหยุด</div>
                                            
                                            <div class="form-group col-md-6">
                                                <label for="position">ค่าล่วงเวลาในวันปกติ</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ค่าล่วงเวลาในวันหยุด</label>
                                                <input class="form-control" type="text" name="f25"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ค่าล่วงเวลาในวันหยุด</label>
                                                <select name="" id="">
                                                    <option value="">ชั่วโมง</option>
                                                    <option value="">วัน</option>
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
                                                <input type="text" hidden name="pages" value="30">
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