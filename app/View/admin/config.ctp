<?php echo $this->element('admin' . DS . 'page_breadcrumb'); ?>

<div class="row">
	<div class="col-md-6">
		<div class="portlet">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-reorder"></i>IP アドレス</div>
				<div class="actions">
					<a href="#" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> 追加</a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="col-md-1">#</th>
								<th>IP</th>
								<th class="col-md-5">最も近い使うこと</th>
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
								<td><a type="reset" class="btn btn-xs btn-warning cancel"><span>削除</span></a></td>
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
					<i class="fa fa-reorder"></i>設定テーブル
				</div>
			</div>
			<div class="portlet-body">

				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th class=""># (設定)</th>
								<th class="col-md-5"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="">セッションタイムアウト</td>
								<td class="col-md-5 align-right">
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="1" id="">12</textarea><span style="line-height: 1.7">d&nbsp;&nbsp;&nbsp;&nbsp;: </span>
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="1" id="">12</textarea><span style="line-height: 1.7">h&nbsp;&nbsp;&nbsp;&nbsp;: </span>
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="1" id="">00</textarea><span style="line-height: 1.7">m</span>
								</td>
							</tr>
							<tr>
								<td>最大ログインが間違えられる回</td>
								<td class="col-md-5 align-right">
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="2" id="">5</textarea>
								</td>
							</tr>
							<tr>
								<td>課金の金額</td>
								<td class="col-md-5 align-right">
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="6" id="">20000</textarea> <span style="line-height: 1.7">VND</span>
								</td>
							</tr>
							<tr>
								<td>報酬の割合</td>
								<td class="col-md-5 align-right">
									<textarea name="" rows="1" class="no-border align-right" style="resize: none" cols="2" id="">40</textarea><span style="line-height: 1.7">%</span>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="clear-fix"></div>
					<div class="padding-5 align-right">
						<a href="#" class="btn btn-info btn-xs" disabled="disabled"><i class="fa fa-pencil"></i> 保存</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>