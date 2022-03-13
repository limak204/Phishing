<?php
// Connects to your Database 
$conn=mysqli_connect("localhost", "root", "KS[CIG.()ZMXP/tb","ryba") or die(mysqli_error()); 

//Adds one to the counter
mysqli_query($conn,"UPDATE counter SET counter = counter + 1");
//Retrieves the current count
$count = mysqli_fetch_row(mysqli_query($conn,"SELECT counter FROM counter"));
//Displays the count on your site
print "$count[0]"; 
?>