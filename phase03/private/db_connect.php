<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = 'localhost';
$dbuser = 'sydneyrp_admin';
$dbpass = 'Deadmau5fan1997!';
$dbname = 'sydneyrp_salamanders';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//Test connection 
if(mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
}

//Test if query succeeded 
if(!$salamander_set) {
    exit("Database query failed.");
}

// 2. Perform database query
$query = "SELECT * FROM salamanders";
$salamander_set = mysqli_query($connection, $query);

// 3. Use returned data (if any)
while($salamander = mysqli_fetch_assoc($salamander_set)) {
    echo $salamander['salamanderName'] . "<br>";
}

// 4. Release returned data
mysqli_free_result($salamander_set);

// 5. Close database connection
mysqli_close($connection);

?>
