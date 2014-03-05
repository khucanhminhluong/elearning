<?php
	$status = array('Deleted', 'Denied', 'Blocked', 'Pending', 'Active');
	$status_label = array('default', 'danger', 'warning', 'info', 'success');

	$new_students = array(
	'total' => '4',
	'data' => array(
			array(
				'FirstName' => 'ozawa',
				'LastName' => 'obama',
				'Username' => 'obamaozawa',
				'Status' => 1
				),
			array(
				'FirstName' => 'ozawa',
				'LastName' => 'obama',
				'Username' => 'obamaozawa',
				'Status' => 3
				),
			array(
				'FirstName' => 'ozawa',
				'LastName' => 'obama',
				'Username' => 'obamaozawa',
				'Status' => 3
				),
			array(
				'FirstName' => 'ozawa',
				'LastName' => 'obama',
				'Username' => 'obamaozawa',
				'Status' => 4
				),
			)
		);

?>

<?php echo $this->element('admin' . DS . 'page_breadcrumb'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="row" id="new-students">
			<div class="col-md-6">
				<div class="portlet">
					<div class="portlet-title">
						<div class="caption"><i class="fa fa-user"></i>New students today</div>
						<div class="tools">
							<a href="javascript:;" class="reload"></a>
						</div>
					</div>
					<?php if (isset($new_students)) { ?>
					<div class="portlet-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($new_students['data'] as $key => $new_student) { ?>
									<tr>
										<td><?php echo ($key + 1)?></td>
										<td><a href=""><?php echo $new_student['FirstName']?></a></td>
										<td><?php echo $new_student['LastName']?></td>
										<td><?php echo $new_student['Username']?></td>
										<td><span class="label label-sm label-<?php echo $status_label[$new_student['Status']]?> line-height-6"><?php echo $status[$new_student['Status']]?></span></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<?php }  else { ?>
					<div class="portlet-body">
						There's new student registed today.
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">#All users</div>
				
				<div class="tools">
					<a href="javascript:;" class="reload"></a>
				</div>
				<div class="pull-right">
					<strong style="font-size: 0.95em;">
	
						<a href="">All</a>&nbsp; 
					
						<a href="">A</a>&nbsp; 
					
						<a href="">B</a>&nbsp; 
					
						<a href="">C</a>&nbsp; 
					
						<a href="">D</a>&nbsp; 
					
						<a href="">E</a>&nbsp; 
					
						<a href="">F</a>&nbsp; 
					
						<a href="">G</a>&nbsp; 
					
						<a href="">H</a>&nbsp; 
					
						<a href="">I</a>&nbsp; 
					
						<a href="">J</a>&nbsp; 
					
						<a href="">K</a>&nbsp; 
					
						<a href="">L</a>&nbsp; 
					
						<a href="">M</a>&nbsp; 
					
						<a href="">N</a>&nbsp; 
					
						<a href="">O</a>&nbsp; 
					
						<a href="">P</a>&nbsp; 
					
						<a href="">Q</a>&nbsp; 
					
						<a href="">R</a>&nbsp; 
					
						<a href="">S</a>&nbsp; 
					
						<a href="">T</a>&nbsp; 
					
						<a href="">U</a>&nbsp; 
					
						<a href="">V</a>&nbsp; 
					
						<a href="">W</a>&nbsp; 
					
						<a href="">X</a>&nbsp; 
					
						<a href="">Y</a>&nbsp; 
					
						<a href="">Z</a>&nbsp; 
					
						<a href="">Other</a>&nbsp; 
					</strong>
				</div>
			</div>
			<div class="portlet-body flip-scroll" style="display: block; overflow: auto">
				<table class="table table-hover table-striped table-condensed">
					<thead class="flip-content">
						<tr>
							<th>ID</th>
							<th>Account</th><th>Email</th>
							<th class="numeric">Full name</th>
							<th class="numeric">Birthday</th>
							<th class="numeric">Gender</th>
							<th class="numeric">Phone</th>
							<th class="numeric"><a link>Created</a></th>
							<th class="numeric"><a link>Modified</a></th>
							<th class="numeric"><a link>Violated</a></th>
							<th class="numeric">Status</th>
						</tr>
					</thead>
					<tbody>
					<?php if (isset($all_students)) { ?>
						<?php foreach ($all_students['data'] as $key => $student) { ?>
						<tr>
							<td><?php echo $student['user']['UserId']?></td>
							<td><a href=""><?php echo $student['user']['Username']?></a></td>
							<td><?php echo $student['user']['Email']?></td>
							<td><?php echo $student['user']['FullName']?></td>
							<td><?php echo $student['user']['Birthday']?></td>
							<td><?php echo $student['user']['Gender'] == 0 ? __("Female") : __("Male")?></td>
							<td><?php echo $student['user']['Phone']?></td>
							<td><?php echo $student['user']['Created']?></td>
							<td><?php echo $student['user']['Modified']?></td>
							<td class="align-right"><?php echo $student['user']['Violated'] == 0 ? null : $student['user']['Violated']; ?></td>
							<td><span class="label label-sm label-<?php echo $status_label[$student['user']['Status']]?> line-height-8" ><?php echo $status[$student['user']['Status']]?></span></td>
						</tr>
						<?php } ?>
					<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>