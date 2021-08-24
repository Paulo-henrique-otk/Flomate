let jsAddnumber = document.querySelector(".js-addnumber")
let numberAdd = 0;
function addNumber(){
numberAdd+=1;
jsAddnumber.innerHTML=numberAdd;
}
function atualizarBarraDeProgresso(){
    let progress = document.querySelector(".ClimaLayout__progress")
    if(progress.value<100){
   progress.value+=1;
    }else{
     progress.value = 0;
     addNumber();
    }
    }

setInterval(atualizarBarraDeProgresso,200)

