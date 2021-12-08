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
        body {
            font-family: "THSarabunNew";
        }
        p{
            position:fixed;
            color:black;
        }
    </style>
</head>
<body style="top:0;left:0">
 <div style="page-break-after: always;">
    <img src="backend/images/pinkcard/3 ภาษา กัมพูชา_page-0001.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    <p style="position:fixed;color:red;margin:216px 55px">{{$pdf->f1}}</p>
    <p style="position:fixed;color:red;margin:282px 55px">{{$pdf->f2}}</p>
    <p style="position:fixed;color:red;margin:345px 80px">{{$pdf->f3}}</p>
    <p style="position:fixed;color:red;margin:410px 55px">{{$pdf->f4}}</p>

    <p style="position:fixed;color:red;margin:595px 250px">{{$pdf->f5}}</p>
    <p style="position:fixed;color:red;margin:627px 120px">{{$pdf->f6}}</p>

    <p style="position:fixed;color:red;margin:755px 245px">{{$pdf->f7}}</p>
    <p style="position:fixed;color:red;margin:815px 125px">{{$pdf->f8}}</p>
    

</div>
 <div style="page-break-after: always;">
    <img src="backend/images/pinkcard/3 ภาษา กัมพูชา_page-0002.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
</div>
 <div style="page-break-after: always;">
    <img src="backend/images/pinkcard/3 ภาษา กัมพูชา_page-0003.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
</div>
 <div style="page-break-after: always;">
    <img src="backend/images/pinkcard/3 ภาษา กัมพูชา_page-0004.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
</div>
 <div style="page-break-after: unset;">
    <img src="backend/images/pinkcard/3 ภาษา กัมพูชา_page-0005.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
</div>
</body>
</html>