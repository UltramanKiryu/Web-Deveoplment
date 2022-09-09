window.addEventListener("load",link_events,false);

//gobal varabible
var xhr;
function link_events(){
    document.getElementById("Button").onclick = showFile;
    xhr = new XMLHttpRequest();
       xhr.addEventListener("readystatechange",showFile, false);
       xhr.open("GET", "un.xml");
       xhr.send();
    
}

function showFile(){
  var i;
  var radio = document.forms.input.cont.value;
  if(radio){
    var out = "<table><tr><th>Name</th><th>Population</th><th>Area</th></tr>";
    if(xhr.readyState == 4&&xhr.status == 200){
        var countries = xhr.responseXML.getElementsByTagName("country");
        for(i=0;i<countries.length;i++){
            var cont = countries[i].getElementsByTagName("continent")[0].firstChild.textContent;
            if(cont == radio){
                var name = countries[i].getElementsByTagName("name")[0].firstChild.textContent;
                var pop = countries[i].getElementsByTagName("pop")[0].firstChild.textContent;
                var area = countries[i].getElementsByTagName("area")[0].firstChild.textContent;
                out +="<tr>"+
                "<td>"+name+"</td>"+
                "<td>"+pop+"</td>"+
                "<td>"+area+"</td>"+
                "</tr>";
            }
        }
         out +="</table>";
        output.innerHTML = out;
    }
    return false;
  }
}