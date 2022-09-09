window.addEventListener("load",link_events,false);

//gobal varabible
var xhr;


function link_events(){
    document.getElementById("Button").onclick=showFile;
    xhr = new XMLHttpRequest();
       xhr.addEventListener("readystatechange",showFile, false);
       xhr.open("GET", "un.json");
       xhr.send();
    
}
function showFile(){
    var i;
    var name; var pop; var area;
    var radio = document.forms.input.cont.value;
    if(radio){
    var out = "<table><tr><th>Name</th><th>Population</th><th>Area</th></tr>";
    if(xhr.readyState == 4&&xhr.status == 200){
        var countries = JSON.parse(xhr.responseText).countries;
        for(i=0;i<countries.length;i++){
            var cont = countries[i].continent;
            if(cont ==radio){
                name =countries[i].name;
                pop =countries[i].pop;
                area =countries[i].area;
                out +="<tr>"+
                "<td>"+name+"</td>"+
                "<td>"+pop+"</td>"+
                "<td>"+area+"</td>"+
                "</tr>"; 
            }
    }
    out +="</table>";
    document.getElementById("output").innerHTML = out;
    return false;
    }
}
}
