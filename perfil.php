<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <meta name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <?php
    session_start();
    if(empty($_SESSION["id"])){
        header("location: login.php");
    }
    ?>

    <header class="perf" style="background:rgb(255, 255, 255);" >
        <a href="inicio.php"><i class="fa-sharp fa-solid fa-arrow-left"></i></a>
        <div class="nav_perf" >
            <ul><li><a href="#">Perfil</a></li></ul>
            <ul><li><a href="cerrar.php">Salir</a></li></ul>
        </div>
        <i class="fa-regular fa-circle-user" id="pef_user" style="color: black;"></i>
    </header>

    <main>
        <div class="cuerpo">
            <i class="fa-solid fa-ghost"></i>
            <div class="h">
            <h2>!Hola, <?php echo $_SESSION['nombres'];?>¡</h2>
            </div>
            <div class="edit_1" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="#">Actualizar nombre +<br>
                    informacion
                </a>
            </div>
        </div>
        <div class="edit_2">
            <a href="cerrar.php">cerrar session</a>
        </div>
    </main>

    <div class="inf">
        <div class="foto">
            <img src="logi.jpg" alt="">
        </div>
        <div class="text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit explicabo veritatis et sequi! Sint amet unde labore dignissimos a aliquam molestiae incidunt, corporis repudiandae ducimus ullam similique illo obcaecati sunt?
            Ut voluptas veniam, itaque cupiditate sunt consectetur rerum debitis eius incidunt maiores corporis minima sequi. Temporibus, nulla veritatis, maxime blanditiis laborum corporis quos odit hic reprehenderit, consequatur aperiam fuga illum!
            Sunt recusandae nemo voluptatibus quas tempora ipsum ex quibusdam ipsa cupiditate maxime commodi aliquam sequi unde ducimus modi corporis fugit asperiores molestias possimus perspiciatis, sint enim consequuntur iure. Porro, vel.
            Esse voluptatibus veniam corrupti modi consequatur corporis quo ad quis quaerat aperiam delectus illo sed aut, officiis, et quae. Veniam est impedit cumque soluta explicabo similique sequi nemo incidunt quo?
            Ex nostrum cumque consequatur facilis vero adipisci laudantium reiciendis ullam eos excepturi perferendis quae reprehenderit incidunt totam sed, officiis mollitia laboriosam asperiores voluptate. Quisquam, placeat laudantium. Autem animi dolorem voluptates.</p>
        </div>
    </div>

  <!-- Modal -->
  <div class="modal fade"  class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: blue;">Perfil de usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
            <?php
                include 'conexion.php';
                include 'editar.php';
            ?>
                <div class="fol">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="edit_nombre" id="nombre" value="<?php echo $_SESSION['nombres'];?>">
                </div>
                <div class="fol">
                    <label for="contra">Contraseña actual</label>
                    <input type="password" name="edit_clave" id="contra" placeholder="*********">
                </div>
                <div class="fol">
                    <label for="contra">Contraseña nueva</label>
                    <input type="password" name="edit_clave_new" id="contra" placeholder="*********">
                </div>
              
            <div class="botones">
                <a href="perfil.php"><button>Cerrar</button></a>
                <input type="submit" id="edit" value="Editar">
            </div>    
            </form>
          </div>
        </div>
    
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    document.getElementById("pef_user").addEventListener("click", menu_menu);
        function menu_menu(){
            document.querySelector(".nav_perf").classList.toggle("menu_menu")
        }
</script>
    
</body>
</html>