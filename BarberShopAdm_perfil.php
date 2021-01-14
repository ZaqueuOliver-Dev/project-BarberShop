<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BarberShop - Perfil</title>
    <link rel="stylesheet" type="text/css" href="_css/barbershop-css/barbershopAdm_perfil.css"/>
    <link rel="stylesheet" href="_css/barbershopAdm_estilo.css"/>
    <link rek="stylesheet" type="text/php" href="_php/conectBD_barbershop.php"/>
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>


<body>
<section id="menuprincipal">
    <div class="barra">
        <nav class="navigation">
            <h1>BarberShop</h1>
            <ul type="disc" class="mainmenu">
                <li><a href="BarberShop.php"><div class="link"><b>Home</b></div></a></li>
                <li><a href="BarberShopAgenda.php"><div class="link"><b>Agenda</b></div></a></li>
                <li><a href="BarberShopFotos.php"><div class="link"><b>Galeria</b></div></a></li>
                <li><a href="BarberShopPublicacao.php"><div class="link"><b>Publicações</b></div></a></li>
                <li><a href="BarberShopAdm.php"><div class="link"><b>Administração</b></div></a>
                    <ul class="submenu">
                        <li><a href="BarberShopAdm_usuario.php"><div class="link"><b>Usuarios</b></div></a></li>
                        <li><a href="BarberShopAdm_perfil.php"><div class="link"><b>Perfil</b></div></a></li>
                        <li><a href="BarberShopAdm_relat.php"><div class="link"><b>Relatórios</b></div></a></li>
                        <li><a href="BarberShopAdm_configeral.php"><div class="link"><b>Configurações Gerias</b></div></a></li>
                    </ul>    
                </li>
                <li><a href="access.php"><div class="link"><b>Acesso</b></div></a>
                    <ul class="submenu">
                        <li><a href="barberShopLogin.php"><div class="link"><b>Sair</b></div></a></li>
                        <li><a href="BarberShopAcess_Meuperfil.php"><div class="link"><b>Meu Perfil</b></div></a></li>
                        <li><a href="BarberShopAcess_Meusrelat.php"><div class="link"><b>Meus Relatórios</b></div></a><li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</section>


<div id="interface">
    <header id="cabecalho">
        <hgroup>
            <h1>BarberShop - Perfil</h1>
            <!--<h2>/Sua barbearia Online</h2>-->
        </hgroup>

        <img id="icone" src="_imagens/BarberShopLogo5.png"/>
    </header>
            
            <fieldset id="perfil"><legend>Perfis de Usuários</legend>
            <div class="tab">
                    <input type="radio" name="tabs" id="tab1" checked>
                    <label for="tab1">Meu Perfil</label>

                    <input type="radio" name="tabs" id="tab2">
                    <label for="tab2">Todos Perfis</label>


                <div class="tabs">
                    <div class="content">
                        
                            <table id="permissoes">
                                <caption>Permissões do perfil</caption>

                                    
                                    <tr><td class="cabPerm">Módulos</td></tr>
                                    <tr><td class="cabPermHab">Permissões Habilitadas<td></tr>


                                    <tr><td class="ce">Home</td>
                                        <td class="cd">Teste</td></tr>
                                    

                                    <tr>
                                        <td rowspan="2" class="ce">Agenda</td><td class="cd">Teste</td>
                                    </tr>
                                    

                                    <tr>
                                        <td rowspan="2" class="ce">Galeria</td><td class="cd">
                                        </td>
                                    </tr>                                    


                                    <tr>
                                        <td rowspan="2" class="ce">Publicações</td><td class="cd">Teste</td>
                                    </tr>
                                    


                                    <tr>
                                        <td class="cd">Administração</td>

                                    </tr>


                                    <tr>
                                        <td class="ce">Acesso</td><td class="cd">Teste</td>

                                    </tr>
                            </table>
                        
                    </div>
        
                    <div class="content">
                        <h2>Perfis</h2>
                                <p>Maecenas dictum, urna ut consequat condimentum, est dui commodo diam, ac pretium dui ante eu quam. Curabitur posuere metus nec tellus venenatis placerat. Ut egestas neque in odio vulputate gravida. In at justo ac est laoreet eleifend vel quis arcu. Aliquam erat volutpat. Proin vitae vehicula neque. Nam tempus erat ac ante tincidunt tincidunt. Pellentesque eu nibh sapien. Nunc augue magna, lacinia eget congue eget, mattis id tortor.</p>
                    </div>
                </div>
            </div>
            </fieldset>


                
</div>


                </hgroup>
            </header>
        </article>
    </section>
</body>
</html>