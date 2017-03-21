<style type="text/css">
    #wrapp{
        text-align: left;
        background-color: #cccccc;
        
        margin: auto;
        padding:8px;
    }   
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Zodiac Gallery</title>
</head>
<body>
<div id="wrapp">
<h1  style="text-align: center">Zodiac Gallery</h1>
<p>Click a thumbnail image to see an independent view.</p>
<?php
$SignsArray = array("images/Rat.png" => "Rat",
                    "images/Ox.png" => "Ox",
                    "images/Tiger.png" => "Tiger",
                    "images/Rabbit.png" => "Rabbit",
                    "images/Dragon.png" => "Dragon",
                    "images/Snake.png" => "Snake",
                    "images/Horse.png" => "Horse",
                    "images/Goat.png" => "Goat",
                    "images/Monkey.png" => "Monkey",
                    "images/Rooster.png" => "Rooster",
                    "images/Dog.png" => "Dog",
                    "images/Pig.png" => "Pig"
                    );

echo "<p><a href=\"images/Rat.png\"><img src=\"images/Rat.png";
foreach ($SignsArray as $Sign) {
    echo "\" alt=\"" . $Sign . "\" height=\"50\" width=\"50\"/></a>&nbsp;&nbsp;" . $Sign . "<br /><a href=\"" . key($SignsArray) . "\"><img src=\"" . key($SignsArray);
    next($SignsArray);
}
echo "</p>";
?>
</div>
</body>
</html>
