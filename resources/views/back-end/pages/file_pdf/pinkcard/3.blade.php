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
        p,img{
            position:fixed;
        }
    </style>
</head>
<body style="top:0;left:0">
<div style="page-break-after: always;">
    <img src="backend/images/work_visa/ตม.7_001.jpg" style="margin:-45px;;width:800px" alt="">
    <p style=";margin:290px 290px">{{$pdf->f1}}</p>
    <p style=";margin:290px 530px">{{$pdf->f2}}</p>
    <p style=";margin:340px 120px">{{$pdf->f3}}</p>
    <p style=";margin:340px 330px">{{$pdf->f4}}</p>
    <p style=";margin:340px 0 0 460px">{{substr($pdf->f5,8,2)}}</p>
    <p style=";margin:340px 550px">{{substr($pdf->f5,5,2)}}</p>
    <p style=";margin:340px 660px">{{substr($pdf->f5,0,4)}}</p>
    <p style=";margin:385px 130px">{{$pdf->f6}}</p>
    <p style=";margin:385px 550px">{{$pdf->f7}}</p>
    <p style=";margin:430px 370px">{{$pdf->f8}}</p>
    <p style=";margin:430px 600px">{{substr($pdf->f8,8,2)}}</p>
    <p style=";margin:478px 90px">{{substr($pdf->f8,5,2)}}</p>
    <p style=";margin:478px 230px">{{substr($pdf->f8,0,4)}}</p>
    <p style=";margin:478px 350px">{{$pdf->f9}}</p>
    <p style=";margin:478px 600px">{{substr($pdf->f10,8,2)}}</p>
    <p style=";margin:522px 90px">{{substr($pdf->f10,5,2)}}</p>
    <p style=";margin:522px 230px">{{substr($pdf->f10,0,4)}}</p>
    <p style=";margin:522px 380px">{{$pdf->f11}}</p>
    <p style=";margin:568px 170px">{{$pdf->f12}}</p>
    <p style=";margin:568px 420px">{{$pdf->f13}}</p>
    <p style=";margin:615px 170px">{{$pdf->f14}}</p>
    <p style=";margin:615px 420px">{{substr($pdf->f15,8,2)}}</p>
    <p style=";margin:615px 500px">{{substr($pdf->f15,5,2)}}</p>
    <p style=";margin:615px 640px">{{substr($pdf->f15,0,4)}}</p>
    <p style=";margin:660px 340px">{{$pdf->f16}}</p>
    <p style=";margin:705px 540px">{{$pdf->f17}}</p>
    <p style=";margin:755px 170px">{{$pdf->f18}}</p>
</div>
<div style="page-break-after: unset;">
    <img src="backend/images/work_visa/ตม.7_002.jpg" style="margin:-45px;;width:800px" alt="">
    <p style=";margin:50px 190px">{{$pdf->f19}}</p>
    <p style=";margin:100px 260px">{{$pdf->f20}}</p>
    <p style=";margin:150px 140px">{{$pdf->f21}}</p>
    <p style=";margin:150px 310px">{{$pdf->f22}}</p>
    <p style=";margin:150px 510px">{{$pdf->f23}}</p>
    <p style=";margin:200px 140px">{{$pdf->f24}}</p>
    <p style=";margin:200px 420px">{{$pdf->f25}}</p>
</div>
</body>
</html>