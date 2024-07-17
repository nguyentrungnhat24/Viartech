<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
function thembaiviet($image,$mota){
    $conn=connectdb();
    $sql="INSERT INTO tb_baiviet(image,mota)  VALUES ('".$image."','".$mota."')";
    $conn->exec($sql);
}
function updateluotxem(){
    $conn=connectdb();
    $sql = "UPDATE tb_baiviet SET luotxem=luotxem+1 WHERE id=1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function danhgia($emailUser,$sao){
    $conn=connectdb();
    $sql="INSERT INTO tb_danhgia(emailUser, sao)  VALUES ('".$emailUser."','".$sao."')";
    $conn->exec($sql);
}
function getall_danhgia(){
    $conn=connectdb();
    $sql="SELECT * FROM tb_danhgia WHERE 1";
     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function updatebaiviet($id,$image,$mota){
    $conn=connectdb();
    if($image==""){
        $sql = "UPDATE tb_baiviet SET mota='".$mota."' WHERE id=".$id;
    }else{
        $sql = "UPDATE tb_baiviet SET mota='".$mota."', image='".$image."' WHERE id=".$id;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getone_baiviet($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_baiviet WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function deletebaiviet($id){
    $conn=connectdb();
    $sql="DELETE FROM tb_baiviet WHERE id=".$id;
    $conn->exec($sql);
}
function getall_baiviet(){
    $conn=connectdb();
    $sql="SELECT * FROM tb_baiviet WHERE 1";
     $sql.=" order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function getall_kqdanhgia(){
    $conn=connectdb();
    $sql="SELECT * FROM tb_kqdanhgia WHERE 1";
    $stmt = $conn->prepare($sql);
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

            <td><img style="width: 120px;height:100px" src="../controller/'.$kh['image'].'"></td>
            <td>'.$kh['mota'].'</td>

            <td>
            <a class=" form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=update_baiviet&id='.$kh['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </td>
            <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delete_baiviet&id='.$kh['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>';
            $i++;
          }
        }
//------------------------------------------------------Slide header-------------------------------------------
function themslideheader($tieude,$mota){
    $conn=connectdb();
    $sql="INSERT INTO tb_slideheader(tieude,mota)  VALUES ('".$tieude."','".$mota."')";
    $conn->exec($sql);
}
function updateslideheader($id,$tieude,$mota){
    $conn=connectdb();
    
    $sql = "UPDATE tb_slideheader SET mota='".$mota."', tieude='".$tieude."' WHERE id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getone_slideheader($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_slideheader WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function deleteslideheader($id){
    $conn=connectdb();
    $sql="DELETE FROM tb_slideheader WHERE id=".$id;
    $conn->exec($sql);
}
function getall_slideheader(){
    $conn=connectdb();
    $sql="SELECT * FROM tb_slideheader WHERE 1";
     $sql.=" order by id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function show_slideheader($dssh){
    $i=1;
          foreach ($dssh as $ds){
            echo '
            
            <tr>

                <td>'.$ds['tieude'].'</td>
                <td>'.$ds['mota'].'</td>

                <td>
                <a class=" form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=update_slideheader&id='.$ds['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </td>
                <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delete_slideheader&id='.$ds['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>';
            $i++;
          }
        }
//------------------------------------------------------Slide body-------------------------------------------
function themslidebody($image,$tieude,$mota){
    $conn=connectdb();
    $sql="INSERT INTO tb_slidebody(image,tieude,mota)  VALUES ('".$image."','".$tieude."','".$mota."')";
    $conn->exec($sql);
}
function updateslidebody($id,$image,$tieude,$mota){
    $conn=connectdb();
    if($image==""){
        $sql = "UPDATE tb_slidebody SET  tieude='".$tieude."', mota='".$mota."' WHERE id=".$id;

    }else{
        $sql = "UPDATE tb_slidebody SET image='".$image."', tieude='".$tieude."', mota='".$mota."' WHERE id=".$id;

    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getone_slidebody($id){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tb_slidebody WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function deleteslidebody($id){
    $conn=connectdb();
    $sql="DELETE FROM tb_slidebody WHERE id=".$id;
    $conn->exec($sql);
}
function getall_slidebody(){
    $conn=connectdb();
    $sql="SELECT * FROM tb_slidebody WHERE 1";
     $sql.=" order by id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $ketqua=$stmt->fetchAll();
    return $ketqua;
}
function show_slidebody($dsbd){
    $i=1;
          foreach ($dsbd as $ds){
            echo '
            
            <tr>
                <td><img style="width: 120px;height:100px" src="../controller/'.$ds['image'].'"></td>
                <td>'.$ds['tieude'].'</td>
                <td>'.$ds['mota'].'</td>

                <td>
                <a class=" form-control text-bg-warning text-decoration-none text-center" href = "controllers.php?act=update_slidebody&id='.$ds['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </td>
                <td><a class="p-2 form-control text-bg-danger text-center" href = "controllers.php?act=delete_slidebody&id='.$ds['id'].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>';
            $i++;
          }
        }
?>