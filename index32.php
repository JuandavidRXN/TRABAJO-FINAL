<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>nose</title>
</head>
<body>
    <header>

    </header>
    <main>
<?php
$productos=array(
    "producto1"=>array{"puma",500000,"negro"},
    "productos2"=>array{"camisa",100000,"rojo"});?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
              <?php
            foreach($productos as $producto):?>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
        </div>
          <h2 class="car-body"><?php echo($producto{0})?></h2>
          <h2 class="car-body"><?php echo($producto{1})?></h2>
          <h2 class="car-body"><?php echo($producto{2})?></h2>
      </div>
    </div>
<?php
endforeach?>
    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>