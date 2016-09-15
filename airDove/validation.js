/**
 * Created by ykjt on 5/20/16.
 */
$(document).ready(function() {

    $("#validate").submit(function(event){


        //test for failure in at least one
        var fail = false;

        var fname = $("#fName").val();
        var lname = $("#lName").val();

        var email = $("#email").val();
        var pass = $("#pass").val();

        var username = $("#uName").val();
        var confirm = $("#confirm").val();



        //Yay Regex!

        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

        if(fname == ""){
            $("#fName").next().removeClass("hidden");
            fail = true;
        }else{
            $("#fName").next().addClass("hidden");
        }

        if(lname == ""){
            $("#lName").next().removeClass("hidden");
            fail = true;
        }else{
            $("#lName").next().addClass("hidden");
        }

        if(username == ""){
            $("#uName").next().removeClass("hidden");
            fail = true;
        }else{
            $("#uName").next().addClass("hidden");
        }

        if(pass == null || pass == ""){
            $("#pass").next().removeClass("hidden");
            fail = true;
        }else{
            $("#pass").next().addClass("hidden");
        }

        if(!testEmail.test(email)){
            $("#email").next().removeClass("hidden");
            fail = true;
        }else{
            $("#email").next().addClass("hidden");
        }

        if(confirm != email ){
            $("#confirm").next().removeClass("hidden");
            fail = true;
        }else{
            $("#confirm").next().addClass("hidden");
        }



        if(fail) {
            event.preventDefault();
        }
    })



});