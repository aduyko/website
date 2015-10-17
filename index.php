<!DOCTYPE html>
<html>
	<head>
		<title>Andriy Duyko</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="/flat.css" />
		<?php
			header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
			header('Pragma: no-cache'); // HTTP 1.0.
			header('Expires: 0'); // Proxies.
			$view = str_replace('/', '', @$_GET['view']);
			if ($view=='') { $view = 'projects'; }
			$viewStr = '\''.$view.'\'';
			$validViews = ['projects','concepts','about'];
		?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script type="text/javascript" src="nav.js"></script>
		<script type="text/javascript">
			history.replaceState({'page':<?php echo $viewStr; ?>},document.title,<?php echo $viewStr; ?>);
		</script>
	</head>
	<body>
		<div id="header">
			<a href="/projects" name="projects">
				<img src="/me.png" id="propic" alt="A photo of me!" />
			</a>
			<div id="name">	
				<a href="/projects" name = "projects" class="<?php echo $view==='projects'?'selected':'link';?>">
					Andriy Duyko
				</a>
			</div>
			<div class="spacer"></div>
			<div id="nav">
				<ul>
					<li>
						<a href="/projects" name = "projects" class="<?php echo $view==='projects'?'selected':'link';?>">
							Projects
						</a>
					</li>
					<li>
						<a href="/concepts" name = "concepts" class="<?php echo $view==='concepts'?'selected':'link';?>">
							Concepts
						</a>
					</li>
					<li>
						<a href="/about" name = "about" class="<?php echo $view==='about'?'selected':'link';?>">
							About
						</a>
					</li>
					<li class="external">
						<a href="http://andydandydraws.imgur.com" name = "art" target="blank" class="link">
							Art
						</a>
					</li>
				</ul>
				<ul id="contact">
					<li>
						<a href="mailto:andriy@aduyko.com">andriy@aduyko.com</a>
					</li>
					<li>
						<a href="http://www.github.com/aduyko" class="external">github</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="divider"></div>
		<div id="content-wrapper">
			<div id="content">
				<?php 
					//find if view is valid
					if (in_array($view,$validViews)) {
						include_once($view.'_.php');
					} else {
						include_once('404.html'); 
					}
				?>
			</div>
		</div>
		<div id="storage" class="hidden">
			<div id="content_projects"></div>
			<div id="content_concepts"></div>
			<div id="content_about"></div>
		</div>
	</body>
</html>