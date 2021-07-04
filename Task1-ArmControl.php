<?php

$CONTROL1=$_POST['CONTROL1'];
$CONTROL2=$_POST['CONTROL2'];
$CONTROL3=$_POST['CONTROL3'];
$CONTROL4=$_POST['CONTROL4'];
$CONTROL5=$_POST['CONTROL5'];
$CONTROL6=$_POST['CONTROL6'];

$conn= new mysqli('localhost','root','','robot');

if (!$conn){
    echo '<big>NO CONNECTION, </big>';
}
else {echo '<big>CONNECTED, </big>';}

$sql="INSERT INTO ArmControl (CONTROL1,CONTROL2,CONTROL3,CONTROL4,CONTROL5,CONTROL6) values ('$CONTROL1','$CONTROL2','$CONTROL3','$CONTROL4','$CONTROL5','$CONTROL6')";

if (!mysqli_query($conn,$sql)){
    echo '<big>ERROR</big>';
}
else {
    echo '<big>INSERTED </big><br><br>';
	echo '<big><b>Values of Arm Control:</b></big><br>';
	echo '*<big> 1 is : ' .$CONTROL1. '</big><br>' ;
	echo '*<big> 2 is : ' .$CONTROL2. '</big><br>'  ;
	echo '*<big> 3 is : ' .$CONTROL3. '</big><br>'  ;
	echo '*<big> 4 is : ' .$CONTROL4. '</big><br>'  ;
	echo '*<big> 5 is : ' .$CONTROL5. '</big><br>'  ;
	echo '*<big> 6 is : ' .$CONTROL6 ;
}

?>