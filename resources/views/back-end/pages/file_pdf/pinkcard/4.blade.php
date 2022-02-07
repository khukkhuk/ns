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
<div style="page-break-after: unset;">
    <img src="backend/images/pinkcard/7 มอบอำนาจ_page-0001.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
    <!-- <p style="margin:90px 450px">บนจ.N.S.LABOUR</p> -->
    <!-- <p style="margin:187px 110px">ไทย</p>
    <p style="margin:187px 210px">ไทย</p>
    <p style="margin:187px 310px">บัตรประชาชน</p> -->
    
    <p style="margin:155px 320px">{{$pdf->f1}}</p>
    <p style="margin:155px 0 0 340px">{{$pdf->f2}}</p>
    <p style="margin:155px 0 0 640px">{{$pdf->f3}}</p>
    <p style="margin:187px 0 0 110px">{{$pdf->f4}}</p>
    <p style="margin:187px 0 0 220px">{{$pdf->f5}}</p>
    <p style="margin:187px 0 0 320px">{{$pdf->f6}}</p>
    <p style="margin:187px 0 0 440px">{{$pdf->f7}}</p>
    <p style="margin:187px 0 0 630px">{{$pdf->f8}}</p>
    <p style="margin:220px 0 0 100px">{{$pdf->f9}}</p>
    <p style="margin:220px 0 0 200px">{{$pdf->f10}}</p>
    <p style="margin:220px 0 0 330px">{{$pdf->f11}}</p>
    <p style="margin:220px 0 0 420px">{{$pdf->f12}}</p>
    <p style="margin:220px 0 0 570px">{{$pdf->f13}}</p>
    <p style="margin:250px 0 0 130px">{{$pdf->f14}}</p>

    <!-- <p style="margin:265px 350px">{{$pdf->f15}}</p> -->
    <div style="margin:280px 350px;position:fixed;background-color:white;width:215px;height:26px"></div>
    <p style="margin:280px 0 0 370px">{{$pdf->f15}}  {{$pdf->f16}}</p>
    <div style="margin:280px 635px;position:fixed;background-color:white;width:30px;height:26px"></div>
    <p style="margin:280px 0 0 635px">{{$pdf->f17}}</p>
    <div style="margin:310px 105px;position:fixed;background-color:white;width:30px;height:26px"></div>
    <p style="margin:310px 0 0 108px">{{$pdf->f18}}</p>
    <div style="margin:310px 215px;position:fixed;background-color:white;width:30px;height:26px"></div>
    <p style="margin:310px 220px">{{$pdf->f19}}</p>
    <div style="margin:310px 315px;position:fixed;background-color:white;width:80px;height:26px"></div>
    <p style="margin:310px 320px">{{$pdf->f20}}</p>
    <div style="margin:310px 438px;position:fixed;background-color:white;width:113px;height:26px"></div>
    <p style="margin:310px 440px">{{$pdf->f21}}</p>
    <div style="margin:310px 630px;position:fixed;background-color:white;width:30px;height:26px"></div>
    <p style="margin:310px 630px">{{$pdf->f22}}</p>
    <div style="margin:343px 100px;position:fixed;background-color:white;width:20px;height:25px"></div>
    <p style="margin:343px 100px">{{$pdf->f23}}</p>
    <div style="margin:343px 220px;position:fixed;background-color:white;width:20px;height:25px"></div>
    <p style="margin:343px 200px">{{$pdf->f24}}</p>
    <div style="margin:343px 330px;position:fixed;background-color:white;width:20px;height:25px"></div>
    <p style="margin:343px 330px">{{$pdf->f25}}</p>
    <div style="margin:343px 420px;position:fixed;background-color:white;width:70px;height:25px"></div>
    <p style="margin:343px 420px">{{$pdf->f26}}</p>
    <div style="margin:343px 560px;position:fixed;background-color:white;width:70px;height:25px"></div>
    <p style="margin:343px 570px">{{$pdf->f27}}</p>
    <div style="margin:373px 100px;position:fixed;background-color:white;width:60px;height:25px"></div>
    <p style="margin:373px 130px">{{$pdf->f28}}</p>
    <div style="margin:592px 330px;position:fixed;background-color:white;width:200px;height:25px"></div>
    <p style="margin:592px 0px 0px 330px">{{$pdf->f15}}  {{$pdf->f16}}</p>
    <div style="margin:825px 395px;position:fixed;background-color:white;width:200px;height:25px"></div>
    <p style="margin:825px 0px 0px 395px">{{$pdf->f15}}  {{$pdf->f16}}</p>
</div>
</body>
</html>