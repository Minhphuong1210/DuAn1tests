<?php
    include "../model/pdo.php";
    include "../model/categories.php";
    include "header.php";
 
    if (isset($_GET["act"])) {
        $act=$_GET["act"];
        switch ($act) {
// Danh muc
            case "adddm":
                if(isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                    $tenloai=$_POST['tenloai'];
                    insert_dm($tenloai);
                    $thongbao="Thêm thành công";
                }
                
                include "categories/add.php";
                break;

            case "list":  
                $listdm=load_all_danhmuc();
                    include "categories/list.php";
                    break;
            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    xoadm($_GET['id']);
                }
                $listdm=load_all_danhmuc();
                include "categories/list.php";
                break;
        
            case 'suadm':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $suaDm=load_one_dm($_GET['id']);
                    }
                    include "categories/update.php";
                    break;    
                
            case 'updatedm':
                    if(isset($_POST['capnhat']) && $_POST['capnhat']){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_dm($id,$tenloai);
                        $thongbao="Thêm thành công";
                    }
                    $listdm=load_all_danhmuc();
                    include "categories/list.php";
                    break;
            case 'addsp':
                    if(isset($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        // hình
                        $target_dir = "upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }

                        $motasp =$_POST['motasp'];
                        $color =$_POST['color'];
                        $size =$_POST['size'];
                        $listcolor =color();
                        insertsp($tenloai,$giasp,$hinh,$motasp,$color,$size,$iddm);
                        $thongbao="Thêm thành công";
                        }
                    
                        include "products/addsp.php";
                        break;



            case "addColor":
                if(isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                    $id=$_POST['id'];
                    $mau=$_POST['mau'];
                    insert_color($mau);
                     $thongbao="Thêm thành công";
                    }
                        
                        include "products/addColor.php";
                        break;
         }
               
        }

     else{
    include "home.php";
    }
    include "footer.php";
?>