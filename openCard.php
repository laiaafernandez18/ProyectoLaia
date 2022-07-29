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

// consulta SQL
$id = $_GET ['id'];
$sql = 'SELECT * FROM `products` WHERE id =' .$id;
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMLV &#x1f484; &#x1f485;</title>
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
            <strong class="logo"> LMLV</strong>
    
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
     </div>
     </div>
</header>

<main>

            <div class="b-example-divider"></div>


       


        <div class="container col-xxl-8 px-4 py-8">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-8">
            <?php
            while($row = $result->fetch_assoc()) {
          ?>
            
            <div class="col-10 col-sm-8 col-lg-6">
                    <img src=<?php echo $row['img']?> class="d-block mx-lg-auto img-fluid img-cover" alt="Bootstrap Themes" width="1200" height="500" loading="lazy">
                </div>
                 <div class="col-lg-6">
                 <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $row['nombre']?></h1>
                     <p class="lead"><?php echo $row['producto']?></p>
                     <p class="lead"><?php echo $row['marca']?></p>
                     <p class="lead"><?php echo $row['precio']?>$</p>
                     <p class="lead">Peso de el producto:  <?php echo $row['peso']?></p>
                     <p class="lead">Numero de lote:  <?php echo $row['num_lote']?></p>
                     <p class="lead">Funcion:    <?php echo $row['funcion']?></p>
                     <p class="lead">Modo de empleo:   <?php echo $row['modo_empleo']?></p>
                     

                     <?php echo $row['video']?> 

                 <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                   
                 
                 <button type="button" class="card-btn">comprar</button>
                    
                </div>
            </div>
            <?php }
                        $conn->close();
                        ?>

         </div>  
        </div>


       



</main>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>