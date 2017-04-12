<?php

    // configuration
    require("../includes/config.php"); 

    $id = $_SESSION["id"];
    
    
    
    
    // render homepage
    render("homepage_form.php", ["title" => "Index"]);

?>
