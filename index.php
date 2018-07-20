<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<script type="text/javascript">
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>

</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

 <form action="demo_file.php" target="_blank" oninput="x.value=parseInt(a.value)+parseInt(b.value)" id="Admin">
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname"><br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>
  <input list="browsers">
   <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
  0
  <input type="range" id="a" name="a" value="50">
  100 +
  <input type="number" id="b" name="b" value="50">
  =
  <output name="x" for="a b"></output>
  <br><br>

  <input type="submit" value="Submit" id="indexAdmin">
</form> 


<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

<img id="drag1" src="image/Ro_ear.gif" draggable="true"
ondragstart="drag(event)" width="60" height="60">


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$( "#indexAdmin" ).click( function () {
		alert('done');
	});
</script>
</html>






