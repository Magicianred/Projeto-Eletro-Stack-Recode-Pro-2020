function exibirCategorias(categorias) {
    elements = document.getElementsByClassName("product");
    for(i = 0; i < elements.length; i ++){
        console.log(elements[i]);
        if(categorias == elements[i].id){
            elements[i].style = "display: inline-block;";
        }else{
            elements[i].style = "display: none;";
        }
    }
}

function exibirTodos() {
    elements = document.getElementsByClassName("product");
    for(i = 0; i < elements.length; i ++){
        elements[i].style = "display: inline-block;";
    }
}

function emBreve(){
    alert('Dísponivel em breve!');
}

function contato(){
    alert('Em breve você podera nos mandar uma mensagem mensagem!');
}