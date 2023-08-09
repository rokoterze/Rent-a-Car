var checkindate = document.getElementById('checkindate');
var checkoutdate = document.getElementById('checkoutdate');
var submit = document.getElementById('submit');
var plate = document.getElementById('plate').value;

var customername = document.getElementById('customername');
var customersurname = document.getElementById('customersurname');

var customeroib = document.getElementById('customeroib');
var customeroibspan = document.getElementById('customeroibspan');

var make = document.getElementById('make');
var model = document.getElementById('model');
var plate2 = document.getElementById('plate');
var price = document.getElementById('price');

var makeupd = document.getElementById('makeupd');
var modelupd = document.getElementById('modelupd');
var plateupd = document.getElementById('plateupd');
var priceupd = document.getElementById('priceupd');

function isMakeUpdEmpty(){
    if(makeupd.value =="" || makeupd.value.length <= 2)
    {
        makeupd.style.border = "2px solid #ff0000";
    }
    else  makeupd.style.border = "2px solid #00ff00";
}
function isModelUpdEmpty(){
    if(modelupd.value =="")
    {
        modelupd.style.border = "2px solid #ff0000";
    }
    else  modelupd.style.border = "2px solid #00ff00";
}
function isPlateUpdEmpty(){
    if(plateupd.value =="" || plateupd.value.length <= 2)
    {
        plateupd.style.border = "2px solid #ff0000";
    }
    else  plateupd.style.border = "2px solid #00ff00";
}
function isPriceUpdEmpty(){
    if(priceupd.value =="" || priceupd.value <=0)
    {
        priceupd.style.border = "2px solid #ff0000";
    }
    else  priceupd.style.border = "2px solid #00ff00";
}
//////////////////////////////////////////////////////                 
function isMakeEmpty(){
    if(make.value =="" || make.value.length <= 2)
    {
        make.style.border = "2px solid #ff0000";
    }
    else  make.style.border = "2px solid #00ff00";
}
function isModelEmpty(){
    if(model.value =="")
    {
        model.style.border = "2px solid #ff0000";
    }
    else  model.style.border = "2px solid #00ff00";
}
function isPlateEmpty(){
    if(plate2.value =="" || plate2.value.length <= 2)
    {
        plate2.style.border = "2px solid #ff0000";
    }
    else  plate2.style.border = "2px solid #00ff00";
}
function isPriceEmpty(){
    if(price.value =="" || price.value <=0)
    {
        price.style.border = "2px solid #ff0000";
    }
    else  price.style.border = "2px solid #00ff00";
}
////////////////////////////////////////////////////////
function isNameEmpty(){
    if(customername.value =="" || customername.value.length <= 2)
    {
        customername.style.border = "2px solid #ff0000";
    }
    else  customername.style.border = "2px solid #00ff00";
}

function isSurnameEmpty(){
    if(customersurname.value =="" || customersurname.value.length <= 2)
    {
        customersurname.style.border = "2px solid #ff0000";
    }
    else  customersurname.style.border = "2px solid #00ff00";
}

function isOIBEmpty(){
    if(customeroib.value =="" || customeroib.value.length < 10)
    {
        customeroib.style.border = "2px solid #ff0000";
        customeroibspan.innerHTML="Minimum 10 numbers are required.";
        customeroibspan.style.color="#ff0000";
    }
    else{
        customeroibspan.innerHTML="";
        customeroib.style.border = "2px solid #00ff00";
    } 
}

function totalPrice(){
    var checkindate1 = document.getElementById('checkindate').value;
    var selectedDateCheckIn = new Date(checkindate1);

    var checkoutdate1 = document.getElementById('checkoutdate').value;
    var selectedDateCheckOut = new Date(checkoutdate1);

    var checkoutnum = Number(selectedDateCheckOut);
    var checkinnum = Number(selectedDateCheckIn);


    var miliseconds = checkoutnum - checkinnum;
    var days = (miliseconds/86400)/1000;
    if(days<=0){
        days=1;
    }

    var dayprice = document.getElementById('dayprice').value;

    var total = days*parseInt(dayprice);

    if(selectedDateCheckOut >= selectedDateCheckIn && selectedDateCheckOut && selectedDateCheckIn && plate)
    {
        document.getElementById("totalprice").value = total+"€";
    }

    else document.getElementById("totalprice").value = "0€";
}

function checkDateData(){
    var checkindate1 = document.getElementById('checkindate').value;
    var selectedDateCheckIn = new Date(checkindate1);

    var checkoutdate1 = document.getElementById('checkoutdate').value;
    var selectedDateCheckOut = new Date(checkoutdate1);

    var now = new Date();
    now.setDate(now.getDate()-1);

    if (selectedDateCheckIn < now) { 
       
        checkindate.style.border = "2px solid #ff0000";
     
        submit.disabled = true;
        submit.style.backgroundColor='rgba(255,0,0,0.1)';
        submit.style.cursor = 'default';
    }

    if (selectedDateCheckIn >= now) { 
        checkindate.style.border = "2px solid #00ff00";
     
        submit.disabled = false;
        submit.style.backgroundColor='rgb(0, 150, 255)';
        submit.style.cursor = 'pointer'; 
    }

    if (selectedDateCheckOut < selectedDateCheckIn || selectedDateCheckOut < now) {

        checkoutdate.style.border = "2px solid #ff0000";

        submit.disabled = true;
        submit.style.backgroundColor='rgba(255,0,0,0.1)';
        submit.style.cursor = 'default';
    }

    if (selectedDateCheckOut >= selectedDateCheckIn && selectedDateCheckOut > now && selectedDateCheckIn > now ) {
        checkoutdate.style.border = "2px solid #00ff00";

        submit.disabled = false;
        submit.style.backgroundColor='rgb(0, 150, 255)';
        submit.style.cursor = 'pointer';
    }
  
}
