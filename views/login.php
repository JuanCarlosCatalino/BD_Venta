<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>views/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script >const base_url ="<?php echo BASE_URL; ?>"</script>

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
                    <a href="perfil.php"><button class="btn btn-outline-danger" type="submit">REGISTRATE</button></a>
                </div>
                <form id="form_iniciar_sesion" method="POST" action="">
    <label for="exampleInputEmail1" class="form-label">
        <i class="fas fa-user"></i> USUARIO
    </label>
    <div class="cajalogin1">
        <input class="form-control me-2" type="search" placeholder="Ingresa tu usuario" aria-label="Search" id="usuario" name="usuario" required>
    </div>
    <label for="exampleInputEmail1" class="form-label">
        <i class="fas fa-lock"></i> CONTRASEÑA
    </label>
    <div class="cajalogin1">
        <input class="form-control me-2" type="password" placeholder="Ingresa tu contraseña" aria-label="Search" id="password" name="password" required>
    </div>
    <div class="cajalogin7">
        <a href="login.php" class="text_menu">
            <label for="exampleInputEmail1" class="form-label" style="color: black;">¿Olvidaste tu contraseña?</label>
        </a>
    </div>
    <div class="cajalogin7">
        <button class="btn btn-dark btn-outline-danger" type="submit" style="width: 200px;">INICIAR SESIÓN</button>
    </div>
</form>

            </div>
        </div>
    </div>
    <script src="<?php echo BASE_URL;?>views/js/functions_login.js"></script>
</body>
</html>
