<!DOCTYPE html>
<html>

<head>
     <link href="add_css.css" rel="stylesheet" media="all">
</head>

<body>
    <h1>Business Registration</h1>
    <form action="business_reg_success.php" method="POST">
        <div class="main">
            <div class="list_cat">
                <select name="cat" size="5" multiple="multiple" required>  
                    <?php
                    $server = 'localhost';
                    $user = 'root';
                    $pass = '';
                    $mydb = 'business_service';
                    $cat_tab = 'Categories';

                    $catid;

                    $mysqli = new mysqli("localhost", $user, $pass, $mydb);

                    $query = "SELECT * FROM $cat_tab";
                    if ($result = $mysqli->query($query)) {

                        /* fetch associative array */
                        while ($row = $result->fetch_assoc()) {
                            $catid = $row["CategoryID"];
                            echo
                                '<option value="'. $catid .'" name="'.$catid.'" id="'.$catid.'">'.$catid.'</option>';
                        }

                        $result->free();
                    }
                    ?>
                </select>
            </div>
            <div class="form_biz">
                <table>
                    <tr>
                        <td>Business name: </td>
                        <td><input type="text" name="biz_name" id="biz_name" required></td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td><input type="text" name="address" id="address" required ></td>
                    </tr>
                    <tr>
                        <td>City: </td>
                        <td><input type="text" name="city" id="city" required ></td>
                    </tr>
                    <tr>
                        <td>Telephone: </td>
                        <td><input type="text" name="number" id="number" required></td>
                    </tr>
                    <tr>
                        <td>URL: </td>
                        <td><input type="text" name="url" id="url" required></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <input type="submit" id="submit" name="submit" class="submit" value="Click to Submit">
        <input type="reset" class="submit" value="Cancel">
    </form>
</body>

</html>