<!DOCTYPE html>
<html lang="es">
<head>
    <title>Iniciar Sesión</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">

    <!-- Animaciones-->

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content animate__animated animate__backInDown">
                <div class="col-12 user-img">
                    <img src="static/img/user.png" th:src="@{/img/user.png}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                    </div>
                    <?php if(!empty($error)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                                        </div>
                                        <?php endif; ?>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                         

                   
                </form>
            </div>
        </div>
    </div>
</body>
</html>
