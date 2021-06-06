$("document").ready(function () {
    
    emailjs.init('user_tY9dqt7xBIPPja3MjSMa2');

    $("#sendC").click(function (e) {
        if ($("#Fullname").val().length > 0 &&
            $("#Address").val().length > 0 &&
            $("#Motivation").val().length > 0 &&
            $("#Description").val().length > 0) 
        {    
            var contactParams = {
                Fullname: $("#Fullname").val(),
                Address: $("#Address").val(),
                Motivation: $("#Motivation").val(),
                Description: $("#Description").val()
            }
    
            // these IDs from the previous steps
            emailjs.send('service_zdq90nc', 'template_arcbvkr', contactParams)
                .then(function(res) {
                    if (res.status === 200) {
                        alert('The message got sent successfully, i\'ll contact you as soon as possible');
                    }
                    else
                    {
                        alert('Something went wrong, try again or contact me with one of the contacts in the contact section.');
                    }
                });
        }
        else
        {
            alert("Fill all the fields");
        }
    });
});