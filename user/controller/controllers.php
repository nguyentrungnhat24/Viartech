
   
   <?php
// Initialize the session - is required to check the login state.
session_start();
ob_start();
// Check if the user is logged in, if not then redirect to login page
if (isset($_SESSION['google_loggedin'])) {
    // Database connection variables
$db_host = 'localhost';
$db_name = 'databasegym';
$db_user = 'root';
$db_pass = '';
// Attempt to connect to database
try {
    // Connect to the MySQL database using PDO...
    $pdo = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    // Could not connect to the MySQL database, if this error occurs make sure you check your db settings are correct!
    exit('Failed to connect to database!');
}
// Get the account from the database
$stmt = $pdo->prepare('SELECT * FROM accounts WHERE id = ?');
$stmt->execute([ $_SESSION['google_id'] ]);
$account = $stmt->fetch(PDO::FETCH_ASSOC);
// Retrieve session variables
$google_loggedin = $_SESSION['google_loggedin'];
$google_email = $account['email'];
$google_name = $account['name'];
$google_picture = $account['picture'];
}  
    include "../../model/db.php";
    include "../../model/user.php";
    include "../../model/Function_baiviet.php";
    include "../../model/Functiondanhmucdungcu.php";
    include "../../model/Functiondungcu.php";
    updateluotxem();
    $dsdmdc = getall_danhmucdungcu();
    $dskh = getall_baiviet();
    $dssh = getall_slideheader();
    $dssb = getall_slidebody();

    include "../view/header.php";
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'contact':
        
                include "../view/contact.php";
                break;
    
            //----------------------------------------------------bài viết----------------------------- 
            case 'danhgia':
                $danhgia ="";
                if (!isset($_SESSION['google_loggedin'])) {
                    
                    echo '
                    <script>
                     alert("Vui lòng đăng nhập để đánh giá!");
                    </script>
                    ';
                    
                    
                 }
                 if (isset($_SESSION['google_loggedin'])) {
                    
                     

                   $dsdg = getall_danhgia();
                   $userRated = false;  
                   foreach ($dsdg as $dg){
                        if($dg['emailUser']==$google_email){
                            // echo '
                            // <script>
                            // alert("Bạn đã đánh giá!");
                            // </script>
                            // ';
                            session_regenerate_id();
                            $_SESSION['complete'] = "Bạn đã đánh giá!";
                            $danhgia = $_SESSION['complete'];
                            $userRated = true;
                            break;
                        } 
                    }
                    
                    if (!$userRated && isset($_POST['capnhap']) && ($_POST['capnhap']== 'submit')  ) {
                    
        
                        $emailUser = $google_email;
                        
                        $sao = $_POST['sao'];
                        
                        danhgia($emailUser,$sao);
        
                    }
                    
                    
                   
                 }
               
                $dskh = getall_baiviet();
                $kqdg = getall_kqdanhgia();
                include "../view/about.php";
                break;
            case 'gioithieu':
                
                $dskh = getall_baiviet();
                $dsdg = getall_danhgia();
                $kqdg = getall_kqdanhgia();
               
                $danhgia = "";
               
                include "../view/about.php";

                break;
          
            //-----------------------------------------------------Sản phẩm-------------------------------------
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
                include "../view/portfolio.php";
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

            //-----------------------------------------------------------------------------------
    

            case 'thoat':
                if (isset($_SESSION['role']))
                    unset($_SESSION['role']);
                // header('location: login.php');
                break;
            default:
                include_once "../view/home.php";
                break;
        }
    } else {
        include_once "../view/home.php";
    }

    include "../view/footer.php";
    ?> 

