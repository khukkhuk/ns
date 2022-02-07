<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">จัดทำ บัตรชมพู1 </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">เพิ่มข้อมูลบัตรชมพู</a></li>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    เลือกรายการ
                                                    <select class="form-control text-center" name="select_type" id="select_type">
                                                        <option value="pinkcard" selected >บัตรชมพู</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    เลือกนายจ้าง
                                                    <select class="form-control text-center" name="select_employer" id="select_employer">
                                                        <option value="" hidden>เลือกนายจ้าง</option>
                                                        @foreach($rows as $row)
                                                            <option value="{{$row->id}}">{{$row->prefix_th}}{{$row->name_th}} {{$row->surname_th}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                    
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    เลือกแรงงาน
                                                    <select class="form-control text-center" name="select_employee" id="select_employee">
                                                        <option value="" hidden>เลือกแรงงาน</option>
                                                    </select>     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <input type="text" name="store" value="insert" hidden>
                                    <button class="btn btn-primary" type="submit" name="signup" value="Create">บันทึกข้อมูล</button>
                                    <a class="btn btn-danger" href="{{url("$segment/$folder")}}">ยกเลิก</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                                    </form>
    <script type="text/javascript">
        
    </script>
</div>
