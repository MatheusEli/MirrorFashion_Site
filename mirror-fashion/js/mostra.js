
/*TRIM: Método trim (String) (JavaScript) Remove os espaços em branco 
inicial e final e também os caracteres de terminação de linha 
em uma cadeia de caracteres.*/
function expande(evento){

    var btn = $(evento.target)
    var vitrine = btn.parent()
    vitrine.toggleClass("expandido")
    
    if(btn.text().trim() == "Mais"){
        btn.text("Menos")   
    }else{
        btn.text("Mais")    
    }
}

$(".btn").on("click", expande)

/*JQUERY = $, jquery tem compatibilidade, mas esta diminuindo 
sua utilização a cada dia*/
