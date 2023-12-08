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
<title>Contato</title>
</head>

<body id="bg">
<header  id="banner">
</header>
<?php require_once "controlleruserdata.php"; ?>
<?php 
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
if($email != false && $senha != false){
    $sql = "SELECT * FROM cadastro WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<div clas="session">
<b>Olá, <?php echo $fetch_info['nome'];?></b>
<button type="button" class="w3-button"><a href="logout-user.php">Sair</a></button>
</div>

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
<main id="main"><section id="secao">
<article id="content">
<div id="bio"><b>Contato:</b></div>
</article>
<article id="miolo">
    <div class="box">
       
        <form action="contatocon.php" method="POST">
        <p>     
            <label>Nome:</label>
                <input type="text" name="nome" placeholder="Nome Completo">
        </p>
        <p>     
            <label>Telefone:</label>
                <input type="telefone" name="telefone" placeholder="(DDD)xxxxx-xxxx">
        </p>
        <p>     
            <label>E-mail:</label>
                <input type="email" name="email" placeholder="Digite seu e-mail">
        </p>
        <p>     
            <label>Mensagem:</label>
                <textarea type="mensagem" name="mensagem" rows="4" cols="30">
                </textarea>
        </p>
        <p>
                <button type="submit">Enviar</button>
        </p>
        </form>
        </div>
    
<div>
    
</div></article>
<article id="lado">
   

</article>
</section>
</main>
<footer id="rodape">
Contato:<br>
olavor@hotmail.com | +55 (21) 98095-8408
</footer>
</body>
</html>
