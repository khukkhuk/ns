<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">แก้ไขข้อมูลผู้ติดตาม</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder")}}">ข้อมูลบัตรชมพู</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลผู้ติดตาม</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


                                        <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                        
                                    <button OnClick="manage_follower()" class="btn btn-success">เพิ่มข้อมูล</button>

                                     <input type="text" value="{{$employee_id}}" hidden name="employee_id">
                                     <table id="sort_table" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th style="width:1%" class="text-center">#</th>
                                            <th style="width:5%">รูป</th>
                                            <th style="width:10%">ชื่อ-นามสกุล</th>
                                            <th class="text-center" style="width:1%">อายุ</th>
                                            <th style="width:3%" class="text-center">วันเดือนปีเกิด</th>
                                            <th style="width:5%" class="text-center">จัดการ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if(@$rows)
                                            @foreach(@$rows as $key => $row)
                                            <tr role="row" class="odd" data-row="{{ $key + 1 }}" data-id="{{ $row->id }}">
                                                <td class="text-center">{{$key+1}}</td>
                                                <td><img width="200" src="@if($row->image) {{$row->image}} @else noimage.jpg @endif" alt=""></td>
                                                <td>{{$row->prefix}} {{$row->name}} {{$row->surname}}</td>
                                                <td>{{$row->age}}</td>
                                                <td>{{$row->b_date}}</td>
                                                <td class="text-center">
                                                    <button OnClick="manage_follower({{$row->id}})" class="btn btn-sm btn-info" title="Edit"><i class="far fa-edit"></i></button>                                                
                                                    <a href="javascript:" class="btn btn-sm btn-danger deleteItem" data-id="{{$row->id}}" title="Delete"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        
                                        </tbody>
                                    </table>


                                
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <form id="edit_follower" action="" method="POST" enctype='multipart/form-data'>
                                        @csrf
                        <div class="col-8" id="sub_table_follower" hidden>
                            <div class="row">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 id="sub_title"></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-12">
                                            <div>
                                                <div class="col-12 col-xs-12 col-md-12 col-xl-12">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <h6>ไฟล์รูปภาพประกอบกรณีมีให้ผู้ประเมินรับชม</h6>
                                                            <img src="noimage.jpg" class="img-thumbnail" id="preview" style="width:100%">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 col-xs-12 col-md-12 col-xl-12">
                                                            <small class="help-block">*รองรับไฟล์ <strong class="text-danger">(jpg, jpeg, png)</strong> เท่านั้น</small>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" onchange="loadFile(event)" name="image" id="image" accept="image/*" />
                                                                <label class="custom-file-label" for="image">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">คำนำหน้า</label>
                                                    <select name="prefix" class="form-control" id="edit_prefix">
                                                        <option value="" hidden>กรุณาเลือก</option>
                                                        <option value="นาย">นาย</option>
                                                        <option value="นาง">นาง</option>
                                                        <option value="นางสาว">นางสาว</option>
                                                        <option value="เด็กชาย">เด็กชาย</option>
                                                        <option value="เด็กหญิง">เด็กหญิง</option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label for="">ชื่อ</label>
                                                    <input class="form-control" type="text" name="name" id="edit_name">
                                                </div>
                                                <div class="col-4">
                                                    <label for="">นามสกุล</label>
                                                    <input class="form-control" type="text" name="surname" id="edit_surname">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="">อายุ</label>
                                                    <input class="form-control" type="text" name="age" id="edit_age">
                                                </div>
                                                <div class="col-8">
                                                    <label for="">วันเดือนปีเกิด</label>
                                                    <input class="form-control" type="date" name="b_date" id="edit_b_date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer"  class="pull-right" style="text-align:right">
                                        <input type="text" hidden value="{{$employee_id}}" name="employee_id" id="employee_id">
                                        <input type="text" hidden value="{{$employer_id}}" name="employer_id" id="employer_id">
                                        <input type="text" hidden value="" name="follower_id" id="follower_id">
                                        <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success">
                                        <input type="reset" value="ยกเลิก" class="btn btn-danger">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script type="text/javascript">
        
    </script>
</div>
