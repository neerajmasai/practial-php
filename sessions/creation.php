<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: 20%;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
    </style>
</head>

<body>
    <h1>Sessions - Creation</h1>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

        <input type="text" name="name" id="name" value="<?php

                                                        //set session data if session already exists
                                                        if (isset($_SESSION['name'])) {
                                                            echo $_SESSION['name'];
                                                        }


                                                        ?>">
        <input type="email" name="email" id="email" value="<?php

                                                            //set session data if session already exists
                                                            if (isset($_SESSION['email'])) {
                                                                echo $_SESSION['email'];
                                                            }

                                                            ?>">

        <select name="department" id="department">
            <option value="Engineering" <?php

                                        //set session data if session already exists
                                        if (isset($_SESSION['department']) && $_SESSION['department'] === 'Engineering') {
                                            echo "selected";
                                        }

                                        ?>>Engineering</option>
            <option value="Production" <?php

                                        //set session data if session already exists
                                        if (isset($_SESSION['department']) && $_SESSION['department'] === 'Production') {
                                            echo "selected";
                                        }


                                        ?>>Production</option>
            <option value="Accounts" <?php

                                        //set session data if session already exists
                                        if (isset($_SESSION['department']) && $_SESSION['department'] === 'Accounts') {
                                            echo "selected";
                                        }

                                        ?>>Accounts</option>
            <option value="HR" <?php

                                //set session data if session already exists
                                if (isset($_SESSION['department']) && $_SESSION['department'] === 'HR') {
                                    echo "selected";
                                }

                                ?>>HR</option>
            <option value="Public Relations" <?php

                                                //set session data if session already exists
                                                if (isset($_SESSION['department']) && $_SESSION['department'] === 'Public Relations') {
                                                    echo "selected";
                                                }


                                                ?>>Public Relations</option>
        </select>

        <div>

            <input type="radio" id="intern" name="contract" value="Intern" <?php

                                                                            //set session data if session already exists
                                                                            if (isset($_SESSION['contract']) && $_SESSION['contract'] === 'Intern') {
                                                                                echo "checked";
                                                                            }


                                                                            ?>>
            <label for="intern">Intern</label><br>
            <input type="radio" id="fulltime" name="contract" value="Full-Time" <?php

                                                                                //set session data if session already exists
                                                                                if (isset($_SESSION['contract']) && $_SESSION['contract'] === 'Full-Time') {
                                                                                    echo "checked";
                                                                                }


                                                                                ?>>
            <label for="fulltime">Full-time</label><br>
            <input type="radio" id="parttime" name="contract" value="Part-Time" <?php

                                                                                //set session data if session already exists
                                                                                if (isset($_SESSION['contract']) && $_SESSION['contract'] === 'Part-Time') {
                                                                                    echo "checked";
                                                                                }


                                                                                ?>>
            <label for="parttime">Part-Time</label>

        </div>

        <div>
            <input type="checkbox" id="Communication" name="skills[]" value="Communication" <?php

                                                                                            //set session data if session already exists
                                                                                            if (isset($_SESSION['skills']) && in_array("Communication", $_SESSION['skills'])) {
                                                                                                echo "checked";
                                                                                            }


                                                                                            ?>>
            <label for="Communication"> Communication </label><br>
            <input type="checkbox" id="Leadership" name="skills[]" value="Leadership" <?php

                                                                                        //set session data if session already exists
                                                                                        if (isset($_SESSION['skills']) && in_array("Leadership", $_SESSION['skills'])) {
                                                                                            echo "checked";
                                                                                        }


                                                                                        ?>>
            <label for="Leadership"> Leadership</label><br>
            <input type="checkbox" id="Interpersonal Skills" name="skills[]" value="Interpersonal Skills" <?php

                                                                                                            //set session data if session already exists
                                                                                                            if (isset($_SESSION['skills']) && in_array("Interpersonal Skills", $_SESSION['skills'])) {
                                                                                                                echo "checked";
                                                                                                            }


                                                                                                            ?>>
            <label for="Interpersonal Skills"> Interpersonal Skills</label><br>
            <input type="checkbox" id="Technical Skills" name="skills[]" value="Technical Skills" <?php

                                                                                                    //set session data if session already exists
                                                                                                    if (isset($_SESSION['skills']) && in_array("Technical Skills", $_SESSION['skills'])) {
                                                                                                        echo "checked";
                                                                                                    }


                                                                                                    ?>>
            <label for="Technical Skills"> Technical Skills</label><br>
        </div>
        <input type="submit" value="Submit">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_SESSION['exists'])) {
            echo "<h3> Previous values stored in session were:</h3>";
            var_dump($_SESSION);
        }

        //create or overwrite session
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $contract = $_POST['contract'];

        //retreive data from skills checkboxes
        if (isset($_POST['skills']) && !empty($_POST['skills'])) {
            $skills = $_POST['skills'];
        }

        $_SESSION['exists'] = TRUE;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['department'] = $department;
        $_SESSION['contract'] = $contract;
        $_SESSION['skills'] = $skills;

        echo "<h3>Session Created</h3>";
    }

    ?>
</body>

</html>