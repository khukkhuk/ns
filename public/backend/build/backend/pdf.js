var fullUrl = window.location.origin + '/webpanel/form_pdf';

// Table
var oTable;
var segment = $('#segment').val();
var folder = $('#folder').val()
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
})
$('#province1').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var province_id = $(this).val();
        var _token = $('#_token').val();
        $('[name="zipcode"]').val('');
        $('[name="subdistrict1"]').val('กรุณาเลือกตำบล');
        $.ajax({
            url:'/ajax/get_distirct',
            method:"get",
            dataType: 'html',
            data:{
                'id':province_id,
                '_token':_token,
            },
            success:function(result)
            {   
                
                $("#district1").html(result);
            }
        })
    }
})
$('#district1').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var district_id = $(this).val();
        var _token = $('#_token').val();
        $.ajax({
            url:'/ajax/get_subdistirct',
            method:"get",
            dataType: 'html',
            data:{
                'id':district_id,
                '_token':_token,
            },
            success:function(result){
                $("#subdistrict1").html(result);
            },
            error: function(xhr, status, error) {
                alert("error");
                $("#subdistrict1").html(xhr.responseText);
            }
            
        })
    }
}),

$('#subdistrict1').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var subdistrict_id = $(this).val();
        var _token = $('#_token').val();
        $.ajax({
            url:'/ajax/get_zipcode',
            method:"get",
            dataType: 'json',
            data:{
                'id':subdistrict_id,
                '_token':_token,
            },
            success:function(result){
                $('#zipcode1').val(result);
            },
            error: function(xhr, status, error) {
                // alert("error");
                $('#zipcode1').val(result);
              }
            
        })
    }
}),

$('#province2').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var province_id = $(this).val();
        var _token = $('#_token').val();
        $('[name="zipcode"]').val('');
        $('[name="subdistrict2"]').val('กรุณาเลือกตำบล');
        $.ajax({
            url:'/ajax/get_distirct',
            method:"get",
            dataType: 'html',
            data:{
                'id':province_id,
                '_token':_token,
            },
            success:function(result)
            {   
                
                $("#district2").html(result);
            }
        })
    }
})
$('#district2').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var district_id = $(this).val();
        var _token = $('#_token').val();
        $.ajax({
            url:'/ajax/get_subdistirct',
            method:"get",
            dataType: 'html',
            data:{
                'id':district_id,
                '_token':_token,
            },
            success:function(result){
                $("#subdistrict2").html(result);
            },
            error: function(xhr, status, error) {
                alert("error");
                $("#subdistrict2").html(xhr.responseText);
            }
            
        })
    }
}),

$('#subdistrict2').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var subdistrict_id = $(this).val();
        var _token = $('#_token').val();
        $.ajax({
            url:'/ajax/get_zipcode',
            method:"get",
            dataType: 'json',
            data:{
                'id':subdistrict_id,
                '_token':_token,
            },
            success:function(result){
                $('#zipcode2').val(result);
            },
            error: function(xhr, status, error) {
                // alert("error");
                $('#zipcode2').val(result);
              }
            
        })
    }
}),

$('#province3').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var province_id = $(this).val();
        var _token = $('#_token').val();
        $('[name="zipcode"]').val('');
        $('[name="subdistrict3"]').val('กรุณาเลือกตำบล');
        $.ajax({
            url:'/ajax/get_distirct',
            method:"get",
            dataType: 'html',
            data:{
                'id':province_id,
                '_token':_token,
            },
            success:function(result)
            {   
                
                $("#district3").html(result);
            }
        })
    }
})
$('#district3').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var district_id = $(this).val();
        var _token = $('#_token').val();
        $.ajax({
            url:'/ajax/get_subdistirct',
            method:"get",
            dataType: 'html',
            data:{
                'id':district_id,
                '_token':_token,
            },
            success:function(result){
                $("#subdistrict3").html(result);
            },
            error: function(xhr, status, error) {
                alert("error");
                $("#subdistrict3").html(xhr.responseText);
            }
            
        })
    }
}),

$('#subdistrict3').change(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    if($(this).val()!=''){
        var subdistrict_id = $(this).val();
        var _token = $('#_token').val();
        $.ajax({
            url:'/ajax/get_zipcode',
            method:"get",
            dataType: 'json',
            data:{
                'id':subdistrict_id,
                '_token':_token,
            },
            success:function(result){
                $('#zipcode3').val(result);
            },
            error: function(xhr, status, error) {
                // alert("error");
                $('#zipcode3').val(result);
              }
            
        })
    }
}),

function chart(type){

    $.ajax({ type: 'get',
        url: "webpanel/bill/get_report/"+type,
        success: function (res){
            income = res.income
            expenses = res.pay   
            console.log(res)
            get_chart(income , pay,type)
        }
    });
}
function cal_price(sort){
    $("#total_per"+sort).val(parseInt($("#amount"+sort).val()) * parseInt($("#price"+sort).val()));
}
function settotal(){
    total=0;
    for(line = $("#maxline").val();0<line;line--){
        if(parseInt($("#total_per"+line).val())>0){
            total += parseInt($("#total_per"+line).val());
            
        }
    }
    $("#total").val(total)
}