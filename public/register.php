<?php

    // confirmation
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
        //else render form
        render("register_form.php", ["title" => "Register"]);
    }
    
    // else if user reached page via POST (as via submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("You must provide matching passwords");
        }
        else
        {
            $query_return = query("INSERT INTO users (username, hash) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
        }
        
        if ($query_return === false)
        {
            apologize("You're account couldn't be added. Try again.");
        }
        else
        {
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            // remember that user's now logged in by storing user's ID in session
            $_SESSION["id"] = $id;

            // redirect to homepage
            redirect("/");
        }
        
    }
    
?>
