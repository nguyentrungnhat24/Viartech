<?php
function updatetaikhoan($id,$user,$pass){
    $conn=connectdb();
    $sql = "UPDATE user SET user='".$user."', pass='".$pass."' WHERE id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function checkuser($user,$pass){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE user='".$user."' AND pass='".$pass."'");
    $stmt->execute();
    $result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    if(count($kq)>0) return $kq[0]['role'];
    else return 0;
    
}
function getoneuser($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function getall_user(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
?>