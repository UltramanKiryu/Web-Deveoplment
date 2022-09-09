<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw02.css"> 
  <!-- ----------------------------------
			BIS1523/BIS2523 Documentation
   Name:Andrew Banks
   Netid:alb1424
   Date:2/2/2021
   
   Variables used:
      <variable name>  <description of data variable will hold>
  $xml : name of the xml file array
  $list ->  name of the xml children array
  $sum -> total of the amount of the quantity of all the products
  $base_cost -> amount of the individual price and quantiy
  $cost_total -> the total of all of the base_cost of all of the table 
   -------------------------------------  -->
</head>
<body>
<?
print"<table>
<tr>
<th>Item</hr>
<th>Price</hr>
<th>Quanity</hr>
<th>Line Price</hr>
</tr>";
$xml=simplexml_load_file("purchasing.xml");
foreach($xml->children() as $list)
{
    if ($list->quantity != 0)
    {
        print"<tr>
    <td>$list->name</td>
    <td>$list->price</td>
    <td>$list->quantity</td>";
    $base_cost = number_format($list->price *$list->quantity,2);
    $cost_total = number_format($cost_total+$base_cost,2);
    print"<td>$$base_cost</td>
    </tr>";
    $sum += $list->quantity;
    }
    else{$xml->next;}
}
    
print"<tr>
<td>Total</td>
<td></td>
<td>$sum</td>
<td>$$cost_total</td>
</tr>";
print"</table>";

?>
</body>
</html>