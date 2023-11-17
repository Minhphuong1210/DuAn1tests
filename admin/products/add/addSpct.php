<div class="row">
            <div class="row frmtitle"><h1>Thêm mới sản phẩm</h1></div>
            <div class="row fromcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb">
                       danh mục <br>
                   <select name="iddm" id="">
                    <?php
                       $listdm=load_all_danhmuc();
                    foreach ($listdm as $dm){
                        extract(($dm));
                        echo ' <option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
                   
                   </select>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" id="">
                    </div>

                    <div class="row mb">
                        Hình <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb">
                       Mô tả <br>
                        <textarea name="motasp" id="" cols="30" rows="10"></textarea>
                    </div>
<!-- sản phẩm biến thể -->
                    <div class="row frmtitle"><h1>Thêm mới Chi tiết sản phẩm</h1></div>

                    <?php
                       $listcolor=color();
                    foreach ($listcolor as $color){
                        extract(($color));
                        echo ' <option value="'.$id.'">'.$mau.'</option>';
                    }
                    ?>
                    <div class="row mb">
                        kích cỡ <br>
                        <input type="number" name="size" id="" min=32 max=43 >   
                    </div>
                    <div class="row mb">
                        Số lượng <br>
                        <input type="number" name="quantity" id="">   
                    </div>
                    <div class="row mb">
                        <input type="submit" name="themmoi" id="" value="Thêm mới">
                        <input type="reset" name="" id="" value="Nhập lại">
                      <a href="index.php?act=listsp">  <input type="button" name="" id="" value="danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
          </div>
    </div>