<?php
    // set name of XML file
    $file = "7.6.3.xml";
    
    // load file
    $xml = simplexml_load_file($file) or die ("Unable to load XML file!");
    
    // access each <sin>
    echo "<h4>Access each sin:</h4>";
    echo $xml->sin[0] . "<br>";
    echo $xml->sin[1] . "<br>";
    echo $xml->sin[2] . "<br>";
    echo $xml->sin[3] . "<br>";
    echo $xml->sin[4] . "<br>";
    echo $xml->sin[5] . "<br>";
    echo $xml->sin[6] . "<br>";
    
    // iterate over <sin> element collection
    echo "<h4>Iterate over sin element collection:</h4>";
    foreach ($xml->sin as $sin) {
        echo "$sin<br>";
    }

?>