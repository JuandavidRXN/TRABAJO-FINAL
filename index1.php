<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">FONDA LOS CAMBULOS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="registrarper.php">Bodega<span class="sr-only">(current)</span></a>
            </li>
            
              
</header>
<main>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active " data-interval="10000">
      <img src="img/carrusel1.jpeg" class="d-block w-100" alt="img1" class="carucel">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="img/carrusel2.jpg" class="d-block w-100" alt="img2" class="carucel">
    </div>
    <div class="carousel-item">
      <img src="img/carrusel3.jpg" class="d-block w-100" alt="img3" class="carucel">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
  <div class="form-row">
    <div class="col-md-6 mb-3">
    <form action="registro.php" method="POST">
      <label for="validationDefault01">Precio</label>
      <input type="text" class="form-control" id="nombre" placeholder="$$$$" name="nombre">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Marca</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="marca"  name="apellido">
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">fabrica</label>
      <input type="text" class="form-control" id="cedula1"placeholder="fabrica" name="cedula">
    </div>
    
            <div class="col">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="DESCRIPICION" name="descripcion"></textarea>
            </div>
            </div>
            <div class=" row mt-4">
              <div class=" col">
                        <input type="text" class="form-control" placeholder="FOTO URL" name="foto">
                   </div>
            </div>
            </div>
            
            <button type="submit" class="btn btn-warning btn-block" name="boton">Registrar</button>

            

          
    </div>
    </div> 
    </div>  
    </div>  
    <hr>                    
</form>
</main>











<footer>

    
    

    
    
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>   