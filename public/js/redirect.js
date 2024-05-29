
function redirect() {

// Получаем текущий URL страницы
var currentUrl = window.location.href;

// Находим последний символ в URL
var without_local = currentUrl.charAt(currentUrl.length - 1);

// Выводим последний символ в консоль для проверки
console.log(without_local);

    var main_img = document.getElementById("img-food");
    main_img.src = '../img/Restoran/' + without_local + '/main_img.jpg'; 

    var menu_image = document.getElementsByClassName('menu_image');
    for (var i = 0; i < menu_image.length; i++) {
        menu_image[i].src = '../img/Restoran/' + without_local + '/order/' + i + '.jpg';
    }

    var replace_img = document.getElementsByClassName('second_replace');
    for (var i = 0; i < replace_img.length; i++) {
        replace_img[i].src = '../img/Restoran/' + without_local + '/replace_img' + i + '.jpg';
        replace_img[i].addEventListener('click', function() {
            var img_src = this.src;
            var replace = main_img.src;
            main_img.src = img_src;
            this.src = replace;
        });
    }

    // Переменная, определяющая, какой файл загружать
    var fileToLoad = 'order.js'; // Или 'file2.js' в зависимости от условия

    // Создаем новый элемент script
    var script = document.createElement('script');
    // Устанавливаем путь к JavaScript-файлу в зависимости от переменной
    script.src = '../img/Restoran/' + without_local + '/order/' + fileToLoad;
    // Добавляем элемент script в документ
    document.body.appendChild(script);
}

document.addEventListener('DOMContentLoaded', function() {
    redirect(); // Вызываем функцию при загрузке страницы
});

window.addEventListener('hashchange', function() {
    redirect(); // Вызываем функцию при изменении хэша в URL
});






