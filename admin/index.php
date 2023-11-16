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
        }

    }else{
    include "home.php";
    }
    include "footer.php";
?>