<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BarberShop Agenda</title>
    <link rel="stylesheet" type="text/css" href="_css/barbershop-css/barbershopAgenda_estilo.css"/>
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
                <li><a href="BarberShopPhotos.php"><div class="link"><b>Galeria</b></div></a></li>
                <li><a href="BarberShopPublic.php"><div class="link"><b>Publicações</b></div></a></li>
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
            <h2>Agende seu horário</h2>
            <!--<h2>/Sua barbearia Online</h2>-->
        </hgroup>

        <img id="icone" src="_imagens/BarberShopLogo5.png"/>
    </header>
            
            <fieldset id="usuario"><legend>AGENDAMENTO</legend>
                <form id="dUser">
                <p><label for="cNome">Nome: </label> <input type="text" name="tNome" id="cNome" size="20" maxlength="36" placeholder="Nome Completo"/></p>
                <p><label for="cMail">E-mail:</label> <input type="email" name="tMail" id="cMail" size="20" maxlength="40"/></p>
                <p><label for="cMail">Confirme seu E-mail:</label> <input type="email" name="tMail" id="cMail" size="20" maxlength="40">
                <p><label for="cNasc">Data de Nascimento:</label> <input type="date" name="tNasc" id="cNasc"/></p>
                
                <form>
                <fieldset id="sexo"><legend>Sexo</legend>
                    <input type="radio" name="tSexo" id="cMasc"/> <label for="cMasc">Masculino</label></br>
                    <input type="radio" name="tSexo" id="cFem"/> <label for="cFem">Feminino</label>
                </fieldset>
                </form>
                
                <form>
                <fieldset id="contato"><legend>Contato</legend>
                    <p><label for="cTel">Telefone Residencial:</label> <input type="" name="tTel" id="cTel" placeholder="Tel Residencial com DDD"/> </p>
                    <p><label for="cCel">Telefone Celular:</label> <input type="" name="tCel" id="cCel" placeholder="Tel Celular com DDD e digítos"/> </p>
                </fieldset>
                </form>

                <form>
                <fieldset id="agendamento"><legend>Realizar agendamento</legend>
                    <p><label for="uOpcao">Escolha o seu agendamento</label>
                        <select name="opcoes">
                            <option value="corteSimples">Corte Simples</option>
                            <option value="cortePenteado">Corte + Penteado</option>
                            <option value="corteProgressiva">Corte + Progressiva</option>
                            <option value="progressiva">Progressiva</option>
                        </select></br>
                    
                    <p><label for="aDate">Data de agendamento</label> <input type="date" name="aDate" required/><br/><br/> 
                
                </fieldset>
                </form>

                <form>
                    
                    <input type="submit" name="" value="Agendar">
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