 var price = document.getElementsByClassName('price');
 var decription = document.getElementsByClassName('decription')
 var weigth = document.getElementsByClassName('weigth')
 var price_array =[234,245,567,876,456,789,345,1234]

 for(var i=0; i<price.length; i++)
 {
    price[i].innerHTML = price_array[i]
 }
