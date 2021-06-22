var btnCalcular = document.getElementById("calcular")
//var resumen = document.getElementById("lista-productos")
btnCalcular.addEventListener("click", calcular)



function calcular(){

    var paseDia = parseInt(document.getElementById("pase_dia").value)
    var paseCompleto = parseInt(document.getElementById("pase_completo").value)
    var paseDosDias = parseInt(document.getElementById("pase_dosdias").value)
    var resumen = document.getElementById("lista-pro")
    var totalDia= 0
    var totalDosDias= 0
    var totalCompleto =0


    if (esPaseDia(paseDia)){

        var totalDia = paseDia * 30     
    }
    if(espaseCompleto(paseCompleto)){

        var totalCompleto = paseCompleto * 50 
    }
    if (espaseDosDias(paseDosDias)){
        var totalDosDias = paseDosDias * 45       
    }

    if (esPaseDia(paseDia)&&espaseCompleto(paseCompleto)){

        var totalDia = paseDia * 30
        var totalCompleto = paseCompleto * 50  
    }
 
    if (espaseCompleto(paseCompleto)&&espaseDosDias(paseDosDias)){
        var totalCompleto = paseCompleto * 50
        var totalDosDias = paseDosDias * 45
    }
                    
    if (esPaseDia(paseDosDias)&&espaseCompleto(paseCompleto)&&espaseDosDias(paseDosDias)){
        
        var totalDia = paseDia * 30
        var totalCompleto = paseCompleto * 50
        var totalDosDias = paseDosDias * 45
    }
    var totalBoletos = totalDia + totalCompleto + totalDosDias
    resumen.innerHTML = totalBoletos
    
}

function esPaseDia(){
    var paseDia = parseInt(document.getElementById("pase_dia").value)
    if (paseDia>0)
    {
        return paseDia;
    }
    return false;
}
function espaseCompleto(){
    var paseCompleto = parseInt(document.getElementById("pase_completo").value)
    if(paseCompleto>0)
    {
        return paseCompleto;
    }
    return false;

}
function espaseDosDias(){
    var paseDosDias = parseInt(document.getElementById("pase_dosdias").value)
    if(paseDosDias>0)
    {
        return paseDosDias;
    }
    return false;

}
