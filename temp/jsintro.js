
//once a web page is loaded, run th elink_events
window.addEventListener("load",link_events,false);

function link_events(){
    //link events to functions that we define
    document.getElementById("mainarea").onclick = hello_world;
    document.getElementById("aline").onclick = aline;
    document.getElementById("outarea").onclick = lastthing;
}
function lastthing(){
    // 'this' is always the objct that trigger the event
    this.innerHTML = "Using this.";
}

function aline(){
    var num;
    //read in a number form th screen
    num =document.getElementById("oneword").innerHTML;
    if(num > 9){
        num=0;
    }
    //and in javascript is &&
    //or in javascript is ||
    
    num++; 
    //print that number back onto screen
    document.getElementById("oneword").innerHTML = num;
}



function hello_world(){
    var message = "<h1>Hello World</h1>";
    document.getElementById("outarea").innerHTML = message;
}
