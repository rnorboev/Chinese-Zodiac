<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
    #wrapp{
        text-align: left;
        background-color: #cccccc;
        
        margin: auto;
        padding:8px;
    }   
</style>
<div id="wrapp">

	<?php
		function displayForm($birthyear) 
		{
	?>
	
	
	<form name="contact" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
		<h1 align="center">The Chinese Zodiac</h1>
		<h2 align="center">Using IF...ELSE</h2>
		
		<fieldset>
			<legend align="right">
				Birth Information
			</legend>
				Year of Birth: 
				<input type="text" name="birthyear" value="<?php echo $birthyear; ?>" />
		</fieldset>
		
		<fieldset align="center">
			<legend align="right">
				Reset and Submit Information
			</legend>
			
			<button type="reset" value="Reset">
				Clear Form
			</button>			
			<input type="submit" name="Submit" value="Show Me My Sign" />
		</fieldset>
	</form>

	<?php
		}
	
	function displayCount($birthyear)
	{
		if(file_exists("statistics/$birthyear.txt"))
		{
			$file = fopen("statistics/$birthyear.txt","r+");
			$hits = intval(file_get_contents("statistics/$birthyear.txt"));
			file_put_contents("statistics/$birthyear.txt",++$hits);
			fclose($file);
		}
		else
		{
			file_put_contents("statistics/$birthyear.txt","1");
			$hits = 1;
		}
		return($hits);
	}
	$ShowForm = TRUE;
	$errorCount = 0;
	$birthyear = "";

	if (isset($_POST['Submit'])) 
	{
		$new_data = htmlspecialchars($_POST['birthyear'], ENT_QUOTES);
		$birthyear = ($new_data);
		if ($errorCount==0)
			$ShowForm = FALSE;
		else
			$ShowForm = TRUE;
	}

	if ($ShowForm == TRUE) 
	{
		if ($errorCount>0) 
			echo "<p></p>\n";
		displayForm($birthyear);
	}
	else 
	{
		
		$result = $birthyear;
		if ($result)
						
			$sign = $birthyear%12;
			if ($sign==0)
			{
			echo "You were born under the sign of the Monkey.</p><br />\n";
			echo "<img src='images/Monkey.png' />";
			}
			elseif ($sign==1) 
			{
			echo "You were born under the sign of the Rooster.</p><br />\n";
			echo "<img src='images/Rooster.png' />";
			}

			elseif ($sign==2) 
			{
			echo "You were born under the sign of the Dog.</p><br />\n";
			echo "<img src='images/Dog.png' />";;
			}

			elseif ($sign==3) 
			{
			echo "You were born under the sign of the Pig.</p><br />\n";
			echo "<img src='images/Pig.png' />";;
			}

			elseif ($sign==4) 
			{
			echo "You were born under the sign of the Rat.</p><br />\n";
			echo "<img src='images/Rat.png' />";;
			}

			elseif ($sign==5) 
			{
			echo "You were born under the sign of the Ox.</p><br />\n";
			echo "<img src='images/Ox.png' />";;
			}

			elseif ($sign==6) 
			{
			echo "You were born under the sign of the Tiger.</p><br />\n";
			echo "<img src='images/Tiger.png' />";;
			}

			elseif ($sign==7) 
			{
			echo "You were born under the sign of the Rabbit.</p><br />\n";
			echo "<img src='images/Rabbit.png' />";;
			}

			elseif ($sign==8) 
			{
			echo "You were born under the sign of the Dragon.</p><br />\n";
			echo "<img src='images/Dragon.png' />";;
			}

			elseif ($sign==9) 
			{
			echo "You were born under the sign of the Snake.</p><br />\n";
			echo "<img src='images/Snake.png' />";;
			}                        

			elseif ($sign==10) 
			{
			echo "You were born under the sign of the Horse.</p><br />\n";
			echo "<img src='images/Horse.png' />";;
			}            

			elseif ($sign==11) 
			{
			echo "You were born under the sign of the Goat.</p><br />\n";
			echo "<img src='images/Goat.png' />";;
			}    
		$hits = displayCount($birthyear);
		echo "<p> You are visitor " .$hits. " to enter ". $birthyear. ".</p>";
		echo "<p style='text-align: center;'><a href='BirthYear_ifelse.php' >Back</a></p>";
	}

?>
</div> 
</body>
</html>