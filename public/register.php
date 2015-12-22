<?php
    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST["username"] == "")
        {
            apologize("You must provide your username.");
        }

        else if ($_POST["password"] == "")
        {
            apologize("You must provide your password");
        }

        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Password and Confirmation do not match!");
        }

        else {

            // register the user to the database
            if (query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"])) === false)
            {
                apologize("Sorry, but could not register!<br>Username might be taken?");
            }
            
            else
            {
                // get his ID - essentially, we select the last entry
                $rows = query("SELECT LAST_INSERT_ID() AS id");
                $id = $rows[0]["id"];

                echo $id;

                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $id;

                // redirect to portfolio
                redirect("/");
            }
        }
    }
?>
