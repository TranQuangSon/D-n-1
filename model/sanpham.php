<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql="INSERT INTO `product`( `name`, `price`, `img`, `describe`, `iddm`) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="DELETE FROM product where id=".$id;
        pdo_execute($sql);
    }
    function load_sanpham_top10(){
        $sql="SELECT * FROM product WHERE 1 order by view DESC limit 0,6";
        $listsp = pdo_query($sql);
        return  $listsp;
    }
    function load_sanpham_home(){
        $sql="SELECT * FROM product";
        $listsp = pdo_query($sql);
        return  $listsp;
    }
    function loadall_sanpham($kyw="",$iddm){
        $sql="SELECT * FROM product WHERE 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" AND iddm = '".$iddm."'";
        }
        $sql.=" ORDER BY id desc";
        $listsp = pdo_query($sql);
        return  $listsp;
    }
    function load_1st_sanpham($id){
        $sql="SELECT * FROM product WHERE id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_ten_dm($iddm){
        if($iddm>0){
        $sql="SELECT * FROM category WHERE id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name_dm;
        }else{
            return "";
        }
    }
    function load_sanpham_cungloai($id,$iddm){
        $sql="SELECT * FROM product WHERE iddm=".$iddm." AND id <>".$id;
        $listsp = pdo_query($sql);
        return  $listsp;
    }
    function update_sanpham($id, $iddm, $tensp, $giasp,$describe,$hinh){
        if($hinh!="")
        $sql="UPDATE `product` SET `iddm`='".$iddm."',`name`='".$tensp."',`price`='".$giasp."',`img`='".$hinh."',`describe`='".$describe."' WHERE id=".$id;
        else
        $sql="UPDATE `product` SET `iddm`='".$iddm."',`name`='".$tensp."',`price`='".$giasp."',`img`='".$hinh."',`describe`='".$describe."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>