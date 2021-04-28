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
            
            $SQLcmd = "SELECT * FROM $table_name";
            print "<h1>Category Administration</h1>";
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
        <form action="addCategory.php" method="post">
            <table>
                <tr>
                    <td><input type="text" name="id"></td>
                    <td><input type="text" name="title"></td>
                    <td><input type="text" name="description"></td>

                </tr>

            </table>
            <input type="submit">

        </form>
    </body>
</html>