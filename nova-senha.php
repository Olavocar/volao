<?php require_once "controlleruserdata.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    </head>
<body>
    <div>
        <div>
            <div class="col-md-4 offset-md-4 form">
                <form action="controlleruserdata.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Nova Senha</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Crie sua nova senha" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirme sua nova senha" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="change-password" value="Troca">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>