/**
 * Created by Mateusz on 2016-07-17.
 */
function edytuj() {

   var optradio = document.getElementById("optradio").value;
   var rok =  document.getElementById("rok").value;
   var zmiana = document.getElementById("zmiana").value;
    var iloscGodzin = document.getElementById("iloscGodzin").value;
    

    window.location = 'Routing.generate("showHalfYear", {"polowaRoku": optradio, "rok": rok, "zmiana": zmiana, "wymaganaIloscGodzin": iloscGodzin} )';

    document.getElementById("test").innerHTML=  rok+" "+zmiana+" "+optradio+" "+iloscGodzin;
   // href="{{ path("showHalfYear", {'polowaRoku': 'optradio.value', 'rok': 'rok.value', 'zmiana': 'zmiana.value', 'wymaganaIloscGodzin': 'iloscGodzin.value'} ) }}"

}