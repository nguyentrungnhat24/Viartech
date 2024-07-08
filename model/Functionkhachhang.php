<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
function themkh($image,$sodt,$email,$diachi,$tenkh){
    $conn=connectdb();
    $sql="INSERT INTO tb_khachhang(idpt,image,sodt,email,diachi,tenkh)  VALUES ('3','".$image."','".$sodt."','".$email."','".$diachi."','".$tenkh."')";
    $conn->exec($sql);
}
function themkhdk($tenkh, $sodt, $email, $diachi){
    $conn=connectdb();
    $sql="INSERT INTO tb_khachhang(tenkh, sodt, email,diachi)  VALUES ('".$tenkh."', '".$sodt."','".$email."','".$diachi."')";
    $conn->exec($sql);
}
function updatekh($id,$tenkh,$image,$sodt,$email,$diachi){
    $conn=connectdb();
    if($image==""){
        $sql = "UPDATE tb_khachhang SET tenkh='".$tenkh."', sodt='".$sodt."', email='".$email."', diachi='".$diachi."' WHERE id=".$id;
    }else{
        $sql = "UPDATE tb_khachhang SET tenkh='".$tenkh."', image='".$image."',sodt='".$sodt."', email='".$email."', diachi='".$diachi."' WHERE id=".$id;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getonekh($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_khachhang WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function delkh($id){
    $conn=connectdb();
    $sql="DELETE FROM tb_khachhang WHERE id=".$id;
    $conn->exec($sql);
}
function getall_khachhang($idpt=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM tb_khachhang WHERE 1";
  
   
    if($idpt>0) $sql.=" AND idpt=".$idpt;
     if($kyw!="") $sql.=" AND tenkh like '%".$kyw."%'";
     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function getall_danhmuckhachhang(){
  $conn=connectdb();
  $stmt = $conn->prepare("SELECT * FROM tb_khachhang");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $ketqua=$stmt->fetchAll();
  return $ketqua;
}

function showpro2($dskh){
    $i=1;
          foreach ($dskh as $kh){
            echo '
            
            <tr>
            <td>'.$i.'</td>
            <td>'.$kh['tenkh'].'</td>
            <td><img style="width: 120px;height:100px" src="../'.$kh['image'].'"></td>
            <td>'.$kh['sodt'].'</td>
            <td>'.$kh['email'].'</td>
            <td>'.$kh['diachi'].'</td>
            <td></td>
            <td></td>
           <td>
            <a class=" form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=updatekh&id='.$kh['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </td>
            <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delkh&id='.$kh['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>';
            $i++;
          }
        }
        // function showpro5($ds){
        //   $i=1;
        //         foreach ($ds as $kh){
        //           echo '
        //           <tr>
        //           <td>'.$i.'</td>
        //           <td>'.$kh['dichvu'].'</td>
        //           <td>'.$kh['soluong'].'</td>
        //           <td>'.$kh['gia'].'</td>
        //           <td>'.$kh['ngaybd'].'</td>
        //           <td>'.$kh['ngaykt'].'</td>
        //           <td>'.$kh['trangthai'].'</td>
        //           <td>
        //           <a class=" form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=updatekh&id='.$kh['id'].'">Gia hạn</a>
        //           </td>
        //           <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delkh&id='.$kh['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        //           </tr>';
        //           $i++;
        //         }
        //       }
?>