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
    <b style="position:fixed;margin:-30px 0px 0px 312px;font-size:36px">บิลเงินสด</b>
    <b style="margin:30px 0px 0px 295px;position:fixed">บนจ.เอ็น.เอส.เลเบอร์ จำกัด</b>
    <b style="margin:50px 0px 0px 250px;position:fixed">691 ถ.ท่าแฉลบ ต.ตลาด อ.เมือง จ.จันทบุรี 22000</b>
    <b style="margin:70px 0px 0px 285px;position:fixed">เบอร์โทรติดต่อ : 086 355 4944</b>

    <div style="position:fixed;margin:0px 0px 0px 550px">
      <p style="display: inline">เล่มที่</p>
      <p style="display: inline">....................................</p>
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
    
    <!-- <p>ชื่อ</p>
    <p>ที่อยู่</p>
    <p>เลขประจำตัวประชาชน</p>
    <p>เลขประจำตัวผู้เสียภาษีอากร</p> -->

    <div style="margin: 10px 0px 0px 0px">
      <table style="border: 1px solid black">
        <thead>
          <tr style="text-align:center;font-weight:bold">
            <td>ลำดับที่</td>
            <td>จำนวน</td>
            <td width="210">รายการ</td>
            <td>หน่วยละ</td>
            <td>จำนวนเงิน</td>
          </tr>
        </thead>
        <tbody>
          <?php
          for($i=1;$i<9;$i++){
            ?>
           
           <tr>
             <td style="text-align:center">{{$i}}</td>
             <td style="text-align:center">{{$i}}</td>
             <td style="text-align:left;padding-left:20px">{{$i}}</td>
             <td style="text-align:right;padding-right:20px">{{$i}}</td>
             <td style="text-align:center">{{$i}}</td>
           </tr>
           <?php
          }
          
          for($i=1;$i<5;$i++){
            ?>
           
           <tr>
             <td style="height:22px"></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
           </tr>
           <?php
          }
          ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" style='border-left:none;border-bottom:none;border-top:none;'></td>
            <td>รวมเป็นเงินทั้งสิ้น</td>
            <td style="text-align:right">3,000 บาท</td>
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