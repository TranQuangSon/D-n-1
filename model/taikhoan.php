<?php
      function insert_taikhoan($email,$user,$pass,$address,$tel){
        $sql="INSERT INTO `account`( `email`, `user`, `pass`, `address`, `tel`) VALUES ('$email','$user','$pass','$address','$tel')";
        pdo_execute($sql);
    }

    function checkuser($user, $pass){ //14.3 Đăng nhập
        $sql= "SELECT * FROM account WHERE user='".$user."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    
    function checkemail($email){ //14.4 Quên mật khẩu
        $sql= "SELECT * FROM account WHERE email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id, $user, $pass, $email, $address, $tel){// 14.4 cập nhật tài khoản
        $sql="UPDATE account SET user='".$user."', pass='".$pass."', email='".$email."', address='".$address."' , tel='".$tel."' WHERE id=".$id;
        //Dùng để thực thi CSDL
        pdo_execute($sql);
    }
    function loadall_taikhoan(){ // 14.7 quản lí tài khoản
        $sql="SELECT * FROM account ORDER BY id desc"; 
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function delete_taikhoan($id){
        $sql="DELETE FROM account where id=".$id;
        pdo_query($sql);
    }
    function load_one_taikhoan($id){
        $sql="SELECT * FROM account WHERE id=".$id;
        $sanpham=pdo_query_one($sql);
        return $sanpham;
    }
?>