<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
function themgt($idkh,$iddmgoitap,$tengt, $soluong, $gia,$ngaybatdau,$ngayhethan){
    $conn=connectdb();
    $sql="INSERT INTO tb_goitap(idkh,iddmgoitap,tengt,soluong,gia,ngaybatdau,ngayhethan)  VALUES ('".$idkh."','".$iddmgoitap."','".$tengt."','".$soluong."','".$gia."','".$ngaybatdau."','".$ngayhethan."')";
    $conn->exec($sql);
}
// function updategt($id,$tengt, $soluong, $gia,$ngaybatdau,$ngayhethan,$idkh,$iddmgoitap){
//     $conn=connectdb();
//     $sql = "UPDATE tb_goitap SET tengt='".$tengt."', soluong='".$soluong."', gia='".$gia."', ngaybatdau='".$ngaybatdau."', ngayhethan='".$ngayhethan."',idkh='".$idkh."',iddmgt='".$iddmgoitap."' WHERE id=".$id;
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
// }
// function getonegt($id){
//     $conn=connectdb();
//     $stmt = $conn->prepare("SELECT * FROM tb_goitap WHERE id=".$id);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $ketqua=$stmt->fetchAll();
//     return $ketqua;
// }
// function delgt($id){
//     $conn=connectdb();
//     $sql="DELETE FROM tb_goitap WHERE id=".$id;
//     $conn->exec($sql);
// }
// function getall_goitap($idkh=0,$iddmgoitap=0,$kyw=""){
//     $conn=connectdb();
//     $sql="SELECT * FROM tb_goitap WHERE 1";
   
//     if($idkh>0) $sql.=" AND idkh=".$idkh;
//     if($iddmgoitap>0) $sql.=" AND iddmgoitap=".$iddmgoitap;
//      if($kyw!="") $sql.=" AND tenloptap like '%".$kyw."%'";
//      $sql.=" order by id DESC";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $ketqua=$stmt->fetchAll();
//     return $ketqua;
// }
function getall_goitap1($idkh=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM loptap WHERE 1";
   
    if($idkh>0) $sql.=" AND idkh=".$idkh;
    
     if($kyw!="") $sql.=" AND tenloptap like '%".$kyw."%'";
     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function getall_goitap2($iddmgoitap=0,$kyw=""){
    $conn=connectdb();
    $sql="SELECT * FROM loptap WHERE 1";
    if($iddmgoitap>0) $sql.=" AND iddmgoitap=".$iddmgoitap;
  
    
     if($kyw!="") $sql.=" AND tenloptap like '%".$kyw."%'";
     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}

function showpro6($ds){
$i=1;
      foreach ($ds as $gt){
        echo '
        <tr>
        <td>'.$i.'</td>
        <td>'.$gt['tenloptap'].'</td>
        <td>'.$gt['gia'].'</td>
        <td>'.$gt['thoigian'].'</td>
        
      
        <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delgt&id='.$gt['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>';
        $i++;
      }
  }
            function showpro4($ds){
                $i=1;
                $tong=0;
                      foreach ($ds as $kh){
                        $tt=$kh['gia']*$kh['soluong'];
                        $tong+=$tt;
                        echo '
                        <tr>
                        <td>'.$i.'</td>
                        <td>'.$kh['tengt'].'</td>
                        <td>'.$kh['soluong'].'</td>
                        <td>'.$kh['gia'].'</td>
                        <td>'.$tt.'</td>
                        <td><a style="font-size:15px" class="ms-5 me-5 pt-1 pb-1 text-bg-danger d-flex justify-content-center " href = "controllers.php?act=delgt&id='.$kh['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>';
                        $i++;
                      }
                      echo '<tr><td colspan="4" ></td><td class="text-bg-warning">Tổng tiền thu được: </td><td class="text-bg-warning">'.$tong.' vnđ</td></tr>';
                    }
?>