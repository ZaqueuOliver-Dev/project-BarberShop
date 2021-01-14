<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BarberShop ADM - User</title>
    <link rel="stylesheet" type="text/css" href="_css/barbershop-css/barbershopAdm_estilo.css"/>
    <link rel="stylesheet" href="_css/barbershopAdm_estilo.css"/>
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>

<body>

<section id="menuprincipal">
    <div class="barra">
        <nav class="navigation">
            <h1>BarberShop</h1>
            <ul type="disc" class="mainmenu">
                <li><a href="BarberShop.html"><div class="link"><b>Home</b></div></a></li>
                <li><a href="BarberShopAgenda.html"><div class="link"><b>Agenda</b></div></a></li>
                <li><a href="BarberShopFotos.html"><div class="link"><b>Galeria</b></div></a></li>
                <li><a href="BarberShopPublicacao.html"><div class="link"><b>Publicações</b></div></a></li>
                <li><a href="BarberShopAdm.html"><div class="link"><b>Administração</b></div></a>
                    <ul class="submenu">
                        <li><a href="BarberShopAdm_usuario.html"><div class="link"><b>Usuarios</b></div></a></li>
                        <li><a href="BarberShopAdm_perfil.html"><div class="link"><b>Perfil</b></div></a></li>
                        <li><a href="BarberShopAdm_relat.html"><div class="link"><b>Relatórios</b></div></a></li>
                        <li><a href="BarberShopAdm_configeral.html"><div class="link"><b>Configurações Gerias</b></div></a></li>
                    </ul>    
                </li>
                <li><a href="access.html"><div class="link"><b>Acesso</b></div></a>
                    <ul class="submenu">
                        <li><a href="barberShopLogin.html"><div class="link"><b>Sair</b></div></a></li>
                        <li><a href="BarberShopAcess_Meuperfil.html"><div class="link"><b>Meu Perfil</b></div></a></li>
                        <li><a href="BarberShopAcess_Meusrelat.html"><div class="link"><b>Meus Relatórios</b></div></a><li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</section>

