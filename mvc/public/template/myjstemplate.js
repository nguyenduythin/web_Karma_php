
var g =0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');

function subTotal() {
    gt =0;
    for (let i = 0; i < iprice.length ; i++) {
       itotal[i].innerHTML = '$'+ new Intl.NumberFormat().format((iprice[i].value)*(iquantity[i].value));
       gt=gt+(iprice[i].value)*(iquantity[i].value);
        
    }
    gtotal.innerHTML = '$'+ new Intl.NumberFormat().format(gt);
}

subTotal();


  // alert button

  