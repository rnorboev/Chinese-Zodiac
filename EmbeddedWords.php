<!DOCTYPE html>
<html>
<head>
	<title>Embedded Words</title>
</head>
<body>
	<h1>Embedded Words</h1>
	<div style="background-color: #cccccc">
	<?php 
	//declare the $Phrases and $SignNames arrays
		$Phrases = array("Your Chinese zodiac sign tells a lot about your personality.", "Embed PHP scripts within an XHTML documnet.");
		$SignNames = array(
			"Rat", 
			"OX", 
			"Tiger", 
			"Rabbit", 
			"Dragon", 
			"Snake", 
			"Horse", 
			"Goat", 
			"Monkey", 
			"Rooster", 
			"Dog", 
			"Pig");
		//Add a function named BuildLetterCounts()
		function BuildLetterCounts($text) {
			$text = strtoupper($text);
		/* statement uses the count_chars() function to create an array of the counts of the 256 ASCII characters*/
			$letter_counts = count_chars($text);
		//returns the newly created array
			return $letter_counts;
		}

		//Add a function named AContainsB()
		function AContainsB($A, $B) {
		//return value ( TRUE ) is set
			$retval = TRUE;
		/*ord() function is used to get the ASCII values of the fi rst and last capital letters (‘A’ and ‘Z’)*/
			$first_letter_index = ord('A');
			$last_letter_index = ord('Z');
		/*use a for loop to check the counts for each uppercase letter. At any iteration, if the count for the current character from array $A is less than the count for the current character from array $B , the word cannot be made from the letters in the phrase, so the return value is set to FALSE .*/
			for ($leter_index = $first_letter_index;
				$leter_index <= $last_letter_index;
				++$leter_index){
				if ($A[$leter_index] < $B[$leter_index]){
					$retval = FALSE;
				}
			}
			return $retval;
		}
		/*Create a foreach loop to step through each of the phrases.*/
		foreach ($Phrases as $Phrase) {
		/*Use the BuildLetterCounts() function to create an array of the counts of the ASCII characters in the phrase*/
			$PhraseArray = BuildLetterCounts($Phrase);
			$GoodWords = array();
			$BadWords = array();
		/*create an inner foreach loop to step through each of the sign names*/
		foreach ($SignNames as $Word) {
		/*Use the BuildLetterCounts() function to create an array of the counts of the ASCII characters in the sign name.*/
			$WordArray = BuildLetterCounts($Word);
		/*AContainsB() function to determine if the sign name (B) can be made with the letters in the phrase (A)*/
			if (AContainsB($PhraseArray, $WordArray))
		/*If the AContainsB() function returns TRUE , add the sign name to the $GoodWords array.*/
					$GoodWords[] = $Word;
			else
		/*If the AContainsB() function returns FALSE , add the sign name to the $BadWords array.*/
				$BadWords[] = $Word;
		}
		/*display the list of words that can and cannot be made from the phrase.*/
		echo "<p>The following words can be made from the letters in the phrase &quot;$Phrase&quot;:";
		foreach ($GoodWords as $Word) {
			echo " $Word";
		}
		echo "</p\n";
		echo "<p>The following words can not be made from the letters in the phrase &quot;$Phrase&quot;:";
		foreach ($BadWords as $Word) {
			echo " $Word";
		}
		echo "</p>\n";
		echo "<hr />\n";
	}
	?>
</div>
</body>
</html>