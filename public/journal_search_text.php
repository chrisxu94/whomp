<?php


    // configuration
    require("../includes/config.php"); 
    
    $id = $_SESSION["id"];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if the user entered text
        if ($_POST['submit_search_journal'])
        {
            $positions = [];

            $entries = query("SELECT * FROM entries WHERE id = ? AND text LIKE ? ORDER BY timestamp DESC", $id, "%".$_POST['search_text']."%");

            foreach ($entries as $entry)
            {
                $positions[] = [
                    "id" => $entry["id"],
                    "timestamp" => $entry["timestamp"],
                    "text" => $entry["text"],
                    "year" => $entry["year"],
                    "month" => $entry["month"]
                                ];
            }
            
            render("journal_form_partial.php", ["positions" => $positions, "title" => "Journal"]);
        }
    }
?>
