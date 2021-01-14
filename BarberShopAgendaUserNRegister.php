<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>BarberShop Agenda</title>
    <link rel="stylesheet" type="text/css" href="_css/barbershop-css/BarberShopAgendaUserNRegister.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rek="stylesheet" type="text/php" href="_php/conectBD_barbershop.php"/>
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>


<!--------------------------------- [ CABEÇALHO ] -------------------------------------------->
<header>
  <nav>
    <ul>
      <li>
        <a href="index.php">BarberShop</a>
      </li>

      </li>
      <li style="float:right">
        <a class="active" href="BarberShopCadatrese.php"><b>Cadastre-se</b></a>
      </li>
    </ul>
  </nav>
</header>
<!----------------------------------------------------------------------------------------->

<body>

<form action="#" class="w3-container w3-card-4 w3-light-grey w3-text-dark w3-margin">
<h1 class="w3-center" style="font-family:cursive">Realizar Agendamento</h1>
 
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


<button class="w3-button w3-block w3-section w3-yellow w3-ripple w3-padding"><b>Agendar</b></button>
<button class="w3-button w3-block w3-section w3-black w3-ripple w3-padding"><b>Cancelar</b></button>
</form>


<!--------------------------------- [ RODAPÉ ] -------------------------------------------->
<section class="footer">
  <div class="container">
      
      <ul class="nav">
        <li class="grid-4">
          
        <fieldset class="contact">
        <h2>Contato</h2>
          <li id="facebook">
            <a href="#">
              <img src="_imagens/contato-Facebook.png">Facebook
            </a>
          
          <li id="instagram">
            <a href="#">
              <img src="_imagens/contato-Instagram.png">Instagram
            </a>
          
          <li id="whatsapp">
            <a href="#">
               <img src="_imagens/contato-Whatsapp.png">Whatsapp
            </a>
          </li>

          <img src="_imagens/BarberShopLogo5.png">
        </fieldset>
        </li>
      </ul>
  </div>
</section>



</body>
</html>