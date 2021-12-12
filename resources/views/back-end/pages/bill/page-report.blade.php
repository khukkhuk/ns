<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">สรุปค่าใช้จ่าย</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">สรุปค่าใช้จ่าย </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="radio" checked value="1" class="myLike" name="during"> สรุปรายรับ-จ่าย รายวัน
                                            <input type="radio" value="2" class="myLike" name="during"> สรุปรายรับ-จ่าย รายเดือน
                                            <input type="radio" value="3" class="myLike" name="during"> สรุปรายรับ-จ่าย รายปี
                                        </div>
                                    </div>

                                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                                  
                                        <input type="text" value="{{$segment}}" id="segment" hidden>
                                        <input type="text" value="{{$folder}}" id="folder" hidden>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    
                    
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
