let text = document.querySelectorAll(".ClimaLayout__text")
let temp = document.getElementById("temp");
const horas = new Date().getHours();

if(horas>18 || horas<6){
for (let index = 0; index < text.length; index++) {
    text[index].style.color = "white"
}
document.body.style.backgroundImage = "url(../assets/images/halloween-4576795_1920.jpg)"
document.body.style.backgroundSize = "100%"
}else{
    for (let index = 0; index < text.length; index++) {
    text[index].style.color = "#FFD700"
}
}