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
    include "../../model/Functionnhanvien.php";
    // include_once "../../model/Functiongoitap.php";
    include "../../model/Functionkhachhang.php";
    include "../../model/Functiondanhmucdungcu.php";
    include "../../model/Functiondanhmucloptap.php";
    include "../../model/Functiondungcu.php";
    include "../../model/FunctionPT.php";
    include "../../model/Functionloptap.php";
    include "../../model/Functionlichtap.php";
    // $dsdmgt = getall_danhmucgoitap();
    $dsdmpt = getall_dmpt();
    $dsdmdc = getall_danhmucdungcu();
    $dskh = getall_khachhang();
    $dmlt = getall_danhmucloptap();


    include "../view/header.php";
    if (isset($_GET['act'])) {
      switch ($_GET['act']) {
        case 'trangchu':
          include "../view/trangchu.php";
          break;

        case 'bmi':
          include "../view/bmi.php";
          break;

        case 'lichtap':
          $dslt = getall_lichtap();
          include "../view/lichtap.php";
          break;
        case 'them':

          include "../view/them.php";
          break;
        // -------------------------------
        case 'nhanvien':
          $dsnv = getall_nhanvien();
          $ketqua = getall_nhanvien();
          include "../view/nhanvien.php";
          break;
        case 'nhanvien_add':
          if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $image = $_FILES['image']['name'];
            $tennv = $_POST['tennv'];
            $sodt = $_POST['sodt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $vaitro = $_POST['vaitro'];
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
              themnv($tennv, $image, $sodt, $email, $diachi, $vaitro);
            }
          }
          $dsnv = getall_nhanvien();
          $ketqua = getall_nhanvien();
          include "../view/nhanvien.php";
          break;
        case 'delnv':
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delnv($id);
          }
          $dsnv = getall_nhanvien();
          include "../view/nhanvien.php";
          break;
        case 'updatenv':


          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            // $id=$_GET['id'];
            $nvct = getonenv($_GET['id']);
          }
          $dsnv = getall_nhanvien();
          // $ketqua = getall_dungcu();
          include "../view/updatenv.php";
          break;
        case 'nhanvien_update':

          if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
            $id = $_POST['id'];
            $tennv = $_POST['tennv'];
            $image = $_FILES['image']['name'];
            // $image = "ALL";
            $sodt = $_POST['sodt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $vaitro = $_POST['vaitro'];
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
            updatenv($id, $tennv, $image, $sodt, $email, $diachi, $vaitro);
          }
          $dsnv = getall_nhanvien();
          // $ketqua = getall_nhanvien();
          include "../view/nhanvien.php";

          break;

        //------------------------------------------------
        case 'danhmucPT':
          $dsdmpt = getall_dmpt();
          include "../view/pt.php";
          break;
        case 'pt_add':
          if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
            $image = $_FILES['image']['name'];
            $tenpt = $_POST['tenpt'];
            $sodt = $_POST['sodt'];
            $email = $_POST['email'];
            $vaitro = $_POST['vaitro'];
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
              themdmpt($tenpt, $image, $sodt, $email, $vaitro);
            }
          }
          $dsdmpt = getall_dmpt();
          $ketqua = getall_dmpt();
          include "../view/pt.php";
          break;
        case 'updatept':


          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            // $id=$_GET['id'];
            $ptct = getonedmpt($_GET['id']);
          }
          $dspt = getall_dmpt();
          // $ketqua = getall_dungcu();
          include "../view/updatept.php";
          break;
        case 'pt_update':

          if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
            $id = $_POST['id'];
            $tenpt = $_POST['tenpt'];
            $image = $_FILES['image']['name'];
            $sodt = $_POST['sodt'];
            $email = $_POST['email'];

            $vaitro = $_POST['vaitro'];
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
            updatedmpt($id, $tenpt, $image, $sodt, $email, $vaitro);
          }
          $dspt = getall_dmpt();

          include "../view/pt.php";

          break;
        case 'deldmpt':
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            deldmpt($id);
          }
          $ketqua = getall_dmpt();
          include "../view/pt.php";
          break;
        // case 'danhmucgoitap':
        //   $ketqua = getall_danhmucgoitap();
        //   include "../view/danhmucgoitap.php";
        //   break;
        case 'thongke':
          $id = "";
          //$ketqua = getall_sanpham();
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
          }
          $dsgt = getall_goitapState($id, "");
          include "../view/thongke.php";
          break;
        case 'thongbaoMail':
          $id = "";
          //$ketqua = getall_sanpham();
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
          }

          //su li gui mail


          // $dsgt = getall_goitap();
          include "../view/phpmailer/formTB.php";
          break;
        case 'khachhang':
          $id = "";

          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
          }
          $kyw = "";
          if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
            $kyw = $_POST['kyw'];
          } else {
            $kyw = "";
          }

          $ketqua = getall_khachhang();
          $dskh = getall_khachhang($id, $kyw);

          include "../view/khachhang.php";

          break;
        case 'khachhang_add':
          if (isset($_POST['themmoikh']) && ($_POST['themmoikh'])) {
    
            $image = $_FILES['image']['name'];
            $tenkh = $_POST['tenkh'];
            $sodt = $_POST['sodt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
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
              themkh( $image, $sodt, $email, $diachi, $tenkh);
            }
          }
          $dskh = getall_khachhang();
          $ketqua = getall_khachhang();
          include "../view/khachhang.php";
          break;

        case 'lichtap_add':
          if (isset($_POST['themmoilichtap']) && ($_POST['themmoilichtap'])) {

            $tengt = $_POST['tengt'];
            $giobd = $_POST['giobd'];
            $giokt = $_POST['giokt'];
            $ngaytap = $_POST['ngaytap'];
            $phongtap = $_POST['phongtap'];




            themlichtap($tengt, $giobd, $giokt, $ngaytap, $phongtap);
          }

          $dslt = getall_lichtap();

          include "../view/lichtap.php";
          break;

        case 'updatelichtap':
          if (isset($_POST['updatelichtap']) && ($_POST['updatelichtap'])) {
            $id = $_GET['id'];
            $tengt = $_POST['tengt'];
            $giobd = $_POST['giobd'];
            $giokt = $_POST['giokt'];
            $ngaytap = $_POST['ngaytap'];
            $phongtap = $_POST['phongtap'];




            updatelichtap($id, $tengt, $giobd, $giokt, $ngaytap, $phongtap);
          }

          $dslt = getall_lichtap();

          include "../view/updatelichtap.php";
          break;
        case 'delkh':
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delkh($id);
          }
          $dskh = getall_khachhang();
          $ketqua = getall_khachhang();
          include "../view/khachhang.php";
          break;
        case 'updatekh':


          $dsdmpt = getall_dmpt();
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            // $id=$_GET['id'];
            $khct = getonekh($_GET['id']);
          }
          $dskh = getall_khachhang();
          // $ketqua = getall_dungcu();
          include "../view/updatekh.php";
          break;
        case 'khachhang_update':

          $dsdmpt = getall_dmpt();
          if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {

            $idpt = $_POST['idpt'];
            $tenkh = $_POST['tenkh'];
            $image = $_FILES['image']['name'];
            $sodt = $_POST['sodt'];


            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
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
            updatekh($id, $tenkh, $image, $sodt, $email, $diachi, $idpt);
          }
          $dskh = getall_khachhang();
          $ketqua = getall_khachhang();
          include "../view/khachhang.php";
          break;
        //-------------------------------------------------
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
        case 'goitap':

          $dsgt = getall_goitap();
          include "../view/goitap.php";
          break;
        case 'updatestate':
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            // $id=$_GET['id'];
            updateState($_GET['id']);
          }
          $dsgt = getall_goitap();
          include "../view/goitap.php";
          break;
     
        case 'goitap1':

          $id1 = "";


          if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id1 = $_GET['id'];

          }



          $dsgt = getall_goitap1($id1, "");
          include "../view/goitap.php";
          break;
        case 'goitap2':

          $id2 = "";


          if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id2 = $_GET['id'];

          }



          $dsgt = getall_goitap2($id2, "");
          include "../view/goitap.php";
          break;
        case 'goitap_add':

          if (isset($_POST['themmoigt']) && ($_POST['themmoigt'])) {
            $idkh = $_POST['idkh'];
            $iddmgoitap = $_POST['iddmgoitap'];
            $tengt = $_POST['tengt'];
            $gia = $_POST['gia'];

            $soluong = $_POST['soluong'];
            $ngaybatdau = $_POST['ngaybatdau'];
            $ngayhethan = $_POST['ngayhethan'];

            themgt($idkh, $iddmgoitap, $tengt, $soluong, $gia, $ngaybatdau, $ngayhethan);
          }
          $dsgt = getall_goitap();
          $ketqua = getall_goitap();
          include "../view/goitap.php";
          break;
        case 'updategt':
          // $dsdmgt = getall_danhmucgoitap();
          $dskh = getall_khachhang();
          if (isset($_GET['id']) && ($_GET['id'] > 0)) {

            $gtct = getonegt($_GET['id']);
          }
          $dsgt = getall_goitap();
          // $ketqua = getall_dungcu();
          include "../view/updategt.php";
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
        case 'delgt':
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delgt($id);
          }
          $dsgt = getall_goitap();
          $ketqua = getall_goitap();
          include "../view/goitap.php";
          break;
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

  if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    echo $_SESSION['role'];
    header('Location: ../../user/controller/controllers.php');
    exit(); // Đảm bảo kết thúc thực thi sau khi chuyển hướng
  }

  ?>
</body>

</html>