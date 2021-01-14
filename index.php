<html>
<head>

  <title>Barber Shop</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="_css/barbershop-css/style.css"/>
  <link rel="stylesheet" type="text/css" href="_javascript/script.js"/>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
    .mySlides {display:none; text-align: center;}
    .w3-tag, .fa {cursor:pointer}
    .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
  </style>


<script src="https://kit.fontawesome.com/a076d05399.js"></script>



<body>

<!--------------------------------- [ CABEÇALHO ] -------------------------------------------->
<header>
  <nav>
    <ul>
      <li>
        <a href="index.php">BarberShop</a>
      </li>
      
      <li>
        <a href="BarberShopAgendaUserNRegister.php">Agendar Horário</a>
      </li>

      <li>
        <a href="#">Nosso Trabalho</a>
      </li>

      </li>
      <li style="float:right">
        <a class="active" href="BarberShopCadastrese.php"><b>Cadastre-se</b></a>
      </li>
    </ul>
  </nav>
</header>
<!----------------------------------------------------------------------------------------->





<!--------------------------------- [ CAROUSEL ] -------------------------------------------->
<fieldset>
<div class="w3-content" style="max-width:90%;margin-top:27px">
  <div class="w3-panel"></div>

  <!-- (CAROUSEL) -->
  <div class="w3-container">
    <div class="w3-display-container mySlides">
      <img src="_imagens/img1.png" style="width:100%;">
      <div class="w3-display-topleft w3-container w3-padding-32"></div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="_imagens/img2-3.png" style="width:100%">
      <div class="w3-display-middle w3-container w3-padding-32"></div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="_imagens/img3.png" style="width:100%">
      <div class="w3-display-topright w3-container w3-padding-32"></div>
    </div>

    <!-- (CAROUSEL / BOTÕES ) -->
    <div class="w3-container w3-black w3-padding w3-xlarge">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-yellow"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-yellow"></i></div>
      
    
      <div class="w3-center">
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-yellow" onclick="currentDiv(1)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-yellow" onclick="currentDiv(2)"></span>
        <span class="w3-tag demodots w3-border w3-transparent w3-hover-yellow" onclick="currentDiv(3)"></span>
      </div>
    </div>
  </div>
  <!----------------------------------------------------------------------------------------->



  <!--------------------------------- [ SCRIPT - CAROUSEL ] --------------------------------->
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-yellow", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-yellow";
}
</script>
<!----------------------------------------------------------------------------------------->





<!--------------------------------- [ RESUMO ] -------------------------------------------->
  
  <!-- (RESUMO) -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-yellow w3-padding-16">Conheça-nos melhor</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Valores</h3>
      <p>Textp 1</p>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Objetivo</h3>
      <p>Textp 2</p>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Confiança</h3>
      <p>Textp 3</p>
    </div>

    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3>Profissionalismo</h3>
      <p>Textp 4</p>
    </div>
  </div>
</div>
</fieldset>

<br>
</body>

<!--------------------------------- [ RODAPÉ ] -------------------------------------------->
<section class="footer">
  <div class="container">
      
      <ul class="nav">

      <li class="grid-4">

      <fieldset class="localization">  
      <h2>Endereço</h2>
            <section class="localizacao">
              <div class="container">
                    <iframe class="mapagoogle" src="https://www.google.com.br/maps/place/Auto+Partes/@-23.5398381,-46.5034744,21z/data=!4m12!1m6!3m5!1s0x94ce60ba0b7fced7:0x62da75682bf9997f!2sPatriarca+-+Vila+R%C3%A9!8m2!3d-23.531155!4d-46.501455!3m4!1s0x94ce60b33bf6a52b:0xc1d53249d2b0ef55!8m2!3d-23.5399643!4d-46.5033815" width="640" height="350" left="-350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </section>
      </fieldset>
        </li>

        <li class="grid-6">
          <fieldset>
            <h2>Sobre Nós</h2>
            <p>Somos a mais inovadora barbearia da atualidade, venha conferir nossos trabalhos com um preço que cabe no seu bolso.</p>
            
            <h2> Nossos Horários </h2>
            <h5>Segunda-Feira: 09h00 às 18h00</h5>
            <h5>Terça-Feira: 09h00 às 18h00</h5>
            <h5>Quarta-Feira: 09h00 às 18h00</h5>
            <h5>Quinta-Feira: 09h00 às 18h00</h5>
            <h5>Sexta-Feira: 09h00 às 18h00</h5>
            <h5>Sábado: 09h00 às 18h00</h5>
            <h5>Domingo: 09h00 às 18h00</h5>

          </fieldset>
        </li>

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
                
            <br><br>
            <img src="_imagens/BarberShopLogo5.png">
            <br>
            <br>
            <br>
            <br>
            <br>


          </li>
          </li>
          </li>
        </fieldset>
        </li>
      </ul>
  </div>
</section>

</html>

