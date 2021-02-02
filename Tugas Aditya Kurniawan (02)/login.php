<?php
if(isset($_POST['simpan'])){
 $username = $_POST['username'];
 $password = $_POST['password'];

 $conn = mysqli_connect('localhost', 'root', '', 'db_login');
  if(mysqli_connect_errno()){
   echo "Koneksi Ke Server Gagal";
   exit();
  }

 $sql="select * from login where username='".$username."'AND password='".$password."'";
    $result=mysqli_query($conn, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    if($num_rows>0){
        session_start();
        $_SESSION["nama"]=$row['username'];
        $_SESSION["pass"]=$row['password'];
        echo "<script>location='home.html';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='login-form.html';</script>";
    }
}
?>