/*Created: Vinay Jaiswal
* Date:27-11-2017*/

/*submit form data by ajax*/
$(" #id,.class ").submit(function(e)
{
    e.preventDefault();
    $elm = $('.btn-submit');
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    var formData = new FormData(this);
    $.ajax({
        type: 'POST',
        url: "../includes/adminfunction.php",
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data)
        {
            var data = jQuery.parseJSON(data);
            if(data.valid)
            {
                _toastr(data.msg,"bottom-right","success",false);
                setTimeout(function(){
                    location.href='shopapp.php';
                }, 2000);
            }
            else
            {
                _toastr(data.msg,"bottom-right","info",false);
                $('.btn-submit').remove();
                $elm.show();
                return false;
            }

        }
    });
});

/*ajax onclick */
$("body").on('click', '.GeneratePassword', function()
{
    var id = $(this).attr("data-id");
    var datadetail = $(this).attr("data-detail");
    $elm = $(this);
    $elm.hide();
    $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
    $.ajax({
        type : 'POST',
        url : "../includes/adminfunction.php",
        data :  {
            id : id,
            datadetail : datadetail,
            type : "GeneratePassword"
        },
        success : function(data)
        {
            $(".submit-loading").remove();
            $elm.show();
            var data = jQuery.parseJSON(data);
            if(data.valid)
            {
                _toastr(data.message,"bottom-right","success",false);
                return false;
            }
            else
            {
                _toastr(data.message,"bottom-right","info",false);
                return false;
            }
            return false;
        }
    });

});

/*Extra div or append code in index.php*/
function randomIntFromInterval(min,max)
{
    return Math.floor(Math.random()*(max-min+1)+min);
}

$('select[name=status]').change(function()
{
    if(this.value == 'Approved') {
        $('.approval_field').attr("required", true);
    }
    else {
        $('.approval_field').attr("required", false);
    }
});

/*validate for field*/
$("#formvalidate").click(function(e)
{
    var formname = $(this).attr("data-form");
    $('#'+formname).validate();
    if($('#'+formname).valid())
    {
        $('#'+formname).submit();
        return false;
    }
    else
    {
        return false
    }
});

/*Add extra div element*/
$(".addShopAppAttach").click(function () {
    $(".ShopAppAttach").append('<div class="row">'+
        '<div class="form-group">'+
        '<div class="col-md-10">'+
        '<label>Attachment</label>'+
        '<div class="fancy-file-upload fancy-file-primary">'+
        '<i class="fa fa-upload"></i>'+
        '<input type="file" class="form-control" name="shopfile[]" onchange="jQuery(this).next(\'input\').val(this.value);" accept="image/jpeg, image/png">'+
        '<input type="text" class="form-control" placeholder="No file selected" readonly="" >'+
        '<span class="button">Choose File</span>'+
        '</div>'+
        '</div>'+
        '<div class="col-md-1 col-sm-1" style="padding-top:2px;">'+
        '<label>&nbsp;</label>'+
        '<span class="btn btn-sm btn-primary RemoveShopAppAttach"><i class="fa fa-minus"></i></span>'+
        '</div>'+
        '</div>'+
        '</div>');
});

$(document).on('click','.RemoveShopAppAttach',function () {
    $(this).closest(".row").remove();
});

/*jquery change function*/
$("#shops_no").change(function () {
    var shop_id = this.value;
    $.ajax({
        type: "POST",
        url : "../includes/adminfunction.php",
        data:{
            shop_id : shop_id,
            ajax_selectshop : true
        },
        success: function (data)
        {
            var data = jQuery.parseJSON(data);
            if( data.valid == 1)
            {
                $("#cpr").val(data.cpr);
                $("#tenant_name").val(data.tenant_name);
                $("#road").val(data.road);
                $("#building").val(data.building);
                $("#flat").val(data.flat);
                $("#area_1").val(data.area_1);
                $("#block").val(data.block);
                $("#company").val(data.company);
                $("#occupations").val(data.occupations);
                $("#mobile").val(data.mobile);
                /*window.location.href = "index.php";*/
                return false;
            }
            else
            {
                _toastr(data.message,"bottom-right","info",false);
                return false;
            }
        }
    });
});

