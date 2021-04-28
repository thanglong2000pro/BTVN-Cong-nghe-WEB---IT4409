<html><head><title>Insert data</title></head>
<body>
     <?php
      $name = $_GET['itemName'];
      $weight = $_GET['weight'];
      $cost = $_GET['cost'];
      $number = $_GET['number'];



     $server = 'localhost';
     $user = 'root';
     $pass = '';
     $mydb = 'sale';
     $table_name = 'Products';
     $connect = mysqli_connect($server, $user, $pass, $mydb);
     if (!$connect) {
          die ("Cannot connect to $server using $user");
     } else {
          $SQLcmd = "INSERT INTO $table_name(Product_desc, Cost, Weight, Numb) VALUES ('$name', '$weight', '$cost', '$number')";
      // mysqli_select_db($connect, $mydb);
      if (mysqli_query($connect, $SQLcmd)) {
        print "The query is: $SQLcmd";
        echo "<br>";
        print "Insert into $table_name successful!";
        // echo "success";
      } else {
        die ("Insertion Failed: SQLcmd: $SQLcmd");
      } 
      mysqli_close($connect);
     }
     ?>
    </body>
</html> 