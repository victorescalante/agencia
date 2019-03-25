<?php
// Include the SimpleOrm class
include 'orm.php';
// Connect to the database using mysqli
$conn = new mysqli('127.0.0.1','victor','victor');
if ($conn->connect_error)
die(sprintf('Unable to connect to the database. %s', $conn->connect_error));
// Tell SimpleOrm to use the connection you just created.
SimpleOrm::useConnection($conn, 'ruth');
// Define an object that relates to a table.

class Providers extends SimpleOrm { }
class Fails extends SimpleOrm { }


 ?>
