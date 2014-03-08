<?php echo $this->element('admin' . DS . 'page_breadcrumb'); ?>

<div class="row padding-20">
	<div class="tabbable tabbable-custom tabbable-custom-profile col-md-8">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#tab_1_11" data-toggle="tab">Payment Summary</a>
			</li>
			<li class="">
				<a href="#tab_1_22" data-toggle="tab">Today</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab_1_11">

				<div class="nav portlet-title padding-top-8" style="padding:10px 10px 2px 10px;  height: 38px;">
					<div class="caption"><i class="fa fa-calendar margin-right-5"></i> Jan 2014</div>
					<div class="pull-right">
						
						<span>Year: </span>
						<select class=" margin-right-3">
							<option>2014</option>
							<option>2013</option>
						</select>

						<span>Month: </span>
						<select class=" margin-right-3">
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>

						<span>Day: </span>
						<select class="">
							<option></option>
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
						</select>

					</div>
				</div>
				<div class="portlet-body">
					<div class="table-responsive">
						<table class="table margin-top-10" style="width: 300px">
							<tbody>
								<tr>
									<td class="">From </td>
									<td class="col-md-5">01 Jan 2014</td>
								</tr>
								<tr>
									<td>To </td>
									<td>31 Jan 2014</td>
								</tr>
								<tr>
									<td>Total transactions</td>
									<td>8</td>
								</tr>
								<tr>
									<td>Total students</td>
									<td>4</td>
								</tr>
								<tr>
									<td>Total teachers</td>
									<td>3</td>
								</tr>
								<tr>
									<td>Profits</td>
									<td>160.000 VND</td>
								</tr>
							</tbody>
						</table>

						<a type="reset" class="btn btn-sm btn-info cancel pull-right" style="margin-top: -50px; margin-right: 0px"><i class="fa fa-save margin-right-5"></i><span>Save to file</span></a>

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
								<tr>
									<td>1</td>
									<td>Tus Jan 28 2014 14:48:06</td>
									<td>mz005</td>
									<td><a href="">luongkam</a></td>
									<td><a href="">abc_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Tus Jan 28 2014 14:48:06</td>
									<td>mz003</td>
									<td><a href="">tanvn</a></td>
									<td><a href="">abc_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
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
			<div class="tab-pane" id="tab_1_22">
				<div class="nav portlet-title padding-top-8" style="padding:10px 10px 2px 10px;  height: 38px;">
					<div class="caption"><i class="fa fa-calendar margin-right-5"></i> 08 Feb 2014</div>
				</div>
				<div class="portlet-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-advance table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th class="col-md-4">Transaction date</th>
									<th>Lesson</th>
									<th>Student</th>
									<th>Teacher</th>
									<th><i class="fa fa-bookmark margin-right-5"></i>Amount (VND)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Sun Feb 08 2014 14:48:06</td>
									<td>mz005</td>
									<td><a href="">luongkam</a></td>
									<td><a href="">abc_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Sun Feb 08 2014 14:48:06</td>
									<td>mz005</td>
									<td><a href="">tanvn</a></td>
									<td><a href="">abc_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
								<tr>
									<td>3</td>
									<td>Sun Feb 08 2014 14:48:06</td>
									<td>mz005</td>
									<td><a href="">quanpd</a></td>
									<td><a href="">abc_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
								<tr>
									<td>4</td>
									<td>Sun Feb 08 2014 14:48:06</td>
									<td>mz005</td>
									<td><a href="">hieumd</a></td>
									<td><a href="">abc_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
								<tr>
									<td>5</td>
									<td>Sun Feb 08 2014 14:48:06</td>
									<td>mz005</td>
									<td><a href="">hieumd</a></td>
									<td><a href="">def_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
								<tr>
									<td>6</td>
									<td>Sun Feb 08 2014 06:48:06</td>
									<td>mz005</td>
									<td><a href="">quanpd</a></td>
									<td><a href="">ghj_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
								<tr>
									<td>7</td>
									<td>Sun Feb 08 2014 06:48:06</td>
									<td>mz005</td>
									<td><a href="">quanpd</a></td>
									<td><a href="">ghj_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
								<tr>
									<td>8</td>
									<td>Sun Feb 08 2014 06:48:06</td>
									<td>mz005</td>
									<td><a href="">quanpd</a></td>
									<td><a href="">ghj_sensei</a></td>
									<td class="align-right">20.000 <span class="label label-success label-sm">Paid</span></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>			
	</div>
	
	<!-- END TABTABLE-->

	<div class="col-md-3 pull-right margin-top-20">
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
	</div>	
</div>