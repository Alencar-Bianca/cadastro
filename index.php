<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="image/favicon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/colors.css">

    <link rel="stylesheet" href="style/components/main-float.css">
    <link rel="stylesheet" href="style/components/main-display.css">
    <link rel="stylesheet" href="style/components/main-header.css">
    <link rel="stylesheet" href="style/components/main-title.css">
    <link rel="stylesheet" href="style/components/main-subtitle.css">
    <link rel="stylesheet" href="style/components/main-banners.css">
    <link rel="stylesheet" href="style/components/main-input.css">
    <link rel="stylesheet" href="style/components/main-about.css">
    <link rel="stylesheet" href="style/components/main-p.css">
    <link rel="stylesheet" href="style/components/main-skills.css">
    <link rel="stylesheet" href="style/media.css">
    
</head>
<body>
    <header class="main-header">
        <div class="main-display">
            <div class="logo -left">
                <h1 class="main-title">Alencar</h1>
            </div>
            <nav class="menu-desktop -right">
                <ul class="ul">
                    <li class="li"><a class="a" href="">Home</a> </li>
                    <li class="li"><a class="a" href="">Sobre</a> </li>
                    <li class="li"><a class="a" href="">Serviços</a> </li>
                    <li class="li"><a class="a" href="">Contato</a></li>
                </ul>                 
            </nav>

            <nav class="menu-mobile -right">
                <h2 class="logo-menu"><i  class="fas fa-align-justify"></i></h2>
                <ul class="ul">
                    <li class="li"><a class="a" href="">Home</a> </li>
                    <li class="li"><a class="a" href="">Sobre</a> </li>
                    <li class="li"><a class="a" href="">Serviços</a> </li>
                    <li class="li"><a class="a" href="">Contato</a></li>
                </ul>                 
            </nav>
        </div>
        <div class="clear"></div>
    </header>
   
    <section class="main-banners">
    
        <div style="background-image: url('image/banner.jpg');" class="img-banner"></div>
        <div style="background-image: url('image/banner2.jpg');"  class="img-banner"></div>
        <div style="background-image: url('image/banner3.jpg');"  class="img-banner"></div>
        <div style="background-image: url('image/banner4.jpg');"  class="img-banner"></div>
        <div  class="layer">
            <div class="main-display">
                <form>
                    <h1 class="main-title">Entre em Contato</h1>
                    <input class="main-input" type="email" name="email" placeholder="Email">
                    <input class="bnt" type="submit" name="action" value="Enviar">
                </form>
            </div>
        </div> 
    </section>

    <section class="main-about">
        <div class="main-display">
            <h1 class="main-title">Sobre</h1>
            <div class="w50 -left maxmargin">
                <h2 class="main-subtitle">Bianca Alencar</h2>
                <p class="main-p">Oie, eu sou apenas uma estudante de full stack. Estou desenvolvendo vários projetos próprios, para estudar e aprimorar os meu conhecimentos.</p>
            </div>
            <div class="w50 -right margintop">
            <img class="aboutimg" src="image/img.jpg" alt="Foto">
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="main-skills">
        <div class="main-display">
            <h1 class="main-title">Habilidades</h1>

            <div class="containerskills">
                <div class="single-skills">
                <h2 class="main-subtitle"><i class="fab fa-html5"></i></h2>
                <h3 class="main-subtitle">html5</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique numquam odit.</p>
                </div>
                <div class="single-skills">
                <h2 class="main-subtitle"><i class="fab fa-css3"></i></h2>
                <h3 class="main-subtitle">css</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique numquam odit.</p>
                </div>
                <div class="single-skills">
                <h2 class="main-subtitle"><i class="fab fa-js"></i></h2>
                <h3 class="main-subtitle">javascript</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique numquam odit.</p>
                </div>
                <div class="single-skills">
                <h2 class="main-subtitle"><i class="fab fa-php"></i></h2>
                <h3 class="main-subtitle">php</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique numquam odit.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/c53d477a6e.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/slide.js"></script>
</body>
</html>