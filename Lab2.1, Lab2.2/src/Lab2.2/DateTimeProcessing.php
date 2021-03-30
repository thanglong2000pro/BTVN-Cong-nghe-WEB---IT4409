<!DOCTYPE html>
<html lang="en">

<head>
    <title>Appointment Arrangement</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php
        if (array_key_exists("name", $_POST)) {
            $year = $_POST['year'];
            $month = $_POST['month'];
            $day = $_POST['day'];
            $hour = $_POST['hour'];
            $minute = $_POST['minute'];
            $second = $_POST['second'];
            $name = $_POST['name'];
            $time = "{$hour}:{$minute}:{$second}";

            if ($hour > 12) {
                $hour_12 = $hour - 12;
                $tag = "PM";
            } else {
                $hour_12 = $hour;
                $tag = "AM";
            }
            $time_12 = "{$hour_12}:{$minute}:{$second} {$tag}";
        } else {
            $year = 0;
            $month = 0;
            $day = 0;
            $hour = 0;
            $minute = 0;
            $second = 0;
            $name = "";
            $time = "0:0:0";
            $time_12 = "0:0:0 AM";
        }
        ?>
        <h1>Date Time Processing</h1>
        <label>
            <span>Your Name: </span>
            <input type="text" name="name" placeholder="Enter your name" required value="<?php echo ("$name") ?>">
        </label>

        <br>
        <label>
            <span>Date:</span>
            <select required name="day">
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    if ($day == $i)
                        echo ("<option selected>$i</option>");
                    else
                        echo ("<option>$i</option>");
                }
                ?>
            </select>
            <select required name="month">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    if ($month == $i)
                        echo ("<option selected>$i</option>");
                    else
                        echo ("<option>$i</option>");
                }
                ?>
            </select>
            <select required name="year">
                <?php
                for ($i = 1600; $i <= 3000; $i++) {
                    if ($year == $i)
                        echo ("<option selected>$i</option>");
                    else
                        echo ("<option>$i</option>");
                }
                ?>
            </select>
        </label>
        <br>

        <label>
            <span>Time: </span>
            <select required name="hour">
                <?php
                for ($i = 0; $i <= 23; $i++) {
                    if ($hour == $i)
                        echo ("<option selected>$i</option>");
                    else
                        echo ("<option>$i</option>");
                }
                ?>
            </select>
            <select required name="minute">
                <?php
                for ($i = 0; $i <= 59; $i++) {
                    if ($minute == $i)
                        echo ("<option selected>$i</option>");
                    else
                        echo ("<option>$i</option>");
                }
                ?>
            </select>
            <select required name="second">
                <?php
                for ($i = 0; $i <= 59; $i++) {
                    if ($second == $i)
                        echo ("<option selected>$i</option>");
                    else
                        echo ("<option>$i</option>");
                }
                ?>
            </select>
        </label>
        <br>

        <div class="center">
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
        </div>
    </form>

    <?php
    if (array_key_exists("name", $_POST)) {
        $year = $_POST['year'];
        $month = $_POST['month'];
        $day = $_POST['day'];
        $hour = $_POST['hour'];
        $minute = $_POST['minute'];
        $second = $_POST['second'];
        $name = $_POST['name'];

        // check condition to show time in format
        if ($hour < 10 && $minute < 10 && $second < 10) {
            $time = "0{$hour}:0{$minute}:0{$second}";
        } else if ($hour > 10 && $minute > 10 && $second > 10) {
            $time = "{$hour}:{$minute}:{$second}";
        } else if ($hour < 10 && $minute > 10 && $second > 10) {
            $time = "0{$hour}:{$minute}:{$second}";
        } else if ($hour < 10 && $minute < 10 && $second > 10) {
            $time = "0{$hour}:0{$minute}:{$second}";
        } else if ($hour > 10 && $minute < 10 && $second < 10) {
            $time = "{$hour}:0{$minute}:0{$second}";
        } else if ($hour > 10 && $minute > 10 && $second < 10) {
            $time = "{$hour}:{$minute}:0{$second}";
        }

        if ($hour >= 11) {
            $hour_12 = $hour - 12;
            $tag = "PM";
        } else {
            $hour_12 = $hour;
            $tag = "AM";
        }

        // check condition to show time in format
        if ($hour_12 < 10 && $minute < 10 && $second < 10) {
            $time_12 = "0{$hour_12}:0{$minute}:0{$second} {$tag}";
        } else if ($hour_12 > 10 && $minute > 10 && $second > 10) {
            $time_12 = "{$hour_12}:{$minute}:{$second} {$tag}";
        } else if ($hour_12 < 10 && $minute > 10 && $second > 10) {
            $time_12 = "0{$hour_12}:{$minute}:{$second} {$tag}";
        } else if ($hour_12 < 10 && $minute < 10 && $second > 10) {
            $time_12 = "0{$hour_12}:0{$minute}:{$second} {$tag}";
        } else if ($hour_12 > 10 && $minute < 10 && $second < 10) {
            $time_12 = "{$hour_12}:0{$minute}:0{$second} {$tag}";
        } else if ($hour_12 > 10 && $minute > 10 && $second < 10) {
            $time_12 = "{$hour_12}:{$minute}:0{$second} {$tag}";
        }

        echo ("<br />");
        echo (" <h1>Hi $name </h1>");

        // If it is February
        if ($month == 2) {
            // check whether it is leap year (nam nhuan) or not
            if ($year % 4 == 0) {
                if ($year % 100 == 0 && $year % 400 != 0)
                    if ($day <= 28) {
                        echo ("<p>You have choose to have an appointment at $time, $day/$month/$year</p>");
                        echo ("<h3>More information:</h3>");
                        echo ("<p>In 12 hours, the time and date is $time_12, $day/$month/$year</p>");
                        echo ("<p>This month has 28 days!</p>");
                    } else {
                        echo ("This month just has 28 days! Let's choose another day.");
                    }
                else if ($day <= 29) {
                    echo ("<p>You have choose to have an appointment at $time, $day/$month/$year</p>");
                    echo ("<h3>More information:</h3>");
                    echo ("<p>In 12 hours, the time and date is $time_12, $day/$month/$year</p>");
                    echo ("<p>This month has 29 days!</p>");
                } else {
                    echo ("<p>This month just has 29 days! Let's choose another day.</p>");
                }
            } else if ($day <= 28) {
                echo ("<p>You have choose to have an appointment at $time, $day/$month/$year</p>");
                echo ("<h3>More information:</h3>");
                echo ("<p>In 12 hours, the time and date is $time_12, $day/$month/$year</p>");
                echo ("<p>This month has 28 days!</p>");
            } else {
                echo ("<p>This month just has 28 days! Let's choose another day.</p>");
            }
        } else if ($month == 4 || $month == 9 || $month == 6 || $month == 11) {
            if ($day <= 30) {
                echo ("<p>You have choose to have an appointment at $time, $day/$month/$year</p>");
                echo ("<h3>More information:</h3>");
                echo ("<p>In 12 hours, the time and date is $time_12, $day/$month/$year</p>");
                echo ("<p>This month has 30 days!</p>");
            } else {
                echo ("<p>This month just has 30 days! Let's choose another day.</p>");
            }
        } else {
            echo ("<p>You have choose to have an appointment at $time, $day/$month/$year</p>");
            echo ("<h3>More information:</h3>");
            echo ("<p>In 12 hours, the time and date is $time_12, $day/$month/$year</p>");
            echo ("<p>This month has 31 days!</p>");
        }
    }
    ?>
</body>

</html>