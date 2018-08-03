<?php require_once("php/conecta.php") ?>
<?php
    session_start();

    if ( !isset($_SESSION["user_nav"])){
        header("location:login.php");
    }
?>

<html>
    <head>
        <title>Curriculum Vitae</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet"> 
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="_css/css.css" rel="stylesheet">
        <link rel="stylesheet" href="/maps/documentation/javascript/cgc/demos.css">
        <meta charset="utf-8">
        <script src="jquery-3.2.1.min.js"></script>
        <script>
            jQuery(document).ready(function($){
                $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
                });
            });
        </script>
    </head>
    <body>
        <div class="container-fluid" >
        <section class="row" id="topo">
        <nav class="navbar navbar-fixed-top" >
            <section class="container">
                <div class="navbar-header">
                    <button type="button"
                            class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target="#movelmenu"
                            aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                      
                <div id="curriculum">     
                    <a href="index.php" class="navbar-brand">
                        Curriculum Vitae
                    </a>
                </div>
                </div>

                
                <div class="collapse navbar-collapse pull-right" id="movelmenu">
                    <ul class="nav navbar-nav">
                        <li><a class="scroll" href="#sobremim">Sobre Mim</a></li>
                        <li><a class="scroll" href="#experiencias">Experiências</a></li>
                        <li><a class="scroll" href="#hobbies">Hobbies</a></li>
                        <li><a class="scroll" href="#conhecimentos">Conhecimentos</a></li>
                        <li><a class="scroll" href="#contatos">Contatos</a></li>
                        <li><a class="scroll" href="#endereco">Endereço</a></li>                
                    </ul>
                    <a href="logout.php">
                    <button type="button"
                            class="btn btn-danger navbar-btn">Logout
                        </button> 
                    </a>
                </div>
            </section>
        </nav>
            </section>
    <main> 
        <div id="divtopo"></div>
        <div class="row" id="sobremim">
        
        <div class="imagemTopo col-md-3">
            <img class="img-responsive img-rounded" src="img/perfil.png"/>
        </div>
        
        <div class="textoTopo" > 
        <h3><u>Sobre Mim</u></h3>
        <br>
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur auab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem".
        </div>
        </div>
        
        <!--Experiencias-->
        <div class="row" id="experiencias">
        
        <div class="imagemExp col-md-3">
            <img class="img-responsive img-rounded" src="img/exp.jpg"/>
        </div>
        
        <div class="textoExp" > 
        <h3><u>Experiências</u></h3>
        <br>
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur auab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem".
        </div>
        </div>
            
        <div class="row" id="hobbies">
            
        <div class="imagemCentro col-md-3">
            <img class="img-responsive img-rounded"   src="img/hobbies.jpg"/>  
        </div>
            
        <div class="textoCentro" >
        <h3><u>Hobbies</u></h3>
        <br>
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur auab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem".
        </div>
        </div>
        
        <div class="row" id="conhecimentos">
            
        <div class="imagemRodape col-md-3">
            <img class="img-responsive img-rounded"  src="img/livros.png"/>
        </div>
            
        <div class="textoRodape" >
        <h3><u>Conhecimentos</u></h3>
        <br>
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur auab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem".
        
        </div>
        </div>
        
        <div class="row" id="contatos">
            
        <div class="imagemContato col-md-3" >
            <img class="img-responsive img-rounded" src="img/imagemContato.png"/>
        </div>
        <div id="textoContato">
        <div class="textoContato" >
        <h3><u>Contatos e Midias Sociais</u></h3>
        <br>
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur auab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem".  
        </div>
        </div>
        </div>
        
        <div class="row" id="endereco">
            
        <!--api do google maps-->    
            
        <div class="googleMaps col-md-12" >
        <div id="map">
            <script>
              function initMap() {
                var uluru = {lat: -23.241917795362404, lng: -45.805976692035415};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 15,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }
            </script>

            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQ2TJ6Ytxxh67l-46Sg2bTBAnoN0Ycvws&callback=initMap">
            </script>  
        </div>
        </div>
            
        <div id="textoEndereco">
        <div class="textoEndereco" >
        <h3><u>Endereço</u></h3>
        <br>
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur auab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem".       
        </div>
        </div>
        </div>
    
    </main>
            <footer>
                
            </footer>
        
        <div id="btntopo">
            <a class="scroll" href="#divtopo">
            <img class="img-responsive img-circle" src="img/topoimg.png"/>
            </a>
        </div>
        <script src="js/grayscale.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="_js/script.js"></script>
    </div>
    </body>
</html>