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
    <img src="backend/images/pinkcard/ท.บ.2 ใบเปล่า_page-0001.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
    <p style="margin:147px 370px">@if($pdf->f1 == 1) / @endif</p>
    <p style="margin:147px 490px">@if($pdf->f1 == 2) / @endif</p>
    <!-- <p style="margin:199px 0 0 150px">{{$pdf->f2}}</p> -->
    <p style="margin:199px 0 0 150px">{{substr($pdf->f2,0,1)}}</p>
    <p style="margin:199px 0 0 168px">{{substr($pdf->f2,1,1)}}</p>
    <p style="margin:199px 0 0 213px">{{substr($pdf->f2,2,1)}}</p>
    <p style="margin:199px 0 0 236px">{{substr($pdf->f2,3,1)}}</p>
    <p style="margin:199px 0 0 260px">{{substr($pdf->f2,4,1)}}</p>
    <p style="margin:199px 0 0 282px">{{substr($pdf->f2,5,1)}}</p>
    <p style="margin:199px 0 0 325px">{{substr($pdf->f2,6,1)}}</p>
    <p style="margin:199px 0 0 348px">{{substr($pdf->f2,7,1)}}</p>
    <p style="margin:199px 0 0 370px">{{substr($pdf->f2,8,1)}}</p>
    <p style="margin:199px 0 0 395px">{{substr($pdf->f2,9,1)}}</p>
    <p style="margin:199px 0 0 418px">{{substr($pdf->f2,10,1)}}</p>
    <p style="margin:199px 0 0 440px">{{substr($pdf->f2,11,1)}}</p>
    <p style="margin:199px 0 0 485px">{{substr($pdf->f2,12,1)}}</p>

    <!-- <p style="margin:199px 168px">{{$pdf->f3}}</p> -->
    <p style="margin:235px 68px">@if($pdf->f3 == 1) / @endif</p>
    <p style="margin:235px 157px">@if($pdf->f3 == 2) / @endif</p>
    <p style="margin:235px 250px">@if($pdf->f3 == 3) / @endif</p>
    <p style="margin:235px 317px">@if($pdf->f3 == 4) / @endif</p>
    <p style="margin:235px 407px">@if($pdf->f3 == 5) / @endif</p>
    <p style="margin:235px 535px">@if($pdf->f4 == 1) / @endif</p>
    <p style="margin:235px 580px">@if($pdf->f4 == 2) / @endif</p>
    <p style="margin:268px 0 0 60px">{{$pdf->f5}}</p>
    <p style="margin:268px 0 0 230px">{{$pdf->f6}}</p>
    <p style="margin:268px 0 0 415px">{{$pdf->f7}}</p>
    <p style="margin:268px 0 0 560px">{{$pdf->f8}}</p>
    <p style="margin:300px 60px">@if($pdf->f9 == 1) / @endif</p>
    <p style="margin:300px 120px">@if($pdf->f9 == 2) / @endif</p>
    <p style="margin:300px 165px">@if($pdf->f9 == 3) / @endif</p>
    <!-- <p style="margin:300px 0 0 500px">{{$pdf->f10}}</p> -->
    <p style="margin:300px 0 0 365px">{{substr($pdf->f10,8,1)}}</p>
    <p style="margin:300px 0 0 380px">{{substr($pdf->f10,9,1)}}</p>
    <p style="margin:300px 0 0 405px">{{substr($pdf->f10,5,1)}}</p>
    <p style="margin:300px 0 0 420px">{{substr($pdf->f10,6,1)}}</p>
    <p style="margin:300px 0 0 448px">{{substr($pdf->f10,0,1)}}</p>
    <p style="margin:300px 0 0 462px">{{substr($pdf->f10,1,1)}}</p>
    <p style="margin:300px 0 0 475px">{{substr($pdf->f10,2,1)}}</p>
    <p style="margin:300px 0 0 487px">{{substr($pdf->f10,3,1)}}</p>
    <p style="margin:335px 75px">@if($pdf->f11 == 1) / @endif</p>
    <p style="margin:335px 120px">@if($pdf->f11 == 2) / @endif</p>
    <p style="margin:335px 175px">@if($pdf->f11 == 3) / @endif</p>
    <p style="margin:335px 295px">@if($pdf->f11 == 4) / @endif</p>
    <p style="margin:335px 340px">@if($pdf->f11 == 5) / @endif</p>
    <p style="margin:385px 0 0 125px">{{$pdf->f12}}</p>
    
    <!-- <p style="margin:385px 0 0 400px">{{$pdf->f13}}</p> -->
    <p style="margin:385px 0 0 399px">{{substr($pdf->f13,0,1)}}</p>
    <p style="margin:385px 0 0 415px">{{substr($pdf->f13,1,1)}}</p>
    <p style="margin:385px 0 0 447px">{{substr($pdf->f13,2,1)}}</p>
    <p style="margin:385px 0 0 465px">{{substr($pdf->f13,3,1)}}</p>
    <p style="margin:385px 0 0 482px">{{substr($pdf->f13,4,1)}}</p>
    <p style="margin:385px 0 0 499px">{{substr($pdf->f13,5,1)}}</p>
    <p style="margin:385px 0 0 533px">{{substr($pdf->f13,6,1)}}</p>
    <p style="margin:385px 0 0 550px">{{substr($pdf->f13,7,1)}}</p>
    <p style="margin:385px 0 0 567px">{{substr($pdf->f13,8,1)}}</p>
    <p style="margin:385px 0 0 586px">{{substr($pdf->f13,9,1)}}</p>
    <p style="margin:385px 0 0 603px">{{substr($pdf->f13,10,1)}}</p>
    <p style="margin:385px 0 0 621px">{{substr($pdf->f13,11,1)}}</p>
    <p style="margin:385px 0 0 655px">{{substr($pdf->f13,12,1)}}</p>

    <p style="margin:410px 0 0 125px">{{$pdf->f14}}</p>
    
    <p style="margin:415px 0 0 399px">{{substr($pdf->f15,0,1)}}</p>
    <p style="margin:415px 0 0 415px">{{substr($pdf->f15,1,1)}}</p>
    <p style="margin:415px 0 0 447px">{{substr($pdf->f15,2,1)}}</p>
    <p style="margin:415px 0 0 465px">{{substr($pdf->f15,3,1)}}</p>
    <p style="margin:415px 0 0 482px">{{substr($pdf->f15,4,1)}}</p>
    <p style="margin:415px 0 0 499px">{{substr($pdf->f15,5,1)}}</p>
    <p style="margin:415px 0 0 533px">{{substr($pdf->f15,6,1)}}</p>
    <p style="margin:415px 0 0 550px">{{substr($pdf->f15,7,1)}}</p>
    <p style="margin:415px 0 0 567px">{{substr($pdf->f15,8,1)}}</p>
    <p style="margin:415px 0 0 586px">{{substr($pdf->f15,9,1)}}</p>
    <p style="margin:415px 0 0 603px">{{substr($pdf->f15,10,1)}}</p>
    <p style="margin:415px 0 0 621px">{{substr($pdf->f15,11,1)}}</p>
    <p style="margin:415px 0 0 655px">{{substr($pdf->f15,12,1)}}</p>
    <p style="margin:440px 115px">@if($pdf->f16 == 1) / @endif</p>
    <p style="margin:440px 160px">@if($pdf->f16 == 2) / @endif</p>

    <p style="margin:475px 0 0 278px">{{substr($pdf->f17,0,1)}}</p>
    <p style="margin:475px 0 0 297px">{{substr($pdf->f17,1,1)}}</p>
    <p style="margin:475px 0 0 315px">{{substr($pdf->f17,2,1)}}</p>
    <p style="margin:475px 0 0 337px">{{substr($pdf->f17,3,1)}}</p>
    <p style="margin:475px 0 0 378px">{{substr($pdf->f17,4,1)}}</p>
    <p style="margin:475px 0 0 398px">{{substr($pdf->f17,5,1)}}</p>
    <p style="margin:475px 0 0 418px">{{substr($pdf->f17,6,1)}}</p>
    <p style="margin:475px 0 0 439px">{{substr($pdf->f17,7,1)}}</p>
    <p style="margin:475px 0 0 462px">{{substr($pdf->f17,8,1)}}</p>
    <p style="margin:475px 0 0 483px">{{substr($pdf->f17,9,1)}}</p>
    <p style="margin:475px 0 0 526px">{{substr($pdf->f17,10,1)}}</p>

    <p style="margin:562px 0 0 320px">{{$pdf->f18}}</p>
    <p style="margin:562px 0 0 520px">{{$pdf->f19}}</p>
    <p style="margin:590px 0 0 350px">{{substr($pdf->f20,8,1)}}</p>    
    <p style="margin:590px 0 0 365px">{{substr($pdf->f20,9,1)}}</p>    
    <p style="margin:590px 0 0 395px">{{substr($pdf->f20,5,1)}}</p>    
    <p style="margin:590px 0 0 408px">{{substr($pdf->f20,6,1)}}</p>    
    <p style="margin:590px 0 0 435px">{{substr($pdf->f20,0,1)}}</p>    
    <p style="margin:590px 0 0 448px">{{substr($pdf->f20,1,1)}}</p>    
    <p style="margin:590px 0 0 463px">{{substr($pdf->f20,2,1)}}</p>    
    <p style="margin:590px 0 0 478px">{{substr($pdf->f20,3,1)}}</p>   
    =
    <p style="margin:645px 0 0 240px">{{substr($pdf->f21,0,1)}}</p>
    <p style="margin:645px 0 0 262px">{{substr($pdf->f21,1,1)}}</p>
    <p style="margin:645px 0 0 281px">{{substr($pdf->f21,2,1)}}</p>
    <p style="margin:645px 0 0 303px">{{substr($pdf->f21,3,1)}}</p>
    <p style="margin:645px 0 0 324px">{{substr($pdf->f21,4,1)}}</p>
    <p style="margin:645px 0 0 346px">{{substr($pdf->f21,5,1)}}</p>
    <p style="margin:645px 0 0 368px">{{substr($pdf->f21,6,1)}}</p>
    <p style="margin:645px 0 0 390px">{{substr($pdf->f21,7,1)}}</p>
    <p style="margin:645px 0 0 410px">{{substr($pdf->f21,8,1)}}</p>
    <p style="margin:645px 0 0 433px">{{substr($pdf->f21,9,1)}}</p>
    <p style="margin:645px 0 0 456px">{{substr($pdf->f21,10,1)}}</p>

    <p style="margin:670px 10px">@if($pdf->f22 == 1) / @endif</p>    
    <p style="margin:670px 110px">@if($pdf->f22 == 2) / @endif</p>    
    <p style="margin:670px 265px">@if($pdf->f22 == 3) / @endif</p>    
    <p style="margin:670px 422px">@if($pdf->f22 == 4) / @endif</p>
    <p style="margin:697px 0 0 120px">{{$pdf->f23}}</p>
    <p style="margin:697px 0 0 340px">{{$pdf->f24}}</p>

    <!-- <p style="margin:725px 0 0 180px">{{$pdf->f25}}</p> -->
    <p style="margin:725px 0 0 182px">{{substr($pdf->f25,8,1)}}</p>
    <p style="margin:725px 0 0 200px">{{substr($pdf->f25,9,1)}}</p>
    <p style="margin:725px 0 0 237px">{{substr($pdf->f25,5,1)}}</p>
    <p style="margin:725px 0 0 258px">{{substr($pdf->f25,6,1)}}</p>
    <p style="margin:725px 0 0 295px">{{substr($pdf->f25,0,1)}}</p>
    <p style="margin:725px 0 0 313px">{{substr($pdf->f25,1,1)}}</p>
    <p style="margin:725px 0 0 335px">{{substr($pdf->f25,2,1)}}</p>
    <p style="margin:725px 0 0 354px">{{substr($pdf->f25,3,1)}}</p>

    <!-- <p style="margin:725px 0 0 480px">{{$pdf->f26}}</p> -->
    <p style="margin:725px 0 0 482px">{{substr($pdf->f26,8,1)}}</p>
    <p style="margin:725px 0 0 500px">{{substr($pdf->f26,9,1)}}</p>
    <p style="margin:725px 0 0 537px">{{substr($pdf->f26,5,1)}}</p>
    <p style="margin:725px 0 0 558px">{{substr($pdf->f26,6,1)}}</p>
    <p style="margin:725px 0 0 595px">{{substr($pdf->f26,0,1)}}</p>
    <p style="margin:725px 0 0 613px">{{substr($pdf->f26,1,1)}}</p>
    <p style="margin:725px 0 0 635px">{{substr($pdf->f26,2,1)}}</p>
    <p style="margin:725px 0 0 654px">{{substr($pdf->f26,3,1)}}</p>

    <!-- <p style="margin:725px 0 0 654px">{{substr($pdf->f27,0,1)}}</p> -->
    <p style="margin:755px 0 0 70px">{{substr($pdf->f27,0,1)}}</p>
    <p style="margin:755px 0 0 90px">{{substr($pdf->f27,1,1)}}</p>
    <p style="margin:755px 0 0 110px">{{substr($pdf->f27,2,1)}}</p>
    <p style="margin:755px 0 0 130px">{{substr($pdf->f27,3,1)}}</p>
    <p style="margin:755px 0 0 149px">{{substr($pdf->f27,4,1)}}</p>
    <p style="margin:755px 0 0 168px">{{substr($pdf->f27,5,1)}}</p>
    <p style="margin:755px 0 0 188px">{{substr($pdf->f27,6,1)}}</p>

    <p style="margin:758px 255px">@if($pdf->f28 == 1) / @endif</p>
    <p style="margin:758px 590px">@if($pdf->f28 == 2) / @endif</p>
    <p style="margin:785px 0 0 182px">{{substr($pdf->f25,8,1)}}</p>
    <p style="margin:785px 0 0 200px">{{substr($pdf->f25,9,1)}}</p>
    <p style="margin:785px 0 0 237px">{{substr($pdf->f25,5,1)}}</p>
    <p style="margin:785px 0 0 258px">{{substr($pdf->f25,6,1)}}</p>
    <p style="margin:785px 0 0 295px">{{substr($pdf->f25,0,1)}}</p>
    <p style="margin:785px 0 0 313px">{{substr($pdf->f25,1,1)}}</p>
    <p style="margin:785px 0 0 335px">{{substr($pdf->f25,2,1)}}</p>
    <p style="margin:785px 0 0 354px">{{substr($pdf->f25,3,1)}}</p>

    <!-- <p style="margin:785px 0 0 480px">{{$pdf->f26}}</p> -->
    <p style="margin:785px 0 0 482px">{{substr($pdf->f26,8,1)}}</p>
    <p style="margin:785px 0 0 500px">{{substr($pdf->f26,9,1)}}</p>
    <p style="margin:785px 0 0 537px">{{substr($pdf->f26,5,1)}}</p>
    <p style="margin:785px 0 0 558px">{{substr($pdf->f26,6,1)}}</p>
    <p style="margin:785px 0 0 595px">{{substr($pdf->f26,0,1)}}</p>
    <p style="margin:785px 0 0 613px">{{substr($pdf->f26,1,1)}}</p>
    <p style="margin:785px 0 0 635px">{{substr($pdf->f26,2,1)}}</p>
    <p style="margin:785px 0 0 654px">{{substr($pdf->f26,3,1)}}</p>
    <p style="margin:857px 0 0 170px">{{$pdf->f31}}</p>
    <p style="margin:857px 0 0 480px">{{$pdf->f32}}</p>
    <p style="margin:885px 115px">@if($pdf->f33 == 1) / @endif</p>
    <p style="margin:885px 227px">@if($pdf->f33 == 2) / @endif</p>


</div>
</body>
</html>