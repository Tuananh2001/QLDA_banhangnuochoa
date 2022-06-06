<?php
    include("./config/config.php")
?>
<div class="x_panel">
  <div class="x_title">
    <h2>Thống kê sản phẩm <small></small></h2>
    <ul class="nav navbar-right panel_toolbox">
      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Settings 1</a>
            <a class="dropdown-item" href="#">Settings 2</a>
          </div>
      </li>
      <li><a class="close-link"><i class="fa fa-close"></i></a>
      </li>
    </ul>
  <div class="clearfix"></div>
</div>
<div class="x_content">
  <div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
        <div class="col-sm-6"><div id="datatable_filter" class="dataTables_filter"><label> <class="form-control" input-sm placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
        <thead>
          <tr style= "background-color: #2a3f54;color: #fff;" role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Loại sản phẩm</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Số lượng mặt hàng</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Tổng số sản phẩm</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 150px;">Giá cao nhất</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Giá thấp nhất</th>
            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">Giá trung bình</th>
    
          </tr>
        </thead>
        <tbody>
          <?php
           
            $qry = $conn->query("select LoaiSP.tenloai, COUNT(*) as 'soluong',SUM(soluong) as 'soluong1', MAX(sanpham.gia) as 'giacao', MIN(sanpham.gia) as 'giathap',  AVG(sanpham.gia) as 'giatb' from LoaiSP JOIN sanpham ON LoaiSP.maloai = sanpham.maloai GROUP BY loaiSP.maloai");
            while($row= $qry->fetch_assoc()):
          ?>
          <tr>
            <td><b><?php echo $row['tenloai'] ?></b></td>
            <td><b><?php echo $row['soluong'] ?></b></td>
            <td><b><?php echo $row['soluong1'] ?></b></td>
            <td><b><?php echo ($row['giacao'])?></b></td>
            <td><b><?php echo $row['giathap'] ?></b></td>
            <td><b><?php echo ($row['giatb']) ?></b></td>
            
            
              </div>
            
          </tr>	
          <?php endwhile; ?>
        </tbody>
        </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite"></div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
      </div>
    </div>
  </div>
</div>