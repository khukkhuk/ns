<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารbd3</h4>

                <div class="page-title-right">
                    <ul class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv3</a></li>
                        <li class="breadcrumb-item">เอกสารbd3</li>
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
                                                <label>เลขรับที่</label>
                                                <input class="form-control" type="text" name="f1" value="@if(isset($pdf)) {{$pdf->f1}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>วันที่รับ</label>
                                                <input class="form-control" type="date" name="f2" value="@if(isset($pdf)){{$pdf->f2}}@endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อผู้รับ</label>
                                                <input class="form-control" type="text" name="f3" value="@if(isset($pdf)) {{$pdf->f3}} @endif">
                                            </div>
                                            <div class="form-group col-md-12">1.ข้อมูลคนต่างด้าว</div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อนามสกุล</label>
                                                <input class="form-control" type="text" name="f4" value="@if(isset($pdf)) {{$pdf->f4}} @else {{$resulte->name}} {{$resulte->surname}} @endif">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f5" value="กัมพูชา"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เกิดวันที่</label>
                                                <input class="form-control" type="date" name="f6" value="@if(isset($pdf)){{$pdf->f6}}@else{{$resulte->b_date}}@endif" > 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อายุ</label>
                                                <input class="form-control" type="text" name="f7"> 
                                            </div>
                                            <div class="form-group col-md-12">2.ข้อมูลที่อยู่</div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f8" value=""> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f9"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ซอย</label>
                                                <input class="form-control" type="text" name="f10"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ถนน</label>
                                                <input class="form-control" type="text" name="f11"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f12"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f13"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">จังหวัด</label>
                                                <input class="form-control" type="text" name="f14"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f15"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f16"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">โทรสาร</label>
                                                <input class="form-control" type="text" name="f17"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ไปรษณีย์อิเล็กทรอนิกส์</label>
                                                <input class="form-control" type="text" name="f18"> 
                                            </div>
                                            <div class="form-group col-md-12">3.เอกสารแสดงการได้รับอนุญาต</div>
                                            <div class="form-group col-md-12">
                                                <label for="position">บัตรผ่านแดน</label>
                                                <input type="radio" name="f19" value="true"> 

                                                <label for="position">เอกสารอื่นที่อธิกรมการจัดหางานกำหนด</label>
                                                <input type="radio" name="f20" value="true"> 
                                                <label for=""></label>
                                                <input class="form-control" style="width:50%" type="text" name="f21"> 
                                            </div>
                                            <div class="form-group col-md-12"></div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f22" value="@if(isset($pdf)) {{$pdf->f22}} @else {{$resulte->passport_number}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ออกให้โดย</label>
                                                <input class="form-control" type="text" name="f23" value="@if(isset($pdf)) {{$pdf->f23}} @else {{$resulte->passport_place}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ประเทศ</label>
                                                <input class="form-control" type="text" name="f24" value="@if(isset($pdf)) {{$pdf->f24}} @else {{$resulte->passport_country}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ออกให้วันที่</label>
                                                <input class="form-control" type="date" name="f25" value="@if(isset($pdf)) {{$pdf->f25}} @else {{$resulte->passport_create}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="date" name="f26" value="@if(isset($pdf)) {{$pdf->f26}} @else {{$resulte->passport_expire}} @endif"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ตรวจลงตราประเภท</label>
                                                <input class="form-control" type="text" name="f27" > 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เลขที่</label>
                                                <input class="form-control" type="text" name="f28"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ออกให้พี่</label>
                                                <input class="form-control" type="text" name="f29"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ออกให้วันที่</label>
                                                <input class="form-control" type="date" name="f30"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="date" name="f31"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">เดินทางมาถึงราชอาณาจักร เมื่อวันที่</label>
                                                <input class="form-control" type="date" name="f32"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ได้รับอนุญาตจากพนักงานเจ้า ณ</label>
                                                <input class="form-control" type="text" name="f33"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="position">ให้อยู่ในราชอาณาจักร ถึงวันที่</label>
                                                <input class="form-control" type="date" name="f34"> 
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
                                        <h4>2.ข้อมูลการทำงาน</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="radio" name="f35">
                                                <label>ไม่เคยมีใบอนุญาตทำงาน</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="radio" name="f36">
                                                <label>เคยมีใบอนุญาตทำงาน เลขที่</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>เลข</label>
                                                <input class="form-control" type="text" name="f37">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ออกให้ที่(จังหวัด)</label>
                                                <input class="form-control" type="text" name="f38">
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
                                        <h4>3.ข้อมูลการขออนุญาต</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>ประเภทงานที่ขออนุญาต</label>
                                                <input class="form-control" type="text" name="f39">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ลักษณะงาน</label>
                                                <input class="form-control" type="text" name="f40">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ชื่อนายจ้าง</label>
                                                <input class="form-control" type="text" name="f41">
                                            </div>
                                            <div class="form-group col-md-12">1.ที่อยู่นายจ้าง</div>
                                            <div class="form-group col-md-6">
                                                <label>ที่อยู่ เลขที่</label>
                                                <input class="form-control" type="text" name="f42">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f43">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ซอย</label>
                                                <input class="form-control" type="text" name="f44">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ถนน</label>
                                                <input class="form-control" type="text" name="f45">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f46">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f47">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>จังหวัด</label>
                                                <input class="form-control" type="text" name="f48">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f49">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>โทรสาร</label>
                                                <input class="form-control" type="text" name="f50">
                                            </div>
                                            <div class="form-group col-md-12">2.ที่อยู่คนงานต่างด้าว</div>
                                            <div class="form-group col-md-6">
                                                <label>ที่อยู่ เลขที่</label>
                                                <input class="form-control" type="text" name="f51">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f52">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ซอย</label>
                                                <input class="form-control" type="text" name="f53">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ถนน</label>
                                                <input class="form-control" type="text" name="f54">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f55">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f56">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>จังหวัด</label>
                                                <input class="form-control" type="text" name="f57">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f58">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>โทรสาร</label>
                                                <input class="form-control" type="text" name="f59">
                                            </div>
                                            <div class="form-group col-md-12">3.ระยะเวลาการขออนุญาตทำงาน/ขอต่อใบอนุญาตทำงาน</div>
                                            <div class="form-group col-md-6">
                                                <label>เลือกวันที่</label>
                                                <input class="form-control" type="text" name="f60">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ตั้งแต่วันที่</label>
                                                <input class="form-control" type="text" name="f61">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>จนถึงวันที่</label>
                                                <input class="form-control" type="text" name="f62">
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
                                        <h4>4.เอกสารและหลักฐาน</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>สำเนาบัตรผ่านแดน หรือ</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="radio" name="f">
                                                <label>สำเนาเอกสารอื่นที่อธิบดีกรมการจัดหางานประกาศกำหนด</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input class="form-control" type="text" name="f">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>สำเนาหลักฐานการอนุญาตให้เข้ามาในราชอาณาจักร</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>ใบรับรองของผู้ประกอบวิชาชีพเวชกรรมตามกฏหมายว่าด้วยวิชาชีพเวชกรรมที่รับรองว่าผู้ยื่นคำขอไม่เป็นบุคคลวิกลจริต</label>
                                                <label for="">หรือมีจิตฟั่นเฟือนไม่สมประกอบและไม่เป็นโรคตามที่กำหนดไว้ในกฎกระทรวงซึ่งออกตามความในมาตรา ๖๔/๑</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>รูปถ่าย ขนาด ๓ x ๔ ชม. จำนวน ๓ รูป</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>สำเนาสัญญาจ้าง</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>หนังสือรับรองการจ้างของผู้ซึ่งจะเป็นนายจ้างโดยระบุเหตุผลที่ไม่จ้างบุคคลสัญชาติไทยทำงาน</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>กรณีนายจ้างเป็นบุคคลธรรมดา</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>สำเนาเอกสารที่ทางราชการออกให้เพื่อใช้ยืนยันตัวตนของผู้ซึ่งจะเป็นนายจ้าง หรือ</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>สำเนาหนังสือเดินทางของผู้ซึ่งจะเป็นนายจ้าง หรือ</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>สำเนาใบสำคัญถิ่นที่อยู่ของผู้ซึ่งจะเป็นนายจ้าง</label>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>กรณีนายจ้างเป็นนิติบุคคล</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="radio" name="f">
                                                <label>สำเนาใบอนุญาตหรือหนังสือรับรองที่ส่วนราชการออกให้เพื่อแสดงว่ากิจการของผู้ซึ่งจะเป็นนายจ้างได้จดทะเบียน</label>
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
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                        <h4>เฉพาะเจ้าหน้าที่</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-12">รายการเอกสารหลักฐาน</div>
                                            <div class="form-group col-md-3">
                                                <input type="radio" name="f">
                                                <label>ครบถ้วน</label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="radio" name="f">
                                                <label>ไม่ครบถ้วน</label>
                                            </div>
                                            <div class="form-group col-md-12">ความเห็น</div>
                                            <div class="form-group col-md-3">
                                                <input type="radio" name="f">
                                                <label>เห็นควรอนุญาต</label>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="radio" name="f">
                                                <label>เห็นควรไม่อนุญาต</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>    
                                        <div class="row">
                                            <div class="form-group col-md-12">คำสั่งนายทะเบียน</div>
                                            <div class="form-group col-md-2">
                                                <input type="radio" name="f">
                                                <label>อนุญาต</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input class="form-control" type="text" name="f">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-2">
                                                <input type="radio" name="f">
                                                <label>อนุญาตโดยมีเงื่อนไข</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input class="form-control" type="text" name="f">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-2">
                                                <input type="radio" name="f">
                                                <label>ไม่อนุญาต เพราะ</label>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input class="form-control" type="text" name="f">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">บันทึกข้อมูลการรับเงิน</div>
                                            <div class="form-group col-md-12">
                                                <label>ใบเสร็จเล่มที่</label>
                                                <input class="form-control" type="text" name="f">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="">วันที่</label>
                                                <input class="form-control" type="date" name="f">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">บันทึกข้อมูลการอนุญาตทำงาน</div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>ใบอนุญาตทำงานเล่มที่</label>
                                                <input class="form-control" type="text" name="f">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้เมื่อ</label>
                                                <input class="form-control" type="date" name="f">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <input class="form-control" type="date" name="f">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">หมายเลขประจำตัวคนต่างด้าว</label>
                                                <input class="form-control" type="date" name="f">
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