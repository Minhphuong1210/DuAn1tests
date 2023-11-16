<div class="row">
            <div class="row frmtitle"><h1>Danh sách loại hàng </h1></div>
            <div class="row fromcontent">
              <div class="row mb frmdsloai table">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ($listdm as $list){
                            // var_dump($list);
                            extract($list);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo'<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>
                                        <a href="'.$suadm.'"><input type="button" value="sửa"></a>
                                        <a href="'.$xoadm.'"><input type="button" value="xóa"></a>
                                    </td>
                                </tr>';
                        }
                    ?>
                </table>
              </div>
            </div>
            <div class="row mb">
                <input type="button" name="" id="" value="Chọn tất cả">
                <input type="button" name="" id="" value="Bỏ chọn tất cả">
                <input type="button" name="" id="" value="xóa các mục đã chọn">
              <a href="index.php?act=adddm">  <input type="button" name="" id="" value="Nhập thêm"></a>
            </div>
          </div>