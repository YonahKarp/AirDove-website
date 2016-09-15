/**
 * Created by ykjt on 4/21/16.
 */
$(document).ready(function() {

    //slideshow
    var nextSlide = $("#slides img:first-child");
    var nextCaption;
    var nextSlideSource;

    // Start slide show
    timer1 = setInterval(
        function () {

            $("#caption").hide(1000);
            $("#slide").fadeOut(1000,


                function () {
                    if (nextSlide.next().length == 0) {
                        nextSlide = $("#slides img:first-child");
                    }
                    else {
                        nextSlide = nextSlide.next();
                    }
                    nextSlideSource = nextSlide.attr("src");
                    nextCaption = nextSlide.attr("alt");

                    $("#slide").attr("src", nextSlideSource).fadeIn(1000);
                    $("#caption").text(nextCaption).show(1000);
                }
            )
        },
        10000
    );

    //animation
    $(".a").mouseover(function(){
        $(this).css("backgroundColor", "#3baae3;")
    })
    .mouseout(function(){
        $(this).css("backgroundColor", "transparent");
    });





    //datePicker
    $("#departDate1").datepicker({
        defaultDate: "+1w",
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        numberOfMonths: 3,
        onClose: function (selectedDate) {
            $("#departDate2").datepicker("option", "minDate", selectedDate);
        }
    });
    $("#departDate2").datepicker({
        defaultDate: "+1w",
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        numberOfMonths: 3,
        onClose: function (selectedDate) {
            $("#departDate1").datepicker("option", "maxDate", selectedDate);
        }
    });


    $('.datepicker').datepicker('option', 'dateFormat', 'yy-mm-dd');

    //flight search select
    $(".flightId").click(function(){
        $('#selectedId').val($(this).html());
        $(".tableColumn").css("background-color", "#8bc9e3");
        $(this).parent().parent().css("background-color", "aliceblue")
    });



    //purchase page value
    $('#quantity').on('input propertychange paste', function() {
        var input = $(this).val();
        if($.isNumeric(input)){
            var basePrice = $("#basePrice").html();
            var price = input*basePrice;

            $("#price").html(price);

        }
    });

    $('#CC').on('input propertychange paste', function() {
        var input = $(this).val();
        var testCredit = /\d{10,16}/;
        if(!testCredit.test(input)){

            $(this).next().removeClass("hidden");
            $('#confirmPurchase').attr("disabled")
        }else{
            $(this).next().addClass("hidden");
            $('#confirmPurchase').removeAttr("disabled")
        }
    });

    $(".siteMap").click(function(){
        $(this).parent().next().toggleClass("hidden");
    })




});