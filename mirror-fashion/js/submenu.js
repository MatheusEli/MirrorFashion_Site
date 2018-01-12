
function mostraSubmenu(){
    document.querySelector(".item-com-submenu").classList.add("selecionado");
    }


    function fechaSubmenu(){
    document.querySelector(".item-com-submenu").classList.remove("selecionado");
    }

    document
        .querySelector(".item-com-submenu")
        .addEventListener("focusin",mostraSubmenu)
        
    document.addEventListener("focusout",fechaSubmenu)
