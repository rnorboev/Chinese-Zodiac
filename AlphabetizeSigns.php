<!DOCTYPE html>
<html>
<head>
	<title>	Alphabetizing User Input</title>
</head>
<body>

<style type="text/css">
  #wrapp{
    text-align: left;
    background-color: #cccccc;
    margin: auto: ;
    padding:8px;
  } 
  p{
    text-indent: 2em;
  }
</style>
<div id="wrapp">
<h1 style="text-align: center;">Alphabetize the 12 Chinese Zodiac Signs</h1>
<textarea style="text-align: left" name="list" form="signs" rows="10" cols="80" placeholder="Write 12 random Chinese Zodiac sign names separated by comma"></textarea>
<form method="POST" id="signs">
  <input type="submit" value="Sort">
</form>

<?php

if (isset($_POST['list'])) {
  $sorted = explode(',', $_POST['list']);
  sort($sorted);
  echo "<ol>";
  foreach ( $sorted as $sign ) {
    echo "<li>$sign</li>";
  }
  echo "</ol>";
}
?>
</div>
</body>
</html>