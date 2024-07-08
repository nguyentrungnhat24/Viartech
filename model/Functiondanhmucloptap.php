 <?php
// function themdm($tendmgoitap){
//     $conn=connectdb();
//     $sql="INSERT INTO tb_danhmucgoitap (tendmgoitap)  VALUES ('".$tendmgoitap."')";
//     $conn->exec($sql);
// }
// function updatedmgt($id,$tendmdc){
//     $conn=connectdb();
//     $sql = "UPDATEtb_danhmucdungcu SET tendmdc='".$tendmdc."' WHERE id=".$id;
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
// }
// function getonedmgt($id){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tb_danhmucgoitap WHERE id=".$id);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $ketqua=$stmt->fetchAll();
//     return $ketqua;
// }
// function deldm($id){
//     $conn=connectdb();
//     $sql="DELETE FROM tb_danhmucgoitap WHERE id=".$id;
//     $conn->exec($sql);
// }
function getall_danhmucloptap(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_danhmucloptap");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
} 
?>