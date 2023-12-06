<?php
    function insert_binhluan($content, $iduser, $idpro, $commentdate){
        $sql="INSERT INTO `comment`(`content`, `iduser`, `idpro`, `commentdate`) VALUES ('$content', '$iduser', '$idpro', '$commentdate')";
        //Dùng để thực thi CSDL
        pdo_execute($sql);
    }

    function loadall_binhluan($idpro){ //15.2 gửi bình luận
        $sql="SELECT * FROM comment WHERE 1";
        if($idpro>0) $sql.=" AND idpro= '".$idpro."' ";
        $sql.=" ORDER BY id desc"; 
        $listbl=pdo_query($sql);
        return $listbl;
    }
    function delete_binhluan($id)
{
    $sql = "DELETE FROM comment where id=" . $id;
    pdo_query($sql);
}
?>
