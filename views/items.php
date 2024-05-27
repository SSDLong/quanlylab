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
			<li class="active">
				<a href="#">
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
			<li>
				<a href="inventory">
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
					Người mượn
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
			<li class="active">Đồ</li>
		</ol>
		<div class="breadcrumb">
			<button class="btn btn-primary col-sm-offset-10 add_equipment">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign" />
				</svg> &nbsp;
				Thêm đồ
			</button>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-bordered table_equipment ">
						<thead>
							<tr>
								<th>Hình ảnh</th>
								<th>Model</th>
								<th>Loại</th>
								<th>Hãng</th>
								<th>Ghi chú</th>
								<th>Số lượng</th>
								<th>Còn</th>
								<th>Hiện trạng</th>
								<th>Hành động</th>
							</tr>
						</thead>
					</table>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->
	</div>
</div>


<div class="right-sidebar equipment-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<h4 class="alert bg-success">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign" />
				</svg>
				Thêm đồ
			</h4>
			<form class="frm_addequipment" enctype="multipart/form-data">
				<input type="hidden" name="key" value="add_equipment" />
				<div class="form-group">
					<label>ID</label>
					<input type="text" name="e_number" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Model</label>
					<input type="text" name="e_model" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Loại</label>
					<select name="e_category" class="form-control" required>
						<option selected disabled>Hãy chọn loại</option>
						<option>Chuột</option>
						<option>Bàn phím</option>
						<option>Màn hình</option>
						<option>Máy chiếu</option>
						<option>Điều khiển</option>
						<option>Màn DLP</option>
						<option>Điều hoà</option>
						<option>TV</option>
						<option>AVR</option>
						<option>Extension</option>
						<option>UPS</option>
						<option>Router</option>
						<option>Bàn</option>
						<option>Ghế</option>
						<option>Switch Hub</option>
					</select>
				</div>
				<div class="form-group">
					<label>Hãng</label>
					<input type="text" name="e_brand" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Ghi chú</label>
					<textarea name="e_description" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label>Số lượng</label>
					<input type="number" name="e_stock" class="form-control" min="1" required>
				</div>
				<div class="form-group hide">
					<label>Phòng chứa</label>
					<select name="e_assigned" class="form-control" required>
					</select>
				</div>
				<div class="form-group">
					<label>Loại</label>
					<select type="text" name="e_type" class="form-control" required>
						<option disabled selected>Hãy chọn loại</option>
						<option>Tiêu hao</option>
						<option>Không tiêu hao</option>
					</select>
				</div>
				<div class="form-group">
					<label>Hiện trạng</label>
					<select name="e_status" class="form-control" required>
						<option disabled selected>Hãy chọn hiện trạng</option>
						<option value="1">Mới</option>
						<option value="2">Cũ</option>
					</select>
				</div>

				<div class="form-group">
					<label>MR</label>
					<input type="text" name="e_mr" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Giá</label>
					<input type="text" name="e_price" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Ảnh</label>

					<input type="file" name="e_photo" for="inputPassword3" class="form-control" required />

				</div>


				<div class="form-group">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button class="btn btn-danger btn-block cancel-equipment" type="button">
								<i class="fa fa-remove"></i>
								Thoát
							</button>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<button class="btn btn-primary btn-block" type="submit">
								Thêm
								<i class="fa fa-check"></i>
							</button>
						</div>
					</div>
				</div>
				<br>
				<br>
				<br>
			</form>
		</div>
	</div>
</div>


<div class="right-sidebar equipment-view">
	<div class="sidebar-form equipment-form">

	</div>
</div>



<?php include 'footer.php'; ?>