<?php
// session_start();
$userErr = $passErr = "";
$user = $pass = $ThongBao = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['username'])) {
		$userErr = "Yêu cầu nhập tài khoản";
	} else {
		$user = $_POST['username'];
	}

	if (empty($_POST['password'])) {
		$passErr = "Yêu cầu nhập mật khẩu";
	} else {
		$pass = $_POST['password'];
		echo $pass;

		// Kết nối đến cơ sở dữ liệu
		$conn = mysqli_connect("localhost", "root", "", "databasegym");

		if (!$conn) {
			die("Lỗi kết nối đến cơ sở dữ liệu: " . mysqli_connect_error());
		}

		// Xử lý và xác thực tài khoản và mật khẩu
		$user = mysqli_real_escape_string($conn, $user); // Tránh SQL Injection
		$sql = "SELECT * FROM user WHERE user = '$user'";
		$result = mysqli_query($conn, $sql);

		if (!$result) {
			die("Lỗi truy vấn cơ sở dữ liệu: " . mysqli_error($conn));
		}

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			if ($pass == $row['pass']) {
				$_SESSION['idUser'] = $row['id'];
				$ThongBao = "Đăng nhập thành công!";
				$role = checkuser($user, $pass);
				$_SESSION['role'] = $role;
				// Đăng nhập thành công, thực hiện các thao tác cần thiết ở đây 
				header('location: controller/controllers.php');

				$_SESSION['iduser'] = $row["id"];
				exit; // Dừng xử lý tiếp
			} else {
				$passErr = "Mật khẩu không đúng";
			}
		} else {
			$userErr = "Tài khoản không tồn tại";
		}

		// Đóng kết nối cơ sở dữ liệu
		mysqli_close($conn);
	}
}
?>



<!doctype html>
<html lang="en">

<head>
	<title>Login 07</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="signin_signup/css/style.css">

</head>

<body>
	<section class="ftco-section">

		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Login #07</h2> -->
				</div>
			</div>
			<div class="row justify-content-center">

				<div class="col-md-12 col-lg-10 position-relative">
					<div class="wrap d-md-flex">

						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="imgcontainer position-absolute fixed-top mb-3">
								<span onclick="document.getElementById('id01').style.display='none'" class="close"
									title="Close Modal"><i class="fa fa-times" aria-hidden="true"></i></span>
								<!-- <img src="uploaded/icon.jpg" alt="Avatar" style="width: 200px;" class="avatar"> -->
							</div>
							<div class="text w-100">
								<h2>Chào mừng bạn đến với đang nhập</h2>
								<p>Bạn đã có tài khoản chưa?</p>
								<a href="signin_signup/signup.php" class="btn btn-white btn-outline-white">Đăng kí</a>
							</div>
						</div>
						<div class="login-wrap p-4 p-lg-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Đăng nhập</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-facebook"></span></a>
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="" class="signin-form" method="POST">

								<div class="form-group mb-3">
									<label class="label" for="name">Tài khoản</label>
									<input type="text" name="username" class="form-control" 
										required>
									<span class="text-warning">
										<?php echo $userErr ?>
									</span>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">mật khẩu</label>
									<input type="password" name="password" class="form-control" 
										required>
									<span class="text-warning">
										<?php echo $passErr ?>
									</span>
								</div>
								<div class="form-group">
									<button type="submit" name="submit"
										class="form-control btn btn-primary submit px-3">Đăng nhập</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Nhớ mật khẩu
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Quên mật khẩu</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>