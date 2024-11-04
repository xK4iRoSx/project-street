function abrirCarrinho() {
    document.getElementById("carrinho").classList.add("mostrar");
    document.getElementById("carrinho").style.display = "flex"; 
   
}

function fecharCarrinho() {
    document.getElementById("carrinho").classList.remove("mostrar");

}