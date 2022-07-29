<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "make_up";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>LMVL &#x1f484; &#x1f485; Inicio</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">

    
    
   </head>
<body>
<header>
  <div class="header">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
          <img class="pick" src="https://us.123rf.com/450wm/puhhha/puhhha1803/puhhha180301057/98365669-cepillos-cosm%C3%A9ticos-y-polvos-de-explosi%C3%B3n-de-colores-ci%C3%A9rrese-para-arriba-de-los-cepillos-del-rubor-.jpg">
          <strong class="logo"> LMLV </strong>
         
            <h6><a href="create.php" class="text-white">Formulario</a></h6>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
  
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">LMLV &#x1f484; &#x1f485; </h1>
        <p class="lead text-muted">El maquillaje ha servido como herramienta reivindicativa durante muchos años, no solo para defender su uso como técnica artística, que todos tenemos el derecho a disfrutar, sino también para acabar con los prejuicios que rodean este mundillo.</p>
        <p>
         
        </p>
      </div>
    </div>
  </section>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


         <?php
          while($row = $result->fetch_assoc()) {
          ?>
 
        <!-- -->
           <div class="col">
              <div class="card shadow-sm"> 
                          <a href="openCard.php?id=<?php echo $row['id']?>">
                            <img src=<?php echo $row ['img']?> class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
                          </a>
                      <div class="card-body">

                             <h5 class="card-text"> <?php echo $row['producto']?></h5>
                              <p class="card-text"> <?php echo $row['marca']?></p>
                              <p class="card-text"> <?php echo $row['precio']?>$</p>
                          
                              <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">

                             <button type="button" class="btn-add">Añadir en la cesta</button>

                          </div>
                                <small class="text-muted">🖤</small>
                        </div>
                     <div class="card shadow-sm">
                   </div>
                </div>
              </div>
          </div>
        
          <?php }
    $conn->close();?>
        </div>
        <!-- -->
      



</main>


<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
    <p class="mb-1">Siguenos en nuestras redes Sociales! </p>
    <img src="https://img.icons8.com/officel/16/000000/facebook-new.png"/>
    <img src="https://img.icons8.com/officexs/16/000000/instagram-new.png"/>
    <img src="https://img.icons8.com/officexs/16/000000/twitter.png"/>
    <p class="mb-0">  Quienes Somos?  <a href="./openCard.php">  Visita Nuestra esencia  </a>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>