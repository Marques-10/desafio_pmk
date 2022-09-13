const select_pagamento = document.querySelector('.select_pagamento')

select_pagamento.addEventListener("change", function(e){

    let options = e.target.options
    
    // 0 = débito
    // 1 = crédito
    const current_option = options.selectedIndex

    if(current_option == 0){
        document.querySelector(".form-credito").style.display = "none"
        document.querySelector(".form-debito").style.display = ""
    } else {
        document.querySelector(".form-credito").style.display = ""
        document.querySelector(".form-debito").style.display = "none"
    }
})