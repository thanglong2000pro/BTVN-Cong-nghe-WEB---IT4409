<?php
    // set name of XML file
    $file = "7.6.5.xml";
    
    // load file
    $xml = simplexml_load_file($file) or die ("Unable to load XML file!");
    
    // get all the <desc> elements and print
    echo "<h4>All ingredients:</h4>";
    foreach ($xml->xpath('//desc') as $desc) {
        echo "$desc<br>";
    }

    // get all the <desc> elements and print
    echo "<h4>Ingredients have quantity > 1:</h4>";
    foreach ($xml->xpath('//item[quantity > 1]/desc') as $desc) {
        echo "$desc<br>";
    }
    
?>