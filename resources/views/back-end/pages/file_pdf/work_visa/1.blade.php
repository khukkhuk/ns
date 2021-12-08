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
    </style>
</head>
<body style="top:0;left:0">
<div style="page-break-after:unset;">
    <img src="backend/images/work_visa/7 มอบอำนาจ.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    <p style="position:fixed;color:red;margin:90px 450px">{{$pdf->f1}}</p>
    <p style="position:fixed;color:red;margin:125px 430px">{{$pdf->f2}}</p>
    <p style="position:fixed;color:red;margin:125px 500px">{{$pdf->f3}}</p>
    <p style="position:fixed;color:red;margin:125px 620px">{{$pdf->f4}}</p>
    <?php
    $resultr->prefix_th = "นางสาว";
        if($resultr->prefix_th == "นาง"){
            $style1 ="margin:145px 202px";
            $style2 ="margin:145px 265px";
        }else if($resultr->prefix_th == "นางสาว"){
            $style1 ="margin:145px 235px";
            $style2 ="margin:145px 202px";
        }else{
            $style1 ="margin:145px 235px";
            $style2 ="margin:145px 265px";
        }
    ?>
    <p style="position:fixed;color:red;{{$style1}};font-size:27px">/</p>
    <p style="position:fixed;color:red;{{$style2}};font-size:27px">/</p>
    <p style="position:fixed;color:red;margin:155px 310px">{{$resultr->name_th}} {{$resultr->surname_th}}</p>
    <p style="position:fixed;color:red;margin:155px 630px">{{$resultr->age}}</p>
    <p style="position:fixed;color:red;margin:190px 110px">{{$pdf->f5}}</p>
    <p style="position:fixed;color:red;margin:190px 210px">{{$pdf->f6}}</p>
    <p style="position:fixed;color:red;margin:190px 320px">{{$pdf->f7}}</p>
    <p style="position:fixed;color:red;margin:190px 440px">{{$pdf->f8}}</p>
    <p style="position:fixed;color:red;margin:190px 630px">{{$resultr->address_th}}</p>
    <p style="position:fixed;color:red;margin:220px 100px"></p>
    <p style="position:fixed;color:red;margin:220px 200px">{{$resultr->road_th}}</p>
    <p style="position:fixed;color:red;margin:220px 330px">{{$resultr->group_th}}</p>
    <p style="position:fixed;color:red;margin:220px 410px">{{$rowrsd->name_th}}</p>
    <p style="position:fixed;color:red;margin:220px 560px">{{$rowrd->name_th}}</p>
    <p style="position:fixed;color:red;margin:250px 110px">{{$rowrp->name_th}}</p>
    <p style="position:fixed;color:red;margin:280px 355px">{{$pdf->f9}}</p>
    <p style="position:fixed;color:red;margin:280px 630px">{{$pdf->f10}}</p>
    <p style="position:fixed;color:red;margin:315px 110px">{{$pdf->f11}}</p>
    <p style="position:fixed;color:red;margin:315px 210px">{{$pdf->f12}}</p>
    <p style="position:fixed;color:red;margin:315px 320px">{{$pdf->f13}}</p>
    <p style="position:fixed;color:red;margin:315px 450px">{{$pdf->f14}}</p>
    <p style="position:fixed;color:red;margin:315px 635px">{{$pdf->f15}}</p>
    <p style="position:fixed;color:red;margin:345px 110px">{{$pdf->f16}}</p>
    <p style="position:fixed;color:red;margin:345px 200px">{{$pdf->f17}}</p>
    <p style="position:fixed;color:red;margin:345px 330px">{{$pdf->f18}}</p>
    <p style="position:fixed;color:red;margin:345px 420px">{{$pdf->f19}}</p>
    <p style="position:fixed;color:red;margin:345px 570px">{{$pdf->f20}}</p>
    <div style="position:fixed;margin:380px 100px;width:50px;height:19px;background-color:white">

    </div>
    <p style="position:fixed;color:red;margin:375px 120px">{{$pdf->f21}}</p>
    <p style="position:fixed;color:red;margin:405px 140px">{{$pdf->f22}}</p>
    <p style="position:fixed;color:red;margin:595px 340px">{{$pdf->f23}}</p>

</div>
</body>
</html>