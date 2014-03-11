<?php echo $this->element('admin' . DS . 'page_breadcrumb'); ?>

<div class="row">		
	<div class="col-md-6">
		<div class="portlet">
			<div class="nav portlet-title padding-top-8">
				<div class="caption"># All</div>
				<div class="pull-right">
					<li class="dropdown" id="header_notification_bar">
						<a href="#" class="btn btn-info btn-xs" id="add-new-mod" onclick="addModerator()"><i class="fa fa-plus"></i>Add</a>
					</li>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-responsive">
					<table class="table table-hover" id="moderators-table">
						<thead>
							<tr>
								<th>#</th>
								<th class="col-md-4">Account</th>
								<th>Created date</th>
								<th class="col-md-3">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="">luongkam</a></td>
								<td>Sun, 09 Feb 2014 15:16:10 GMT</td>
								<td><label class="label label-sm label-success">Online</label></td>
							</tr>
							<tr>
								<td>2</td>
								<td><a href="">tanvn</a></td>
								<td>Sun, 09 Feb 2014 15:16:10 GMT</td>											
								<td><label class="label label-sm label-info disabled">Offline</label></td>
							</tr>
							<tr>
								<td>3</td>
								<td><a href="">quanpd</a></td>
								<td>Sun, 09 Feb 2014 15:16:10 GMT</td>											
								<td><label class="label label-sm label-info disabled">Offline</label></td>
							</tr>
							<tr>
								<td>4</td>
								<td><a href="">hieumd</a></td>
								<td>Sun, 09 Feb 2014 15:16:10 GMT</td>											
								<td><label class="label label-sm label-info disabled">Offline</label></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<script>

	function addModerator() {
		var next = parseInt($("#moderators-table tr:last td:first").html()) + 1;
		var buff = 		'<tr>'
						+ '<td>' + next + '</td>'
						+ '<td><input type="textarea" name="" rows="1" class="no-border" style="resize: none" id="" placeholder="username"></input></td>'
						+ '<td><input type="textarea" name="" rows="1" class="no-border" style="resize: none" id="" placeholder="password"></input></td>'
						+ '<td><a href="#" class="btn btn-xs btn-success" onclick="submitNewMod()"><?php echo __("Save") ?></a><a href="#" class="btn btn-xs btn-warning margin-left-5" onclick="cancel()"><?php echo __("Cancel")?></a></td>'
						+ '</tr>';
		$("#add-new-mod").addClass("disabled");
		$("#moderators-table tr:last").after(buff);
		$("#moderators-table tr:last td:eq(1) input").focus();
	}

	

	function submitNewMod() {
		var now = new Date();
		var time = now.toUTCString();
		$("#moderators-table tr:last td:eq(1)").html('<a href="">' + $("#moderators-table tr:last td:eq(1) input").val() + '</a>');
		$("#moderators-table tr:last td:eq(2)").html(time);
		$("#moderators-table tr:last td:eq(3)").html('<label class="label label-sm label-info disabled">Offline</label>');
		$("#add-new-mod").removeClass("disabled");
	}

	function cancel() {
		$("#moderators-table tr:last").remove();		
		$("#add-new-mod").removeClass("disabled");
	}

	$(document).ready(function(){
		$("input").live("keypress", function(event) {
		    if (event.which == 13) {
		        event.preventDefault();
		        submitNewMod();
		    }
		});	
	});
</script>