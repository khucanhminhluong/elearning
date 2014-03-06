<?php echo $this->element('admin' . DS . 'page_breadcrumb'); ?>

<?php if (!isset($teacherInfo)) { ?>
	<div class="row">
		<div class="col-md-12">
			<div class="row" id="new-teachers">
				<div class="col-md-6">
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption"><i class="fa fa-user"></i>New teachers today</div>
							<div class="tools">
								<a href="javascript:;" class="reload"></a>
							</div>
						</div>
						<?php if (isset($new_teachers) && $new_teachers['total'] != 0) { ?>
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
										<?php foreach ($new_teachers['data'] as $key => $new_teacher) { ?>
										<tr>
											<td><?php echo ($key + 1)?></td>
											<td><a href="/elearning/admin/teacher/<?php echo $new_teacher['user']['Username']?>"><?php echo $new_teacher['user']['FullName']?></a></td>
											<td><a href="/elearning/admin/teacher/<?php echo $new_teacher['user']['Username']?>"><?php echo $new_teacher['user']['Username']?></a></td>
											<td><?php echo $new_teacher['user']['created']?></td>
											<td><span class="label label-sm label-<?php echo $status_label[$new_teacher['user']['Status']]?> line-height-6"><?php echo $status[$new_teacher['user']['Status']]?></span></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<?php }  else { ?>
						<div class="portlet-body">
							There isn't new teacher registed today.
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
					<?php if (isset($all_teachers) && $all_teachers['total'] != 0) { ?>
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
							<?php foreach ($all_teachers['data'] as $key => $teacher) { ?>
							<tr>
								<td><?php echo $teacher['user']['UserId']?></td>
								<td><a href="/elearning/admin/teacher/<?php echo $teacher['user']['Username']?>"><?php echo $teacher['user']['Username']?></a></td>
								<td><?php echo $teacher['user']['Email']?></td>
								<td><?php echo $teacher['user']['FullName']?></td>
								<td><?php echo $teacher['user']['Birthday']?></td>
								<td><?php echo $teacher['user']['Gender'] == 0 ? __("Female") : __("Male")?></td>
								<td><?php echo $teacher['user']['Phone']?></td>
								<td><?php echo $teacher['user']['created']?></td>
								<td><?php echo $teacher['user']['modified']?></td>
								<td class="align-right"><?php echo $teacher['user']['Violated'] == 0 ? null : $teacher['user']['Violated']; ?></td>
								<td><span class="label label-sm label-<?php echo $status_label[$teacher['user']['Status']]?> line-height-8" ><?php echo $status[$teacher['user']['Status']]?></span></td>
							</tr>
							<?php } ?>							
						</tbody>
					</table>
					<?php }  else { ?>
					<div class="portlet-body">
						There isn't new teacher registed today.
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } else { //end if !isset($teacherInfo) ?>
<?php //have $teacherInfo?>
	<div class="row">
		<div class="col-md-12">			
			<div class="row">
				<div class="note note-success user-info" style="margin-top:  20px;">
						<div class="pull-left" style="padding: 10px">
                    		<img class="imageThumb" src="<?php echo $teacherInfo['ImageProfile'] ? $teacherInfo['ImageProfile'] : '/elearning/img/photo/no-avatar.jpg'?>" id="preview" width="96" height="96" style="margin-top: -50px;">
                		</div>
						<h4 class="block" style="margin-bottom: 0; margin-top: -10px;"><?php echo $teacherInfo['FullName'] ?></h4> 
						<span class="gender male"></span><?php echo $teacherInfo['Gender'] == 1 ? "Male" : "Felmale" ?>
						<span class="bday"></span><?php echo $teacherInfo['Birthday'] ?>
						<span class="addr"></span><?php echo $teacherInfo['Address'] ? $teacherInfo['Address'] : "Address  <i class='margin-left-5'> Updating...</i>" ?>
						<span class="margin-left-20"><?php echo $teacherInfo['Phone'] ? $teacherInfo['Phone'] : "Phone <i class='margin-left-5'> Updating... </i>" ?></span>
				</div>
			</div>
			<?php if ($teacherInfo['Status'] == 2) { ?>
			<button class="btn btn-sm btn-info pull-right">
				<i class="fa fa-exclamation-triangle"></i>
				<span>
					 Pending
				</span>
			</button>
			<?php } ?>
			<?php if ($teacherInfo['Status'] == 0) { ?>
			<label class="label label-xl label-default pull-right">
				<i class="fa fa-exclamation-triangle"></i>
				<span>
					 Deleted
				</span>
			</label>
			<?php } ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="portlet">
				<div class="nav portlet-title padding-top-8">
					<div class="caption"><i class="fa fa-reorder"></i><?php echo $teacherInfo['FullName'] ?>'s Info</div>
					<?php if ($teacherInfo['Status'] != 2) {?>
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
											Block this user
											</a>
										</li>
										<li>  
											<a href="">
											<span class="label label-sm label-icon label-default"><i class="fa fa-ban"></i></span>
											Remove this user
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</div>
					<?php } ?>
				</div>
				<div class="portlet-body user-info">
					<div class="row">
						<div class="col-md-12">
							<table id="user" class="table table-bordered table-striped">
								<tbody>
									<tr>
										<td class="col-md-3">Username</td>
										<td><?php echo $teacherInfo['Username'] ?><span class="config pull-right fa fa-edit pointer" data-toggle="modal" href="#portlet-config"></span></td>

									</tr>
									<tr>
										<td>Gender</td>
										<td><?php echo $teacherInfo['Gender'] == 1 ? "Male" : "Female" ?><span class="config pull-right fa fa-edit pointer" data-toggle="modal" href="#portlet-config"></span></td>
										
									</tr>
									<?php if ($teacherInfo['Status'] != 2 && $teacherInfo['Status'] != 0) { ?>
									<tr>
										<td>Status</td>
										<td><span class="label label-<?php echo $status_label[$teacherInfo['Status']] ?> line-height-6"><?php echo $status[$teacherInfo['Status']] ?></span></td>
									</tr>
									<?php } ?>							
									<tr>
										<td>Date of birth</td>
										<td><?php echo $teacherInfo['Birthday']  ? $teacherInfo['Birthday'] : "<i>Updating...</i>"?><span class="config pull-right fa fa-edit pointer" data-toggle="modal" href="#portlet-config"></span></td>
										
									</tr>
									<tr>
										<td>Cash</td>
										<td><?php echo $teacherInfo['BankInfo'] ? $teacherInfo['BankInfo'] : "<i>Updating...</i>"?><span class="config pull-right fa fa-edit pointer" data-toggle="modal" href="#portlet-config"></span></td>
									</tr>
									<tr>
										<td>Country</td>
										<td>Viet Nam<span class="config pull-right fa fa-edit pointer" data-toggle="modal" href="#portlet-config"></span></td>
									</tr>
									<tr>
										<td>Address</td>
										<td><?php echo $teacherInfo['Address']  ? $teacherInfo['Address'] : "<i>Updating...</i>"?><span class="config pull-right fa fa-edit pointer" data-toggle="modal" href="#portlet-config"></span></td>
										
									</tr>									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php } //end else-if !isset($teacherInfo)?>
