$("document").ready(function () {
    particlesJS.load('wrapper', './JsLibs/particles.js-master/demo/particles.json', function () {
        console.log('callback - particles.js config loaded');
    });
    emailjs.init('user_tY9dqt7xBIPPja3MjSMa2');

    /* gestione menu navigazione */
    goToNav = function(where){
        $("html, body").animate({ scrollTop: $("#"+where).offset().top }, 'slow');
    }
    /* gestione email */
    $("#sendC").click(function (e) {
        e.preventDefault();
        if ($("#Fullname").val().length > 0 &&
            $("#Address").val().length > 0 &&
            $("#Motivation").val().length > 0 &&
            $("#Description").val().length > 0 &&
            $("#AreYouSureAboutThat").is(":checked") === true) {
            var contactParams = {
                Fullname: $("#Fullname").val(),
                Address: $("#Address").val(),
                Motivation: $("#Motivation").val(),
                Description: $("#Description").val()
            }

            // these IDs from the previous steps
            emailjs.send('service_zdq90nc', 'template_arcbvkr', contactParams)
                .then(function (res) {
                    if (res.status === 200) {
                        $("#popUpContent").html('the message was sent successfully, i\'ll contact you as soon as possible');
                        $("#darkScreen").fadeIn();
                        $("#popUp").fadeIn();
                    }
                    else {
                        $("#popUpContent").html('Something went wrong, try again or contact me with one of the contacts in the contact section.');
                        $("#darkScreen").fadeIn();
                        $("#popUp").fadeIn();
                    }
                });
        }
        else {
            $("#popUpContent").html('Fill all the fields');
            $("#darkScreen").fadeIn();
            $("#popUp").fadeIn();
        }
    });

    /* gestione poup */
    $("#times").click(function (e) {
        $("#popUp").fadeOut();
        $("#darkScreen").fadeOut();
    });

});