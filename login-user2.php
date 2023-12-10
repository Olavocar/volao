<?php require_once "controlleruserdata.php"; ?>
<!doctype html>
<html>
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YYSL4W8ZY7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YYSL4W8ZY7');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="estilo.css" rel="stylesheet">
<title>Cadastro</title>
</head>

<body id="bg">
<header  id="banner">
</header>
<table class="botoes">
    <td>
    <table class="links">
        <td>
        <img src="imgs/facebook.png">
        </td>
        <td>
        <img src="imgs/twitter.png">    
        </td>
        <td>
        <img src="imgs/instagram.png">    
        </td>
        <td>
        <img src="imgs/soundcloud.png">    
        </td>
        <td>
        <img src="imgs/spotify.png">    
        </td>
        <td>
        <img src="imgs/youtube.png">    
        </td> 
        <td>
        <img src="imgs/whatsapp.png">    
        </td>
    </table>
    </td>    
        <td>
            <div id="centro">
                <div class="central">
                <img src="imgs/logo.png" alt="Logo" title="Logo">
                </div>
                    <div class="a">
                        <table>
                            <td>
                            <a href="index.php"><b>Início</b></a>
                            </td>
                            <td>
                            <a href="letras.php"><b>Letras</b></a>
                            </td>
                            <td>
                             <a href="blog.php"><b>Blog!</b></a>
                            </td>
                            <td>
                                <a href="videos.php"><b>Vídeos</b></a>
                            </td>
                            <td>
                                <a href="novidades.php"><b>Novidades</b></a>
                            </td>
                            <td>
                                <a href="cadastro.php"><b>Cadastro</b></a>
                            </td>
                            <td>
                                <a href="contato.php"><b>Contato</b></a>
                            </td>
                        </table>
                    </div>
            </div>
                    </td>
                </table>
                <br>
<main id="main">
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
                    <div id="bio">
                        Digite seu e-mail:
                        <input class="form-control" type="email" name="email" placeholder="Digite seu e-mail" required value="<?php echo $email ?>">
                    </div>
                    <div id="bio">
                        Senha:
                        <input class="form-control" type="password" name="senha" placeholder="senha" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Esqueceu sua senha?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Ainda nao e inscrito? <a href="signup-user.php">Inscrev-se Ja</a></div>
                </form>
            </div>
        </div>
    </div>
</main>
<footer id="rodape">
Contato:<br>
olavor@hotmail.com | +55 (21) 98095-8408
</footer>
</body>
</html>
