var btn = document.querySelector("#botao")
var cor_ativa = false
function mudar_cor(){
    if (cor_ativa == false){
    btn.classList.add("btn")
    cor_ativa = true
}
    else {
        btn.classList.remove("btn")
        cor_ativa = false }
    }