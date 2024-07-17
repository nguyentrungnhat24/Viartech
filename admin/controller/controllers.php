<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
  session_start();
  ob_start();
  if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../../model/db.php";
    include "../../model/user.php";
    include "../../model/Function_baiviet.php";
    include "../../model/Functiondanhmucdungcu.php";
    include "../../model/Functiondungcu.php";
  
    $dsdmdc = getall_danhmucdungcu();
    $dskh = getall_baiviet();
    $dssh = getall_slideheader();
    $dssb = getall_slidebody();



    include "../view/header.php";
    if (isset($_GET['act'])) {
      switch ($_GET['act']) {
        case 'trangchu':
          include "../view/trangchu.php";
          break;
          // ------------------------------------------ Bai viet -----------------------------------
        case 'gioithieu':
          $dskh = getall_baiviet();
          include "../view/about.php";
          break;
        case 'baiviet_add':
          if (isset($_POST['themmoibaiviet']) && ($_POST['themmoibaiviet'])) {
    
            $image = $_FILES['image']['name'];
            $mota = $_POST['mota'];
            $target_dir = "uploaded/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $image = $target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (
              $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif"
            ) {
              // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
            }
            if ($uploadOk == 1) {

              move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
              thembaiviet( $image, $mota);
            }
          }
          $dskh = getall_baiviet();
          include "../view/about.php";
          break;
          case 'delete_baiviet':
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
              deletebaiviet($id);
            }
            $dskh = getall_baiviet();
            include "../view/about.php";
            break;
          case 'update_baiviet':
  
  
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
              $bvct = getone_baiviet($_GET['id']);
            }
            $dskh = getall_baiviet();
            // $ketqua = getall_dungcu();
            include "../view/update_baiviet.php";
            break;
          case 'baiviet_update':
  
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
              $image = $_FILES['image']['name'];
              $mota = $_POST['mota'];
              $id = $_POST['id'];
  
              if ($_FILES['image']['name'] != "") {
  
                $target_dir = "uploaded/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $image = $target_file;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (
                  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  && $imageFileType != "gif"
                ) {
                  // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  $uploadOk = 0;
                }
                if ($uploadOk == 1) {
  
                  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                }
              } else {
                $image = "";
              }
              updatebaiviet($id, $image, $mota);
            }
            $dskh = getall_baiviet();
            include "../view/about.php";
            break;
          // -----------------------------------------Slide header--------------------------------
          case 'slideheader':
            $dssh = getall_slideheader();
            include "../view/about.php";
            break;
          case 'header_add':
            if (isset($_POST['themmoiheader']) && ($_POST['themmoiheader'])) {
      
              $tieude = $_POST['tieude'];
              $mota = $_POST['mota'];
             
             
  
           
                themslideheader( $tieude, $mota);
            }
            
            $dssh = getall_slideheader();
            include "../view/about.php";
            break;
            case 'delete_slideheader':
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteslideheader($id);
              }
              $dssh = getall_slideheader();
              include "../view/about.php";
              break;
            case 'update_slideheader':
    
    
              if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bvct = getone_slideheader($_GET['id']);
              }
              $dssh = getall_slideheader();
              // $ketqua = getall_dungcu();
              include "../view/update_slideheader.php";
              break;
            case 'slideheader_update':
    
              if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $tieude = $_POST['tieude'];
                $mota = $_POST['mota'];
                $id = $_POST['id'];
    
              
                updateslideheader($id, $tieude, $mota);
              }
              $dssh = getall_slideheader();
              include "../view/about.php";
              break;

          // -----------------------------------------Slide body--------------------------------
          case 'slidebody':
            $dssb = getall_slidebody();
            include "../view/about.php";
            break;
          case 'slidebody_add':
            if (isset($_POST['themmoislidebody']) && ($_POST['themmoislidebody'])) {
      
              $tieude = $_POST['tieude'];
              $mota = $_POST['mota'];
              $image = $_FILES['image']['name'];
              $target_dir = "uploaded/";
              $target_file = $target_dir . basename($_FILES["image"]["name"]);
              $image = $target_file;
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
              if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
              ) {
                // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
              }
              if ($uploadOk == 1) {

                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                themslidebody( $image,$tieude, $mota);
              }
              
  
           
               
            }
            
            $dssb = getall_slidebody();
            include "../view/about.php";
            break;
            case 'delete_slidebody':
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
                deleteslidebody($id);
              }
              $dssb = getall_slidebody();
              include "../view/about.php";
              break;
            case 'update_slidebody':
    
    
              if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $cnct = getone_slidebody($_GET['id']);
              }
              $dssb = getall_slidebody();
              // $ketqua = getall_dungcu();
              include "../view/update_slidebody.php";
              break;
            case 'slidebody_update':
    
              if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $tieude = $_POST['tieude'];
                $mota = $_POST['mota'];
                $id = $_POST['id'];
                $image = $_FILES['image']['name'];
    
                if ($_FILES['image']['name'] != "") {
    
                  $target_dir = "uploaded/";
                  $target_file = $target_dir . basename($_FILES["image"]["name"]);
                  $image = $target_file;
                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                  if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                  ) {
                    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                  }
                  if ($uploadOk == 1) {
    
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                  }
                } else {
                  $image = "";
                }
              
                updateslidebody($id,$image, $tieude, $mota);
              }
              $dssb = getall_slidebody();
              include "../view/about.php";
              break;
          // -------------------------------------------------------------------------------------
        case 'danhmucdungcu':
          $ketqua = getall_danhmucdungcu();
          include "../view/danhmucdungcu.php";
          break;
        case 'dungcu':
          $id = "";
          //$ketqua = getall_sanpham();
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
          }
          $kyw = "";
          if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
            $kyw = $_POST['kyw'];
          } else {
            $kyw = "";
          }
          $dsdc = getall_dungcu($id, $kyw);
          include "../view/dungcu.php";
          break;
        case 'dungcu_add':

          if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $iddmdc = $_POST['iddmdc'];
            $image = $_FILES['image']['name'];
            $tendc = $_POST['tendc'];
            $gia = $_POST['gia'];
            $tinhtrang = $_POST['tinhtrang'];
            $soluong = $_POST['soluong'];
            // if($_FILES['image']['tmp_name']!="") $image_tmp = $_FILES['image']['tmp_name']; else $image="";
  
            $target_dir = "uploaded/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $image = $target_file;
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (
              $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif"
            ) {
              // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
            }
            if ($uploadOk == 1) {

              move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
              themdc($iddmdc, $image, $tendc, $gia, $tinhtrang, $soluong);
            }
          }
          $dsdc = getall_dungcu();
          $ketqua = getall_dungcu();
          include "../view/dungcu.php";
          break;
        case 'updatedc':
          $dsdmdc = getall_danhmucdungcu();
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {

            $dcct = getonedc($_GET['id']);
          }
          $dsdc = getall_dungcu();
          // $ketqua = getall_dungcu();
          include "../view/updatedc.php";
          break;
        case 'dungcu_update':
          $dsdmdc = getall_danhmucdungcu();
          if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
            $iddmdc = $_POST['iddmdc'];
            $image = $_FILES['image']['name'];
            $tendc = $_POST['tendc'];
            $gia = $_POST['gia'];
            $tinhtrang = $_POST['tinhtrang'];
            $soluong = $_POST['soluong'];
            $id = $_POST['id'];

            if ($_FILES['image']['name'] != "") {

              $target_dir = "uploaded/";
              $target_file = $target_dir . basename($_FILES["image"]["name"]);
              $image = $target_file;
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
              if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
              ) {
                // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
              }
              if ($uploadOk == 1) {

                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                // themsp($iddm,$image,$tensp,$gia);
              }
            } else {
              $image = "";
            }
            updatedc($id, $image, $tendc, $gia, $tinhtrang, $soluong, $iddmdc);
          }
          $dsdc = getall_dungcu();
          $ketqua = getall_dungcu();
          include "../view/dungcu.php";
          break;
        case 'deldc':
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            deldc($id);
          }
          $dsdc = getall_dungcu();
          $ketqua = getall_dungcu();
          include "../view/dungcu.php";
          break;
        // ------------------------------------------------
        case 'user':

          include "../view/updateuser.php";
          break;
        case 'user_update':
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $ketqua = getoneuser($_GET['id']);
            include "../view/updateuser.php";
          }
          if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $user = $_POST['user'];

            $pass = $_POST['pass'];


            updatetaikhoan($id, $user, $pass);
            include "../view/updateuser.php";
          }




          break;

        //------------------------------------------------
  

        case 'thoat':

          header('Location: /../../');
          break;
        default:
          include "../view/trangchu.php";
          break;
      }
    } else {
      include "../view/trangchu.php";
    }

    include "../view/footer.php";
    exit();


  }

  if (isset($_SESSION['role']) && ($_SESSION['role'] == 0)) {
    echo $_SESSION['role'];
    header('Location: ../../user/controller/controllers.php');
    exit(); // Đảm bảo kết thúc thực thi sau khi chuyển hướng
  }

  ?>
</body>

</html>