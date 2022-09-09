// Note: Dont forget the <script> tag in HTML/PHP to run this file 

// link objects/events to functions when window loads
window.addEventListener("load",link_events,true);

function link_events(){
    document.getElementById("calc").onclick = Calculate;
}
function Calculate(){
    //input
    var oldbalance = parseFloat(document.forms["inputform"]["oldbalance"].value);
    var charges = parseFloat(document.forms.inputform.charges.value);
    var credits = parseFloat(document.forms.inputform.credits.value);
    // data validation
    var data_is_valid = true;
     if(isNaN(oldbalance)){
         alert("balance should be numeric");
         data_is_valid = false;
         
     }
     if(isNaN(charges)){
         alert("charges should be numeric");
         data_is_valid = false;
         
     }
     if(isNaN(credits)){
         alert("credits should be numeric");
         data_is_valid = false;
         
     }
     // to check  RADIO button you would do something like
         // if(!scale)
    if(data_is_valid){
        var new_balance = oldbalance + charges - credits + (oldbalance *0.015);
    var minpayment  = new_balance *0.02;
    //output
    document.getElementById("results").innerHTML = "<h2>Results</h2>"+
    "Your new balance is"+ new_balance.toFixed(2)+"<br />"+
    "Your minimun payment is"+ minpayment.toFixed(2);
    }
    //process
    return false;
}

