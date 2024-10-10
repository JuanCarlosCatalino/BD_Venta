<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>views/plantilla/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
     
    <div class="login">
        <div class="caja1">
            <div class="img1logo">
                <img class="logologin" src="img/2bb8f1c3f5a03e3788dfba32fd56c8ae.png" alt="" width="400px" height="200px">
            </div>
            
            <div class="cajadetexto">
                <div class="cajalogin11">
                    <a href="perfil.html"><button class="btn btn-outline-danger" type="submit">REGISTRATE</button></a>
                </div>
                <label for="exampleInputEmail1" class="form-label">
                    <i class="fas fa-user"></i> USUARIO
                </label>
                <div class="cajalogin1">
                    <input class="form-control me-2" type="search" placeholder="Ingresa tu usuario" aria-label="Search">
                </div>
                <label for="exampleInputEmail1" class="form-label">
                    <i class="fas fa-lock"></i> CONTRASEÑA
                </label>
                <div class="cajalogin1">
                    <input class="form-control me-2" type="password" placeholder="Ingresa tu contraseña" aria-label="Search">
                </div>
                <div class="cajalogin7">
                    <a href="login.html" class="text_menu">
                        <label for="exampleInputEmail1" class="form-label" style="color: black;">¿Olvidaste tu contraseña?</label>
                    </a>
                </div>
                <div class="cajalogin7">
                    <a href="menu.php"><button class="btn btn-dark btn-outline-danger" type="submit" style="width: 200px;">INICIAR SESIÓN</button></a>
                </div>
            </div>
        </div>
    </div>
    


</body>
</html>