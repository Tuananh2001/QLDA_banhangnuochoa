
<?php
    include ("admin/config/config.php"); 
    $sql_pro = "SELECT * FROM sanpham  ORDER BY masp ASC";
    
    $query_pro = mysqli_query($conn,$sql_pro);
?>

<?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
       ?>
       <a href="ctsanpham.php?page=ctsp&masp=<?php echo $row_pro['masp']; ?>&maloai=<?php echo $row_pro['maloai']; ?>">
           <div class="swiper-slide">
               <form method="post" action="cart.php?action=add&masp=<?php echo $row_pro['masp']; ?>">
                   <div class="box">
                       <div class="slide-img">
                           <img alt="8" src="./accset/img/<?php echo $row_pro['anh'] ?>">
                       </div>
                       <div class="detail-box">
                           <div class="type">
                               <p> <a href=""><?php echo $row_pro['tensp'] ?></a></p>
                           </div>
                           <div class="price">
                               <a href="#" class="price-link"><?php echo number_format($row_pro['gia'],0,',','.').'vnđ' ?></a>
                           </div>
                           <input type="submit" name="add" style="margin-top: 5px;" class="btn__price"
                                          value="Thêm vào giỏ">
                       </div>
                   </div>
               </form>	
           </div>
       </a>
       <?php
    }
?>
