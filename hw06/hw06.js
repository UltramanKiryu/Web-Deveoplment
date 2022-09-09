window.addEventListener("load",link_events,false);

function link_events(){
    document.forms["input"]["Button"].onclick = PrintTable;
} 
function PrintTable(){
    var input = document.getElementById("input");
    var year = document.forms["input"]["time"].value;
    var pop = parseInt(document.forms["input"]["pop"].value);
    var rate = document.forms["input"]["rate"].value;
    var i;
    var data= true;
    if(isNaN(year)){
        alert("Years to Forecast need to be numeric");
        data=false;
    }
    else if(isNaN(pop)){
        alert("Current Population need to be numeric");
        data=false;
    }
    else if(isNaN(rate)){
        alert("Growth Rate need to be numeric");
        data=false;
    }
    if(data){
    var outarea = document.getElementById("output");
    var outstring ="<table>"+
    "<tr>"+ 
    "<th>Year</th>"+
    "<th>Population</th>"+
    "<th>Change</th>"+
    "</tr>";
    for(i=1;i<=year;i++){
        var str = 2010 +i;
        var growth = pop *(rate/100);
         pop+= growth;
        outstring +="<tr>"+
        "<td>"+str+"</td>"+
        "<td>"+pop.toFixed(0)+"</td>"+
        "<td>"+growth.toFixed(0)+"</td>"+
        "</tr>";
    }
    outstring+="</table>";
    output.innerHTML=outstring;
    return false;
    }
}