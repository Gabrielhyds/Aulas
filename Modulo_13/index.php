<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Dev Web</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" >
</head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo htmlentities('<');?>Danki Code<?php echo htmlentities('>');?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="sobre">Sobre</a></li>
                <li><a href="contato">Contato</a></li>
            </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="box">
        <section class="banner">
            <div class="overlay"></div><!--overlay-->
            <div class="container chamada-banner">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2><?php echo htmlentities('<');?>Danki.Code<?php echo htmlentities('>');?></h2>
                        <p>Empresa voltada para desenvolvimento web e marketing digital</p>
                        <buttom class="btn btn-info">Saiba Mais!</buttom>
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--Container-->
        </section><!--banner-->

        <section class="cadastro-lead">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h2>  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Entre na nossa Lista!</h2>
                    </div>
                    <div class="col-md-6">
                        <form method="post">
                            <input type="text" name="nome" id=""><input type="submit" value="Enviar">
                        </form>
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--Container-->
        </section><!--cadastro-lead-->

        <section class="depoimento text-center">
            <div class="container">
                <div class="row">
                    <div class="col md 12">
                        <h2>Depoimento</h2>
                        <blockquote>
                            <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry."</p>
                        </blockquote>
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--Container-->
        </section><!--depoimento-->

        <section class="diferenciais text-center">
            <h2>Conheça nossa empresa!</h2>
            <div class="container diferenciais-container">
                <div class="row">
                    <div class="col-md-4">
                        <h3><span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span></h3>
                        <h2>Diferencial #1</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div><!--col-md-4-->
                    <div class="col-md-4">
                        <h3><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></h3>
                        <h2>Diferencial #1</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div><!--col-md-4-->
                    <div class="col-md-4">
                        <h3><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></h3>
                        <h2>Diferencial #1</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div><!--col-md-4-->
                </div><!--row-->
            </div><!--container-->
        </section><!--diferenciais-->
    
        <section class="equipe">
            <h2>Equipe</h2>
            <div class="container equipe-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture"></div>
                                </div>
                                <div class="col-md-10">
                                    <h3>Maria</h3>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                                </div>
                            </div>
                        </div>
                    </div><!--col-md-6-->
                    
                    <div class="col-md-6">
                        <div class="equipe-single">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="user-picture"></div>
                            </div>
                            <div class="col-md-10">
                                <h3>José</h3>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                            </div><!--col-md-10-->
                        </div><!--row-->
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--container equipe-container-->
        </div><!--CONTAINER-->
    </section><!--equipe-->
</div><!--box-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>