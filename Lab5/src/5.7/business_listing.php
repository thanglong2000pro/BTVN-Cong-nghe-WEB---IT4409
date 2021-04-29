<!DOCTYPE html>
<html>

<head>
        <link href="business_listing.css" rel="stylesheet" media="all">
</head>

<body>
    <h1>Business Listings</h1>
    <div class="main">
        <div class="list_cat"> 
            <form action="business_listing.php" method="POST">
                <h3>Click on a category to find business listings: </h3>
                <?php
                $server = 'localhost';
                $user = 'root';
                $pass = '';
                $mydb = 'business_service';
                $table_name = 'Categories';

                $catid;
                $cnt = 0;

                $mysqli = new mysqli("localhost", $user, $pass, $mydb);

                $query = "SELECT * FROM $table_name";
                if ($result = $mysqli->query($query)) {

                    while ($row = $result->fetch_assoc()) {
                        $cnt++;
                    }
                    $result->free();
                }
                if ($result = $mysqli->query($query)) {

                    while ($row = $result->fetch_assoc()) {
                        $catname = $row["Title"];
                        $catid = $row["CategoryID"];
                        echo 
                            '<a id="'.$catid.'" href="business_listing.php?id='.$catid.'">'.$catname.'</a></option> <br>';
                    }
                    $result->free();
                }
                ?>
            </form>
        </div>
            
        <div class="business_list">
            <table border="1">
                <tr>
                    <th>Business ID </th>
                    <th>Business Name </th>
                    <th>Address </th>
                    <th>City </th>
                    <th>Number phone </th>
                    <th>URL </th>
                </tr>
                <?php
                $server = 'localhost';
                $user = 'root';
                $pass = '';
                $mydb = 'business_service';
                $business_tab = 'businesses';
                $table_name = 'categories';
                $business_cat = 'biz-categories';


                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $parts = parse_url($actual_link);
                if($parts['query'] != '') {
                    parse_str($parts['query'], $query);

                    if($query['id'] != '') {
                        $cat_selected = $query['id'];

                        if($cat_selected == '') {

                        } else {
                            $mysqli = new mysqli("localhost", $user, $pass, $mydb);
                            $query1 = "use $mydb";
                            mysqli_query($mysqli, $query1);
                            $query2 = "SELECT $business_tab.*, $business_cat.*
                            FROM $business_tab JOIN $business_cat
                            ON $business_tab.BusinessID = $business_cat.BusinessID
                            WHERE $business_cat.CategoryID LIKE '$cat_selected'";
                            if ($result = $mysqli->query($query2)) {

                                while ($row = $result->fetch_assoc()) {
                                    // $t++;
                                    $cnt = $row["BusinessID"];
                                    $name = $row["Name"];
                                    $address = $row["Address"];
                                    $city = $row["City"];
                                    $number = $row["Telephone"];
                                    $url = $row["URL"];
                                    echo
                                        '<tr>
                                            <td>' . $cnt . '</td>
                                            <td>' . $name . '</td> 
                                            <td>' . $address . '</td> 
                                            <td>' . $city . '</td> 
                                            <td>' . $number . '</td> 
                                            <td>' . $url . '</td> 
                                        </tr>';
                                }
                                // echo $t;
                                $result->free();
                            }
                        }
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>
