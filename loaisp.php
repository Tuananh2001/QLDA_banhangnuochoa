<?php
    $sql_loai = "SELECT * FROM loaisp  ORDER BY maloai ASC";
    $query_loai = mysqli_query($conn,$sql_loai);
?>

<?php
    
    while ($row_loai = mysqli_fetch_array($query_loai)) {
       ?>
            <a href="sanpham.php?page=SP&maloai=<?php echo $row_loai['maloai']; ?>">
                <input type="checkbox" class="ploai" name="loai" value="" ><?php echo $row_loai['tenloai'] ?>
            </a>
           <style>
               a{
                   text-decoration: none;
                   color: #6e6b6b;
               }
           </style>
        <?php
    }
?>
