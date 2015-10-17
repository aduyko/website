<h1>Projects</h1>
<span>Personal projects and concepts which are mostly unfinished, but which I think demonstrate something cool.</span><br/><br/>
<?php
  $projects=[
    [
      'name'=>'Asteroids',
      'thumb'=>'',
      'desc'=>'An asteroids-like game developed in HTML5 canvas. I used it to teach a tutorial on how it was possible to rapidly develop a game prototype using the canvas object and javascript.',
      'links'=>[
        'View'=>'/sbgd',
      ]
    ],
    [
      'name'=>'Pixel Manipulator',
      'thumb'=>'',
      'desc'=>'A tool for manipulating the pixels of an image to add noise.',
      'links'=>[
        'View'=>'/stuff/manip/new',
      ]
    ],
    [
      'name'=>'Sound Wheel',
      'thumb'=>'',
      'desc'=>'An app that allows you to create soundscapes by placing various nodes and notes that spin around them.',
      'links'=>[
        'View'=>'/stuff/soundwheel/bigCanvas.html',
      ]
    ],
    [
      'name'=>'Fruit Wheel',
      'thumb'=>'',
      'desc'=>'A game that combines HTML5 canvas with other DOM elements. I\'m reworking it, progress can be seen under the "new" link.',
      'links'=>[
        'New'=>'/stuff/bananawheel/new',
        'Old'=>'/stuff/bananawheel',
      ]
    ],
    [
      'name'=>'RPG Battler',
      'thumb'=>'',
      'desc'=>'A game where you select a team of heroes to battle against an opposing team of enemies. This includes my own sprite art for the characters, but has very limited gameplay.',
      'links'=>[
        'View'=>'/stuff/RPGFight',
      ]
    ],
    [
      'name'=>'Simon Says',
      'thumb'=>'',
      'desc'=>'A simon-says like game where the king gives you orders of items that he wants, and
               you have to bring them to him.',
      'links'=>[
        'View'=>'/stuff/SimonSays',
      ]
    ],
    [
      'name'=>'Asteroids Puzzle',
      'thumb'=>'',
      'desc'=>'My very first foray into HTML5 canvas development with javascript. This game is a combination of a block-matching game and a bullet dodging game, where the color of the bullet that hits you drops down in the puzzle grid on the left. When you connect three or more of the same color on the left, they disappear and you get points.',
      'links'=>[
        'View'=>'/stuff/asteroids',
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
                echo '<a href="'.$link.'" target="_blank">'.$key.'&emsp;</a>';
              } ?>
            </span>
          </div>
          <?php echo $desc; ?>
        </div>
      </div>
<?php } ?>