var app = angular.module('myApp', []);
app.controller('strazacyCtrl', function($scope, $http, $window)
{
  $scope.polowaRoku = document.getElementById("polowaRoku").innerHTML;
  $scope.rok = document.getElementById("rok").innerHTML;

  getTable($scope.rok,$scope.polowaRoku);

  function getTable(rok, polowaRoku)
    {
        $http.get(Routing.generate('getPolrocze',{rok: rok, polowaRoku: polowaRoku}))
        .then(function (response)
        {
          $scope.miesiace = response.data.miesiace;
          $scope.strazacy = response.data.strazacy;
        });
    };

    $scope.showName = function (idStrazaka)
    {
      for(var i=0; i<$scope.strazacy.length; i++)
      {
        if(parseInt($scope.strazacy[i]['ID']) == idStrazaka)
        return ($scope.strazacy[i]['Imie']+" "+$scope.strazacy[i]['Nazwisko']);
      }
    };

    $scope.showMonthName= function(index)
    {
      var miesiace= ["Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień"];
      if($scope.polowaRoku==2)
      {
        index+=6;
      }

      return miesiace[index];
    };

    $scope.range = function(index) {
            if($scope.polowaRoku==2)
            {
              index+=6;
            }
            var number = ($scope.miesiace[index+1][0]['dni'].length);

            return new Array(number);
      };

});
