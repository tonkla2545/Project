/*!
* Start Bootstrap - Shop Homepage v5.0.5 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

const decreaeNumber = (incdec,itmeprice) => {
    var itmeval = document.getElementById(incdec);
    var itmeprice = document.getElementById(itmeprice);
    console.log(itmeprice.innerHTML)
    
    if(itmeval.value <= 0){
        itmeval.value = 0;
    }
    else{
        itmeval.value = parseInt(itmeval.value) - 1;
        itmeprice.innerHTML = parseFloat(itmeprice.innerHTML ) - 20.00;
    }
}

const increaseNumber = (incdec,itmeprice) =>{
    var itmeval = document.getElementById(incdec);
    var itmeprice = document.getElementById(itmeprice);

    if(itmeval.value >= 0){
        itmeval.value = parseInt(itmeval.value) +1;
        itmeprice.innerHTML = parseFloat(itmeprice.innerHTML ) + 20.00;
    }
    else{
        itmeval.value = 0;
    }
}
const addcard = () =>{
    var itmeval = document.getElementById('')
}