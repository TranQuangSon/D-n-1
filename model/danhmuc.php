<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO category(name_dm) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "DELETE FROM category where id=" . $id;
    pdo_query($sql);
}
function load_danhmuc()
{
    $sql = "SELECT * FROM category ORDER BY id desc";
    $listdm = pdo_query($sql);
    return  $listdm;
}
function load_1st_danhmuc($id)
{
    $sql = "SELECT * FROM category WHERE id=" . $id;
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}
function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE category SET name_dm='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}

?>