/**
 * Created by Mateusz on 2016-06-28.
 */
function edit(Imie, Nazwisko, Id, Stanowisko) {

    document.getElementById("nazwisko").value = Nazwisko;
    document.getElementById("imie").value = Imie;
    document.getElementById("stanowisko").value = Stanowisko;
    document.getElementById("dodaj").innerHTML= 'Edytuj';
    document.getElementById("wstaw_button").innerHTML= 'Edytuj';
    document.getElementById("id").value= Id;
    //document.getElementById('form').action = '';
    document.getElementById('form').action = Routing.generate('editStrazak');
    //var url = Routing.generate('editStrazak');
    $('#przycisk').empty();
    addButton();
    //alert(url);
}

function addButton()
{
    var element = document.createElement("input");
    element.setAttribute('type','button');
    element.setAttribute('name','reset');
    element.setAttribute('value','reset');
    element.setAttribute('class','btn btn-default');
    element.setAttribute('onclick','reset()');
    var reset = document.getElementById('przycisk');
    $(reset).append(element);
}
function reset()
{
    document.getElementById('form').reset();
    document.getElementById('dodaj').innerHTML = 'Dodaj Strażaka';
    document.getElementById("wstaw_button").innerHTML= 'Dodaj';
    document.getElementById('form').action = Routing.generate('addStrazak');

    $('#przycisk').empty();
}