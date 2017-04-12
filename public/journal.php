<?php


    // configuration
    require("../includes/config.php"); 
    
    $id = $_SESSION["id"];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if the user didn't put any text in
        if (empty($_POST["entry"]))
        {
            apologize("You can't submit a blank entry");
        } 
        else if ($_POST['action'] == 'Search')
        {
            //redirect to google
            redirect("https://google.com/search?q=".$_POST['entry']);
        }
        else 
        {
            $previous_entries = query("SELECT * FROM entries WHERE id = ? AND text = ?", $id, $_POST["entry"]);
            
            // if this entry is already entered, don't enter it again
            if (!empty($previous_entries))
            {
                $positions = [];

                $entries = query("SELECT * FROM entries WHERE id = ? ORDER BY timestamp DESC", $id);

                foreach ($entries as $entry)
                {
                    $positions[] = [
                        "id" => $entry["id"],
                        "timestamp" => $entry["timestamp"],
                        "text" => $entry["text"]
                                    ];
                }
            
                render("journal_form.php", ["positions" => $positions, "title" => "Journal"]);   
            }
            
            // this entry hasn't already been entered--enter it
            else
            {
                $update_entries = query("INSERT INTO entries (id, timestamp, text, year, month) VALUES(?, NOW(), ?, ?, ?)", $id, $_POST["entry"], date("Y"), date('F', date("m")));
                
                $positions = [];

                $entries = query("SELECT * FROM entries WHERE id = ? ORDER BY timestamp DESC", $id);

                foreach ($entries as $entry)
                {
                    $positions[] = [
                        "id" => $entry["id"],
                        "timestamp" => $entry["timestamp"],
                        "text" => $entry["text"]
                                    ];
                }
                
                render("journal_form.php", ["positions" => $positions, "title" => "Journal"]);
            }
        } 
    }   
    // user isn't posting but just linking back to journal page
    else if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $positions = [];

        $entries = query("SELECT * FROM entries WHERE id = ? ORDER BY timestamp DESC", $id);

        foreach ($entries as $entry)
        {
            $positions[] = [
                "id" => $entry["id"],
                "timestamp" => $entry["timestamp"],
                "text" => $entry["text"]
                            ];
        }
        
        render("journal_form.php", ["positions" => $positions, "title" => "Journal"]);
    } 
?>