<div id="interface">
    <header id="cabecalho">
        <hgroup>
            <h1>ADM BarberShop Online</h1>
            <h2>Usuários</h2>
            <!--<h2>/Sua barbearia Online</h2>-->
        </hgroup>

        <img id="icone" src="_imagens/BarberShopLogo5.png"/>
    </header>
    <section id="corpo-full">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    <h1></h1>
                    
                    <div class="pesUser">
                    <fieldset id="pesUser"><legend>Pesquisar Usuário</legend>
                        <form>
                            <p>Usuário
                            <input type="text" name="" placeholder="Login ou Nome">
                            </p>

                            <p>
                            <input type="submit" name="" value="Pesquisar">
                            </p>
                            
                            <a href="BarberShopCadUser.html">Cadastrar Novo Usuário</a><br>
                        </form>

                    </fieldset>
                    </div>
                    
                    <!--<h3>Cadastro > Membro</h3>
                    <h1>Cadastre-se e receba notícias</h1>
                    <h2>por Zaqueu Carvalho</h2>
                    <h3 class="direita">Atualizado em 30/Julho/2018</h3>
                </hgroup>
            </header>

            <form method="post" id="fContato" action="mailto:zaqueupedrocar@gmail.com"/>

            <fieldset id="usuario"><legend>Identificação do Usuário</legend>
                <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="20" maxlength="36" placeholder="Nome Completo"/></p>
                <p><label for="cLogin">Login:</label> <input type="text" name="" id="" size="20" maxlength="36" placeholder="Login"/></p>
                <p><label for="cSenha">Senha:</label> <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="8 dígitos"/></p>
                <p><label for="cSenha">Confirme sua senha:</label> <input type="password" name="tSenha" id="cSenha" size="14" maxlength="8" placeholder="Confirme sua senha"/></p>
                <p><label for="cMail">E-mail:</label> <input type="email" name="tMail" id="cMail" size="20" maxlength="40"/></p>
                <p><label for="cMail">Confirme seu E-mail:</label> <input type="email" name="tMail" id="cMail" size="20" maxlength="40">
                <p><label for="cIdade">Idade:</label> <input type="number" name="tIdade" id="cIdade" min="0" max="999"/></p>
                <p><label for="cNasc">Data de Nascimento:</label> <input type="date" name="tNasc" id="cNasc"/></p>
                <fieldset id="sexo"><legend>Sexo</legend>
                    <input type="radio" name="tSexo" id="cMasc"/> <label for="cMasc">Masculino</label></br>
                    <input type="radio" name="tSexo" id="cFem"/> <label for="cFem">Feminino</label>
                </fieldset>
            </fieldset>

            <fieldset id="endereco"><legend>Endereço do Usuário</legend>
                <p><label for="cRua">Logradouro:</label> <input type="text" name="tRua" id="cRua" size="13" maxlength="25" placeholder="Rua, Av, Trav,..."/></p>
                <p><label for="cNum">Número:</label> <input type="number" name="tNum" id="cNum" min="0" max="99999"/></p>
                <p><label for="cBar">Bairro:</label> <input type="text" name="tBar" id="cBar" placeholder="Informe seu bairro"/> </p>
                <p><label for="cComp">Complemento:</label> <input type="text" name="tComp" id="cComp" placeholder="Casa, Ap"/> </p>
                <p><label for="cCid">Cidade:</label>
                    <input type="text" name="tCid" id="cCid" size="20" maxlength="35" placeholder="Sua Cidade"/></p>
            </fieldset>

            <fieldset id="contato"><legend>Contato</legend>
                <p><label for="cTel">Telefone Residencial:</label> <input type="" name="tTel" id="cTel" placeholder="Tel Residencial com DDD"/> </p>
                <p><label for="cCel">Telefone Celular:</label> <input type="" name="tCel" id="cCel" placeholder="Tel Celular com DDD e digítos"/> </p>
            </fieldset>

            <fieldset id="infcomplementar"><legend>Informações Profissionais</legend>
                <p>Trabalha:
                <label for="cIcp"><input type="checkbox" name="tinfcomplementar" id="cIcp"/>Sim</label>
                <label for="cIcpn"><input type="checkbox" name="tinfcomplementar" id="cIcpn"/>Não</label></br>
                    <p><label for="cSs"><input type="radio" name="tinfcomplementar" id="cSs"/>Seg à Sex:</label></p>
                    <p><label for="cSsab"><input type="radio" name="tinfcomplementar" id="cSsab"/>Seg à Sab:</label></p>
                    <p><label for="cSd"><input type="radio" name="tinfcomplementar" id="cSd"/>Seg à Dom:</label></p>
                    <p><label for="cHr">Horario de Trabalho: <input type="text" name="tinfcomplementar" id="cHr" placeholder="Dás - Até"/></label></p>
                <p>Possui Escala:</p>
                    <p><label for="cEsc">Sim<input type="radio" name="tinfcomplementar" id="cEsc"/></label>
                    <label for="cEscn"><input type="radio" name="tinfcomplementar" id="cEscn"/>Não</label></p>
            </fieldset>

            <fieldset id="escola"><legend>Informações Acadêmicas</legend>
                <p>Estuda:
                    <label for="cEst"><input type="radio" name="tescola" id="cEst"/>Sim</label>
                    <label for="cEstn"><input type="radio" name="tescola" id="cEstn"/>Não</label></br>
                <p><label for="cCest"><input type="radio" name="tescola" id="cCest"/>Seg à Sex:</label></p>
                <p><label for="cCestsa"><input type="radio" name="tescola" id="cCestsa"/>Seg à Sab:</label></p>
                <p><label for="cCestsd"><input type="radio" name="tescola" id="cCestsd"/>Seg à Dom:</label></p>
            </fieldset>-->
    </section>
</body>
</html>