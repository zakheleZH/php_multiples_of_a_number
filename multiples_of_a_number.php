<htm>
<head>
	<title>multiples of a number</title>
</head>
<body>
<h1>This Application show multiples of a number entered </h1>
<p>The multiples will start from 1 to 10</p>
<form action="multiple_of_a_number.php" method="post">
Enter a Number<input type="number" name="number"><br>
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit']))
{
	$number = $_POST['number'];
	if(!empty($number)) // checking if number entered is not empty
	{
		//echo $number;
		
	      if(strpos($number, "-") === false) // checking if number entered is not a nagative number
	      {
	      echo "	<h3> multiples of $number from 1 to 10 are as follows</h3>";
	      	for($a=1;$a<=10;$a++) //looping from 1 to 10
	      	{
               
	      		echo $a.' X '.$number.' = '.$a*$number.'<br>'; // displaying multiples
	      	}
	      }
	      else
	      {
	      echo "<font color='red'>Please enter a positive number</font>"; // displaying an error message if nagative number is entered
	      }
	      
	}

	else
	{
		echo "<font color='red'>Please enter a number</font>"; // displaying an error message if number not entered	

	}
}



?>
</body>
</htm>