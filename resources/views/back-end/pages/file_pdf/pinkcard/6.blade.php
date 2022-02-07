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
    <img src="backend/images/pinkcard/3 ภาษา เมียนมา_page-0001.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
                                                
    @php $p3 = \App\Models\Backend\Provinces::find($pdf->f3); @endphp
    @php $p4 = \App\Models\Backend\District::find($pdf->f4); @endphp
    @php $p5 = \App\Models\Backend\SubDistrict::find($pdf->f5); @endphp
    <p style="position:fixed;margin:216px 55px">{{$pdf->f1}}</p>
    <p style="position:fixed;margin:282px 40px">{{$pdf->f2}} ต.{{$p5->name_th}} อ.{{$p4->name_th}} จ.{{$p3->name_th}}</p>
    <p style="position:fixed;margin:345px 55px">{{$pdf->f6}}</p>
    
    @php $p8 = \App\Models\Backend\Provinces::find($pdf->f8); @endphp
    @php $p9 = \App\Models\Backend\District::find($pdf->f9); @endphp
    @php $p10 = \App\Models\Backend\SubDistrict::find($pdf->f10); @endphp

    <p style="position:fixed;margin:410px 40px">{{$pdf->f7}} ต.{{$p10->name_th}} อ.{{$p9->name_th}} จ.{{$p8->name_th}}</p>

    <p style="position:fixed;margin:595px 260px">{{$pdf->f11}}</p>
    <p style="position:fixed;margin:655px 220px">{{$pdf->f25}}</p>
    <p style="position:fixed;margin:623px 130px">{{$pdf->f12}}</p>

    <p style="position:fixed;margin:745px 248px">{{$pdf->f13}}</p>
    
    @php $p15 = \App\Models\Backend\Provinces::find($pdf->f15); @endphp
    @php $p16 = \App\Models\Backend\District::find($pdf->f16); @endphp
    @php $p17 = \App\Models\Backend\SubDistrict::find($pdf->f17); @endphp
    <p style="position:fixed;margin:805px 125px">{{$pdf->f14}} ต.{{$p17->name_th}} อ.{{$p16->name_th}} จ.{{$p15->name_th}}</p>
    

</div>
 <div style="page-break-after: always;">
    <img src="backend/images/pinkcard/3 ภาษา เมียนมา_page-0002.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    <p style="position:fixed;margin:65px 230px">{{$pdf->f18}}</p>
    <p style="position:fixed;margin:95px 220px">{{$pdf->f19}}</p>
    <p style="position:fixed;margin:217px 255px">{{$pdf->f20}}</p>
    <p style="position:fixed;margin:280px 250px">{{$pdf->f21}}</p>
    <p style="position:fixed;margin:370px 90px">{{$pdf->f22}}</p>
    <p style="position:fixed;margin:525px 85px">{{$pdf->f23}}</p>
    <p style="position:fixed;margin:620px 40px">{{$pdf->f24}}</p>
</div>

 <div style="page-break-after: always;">
    <img src="backend/images/pinkcard/3 ภาษา เมียนมา_page-0003.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
</div>
 <div style="page-break-after: always;">
    <img src="backend/images/pinkcard/3 ภาษา เมียนมา_page-0004.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
</div>
 <div style="page-break-after: unset;">
    <img src="backend/images/pinkcard/3 ภาษา เมียนมา_page-0005.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
</div>
</body>
</html>