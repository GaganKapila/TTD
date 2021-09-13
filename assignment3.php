<?php
$xml=simplexml_load_file("assignment1GaganKapila-056-214425.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
echo "<b>" . $books->title . "</b>, ";
echo $books->author . ", ";
echo $yearss->year . ", ";
echo $books->price . "<br>";
}
?>