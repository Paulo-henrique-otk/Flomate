let paragrafos = document.querySelectorAll(".ClimaLayout__text")
const horas = new Date().getHours();
if(horas>18 || horas<6){
for (let index = 0; index < paragrafos.length; index++) {
    paragrafos[index].style.color = "white"
}
document.body.style.backgroundImage = "url('http://localhost:90/ClimaFlo/app/assets/images/halloween-4576795_1920.jpg')"
document.body.style.backgroundSize = "100%"
}else{
    for (let index = 0; index < paragrafos.length; index++) {
    paragrafos[index].style.color = "#FFD700"
}
}


