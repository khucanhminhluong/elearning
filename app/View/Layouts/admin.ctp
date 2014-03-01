<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"	content="text/html; charset=utf-8" />
	<title><?php echo isset($pageTitle) ? $pageTitle : null; ?></title>
	<link rel="shortcut icon" href="<?php echo $this->Html->url('/img/no-avatar.jpg') ?>" type="image/x-icon">
	<?php 
		// css file
		echo $this->Html->css(array(
			'fancybox/jquery.fancybox.css?v=2.1.5',

			'font-awesome.min',
			'bootstrap/bootstrap',
			'uniform.default',

			'style-conquer',
			'style-default',
			'style-responsive',
			'default-theme',
			'app',
		));
		// Js file
		echo $this->Html->script(array(
			'jquery-1.9.0.min',
			'jquery.fancybox.js?v=2.1.5',

			'jquery-migrate-1.2.1.min',
			'bootstrap',
			'jquery.slimscroll.min',
			'jquery.blockui.min',
			'jquery.cookie.min',
			'jquery.uniform.min',
			'app(1)',
		)); 
	?>
</head>
<body class="page-header-fixed">
	<!--<?php echo $this->element('sql_dump'); ?>-->
		<!--Start header-->
		<div class="header navbar navbar-inverse navbar-fixed-top">
			<?php echo $this->element('admin' .DS . 'layouts' . DS . 'admin_header');?>
		</div>
		<!--End	header-->
		<div class="page-container">
			<!-- Start sidebar -->
			<?php  echo $this->element('admin' .DS . 'layouts' . DS . 'admin_sidebar') ?>
			<!-- End sidebar -->
		</div>
		<!--Start container-->		
		<div class="page-content">
			<?php //echo $this->element('admin' . DS . 'page_info'); ?>
		    <?php echo $content_for_layout ?>
		</div>
		<!--End	container-->
		<!--Start footer-->
		<?php echo $this->element('admin' .DS . 'layouts' . DS . 'footer');?>
		<!--End	footer-->
	<!--End	body-->
</body>

	<script>
		jQuery(document).ready(function() {       
		   App.init();
		});
	</script>
</html>
