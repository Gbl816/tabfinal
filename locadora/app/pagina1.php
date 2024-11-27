<?php
session_start();
if (!isset($_SESSION['user'])){
header('location: ../index.php');
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../assets/css/style6.css"/>
  <title>Home Da Locadora</title>
</head>
<body>
  <div class="container">
    <div id="interface">
      <header id="cbc1">
        <section id="co">
          <article id="principal">
          <hgroup>
            <br><br><br>
            <h1>Locadora De Veículos</h1>
            <h2>MOTORS</h2>
          </hgroup>
          <img id="icon" src="../assets/img/car-1024.webp" width="30%">
    
     
      <?php require_once("menu.php")?>
      
    </header>
      <header id="nog">
        <h1>A Melhor Locadora Da Paraíba!</h1>
        <br>
        <br>
        <br>
      <br>
      <br>
      <br>
      <br>
        <h3 class="uhu">Atualizado em 03/12/2024</h3>
      </header>
        <h2 class="na">Como se deu nossa história?</h2>
        <p>Gabriel Alves De Macedo, um jovem apaixonado por carros, abriu a "Motors" em João Pessoa 
          após se formar em administração e logística. Com atendimento personalizado e uma frota diversificada, 
          a locadora rapidamente se destacou no mercado, oferecendo uma experiência única aos turistas. 
          A empresa cresceu e se expandiu para outras cidades do Nordeste, mantendo seu compromisso com a 
          excelência e contribuindo para o desenvolvimento do turismo local. Gabriel realizou seu sonho, 
          mostrando que com determinação e paixão, qualquer sonho pode se tornar realidade.<p>
      </article>
      </section>
      <table id="SPFC">
        <caption><h2 class="kka">Carros Mais Alocados</h2><span>NOV/2024</span></caption>
        <tr><td class="ce">Fiat Uno</td><td class="cd">Cerca de 20-30%.</td></tr>
        <tr><td class="ce">Chevrolet Onix</td><td class="cd">Cerca de 25-35%.</td></tr>
        <tr><td class="ce">Hyundai HB20</td><td class="cd">Cerca de 15-25%.</td></tr>
        <tr><td class="ce">Volkswagen Gol</td><td class="cd">Cerca de 10-20%.</td></tr>
        <tr><td class="ce">Renault Kwid</td><td class="cd"> Cerca de 5-15%.</td></tr>
      </table>
      
      <aside id="lateral">
        <h2>Curiosidades sobre a Locadora "Motors"</h2>  
       <p>1.Avaliações Positivas: A "Motors" conta com mais de 1.500 avaliações online, com uma média de 4,8 estrelas, destacando a qualidade do atendimento e a satisfação dos clientes.</p>
       <p>2.Frota Diversificada: A locadora possui uma bela frota veículos, incluindo opções econômicas e carros de luxo, atendendo a diferentes perfis de clientes.</p>
       <p>3.Taxa de Retorno: Aproximadamente 70% dos clientes que alugam um carro voltam para novas locações, o que demonstra a fidelidade e a confiança na locadora.</p>
       <p>4.Experiências Personalizadas: A "Motors" oferece mais de 20 pacotes de experiências, como passeios guiados, atraindo tanto turistas quanto locais.</p>
       <p>5.Parcerias Locais: A locadora tem parcerias com restaurantes e hotéis da região, proporcionando descontos e promoções exclusivas para os clientes.</p>
       

      </aside>
      <footer id="Rodape">
        <h5>Copyright &copy;2024 - By Motors.</h5>
      </footer>
    </div>
  </div>
</body>
</html>