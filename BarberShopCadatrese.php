<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BarberShop Cadastro</title>
    <link rel="stylesheet" type="text/css" href="_css/barbershop-css/barbershopCadUser.css"/>
    <link rel="stylesheet" href="_css/barbershopAdm_estilo.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rek="stylesheet" type="text/php" href="_php/conectBD_barbershop.php"/>
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>


<body>


<form action="#" class="w3-container w3-card-4 w3-light-grey w3-text-dark w3-margin">
<h2 class="w3-center">Realizar Agendamento</h2>
 
<div class="w3-col" style="width:2.5%"><i class="w3-xxlarge fa fa-user"></i></div>
<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="nome" type="text" placeholder="Nome Completo">
    </div>
</div>


<div class="w3-col" style="width:2.5%"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="E-mail">
    </div>
</div>

<div class="w3-col" style="width:2.5%"><i class="w3-xxlarge fa fa-phone"></i></div>
<div class="w3-row w3-section">

    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Celular">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-venus-mars"></i></div>
    <select class="w3-select w3-border" name="option">
        <option value="" disable selected>Sexo</option>
        <option value="1">Feminino</option>
        <option value="2">Masculino</option>
    </select>
</div>

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="dataAgenda" type="date">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-check"></i></div>
    <select class="w3-select w3-border" name="option">
        <option value="" disable selected>Serviço</option>
        <option value="1">Corte</option>
        <option value="2">Corte + Penteado</option>
        <option value="2">Penteado</option>
        <option value="2">Progressiva</option>
        <option value="2">Relaxamento</option>
        <option value="2">Luzes</option>
        <option value="2">Coloração</option>
    </select>
</div>

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="mensagem" type="text" placeholder="Deixe uma observação">
    </div>
</div>

<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-money"></i></div>
<div class="w3-row w3-section">
    <div class="w3-rest">
      <input class="w3-input w3-border" name="valor" type="moeda" >
    </div>
</div>


<button class="w3-button w3-block w3-section w3-yellow w3-ripple w3-padding">Agendar</button>
<button class="w3-button w3-block w3-section w3-black w3-ripple w3-padding">Cancelar</button>
</form>











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