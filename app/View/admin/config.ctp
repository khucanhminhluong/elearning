<?php echo $this->element('admin' . DS . 'page_breadcrumb'); ?>

<div class="row">
	<div class="col-md-6">
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-reorder"></i>IP Address</div>
				<div class="actions">
					<a href="#" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Add</a>
				</div>					
			</div>
			<div class="portlet-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="col-md-1">#</th>
								<th>IP</th>
								<th class="col-md-5">Last used</th>
								<th class="col-md-1"></th>
							</tr>
						</thead>
						<?php  if (isset($ip_addrs)) { ?>
						<tbody>
							<?php foreach ($ip_addrs as $key => $ip) { ?>
							<tr>
								<td><?php echo $key?></td>
								<td><?php echo $ip['ip']['IpAddress']?></td>
								<td><?php echo $ip['ip']['LastUsed']?></td>
								<td><a type="reset" class="btn btn-xs btn-warning cancel"><span>Remove</span></a></td>
							</tr>
							<?php } ?>
						</tbody>
						<?php } else { ?>
						<div class="portlet-body">
							There is no registed IP Address.
						</div>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6 ">
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-reorder"></i>Config Table
				</div>
			</div>
			<div class="portlet-body">
				
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th class=""># (Config)</th>
								<th class="col-md-5"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="">Session timeout</td>
								<td class="col-md-5 align-right">
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="1" id="">12</textarea><span style="line-height: 1.7">d&nbsp;&nbsp;&nbsp;&nbsp;: </span>
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="1" id="">12</textarea><span style="line-height: 1.7">h&nbsp;&nbsp;&nbsp;&nbsp;: </span>
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="1" id="">00</textarea><span style="line-height: 1.7">m</span>
								</td>
							</tr>
							<tr>
								<td>Number of failed password logon attempts</td>
								<td class="col-md-5 align-right">
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="2" id="">5</textarea>
								</td>
							</tr>
							<tr>
								<td>Course fees</td>
								<td class="col-md-5 align-right">
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="6" id="">20000</textarea> <span style="line-height: 1.7">VND</span>
								</td>
							</tr>										
							<tr>
								<td>Profit sharing rate</td>
								<td class="col-md-5 align-right">
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="2" id="">40</textarea><span style="line-height: 1.7">%</span>
								</td>
							</tr>
						</tbody>									
					</table>
					<div class="clear-fix"></div>
					<div class="padding-5 align-right">
						<a href="#" class="btn btn-info btn-xs" disabled="disabled"><i class="fa fa-pencil"></i> Save</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>