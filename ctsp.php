<?php 
    $sql_ctsp = "SELECT * FROM sanpham, loaisp where sanpham.maloai = loaisp.maloai and sanpham.masp = '$_GET[masp]' LIMIT 1";
    $query_ctsp = mysqli_query($conn,$sql_ctsp);

    
?>
<?php
    while ($row_ctsp = mysqli_fetch_array($query_ctsp)) {?>
               
               <div class="details__container">
               
                   <form style = " display: flex;" method="post" action="cart.php?action=add&masp=<?php echo $row_ctsp['masp']; ?>">
                    <div class="details__img">
                        <img src="./accset/img/<?php echo $row_ctsp['anh'] ?>" alt="" width=  "550px" height=  "500px">
                    </div>
                    <div class="details__content">
                        <div class="list__details">
                            <a href="index.php">Trang chủ</a>
                            <span>/</span>
                            <a href="sanpham.php?page=SP&maloai=<?php echo $row_ctsp['maloai']; ?>"><?php echo $row_ctsp['tenloai'] ?></a>
                        </div>
                        <div class="details__title">
                            <h1><?php echo $row_ctsp['tensp'] ?></h1>
                        </div>
                        <div class="border__details"></div>
                        <div class="details__price">
                            <span><?php echo number_format($row_ctsp['gia'],0,',','.').'vnđ' ?></span>
                        </div>
                        <div class="description__product">
                            <p><?php echo $row_ctsp['mota'] ?></p>
                        </div>
                        <div class="number__product">
                            <a href="">-</a>
                            <p >1</p>
                            <a href="">+</a>
                                <input style="margin-left: 30px;" type="submit" name="add"  class="btn__price"
                                        value="Thêm vào giỏ">
                                    </div>
                                    <div class="category__details">
                                        <p>Danh mục: <a href="sanpham.php?page=SP&maloai=<?php echo $row_ctsp['maloai']; ?>"><?php echo $row_ctsp['tenloai'] ?></a></p>
                                    </div>
                                </div>
                            </form>
                </div>
                <div class="category__description">
                    <div class="category__description-title">
                        <h4>Mô tả</h4>
                    </div>
                    <div class="category__description-text">
                        <p><?php echo $row_ctsp['Mota'] ?></p> 
                    </div>
                </div>
    <?php 
}
?>
