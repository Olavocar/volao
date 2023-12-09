<?php require_once "controlleruserdata.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Entre</h2>
                    <p class="text-center">Entre com seu email & senha.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="fontes">
                        Digite seu e-mail:
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="fontes">
                        Digite sua senha:
                        <input class="form-control" type="password" name="senha" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="esqueci-senha.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Ainda nao e inscrito? <a href="cadastro.php">Inscreva-se Ja</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
