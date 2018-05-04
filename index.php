<?php require_once 'pages/layout/head.php'; ?>
<?php require_once 'pages/layout/nav.php'; ?>

<?php 
	if(isset($_SESSION['cuenta'])){
		header('Location:pages/');
		die();
	}else{
		header('Location:pages/login');
	}
?>

<?php require_once 'pages/layout/footer.php'; ?>