<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			<?php echo date('d/m/Y', time());?>
		</h3>
		<ul class="page-breadcrumb breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/elearning/admin/home">Home</a> 
			</li>			
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>

<?php 
$paid = array('Unpaid', 'Paid');
$paid_label = array('warning', 'success');

$transactions = array(
	'total_student' => '2',
	'total_teacher' => '3',
	'total_profit' => '100000',
	array(
		'date' => date('d/m/Y', time()),
		'lesson' => 'ls001',
		'student' => 'lucilucency',
		'teacher' => 'gondai',
		'paid' => 1
		),
	array(

		)
	)


?>

<div class="tabbable tabbable-custom tabbable-custom-profile col-md-9">
	<ul class="nav nav-tabs">
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab_1_11">

			<div class="nav portlet-title padding-top-8" style="padding:10px 10px 2px 10px;  height: 38px;">
				<div class="caption"><i class="fa fa-calendar margin-right-5"></i><?php echo date('d-M-Y')?></div>
			</div>
			<div class="portlet-body">
				<div class="table-responsive">
					<table class="table margin-top-10" style="width: 300px">
						<tbody>
							<tr>
								<td>Total transactions</td>
								<td><?php echo isset($transactions) ? count($transactions) : '0'?></td>
							</tr>
							<tr>
								<td>Total students</td>
								<td><?php echo isset($transactions) ? $transactions['total_student'] : '0' ?></td>
							</tr>
							<tr>
								<td>Total teachers</td>
								<td><?php echo isset($transactions) ? $transactions['total_teacher'] : '0' ?></td>
							</tr>
							<tr>
								<td>Profits</td>
								<td><?php echo isset($transactions) ? $transactions['total_profit'] : '0' ?> VND</td>
							</tr>
						</tbody>
					</table>

					<table class="table table-striped table-bordered table-advance table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Transaction time</th>
								<th>Lesson</th>
								<th>Student</th>
								<th>Teacher</th>
								<th><i class="fa fa-bookmark margin-right-5"></i>Amount (VND)</th>
							</tr>
						</thead>
						<tbody>
						<?php if (isset($transactions)) : ?>
							<?php foreach ($transactions as $key => $transaction) : ?>
							<tr>
								<td><?php echo $key ?></td>
								<td><?php echo $transaction['date'] ?></td>
								<td><?php echo $transaction['lesson'] ?></td>
								<td><a href=""><?php echo $transaction['student'] ?></a></td>
								<td><a href=""><?php echo $transaction['teacher'] ?></a></td>
								<td class="align-right"><?php echo $transaction['cost'] ?> <span class="label label-<?php echo $paid_label[$transaction['paid']]?>success label-sm"><?php echo $paid[$transaction['paid']]?></span></td>
							</tr>
							<?php endforeach; ?>
						<?php endif ?>
							<tr>
								<td>2</td>
								<td>Tus Jan 28 2014 14:48:06</td>
								<td>mz003</td>
								<td><a href="">tanvn</a></td>
								<td><a href="">abc_sensei</a></td>
								<td class="align-right">20.000 <span class="label label-warning label-sm"></span></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Tus Jan 28 2014 14:48:06</td>
								<td>mz007</td>
								<td><a href="">quanpd</a></td>
								<td><a href="">abc_sensei</a></td>
								<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Mon Jan 27 2014 14:48:06</td>
								<td>mz005</td>
								<td><a href="">hieumd</a></td>
								<td><a href="">abc_sensei</a></td>
								<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Mon Jan 27 2014 14:48:06</td>
								<td>mz009</td>
								<td><a href="">hieumd</a></td>
								<td><a href="">def_sensei</a></td>
								<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
							</tr>
							<tr>
								<td>6</td>
								<td>Sun Jan 26 2014 06:48:06</td>
								<td>mz003</td>
								<td><a href="">quanpd</a></td>
								<td><a href="">ghj_sensei</a></td>
								<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
							</tr>
							<tr>
								<td>7</td>
								<td>Sun Jan 26 2014 06:48:06</td>
								<td>mz005</td>
								<td><a href="">quanpd</a></td>
								<td><a href="">abc_sensei</a></td>
								<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
							</tr>
							<tr>
								<td>8</td>
								<td>Sun Jan 26 2014 06:48:06</td>
								<td>mz005</td>
								<td><a href="">quanpd</a></td>
								<td><a href="">abc_sensei</a></td>
								<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
				
		</div>
	</div>			
</div>

<div class="col-md-3 pull-right">
	<div class="portlet payment-summary">
		<div class="portlet-title">
			<div class="caption">
				 <i class="fa fa-bookmark"></i> Overview
			</div>
			<div class="tools">
				<a class="reload" href="javascript:;"></a>
			</div>
		</div>
		<div class="portlet-body">
			<ul class="list-unstyled">
				<li>
					<span class="sale-info">
						 TODAY  <i class="fa fa-img-up"></i>
					</span>
					<span class="sale-num">
						 240.000
					</span>
				</li>
				<li>
					<span class="sale-info">
						 WEEKLY <i class="fa fa-img-down"></i>
					</span>
					<span class="sale-num">
						 880.000
					</span>
				</li>
				<li>
					<span class="sale-info">
						 TOTAL 
					</span>
					<span class="sale-num">
						 10.000.000
					</span>
				</li>
				<li>
					<span class="sale-info">
						 EARNS
					</span>
					<span class="sale-num">
						 4.000.000 VND
					</span>
				</li>
			</ul>
		</div>
	</div>

	<div class="portlet">
		<div class="portlet-title">
			<div class="caption"><i class="fa fa-user"></i>New students</div>
			<div class="tools">
				<a href="javascript:;" class="reload"></a>
			</div>
		</div>
		<div class="portlet-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="col-md-1">#</th>
							<th>Username</th>
							<th class="col-md-3"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><a href="">obama123</a></td>
							<td><span class="margin-left-3 label label-sm label-danger">Denied</span></td>
						</tr>
						<tr>
							<td>2</td>
							<td><a href="">toan123</a></td>
							<td><span class="margin-left-3 label label-sm label-success">Approved</span></td>
						</tr>
						<tr>
							<td>3</td>
							<td><a href="">ozawa122</a></td>
							<td><span class="margin-left-3 label label-sm label-info">Pending</span></td>
						</tr>
						<tr>
							<td>4</td>
							<td><a href="">sanlim</a></td>
							<td><span class="margin-left-3 label label-sm label-info">Pending</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>