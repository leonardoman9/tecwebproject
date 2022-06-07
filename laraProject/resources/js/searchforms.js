$( document ).ready(function() {
    $("#scelta").on("change", function() {
                $("#" + $(this).val().toString()).show().siblings().hide();
                $($(this).show())
            })
});





