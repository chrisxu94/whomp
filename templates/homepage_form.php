

<head>
<link href="/css/tumblr.css" rel="stylesheet"/>


<?php
  $bg = array('2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','14.jpg','15.jpg','16.jpg','18.jpg','20.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg','27.jpg','28.jpg','29.jpg','30.jpg','31.jpg','33.jpg','34.jpg','35.jpg','36.jpg','37.jpg','38.jpg','39.jpg','40.jpg'); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>



<style type="text/css">

.jumbotron
{
    background-size: cover;
    background-repeat: no-repeat;
    height: 650px;
    background-image: url(/img/<?php echo $selectedBg; ?>);
}


</style>


</head>
<body>
    
    <div class="container-fluid">
    <div class="nav">
        
            <ul class="pull-left">
               <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"> Gmail </a></li>
               <li><a href="https://www.google.com/calendar/" target="_blank"> Calendar </a></li>
               <li><a href="journal.php"> Journal </a></li>
           </ul>
   
           
            <ul class="pull-right">
                 <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </div>
    
    
        <div class="jumbotron">
        <div class="container">
       <br/><br/><br/>
        <div id="journal_content">
            <h4>                       
                <form class="form" action="journal.php", method = "post">
                    <textarea placeholder = "Your thoughts" name = "entry" type= "text" maxlength="1000"/></textarea>
                    <br/>
                    <br/>
                    <input type = "submit" name="action" value= "Journal"/>
                    <input type = "submit" name="action" value = "Search"/>
                </form>
            <br/>
            </h4>
            </div>
        </div>
    </div>
        

</body>






