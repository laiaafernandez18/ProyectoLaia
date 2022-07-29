<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>LMLV &#x1f484; &#x1f485;Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    

</head>
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
<body>
    <section class="box-form">
        <form class="form" action="create-openCard.php" method="post">
<div class="box-s">


            <label for="producto">producto:</label>
            <input type="text" name="producto" id="">

             <label for="modo_empleo">modo empleo: </label>
             <input type="text" name="modo_empleo" id="">

            <label for="precio">precio: </label>
            <input type="text" name="precio" id="">
 </div>
<div class="box-m"> 
            <label for="funcion">funcion: </label>
            <input type="text" name="funcion" id="">

            
            <label for="num_lote">numero de lote: </label>
            <input type="text" name="num_lote" id="">
            
            <label for="peso">Peso: </label>
            <input type="text" name="peso" id="">
 <div class="box-l">
            <label for="marca">marca: </label>
            <input type="text" name="marca" id="">
         
            <label for="nombre">nombre: </label>
            <input type="text" name="nombre" id="">
       
            
            <label for="img">Imagen: </label>
            <input type="text" name="img" id="">

            <label for="video">Video: </label>
            <input type="text" name="video" id="">
</div>

                <button class="form-btn" type="submit">Enviar</button>

        </form>
</section>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>