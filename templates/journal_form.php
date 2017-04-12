


<head>
<link href="/css/tumblr.css" rel="stylesheet"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/base/jquery-ui.css">
<script type="text/javascript">
$(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });
});
</script>
<style>
.ui-datepicker-calendar {
    display: none;
    }
</style>
</head>

<body>
    <div class="nav">
        <div class="container-fluid">
            <ul class="pull-left">
               <li><a href="index.php"> Home </a></li>
               <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"> Gmail </a></li>
               <li><a href="https://www.google.com/calendar/" target="_blank"> Calendar</a></li>

           </ul>
            <ul class="pull-right">
                 <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </div>

    <br/>

    <header class="superhead">
      <hgroup>
        <h1><a rel="up" href="journal.php">Journal</a></h1>
            <div class="container">
            <h5>
              <form class="form" action="journal_search_text.php", method = "post">
                    <input type = "text", placeholder = "search by text", name = "search_text"/>
                    <input type = "submit" name = "submit_search_journal" value = "Search"/>
              </form> 
              <i>or filter by month:</i>
              <form class="form" action="journal_search_date.php", method = "post">
                <input name="startDate" id="startDate" class="date-picker" placeholder = "search by date"/>
                <input type = "submit" name = "submit_search_journal" value = "Submit"/>
              </form>
            </h5>
            </div>
           

            
            
        
      </hgroup>
    </header>
    <br/>
    <br/>


<section id="posts">
    <?php foreach ($positions as $position): ?>
            <article class="quote">
                <blockquote> <?= $position["text"] ?> </blockquote>
                <footer> <time> <?= $position["timestamp"] ?> </time> </footer>              
            </article>
    <?php endforeach ?>
</section>



</body>
