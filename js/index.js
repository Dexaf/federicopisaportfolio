$(document).ready(function() {

    //Attivazione particles.js
    Particles.init({
        selector: '.background',
        color: ['#cdcdcd', '#ffffff'],
        connectParticles: true,
        speed: 0.2,
        responsive: [{
            breakpoint: 767,
            options: {
                maxParticles: 50,
                siveVariations: 3,
                speed: 0.1,
                connectParticles: false
            }
        }]
    });

    //Quando viene caricata la pagina cotnrolliamo l'hash nel url
    //a seconda del valore attiviamo il bottone del menu_item corrispondente
    $(function() {
        switch (window.location.hash) {
            case "#!/":
                $("#userS").addClass("active");
                $("#userM").addClass("active");
                break;
            case "#!/address":
                $("#addressS").addClass("active");
                $("#addressM").addClass("active");
                break;
            case "#!/award":
                $("#awardS").addClass("active");
                $("#awardM").addClass("active");
                break;
            case "#!/projects":
                $("#projectsS").addClass("active");
                $("#projectsM").addClass("active");
                break;
            case "#!/talktome":
                $("#commentS").addClass("active");
                $("#commentM").addClass("active");
                break;
        }
    });

    $(function() {
        //Gestione menu_item e selezioni
        $(".menu_item").click(function() {
            $(".menu_item").removeClass("active");
            switch ($(this).attr('id')) {
                case "userS":
                case "userM":
                    $("#userS").addClass("active");
                    $("#userM").addClass("active");
                    window.location.hash = "!";
                    break;
                case "addressS":
                case "addressM":
                    $("#addressS").addClass("active");
                    $("#addressM").addClass("active");
                    window.location.hash = "!address";
                    break;
                case "awardS":
                case "awardM":
                    $("#awardS").addClass("active");
                    $("#awardM").addClass("active");
                    window.location.hash = "!award";
                    break;
                case "projectsS":
                case "projectsM":
                    $("#projectsS").addClass("active");
                    $("#projectsM").addClass("active");
                    window.location.hash = "!projects";
                    break;
                case "commentS":
                case "commentM":
                    $("#commentS").addClass("active");
                    $("#commentM").addClass("active");
                    window.location.hash = "!talktome";
                    break;
            }
        });
    });
});