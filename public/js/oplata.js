var btn_card = document.getElementById('btn_card');
var btn_nal = document.getElementById('btn_nal');
btn_card.addEventListener('click', function(){
    this.style.backgroundColor = 'rgba(64, 64, 64, 1)';
    this.style.color = 'white';
    btn_nal.style.backgroundColor = 'white'
    btn_nal.style.color = 'rgba(64, 64, 64, 1)'
});

btn_nal.addEventListener('click', function(){
    this.style.backgroundColor = 'rgba(64, 64, 64, 1)';
    this.style.color = 'white';
    btn_card.style.backgroundColor = 'white'
    btn_card.style.color = 'rgba(64, 64, 64, 1)'
    
})

const oplata_btn = document.getElementById('oplata_btn');
const overlay = document.getElementById('overlay');
const oplata = document.getElementById('oplata');
const closeSettingsButton = document.getElementById('closeSettings');
const oplata_order_btn = document.getElementById('oplata_order_btn')
oplata_order_btn.addEventListener('click', function() {
    overlay.style.display = 'none';
    oplata.style.display = 'none';
})
oplata_btn.addEventListener('click', function() {
    overlay.style.display = 'block';
    oplata.style.display = 'flex';
});

closeSettingsButton.addEventListener('click', function() {
    overlay.style.display = 'none';
    settingsBlock.style.display = 'none';
}); 


const description_add = document.getElementById('description_add')
const description_amount = document.getElementById('description_amount')
const description_deduc = document.getElementById('description_deduc')
const itog_price = document.getElementById('itog_price')
let add = 1
let itog = 0 
let ishod_price = parseFloat(itog_price.innerText)   // Преобразуем в число
description_add.addEventListener('click', function(){
    add += 1
    description_amount.innerText = add
    if(description_amount.innerText !== '0'){
        description_deduc.disabled = false  
    }
    itog += ishod_price
    itog_price.innerText = itog.toFixed(2) // Обновляем значение с двумя знаками после запятой
})

description_deduc.addEventListener('click', function(){
    add -= 1
    description_amount.innerText = add
    if(description_amount.innerText === '1'){
        description_deduc.disabled = true
    }
})