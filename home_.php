<h1>Hello</h1>
<p>Hi! I'm Andriy Duyko, a senior at Stony Brook University majoring in Computer Science. This website is a portfolio of the programming work that I have done since coming to college. </p>
<div class="spacer"></div>
<h1>Recent Projects</h1>
<?php
  $projects=[
    [
      'name'=>'Leopard Strike',
      'thumb'=>'',
      'desc'=>'A chrome plugin project developed in 36 hours with two teammates at MHacks 2013. The plugin takes any website the user is on, and turns it into a multiplayer game with anybody else currently on the website, using elements of the website as obstacles in the game. Developed using Javascript with JQuery, Node.js, and Socket.io.',
      'links'=>[
        'Git'=>'https://www.github.com/vgaviria/Leopard_Strike',
      ],
    ],
    [  
      'name'=>'Mongasso',
      'thumb'=>'',
      'desc'=>'A service exchange website similar to LinkedIn and Craigslist, for which I developed the front and back end by heavily modifying and adding onto an existing Joomla 2.5 website. Developed using PHP, SQL, Javascript, jQuery, AJAX, HTML, and CSS. I worked with one other developer for one month, then was the only developer.',
      'links'=>[
        'View'=>'http://www.mongasso.com',
      ]
    ],
  ];
  foreach($projects as $project){
    $name = $project['name'];
    $thumb = $project['thumb'];
    $desc = $project['desc'];
    $links = $project['links'];
    $thumbSrc='/stuff/'.$name.'/images/'.$thumb; 
    $thumbStr='<img src="'.$thumbSrc.'"/>';
    if ($thumb=='') { $thumbStr = ''; } ?>
      <div class="project">
        <div class="thumb">
          <?php echo $thumbStr; ?>
        </div>
        <div class="desc">
          <div class="title">  
            <span class="name">
              <?php echo $name; ?>  
            </span>
            <span class="links">
              <?php foreach($links as $key=>$link) { 
                echo '<a href="'.$link.'" target="_blank">'.$key.'</a>';
              } ?>
            </span>
          </div> 
          <?php echo $desc; ?> 
        </div>
      </div>
<?php } ?>