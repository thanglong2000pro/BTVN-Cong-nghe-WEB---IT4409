<html>
<head>
    <title>Insert data</title>
    <style>
        th{
            padding: 5px;
        }
    </style>
</head>

<body>
    <h2 style="color:blue">Products Data</h2>
     <?php
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
          $SQLcmd = "SELECT * FROM $table_name";
          $result = $connect->query($SQLcmd);
      // mysqli_select_db($connect, $mydb);
      if (mysqli_query($connect, $SQLcmd)) {
        echo "The query is: $SQLcmd";
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
            echo "No data to show";
        }
      } 
      else {
        die ("Failed: SQLcmd: $SQLcmd");
      } 
      mysqli_close($connect);
     }
     ?>
    </table>
    </body>
</html> 



