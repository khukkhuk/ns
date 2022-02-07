var fullUrl = window.location.origin + '/webpanel/bill';

// Table
var oTable;
var segment = $('#segment').val();
var folder = $('#folder').val();
$(function () {
    chart(1)
    oTable = $('#data-table').DataTable({
        "sDom": "<'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-'p>>",
        processing: true,
        serverSide: true,
        stateSave: true,
        scroller: true,
        scrollCollapse: true,
        scrollX: true,
        ordering: false,
        // scrollY: ''+($(window).height()-370)+'px',
        iDisplayLength: 25,
        ajax: {
            url: fullUrl+"/datatable",
            data: function (d) {
                d.Like={};
                $('.myLike').each(function() {
                if( $.trim($(this).val()) && $.trim($(this).val()) != '0' ){
                    d.Like[$(this).attr('name')] = $.trim($(this).val());
                }
                });
                oData = d;
            },
            method: 'POST'
        },
        columns: [
            {data: 'DT_RowIndex',    title :'#',    className: 'text-center w10'}, // 0
            {data: 'bill_date',    title :'วันที่ออกบิล',    className: 'text-center w30'}, //2
            // {data: 'company',    title :'บริษัท',    className: 'text-center w30'}, //3
            {data: 'name',    title :'ชื่อ',    className: 'text-center w30'}, //3
            {data: 'tel_number',    title :'เบอร์โทร',    className: 'text-center w30'}, //3
            {data: 'notes',    title :'หมายเหตุ',    className: 'text-center w30'}, //5 //5
            {data: 'id',    title :'',    className: 'text-center w30'}, //5 //5
        ],
        rowCallback: function (nRow, aData, dataIndex) {
            // console.log(aData);
            $('td:eq(5)', nRow).html(''
            +'<a class="btn btn-sm btn-success" href="view/pdf/'+aData['id']+'">ดูรายละเอียดข้อมูล</a>'
            )
        }
    });
    $('.myWhere,.myLike,.myCustom,#onlyTrashed').keyup('change', function(e){
        oTable.draw();
    });
    $('.selecttype').select2()
    $('#selectemployer').select2()
});
$("#selectemployer").change(function(){
    $.ajax({
        type:'GET',
        url: fullUrl+'/get_employee/'+$(this).val(),
        success: function(res){
            console.log(res)
            $("#employee_data").val(res)
            $("#employee1").html(res)
        }
    })
})
function status(ids){
    const $this = $(this), id = ids;
    $.ajax({ type: 'get', url: fullUrl + '/status/' + id, success: function (res) { if (res == false) { $(this).prop('checked', false) } } });
}
$('#selectAll').on('click', function () {
    if ($(this).is(':checked')) { $('#delSelect').prop('disabled', false); $('.ChkBox').prop('checked', true) } else { $('#delSelect').prop('disabled', true); $('.ChkBox').prop('checked', false) }
})
$('.ChkBox').click(function () {
    const checked = []; const $this = $(this).prop("checked");
    $('.ChkBox').each(function () { if ($(this).is(':checked')) { checked.push($this) } })
    if (checked.length > 0) { $('#delSelect').prop('disabled', false); } else { $('#delSelect').prop('disabled', true); }
})
function deleteItem(ids)
{
    const id = [ids];
    if (id.length > 0) { destroy(id) }
}
$('.deleteItem').on('click', function () {
    const id = [$(this).data('id')];
    if (id.length > 0) { destroy(id) }
})
$('#delSelect').on('click', function () {
    const id = $('.ChkBox:checked').map(function () { return $(this).val() }).get();
    console.log(id);
    if (id.length > 0) { destroy(id) }
});
function destroy(id) {
    Swal.fire({
        title: "ลบข้อมูล", text: "คุณต้องการลบข้อมูลใช่หรือไม่?", icon: "warning", showCancelButton: true, confirmButtonColor: "#DD6B55", showLoaderOnConfirm: true,
        preConfirm: () => {
            return fetch(fullUrl + '/destroy?id=' + id)
                .then(response => response.json())
                .then(data => location.reload())
                .catch(error => { Swal.showValidationMessage(`Request failed: ${error}`) })
        }
    });
}
function addbill(){
    num = parseInt($("#maxline").val());
    $("#maxline").val(num+1);
    num = parseInt($("#maxline").val());
    // alert($("#data_select2").val())
    data =   '<tr><td><input class="form-control amount" type="number" id="amount'+num+'" name="amount'+num+'"></td>'
            +'<td><input type="text" hidden value="" id="type'+num+' name="type'+num+'">'
            +'<input type="text" hidden value="" id="type_name'+num+'" name="type_name'+num+'">'

            +'<select name="select_type'+num+'" id="select_type'+num+'" class="selecttype form-control" hidden>'+$("#data_select2").val()+'</select></td>'
            
            +'<td><select name="employee'+num+'" class="selecttype" id="employee'+num+'"></select></td>'
            +'<td><input class="form-control" type="text" id="price'+num+'"></td>'
            +'<td><input class="form-control" type="text" id="total_per'+num+'" name="total_per'+num+'"></td></tr>';

    $(data).appendTo($("#table-row"));
    $("#employee"+num).html($("#employee_data").val())
    $("#employee"+num).select2()
    $("#select_type"+num).select2()
}

$(document).on('change','.selecttype',function(){
    id = $(this).val();
    sort = $(this).attr("id").substr(11,15);
    $.ajax({ type: 'get',
        url: "webpanel/bill/getdata/"+id,
        success: function (res){
            $("#price"+sort).val(res['price']);
            if($("#amount"+sort).val()>0){
                cal_price(sort);
                settotal();
                console.log(">")
            }
        }
    });
});

$('.myLike').click(function(){
    chart($(this).val())
})
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
function get_chart(income , pay ,type){
    total = income - pay
    var xValues = ["รายรับ", "รายจ่าย", "คงเหลือ"];
    var yValues = [ income,pay,total];
    var barColors = ["green", "red","orange"];

    if(type == 1){
        title = "รายรับ-จ่าย รายวัน";
    } if (type == 2){
        title = "รายรับ-จ่าย รายเดือน";
    }
    if (type == 3){
        title = "รายรับ-จ่าย รายปี";
    }
    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
            display: true,
              text: title
            }
        }
    });
}
$(document).on('keyup', '.amount', function(){
    sort = $(this).attr("id").substr(6,10);
    if($("#select_type"+sort).val()>0){
        cal_price(sort);
        settotal();
    }
});
$(document).on('change', '.amount', function(){
    sort = $(this).attr("id").substr(6,10);
    if($("#select_type"+sort).val()>0){
        cal_price(sort);
        settotal();
    }
});
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