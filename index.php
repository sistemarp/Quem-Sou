<?php 
    // Codigos desemvolvidor By: SistemARP

?>

<!-- Corpo html -->
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <!-- configuração padrao do arquivo html -->
    <title></title>
    <link rel="stylesheet" href="./css/style-index.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- Referenciando Materials icon google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Meta para ajustar ao tamanho do celular -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <!-- Menu Nav-Bar -->
    <?php include_once("./paginas/menu-bar.php"); ?>

    <!-- Corpo pagina -->
    <section class='container'>
        <div class='carder'>
            <figure><img src="./imagen/avatar.jpg" alt="avatar"></figure>

            <div class='carder-desc'> 
                <div class='carder-infos'>
                    <p>Nome:</p>
                    <span id='nome'></span>

                    <p>Contato:</p>
                    <span id='contato'></span>

                    <p>Email:</p>
                    <span id='email'></span>
                </div>

                <div class='carder-redes'>
                    <a href="http://facebook.com"><img src="./imagen/fb.png" alt="facebook"></a>
                    <a href="http://instagram.com"><img src="./imagen/is.png" alt="instagram"></a>
                    <a href="http://linkedin.com"><img src="./imagen/lk.png" alt="linkedin"></a>
                    <a href="http://pinterest.com"><img src="./imagen/pt.png" alt="pinterest"></a>
                </div>
            </div>
        </div>

        <div class='infos'>
        
        </div>

        <!-- <div class='infos'>

            <div class='card-icon'>
                <div class='icon'>
                    <figure><img src="./imagen/python.png" alt="python"></figure>
                </div>
                
                <div class='icon-info'>
                    <p>Python</p>
                    <span>Programação em python, web-sockets front end back end</span>
                    <button class='ver-mais'>Ver Mais</button>
                </div>
            </div>

            <div class='card-icon'>
                <div class='icon'>
                    <figure><img src="./imagen/mysql.png" alt="python"></figure>
                </div>
                
                <div class='icon-info'>
                    <p>MySql</p>
                    <span>Programação em python, web-sockets front end back end</span>
                    <button class='ver-mais'>Ver Mais</button>
                </div>
            </div>

            <div class='card-icon'>
                <div class='icon'>
                    <figure><img src="./imagen/java.png" alt="python"></figure>
                </div>
                
                <div class='icon-info'>
                    <p>Java</p>
                    <span>Programação em python, web-sockets front end back end</span>
                    <button class='ver-mais'>Ver Mais</button>
                </div>
            </div>

            <div class='card-icon'>
                <div class='icon'>
                    <figure><img src="./imagen/javascript.png" alt="python"></figure>
                </div>
                
                <div class='icon-info'>
                    <p>Javascript</p>
                    <span>Programação em python, web-sockets front end back end</span>
                    <button class='ver-mais'>Ver Mais</button>
                </div>
            </div>

        </div> -->

        <div class='rodape'>
            <span>Todos os direitos reservados a <b>SystemARP 2020 &copy;</b></span>
        </div>
    
    </section>
    <!-- Roda Pé -->
    
</body>
    <!-- Importação do jQuery/Ajax -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Importação do arquivo css padrão -->
    <script src="./java/index/java-index.js"></script>
</html>