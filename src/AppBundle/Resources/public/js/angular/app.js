var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http, $window)
{
  $scope.miesiac = document.getElementById("miesiac").innerHTML;
  $scope.rok = document.getElementById("rok").innerHTML;
  $scope.ostatniDzien = document.getElementById("ostatniDzien").innerHTML;

  getTable($scope.miesiac,$scope.rok);
  //countprzydzialyAll();

  function getTable(miesiac,rok)
    {

        $http.get(Routing.generate('getTable',{miesiac: miesiac, rok: rok}))
        .then(function (response)
        {
          $scope.przydzialy = response.data.przydzialy;
          $scope.szablon = response.data.szablon;
          $scope.stanowiska = response.data.stanowiska;
          $scope.uprawnienia = response.data.uprawnienia;
        });


    };


  $scope.countGodziny = function (index)
    {
      var total= 0;
      for(var i=0;i<$scope.przydzialy[index].dni.length;i++)
        total+=parseInt($scope.przydzialy[index].dni[i]['Ilosc_godzin']);

      return total;

    };

  $scope.countStrazacy = function(day)
  {
    var counter=0;
    for(var i=0; i<$scope.przydzialy.length;i++)
      if(parseInt($scope.przydzialy[i].dni[day]['Ilosc_godzin'])>0)
        counter++;

    return counter;
  };
  $scope.changeRow = function (ilosc_godzin,parentIndex,index)
    {
      if(parseInt($scope.szablon[index]['Ilosc_godzin'])==16 && ilosc_godzin==16)
      {
        $scope.przydzialy[parentIndex].dni[index]['Ilosc_godzin']=0;
        if(index<$scope.przydzialy[0].dni.length)
          $scope.przydzialy[parentIndex].dni[index+1]['Ilosc_godzin']=0;
      }
      else if (parseInt($scope.szablon[index]['Ilosc_godzin'])==16 && ilosc_godzin==0)
      {
        $scope.przydzialy[parentIndex].dni[index]['Ilosc_godzin']=16;
        if(index<$scope.przydzialy[0].dni.length)
          $scope.przydzialy[parentIndex].dni[index+1]['Ilosc_godzin']=8;
      }
      else if (parseInt($scope.szablon[index]['Ilosc_godzin'])==8 && ilosc_godzin==8)
      {
        $scope.przydzialy[parentIndex].dni[index]['Ilosc_godzin']=0;
      }
      else if (parseInt($scope.szablon[index]['Ilosc_godzin'])==8 && ilosc_godzin==0 && $scope.przydzialy[parentIndex].dni[index-1]['Ilosc_godzin']==16)
      {
        $scope.przydzialy[parentIndex].dni[index]['Ilosc_godzin']=8;
      }
      else if ($scope.szablon[index]['Ilosc_godzin']==0)
      {
        $scope.przydzialy[parentIndex].dni[index]['Ilosc_godzin']=0;
      }




    };

  $scope.range = function() {
          var number = $scope.przydzialy[0].dni.length;
        return new Array(number);
    };

  $scope.lasts = function(index)
  {
    var ilosc_godzin = parseInt($scope.countGodziny(index));
    var wykorzystano = parseInt($scope.przydzialy[index]['Suma']);
    var pozostalo = 1000 - (ilosc_godzin + wykorzystano);
    return pozostalo;
  };


  $scope.countGodzinyAll = function()
  {
    var all = [];
    for(var i=0;i<$scope.przydzialy.length;i++)
    {
      var id = $scope.przydzialy[i]['ID'];
      var godzinyAll= $scope.countGodziny(i);
      var one={ID:id, godzinyAll:godzinyAll };
      all.push(one);
    }
    return all;
  };

  $scope.send = function()
  {

        var sumyGodzin = $scope.countGodzinyAll();
        var przydzialy = $scope.przydzialy;
        var all= {sumy: sumyGodzin, godziny:przydzialy};
        $http.post(Routing.generate('setTable', {miesiac: $scope.miesiac, rok: $scope.rok}),all)
        .then(function (response) {$window.location= Routing.generate('przejscie')});

  };


  $scope.showStanowisko= function(ID_Stanowiska)
  {
    for(var i=0;i<$scope.stanowiska.length;i++)
      if(parseInt($scope.stanowiska[i]['ID'])==ID_Stanowiska)
      return $scope.stanowiska[i]['Nazwa'];
  };

  $scope.countStanowisko = function(stanowisko, day)
  {
    var counter=0;
    for(var i=0; i<$scope.przydzialy.length;i++)
      {
        if(parseInt($scope.przydzialy[i]['Stanowisko'])==stanowisko)
        {
            if(parseInt($scope.przydzialy[i].dni[day]['Ilosc_godzin'])>0)
              {
                counter++;
              }
        }
    }



    return counter;
  };

  $scope.styleStanowiska = function(ID_Stanowiska, dzien)
  {
    if(parseInt($scope.szablon[dzien]['Ilosc_godzin'])>0)
    {
      for(var i=0;i<$scope.stanowiska.length;i++)
        {
          if(parseInt($scope.stanowiska[i]['ID'])==ID_Stanowiska)
          {
              if(($scope.countStanowisko(ID_Stanowiska, dzien))< (parseInt($scope.stanowiska[i]['Minimum'])))
            {
              return {background:'red'};
              break;
            }
          }
        }
    }
  };

  $scope.countUprawnienie = function(uprawnienie, day)
  {
    var counter=0;

    for(var i=0; i<$scope.przydzialy.length; i++)
      {
        if(parseInt($scope.przydzialy[i].dni[day]['Ilosc_godzin'])>0)
        {
            for(var j=0;j<$scope.przydzialy[i]['Uprawnienia'].length;j++)
            {
                if(parseInt($scope.przydzialy[i]['Uprawnienia'][j])==uprawnienie)
                {
                        counter++;
                }
            }
        }
      }
      return counter;
  };

  $scope.styleUprawnienia = function(ID_Uprawnienia, dzien)
  {
    if(parseInt($scope.szablon[dzien]['Ilosc_godzin'])>0)
    {
      for(var i=0;i<$scope.uprawnienia.length;i++)
        {
          if(parseInt($scope.uprawnienia[i]['ID'])==ID_Uprawnienia)
          {
              if(($scope.countUprawnienie(ID_Uprawnienia, dzien))< (parseInt($scope.uprawnienia[i]['Minimum'])))
            {
              return {background:'red'};
              break;
            }
          }
        }
    }
  };

});
