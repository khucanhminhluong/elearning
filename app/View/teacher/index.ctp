<div class="contents">
	<div class="tit_blck1"><h3 class="tit"> Tìm kiếm</h3>
		<div class="onTit"></div>
	</div>
	<div class="box_bd1 clearfix" style="height:50px;"></div>	
	<div class="tit_blck1"><h3 class="tit"> Danh sách đơn hàng xuất </h3>
		<div class="onTit"></div>
	</div>	
	<div class="bd_cmm clearfix">														
		<div id="dataTable">
			<table id="qlbhTable">
				<thead>
					<th>Ngày</th>
					<th>Tên Khách Hàng</th>
					<th>Mã Hàng</th>
					<th>Tên Hàng</th>
					<th>ĐVT</th>
					<th>Số Lượng</th>
					<th>Đơn Giá</th>
					<th>Loại Tiền Tệ</th>
					<th>Thành Tiền</th>
					<th>Ghi chú</th>
				</thead>
				<tbody>
					<tr>
						<td>9/27/2013</td>
						<td>Mac Hieu</td>
						<td>Mh1</td>
						<td>Tơ Tằm</td>
						<td>Cuộn</td>
						<td>10</td>
						<td>100</td>
						<td>USD</td>
						<td>100$</td>
						<td>Ghi chú</td>
					</tr>			
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
 $('#qlbhTable').fixheadertable({ 
		height : 600,  
		zebra : true, 
		sortable : true,
		sortedColId : 1, 
		resizeCol : true,
		pager : true,
		rowsPerPage	 : 100,
		sortType : ['integer', 'string', 'string', 'string', 'string', 'date'],
		dateFormat : 'm/d/Y'
	});

</script>