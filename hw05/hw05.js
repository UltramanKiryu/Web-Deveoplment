window.addEventListener("load",link_events,false);

function link_events(){
    document.forms["input"]["Button"].onclick = Convert;
}

function Convert(){
    var input = document.getElementById("input");
    temp_in = document.forms["input"]["num"].value;
     var measure = document.forms["input"]["temp"].value;
     var data_value = true;
     if(isNaN(temp_in)){
         alert("you need to enter a numeric value");
         data_value = false;
     }
     if(data_value){
      if(measure == "Cel"&&temp_in){
         var temp_out = (temp_in - 32) *(5/9);
    output.innerHTML="Temperature is "+temp_out.toFixed(2);
         return false;
     }
     if(measure =="Farh"&&temp_in){
         var temp_out = (temp_in *(5/9)+32);
    output.innerHTML="Temperature is "+temp_out.toFixed(2);
         return false;
     }
     if(measure =="Farh"&&!temp_in||"Cel"&&!temp_in)
     {
         alert("type in a nunber");
     }
     else{// to incase the user did not select a radio button
         alert("you need to select a radio button or type a number");
     }   
     }
}