/*
)Per evitare di sporcare il global name space 
creeremo solo una varibile, la nostra app. 
)Creiamo un oggetto modulo di angular e lo colleghiamo al view
passando alla funzione il nome della view come parametro.
*/
var VetrinaApp = angular.module('VetrinaApp', ['ngRoute', 'ngResource']);

VetrinaApp.config(function ($routeProvider) 
{
    $routeProvider.when('/',{templateUrl : "pagine/aboutme.html", controller: ''});
    $routeProvider.when('/address',{templateUrl : "pagine/address.html", controller: ''});
    $routeProvider.when('/award',{templateUrl : "pagine/award.html", controller: ''});
    $routeProvider.when('/projects',{templateUrl : "pagine/projects.html", controller: ''});
    $routeProvider.when('/talktome',{templateUrl : "pagine/talktome.html", controller: ''});
});
/* 
)Abbiamo creato un controller, a questo punto
angular cercherà dentro un ng-app di nome myApp
un ng-controller di nome 'mainController. 
)Il controller sarà il model e il div relativo sarà il view.
)Aggiungiamo poi $scope, un oggetto di angular che funge
da intermediario tra il model e il view, possiede delle proprietà
preimpostate ma possiamo aggiungere variabili o funzioni interne
custom
*/

VetrinaApp.service("", function()
{
    
});

VetrinaApp.controller('', function()
{

});
