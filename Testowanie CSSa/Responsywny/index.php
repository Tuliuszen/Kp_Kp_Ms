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
	$option         = JFactory::getApplication()->input->getCmd('option', '');
	
	// Output as HTML5
	$this->setHtml5(true);
	
	// Add stylesheets
	JHtml::_('stylesheet', 'templates/system/css/system.css', array('version' => 'auto'));
	JHtml::_('stylesheet', 'templates/system/css/general.css', array('version' => 'auto'));
	JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));
	
	// Add template scripts
	JHtml::_('script', 'templates/' . $this->template . '/jquery/span_inner_header.js', array('version' => 'auto'));
	JHtml::_('script', 'templates/' . $this->template . '/jquery/wrapper.js', array('version' => 'auto'));
	JHtml::_('script', 'templates/' . $this->template . '/js/responsive.js', array('version' => 'auto'));
	
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<jdoc:include type="head" />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes">
		<title>KP_KP_MS</title>
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
					</span>
				</h1>
			</div>
			<?php if($this->countModules('menu')) : ?>
			<nav>
				<jdoc:include type="modules" name="menu" />
			</nav>
			<?php endif; ?>
		</header>
		<?php if($this->countModules('breadcrumb')) : ?>
		<jdoc:include type="modules" name="breadcrumb" />
		<?php endif; ?>
		<article>
			<div id="article">
				<jdoc:include type="component" />
				<?php if($this->countModules('article-0')) : ?>
					<jdoc:include type="modules" name="article-0" />
				<?php endif; ?>
				<?php if($this->countModules('article-1')) : ?>
					<jdoc:include type="modules" name="article-1" />
				<?php endif; ?>
			</div>
		</article>
		<?php if($this->countModules('position-0')) : ?>
		<jdoc:include type="modules" name="position-0" />
		<?php endif; ?>
		<?php if($this->countModules('position-1')) : ?>
		<jdoc:include type="modules" name="position-1" />
		<?php endif; ?>
		<?php if($this->countModules('breadcrumb')) : ?>
		<jdoc:include type="modules" name="breadcrumb" />
		<?php endif; ?>
		<?php if($this->countModules('footer')) : ?>
		<footer>
			<!--	Tu umieszczamy zawartość stopki strony	-->
		</footer>
		<?php endif; ?>
	</body>
</html>