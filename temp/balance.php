<!doctype html>
<html lang="en">
<head>
  <title>Balance Calculator</title>
  <link rel="stylesheet" href="balance.css">
  <script src="balance.js"> </script>
</head>
<body>

<div id="input"> 
	<form name="inputform"> 
		<h2> Input </h2>
		Old Balance: <input type="text" size="8" name="oldbalance" ><p>
		Charges: <input type="text" size="8" name="charges" > <p>
		Credits: <input type="text" size="8" name="credits" > <p>
		<div id="button_area">
			<input type="submit" id= "calc" value="Submit">
		</div>
	</form>
</div>

<div id="results">

</div>


</body>
</html>