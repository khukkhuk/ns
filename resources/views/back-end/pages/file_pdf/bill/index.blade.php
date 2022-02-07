<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: Bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        body {
            font-family: "THSarabunNew";
            font-weight: normal;
        }
        page[size="A4"] {
          background: white;
          width: 21cm;
          height: 29.7cm;
          display: block;
          margin: 0 auto;
          margin-bottom: 0.5cm;
          box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        }
        b,p{
          font-size:20px
        }
        table, td, th {
          border: 1px solid black;
        }

        table {
          width: 100%;
          border-collapse: collapse;
        }
        td{
          padding:2px 6px
        }
    </style>
</head>
  <body>
    
  <p style="position:fixed;margin:-3px 0px 0px 590px ">{{$result->id}}</p>
    <p style="position:fixed;margin:33px 0px 0px 590px ">{{$result->bill_date}}</p>
    <p style="position:fixed;margin:125px 0px 0px 70px ">{{$result->name}}</p>
    <p style="position:fixed;margin:125px 0px 0px 430px ">{{$result->tel_number}}</p>
    <p style="position:fixed;margin:170px 0px 0px 590px ">{{$result->address}}</p>

    <b style="position:fixed;margin:-30px 0px 0px 312px;font-size:36px">บิลเงินสด</b>
    <b style="margin:30px 0px 0px 295px;position:fixed">บนจ.เอ็น.เอส.เลเบอร์ จำกัด</b>
    <b style="margin:50px 0px 0px 250px;position:fixed">691 ถ.ท่าแฉลบ ต.ตลาด อ.เมือง จ.จันทบุรี 22000</b>
    <b style="margin:70px 0px 0px 285px;position:fixed">เบอร์โทรติดต่อ : 086 355 4944</b>

    <div style="position:fixed;margin:0px 0px 0px 550px">
      <!-- <p style="display: inline">เล่มที่</p>
      <p style="display: inline">....................................</p> -->
      <p style="display: inline">เลขที่</p>
      <p style="display: inline">....................................</p>
      <p style="display: inline">วันที่</p>
      <p style="display: inline">.....................................</p>
    </div>

    <div style="margin-top:130px">
      <p style="margin:0px 0px 0px 10px ;display: inline">ชื่อ</p>
      <p style="display: inline">............................................................................................</p>
      <p style="margin:0px 0px 0px 10px;display: inline ">เบอร์โทรศัพท์</p>
      <p style="display: inline">......................................................................................</p>
    </div>
    <div>
      <p style="margin:0px 0px 0px 10px;display: inline ">ที่อยู่</p>
      <p style="display: inline">.............................................................................................................................................................................................................</p>
    </div>
    

    <div style="margin: 10px 0px 0px 0px">
      <table style="border: 1px solid black">
        <thead>
          <tr style="text-align:center;font-weight:bold">
            <td>ลำดับที่</td>
            <td>จำนวน</td>
            <td width="170">รายการ</td>
            <td width="100">ชื่อแรงงาน</td>
            <td>หน่วยละ</td>
            <td>จำนวนเงิน</td>
          </tr>
        </thead>
        <tbody>
          <?php
          $i =1;
          $total_sum=0;
          $rows = \App\Models\Backend\billdetail::leftjoin("employee","bill_detail.employee_id","employee.id")->leftjoin("type","bill_detail.type_id","type.id")->where("bill_id",$result->id)->select("*","type.name as type_name","employee.name as em_name","employee.surname as em_surname")->get();
          foreach($rows as $row){
            ?>
           <tr>
             <td style="text-align:center">{{$i}}</td>
             <td style="text-align:center">{{$row->amount}}</td>
             <td style="text-align:left;padding-left:20px">{{$row->category}} - {{$row->type_name}}</td>
             <td style="text-align:center">{{$row->em_name}} {{$row->em_surname}}</td>
             <td style="text-align:center">{{$row->price}}</td>
             <td style="text-align:center">@php echo $total = $row->amount+$row->price; @endphp</td>
           </tr>
           <?php
           $i++;
           $total_sum +=  $total;
          }
          ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="4" style='border-left:none;border-bottom:none;border-top:none;'></td>
            <td>รวมเป็นเงินทั้งสิ้น</td>
            <td style="text-align:right">{{$total_sum}} บาท</td>
          </tr>
        </tfoot>
      </table>
    </div>
    <div>
      <p style="display: inline;margin:50px 0px 0px 450px">ผู้รับเงิน</p>
      <p style="margin-left:5px;display: inline">.............................................................</p>
    </div>
      

  </body>
</html>