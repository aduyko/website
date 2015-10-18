<?php
	$view = 'projects';
	if (!empty($_GET['view'])) {
		$view = str_replace('/', '', $_GET['view']);
	}
	$valid_views = ['projects','concepts','about'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Andriy Duyko</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="/flat.css"/>
		<script src="/JQuery/jquery-1.11.3.min.js"></script>
		<script src="/nav.js"></script>
		<script>
			var view_path = "<?= $view ?>";
			history.replaceState(
				{'page':view_path},
				document.title,
				view_path
			);
		</script>
	</head>
	<body>
		<div id="body-wrapper">
			<div id="header">
				<a href="/projects" name="projects">
					<img id="propic" src="/me.png" alt="A photo of me!" />
				</a>
				<div id="name" class="heading">
					<a href="/projects" name = "projects" class="<?= $view==='projects'?'selected':'link' ?>">
						Andriy Duyko
					</a>
				</div>
				<div class="spacer"></div>
				<div id="nav">
					<ul>
						<li>
							<a href="/projects" name = "projects" class="<?= $view==='projects'?'selected':'link' ?>">
								Work
							</a>
						</li>
						<li>
							<a href="/concepts" name = "concepts" class="<?= $view==='concepts'?'selected':'link' ?>">
								Projects
							</a>
						</li>
						<li>
							<a href="/about" name = "about" class="<?= $view==='about'?'selected':'link' ?>">
								About
							</a>
						</li>
					</ul>
					<ul id="contact">
						<li>
							<a href="mailto:aduyko@gmail.com">aduyko@gmail.com</a>
						</li>
						<li>
							<a href="http://www.github.com/aduyko" class="external" target="_blank">github</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="divider"></div>
			<div id="content-wrapper">
				<div id="content">
					<?php
						//find if view is valid
						if (in_array($view,$valid_views)) {
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
		</div>
	</body>
</html>
