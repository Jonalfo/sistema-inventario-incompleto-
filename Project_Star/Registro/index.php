<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body class="img js-fullheight" style="background-image: url(Imagenes/bg.jpg);"> 
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    
    <div class="testbox">
      <h1>Registro</h1>
    
      <form action="/">
          <hr>
        <div class="accounttype">
          <input type="radio" value="None" id="radioOne" name="account" checked/>
          <label for="radioOne" class="radio" chec>Cliente</label>
          <input type="radio" value="None" id="radioTwo" name="account" />
          <label for="radioTwo" class="radio">Vendedor</label>
        </div>
      <hr>
      <label id="icon" for="name"><i class="icon-envelope"></i></label>
      <input type="text" name="name" id="name" placeholder="Nombre" required/>

      <label id="icon" for="name"><i class="icon-id"></i></label>
      <input type="text" name="name" id="name" placeholder="Cédula" required/>

      <label id="icon" for="name"><i class="icon-phone"></i></label>
      <input type="text" name="name" id="name" placeholder="Teléfono" required/>
      
      <label id="icon" for="name"><i class="icon-contraseña"></i></label>
      <input type="password" name="name" id="name" placeholder="Contraseña" required/>

      <div class="gender">
        <input type="radio" value="None" id="male" name="gender" checked/>
        <label for="male" class="radio" chec>Hombre</label>
        <input type="radio" value="None" id="female" name="gender" />
        <label for="female" class="radio">Mujer</label>
       </div> 
       
       <a href="#" class="button">Registrarse</a>
       <p><a href="/Login/index.php">¿Ya tienes una cuenta?</a></p>

      </form>
    </div>
</body> 

</html>