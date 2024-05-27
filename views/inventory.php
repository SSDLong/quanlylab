<?php
include 'header.php';
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-2 sidebar">
	<form role="search">
		<div class="form-group">
			<!-- <input type="text" class="form-control" placeholder="Search"> -->
		</div>
	</form>
	<ul class="nav menu">
		<li class="">
			<a href="dashboard">
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg>
				Dashboard
			</a>
		</li>
		<li class="parent ">
			<a href="#sub-item-1" data-toggle="collapse">
				<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
						<use xlink:href="#stroked-chevron-down"></use>
					</svg></span> Chuyển giao
			</a>
			<ul class="children collapse" id="sub-item-1">

				<li>
					<a class="" href="reservation">
						<svg class="glyph stroked eye">
							<use xlink:href="#stroked-eye" />
						</svg>
						Kho
					</a>
				</li>


				<li>
					<a class="" href="new">
						<svg class="glyph stroked plus sign">
							<use xlink:href="#stroked-plus-sign" />
						</svg>
						Mới
					</a>
				</li>
				<li>
					<a class="" href="borrow">
						<svg class="glyph stroked download">
							<use xlink:href="#stroked-download" />
						</svg>
						Đồ đã mượn
					</a>
				</li>
				<li>
					<a class="" href="return">
						<svg class="glyph stroked checkmark">
							<use xlink:href="#stroked-checkmark" />
						</svg>
						Đồ đã trả
					</a>
				</li>
			</ul>
		</li>
		<?php if ($_SESSION['admin_type'] == 1) { ?>
			<li>
				<a href="items">
					<svg class="glyph stroked desktop">
						<use xlink:href="#stroked-desktop" />
					</svg>
					Đồ
				</a>
			</li>
			<li>
				<a href="members">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user" />
					</svg>
					Người mượn
				</a>
			</li>
			<li>
				<a href="room">
					<svg class="glyph stroked app-window">
						<use xlink:href="#stroked-app-window"></use>
					</svg>
					Phòng
				</a>
			</li>
			<li class="active">
				<a href="#">
					<svg class="glyph stroked clipboard with paper">
						<use xlink:href="#stroked-clipboard-with-paper" />
					</svg>
					Hành trang
				</a>
			</li>
			<li>
				<a href="report">
					<svg class="glyph stroked line-graph">
						<use xlink:href="#stroked-line-graph" />
					</svg>
					Biểu đồ
				</a>
			</li>
			<li>
				<a href="user">
					<svg class="glyph stroked female user">
						<use xlink:href="#stroked-female-user" />
					</svg>
					Người dùng
				</a>
			</li>
			<li class="">
				<a href="/LabManagement/views/news.html">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-newspaper" viewBox="0 0 16 16">
						<path
							d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
						<path
							d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
					</svg>
					Tin tức
				</a>
			</li>
			<?php
		}
		($_SESSION['admin_type'] == 1) ? include ('include_history.php') : false;
		?>
	</ul>
</div><!--/.sidebar-->


<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">

	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Hành trang</li>
		</ol>
		<div class="breadcrumb">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-pills">
						<li class="active"><a href="#new" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Mới</a></li>
						<li><a href="#old" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Cũ</a></li>
						<li><a href="#lost" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Mất</a></li>
						<li><a href="#damaged" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Hỏng</a></li>
						<li><a href="#pulledout" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Tổng</a></li>
						<li><a href="#transferred" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Chuyển</a></li>
						<li><a href="#report2" data-toggle="tab"><i class=""></i>&nbsp;&nbsp;Mượn</a></li>
					</ul>
				</div>
				<!-- <div class="col-md-2">
						<button class="btn btn-primary add_equipment ">
							<svg class="glyph stroked plus sign">
								<use xlink:href="#stroked-plus-sign"/>
							</svg> &nbsp;
							Add Equipment
						</button>
					</div> -->
			</div>
		</div>
	</div><!--/.row-->


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="new">
							<table class="table table_inventory_new">
								<thead>
									<tr>
										<th>Model</th>
										<th>Loại</th>
										<th>Hãng</th>
										<th>Số lượng</th>
										<th>Còn</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane fade" id="old">
							<table class="table table_inventory_old">
								<thead>
									<tr>
										<th>Model</th>
										<th>Loại</th>
										<th>Hãng</th>
										<th>Số lượng</th>
										<th>Còn</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane fade" id="lost">
							<table class="table table_inventory_lost">
								<thead>
									<tr>
										<th>Model</th>
										<th>Loại</th>
										<th>Hãng</th>
										<th>Số lượng</th>
										<th>Ghi chú</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane fade" id="damaged">
							<table class="table table_inventory_damaged">
								<thead>
									<tr>
										<th>Model</th>
										<th>Loại</th>
										<th>Hãng</th>
										<th>Số lượng</th>
										<th>Ghi chú</th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tab-pane fade" id="pulledout">
							<table class="table table_inventory_all">
								<thead>
									<tr>
										<th>Loại</th>
										<th>Mới</th>
										<th>(Cũ / Hỏng / Mất / Mượn / Chuyển)</th>
										<th>Tổng</th>
									</tr>
								</thead>
							</table>
						</div>

						<div class="tab-pane fade" id="transferred">
							<div class="row">
								<div class="col-sm-1 pull-right">
									<div class="form-group text-right">
										<button type="button" class="btn btn-primary" id="btnReloadTransferredList">Làm
											mới</button>
									</div>
								</div>
								<div class="col-sm-3 pull-right">
									<div class="form-group">
										<select id="selectYearTransferred" class="form-control">
											<option value="">Hiển thị Tất cả</option>
											<?php
											$currentYear = date('Y');
											for ($i = $currentYear; $i >= ($currentYear - 15); $i--):
												?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
								<div class="col-sm-3 pull-right">
									<div class="form-group">
										<select id="selectMonthTransferred" class="form-control">
											<option value="">Hiển thị Tất cả</option>
											<?php
											$monthArr = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
											for ($i = 0; $i < 12; $i++):
												$month = ($i + 1);
												?>
												<option value="<?php echo $month; ?>"><?php echo $monthArr[$i]; ?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table class="table table_inventory_transfer">
										<thead>
											<tr>
												<th>Model</th>
												<th>Loại</th>
												<th>Hãng</th>
												<th>Số lượng</th>
												<th>Phòng</th>
												<th>Người CTN</th>
												<th>Người dùng</th>
												<th>Thời điểm giao</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="report2">
							<div class="row">
								<div class="col-sm-1 pull-right">
									<div class="form-group text-right">
										<button type="button" class="btn btn-primary" id="btnReloadList">Làm
											mới</button>
									</div>
								</div>
								<div class="col-sm-3 pull-right">
									<div class="form-group">
										<select id="selectYear" class="form-control">
											<option value="">Hiển thị tất cả</option>
											<?php
											$currentYear = date('Y');
											for ($i = $currentYear; $i >= ($currentYear - 15); $i--):
												?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
								<div class="col-sm-3 pull-right">
									<div class="form-group">
										<select id="selectMonth" class="form-control">
											<option value="">Hiển thị tất cả</option>
											<?php
											$monthArr = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
											for ($i = 0; $i < 12; $i++):
												$month = ($i + 1);
												?>
												<option value="<?php echo $month; ?>"><?php echo $monthArr[$i]; ?></option>
											<?php endfor; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table class="table tbl_return">
										<thead>
											<tr>
												<th>Người mượn</th>
												<th>Đồ</th>
												<th>Thời điểm mượn</th>
												<th>Thời điểm trả</th>

											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->
	</div><!-- row -->


</div>



<?php include 'footer.php'; ?>