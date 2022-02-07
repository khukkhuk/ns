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
            color:red;
        }
    </style>
</head>
<body style="top:0;left:0">
    <div style="page-break-after: unset;">
        <img src="backend/images/borderpass/1 หนังสือแสดงความต้องการ.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
        <p style="margin:195px 230px">{{$pdf->f1}}</p>
        <p style="margin:195px 595px">{{$pdf->f2}}</p>
        <p style="margin:218px 90px">{{$pdf->f3}} {{$pdf->f4}} {{$pdf->f5}} {{$pdf->f6}} {{$pdf->f7}} {{$pdf->f8}} {{$pdf->f9}} </p>
        <p style="margin:242px 120px">{{$pdf->f10}}</p>
        <p style="margin:242px 330px">{{$pdf->f11}}</p>
        <p style="margin:242px 550px">{{$pdf->f12}}</p>
        <p style="margin:268px 275px">@if($pdf->f13 == "1" ) / @endif</p>
        <p style="margin:268px 440px">@if($pdf->f13 == "2") / @endif</p>
        <p style="margin:288px 205px">{{$pdf->f14}}</p>
        <p style="margin:288px 400px">{{$pdf->f15}}</p>
        <p style="margin:288px 530px">{{$pdf->f16}}</p>
        <p style="margin:313px 210px">{{substr($pdf->f17,8,2)}}</p>
        <p style="margin:313px 300px">{{substr($pdf->f17,5,2)}}</p>
        <p style="margin:335px 170px">{{$pdf->f18}} {{$pdf->f19}} {{$pdf->f20}} {{$pdf->f21}} {{$pdf->f22}} {{$pdf->f23}} {{$pdf->f24}}</p>
        <p style="margin:357px 475px">@if($pdf->f19 == "1" ) / @endif </p>
        <p style="margin:380px 475px">@if($pdf->f19 == "2" ) / @endif </p>
        <p style="margin:402px 240px">{{$pdf->f26}}</p>
        <p style="margin:402px 330px">{{$pdf->f26}}</p>
        <p style="margin:427px 190px">{{$pdf->f27}}</p>
    </div>
</body>
</html>