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
    <img src="backend/images/pinkcard/ทบ.1 ใบเปล่า_page-0001.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
    <p style="margin:75px 65px">@if($pdf->f1 == 1) / @endif</p>
    <p style="margin:105px 65px">@if($pdf->f1 == 2) / @endif</p>
    <p style="margin:100px 195px">{{substr($pdf->f25,0,1)}}</p>
    <p style="margin:100px 215px">{{substr($pdf->f25,1,1)}}</p>
    <p style="margin:100px 235px">{{substr($pdf->f25,2,1)}}</p>
    <p style="margin:100px 260px">{{substr($pdf->f25,3,1)}}</p>
    <p style="margin:100px 285px">{{substr($pdf->f25,4,1)}}</p>
    <p style="margin:100px 305px">{{substr($pdf->f25,5,1)}}</p>
    <p style="margin:100px 325px">{{substr($pdf->f25,6,1)}}</p>
    <p style="margin:100px 370px">{{substr($pdf->f25,7,1)}}</p>
    <p style="margin:100px 385px">{{substr($pdf->f25,8,1)}}</p>
    <p style="margin:100px 410px">{{substr($pdf->f25,9,1)}}</p>
    <p style="margin:100px 435px">{{substr($pdf->f25,10,1)}}</p>
    <p style="margin:100px 460px">{{substr($pdf->f25,11,1)}}</p>
    <p style="margin:100px 475px">{{substr($pdf->f25,12,1)}}</p>
    <p style="margin:100px 520px">{{substr($pdf->f25,13,1)}}</p>
    
    <p style="margin:130px 65px">@if($pdf->f3 == 1) / @endif</p>
    <p style="margin:130px 125px">@if($pdf->f3 == 2) / @endif</p>
    <p style="margin:130px 220px">@if($pdf->f3 == 3) / @endif</p>

    <p style="margin:130px 350px">@if($pdf->f4 == 1) / @endif</p>
    <p style="margin:130px 385px">@if($pdf->f4 == 2) / @endif</p>

    <p style="margin:153px 57px">{{$pdf->f5}}</p>
    <p style="margin:153px 220px">{{$pdf->f6}}</p>

    <p style="margin:153px 400px">{{$pdf->f7}}</p>
    <p style="margin:153px 550px">{{$pdf->f8}}</p>

    <p style="margin:190px 55px">@if($pdf->f9 == 1) / @endif</p>
    <p style="margin:190px 115px">@if($pdf->f9 == 2) / @endif</p>
    <p style="margin:190px 155px">@if($pdf->f9 == 3) / @endif</p>

    <p style="margin:180px 0 0 350px">{{substr($pdf->f10,8,1)}}</p>
    <p style="margin:180px 0 0 365px">{{substr($pdf->f10,9,1)}}</p>
    <p style="margin:180px 0 0 400px">{{substr($pdf->f10,5,1)}}</p>
    <p style="margin:180px 0 0 420px">{{substr($pdf->f10,6,1)}}</p>
    <p style="margin:180px 0 0 460px">{{substr($pdf->f10,0,1)}}</p>
    <p style="margin:180px 0 0 480px">{{substr($pdf->f10,1,1)}}</p>
    <p style="margin:180px 0 0 500px">{{substr($pdf->f10,2,1)}}</p>
    <p style="margin:180px 0 0 515px">{{substr($pdf->f10,3,1)}}</p>

    <p style="margin:215px 65px">@if($pdf->f11 == 1) / @endif</p>
    <p style="margin:215px 115px">@if($pdf->f11 == 2) / @endif</p>
    <p style="margin:215px 175px">@if($pdf->f11 == 3) / @endif</p>
    <p style="margin:215px 225px">@if($pdf->f11 == 4) / @endif</p>
    <p style="margin:240px 125px">{{$pdf->f12}}</p>
    <p style="margin:240px 470px">{{$pdf->f13}}</p>
    
    <!-- <p style="margin:180px 350px">{{substr($pdf->f14,7,1)}}</p> -->
    <p style="margin:265px 290px">{{substr($pdf->f14,8,1)}}</p>
    <p style="margin:265px 310px">{{substr($pdf->f14,9,1)}}</p>
    <p style="margin:265px 345px">{{substr($pdf->f14,5,1)}}</p>
    <p style="margin:265px 360px">{{substr($pdf->f14,6,1)}}</p>
    <p style="margin:265px 400px">{{substr($pdf->f14,0,1)}}</p>
    <p style="margin:265px 420px">{{substr($pdf->f14,1,1)}}</p>
    <p style="margin:265px 440px">{{substr($pdf->f14,2,1)}}</p>
    <p style="margin:265px 460px">{{substr($pdf->f14,3,1)}}</p>

    <p style="margin:320px 60px">@if($pdf->f15 == 1) / @endif</p>
    <p style="margin:320px 95px">@if($pdf->f15 == 2) / @endif</p>

    <p style="margin:390px 180px">{{substr($pdf->f16,0,1)}}</p>
    <p style="margin:390px 200px">{{substr($pdf->f16,1,1)}}</p>
    <p style="margin:390px 220px">{{substr($pdf->f16,2,1)}}</p>
    <p style="margin:390px 240px">{{substr($pdf->f16,3,1)}}</p>
    <p style="margin:390px 260px">{{substr($pdf->f16,4,1)}}</p>
    <p style="margin:390px 280px">{{substr($pdf->f16,5,1)}}</p>
    <p style="margin:390px 300px">{{substr($pdf->f16,6,1)}}</p>
    <p style="margin:390px 320px">{{substr($pdf->f16,7,1)}}</p>
    <p style="margin:390px 340px">{{substr($pdf->f16,8,1)}}</p>
    <p style="margin:390px 360px">{{substr($pdf->f16,9,1)}}</p>
    <p style="margin:390px 380px">{{substr($pdf->f16,10,1)}}</p>
    <p style="margin:415px 70px">@if($pdf->f17 == 1) / @endif</p> 
    <p style="margin:415px 170px">@if($pdf->f17 == 2) / @endif</p>
    <p style="margin:415px 325px">@if($pdf->f17 == 3) / @endif</p>
    <p style="margin:415px 490px">@if($pdf->f17 == 4) / @endif</p>
    <p style="margin:430px 170px">{{$pdf->f18}}</p>
    <p style="margin:430px 390px">{{$pdf->f19}}</p>
    <p style="margin:455px 200px">{{substr($pdf->f20,8,1)}}</p>
    <p style="margin:455px 220px">{{substr($pdf->f20,9,1)}}</p>
    <p style="margin:455px 250px">{{substr($pdf->f20,5,1)}}</p>
    <p style="margin:455px 260px">{{substr($pdf->f20,6,1)}}</p>
    <p style="margin:455px 290px">{{substr($pdf->f20,0,1)}}</p>
    <p style="margin:455px 307px">{{substr($pdf->f20,1,1)}}</p>
    <p style="margin:455px 320px">{{substr($pdf->f20,2,1)}}</p>
    <p style="margin:455px 340px">{{substr($pdf->f20,3,1)}}</p>
    <p style="margin:455px 460px">{{substr($pdf->f21,8,1)}}</p>
    <p style="margin:455px 475px">{{substr($pdf->f21,9,1)}}</p>
    <p style="margin:455px 500px">{{substr($pdf->f21,5,1)}}</p>
    <p style="margin:455px 520px">{{substr($pdf->f21,6,1)}}</p>
    <p style="margin:455px 545px">{{substr($pdf->f21,0,1)}}</p>
    <p style="margin:455px 560px">{{substr($pdf->f21,1,1)}}</p>
    <p style="margin:455px 570px">{{substr($pdf->f21,2,1)}}</p>
    <p style="margin:455px 585px">{{substr($pdf->f21,3,1)}}</p>
    <p style="margin:480px 120px">{{$pdf->f22}}</p>
    <p style="margin:507px 200px">{{substr($pdf->f23,8,1)}}</p>
    <p style="margin:507px 220px">{{substr($pdf->f23,9,1)}}</p>
    <p style="margin:507px 250px">{{substr($pdf->f23,5,1)}}</p>
    <p style="margin:507px 260px">{{substr($pdf->f23,6,1)}}</p>
    <p style="margin:507px 290px">{{substr($pdf->f23,0,1)}}</p>
    <p style="margin:507px 305px">{{substr($pdf->f23,1,1)}}</p>
    <p style="margin:507px 320px">{{substr($pdf->f23,2,1)}}</p>
    <p style="margin:507px 340px">{{substr($pdf->f23,3,1)}}</p>
    <p style="margin:507px 460px">{{substr($pdf->f24,8,1)}}</p>
    <p style="margin:507px 475px">{{substr($pdf->f24,9,1)}}</p>
    <p style="margin:507px 500px">{{substr($pdf->f24,5,1)}}</p>
    <p style="margin:507px 520px">{{substr($pdf->f24,6,1)}}</p>
    <p style="margin:507px 545px">{{substr($pdf->f24,0,1)}}</p>
    <p style="margin:507px 560px">{{substr($pdf->f24,1,1)}}</p>
    <p style="margin:507px 570px">{{substr($pdf->f24,2,1)}}</p>
    <p style="margin:507px 585px">{{substr($pdf->f24,3,1)}}</p>

    <p style="margin:565px 300px">{{substr($pdf->f25,0,1)}}</p>
    <p style="margin:565px 320px">{{substr($pdf->f25,1,1)}}</p>
    <p style="margin:565px 340px">{{substr($pdf->f25,2,1)}}</p>
    <p style="margin:565px 360px">{{substr($pdf->f25,3,1)}}</p>
    <!-- <p style="margin:565px 380px">{{substr($pdf->f25,4,1)}}5</p> -->
    <p style="margin:565px 400px">{{substr($pdf->f25,4,1)}}</p>
    <p style="margin:565px 420px">{{substr($pdf->f25,5,1)}}</p>
    <p style="margin:565px 440px">{{substr($pdf->f25,6,1)}}</p>
    <p style="margin:565px 460px">{{substr($pdf->f25,7,1)}}</p>
    <p style="margin:565px 480px">{{substr($pdf->f25,8,1)}}</p>
    <p style="margin:565px 500px">{{substr($pdf->f25,9,1)}}</p> 
    <p style="margin:565px 540px">{{substr($pdf->f25,10,1)}}</p>
    <p style="margin:600px 22px">@if($pdf->f26 == 1) / @endif</p>
    @if($pdf->f26 == 1)
    <p style="margin:595px 145px">{{substr($pdf->f27,0,1)}}</p>
    <p style="margin:595px 170px">{{substr($pdf->f27,1,1)}}</p>
    <p style="margin:595px 190px">{{substr($pdf->f27,2,1)}}</p>
    <p style="margin:595px 210px">{{substr($pdf->f27,3,1)}}</p>
    <p style="margin:595px 230px">{{substr($pdf->f27,4,1)}}</p>
    <p style="margin:595px 248px">{{substr($pdf->f27,5,1)}}</p>
    <p style="margin:595px 265px">{{substr($pdf->f27,6,1)}}</p>
    <p style="margin:595px 285px">{{substr($pdf->f27,7,1)}}</p>
    <p style="margin:595px 305px">{{substr($pdf->f27,8,1)}}</p>
    <p style="margin:595px 325px">{{substr($pdf->f27,9,1)}}</p>
    <p style="margin:595px 345px">{{substr($pdf->f27,10,1)}}</p>
    <p style="margin:595px 365px">{{substr($pdf->f27,11,1)}}</p>
    <p style="margin:595px 382px">{{substr($pdf->f27,12,1)}}</p>
    <p style="margin:595px 450px">{{$pdf->f28}}</p>
    @endif
    <p style="margin:635px 22px">@if($pdf->f26 == 2) / @endif</p>
    @if($pdf->f26 == 2)
    <p style="margin:630px 210px">{{$pdf->f27}}</p>
    <p style="margin:630px 245px">{{substr($pdf->f27,0,1)}}</p>
    <p style="margin:630px 267px">{{substr($pdf->f27,1,1)}}</p>
    <p style="margin:630px 285px">{{substr($pdf->f27,2,1)}}</p>
    <p style="margin:630px 300px">{{substr($pdf->f27,3,1)}}</p>
    <p style="margin:630px 340px">{{substr($pdf->f27,4,1)}}</p>
    <p style="margin:630px 360px">{{substr($pdf->f27,5,1)}}</p>
    <p style="margin:630px 380px">{{substr($pdf->f27,6,1)}}</p>
    <p style="margin:630px 395px">{{substr($pdf->f27,7,1)}}</p>
    <p style="margin:630px 410px">{{substr($pdf->f27,8,1)}}</p>
    <p style="margin:630px 430px">{{substr($pdf->f27,9,1)}}</p>
    <p style="margin:630px 450px">{{substr($pdf->f27,10,1)}}</p>
    <p style="margin:630px 470px">{{substr($pdf->f27,11,1)}}</p>
    <p style="margin:630px 490px">{{substr($pdf->f27,12,1)}}</p>
    <p style="margin:630px 505px">{{substr($pdf->f27,13,1)}}</p>
    <p style="margin:632px 595px">{{$pdf->f28}}}</p>
    @endif
  
    <p style="margin:680px 145px">@if($pdf->f29 == 1) / @endif</p>
    <p style="margin:705px 145px">@if($pdf->f29 == 2) / @endif</p>
    <p style="margin:705px 490px">{{substr($pdf->f30,0,1)}}</p>
    <p style="margin:705px 510px">{{substr($pdf->f30,1,1)}}</p>
    <p style="margin:705px 530px">{{substr($pdf->f30,2,1)}}</p>
    <p style="margin:705px 550px">{{substr($pdf->f30,3,1)}}</p>
    <p style="margin:705px 588px">{{substr($pdf->f30,4,1)}}</p>
    <p style="margin:705px 607px">{{substr($pdf->f30,5,1)}}</p>
    <p style="margin:705px 627px">{{substr($pdf->f30,6,1)}}</p>
    <p style="margin:705px 643px">{{substr($pdf->f30,7,1)}}</p>
    <p style="margin:705px 662px">{{substr($pdf->f30,8,1)}}</p>
    <p style="margin:705px 680px">{{substr($pdf->f30,9,1)}}</p>
    <p style="margin:705px 720px">{{substr($pdf->f30,10,1)}}</p>
    
    <p style="margin:735px 110px">@if($pdf->f31 == 1) / @endif</p>
    <p style="margin:755px 110px">@if($pdf->f31 == 2) / @endif</p>

    <p style="margin:750px 395px">{{substr($pdf->f32,0,1)}}</p>
    <p style="margin:750px 412px">{{substr($pdf->f32,1,1)}}</p>
    <p style="margin:750px 432px">{{substr($pdf->f32,2,1)}}</p>
    <p style="margin:750px 453px">{{substr($pdf->f32,3,1)}}</p>
    <p style="margin:750px 490px">{{substr($pdf->f32,4,1)}}</p>
    <p style="margin:750px 510px">{{substr($pdf->f32,5,1)}}</p>
    <p style="margin:750px 530px">{{substr($pdf->f32,6,1)}}</p>
    <p style="margin:750px 547px">{{substr($pdf->f32,7,1)}}</p>
    <p style="margin:750px 565px">{{substr($pdf->f32,8,1)}}</p>
    <p style="margin:750px 585px">{{substr($pdf->f32,9,1)}}</p>
    <p style="margin:750px 620px">{{substr($pdf->f32,10,1)}}</p>

    <p style="margin:775px 110px">@if($pdf->f30 == 3) / @endif</p>
    <p style="margin:775px 360px">{{$pdf->f33}}</p>
    <p style="margin:800px 150px">{{$pdf->f34}}</p>
    <p style="margin:800px 220px">{{$pdf->f35}}</p>
    <p style="margin:800px 360px">{{$pdf->f36}}</p>
    <p style="margin:800px 540px">{{$pdf->f37}}</p>
    
    <p style="margin:825px 65px">@if($pdf->f38 == 1) / @endif</p>
    <p style="margin:825px 220px">{{$pdf->f39}}</p>
    <p style="margin:825px 370px">@if($pdf->f38 == 2) / @endif</p>
    <p style="margin:825px 440px">@if($pdf->f38 == 3) / @endif</p>
    <p style="margin:825px 610px">@if($pdf->f38 == 4) / @endif</p>
    
    <p style="margin:845px 265px">{{substr($pdf->f40,0,1)}}</p>
    <p style="margin:845px 282px">{{substr($pdf->f40,1,1)}}</p>

    <p style="margin:905px 140px">{{$pdf->f41}}</p>
    <p style="margin:905px 470px">{{$pdf->f42}}</p>
    
    <p style="margin:935px 5px">@if($pdf->f43 == 1) / @endif</p>
    <p style="margin:935px 115px">@if($pdf->f43 == 2) / @endif</p>
    <p style="margin:935px 210px">@if($pdf->f44 == 1) / @endif</p>
    <p style="margin:955px 210px">@if($pdf->f44 == 2) / @endif</p>

</div>
</body>
</html>