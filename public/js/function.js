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
        for (var i = 0; i < count; i++) {
            setTimeout(function() {
                $("#hours option:selected").removeAttr('selected').next().attr('selected', 'selected');
                $("#hours").trigger("change");
            }, 1000);
        }
    });
});
