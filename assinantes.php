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
<title>Home</title>
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
                 <a href="blogassinantes.php"><b>Blog!+</b></a>
                </td>
                <td>
                    <a href="videosassinantes.php"><b>Vídeos+</b></a>
                </td>
                <td>
                    <a href="novidades.php"><b>Novidades</b></a>
                </td>
                <td>
                    <a href="assinantes.php"><b>Assinantes</b></a>
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
<div id="bio"><b>Bio:</b></div>
Nascido e criado no Flamengo e circulado toda a infância e<br> 
adolescência por Laranjeiras e Catete,aonde estudou no Colé-<br>
gio Sto Antônio Maria Zaccaria, frequentou muitos císrculos<br>
sociais pelo Fluminense Football Club e noitadas, festas,<br>
boites e baladas da zona sul e Barra na época, além de prai-<br>
as, principalmente o Posto 9 em Ipanema e bailes funk pelos<br> 
morros e comunidades do RJ, estudou o 2o grau no Colégio<br> 
Princesa Isabel em Botafogo e começou à escrever suas primeiras<br>
letras e cantar seus primeiros Raps entre 1996 e 1997 e mais<br>
tarde começou à frequentar o CIC (coletivo interativo de circo)<br>
na Fundição Progresso na Lapa, aonde conheceu e se juntou à<br>
muitos nomes como: Erik Scratch, MV Hemp, Dropê EJC, Rico<br>
Neurótico, Cartel MC´s, Cacife Clandestino, Oriente, Tony<br>
Mariano, Filipe Ret, entre outros e também as Rodas de<br>
Rima do antigo C.C.R.P. (circuito carioca de ritmo e poesia)<br>
com destaque para a "Amálgama" na Praia de Botafogo. Já se<br>
apresentou algumas vezes ao vivo, mas infelizmente durante<br>
esse processo sua carreira foi interrompida muitas vezes<br>
entre os anos de 2006, 2011, 2013 e 2018 com a sua drogadição,<br>
mas felizmente se encontra hoje em Recuperação e retomando<br>
suas atividades desde a Pandemia.
</article>
<article id="miolo">
<iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/4M13pjakt0dbAPHsO2C8CX?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
<br><br>
<div>
    Novidades:
</div></article>
<article id="lado">
    <div>
        <table>
            <td>
                <td>
                    <a href="youtube.html">Youtube:</a>
                </td>
            </td>
        </table>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/YPCHOFEgW9k?si=Jce_Z1td-ZJy5-VE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/o8sfr5yNwl0?si=6-fncUKT7MOVELtu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</article>
</section>
</main>
<footer id="rodape">
Contato:<br>
olavor@hotmail.com | +55 (21) 98095-8408
</footer>
</body>
</html>
