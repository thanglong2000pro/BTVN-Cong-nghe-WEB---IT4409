<?php
    // set name of XML file
    $file = "7.6.2.xml";
    
    // load file
    $xml = simplexml_load_file($file) or die ("Unable to load XML file!");
    
    // modify XML data
    $xml->name = "Sammy Snail";
    $xml->age = 4;
    $xml->species = "snail";
    $xml->parents->mother = "Sue Snail";
    $xml->parents->father = "Sid Snail";
    
    // write new data to file
    file_put_contents($file, $xml->asXML());
    
    // access XML data
    echo "Name: ".$xml->name."<br>";
    echo "Age: " . $xml->age . "<br>";
    echo "Species: " . $xml->species . "<br>";
    echo "Parents: " . $xml->parents->mother . " and " .  $xml->parents->father . "<br>"; 
?>