/*jquery bootbox*/
$(document).on('click','.ajax_remove_shop',function () {
    $elm = $(this);
    $id = $(this).attr('data-id');
    $type = $(this).attr('data-type');

    bootbox.confirm({
        message: "Do you want to delete this CR number ?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback : function (result) {
            if (result == true){
                $elm.hide();
                $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i>');
                $.ajax({
                    type: 'POST',
                    url: '../includes/adminfunction.php',
                    data: {
                        type: $type,
                        id: $id
                    },
                    success: function (resp) {
                        resp = JSON.parse(resp);
                        if (resp.success) {
                            _toastr(resp.msg, "bottom-right", "success", false);
                            setTimeout(function () {
                                $elm.closest(".removejax").remove()
                            }, 2000);
                        } else {
                            _toastr(resp.msg, "bottom-right", "info", false);
                        }
                        $(".submit-loading").remove();
                        $elm.show();
                    },
                    error: function (data) {
                    }
                });

            }

        }
    });

});

/*javascript flux*/
$(document).ready(function(){
    $('.file-upload-button').click(function() {
        $(".custom-file-upload").trigger('click');
        $('input[type=file]').val();
    });/*JQuery for file uplaod in index page*/

    $('.validate').click(function() {
        if($('#attachment').val()==''){
            alert('Please Select File');
        }
    });/*JQuery for validation file select*/

    $("#coupon").keypress(function(e){
        var str = $.trim( $(this).val() );
        if( str != "" ) {
            var regx = /^[A-Za-z0-9]+$/;
            if (!regx.test(str)) {
                $(".err-msg").html("Alphanumeric only allowed !");
                e.preventDefault();
                return false;
            }else{
                $(".err-msg").html("");
            }
        }
    });/*JQuery for alpha-numeric value in coupon*/

    $('.ScriptProccess').click(function() {
        if($('#attachment').val()!=''){
            $.ajax({
                type: "POST",
                url: "site/checkprice",
                dataType: 'json',
                data: {
                    coupon:$("#coupon").val()
                },
                success: function (resp) {
                    resp = resp;
                    if (resp.status) {
                        $("#fileupload").submit();
                        //uploadfolder with sessionid -> call process.sh
                        //$("#validateCoupon").submit();

                    } else {

                        location.href="error"
                        return false;

                    }

                },
                error: function (data) {
                }
            });
        }
    });/*JQuery function scheckprice.sh to return true or false*/

    $("#fileupload").submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "site/filecoupon",
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            success: function (resp) {

                resp = resp;
                if (resp.success) {

                    location.href="confirm";
                } else {

                    location.href="error"
                }

            },
            error: function (data) {
            }
        });

    });

    /* $('.ScriptProccess').click(function() {
        if($('#attachment').val()!=''){
        $elm = $(".submit-btn");
            $elm.hide();

            $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw  pull-right submit-loading"></i>');
           // $("#fileupload").submit();

         }
    });JQuery function to return true or false */

});/*JQuery Document page is exit here*/

/*email sending jquery with ajax*/

$(document).ready(function (e){
    $("#frmContact").on('submit',function(e){
        e.preventDefault();
        $('#loader-icon').show();
        //location.reload();
        $.ajax({
            url: "success",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(resp){
                resp=JSON.parse(resp);
                if(resp.success){
                    $(".message").html("Message Send Successfully");
                }else{
                    $(".message").html("Failed ! invalid email or something else");
                }

            },

            error: function(){

            }

        });

    });
});
/*end here email*/

/*contact form insert jquery*/
$(function () {

    $("#contactform").submit(function (e) {
        e.preventDefault();
        $elm = $(".submit-btn");
        $elm.hide();
        /*location.reload();*/
        $(".error_box").hide().html('');
        $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw  pull-right submit-loading"></i>');
        $form = $(this);
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "site/contactus",
            dataType: 'json',
            data: $(this).serialize(),
            success: function (resp) {
                resp = resp;
                if (resp.success) {setTimeout(function () {
                    $("#alert_success").show();
                    $("#alert_success").html(resp.msg);
                    location.reload();
                },2000);
                } else {

                    $("#alert_mandatory").show();
                    $("#alert_mandatory").html(resp.msg);
                }
                $(".submit-loading").remove();
                $elm.show();
            },
            error: function (data) {
            }
        });
    });
    $(".ChangeLang").change(function (e) {
        $elm = $(".submit-btn");
        //$elm.hide();
        $(".error_box").hide().html('');
        $elm.after('<i class="fa fa-spinner fa-pulse fa-1x fa-fw  pull-right submit-loading"></i>');
        $form = $(this);
        $.ajax({
            type: "POST",
            url: "site/changelang",
            dataType: 'json',
            data: {
                newlang:$(this).val()
            },
            success: function (resp) {
                location.reload();
            },
            error: function (data) {
                location.reload();
            }
        });
    });/*Change language function end here*/

});/*JQuery function end here*/

