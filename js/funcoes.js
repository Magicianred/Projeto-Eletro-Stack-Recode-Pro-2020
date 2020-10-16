function exibirCategorias(categorias){
    let elementos = document.getElementsByClassName('produtos');
    for(var i = 0; i < elementos.length; i++){
        console.log(elementos[i].id);
        if(categorias == elementos[i].id){
            elementos[i].style = "display: inline-block;";
        }
        else{
            elementos[i].style = "display: none;";
        }
    }
}

let exibirTodos = () =>{
    let elementos = document.getElementsByClassName('produtos');
    for(var i = 0; i < elementos.length; i++){
        elementos[i].style = "display: inline-block;";
    }
}

let destaque = (imagem) =>{
    if(imagem.width == 180){
        imagem.width = 120;    
    }
    else{
        imagem.width = 180;
    }
}