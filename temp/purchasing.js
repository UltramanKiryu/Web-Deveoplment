// process  purchase.xml
// Columns in Table:
// item name
// quantitiy ordered
// unit price
// price for this item

// also calculate overall # of items ordered, and total price

/* link events to functions when window loads*/
window.addEventListener("load", link_events, false);

var xhr;

function link_events() {
    xhr = new XMLHttpRequest();
    xhr.addEventListener("readystatechange", showFile, false);
    xhr.open("GET","purchase.xml");
    xhr.send();
}

function showFile() {
    var i;
    var item_total;
    var count =0;
    var total =0;
   var outstring = "<table><tr><th>Prodcut</th><th>Quantity</th><th>Unit Price</th><th>Total Price</th></tr>";
   if(xhr.readyState==4&&xhr.status == 200){
       var products = xhr.responseXML.getElementsByTagName("product");
     for(i=0;i<products.length;i++){
         var qty = parseInt(products[i].getElementsByTagName("quantity")[0].firstChild.textContent);
         if(qty>0){
             var name = products[i].getElementsByTagName("name")[0].firstChild.textContent;
            var price = parseFloat(products[i].getElementsByTagName("price")[0].firstChild.textContent);
            item_total =price *qty;
            count += qty;
            total += item_total;
         outstring += "<tr>"+
         "<td>"+ name +"</td>"+
         "<td>"+ qty +"</td>"+
         "<td>"+ price +"</td>"+
         "<td>"+ item_total +"</td>"+
         "</tr>";
         }
     }
   }
   outstring += "</table> <br />";
   outstring += "Total items ordered "+count+"<br />"+
   "Total price of order: $"+total.toFixed(2);
   document.getElementById("outarea").innerHTML = outstring; 
	
}

