<html>
    <head><title> Receiving Input </title> </head>
    <body>
        <font size=5>Thank You: Got Your Input.</font>
    <?php
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        print ("<br>Your email address is $email");
        print ("<br>Your email address is $contact");
    ?>    
    </body>
</html>