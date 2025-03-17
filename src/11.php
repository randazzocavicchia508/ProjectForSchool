
<?php

// Get the current date and time
$currentDateTime = date("Y-m-d H:i:s");

// Format the date as desired
$formattedDate = date("l jS F Y", strtotime($currentDateTime));

// Output the formatted date
echo $formattedDate;

?>