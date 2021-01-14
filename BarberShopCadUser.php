<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BarberShop Cadastro</title>
    <link rel="stylesheet" type="text/css" href="_css/barbershop-css/barbershopCadUser.css"/>
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
            <h1>BarberShop Online</h1>
            <h2>Usuario</h2>
            <!--<h2>/Sua barbearia Online</h2>-->
        </hgroup>

        <img id="icone" src="_imagens/BarberShopLogo5.png"/>
    </header>
            
            <fieldset id="usuario"><legend>Cadastrar Novo Usuário</legend>
                <form id="dUser">
                <p><label for="cNome">Nome: </label> 
                    <input type="text" name="tNome" id="cNome" size="20" maxlength="36" placeholder="Nome"/></p>
                
                <p><label for="Snome">Sobrenome: </label> 
                    <input type="text" name="" id="Snome" size="20" maxlength="36" placeholder="Sobrenome"/></p>
                
                <p><label for="cMail">E-mail:</label> 
                    <input type="email" name="tMail" id="cMail" size="20" maxlength="40"/></p>
                
                <p><label for="cMail">Confirme seu E-mail:</label> 
                    <input type="email" name="tMail" id="cMail" size="20" maxlength="40">
                
                <p><label for="cNasc">Data de Nascimento:</label> 
                    <input type="date" name="tNasc" id="cNasc"/></p>

                <p><label for="Perfil">Perfil:</label>
                    <select name="perfil">
                        <option value="cliente">Cliente</option>
                        <option value="cliente">Usuário</option>
                        <option value="cliente">Funcionário</option>
                        <option value="cliente">Gerente</option>
                        <option value="cliente">Administração</option>
                    </select>

                <p><label for="cObs">Observação: </label> 
                    <input type="text" name="tNome" id="Obs" size="70" maxlength="76" placeholder="Insira uma observação para o sua barbeiro"/></p>

                <p><label for="cMail">Senha:</label> 
                    <input type="password" name="tPass" id="cPass" size="20" maxlength="40">
                
                <p><label for="cMail">Confirme sua senha:</label> 
                    <input type="password" name="tPass" id="cPass" size="20" maxlength="40">


                </fieldset>
                </form>

                <form>
                    
                    <input type="submit" name="" value="Cadastrar">
                    <input type="submit" name="" value="Limpar">
                </form>
            </fieldset>
    <section id="corpo-full">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
        
    </div>


                </hgroup>
            </header>
        </article>
    </section>
</body>
</html>