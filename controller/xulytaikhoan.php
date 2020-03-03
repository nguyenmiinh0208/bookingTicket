<?php require_once('.././model/config/DB_class.php');
	if(!isset($_POST['request']) && !isset($_GET['request'])) die();

	session_start();

	switch ($_POST['request']) {
		case 'dangnhap':
			dangNhap();
			break;

		case 'dangxuat':
			dangXuat();
			break;

		case 'dangky':
			dangKy();
			break;

		case 'getCurrentUser':
			if(isset($_SESSION['currentUser'])) {
				die (json_encode($_SESSION['currentUser']));
			}
			die (json_encode(null));
			break;
		
		default:
			# code...
			break;
	}

	function dangXuat() {
		if(isset($_SESSION['currentUser'])) {
			unset($_SESSION['currentUser']);
			die ("ok");
		}
		die ("no_ok");
	}

	function dangNhap() {
		$taikhoan=$_POST['data_username'];
		$matkhau=$_POST['data_pass'];
		$matkhau=md5($matkhau);

		$sql = "SELECT * FROM `admin` WHERE ad_username='$taikhoan' AND ad_password='$matkhau'";
		$result = (new DB_base())->get_row($sql);
		if($result != false){
		    $_SESSION['currentUser']=$result;
		    die (json_encode($result)); 
		}  
		die (json_encode(null));
	}

	function dangKy() {
		$xuli_newUser=$_POST['data_newUser'];
		$xuli_newPass=$_POST['data_newPass'];
		$xuli_newPass=md5($xuli_newPass);

		$sql = "INSERT INTO `admin` (ad_username, ad_password) VALUES ('$xuli_newUser', '$xuli_newPass')";
		$status = (new Admin())->add_new($sql);

		// đăng nhập vào ngay
		$sql = "SELECT * FROM `admin` WHERE ad_username='$xuli_newUser' AND ad_password='$xuli_newPass'";
		$result = (new DB_base())->get_row($sql);
        if($result != false){
		    $_SESSION['currentUser']=$result;
		    die (json_encode($result)); 
		}  

		die (json_encode(null));
	}
?>