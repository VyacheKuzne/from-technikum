        var price = document.getElementsByClassName('price');
        var decription = document.getElementsByClassName('decription')
        var weigth = document.getElementsByClassName('weigth')

        var price_array =[234,245,567,876,456,789,345,1231]
        var decription_array =['Шаурма куринная',"Шаурма с бараниной",'Шаурма куринная',"Шаурма с бараниной","Шаурма с бараниной","Шаурма с бараниной","Шаурма с бараниной","Шаурма с бараниной"]
        var weigth_array =[234,245,567,876,456,789,345,1231]

        for(var i=0; i<price.length; i++)
        {
           price[i].innerHTML = price_array[i] + ' руб.'
           decription[i].innerHTML = decription_array[i]
           weigth[i].innerHTML = weigth_array[i] + ' гр'
        }
        var menu_list_btn_btn = document.getElementsByClassName('menu_list_btn_btn');
          for (var i = 0; i < menu_list_btn_btn.length; i++) {
            var btn_del = document.createElement('button')
            btn_del.style.width = '2.8vw'
            btn_del.style.height = '1.5vw'
            btn_del.style.backgroundColor='red'
            btn_del.style.color = 'white'
            btn_del.innerText += 'Удалить'
              menu_list_btn_btn[i].addEventListener('click', function () {
                var decription = this.closest('.menu_list').querySelector('.decription').innerText;
                var price = parseFloat(this.closest('.menu_list').querySelector('.price').innerText.replace(' руб.', ''));
                var orderList = document.querySelector('.order_list_li');
                
                // var existingLi = Array.from(orderList.getElementsByTagName('li')).find(function(li) {
                //   return li.innerText.includes(decription);
                // })
                //     if (existingLi) {
                //   var existingPrice = parseFloat(existingLi.getAttribute('data-price'));
                //   existingPrice += price;
                //   existingLi.setAttribute('data-price', existingPrice);
                //   existingLi.innerText = decription + ' ' + existingPrice.toFixed(2) + ' руб.';
                  
                // } 
                //     else { 
                //   var newLi = document.createElement('li');
                //   newLi.setAttribute('data-price', price);
                //   var content = decription + " " + price.toFixed(2) + ' руб.';
                //   newLi.textContent = content;
                //   orderList.appendChild(newLi); // Добавляем новый элемент в список
                 

                // }
              });
            }

      // перенос на страницу оплаты
        var make_order_byn = document.getElementById('make_order_byn')
        make_order_byn.addEventListener ('click', function(){
         window.location.href = 'oplata.php'
        })
      
            
                  


