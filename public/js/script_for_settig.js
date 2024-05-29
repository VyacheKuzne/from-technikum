var showSettingsButton = document.getElementById('showSettings');
var overlay = document.getElementById('overlay');
var settingsBlock = document.getElementById('settingsBlock');
var closeSettingsButton = document.getElementsByClassName('closeSettings');
var Logo = document.getElementById('Logo');
var user_name_lk = document.getElementById('user_name_lk');
var user_adres = document.getElementById('user_adres');
var user_rename_block = document.getElementById('user_rename_block')

var link_add_card_details = document.getElementById ('link_add_card_details')
var link_sent_message = document.getElementById ('link_sent_message')
var link_reqwest_for_job = document.getElementById ('link_reqwest_for_job')
var link_reqwest_for_partners = document.getElementById ('link_reqwest_for_partners')

var add_card_details = document.getElementById('add_card_details');
var sent_message = document.getElementById('sent_message');
var reqwest_for_job = document.getElementById('reqwest_for_job');
var reqwest_for_partners = document.getElementById('reqwest_for_partners')

showSettingsButton.addEventListener('click', function() {
    overlay.style.display = 'block';
    settingsBlock.style.display = 'grid';
});

link_add_card_details.addEventListener('click', function(){
    add_card_details.style.display = 'block';
    settingsBlock.style.display = 'none';
})

link_reqwest_for_job.addEventListener('click', function(){
    reqwest_for_job.style.display = 'block';
    settingsBlock.style.display = 'none';
})

link_sent_message.addEventListener('click', function(){
    sent_message.style.display = 'block';
    settingsBlock.style.display = 'none';
})

link_reqwest_for_partners.addEventListener('click', function(){
    reqwest_for_partners.style.display = 'block';
    settingsBlock.style.display = 'none';
})


user_name_lk.addEventListener('click', function(){
    window.location.href = '/login';
})

Logo.addEventListener('click', function(){
    window.location.href = '/';
})


for (var i = 0; i < closeSettingsButton.length; i++) {
    closeSettingsButton[i].addEventListener('click', function() {
        return function() {
            overlay.style.display = 'none';
            settingsBlock.style.display = 'none';
            add_card_details.style.display = 'none';
            sent_message.style.display = 'none';
            reqwest_for_job.style.display = 'none';
            reqwest_for_partners.style.display = 'none';
            user_rename_block.style.display = "none";
        }(i);
    });
}
