<?php
$page_info_title = isset($page_info['title']) ? $page_info['title'] : "\$page_info_title is not set yet";
$page_info_direct = isset($page_info['direct']) ? array($page_info['direct']) : array('Home', 'Your_Page_Here');
?>

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			<?php echo $page_info_title ?> <small><?php echo date('d/m/Y h:i:s a', time());?></small>
		</h3>
		<ul class="page-breadcrumb breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/elearning/admin/home"><?php echo $page_info_direct[0]?></a> 
			</li>
			<?php 
				$page_info_direct = array_slice($page_info_direct, 1);
				$this->log($page_info_direct);
				foreach ($page_info_direct as $buff) {
			?>
			<li>
				<i class="fa fa-angle-right"></i>
				<a href="/elearning/admin/<?php echo $buff == 'Your_Page_Here' ? 'home' : $buff?>"><?php echo $buff?></a>				
			</li>
			<?php
				}
			?>			
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>