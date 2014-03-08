<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			<!-- <?php echo date('d/m/Y', time());?> -->
            <?php echo date('Y年 m月 d日', time());?>
		</h3>
		<ul class="page-breadcrumb breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="/elearning/admin/home">ホーム</a>
			</li>			
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>


<?php 
$paid = array('Unpaid', 'Paid');
$paid_label = array('warning', 'success');

$transactions = array(
	'total_student' => '1',
	'total_teacher' => '1',
	'total_profit' => '40000',
	'data' => array(
			array(
				'date' => date('d/m/Y', time()),
				'lesson' => 'ls001',
				'student' => 'lucilucency',
				'teacher' => 'gondai',
				'cost' => '20000',
				'paid' => 1
				),
			array(
				'date' => date('d/m/Y', time()),
				'lesson' => 'ls001',
				'student' => 'lucilucency',
				'teacher' => 'gondai',
				'cost' => '20000',
				'paid' => 0
				)
			)
		)

?>

<div class="tabbable tabbable-custom tabbable-custom-profile col-md-9">
	<ul class="nav nav-tabs">
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tab_1_11">

			<div class="nav portlet-title padding-top-8" style="padding:10px 10px 2px 10px;  height: 38px;">
				<div class="caption"><i class="fa fa-calendar margin-right-5"></i><?php echo date('Y年 m月 d日', time());?></div>
			</div>
			<div class="portlet-body">
				<div class="table-responsive">
					<table class="table margin-top-10" style="width: 300px">
						<tbody>
							<tr>
								<td>すべて取引</td>
								<td><?php echo isset($transactions) ? count($transactions['data']) : '0'?></td>
							</tr>
							<tr>
								<td>すべて学生</td>
								<td><?php echo isset($transactions) ? $transactions['total_student'] : '0' ?></td>
							</tr>
							<tr>
								<td>すべて先生</td>
								<td><?php echo isset($transactions) ? $transactions['total_teacher'] : '0' ?></td>
							</tr>
							<tr>
								<td>総額</td>
								<td><?php echo isset($transactions) ? $transactions['total_profit'] : '0' ?> VND</td>
							</tr>
						</tbody>
					</table>

					<table class="table table-striped table-bordered table-advance table-hover">
						<thead>
							<tr>
								<th>番号</th>
								<th>日付</th>
								<th>授業</th>
								<th>学生</th>
								<th>先生</th>
								<th><i class="fa fa-bookmark margin-right-5"></i>学費 (VND)</th>
							</tr>
						</thead>
						<tbody>
						<?php if (isset($transactions['data'])) : ?>
							<?php foreach ($transactions['data'] as $key => $transaction) : ?>
							<tr>
								<td><?php echo $key + 1 ?></td>
								<td><?php echo $transaction['date'] ?></td>
								<td><?php echo $transaction['lesson'] ?></td>
								<td><a href="/admin/student/<?php echo $transaction['student'] ?>"><?php echo $transaction['student'] ?></a></td>
								<td><a href="/admin/teacher/<?php echo $transaction['teacher'] ?>"><?php echo $transaction['teacher'] ?></a></td>
								<td class="align-right"><?php echo $transaction['cost'] ?> <span class="label label-<?php echo $paid_label[$transaction['paid']]?> label-sm"><?php echo $paid[$transaction['paid']]?></span></td>
							</tr>
							<?php endforeach; ?>
						<?php endif ?>
							
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
				 <i class="fa fa-bookmark"></i> 概要
			</div>
			<div class="tools">
				<a class="reload" href="javascript:;"></a>
			</div>
		</div>
		<div class="portlet-body">
			<ul class="list-unstyled">
				<li>
					<span class="sale-info">
						 今日  <i class="fa fa-img-up"></i>
					</span>
					<span class="sale-num">
						 240.000
					</span>
				</li>
				<li>
					<span class="sale-info">
						 週間 <i class="fa fa-img-down"></i>
					</span>
					<span class="sale-num">
						 880.000
					</span>
				</li>
				<li>
					<span class="sale-info">
						 合計
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
			<div class="caption"><i class="fa fa-user"></i>新しいユーザー</div>
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
							<th>ユーザー名</th>
							<th class="col-md-3"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><a href="">obama123</a></td>
							<td><span class="margin-left-3 label label-sm label-danger">打ち消す</span></td>
						</tr>
						<tr>
							<td>2</td>
							<td><a href="">toan123</a></td>
							<td><span class="margin-left-3 label label-sm label-success">承認</span></td>
						</tr>
						<tr>
							<td>3</td>
							<td><a href="">ozawa122</a></td>
							<td><span class="margin-left-3 label label-sm label-info">未確定</span></td>
						</tr>
						<tr>
							<td>4</td>
							<td><a href="">sanlim</a></td>
							<td><span class="margin-left-3 label label-sm label-info">未確定</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>