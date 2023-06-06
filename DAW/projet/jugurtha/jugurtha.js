function sendAjaxRequest(url,method,data,callback){
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(xhr.readyState ===4 &&xhr.status===200){
            callback(xhr.responseText);
        }
    };
    xhr.open(method,url,true);
    xhr.setRequestHeader('content-type','application/x-form-urlencoded');
    xhr.send(data);
}
function rechercher(){
    var Ville=document.getElementById('Ville').value;
    var Pays=document.getElementById('Pays').value;
    var Continent=document.getElementById('Continent').value;
    var Site=document.getElementById('Site').value;
    var parms='Ville'+encodeURIComponent(Ville)+'&Pays='+encodeURIComponent(Pays)+'&Continent=' ;
}