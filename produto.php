
     <?php
   $cabecalho_title="Produtos Mirror Fashion";
   $cabecalho_css="<link rel='stylesheet' href='css/produto.css">
    include("cabecalho.php");
   ?>
<!--aqui fica o conteudo--> 
<div class="produto">
  <h2> Fuzzy cardigan   </h2>
 <p>por apenas R$ 129,00</p>
  <form action="">
    <fieldset class="cores">

      <legend>Escolha a cor: </legend>

      <input type="radio" name="cor" value="verde" checked>
      <label for="verde">
          <img src="img/produtos/foto2-verde.png" alt="verde">
      </label>
    

       <input type="radio" name="cor" value="rosa">
      <label for="rosa">
          <img src="img/produtos/foto2-rosa.png" alt="rosa">
      </label>

       <input type="radio" name="cor" value="azul" >
      <label for="azul">
          <img src="img/produtos/foto2-azul.png" alt="azul">
      </label>

  <input type="subimit" >
  
    </fieldset>
  </form>

</div>

<?php include("rodape.php")?>

