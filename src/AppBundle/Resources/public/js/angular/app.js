var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http)
{
  getTable();

  function getTable()
    {

        $http.get(Routing.generate('getTable'))
        .then(function (response) {$scope.hours = response.data;});


    };


  $scope.countRow = function (index)
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
  }
  $scope.changeRow = function (datas)
    {
      datas= parseInt(datas);
      datas-=8;
      if(datas<0)
        datas=16;
      return datas;
    }

  $scope.range = function() {
          var number = $scope.hours[0].tabelka.length;
        return new Array(number);
    };


});