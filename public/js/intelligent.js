function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.image').show();
            $('.image').find('img').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readURLCatalog(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var id = $(input).attr('id');
        console.log();

        reader.onload = function (e) {
            $('.image').show();
            if ($('#pv-'+id).length == 0) {
                var html = '<div class="col-md-4"><span onclick="resetImage(this)" style="position: relative;top: 30px;left: 12px;"><i class="fas fa-times"></i></span> <img src="'+e.target.result+'" id="pv-'+id+'" data-id="'+id+'" width="160" height="140" alt="" style="border: 1px solid #D3D3D3;border-radius: 5px !important;margin: 5px;"></div>';
                $('.image').append(html);
            } else {
                $('#pv-'+id).attr('src', e.target.result);
            }
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function resetImage(that) {
    var id = $(that).parent().find('img').data('id');
    $(that).closest('div').remove();
    $(id).reset();
}

function readURLCompany(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var name = $(input).attr('name');
            console.log(name);
            if(name == 'image') {
                $('.image').show();
                $('.image').find('img').attr('src', e.target.result);
            } else {
                $('.video').show();
                $('.video').find('iframe').attr('src', e.target.result);
            }
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function fill_id(that) {
    var product_id = $(that).data('id');
    $('#product_id').val(product_id);
}


var token = $('meta[name="csrf-token"]').attr('content');
var base_url = $('meta[name="base_url"]').attr('content');
var base = $('meta[name="base"]').attr('content');
var route = $('#route').val();
var form_name = $('#form_name').val();
var form_base = $('#form_name').data('id');

$(document).on('click', '.delete_this', function (event) {
    var id = $(this).data("id");
    var type = $(this).data('type');
    var url = $(this).data('url');
    if (confirm("Are you sure you want to delete this "+type+"? This will delete All the dependencies!")) {
        event.preventDefault();
        $.ajax({
            type: "DELETE",
            url: base_url + "/admin/" + url + '/' + id,
            data: {_method: 'DELETE', _token: token, "id": id},
            success: function (response) {
                $(".delete_"+id).remove();
                $("#alert-div").parent().addClass('alert-success');
                $('#alert-div').html('<li> '+type+' Deleted successfully! </li>');
                setTimeout(function() {
                    $('#alert-div').parent().fadeOut('fast');
                }, 3000);
            }
        });
    }
});

$(document).on('submit', '#form', function(e) {
    e.preventDefault();
    var dataForm = new FormData(this);
    $.ajax({
        type: 'POST',
        url: route,
        data: dataForm,
        processData: false,
        contentType: false,
        success: function(response) {
            $('#notification').removeClass('alert-danger');
            $('#notification').addClass('alert-success');
            $('#notification ul').html('<li>'+form_name+' registered successfuly!</li>');
            $('#notification').show(300).delay(3000);
            //location.href = base_url + "/admin/" + form_base
        },
        error: function(response) {
            $('#notification').removeClass('alert-success');
            $('#notification').addClass('alert-danger');
            var html = '';
            $.each(response.responseJSON.errors, function(key, value) {
                html += '<li>'+value+'</li>';
            });
            $('#notification ul').html(html);
            $('#notification').show(300);
        }
    });
});

$(document).on('click', '#pay_check', function() {
    var history_id = $(this).data('id');
    $.ajax({
        type: 'post',
        url: base_url + '/admin/customer_history/'+history_id,
        data: {
            _token: token,
            _method: 'PUT',
            history_id: history_id
        },
        success: function(response) {
            $('#notification').removeClass('alert-danger');
            $('#notification').addClass('alert-success');
            $('#notification ul').html('<li>Bill Paid successfuly!</li>');
            $('#notification').show(300).delay(3000);
            location.href = base_url + "/admin/print_bill/" + response
        },
        error: function(response) {
            $('#notification').removeClass('alert-success');
            $('#notification').addClass('alert-danger');
            var html = '';
            $.each(response.responseJSON.errors, function(key, value) {
                html += '<li>'+value+'</li>';
            });
            $('#notification ul').html(html);
            $('#notification').show(300);
        }
    });
});

$(document).on('click', '#sell_product', function() {
    var product_id  = $('#product_id').val();
    var customer_id = $('#customer_id').val();
    var quantity    = $('#quantity').val();
    $.ajax({
        type: 'post',
        url: base_url + '/admin/customer_history',
        data : {
            _token: token,
            product_id: product_id,
            customer_id: customer_id,
            quantity: quantity,
        },
        success: function(response) {
            $('#sell-alert').removeClass('alert-danger');
            $('#sell-alert').addClass('alert-success');
            $('#sell-alert ul').html('<li>Product Sold successfuly!</li>');
            $('#sell-alert').show(300).delay(3000);
            location.href = base_url + "/admin/customers/" + customer_id
        },
        error: function(response) {
            $('#sell-alert').removeClass('alert-success');
            $('#sell-alert').addClass('alert-danger');
            var html = '';
            $.each(response.responseJSON.errors, function(key, value) {
                html += '<li>'+value+'</li>';
            });
            $('#sell-alert ul').html(html);
            $('#sell-alert').show(300);
        }
    });
});

function fill_account(that) {
    var account_id = $(that).data('id');
    $('#account_id').val(account_id);
}

$(document).on('click', '#pay_bill', function() {
    var account_id  = $('#account_id').val();
    var paid = $('#paid').val();
    $.ajax({
        type: 'post',
        url: base_url + '/admin/supplier_account/'+account_id,
        data : {
            _token: token,
            _method: 'PUT',
            account_id: account_id,
            paid: paid,
        },
        success: function(response) {
            if(response['message'] != undefined) {
                console.log(response['message']);
                $('#sell-alert').removeClass('alert-success');
                $('#sell-alert').addClass('alert-danger');
                var html = '<li>'+response["message"]+'</li>';
                $('#sell-alert ul').html(html);
                $('#sell-alert').show(300);
            } else {
                $('#sell-alert').removeClass('alert-danger');
                $('#sell-alert').addClass('alert-success');
                $('#sell-alert ul').html('<li>Bill Paid successfuly!</li>');
                $('#sell-alert').show(300).delay(3000);
                location.reload(true);
            }
        },
        error: function(response) {
            $('#sell-alert').removeClass('alert-success');
            $('#sell-alert').addClass('alert-danger');
            var html = '';
            $.each(response.responseJSON.errors, function(key, value) {
                html += '<li>'+value+'</li>';
            });
            $('#sell-alert ul').html(html);
            $('#sell-alert').show(300);
        }
    });
});

$(document).on('submit', '#reporting', function(e) {
    e.preventDefault();
    var dataForm = new FormData(this);
    $.ajax({
        type: 'POST',
        url: base_url + "/admin/reports/create",
        data: dataForm,
        processData: false,
        contentType: false,
        success: function(response) {
            $('#notification').removeClass('alert-danger');
            $('#notification').addClass('alert-success');
            $('#notification ul').html('<li>Report Generated successfuly!</li>');
            $('#notification').show(300).delay(3000);
            $('#table').html(response['html']);
            if(typeof(response['total']) != undefined && response['total'] != null) {
                $('#total h1').html(response['total']);
                $('#total').show();
            } else {
                $('#total').hide();
            }
            if(typeof(response['outcome']) != undefined && response['outcome'] != null) {
                $('#outcome h1').html(response['outcome']);
                $('#outcome').show();
            } else {
                $('#outcome').hide();
            }
            if(typeof(response['subtotal']) != undefined && response['subtotal'] != null) {
                $('#subtotal h1').html(response['subtotal']);
                $('#subtotal').show();
            } else {
                $('#subtotal').hide();
            }
        },
        error: function(response) {
            $('#notification').removeClass('alert-success');
            $('#notification').addClass('alert-danger');
            var html = '';
            $.each(response.responseJSON.errors, function(key, value) {
                html += '<li>'+value+'</li>';
            });
            $('#notification ul').html(html);
            $('#notification').show(300);
        }
    });
});

$(document).on('change', '#existed_product', function() {
    var id = $(this).val();
    $.ajax({
        type: 'get',
        url: base_url + '/admin/products/' + id,
        success: function(response) {
            console.log(response);
            $('select[name="type_id"] option[value="'+response["type_id"]+'"]').attr('selected', true);
            $('select[name="brand_id"] option[value="'+response["brand_id"]+'"]').attr('selected', true);
            $('select[name="supplier_id"] option[value="'+response["supplier_id"]+'"]').attr('selected', true);
            $('input[name="name"]').val(response["name"]);
            $('textarea[name="description"]').text(response["description"]);
            $('input[name="port_no"]').val(response["port_no"]);
            $('input[name="buying_price"]').val(response["buying_price"]);
            $('input[name="selling_price"]').val(response["selling_price"]);
            $('input[name="quantity"]').val(response["quantity"]);
            $('.image img').attr('src', base + '/images/products/' + response['image']);
            $('.image').show();
            html = '<input type="hidden" name="old_image" value="'+base + '/images/products/' + response['image']+'">';
            $('#form').append(html);
        }
    });
});

/*$('input[list="brand"]').on('change', function() {
    var val1 = ($(this).val());
    var val2 = $('input[list="type"]').val();
    $.ajax({
        type: 'post',
        url: base_url + '/admin/get_products',
        data: {
            _token: token,
            brand: val1,
            type: val2
        },
        success: function(response) {
            console.log(response);
        }
    });
});

$('input[list="type"]').on('change', function() {
    var val1 = ($(this).val());
    var val2 = $('input[list="brand"]').val();
    $.ajax({
        type: 'post',
        url: base_url + '/admin/get_products',
        data: {
            _token: token,
            brand: val2,
            type: val1
        },
        success: function(response) {
            console.log(response);
        }
    });
});*/

function is_bought(that) {
    var id = $(that).data('id');
    $.ajax({
        type: 'get',
        url: base_url + '/admin/is_bought/' + id,
        success: function(response) {
            location.href = base_url + "/admin/required_products/";
        }
    });
}
