$(document).ready(function () {
    var script   = $("#script").val();
    var hours    = $("#hours").val();
    $('#img').attr('src', script+hours);

    $('#script').on('change', function() {
        var script = $(this).val();
        var hours  = $("#hours").val();
        $('#img').attr('src', script+hours);
    });

    $('#hours').on('change', function() {
        var hours  = $(this).val();
        var script = $('#script').val();
        $('#img').attr('src', script+hours);
    });

    $("#up").on('click', function() {
        $("#hours option:selected").removeAttr('selected').next().attr('selected', 'selected');
        $("#hours").trigger("change");
    });

    $("#down").on('click', function() {
        $("#hours option:selected").removeAttr('selected').prev().attr('selected', 'selected');
        $("#hours").trigger("change");
    });

    $('#animate').on('click', function() {
        var count = $('#hours option').length;
            for (var i = 1; i <= count; i++) {
                (function(i) {
                    var timeToClick = 700 * i;
                    setTimeout(function() {
                        $('#up').click();
                    }, timeToClick);
                })(i)
            }
    });

    $('#hide_city_map').on('click', function() {
        $('#city_map').hide(200);
        $('#hide_city_map').hide(300);
        $('#show_city_map').show(300);
    });

    $('#show_city_map').on('click', function() {
        $('#city_map').show(300);
        $('#show_city_map').hide(300);
        $('#hide_city_map').show(300);
    });

});
