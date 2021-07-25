<?php 
	// No direct access.
	defined( '_JEXEC' ) or die( 'Restricted access' );
	
	/** @var JDocumentHtml $this */
	JLoader::import('joomla.filesystem.file');
	
	// Get params
	$color          = $this->params->get('templatecolor');
	$logo           = $this->params->get('logo');
	$navposition    = $this->params->get('navposition');
	$headerImage    = $this->params->get('headerImage');
	$config         = JFactory::getConfig();
	$bootstrap      = explode(',', $this->params->get('bootstrap'));
	$option         = JFactory::getApplication()->input->getCmd('option', '');
	
	// Output as HTML5
	$this->setHtml5(true);
	
	if (in_array($option, $bootstrap))
	{
		// Load optional rtl Bootstrap css and Bootstrap bugfixes
		JHtml::_('bootstrap.loadCss', true, $this->direction);
	}
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes">
		<title>KP_KP_MS</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/menu.css" type="text/css" />
		
		<style>
			#logo {
				text-align: center;	
			}	
			
			header {
				text-transform: uppercase;
			}
			
			hr{
				background-color: #EBEBEB;
				height: 1px;
				color: #EBEBEB;
				border: 0px;
			}
			
			article {
				font-family: Calibri;
				text-align: center;
				width: 75%;
				margin-left: auto;
				margin-right: auto;
			}	
			
			aside {
				text-align: center;	
				font-family: Calibri;
			}	
			
			footer {
				text-align: center;	
				font-family: Calibri;
			}
			
			article div .page-header h1, article div .page-header h2{
				display: table;
			    white-space: nowrap;
			}
			
			article div .page-header h2:before, article div .page-header h2:after,
			article div .page-header h1:before, article div .page-header h1:after {
			      border-top: 1px solid #ebebeb;
				  content:" ";
				  margin: 0 auto;
			      display: table-cell;
			      position: relative;
			      top: 15px; 
				  bottom: 0;
				  width: 50%;
				  z-index: -2;
			}
			
			article div .page-header h1:before,
			article div .page-header h2:before {
				right: 15px;
			}
			
			article div .page-header h1:after,
			article div .page-header h2:after {
				left: 15px; 
			}
			
		</style>
	</head>
	<body>
		<header>
			<!-- Tu umieszczamy zawartość nagłówka strony -->
			<div class="logoheader">
				<h1 id="logo">
						<?php if ($logo) : ?>
							<img src="<?php echo $this->baseurl; ?>/<?php echo htmlspecialchars($logo, ENT_QUOTES); ?>"  alt="<?php echo htmlspecialchars($this->params->get('sitetitle')); ?>" />
						<?php endif;?>
						<?php if (!$logo AND $this->params->get('sitetitle')) : ?>
							<?php echo htmlspecialchars($this->params->get('sitetitle')); ?>
						<?php elseif (!$logo AND $config->get('sitename')) : ?>
							<?php echo htmlspecialchars($config->get('sitename')); ?>
						<?php endif; ?>
						<span class="header1">
						<?php echo htmlspecialchars($this->params->get('sitedescription')); ?>
						</span></h1>
			</div>
			<nav>
				<jdoc:include type="modules" name="menu" />
			</nav>
		</header>
		<hr>
		<article>
			<div id="article_header">
				<jdoc:include type="component" />
			</div>
			<div id="footer">
			<!--	Tu umieszczamy zawartość stopki artykułu	-->
			</div>
		</article>
		<aside>
			<!--	Tu umieszczamy elementy poboczne (np. reklamy, zajawki innych artykułów)	-->
		</aside>
		<footer>
			<!--	Tu umieszczamy zawartość stopki strony	-->
		</footer>
	</body>
</html>