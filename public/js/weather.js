$(document).ready(function () {
    var lang = $('meta[name="locale"]').attr('content');
    if(navigator.geolocation) {
        //navigator.geolocation.getCurrentPosition(showLocation);
    } else {
        $('#location').html('Geolocation is not supported by this browser.');
    }

    $("#add-location").on("click", function() {
        var city = $("#city_name").val();
        $.ajax({
            type:'get',
            url: lang+'/choose_location/'+city,
            success:function(response){
                if(response) {
                    $("#climate").html('');
                    $("#climate").html(response["view"]);
                } else {
                    $("#location").html('No data for this city !');
                }
            }
        });
    });

    $("#search").keyup(function() {
        var input = $(this).val();
        console.log(input);
        $.ajax({
            type: "GET",
            url : lang+'/search_city/'+input,
            success: function(response) {
                $("#search-result").show(300);
                $("#search-result ul").html('');
                var html = '';
                $.each(response, function(key, value) {
                    html += '<li class="search-result">'+value["name_"+lang]+'</li>';
                });
                $("#search-result ul").html(html);
                $('.search-result').on('click', function() {
                    var value = $(this).html();
                    $("#search").val(value);
                });
            }
        })
    });

    $("#search").blur(function() {
        $("#search-result").fadeOut(300);
    });
});

// function showLocation(position) {
//     var lang      = $('meta[name="locale"]').attr('content');
//     var token     = $('meta[name="csrf-token"]').attr('content');
//     var latitude  = position.coords.latitude;
//     var longitude = position.coords.longitude;
//     $.ajax({
//         type:'POST',
//         url: lang+'/get_location',
//         data: {
//             _token: token,
//             latitude : latitude,
//             longitude: longitude
//         },
//         success:function($response){
//             if($response) {
//                $("#location").html($response);
//             } else {
//                 $("#location").html('Not Available !');
//             }
//         }
//     });
// }
