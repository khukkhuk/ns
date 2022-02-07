<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">สร้างรายการข้อมูล</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">สร้างรายการข้อมูล </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="menuForm" method="post" action="" onsubmit="return check_add();">                        
                                        @csrf
                                        <hr>   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="type">ประเภทบิล</label>
                                                        <select name="type" id="type" required class="form-control">
                                                            <option value="" hidden>----</option>
                                                            <option value="บิลรายรับ">บิลรายรับ</option>
                                                            <option value="บิลรายจ่าย">บิลรายจ่าย</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="category">หมวดหมู่</label>
                                                        <select class="form-control" required name="category" id="category">
                                                            <option value="" hidden>----</option>
                                                            <option value="mou">mou</option>
                                                            <option value="บัตรชมพู">บัตรชมพู</option>
                                                            <option value="BorderPass">BorderPass</option>
                                                            <option value="ต่อ work-visa">ต่อ work-visa</option>
                                                            <option value="อื่นๆ">อื่น</option>
                                                        </select>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="name">ชื่อรายการ</label>
                                                        <input type="text" required class="form-control" name="name" id="name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="cost">ราคา/หน่วย</label>
                                                        <input type="text" required class="form-control" name="cost" id="cost">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <input type="text" value="insert" id="status" name="status" hidden>
                                            <button class="btn btn-primary" type="submit" name="signup" value="Create">บันทึกข้อมูล</button>
                                            <a class="btn btn-danger" href="{{url("$segment/$folder")}}">ยกเลิก</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
    </script>
</div>
