var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http, $window)
{
  $scope.miesiac = document.getElementById("miesiac").innerHTML;
  $scope.rok = document.getElementById("rok").innerHTML;

  getTable($scope.miesiac,$scope.rok);
  //countHoursAll();

  function getTable(miesiac,rok)
    {

        $http.get(Routing.generate('getTable',{miesiac: miesiac, rok: rok}))
        .then(function (response)
        {
          $scope.hours = response.data.przydzialy;
          $scope.sum = response.data.suma;
        });


    };


  $scope.countHours = function (index)
    {
      var total= 0;
      for(var i=0;i<$scope.hours[index].tabelka.length;i++)
        total+=parseInt($scope.hours[index].tabelka[i]['Ilosc_godzin']);

      return total;

    };

  $scope.countStrazacy = function(day)
  {
    var counter=0;
    for(var i=0; i<$scope.hours.length;i++)
      if(parseInt($scope.hours[i].tabelka[day]['Ilosc_godzin'])>0)
        counter++;

    return counter;
  };
  $scope.changeRow = function (datas)
    {
      datas= parseInt(datas);
      datas-=8;
      if(datas<0)
        datas=16;
      return datas;
    };

  $scope.range = function() {
          var number = $scope.hours[0].tabelka.length;
        return new Array(number);
    };

  $scope.lasts = function(index)
  {
    var ilosc_godzin = parseInt($scope.countHours(index));
    var wykorzystano = parseInt($scope.sum[index]['Suma_Godzin']);
    var pozostalo = 1000 - (ilosc_godzin + wykorzystano);
    return pozostalo;
  };


  $scope.countHoursAll = function()
  {
    var all = [];
    for(var i=0;i<$scope.hours.length;i++)
    {
      var id = $scope.hours[i]['ID'];
      var hoursAll= $scope.countHours(i);
      var one={ID:id, hoursAll:hoursAll };
      all.push(one);
    }
    return all;
  };

  $scope.send = function()
  {
        var sumyGodzin = $scope.countHoursAll();
        var hours = $scope.hours;
        var all= {sumy: sumyGodzin, godziny:hours};
        $http.post(Routing.generate('setTable', {miesiac: $scope.miesiac, rok: $scope.rok}),all)
        .then(function (response) {$window.location= Routing.generate('generateOneAfterOne')});

  };





});
