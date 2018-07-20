<?php

$myArr = array("John", "Mary", "Peter", "Sally");

$myJSON = json_encode($myArr);

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);

echo $myJSON;

//obj = { "table":"customers", "limit":10 };
?>
<!DOCTYPE html>
<html>
<body>

<h2>Get data as JSON from a PHP file on the server.</h2>

<p id="demo"></p>

<script>

var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("demo").innerHTML = myObj.name;
    }
};
xmlhttp.open("GET", "demo_file.php", true);
xmlhttp.send();

</script>

</body>
</html>
