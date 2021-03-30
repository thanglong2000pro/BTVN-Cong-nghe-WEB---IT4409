<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <style type="text/css">
        h3,
        p {
            margin: 10px;
            text-align: center;
            font: Arial, Helvetica, sans-serif;
            color: #2A88AD;
        }

        /* form style */
        .form-style {
            width: 450px;
            padding: 30px;
            margin: 40px auto;
            background: #FFF;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            /* x-axis y-axis blur color */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
        }

        .form-style .inner-wrap {
            padding: 30px;
            background: #F8F8F8;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .form-style h1 {
            background: #2A88AD;
            padding: 20px 30px 15px 30px;
            margin: -30px -30px 30px -30px;
            border-radius: 10px 10px 0 0;
            -webkit-border-radius: 10px 10px 0 0;
            -moz-border-radius: 10px 10px 0 0;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px 'Bitter', serif;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            border: 1px solid #257C9E;
        }

        .form-style h1>span {
            display: block;
            margin-top: 2px;
            font: 13px Arial, Helvetica, sans-serif;
        }

        .form-style label {
            display: block;
            font: 13px Arial, Helvetica, sans-serif;
            color: #888;
            margin-bottom: 15px;
        }

        .form-style input[type="text"],
        .form-style input[type="email"],
        .form-style input[type="number"],
        .form-style textarea,
        .form-style select {
            display: block;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border: 2px solid #fff;
            box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
        }

        .form-style .section {
            font: normal 20px 'Bitter', serif;
            color: #2A88AD;
            margin-bottom: 5px;
        }

        .form-style .section span {
            background: #2A88AD;
            padding: 5px 10px 5px 10px;
            position: absolute;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border: 4px solid #fff;
            font-size: 14px;
            margin-left: -45px;
            color: #fff;
            margin-top: -3px;
        }

        .form-style input[type="button"],
        .form-style input[type="submit"],
        .form-style input[type="reset"] {
            background: #2A88AD;
            padding: 8px 20px 8px 20px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px 'Bitter', serif;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            border: 1px solid #257C9E;
            font-size: 15px;
        }

        .form-style input[type="button"]:hover,
        .form-style input[type="submit"]:hover,
        .form-style input[type="reset"]:hover {
            background: #2A6881;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
        }

        .inner-wrap input[type="checkbox"] {
            margin: 5px;
        }


        @media only screen and (max-width: 1200px) {
            .result-form {
                font-size: 18px;
                margin-right: auto;
                margin-left: auto;
                width: 50%;
                font-style: italic;
                font: Arial, Helvetica, sans-serif;
            }
        }

        @media only screen and (min-width: 1200px) {
            .result-form {
                font-size: 18px;
                margin-right: auto;
                margin-left: auto;
                width: 20%;
                font-style: italic;
                font: Arial, Helvetica, sans-serif;
            }
        }
    </style>
</head>

<body>
    <?php
    // function to print the form
    function print_form($name, $email, $university, $class, $phone_number)
    {
    ?>

        <div class="form-style">
            <h1>Introduce about yourself!<span>Let's start!</span></h1>

            <!-- form require information -->
            <form action="week2.php" method="POST">
                <div class="section"><span>1</span>First Name & General Information</div>
                <div class="inner-wrap">
                    <label>Your Full Name (*): <input type="text" name="name" value="<?php echo $name ?>" /></label>
                    <label>University: <textarea name="university" value="<?php echo $university ?>"></textarea></label>
                    <label>Class: <input type="text" name="class" value="<?php echo $class ?>" /></label>
                </div>

                <div class="section"><span>2</span>Email & Phone</div>
                <div class="inner-wrap">
                    <label>Email Address (*):<input type="email" name="email" value="<?php echo $email ?>" /></label>
                    <label>Phone Number: <input type="text" name="phone_number" value="<?php echo $phone_number ?>" /></label>
                </div>

                <div class="section"><span>3</span>Hobbies</div>
                <div class="inner-wrap">
                    <label>Hobbies: <br />
                        <input type="checkbox" name="hobbies[]" value="Play games" />Play games<br />
                        <input type="checkbox" name="hobbies[]" value="Reading books" />Reading books<br />
                        <input type="checkbox" name="hobbies[]" value="Play musical instrument" />Play musical instrument<br />
                        <input type="checkbox" name="hobbies[]" value="Listen to music" />Listen to music<br />
                        <input type="checkbox" name="hobbies[]" value="Play sports" />Play sports
                    </label>
                </div>
                <div class="button-section">
                    <input type="submit" name="submit" value="Submit" />
                    <input type="reset" name="reset" value="Reset" />
                </div>
            </form>
        </div>

    <?php
    }

    // validate if form fields with * are filled
    function check_form($name, $email, $university, $class, $hobbies, $phone_number)
    {
        if (!$name || !$email) {
            echo "<h3>You are missing some required fields!</h3>";
            print_form($name, $email, $university, $class, $phone_number);
        } else {
            confirm_form($name, $email, $university, $class, $hobbies, $phone_number);
        }
    }

    // print out the result form
    function confirm_form($name, $email, $university, $class, $hobbies, $phone_number)
    {
    ?>
        <h3>Thanks! Below is the information you have sent to us.</h3>
        <h3>Your personal information:</h3>
        <div class="result-form">
            <?php
            echo "<b>Name:</b> $name <br/>";
            echo "<b>Email:</b> $email <br/>";
            if (empty($university)) {
                echo "<b>University:</b> You didn't fill this field.";
                echo "<br/>";
            } else {
                echo "<b>University:</b> $university <br/>";
            }
            if (empty($class)) {
                echo "<b>Class:</b> You didn't fill this field.";
                echo "<br/>";
            } else {
                echo "<b>Class:</b> $class <br/>";
            }
            if (empty($hobbies)) {
                echo "<b>Hobbies:</b> You didn't selected any hobbies.";
                echo "<br/>";
            } else {
                $n = count($hobbies);
                echo "<b>Hobbies:</b> <br/>";
                for ($i = 0; $i < $n; $i++) {
                    echo $i + 1;
                    echo ". ";
                    echo $hobbies[$i];
                    echo "<br/>";
                }
            }

            if (empty($phone_number)) {
                echo "<b>Phone number:</b> You didn't fill this field.";
                echo "<br/>";
            } else {
                echo "<b>Phone number:</b> $phone_number <br/>";
            }
            ?>
        </div>
    <?php
    }

    // check if form is submitted or not
    if (!isset($_POST["submit"])) {
    ?>
        <h3>Please enter your information.</h3>
        <p>Fields with a "<b>*</b>" are required.</p>
    <?php

        print_form("", "", "", "", "", "");
    } else {
        check_form($_POST["name"], $_POST["email"], $_POST["university"], $_POST["class"], $_POST['hobbies'], $_POST["phone_number"]);
    }
    ?>
</body>

</html>