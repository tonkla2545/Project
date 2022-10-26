/*!
* Start Bootstrap - Shop Homepage v5.0.5 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

var product_price_total = document.getElementById('product_price_total');
var price_total = document.getElementById('price_total');

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
        product_price_total.innerHTML = parseFloat(product_price_total.innerHTML ) - 20.00;
        price_total.innerHTML = parseFloat(price_total.innerHTML ) - 20.00;

    }
}

const increaseNumber = (incdec,itmeprice) =>{
    var itmeval = document.getElementById(incdec);
    var itmeprice = document.getElementById(itmeprice);

    if(itmeval.value >= 0){
        itmeval.value = parseInt(itmeval.value) +1;
        itmeprice.innerHTML = parseFloat(itmeprice.innerHTML ) + 20.00; 
        product_price_total.innerHTML = parseFloat(product_price_total.innerHTML ) + 20.00;
        price_total.innerHTML = parseFloat(price_total.innerHTML ) + 20.00;

    }
    else{
        itmeval.value = 0;
    }
}

const deletes = (incdec,itmeprice) =>{
    var itmeval = document.getElementById(incdec);
    var itmeprice = document.getElementById(itmeprice);

    product_price_total.innerHTML = parseFloat(product_price_total.innerHTML ) - (parseInt(itmeval.value) * 20.00);
    price_total.innerHTML = parseFloat(price_total.innerHTML ) - (parseInt(itmeval.value) * 20.00);
    itmeval.value = 0;
    itmeprice.innerHTML = 0.00;

}


const addcard = () =>{
    var itmeval = document.getElementById('')
}