/*javascript for carousal*/
$('#myCarousel').carousel({
    interval: 3000
});

$('#carousel-text').html($('#slide-content-0').html());

// When the carousel slides, auto update the text
$('#myCarousel').on('slid.bs.carousel', function (e) {
    var id = $('.item.active').data('slide-number');
    $('#carousel-text').html($('#slide-content-'+id).html());
});

/*scroll*/
jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
});

/*jquery*/
$(function () {
    $(".product_id").change(function () {
        //$("#yourdropdownid option:selected").text();
        $('.available_stock').val($(".product_id option:selected").attr('data-stock'));
        $(".SalesPrice").val($(".product_id option:selected").attr('data-price'));
    });

    $("#RecordForm").submit(function (e) {
        e.preventDefault();
        $stock=parseInt($(".available_stock").val());
        $quantity=parseInt($(".quantity").val());
        if($quantity>$stock){
            _toastr("Invalid Quantity","bottom-right","warning",false);
            return false;
        }
        $elm=$(".submit-btn");
        $elm.hide();
        $elm.after('<i class="fa fa-spinner fa-spin fa-1x fa-fw loading submit-loading"></i>');
        $.ajax({
            type	: "POST",
            url		: "add_sales",
            dataType : 'json',
            data	:$(this).serialize(),
            success	: function (resp) {
                if(resp.success){
                    _toastr(resp.msg,"bottom-right","success",false);
                    setTimeout(function () {
                        window.location = "index";
                    },2000);
                }else{
                    _toastr(resp.msg,"bottom-right","warning",false);
                }
                $(".submit-loading").remove();
                $elm.show();
            }
        });
    });
});

/*jquery beeter*/
function update(id, p_id, i) {
    var quant = "#quantity" + '' + i;
    var quantity = $(quant).val();
    $.post("cart_operation.php",
        {
            request: "update_cart",
            quantity: quantity,
            id: id,
            p_id: p_id,
            quantity: quantity
        }, function (data, success) {
            if (data == 1) {
                alertify.success("Cart Updated");

                setTimeout(function () {
                    location.reload();
                }, 3000);

            }
            else {
                alertify.warning(data);
            }
            //return false;
        });

}

function del(id) {

    $.post("cart_operation.php",
        {
            request: "delete_cart",
            id: id
        }, function (data, success) {
            if (data == 1) {

                alertify.success("Item Deleted");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
            else {
                alertify.warning(data);
            }
        });
}

function Add_cart(id, price) {

    $.post("cart_operation.php",
        {
            request: "Add_Cart",
            id: id,
            price: price
        }, function (data, success) {
            if (data == 1) {

                alertify.success("Item Added to the cart");
            }
            if (data == 2) {
                alertify.success("Your Cart Updated...!!!");
            }
        });
}

function Add_cart_details(id, price) {
    var quantity = $("#quantity").val();

    $.post("cart_operation.php",
        {
            request: "Add_Cart_from_details",
            id: id,
            price: price,
            quantity: quantity
        }, function (data, success) {
            if (data == 1) {

                alertify.success("Item Added to the cart");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
            if (data == 2) {
                alertify.success("Your Cart Updated...!!!");
                setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        });
}

$('#login input').keydown(function(e) {

    if (e.keyCode == 13) {

        $('#login').submit();

    }

});


function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
else {
        return false;
    }
}

$(document).ready(function() {

    $('#btnValidate').click(function() {

        var sEmail = $('#txtEmail').val();

        if ($.trim(sEmail).length == 0) {

            alert('Please enter valid email address');

            e.preventDefault();

        }

        if (validateEmail(sEmail)) {

            alert('Email is valid');

        }

    else {

            alert('Invalid Email Address');

            e.preventDefault();

        }

    });

});

/*Date:29-12-2017
its possible to have multiple values in a select option as shown below.*/
/*
<select id="ddlEmployee" class="form-control">
    <option value="">-- Select --</option>
    <option value="1" data-city="Washington" data-doj="20-06-2011">John</option>
    <option value="2" data-city="California" data-doj="10-05-2015">Clif</option>
    <option value="3" data-city="Delhi" data-doj="01-01-2008">Alexander</option>
    </select>*/
$("#ddlEmployee").change(function () {
    alert($(this).find(':selected').data('city'));
});