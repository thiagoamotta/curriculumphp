<?php require_once("PHP/conecta.php") ?>
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
                    <a href="infocv.php" class="navbar-brand">
                        Curriculum Vitae
                    </a>
                </div>
                </div>

                
                <div class="collapse navbar-collapse pull-right" id="movelmenu">
                    <ul class="nav navbar-nav">
                        <li><a class="scroll" href="#sobremim">Sobre Mim</a></li>
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
            <img class="img-responsive img-rounded" src="img/thiago.png"/>
        </div>
        
        <div class="textoTopo" > 
        <h3><u>Sobre Mim</u></h3>
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
        <p>Tenho como Hobbies jogos, sejam no Desktop, Mobile ou Console, desde a infancia <br> tive um fascinio por video game e jogos em geral.</p><br><p>Possuo tambem o gosto por filmes de estratégia e gosto da prática de esportes, como Futebol e Tennis, <br>por ja ter praticado ambos boa parte de minha infacia e adolescencia.</p>
        <br><p>A partir do momento em que passei a focar em desenvolvimento WEB focado em Layout e criação de consultas com PHP passei a ter o desenvolvimento também como um Hobbie.</p>
        </div>
        </div>
        
        <div class="row" id="conhecimentos">
            
        <div class="imagemRodape col-md-3">
            <img class="img-responsive img-rounded"  src="img/livros.png"/>
        </div>
            
        <div class="textoRodape" >
        <h3><u>Conhecimentos</u></h3>
        <br>
        <p><b><u>Conhecimentos abrangentes em:</u></b> HTML, CSS, e Bootstrap criando Designs Responsivos.</p>
        <p><b><u>Conhecimentos básicos em PHP</u></b>, como por exemplo: realização de consultas ao banco de dados, criação de funções de login, e proteção de páginas onde usuários sem o devido acesso não possam visualizar.</p>
        <p>Possuo também conhecimentos em: Power Point (intermediário). Microsoft Word (intermediário). Excel (básico). Banco de Dados SQL (Básico). Instalação e configuração de SQL Server (intermediário).</p>
        <p>Juntamente a instalações e configurações de impressoras em geral.</p>
        <p>Conhecimentos abrangentes na metodologia ágil <b><u>SCRUM</u></b>.</p>
        
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
        <p><b><u>Telefones:</u></b> (12) 99757-6804 WhatsApp / (12) 99756-3497 (Recado) .</p>
        <p><b><u>E-mail:</u></b> thiagoamotta@outlook.com .</p>
        <p><b><u>Linkedln:</u></b> <a href="https://www.linkedin.com/in/thiago-alves-377157128">https://www.linkedin.com</a> .</p>
        <p><b><u>Facebook:</u></b> <a href="https://www.facebook.com/thiagoalvesmotta">https://www.facebook.com</a> .</p>  
        </div>
        </div>
        </div>
        
        <div class="row" id="endereco">
            
        <div class="googleMaps col-md-12" >
        <div id="map">
            <script>
              function initMap() {
                var uluru = {lat: -23.180058, lng: -45.81264139999996};
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
        <h3>Endereço</h3>
        <br>
        &emsp; Rua: Benedito Eras. &emsp;
        Nº 363. &emsp;
        Bairro: Jardim Americano. &emsp;
        São José dos Campos - SP. &emsp;
        CEP: 12.225-070.        
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