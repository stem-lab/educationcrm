function login(document) {
    var api_adress ='http://computerhelpapi.000webhostapp.com/api.php?action=';
    var password=document.getElementById('inputPassword').value,
           login = document.getElementById('inputEmail').value;
   
    var xhr = new XMLHttpRequest();
    xhr.open("GET", api_adress+'login&Login='+login+'&Password='+password,true);
      
    xhr.send();
    xhr.onload = function (){
    alert( xhr.responseText);
    }
    
}