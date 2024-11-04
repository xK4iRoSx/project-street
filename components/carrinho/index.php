
<link rel="stylesheet" href="../components/carrinho/style.css">
    <div class="conteiner-superior" id="carrinho">
        <i class='bx bxs-right-arrow-circle' onclick="fecharCarrinho()"></i>
        <button class="botao-fechar" onclick="fecharCarrinho()">✖</button>
        <h1>Seus Produtos</h1>
        <div class="containerCarrinho">
        <?php 
        
            if(isset($_SESSION['emailUsuario'])){
                echo" <div class='conteiner-carrinho'>
                <div id='produtosCard' class='calabresa'>
       

                </div>
                </div>"; 
              

        }else{
            echo"<div class='conteiner-carrinho'>
            Faça login antes
        </div>"; 
        } ?>
        </div>
    
                    <span id='precototal'class='preco'>Total: R$0,00</span>
               
    </div>
  
    <script src="../components/carrinho/scripts.js"></script>
    <script>

function addcarrinho(c) {
        atualizaCarrinho()
        valorTotal()
      $.post("../modules/query.php", {id:c});
      atualizaCarrinho()
      valorTotal()
  }
  function atualizaCarrinho() {
      $.post("../modules/atualizaCarrinho.php", function(x) { $("#produtosCard").html(x); } );
    
  }
//   setInterval(atualizaCarrinho,1000)
  function valorTotal() {
      $.post("../modules/valortotal.php", function(x) { $("#precototal").html(x); } ); 
      atualizaCarrinho() 
  } 
//   setInterval(valorTotal,1000)

  function deleta(idusuario,idproduto) {
      $.post("../modules/deletacarrinho.php", {idusuario:idusuario,idproduto:idproduto} );  
      atualizaCarrinho()
      valorTotal()
  } 

  function atualizaQuantidade(maismenos,idusuario,idproduto) {
      $.post("../modules/quantidadeCarrinho.php", {maismenos:maismenos,idusuario:idusuario,idproduto:idproduto} );
      atualizaCarrinho()  
      valorTotal()
  }

</script>

