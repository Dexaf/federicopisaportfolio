$("document").ready(function () {
    var position = 0;

    function sx() {
        if (position > 0) {
            position--;
            show();
        }
        else {
            position = 4;
            show();
        }
    }

    function dx() {
        if (position < 4) {
            position++;
            show();
        }
        else {
            position = 0;
            show();
        }
    }

    function show() {
        switch (position) {
            case 0:
                $("#who").css("display", "inline-block");
                $("#what").css("display", "none");
                $("#why").css("display", "none");
                $("#when").css("display", "none");
                $("#where").css("display", "none");
                break;
            case 1:
                $("#who").css("display", "none");
                $("#what").css("display", "inline-block");
                $("#why").css("display", "none");
                $("#when").css("display", "none");
                $("#where").css("display", "none");
                break;
            case 2:
                $("#who").css("display", "none");
                $("#what").css("display", "none");
                $("#why").css("display", "inline-block");
                $("#when").css("display", "none");
                $("#where").css("display", "none");
                break;
            case 3:
                $("#who").css("display", "none");
                $("#what").css("display", "none");
                $("#why").css("display", "none");
                $("#when").css("display", "inline-block");
                $("#where").css("display", "none");
                break;
            case 4:
                $("#who").css("display", "none");
                $("#what").css("display", "none");
                $("#why").css("display", "none");
                $("#when").css("display", "none");
                $("#where").css("display", "inline-block");
                break;
        }
    }

    $("#sx").click(sx);

    $("#dx").click(dx);

});
