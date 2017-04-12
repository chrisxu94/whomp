
<head>
<link href="/css/tumblr.css" rel="stylesheet"/>
</head>

<body>
    <div class="nav">
        <div class="container-fluid">
            <ul class="pull-left">
               <li><a href="index.php"> Home </a></li>
               <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"> Gmail </a></li>
               <li><a href="https://www.google.com/calendar/" target="_blank"> Calendar </a></li>
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
          <h2> search results </h2>
        
      </hgroup>
    </header>
    <br/>
    <br/>


<?php if (empty($positions)): ?>
<section id="posts">
    <article class="quote">
        <blockquote>No matches found, try searching with different key words or a different date. </blockquote>
    </article>
</section>
<?php endif ?>

<section id="posts">
    <?php foreach ($positions as $position): ?>
            <article class="quote">
                <blockquote> <?= $position["text"] ?> </blockquote>
                <footer> <time> <?= $position["timestamp"] ?> </time> </footer>              
            </article>
    <?php endforeach ?>
</section>



</body>
