<div class="fadeOut">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">บันทึกบิลรายรับ</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ url("$segment") }}">หน้าแรก</a></li>
                        <li class="breadcrumb-item"><a href="{{ url("$segment/$folder") }}">ข้อมูลบิล</a></li>
                        <li class="breadcrumb-item">บันทึกบิลรายรับ</li>
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
    <div class="col-8">
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
                                                <label for="position">วันที่ออกเอกสาร</label>
                                                <input class="form-control" required type="date" name="bill_date"  id="bill_date"> 
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อนายจ้าง</label>
                                                <input type="text" hidden id="employee_data">
                                                <select name="selectemployer" class="selecttype" id="selectemployer" aria-selected="true" hidden>
                                                    <option value="" hidden>--</option>
                                                    @foreach($cs_rows as $row)
                                                    <option value="{{$row->id}}">{{$row->name_th}} {{$row->surname_th}}</option>
                                                    @endforeach
                                                </select>
                                                <input class="form-control" hidden required type="text" name="company"  id="company" value="บริษัท เอ็น เอส เลเบอร์ จํากัด691 ถ.ท่าแฉลบ ต.ตลาด อ.เมือง จ.จันทบุรี 22000"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">ชื่อลูกค้า</label>
                                                <input type="text" name="name" id="name" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">เบอร์โทร</label>
                                                <input type="text" name="tel_number" id="tel_number" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">หมายเหตุ</label>
                                                <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="">ผู้รับเงิน</label>
                                                <input type="text" name="payee" id="payee" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">ผู้จ่ายเงิน</label>
                                                <input type="text" name="payer" id="payer" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <hr>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

    <div class="col-12">
        <div class="card">
            <div class="card-body">
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-12">
                            
                            <button type="button" class="btn btn-info" OnClick="addbill()">เพิ่มข้อมูล</button>
                            <input type="number" hidden name="maxline" id="maxline" value="1">
                                <table style="width:100%" class="table text-center">
                                    <tr style="background-color:">
                                        <th style="width:5%">จำนวน</th>
                                        <th style="width:10%">รายการ</th>
                                        <th style="width:10%">เลือกแรงงาน</th>
                                        <th style="width:5%">หน่วยละ</th>
                                        <th style="width:5%">จำนวนเงิน</th>
                                    </tr>
                                    <tbody id="table-row">
                                        <tr>
                                            <td><input class="form-control amount" type="number" id="amount1" name="amount1" min="0" max="999"></td>
                                            <td>
                                                <input type="text" hidden id="type1" name="type1">
                                                <input type="text" hidden id="type_name1" name="type_name1">
                                                <input type="text" hidden id="sort_data1" name="sort_data1">
                                                <select name="select_type1" id="select_type1" class="selecttype" hidden>
                                                    @foreach($rows as $row)
                                                        <option value="{{$row->id}}">{{$row->category}} : {{$row->name}}</option>
                                                    @endforeach
                                                </select>


                                                
                                                <input hidden type="text" id="data_select2" value='@foreach($rows as $row) <option value="{{$row->id}}">{{$row->category}} : {{$row->name}}</option>@endforeach' >
                                            </td>
                                            <td><select name="employee1" class="selecttype" id="employee1"></select></td>
                                            <td><input class="form-control" type="text1" id="price1"></td>
                                            <td><input class="form-control" type="text1" id="total_per1"></td>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">ยอดรวม</label>
                                <input type="text" style="width:100%" class="form-control" name="total" id="total">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" hidden id="employer_id" name="employer_id">
                                <input type="text" hidden id="employee_id" name="employee_id">
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
    <script src="backend/libs/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        
    </script>
</div>
