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
            position:fixed;color:red;;
        }
    </style>
</head>
 <body style="top:0;left:0"> 
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0001.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
        <p style=";margin:40px 270px">เมียนมา</p>
        <p style=";margin:40px 480px">Mianmar</p>
        <p style=";margin:110px 70px">{{$resultr->name_th}}  {{$resultr->surname_th}}</p>
        <p style=";margin:135px 145px">กิจการ</p>
        <p style=";margin:160px 70px">{{$resultr->addres_th}}</p>
        <p style=";margin:160px 140px">{{$resultr->group_th}}</p>
        <p style=";margin:160px 230px">ซอย</p>
        <p style=";margin:185px 70px">{{$resultr->road_th}}</p>
        <p style=";margin:185px 235px">{{$rowrsd->name_th}}</p>
        <p style=";margin:210px 87px">{{$rowrd->name_th}}</p>
        <p style=";margin:210px 220px">{{$rowrp->name_th}}</p>
        <p style=";margin:235px 87px">{{$resultr->tel_number}}</p>
        <p style=";margin:235px 220px">โทรสาร</p>
        <p style=";margin:280px 60px">{{$resultr->company_name}}</p>
        <p style=";margin:305px 60px">{{$resulte->workplace_address_th}} {{$resulte->workplace_group_th}} {{$resulte->workplace_road_th}} {{$rowesd->name_th}} {{$rowed->name_th}} {{$rowep->name_th}}</p>
        <p style=";margin:355px 170px">วันที่</p>
        <p style=";margin:355px 225px">เดือน</p>
        <p style=";margin:355px 280px">ปี</p>
        <p style=";margin:380px 225px">คน</p>
        <p style=";margin:405px 30px">/</p>
        <p style=";margin:427px 280px">คน</p>
        <p style=";margin:427px 140px">คน</p>
        <p style=";margin:450px 30px">/</p>
        <p style=";margin:475px 280px">คน</p>
        <p style=";margin:475px 140px">คน</p>
        <p style=";margin:500px 30px">/</p>
        <p style=";margin:525px 280px">คน</p>
        <p style=";margin:525px 140px">คน</p>
        <p style=";margin:547px 30px">/</p>
        <p style=";margin:547px 140px">คน</p>
        <p style=";margin:570px 140px">คน</p>
        <p style=";margin:570px 280px">คน</p>
        <p style=";margin:595px 162px">ปี</p>
        <p style=";margin:595px 230px">สูง</p>
        <p style=";margin:595px 300px">น้ำหนัก</p>
        <p style=";margin:642px 70px">{{$resulte->workplace_address_th}}</p>
        <p style=";margin:642px 140px">ซอย</p>
        <p style=";margin:642px 230px">{{$resulte->workplace_group_th}}</p>
        <p style=";margin:665px 70px">{{$resulte->workplace_road_th}}</p>
        <p style=";margin:665px 240px">{{$rowesd->name_th}}</p>
        <p style=";margin:692px 90px">{{$rowed->name_th}}</p>
        <p style=";margin:692px 240px">{{$rowep->name_th}}</p>
        <p style=";margin:717px 140px">ปี</p>
        <p style=";margin:717px 190px">เดือน</p>
        <p style=";margin:740px 90px">บาท</p>
        <p style=";margin:765px 155px">ชั่วโมง</p>
        <p style=";margin:790px 145px">วัน</p>
        <p style=";margin:790px 300px">วัน2</p>
        <p style=";margin:815px 137px">วัน3</p>
        <p style=";margin:837px 310px">วัน4</p>
        <p style=";margin:912px 137px">จังหวัด</p>
        
        <p style=";margin:110px 0px 0px 400px">{{$resultr->name_en}} {{$resultr->surname_en}}</p>
        <p style=";margin:135px 465px">กิจการ</p>
        <p style=";margin:160px 450px">{{$resulte->workplace_address_en}}</p>
        <p style=";margin:160px 525px">{{$resulte->workplace_group_en}}</p>
        <p style=";margin:160px 590px">{{$resulte->workplace_address_en}}</p>
        <p style=";margin:185px 420px">{{$resulte->workplace_road_en}}</p>
        <p style=";margin:185px 0px 0px 600px">{{$rowesd->name_en}}</p>
        <p style=";margin:210px 0px 0px 417px">{{$rowed->name_en}}</p>
        <p style=";margin:210px 0px 0px 600px">{{$rowep->name_en}}</p>
        <p style=";margin:235px 437px">{{$resultr->tel_number}}</p>
        <p style=";margin:235px 560px">โทรสาร</p>
        <p style=";margin:280px 0px 0px 380px">{{$resultr->company_name}}</p>
        <p style=";margin:305px 0px 0px 420px">{{$resulte->workplace_address_en}} {{$resulte->workplace_group_en}} {{$resulte->workplace_road_en}} {{$rowesd->name_en}} {{$rowed->name_en}} {{$rowep->name_en}}</p>
        <p style=";margin:355px 620px">วันที่</p>
        <p style=";margin:355px 655px">เดือน</p>
        <p style=";margin:355px 700px">ปี</p>
        <p style=";margin:380px 515px">คน</p>
        <p style=";margin:405px 365px">/</p>
        <p style=";margin:427px 630px">คน</p>
        <p style=";margin:427px 420px">คน</p>
        <p style=";margin:450px 365px">/</p>
        <p style=";margin:475px 630px">คน</p>
        <p style=";margin:475px 420px">คน</p>
        <p style=";margin:500px 365px">/</p>
        <p style=";margin:525px 630px">คน</p>
        <p style=";margin:525px 420px">คน</p>
        <p style=";margin:547px 365px">/</p>
        <p style=";margin:547px 490px">คน</p>
        <p style=";margin:570px 420px">คน</p>
        <p style=";margin:570px 630px">คน</p>
        <p style=";margin:595px 470px">ปี</p>
        <p style=";margin:595px 600px">สูง</p>
        <p style=";margin:595px 690px">น้ำหนัก</p>
        <p style=";margin:642px 0px 0px 440px">{{$resulte->workplace_address_en}}</p>
        <p style=";margin:642px 535px">ซอย</p>
        <p style=";margin:642px 0px 0px 600px">{{$resulte->workplace_group_en}}</p>
        <p style=";margin:665px 0px 0px 400px">{{$resulte->workplace_road_en}}</p>
        <p style=";margin:665px 0px 0px 580px">{{$rowesd->name_en}}</p>
        <p style=";margin:692px 0px 0px 420px">{{$rowed->name_en}}</p>
        <p style=";margin:692px 570px">{{$rowep->name_en}}</p>
        <p style=";margin:717px 500px">ปี</p>
        <p style=";margin:717px 600px">เดือน</p>
        <p style=";margin:740px 410px">บาท</p>
        <p style=";margin:765px 575px">ชั่วโมง</p>
        <p style=";margin:790px 465px">วัน</p>
        <p style=";margin:790px 650px">วัน2</p>
        <p style=";margin:815px 487px">วัน3</p>
        <p style=";margin:837px 710px">วัน4</p>
        <p style=";margin:912px 437px">จังหวัด</p>

    </div>
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0002.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
        <p style=";margin:132px 90px">วันที่</p>
        <p style=";margin:178px 70px">{{$resultr->name_th}} {{$resultr->surname_th}}</p>
        <p style=";margin:202px 90px">{{$resultr->address_th}}</p>
        <p style=";margin:202px 130px">{{$resultr->group_th}}</p>
        <p style=";margin:202px 200px">{{{$resultr->tel_number}}}</p>
        <p style=";margin:225px 70px">{{$resultr->road_th}}</p>
        <p style=";margin:225px 200px">{{$rowesd->name_th}}</p>
        <p style=";margin:250px 80px">{{$rowed->name_th}}</p>
        <p style=";margin:250px 210px">{{$rowep->name_th}}</p>
        <p style=";margin:272px 90px">{{$resultr->tel_number}}</p>
        <p style=";margin:272px 220px">จังหวัด</p>
        <p style=";margin:295px 100px">แต่งให้</p>
        <p style=";margin:342px 90px">ที่อยู่</p>
        <p style=";margin:415px 120px">ออกให้</p>
        <p style=";margin:532px 130px">เลขที่</p>
        
        <p style=";margin:132px 390px">วันที่</p>
        <p style=";margin:178px 0px 0px 370px">{{$resultr->name_en}} {{$resultr->surname_en}}</p>
        <p style=";margin:202px 0px 0px 420px">{{$resultr->address_en}}</p>
        <p style=";margin:202px 0px 0px 470px">{{$resultr->group_en}}</p>
        <p style=";margin:202px 0px 0px 560px">{{$resultr->tel_number}}</p>
        <p style=";margin:225px 0px 0px 390px">{{$resultr->road_en}}</p>
        <p style=";margin:225px 0px 0px 560px">{{$rowesd->name_en}}</p>
        <p style=";margin:250px 0px 0px 400px">{{$rowed->name_en}}</p>
        <p style=";margin:250px 0px 0px 560px">{{$rowep->name_en}}</p>
        <p style=";margin:272px 390px">ถนน</p>
        <p style=";margin:272px 525px">จังหวัด</p>
        <p style=";margin:295px 470px">แต่งให้</p>
        <p style=";margin:342px 420px">ที่อยู่</p>
        <p style=";margin:415px 430px">ออกให้</p>
        <p style=";margin:532px 370px">เลขที่</p>

    </div>
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0003.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
        <p style=";margin:165px 270px">เมื่อ</p>
        <p style=";margin:195px 60px">ณ</p>
        <p style=";margin:195px 210px">ระหว่าง</p>
        <p style=";margin:257px 125px">ที่อยู่ปัจจุบัน</p>
        <p style=";margin:342px 60px">เรียก</p>
        <p style=";margin:377px 95px">ที่อยู่</p>
        <p style=";margin:595px 250px">ทุกวันที่</p>
        <p style=";margin:625px 125px">กำหนด</p>
        <p style=";margin:655px 190px">ทำงาน ณ</p>
        <p style=";margin:745px 245px">ไม่เกิน</p>
        <p style=";margin:805px 125px">ทำงาน</p>
        <p style=";margin:165px 590px">ชื่อ</p>
        <p style=";margin:182px 420px">ณ</p>
        <p style=";margin:182px 540px">ระหว่าง</p>
        <p style=";margin:215px 455px">ที่อยู่ปัจจุบัน</p>
        <p style=";margin:260px 415px">เรียก</p>
        <p style=";margin:275px 540px">ข้อความ</p>
        <p style=";margin:297px 415px">ข้อความ1</p>
        <p style=";margin:297px 570px">ข้อความ2</p>
        <p style=";margin:332px 440px">ข้อความ3</p>
        <p style=";margin:382px 435px">ข้อความ4</p>
        <p style=";margin:460px 445px">ข้อความ5</p>
        <p style=";margin:615px 395px">ข้อความ6</p>
        <p style=";margin:632px 395px">ข้อความ7</p>
        <p style=";margin:650px 505px">ข้อความ8</p>
        <p style=";margin:680px 395px">ข้อความ9</p>
        <p style=";margin:702px 395px">ข้อความ10</p>
        <p style=";margin:720px 540px">ข้อความ11</p>
        <p style=";margin:807px 615px">ข้อความ12</p>
        <p style=";margin:855px 395px">ข้อความ13</p>
        <p style=";margin:870px 540px">ข้อความ14</p> 
        <p style=";margin:910px 505px">ข้อความ15</p>
    </div>
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0004.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
        <p style=";margin:68px 230px">ไม่เกิน</p>
        <p style=";margin:96px 230px">เมื่อ</p>
        <p style=";margin:220px 245px">สัปดาห์</p>
        <p style=";margin:282px 240px">ปีละ</p>
        <p style=";margin:372px 90px">วัน</p>
        <p style=";margin:530px 75px">อัตรา</p>
        <p style=";margin:622px 45px">ชั่วโมง</p>

        
        <p style=";margin:60px 600px">hours</p>
        <p style=";margin:77px 400px">days</p>
        <p style=";margin:91px 517px">1</p>
        <p style=";margin:109px 425px">2</p>
        <p style=";margin:195px 387px">3</p>
        <p style=";margin:222px 387px">4</p>
        <p style=";margin:257px 387px">5</p>
        <p style=";margin:307px 530px">6</p>
        <p style=";margin:337px 557px">7</p>
        <p style=";margin:402px 527px">8</p>

        <p style=";margin:517px 580px">9</p>
        <p style=";margin:565px 450px">10</p>
        <p style=";margin:615px 420px">11</p>
        <p style=";margin:665px 400px">11</p>
    </div>
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0005.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
    </div>
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0006.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
    </div>
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0007.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
    </div> 
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0008.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
        
        <p style=";margin:32px 490px">ทำที่</p>
        <p style=";margin:82px 410px">วัน</p>
        <p style=";margin:82px 480px">เดือน</p>
        <p style=";margin:82px 600px">ปี</p>
        <p style=";margin:130px 270px">{{$resultr->name_th}} {{$resultr->name_th}}</p>
        <p style=";margin:155px 440px">เลข</p>
        <p style=";margin:180px 0px 0px 280px">{{$resultr->address_th}} {{$resultr->group_th}} {{$resultr->road_th}} {{$rowrsd->name_th}} {{$rowrd->name_th}} {{$rowrp->name_th}} {{$resultr->zipcode_th}}</p>
        <p style=";margin:252px 320px">อำนาจ</p>
        <p style=";margin:280px 360px">นิติ</p>
        <p style=";margin:302px 290px">ที่อยู่</p>
    </div>
    <div style="page-break-after:always;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0009.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
        <p style="margin:35px 540px">1</p>
        <p style="margin:58px 510px">2</p>
        <p style="margin:83px 405px">3</p>
        <p style="margin:83px 500px">4</p>
        <p style="margin:83px 610px">5</p>
        <p style="margin:108px 405px">6</p>
        <p style="margin:108px 500px">7</p>
        <p style="margin:108px 610px">8</p>
        <p style="margin:130px 190px">{{$resultr->name_en}} {{$resultr->surname_en}}</p>
        <p style="margin:155px 240px">{{$resultr->name_th}} {{$resultr->surname_th}}</p>
        <p style="margin:180px 350px">11</p>
        <p style="margin:205px 260px">12</p>
        <p style="margin:230px 310px">13</p>
        <p style="margin:253px 220px">14</p>
        <p style="margin:278px 190px">15</p>
        <p style="margin:278px 500px">16</p>
        <p style="margin:302px 190px">{{$resultr->company_name}}</p>
        <p style="margin:302px 500px">{{$resultr->tel_number}}</p>
        <p style="margin:325px 150px">{{$resultr->address_en}}</p>
        <p style="margin:325px 0px 0px 320px">{{$resultr->soi_en}}</p>
        <p style="margin:325px 0px 0px 500px">{{$resultr->road_en}}</p>
        <p style="margin:350px 150px">{{$resultr->address_th}}</p>
        <p style="margin:350px 320px">{{$resultr->soi_th}}</p>
        <p style="margin:350px 500px">{{$resultr->road_th}}</p>
        <p style="margin:375px 150px">{{$rowrsd->name_en}}</p>
        <p style="margin:375px 350px">{{$rowrd->name_en}}</p>
        <p style="margin:375px 520px">{{$rowrp->name_en}}</p>
        <p style="margin:400px 150px">{{$rowrsd->name_th}}</p>
        <p style="margin:400px 350px">{{$rowrd->name_th}}</p>
        <p style="margin:400px 520px">{{$rowrp->name_th}}</p>
        <p style="margin:425px 492px">28</p>
        <p style="margin:497px 465px">29</p>
        <p style="margin:567px 260px">30</p>
        <p style="margin:618px 240px">30</p>
    </div>
    <div style="page-break-after:unset;">
        <img src="backend/images/mou/myanmar/ดีมาน-เมียนมา/ดีมาน เมียนมา_page-0010.jpg" style="margin:-45px;position:fixed;width:800px" alt="">
    
        <p style=";margin:57px 67px">/</p>
        <p style=";margin:57px 250px">เมื่อ</p>
        <p style=";margin:57px 400px">เลข</p>
        <p style=";margin:57px 600px">บาท</p>
        <p style=";margin:92px 67px">/</p>
        <p style=";margin:92px 270px">เมื่อ</p>
        <p style=";margin:92px 570px">บาท</p>
        <p style=";margin:130px 67px">/</p>
        <p style=";margin:130px 330px">เลข</p>
        <p style=";margin:130px 620px">เลข</p>
        <p style=";margin:168px 300px">ชื่อ</p>
        <p style=";margin:187px 240px">ที่ตั้ง</p>
        <p style=";margin:225px 240px">ประเภท</p>
        <p style=";margin:312px 60px">บาท</p>
        <p style=";margin:312px 200px">เดือน</p>
        <p style=";margin:312px 460px">ประเภท</p>
        <p style=";margin:342px 200px">บาท</p>
        <p style=";margin:342px 570px">เดือน</p>
        <p style=";margin:361px 37px">/</p>
        <p style=";margin:361px 230px">บาท</p>
        <p style=";margin:382px 37px">/</p>
        <p style=";margin:382px 330px">คน</p>
        <p style=";margin:417px 37px">/</p>
        <p style=";margin:417px 320px">คน</p>
        <p style=";margin:440px 37px">/</p>
        <p style=";margin:440px 400px">คน</p>
        <p style=";margin:460px 37px">/</p>
        <p style=";margin:460px 270px">คน</p>
        <p style=";margin:460px 390px">/</p>
        <p style=";margin:460px 590px">คน</p>
        <p style=";margin:505px 500px">ชื่อ</p>
        <p style=";margin:527px 200px">สัญชาติ</p>
        <p style=";margin:527px 520px">หมู่โลหิต</p>
        <p style=";margin:545px 500px">ชื่อ</p>
        <p style=";margin:567px 240px">ประเภทงาน</p>
        <p style=";margin:590px 200px">ลักษณะงาน</p>
        <p style=";margin:630px 340px">ที่ทำงาน</p>
        <p style=";margin:647px 160px">ปี</p>
        <p style=";margin:647px 240px">เดือน</p>
        <p style=";margin:647px 320px">วัน</p>
        <p style=";margin:647px 520px">วันที่</p>
        <p style=";margin:685px 240px">บาท</p>
        <p style=";margin:685px 550px">บาท</p>
        <p style=";margin:725px 240px">สูงสุด</p>
        <p style=";margin:725px 420px">ปี</p>
        <p style=";margin:725px 560px">/</p>
        <p style=";margin:725px 607px">/</p>
        <p style=";margin:780px 80px">เหตุผล</p>

    </div>
</body>
</html>