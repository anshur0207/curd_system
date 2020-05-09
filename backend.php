<?php

$conn = mysqli_connect('localhost','root',"",'curdoperation');

extract($_POST);
if(isset($_POST['Expertise']) && isset($_POST['Years'])isset($_POST['Months'])isset($_POST['Remote'])isset($_POST['Centre'])isset($_POST['LearnersPlace'])isset($_POST['Myplace']) )

{
	$query= " INSERT INTO `curdtable`( `Expertise`, `Years`, `Months`, `Remote`, `Centre`, `LearnersPlace`, `Myplace`) VALUES('$Expertise','$Years','$Months','$Remote','Centre','$LearnersPlace','$Myplace')";
	mysqli_query($conn,$query);

}




?>