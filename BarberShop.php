<html>
<!-- Senha do Banco de Dados: BarberShop      Senha: bS@0520-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BarberShop Online</title>

    <link rel="stylesheet" type="text/css" href="_css/barbershop-css/barbershop_estilo.css"/>
    
    <script language="javascript" src="_javascript/funcoes.js"></script>

</head>
<script language="javascript" src="_javascript/funcoes.js"></script>
<body>

    <section id="menuprincipal">
    <div class="barra">
        <nav class="navigation">
            <h1>BarberShop</h1>
            <ul type="disc" class="mainmenu">
                <li>
                    <a href="BarberShop.php">
                        <div class="link">
                            <b>Home</b>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="BarberShopAgenda.php">
                        <div class="link">
                            <b>Agenda</b>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="BarberShopPhotos.php">
                        <div class="link">
                            <b>Galeria</b>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="BarberShopPublic.php">
                        <div class="link">
                            <b>Publicações</b>
                        </div>
                    </a>
                </li>
                
                <li>
                    <a href="BarberShopAdm.php">
                        <div class="link">
                            <b>Administração</b>
                        </div>
                    </a>
                        <ul class="submenu">
                            <li>
                                <a href="BarberShopAdm_usuario.php">
                                    <div class="link">
                                        <b>Usuários</b>
                                    </div>
                                </a>
                            </li>
                        
                            <li>
                                <a href="BarberShopAdm_perfil.php">
                                    <div class="link">
                                        <b>Perfil</b>
                                            </div>
                                </a>
                            </li>

                            <li>
                                <a href="BarberShopAdm_relat.php">
                                    <div class="link">
                                        <b>Relatórios</b>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="BarberShopAdm_configeral.php">
                                    <div class="link">
                                        <b>Configurações Gerias</b>
                                    </div>
                                </a>
                            </li>
                        </ul>     
                </li>

                <li>
                    <a href="access.php">
                        <div class="link">
                            <b>Acesso</b>
                        </div>
                    </a>
                        <ul class="submenu">
                            <li>
                                <a href="barberShopLogin.php">
                                    <div class="link">
                                        <b>Sair</b>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="BarberShopAcess_Meuperfil.php">
                                    <div class="link">
                                        <b>Meu Perfil</b>
                                    </div>
                                </a>
                            </li>
                        </ul>
                </li>
            </ul>
        </nav>
    </div>
    </section>

<div id="interface">
    <header id="cabecalho">
        <hgroup>
            <h1>BarberShop Online</h1>
            <!--<h2>/Sua barbearia Online</h2>-->
        </hgroup>

        <img id="icone" src="_imagens/BarberShopLogo5.png"/>
    </header>

    <section id="corpo">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    [ INSERIR AQUI UM FEED QUE DEVERÁ CONTER AS PUBLICAÇÕES DAS BARBEARIAS ]
                </hgroup>
            </header>
        </article>
    </section>
    
    <aside>
    </aside>
</div>
</body>
</html>