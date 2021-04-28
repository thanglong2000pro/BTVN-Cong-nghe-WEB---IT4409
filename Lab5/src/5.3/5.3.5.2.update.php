<html>
<head>
    <title>Select data</title>
    <style>
        th{
            padding: 5px;
        }
    </style>
</head>

<body>
    <h2 style="color:blue">Update Results for Table Products</h2>
     <?php
      $product = $_GET['product'];

     $server = 'localhost';
     $user = 'root';
     $pass = '';
     $mydb = 'sale';
     $table_name = 'Products';
     $cnt = 1;

     $connect = mysqli_connect($server, $user, $pass, $mydb);
     if (!$connect) {
          die ("Cannot connect to $server using $user");
     } else {
          $SQLcmd2 = "UPDATE $mydb.$table_name SET Numb = Numb - 1 WHERE (Product_desc = '$product')";
          $connect->query($SQLcmd2);

          $SQLcmd = "SELECT * FROM $table_name";
          $result = $connect->query($SQLcmd);
      // mysqli_select_db($connect, $mydb);
      if (mysqli_query($connect, $SQLcmd)) {
        print "The query is: $SQLcmd2";
        echo "<br>";

        if (mysqli_num_rows($result) > 0) {
            echo 
            "<table border=1>
                <tr>
                    <th>Num</th>
                    <th>Product</th>
                    <th>Weight</th>
                    <th>Cost</th>
                    <th>Count</th>
                </tr>";
            while($row = $result->fetch_assoc()) {
                echo 
                "<tr>
                    <td>" . $cnt++. "</td>
                    <td>" . $row['Product_desc']. "</td> 
                    <td>" . $row['Cost']. "</td> 
                    <td>" . $row['Weight']. "</td> 
                    <td>" . $row['Numb']. "</td> 
                </tr>";
            }
        }
        else {
            echo "No item match";
        }
      } 
      else {
        die ("Insertion Failed: SQLcmd: $SQLcmd");
      } 
      mysqli_close($connect);
     }
     ?>
    </body>
</html> 