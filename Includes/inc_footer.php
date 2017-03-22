
<div id="footer">Copyright &copy; 2017 Ravshanbek Norboev. All rights reserved.<br><br>
<?php  
	$prov_array = file("proverbs.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$proverbcount = count($prov_array);
	$index = rand(0, $proverbcount-1);
		echo "A randomly displayed Chinese proverb read from a text file <br><br>";
		echo $prov_array[$index]."<br><br>";
		echo "<img src=".getimage().">";

	function getimage() {
  		$files = glob("images/Dragon*.png");
  		shuffle($files);
  			return $files['0'];
}
?>


</div>