<h1>Projects</h1>
<?php
	$projects=[
		[
			'name'=>'Hackmaster 3000',
			'thumb'=>'',
			'desc'=>'A tycoon type game which placed 3rd at Google\'s 24 Hours Of Good hackathon. It is a game about growing an empire based around stealing people\'s information from public computers, inteded to raise awareness of the dangers of entering personal information into public computers. Developed using Javascript with JQuery and createJS on a team of four.',
			'links'=>[
				'Play'=>'/stuff/hackmaster3000',
				'Git'=>'https://www.github.com/mfiels/arm-chip-skateboard',	
			],
		],
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
			'desc'=>'Note: No longer online.<br/> A service exchange website similar to LinkedIn and Craigslist, for which I developed the front and back end by heavily modifying and adding onto an existing Joomla 2.5 website. Developed using PHP, SQL, Javascript, jQuery, AJAX, HTML, and CSS. I worked with one other developer for one month, then was the only developer.',
			'links'=>[
				'View'=>'http://www.mongasso.com',
			]
		],
		[ 
			'name'=>'Force of Reaction',
			'thumb'=>'',
			'desc'=>'A platforming game developed in C++ with two teammates for CSE380: Game Development.',
			'links'=>[
				'Git'=>'https://www.github.com/CSE380Skulls/ForceOfReaction',
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