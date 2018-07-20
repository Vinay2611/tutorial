<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example1-MONTH-function - php mysql examples | w3resource</title>
<meta name="description" content="example1-MONTH-function - php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Display MONTH for current date:</h2>
<table class='table table-bordered'>
<tr> 
<th>MONTH for current date</th>
</tr>
<?php
$hostname="localhost";
$username="root";
$password="";
$db = "newmall";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT MONTH(CURRENT_DATE())') as $row) {
echo "<tr>";
echo "<td>" . $row['MONTH(CURRENT_DATE())'] . "</td>";
echo "</tr>";
}

//
$num = 5;
$location = 'tree';

$format = 'There are monkeys in the %s , %d';
echo sprintf($format,$location ,  $num);
?>
</tbody></table>
</div>
</div>
</div>
</body>
</html>