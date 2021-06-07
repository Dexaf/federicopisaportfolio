<!doctype html>
<!-- collegamento del view al model che sta nel file app.js -->
<html ng-app="VetrinaApp" ng-cloak lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Federico pisa's portfolio</title>

    <!-- jquery e jqueryui -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- particles.js script -->
    <script src="./pkg/particles.js-master/src/particles.js"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/70f5a948a5.js" crossorigin="anonymous"></script>

    <!-- angular -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-resource.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.min.js"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- js vari -->
    <script src="/js/app.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
    <script src="/js/index.js"></script>

    <!-- css esterno -->
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div id="contenuto" class="row">
        <!-- menu_item laterale, compare solo sopra i 768px -->
        <div id="menu_lato" class="col-md-3 ml-md-5 shadow-lg rounded">
            <div id="userS" class="menu_item my-md-5"><i class="fas fa-user-circle"></i> About me</div>
            <div id="addressS" class="menu_item my-md-5"><i class="fas fa-address-card"></i> Address</div>
            <div id="awardS" class="menu_item my-md-5"><i class="fas fa-medal"></i> Certifications</div>
            <div id="projectsS" class="menu_item my-md-5"><i class="fa fa-folder"></i> Projects </div>
            <div id="commentS" class="menu_item"><i class="fas fa-feather-alt"></i> Contact me </div>
        </div>
        <div ng-view id="view" class="col-md-7 offset-1 col-10 rounded p-0">

        </div>
        <!-- menu_item a sfere inferiore, compare solo sotto i 768px -->
        <div id="menu_sotto" class="mx-auto mt-3 row col-12 text-center " style="display: none ">
            <div id="userM" class="menu_item col-2 text-center "><i class="fas fa-user-circle "></i></div>
            <div id="addressM" class="menu_item col-2 text-center ml-2 "><i class="fas fa-address-card "></i></div>
            <div id="awardM" class="menu_item col-2 text-center ml-2 "><i class="fas fa-medal "></i></div>
            <div id="projectsM" class="menu_item col-2 text-center ml-2 "><i class="fa fa-folder "></i></div>
            <div id="commentM" class="menu_item col-2 text-center ml-2 "><i class="fas fa-feather-alt "></i></div>
        </div>
    </div>

    <canvas class="background "></canvas>
</body>

</html>