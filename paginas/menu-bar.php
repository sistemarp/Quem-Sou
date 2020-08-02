<style>
    /* Estilizando menu */
    .nav-bar{
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        height: 70px;
    }

    .nav-ul{
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .nav-logo img{
        margin-left: 50px;
        width: 200px;
        height: 35px;
        cursor: pointer;
    }

    .nav-links{
        display: flex;
        align-items: center;
        justify-content: space-around;
        min-width: 700px;
    }

    .nav-links li{
        list-style: none;
    }

    .nav-links li a{
        text-decoration: none;

        /* Estilização da fonte vindo do figma */
        font-family: Nunito;
        font-style: normal;
        font-weight: normal;
        font-size: 16px;
        line-height: 22px;

        /* identical to box height */
        color: rgba(34, 34, 34, 0.75);
    }

    .nav-links button{
        width: 130px;
        height: 40px;
        border: 1px solid #3E3F43;
        box-sizing: border-box;
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0);
        outline-style: none;

        font-family: Nunito;
        font-style: normal;
        font-weight: bold;
        font-size: 16px;
        line-height: 22px;

        /* identical to box height */
        color: #3E3F43;
    }

    .nav-links button:hover{
        box-shadow: 1px 1px 6px black;
        cursor: pointer;
    }.nav-links button:active{
        box-shadow: none;
        color: rgb(255, 98, 98);
    }

    .linke.active{
        color: "#1b5e20";
    }
</style>
<!-- Criação do menu -->

<nav>
    <div class='nav-bar'>
        <ul class='nav-ul'>
            <div class='nav-logo'>
                <a href="index.php"><img src="./imagen/logo.png" alt="logo-marca"></a>
            </div>
            
            <div class='nav-links'>
                <li><a class='linke' id='link-home' href="">Home</a></li>
                <li><a class='linke' id='link-categoria' href="">Categorias</a></li>
                <li><a class='linke' id='link-faq' href="">Quem Somos</a></li>
                <li><a class='linke' id='link-contato' href="">Contato</a></li>

                <button>Cadastre-se</button>
            </div>
        </ul>
    </div>
</nav>