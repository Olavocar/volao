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
<div class="bio"><b>Cadastro:</b></div>
<form action="controlleruserdata.php" method="POST" autocomplete="">
                <h2 id="bio">Cadastro</h2>
                    <p id="bio">É rápido e fácil.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
<table>
    <td></td>
    <td>
<div class="fontes">
                    Nome:
                    <input class="form-control" type="text" name="nome" placeholder="Digite seu nome" required value="<?php echo $nome ?>">
                    </div>
                    <br>
                    <div class="fontes">
                        Sobrenome:
                        <input class="form-control" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required value="<?php echo $sobrenome ?>">
                    </div>
                    <br>
                    <div class="fontes">
                        Email:
                        <input class="fontes" type="email" name="email" placeholder="Digite seu e-mail" required value="<?php echo $email ?>">
                    </div>
                    <br>
                    <div class="fontes">
                        Telefone:
                        <input class="form-control" type="text" name="telefone" placeholder="Telefone com DDD" required value="<?php echo $telefone ?>">
                    </div>
                    <br>
                    <div class="fontes">
                        Crie uma senha:
                        <input class="form-control" type="password" name="senha" placeholder="Crie um senha" required value="<?php echo $senha ?>">
                    </div>
                    <br>
                    <div class="fontes">
                        Repita sua senha:
                        <input class="form-control" type="password" name="csenha" placeholder="Confirme sua senha" required value="<?php echo $csenha ?>">
                    </div>
                    <br>
                    <div class="fontes">
                        Data de nascimento:
                        <input class="form-control" type="date" name="data_nasc" required value="<?php echo $data_nasc ?>">
                    </div>
                    <br>
                    <div class="fontes">
                        Estado:
                        <select class="form-control" type="select" name="estado" placeholder="Estado" required value="<?php echo $estado ?>">
                                       <option value=EX>Estrangeiro</option>
                                       <option value=AC>Acre</option>
                                       <option value=AL>Alagoas</option>
                                       <option value=AP>Amapá</option>
                                       <option value=AM>Amazonas</option>
                                       <option value=BA>Bahia</option>
                                       <option value=CE>Ceará</option>
                                       <option value=DF>Distrito Federal</option>
                                       <option value=ES>Espírito Santo</option>
                                       <option value=GO>Goiás</option>
                                       <option value=MA>Maranhão</option>
                                       <option value=MT>Mato Grosso</option>
                                       <option value=MS>Mato Grosso do Sul</option>
                                       <option value=MG>Minas Gerais</option>
                                       <option value=PA>Pará</option>
                                       <option value=PB>Paraíba</option>
                                       <option value=PR>Paraná</option>
                                       <option value=PE>Pernambuco</option>
                                       <option value=PI>Piauí</option>
                                       <option value=RJ>Rio de Janeiro</option>
                                       <option value=RN>Rio Grande do Norte</option>
                                       <option value=RS>Rio Grande do Sul</option>
                                       <option value=RO>Rondônia</option>
                                       <option value=RR>Roraima</option>
                                       <option value=SC>Santa Catarina</option>
                                       <option value=SP>São Paulo</option>
                                       <option value=SE>Sergipe</option>
                                       <option value=TO>Tocantins</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Enviar">
                    </div>
                    <br>
                    <div class="fontes">Já é inscrito? <a href="login-user.php">Entre aqui</a></div>
                </div>
                </td>
                </table>
            </form>
        </div>
    </div>
</main>
<footer id="rodape">
Contato:<br>
olavor@hotmail.com | +55 (21) 98095-8408
</footer>
</body>
</html>
