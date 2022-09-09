window.addEventListener("load",link_events,false);

//gobal varabible
var xhr;
function link_events(){
    document.getElementById("Button").onclick = showFile;
    xhr = new XMLHttpRequest();
       xhr.addEventListener("readystatechange",showFile, false);
       xhr.open("GET", "ex4.xml");
       xhr.send();
    
} 
function showFile(){
    var i;
    var state = document.forms["dat"]["place"].value;
    if(state){
    var out ="<h2>People Found:</h2><ol>";
    if(xhr.readyState == 4&&xhr.status == 200){
        var group = xhr.responseXML.getElementsByTagName("person");
        for(i =0;i<group.length;i++){
            var place = group[i].getElementsByTagName("state")[0].firstChild.textContent;
            if(place ==state){
                var fname = group[i].getElementsByTagName("fname")[0].firstChild.textContent;
                var lname = group[i].getElementsByTagName("lname")[0].firstChild.textContent;
                out+="<li>"+fname+" "+lname+"</li>";
            }
        }
        out +="</ol>";
        output.innerHTML=out;
    }
    return false;
}}