$("document").ready(function () {
    var position = 0;

    function sx() {
        if (position > 0) {
            position--;
            show();
        }
        else {
            position = 6;
            show();
        }
    }

    function dx() {
        if (position < 6) {
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
                $("#html").css("display", "inline-block");
                $("#css").css("display", "none");
                $("#js").css("display", "none");
                $("#jq").css("display", "none");
                $("#php").css("display", "none");
                $("#mysql").css("display", "none");
                $("#ajs").css("display", "none");
                break;
            case 1:
                $("#html").css("display", "none");
                $("#css").css("display", "inline-block");
                $("#js").css("display", "none");
                $("#jq").css("display", "none");
                $("#php").css("display", "none");
                $("#mysql").css("display", "none");
                $("#ajs").css("display", "none");
                break;
            case 2:
                $("#html").css("display", "none");
                $("#css").css("display", "none");
                $("#js").css("display", "inline-block");
                $("#jq").css("display", "none");
                $("#php").css("display", "none");
                $("#mysql").css("display", "none");
                $("#ajs").css("display", "none");
                break;
            case 3:
                $("#html").css("display", "none");
                $("#css").css("display", "none");
                $("#js").css("display", "none");
                $("#jq").css("display", "inline-block");
                $("#php").css("display", "none");
                $("#mysql").css("display", "none");
                $("#ajs").css("display", "none");
                break;
            case 4:
                $("#html").css("display", "none");
                $("#css").css("display", "none");
                $("#js").css("display", "none");
                $("#jq").css("display", "none");
                $("#php").css("display", "inline-block");
                $("#mysql").css("display", "none");
                $("#ajs").css("display", "none");
                break;
            case 5:
                $("#html").css("display", "none");
                $("#css").css("display", "none");
                $("#js").css("display", "none");
                $("#jq").css("display", "none");
                $("#php").css("display", "none");
                $("#mysql").css("display", "inline-block");
                $("#ajs").css("display", "none");
                break;
            case 6:
                $("#html").css("display", "none");
                $("#css").css("display", "none");
                $("#js").css("display", "none");
                $("#jq").css("display", "none");
                $("#php").css("display", "none");
                $("#mysql").css("display", "none");
                $("#ajs").css("display", "inline-block");
                break;
        }
    }

    $("#sx").click(sx);

    $("#dx").click(dx);

});