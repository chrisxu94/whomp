<?php


    // configuration
    require("../includes/config.php"); 
    
    $id = $_SESSION["id"];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST['submit_search_journal'])
        {
            // if the user entered a date
            if ($_POST['startDate'])
            {
                $month = explode(" ", $_POST['startDate'])[0];
                $year = explode(" ", $_POST['startDate'])[1];

                $positions = [];

                $entries = query("SELECT * FROM entries WHERE id = ? AND month = ? and year = ? ORDER BY timestamp DESC", $id, $month, $year);
            }
            // if the user didn't enter a date
            else
            {
                $positions = [];

                $entries = query("SELECT * FROM entries WHERE id = ? ORDER BY timestamp DESC", $id);
            }

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
