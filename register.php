<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		//Mendapatkan Nilai Variable
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
        $password = md5($password);
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";

		//Import File Koneksi database
		require_once('koneksi.php');

		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan User';
		}else{
			echo 'Gagal Menambahkan User';
		}

		mysqli_close($con);
	}
?>
