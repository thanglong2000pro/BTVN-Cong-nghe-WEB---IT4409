<html><head><title>Create Table</title>
        <style>
            table {
                width: 100%;
            }
            th,tr,td {
                border: 1px solid black;
            }
            td {
                width: 200px;
            }
            input {
                border: none;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
        $server = 'localhost';
        $user = 'root';
        $pass = '';
        $mydb = 'business_service';
        $table_name = 'categories';
        $connect = mysqli_connect($server, $user, $pass, $mydb);
        if (!$connect) {
            die("Cannot connect to $server using $user");
        } else {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $SQLcmd = "INSERT INTO $table_name (CategoryID, Title, Description) VALUES('$id', '$title', '$description')";
            mysqli_query($connect, $SQLcmd);
            print "<div>The query is $SQLcmd</div>";
            $SQLcmd = "SELECT * FROM $table_name";
            print "<div>The query is $SQLcmd</div>";
            print '<table>';
            print "<tr><th>CategoryID</th><th>Title</th><th>Description</th></tr>";
            $result = mysqli_query($connect, $SQLcmd);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
                    print "<tr>
                    <td>" . $row['CategoryID'] . "</td>
                    <td>" . $row['Title'] . "</td>
                    <td>" . $row['Description'] . "</td>
                   </tr>";
                }
                print "</table>";
                $result->free();
            } else {
                print "Không có bản ghi nào được tìm thấy.";
            }
         

            mysqli_close($connect);
        }
        ?>
        <form action="admin.php">
            <input type="submit" value="Back">
        </form>

    </body>
</html>