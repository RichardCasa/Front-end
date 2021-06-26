<!DOCTYPE html>
<html lang="en">

<head>
    <title>Berry Much</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />

    <link rel="icon" href="img/logo1.png" type="image/jpg" />

</head>

<body>
    <p></p>
    <div class=" w3l-login-form">
        <h2>Inicio de sesion</h2>
        <form action="#" method="POST">
            <h1><img src="img/logo200x200.png"></h1>
            <div class=" w3l-form-group">
                <label>Cédula:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Cédula" required="requiered" id="cedula" name="cedula" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Contraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" id="contra" name="contra" placeholder="Contraseña" required="required" />    
                </div>
            </div>
            <!-- <div class="forgot">
                <a href="#">¿Olvidó su contraseña?</a>
                <p><input type="checkbox">Recordar contraseña</p>
            </div> -->
            <button type="submit" >Iniciar Secion</button>
        </form>
        <!-- <p class=" w3l-register-p">¿No tiene una cuenta?<a href="#" class="register"> Registrate</a></p> -->
        <?php

require "../php/db.php";

 
$cedula = $_POST['cedula'];
$contra = $_POST['contra'];
$sql = "select * from clientes where id = '$cedula' " ;
$r = mysqli_query($l, $sql);
$n = mysqli_num_rows($r); 
if($n==1){
      header("hola.html");
}else{
      echo '<script language="javascript">alert("Error de autentificacion");window.location.href="index.html"</script>';
     
}
mysqli_close($conn);
?>

    </div>
    <footer>
        <!-- <p class="copyright-agileinfo"> &copy; 2018 Material Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p> -->
    </footer>
   
</body>

</html>