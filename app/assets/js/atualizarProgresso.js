function atualizarBarraDeProgresso(){
    let progress = document.querySelector(".ClimaLayout__progress")
    if(progress.value<100){
   progress.value+=1;
    }else{
        progress.value = 0;
    }
    }

setInterval(atualizarBarraDeProgresso,200)

