<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">เอกสารwv4</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เอกสารwv4</a></li>
                        <li class="breadcrumb-item">เอกสารwv4</li>
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
                                                <label for="">เลขรับที่</label>
                                                <input class="form-control" type="text" name="f5">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ที่พัก</label>
                                                <input class="form-control" type="text" name="f6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ข้าพเจ้า</label>
                                                <input class="form-control" type="text" name="f7">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">คำนำหน้า</label>
                                                <select class="form-control" name="f1" id="f1">
                                                    <option hidden>กรุณาเลือกข้อมูล</option>
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                                
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อ-สกุล</label>
                                                <input class="form-control" type="text" name="f8">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สัญชาติ</label>
                                                <input class="form-control" type="text" name="f9">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เกิดวันที่</label>
                                                <input class="form-control" type="text" name="f10">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อายุ</label>
                                                <input class="form-control" type="text" name="f11">
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f12">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f13">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ซอย</label>
                                                <input class="form-control" type="text" name="f14">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ถนน</label>
                                                <input class="form-control" type="text" name="f15">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f16">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f17">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">โทรสาร</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ไปรษณีย์อิเล็กทรอนิกส์</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label for="">เอกสารแสดงการได้รับอนุญาตให้อยู่ในรายอาณาจักร</label>
                                                <select class="form-control">
                                                    <option>หนังสือเดินทาง</option>
                                                    <option>เอกสารใช้แทนหนังสือเดินทาง</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้โดย</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ประเทศ</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้วันที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ตรวจลงตราประเภท</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้ที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้วันที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เดินมาถึงวันที่</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ได้รับอนุญาติจากพนักงานเจ้าหน้าที่ตรวจคนเข้าเมือง ณ ที่ทำการตรวจคนเข้าเมือง</label>
                                                <input class="form-control" type="text" name="f18">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ให้อยู่ถึงวันที่</label>
                                                <input class="form-control" type="text" name="f18">
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
                                        <h4>1</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้วันที่</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ออกให้ที่</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ใช้ได้ถึงวันที่</label>
                                                <input class="form-control" type="text" name="f19"> 
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
                                        <h4>1</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">ประเภทที่ขออนุญาต</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ลักษณะงาน</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อนายจ้าง</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>   
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ซอย</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ถนน</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">โทรสาร</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label for="">เลขที่</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">หมู่ที่/อาคาร</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ซอย</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ถนน</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ตำบล/แขวง</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">อำเภอ/เขต</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">จังหวัด</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">รหัสไปรษณีย์</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">โทรศัพท์</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">โทรสาร</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>
                                            <hr>      
                                            <div class="form-group col-md-6">
                                                <label for="">ระยะเวลาขอต่อใบอนุญาตทำงาน</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ตั้งแต่วันที่</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">ถึงวันที่</label>
                                                <input class="form-control" type="text" name="f19"> 
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
                                        <h4>1</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาหนังสือเดินทาง หรือ </label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาเอกสารใช้แทนหนังสือเดินทาง</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาหลักฐานการอนุญาตให้เข้ามาในราชอาณาจักร</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">หนังสือรับรองการจ้างของผู้ซึ่งจะเป็นนายจ้างโดยระบุเหตุผลที่ไม่จ้างบุคคลสัญชาติไทยเข้าทำงาน</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">ใบรับรองของผู้ประกอบวิชาชีพเวชกรรมตามกฏหมายว่าด้วยวิชาชีพเวชกรรมที่รองรับว่าผู้ยื่นคำขอไม่เป็นบุคคลวิกลจริต
                                                หรือมีจิตฟั่นเฟือนไม่สมประกอบและไม่เป็นโรคตามที่กำหนดไว้ในกฏกระทรวงซึ่งออกตามความในมาตรา ๖๔/๑</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาสัญญาจ้าง</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">ใบอนุญาตทำงาน</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">กรณีนายจ้างเป็นบุคคลธรรมดา</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาเอกสารที่ทางรายการออกให้เพื่อใช้ยืนยันตัวตนของผู้ซึ่งเป็นนายจ้างหรือ</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาหนุงสือเดินทางของผู้ซึ่งเป็นนายจ้าง หรือ</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาใบสำคัญถิ่นที่อยู่ของผู้ซึ่งจะเป็นนายจ้าง</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาใบอนุญาตหรือหนังสือรับรองที่ส่วนราชการออกให้เพื่อแสดงว่ากิจการของผู้ซึ่งจะเป็นนายจ้างได้จดทะเบียน
                                                หรือได้รับอนุญาตให้ตัดคั้งหรือได้รับการรับรองโดยถูกต้องตามกฏหมาย โดยแสดงประเภทกิจการด้วย(ถ้ามี)</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">กรณีนายจ้างเป็นนิติบุคคล</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาใบอนุญาตหรือหนังสือรับรองที่ส่วนราชการออกให้เพื่อแสดงว่ากิจการของผู้ซึ่งจะเป็นนายจ้างได้จดทะเบียน
                                                หรือได้รับอนุญาตให้ตัดคั้งหรือได้รับการรับรองโดยถูกต้องตามกฏหมาย โดยแสดงประเภทกิจการด้วย</label>
                                                <input class="form-control" type="text" name="f19"> 
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
                                        <h4>เฉพาะกรณีนายจ้างให้คนต่างด้าวทำงานขายของหน้าร้าน</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาทะเบียนพาณิชย์ หรือ</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาใบอนุญาตหรือหนังสือรับรองให้ประกอบพาณิชยกิจตามกฏหมายอื่น หรือ</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาเอกสารที่ทางราชการออกให้เพื่ออนุญาตหรือรับรองให้ประกอบพาณิชยกิจตามกฏหมายอื่น
                                                </label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>      
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาแบบแสดงรายการภาษีเงินได้บุคคลธรรมดาหรือภาษีเงินได้นิติบุคคล</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">สำเนาแบบรายการแสดงการส่งเงินสมทบ หรือ</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>     
                                            <div class="form-group col-md-6">
                                                <label for="">หนังสือรับรองการจ้างงานคุยไทย</label>
                                                <input class="form-control" type="text" name="f19"> 
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
                                        <h4>เฉพาะเจ้าหน้าที่</h4>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">รายการเอกสารหลักฐาน</label>
                                                <input class="form-control" type="text" name="f19"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ครบถ้วน</label>
                                                <input class="form-control" type="text" name="f20"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ไม่ครบถ้วน</label>
                                                <input class="form-control" type="text" name="f21"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เห็นควรอนุญาต</label>
                                                <input class="form-control" type="text" name="f22"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เห็นควรไม่อนุญาต</label>
                                                <input class="form-control" type="text" name="f23"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ความเห็น</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label>อนุญาต</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>อนุญาตโดยมีเงื่อนไข</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ไม่อนุญาต เพราะ</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label>ใบเสร็จเล่มที่</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>เลขที่</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>วันที่</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <hr>
                                            <div class="form-group col-md-6">
                                                <label>ใบอนุญาตทำงานเล่มที่</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>เลขที่</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>ออกให้เมื่อ</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>จังหวัด</label>
                                                <input class="form-control" type="text" name="f25">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>หมายเลขประจำตัวคนต่างด้าว</label>
                                                <input class="form-control" type="text" name="f25">
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