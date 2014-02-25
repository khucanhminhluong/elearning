<div class="contents">
	<div class="btnlst_small">
		<a class="btn" href="/qlbh/ncc/add">Thêm nhà cung cấp</a>		
	</div>
	<!-- <div class="tit_blck">
		<h2>Tool<span><img src="img/icon/btn_sidebar_close2.png" alt="" /></span></h2>
		<ul>
			<li><a href="#" style="background: url('img/icon/search.png') no-repeat 5px center;">Tìm kiếm</a></li>
			<li class="current"><a href="#" style="background: url('img/icon/add.png') no-repeat 5px center;">Thêm</a></li>
		</ul>
	</div>
	<div class="box_bd clearfix" style="height:auto;">
		<table id="akhTable" class="addTable">
			<form method="post" action="/opt/autobid" name="addKh" >
				<thead>
					<th width="5%">Mncc</th>
					<th width="15%">Nhà cung cấp</th>
					<th width="10%">Điện thoại</th>
					<th width="20%">Email</th>
					<th width="25%">Địa chỉ</th>				
					<th width="25%">Ghi chú</th>
				</thead>
				<tbody>
					<tr class="kh_<?php echo $i;?>">
						<td align="center"><?php echo $i;?></td>
						<td align="center"><input type="text" name="kh_name<?php echo $i;?>" style="width:90%"></td>
						<td align="center"><input type="text" name="kh_phone<?php echo $i;?>" style="width:90%"></td>
						<td align="center"><input type="text" name="kh_email<?php echo $i;?>" style="width:90%"></td>
						<td align="center"><input type="text" name="kh_address<?php echo $i;?>" style="width:90%"></td>		
						<td align="center"><textarea name="kh_comment<?php echo $i;?>" cols="40" rows="5" ></textarea></td>
					</tr>
					<tr>
						<td align="center" colspan="5"><span class="add_btn"><a href="javascript:void(0)">Add New</a></span></td>
						<td align="center"><input type="submit" class="btn_on" value="Submit" style="margin-right:10px;"/>
							<input type="reset" class="btn_normal" value="Reset"/></td>
					</tr>											
				</tbody>
				<input type="hidden" id="stt" value="<?php echo $i?>">
			</form>
		</table>
	</div> -->
	<div class="tit_blck1"><h3 class="tit"> Danh sách nhà cung cấp </h3>
		<div class="onTit"></div>
	</div>	
	<div class="bd_cmm1 clearfix">														
		<div class="dataTable">
			<table id="nccTable">
				<thead>
					<th>Mã ncc</th>
					<th>Tên nhà cung cấp</th>
					<th>Điện thoại</th>
					<th>Email</th>
					<th>Địa chỉ</th>
					<th>Tổng Giao dịch</th>
					<th>Dư nợ hiện tại</th>
					<th>Ghi chú</th>
					<th>Nhân viên</th>
					<th>Quản lý</th>
				</thead>
				<tbody>
					<?php foreach ($list_ncc as $key => $value):?>					
					<tr>
						<td><?php echo $value['Nhacungcap']['ncc_ms']?></td>
						<td>
							<?php  echo $this->Html->link($value['Nhacungcap']['ncc_ten'], 
							array('controller'=>'ncc','action' => 'detail',$value['Nhacungcap']['ncc_ms']));
							?>
						</td>
						<td><?php echo $value['Nhacungcap']['ncc_phone']?></td>
						<td><?php echo $value['Nhacungcap']['ncc_email']?></td>
						<td><?php echo $value['Nhacungcap']['ncc_diaChi']?></td>
						<td>							
						</td>
						<td>							
						</td>					
						<td><?php echo $value['Nhacungcap']['ncc_ghiChu']?></td>
						<td>
							<?php echo $value['Nhanvien']['nv_ten']?>
						</td>
						<td align="center">
							<div class="managebtn_box">
								<ul class="clearfix">
									<li><a href="/qlbh/ncc/detail/<?php echo $value['Nhacungcap']['ncc_ms']; ?>" title="<?php echo __('Detail'); ?>" ><?php echo $this->Html->image("btn_detail.gif", array("alt" => "Chi tiết"));?></a></li>
									<li><a href="/qlbh/ncc/edit/<?php echo $value['Nhacungcap']['ncc_ms']; ?>" title="<?php echo __('Edit'); ?>" ><?php echo $this->Html->image("btn_edit.gif", array("alt" => "Sửa"));?></a></li>
									<li><a href="/qlbh/ncc/delete/<?php echo $value['Nhacungcap']['ncc_ms']; ?>"  title="<?php echo __('Delete'); ?>" ><?php echo $this->Html->image("btn_del.gif", array("alt" => "Xóa"));?></a></li>
								</ul>
							</div>
						</td>
					</tr>
					<?php endforeach;?>		
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
 $('#nccTable').fixheadertable({ 
		height : 500,  
		colratio : [70, 150, 100, 180, 220, 115,115,300,115,100],  
		zebra : true, 
		sortable : true,
		showhide	 : true,
		sortedColId : 1, 
		resizeCol : true,
		pager : true,
		rowsPerPage	 : 10,
		sortType : ['integer', 'string'],
		dateFormat : 'm/d/Y'
	});
 // $('.add_btn').click(function(){
 // 	var stt = $('#stt').val();
 // 	stt = parseFloat(stt);
 // 	stt1 = stt + 1; 
 // 	$('#stt').val(stt1);
 // 	var html = '<tr class="kh_'+stt1+'"><td align="center">'+stt1+'</td><td align="center"><input type="text" name="kh_name'+stt1+'" style="width:90%"></td><td align="center"><input type="text" name="kh_phone'+stt1+'" style="width:90%"></td><td align="center"><input type="text" name="kh_email'+stt1+'" style="width:90%"></td><td align="center"><input type="text" name="kh_address'+stt1+'" style="width:90%"></td><td align="center"><textarea name="textarea'+stt1+'" cols="40" rows="5" ></textarea></td></tr>';
 // 	$( html ).insertAfter( '.kh_'+stt );	 
 // });
</script>