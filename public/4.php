<?php
  $fooledTime = 1522598400;
  $time = time();
  $fool = isset($_GET['fool']) ? $_GET['fool'] == 'true' : $fooledTime > $time;
?>
<!doctype html>
<!--[if lt IE 7]>      <html prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html prefix="og: http://ogp.me/ns#" class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html prefix="og: http://ogp.me/ns#" class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html prefix="og: http://ogp.me/ns#" class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php
          if ($fool) {
            // If this is before the switch time, force a refresh once that time is reached, plus some buffer time
            echo '<meta http-equiv="refresh" content="' . (($fooledTime - $time) + 30) . '">';
          }
        ?>
        <title>EnderIO - <?= $fool ? '4.0' : '5.0'?></title>
        <meta name="description" content="EnderIO <?= $fool ? '4.0' : '5.0'?>">
        <meta name="theme-color" content="#224230">

        <meta property="og:title" content="EnderIO - <?= $fool ? '4.0' : '5.0'?>">
        <meta property="og:description" content="The Future.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.enderio.com/4">
        <meta property="og:image" content="http://www.enderio.com/images/card.png">
        <meta property="og:image:width" content="500">
        <meta property="og:image:height" content="92">
        <meta property="og:site_name" content="EnderIO">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="EnderIO - <?= $fool ? '4.0' : '5.0'?>">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/4.css">

        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/code-new-roman" type="text/css"/>
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/minecraftia" type="text/css"/>

        <script src="js/vendor/jquery-3.3.1.min.js"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
      <video playsinline autoplay muted loop id="bg-video">
        <source src="images/particles.mp4" type="video/mp4">
        <source src="images/particles.webm" type="video/webm">
      </video>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="main-container">
            <div class="main wrapper clearfix <?= $fool ? '' : 'tallmain'?>">
                <div class="imgcontainer">
                    <img class="bg" src="images/logo-notext.png"></img><!--
                 --><img class="fg" src="images/logo-text-glow.png"></img>
                </div>
                <h1><?= $fool ? '4.0' : '5.0' ?></h1>
                <p>Minecraft 1.12.2 / 01.04.18</p><?php
                if (!$fool) {?>
                  <ul id="buttons">
                    <li><button onclick="location.href='/'" type="button">Main Site</button></li>
                    <li><button onclick="location.href='https://minecraft.curseforge.com/projects/ender-io'" type="button">CurseForge</button></li>
                    <li><button onclick="location.href='?fool=true'" type="button">???</button></li>
                  </ul><?php
                }?>
                <ul class="changelog">
                  <?php
                    if ($fool) { ?>
                      <li>Modular diposition</li>
                      <li>Really grindy with many more machines</li>
                      <li>Energy be gone! Now uses psionic powers</li>
                      <li>Capacitors are no longer used for machines</li>
                      <li>Capacitors now explode randomly</li>
                      <li>Machines now always run away from mobs</li>
                      <li>More printed books</li>
                      <li>Impulse buying</li>
                      <li>Wired subscription not included</li>
                      <li>Enhanced constitution generated</li>
                      <li>Now only in-world crafting</li>
                      <li>Now has a larva germinator</li>
                      <li>Improved Conduit GUI - now 2 pixels wider!</li>
                      <li>Vacuum Chest now uses air filters</li>
                      <li>Weird charger - charges and discharges items randomly</li>
                      <li>Impulsive hopper -  Decides for itself, when it works and when not</li>
                      <li>Big Item Filler - makes all your items 10% bigger</li>
                      <li>Jei Ghost Handling - now mezz will take care of all your haunting issues</li>
                      <li>Proper iron API - Expect 3rd-party iron ingots soon</li>
                      <li>Proper dark steel API - Expect 3rd-party dark steel ingots soon</li>
                      <li>Proper fertilizer API - Expect 3rd-party sh*t soon</li>
                      <li>More decorated parties</li>
                      <li>Use infinite frogs for early-game frogman hunting</li>
                      <li>Dark steal door (steals even your pants)</li>
                      <li>More foot bandages</li>
                      <li>Now with ads</li>
                      <li>Inventory support dropped, fully item-less now</li>
                      <li>Entry-level exams</li>
                      <li>Organic eyes</li>
                      <li>Many more tears</li>
                      <li>Much improved bowling experience with many more balls</li><?php
                     } else { ?>
                      <li>Modular distribution</li>
                      <li>Simpler early-game with "simple" machines</li>
                      <li>RF be gone! Now uses µI</li>
                      <li>Capacitors are no longer used to craft machines</li>
                      <li>More machines take capacitors</li>
                      <li>Machines now always need a capacitor to run</li>
                      <li>More paintable blocks</li>
                      <li>Impulse Hopper now included</li>
                      <li>Wired charger</li>
                      <li>Enhanced combustion generator</li>
                      <li>Now with in-world crafting</li>
                      <li>Now has a lava generator</li>
                      <li>Improved Conduit GUI - now you can edit Input and Output at the same time!</li>
                      <li>Big Item Filter - now you can filter even more items!</li>
                      <li>Jei Filter Support - now can drag and drop items into filters</li>
                      <li>Vacuum Chest now supports ALL filters</li>
                      <li>Proper conduit API - Expect 3rd-party conduits soon</li>
                      <li>Proper dark steel API - Expect 3rd-party upgrades soon</li>
                      <li>Proper capacitor API - Expect 3rd-party capacitors soon</li>
                      <li>Proper farming API - Expect 3rd-party farming support soon</li>
                      <li>Proper fertilizer API - Expect 3rd-party fertilizers soon</li>
                      <li>More decoration blocks</li>
                      <li>Use infinity fog for early-game enderman hunting</li>
                      <li>Dark steel door (Paintable)</li>
                      <li>More loot capacitors</li>
                      <li>Now with additional nuggets</li>
                      <li>Full Tinkers' Construct integration</li>
                      <li>IInventory support dropped, fully IItemHandler now</li>
                      <li>Entry-level solar panel</li>
                      <li>Organic dyes</li>
                      <li>Many more gears</li>
                      <li>Many more Grinding Balls</li><?php
                    }?>
                </ul>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <footer><?php
          if ($fool) {
            echo '<span class="tagline">A mod by many crazy people</span>';
          } else {?>
            <span class="tagline">A mod by CrazyPants and many other people</span>
            <a href="https://github.com/SleepyTrousers/EnderIO.git">GitHub</a><?php
          }?>
        </footer>
        <script>
          var index = -1;
          var order = [];
          var list;
          function updateChangelog() {
            if (index >= 0) {
              list.eq(order[index]).fadeOut(function() {
                list.eq(order[(index + 1) % order.length]).fadeIn();
              });
            } else {
              list.eq(order[0]).fadeIn();
            }
            index = (index + 1) % order.length;
          }
          function shuffle(a) {
            var j, x, i;
            for (i = a.length - 1; i > 0; i--) {
              j = Math.floor(Math.random() * (i + 1));
              x = a[i];
              a[i] = a[j];
              a[j] = x;
            }
          }
          $(document).ready(function() {
            list =  $( ".main .changelog li" );
            for (var i = 0; i < list.length; i++) {
              order[i] = i;
            }
            shuffle(order);

            window.setTimeout(function() {
              window.setInterval(updateChangelog, 2000);
            }, 8000);
          });
        </script>
    </body>
</html>
