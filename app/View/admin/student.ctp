<?php
	$status = array('Deleted', 'Active', 'Pending', 'Blocked', 'Denied');
	$status_label = array('default', 'success', 'info', 'warning', 'danger');

?>

<?php echo $this->element('admin' . DS . 'page_breadcrumb'); ?>

<?php if (!isset($studentInfo)) { ?>
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
											<th>Full name</th>
											<th>Username</th>
											<th>Created</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($new_students['data'] as $key => $new_student) { ?>
										<tr>
											<td><?php echo ($key + 1)?></td>
											<td><a href=""><?php echo $new_student['user']['FullName']?></a></td>
											<td><?php echo $new_student['user']['Username']?></td>
											<td><?php echo $new_student['user']['Created']?></td>
											<td><span class="label label-sm label-<?php echo $status_label[$new_student['user']['Status']]?> line-height-6"><?php echo $status[$new_student['user']['Status']]?></span></td>
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
<?php } else { //end if !isset($studentInfo) ?>
<?php //have $studentInfo?>
	<div class="row">
		<div class="col-md-12">			
			<div class="row">
				<div class="note note-success user-info" style="margin-top:  20px;">
						<div class="pull-left" style="padding: 10px">
                    		<img class="imageThumb" src="<?php echo $studentInfo['ImageProfile'] ? $studentInfo['ImageProfile'] : '/elearning/img/photo/no-avatar.jpg'?>" id="preview" width="96" height="96" style="margin-top: -50px;">
                		</div>
						<h4 class="block" style="margin-bottom: 0; margin-top: -10px;"><?php echo $studentInfo['FullName'] ?></h4> 
						<span class="gender male"></span><?php echo $studentInfo['Gender'] == 1 ? "Male" : "Felmale" ?>
						<span class="bday"></span><?php echo $studentInfo['Birthday'] ?>
						<span class="addr"></span><?php echo $studentInfo['Address'] ? $studentInfo['Address'] : "Address  <i class='margin-left-5'> Updating...</i>" ?>
						<span class="margin-left-20"><?php echo $studentInfo['Phone'] ? $studentInfo['Phone'] : "Phone <i class='margin-left-5'> Updating... </i>" ?></span>
				</div>
			</div>
			<button type="reset" class="btn btn-sm btn-warning cancel pull-right">
			<i class="fa fa-exclamation-triangle"></i>
			<span>
				 Block this user
			</span>
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="portlet">
				<div class="nav portlet-title padding-top-8">
					<div class="caption"><i class="fa fa-reorder"></i><?php echo $studentInfo['FullName'] ?>'s Info</div>
					<div class="pull-right no-list-style">
						<li class="dropdown menu-left" id="header_notification_bar">
							<span href="#" class="btn btn-info btn-xs" id="edit" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-cog"></i>Options</span>
							
							<ul class="dropdown-menu extended" style="width: auto !important; margin-left: 77px; margin-top: -50px;">
								<li>
									<ul class="dropdown-menu-list no-space no-list-style">
										<li>  
											<a href="">
											<span class="label label-sm label-icon label-info"><i class="fa fa-pencil"></i></span>
											Edit profiles
											</a>
										</li>												
										<li>  
											<a href="">
											<span class="label label-sm label-icon label-success"><i class="fa fa-refresh"></i></span>
											Reset password
											</a>
										</li>
										<li>  
											<a href="">
											<span class="label label-sm label-icon label-success"><i class="fa fa-refresh"></i></span>
											Reset verify code
											</a>
										</li>
										<li>  
											<a href="">
											<span class="label label-sm label-icon label-danger"><i class="fa fa-ban"></i></span>
											Remove this user
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</div>
				</div>
				<div class="portlet-body user-info">
					<div class="row">
						<div class="col-md-12">
							<table id="user" class="table table-bordered table-striped">
								<tbody>
									<tr>
										<td class="col-md-3">Username</td>
										<td><?php echo $studentInfo['Username'] ?>							
									</tr>
									<tr>
										<td>Gender</td>
										<td><?php echo $studentInfo['Gender'] == 1 ? "Male" : "Female" ?></td>
										
									</tr>
									<tr>
										<td>Member type</td>
										<td><span class="label label-<?php echo $status_label[$studentInfo['Status']] ?> line-height-6"><?php echo $status[$studentInfo['Status']] ?></span></td>									
									</tr>									
									<tr>
										<td>Date of birth</td>
										<td><?php echo $studentInfo['Birthday'] ?><</td>
										
									</tr>
									<tr>
										<td>Cash</td>
										<td><?php echo $studentInfo['BankInfo'] ?></td>
									</tr>
									<tr>
										<td>Country</td>
										<td>Viet Nam</td>
									</tr>
									<tr>
										<td>Address</td>
										<td><?php echo $studentInfo['Address'] ?></td>
										
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php } //end else-if !isset($studentInfo)?>
