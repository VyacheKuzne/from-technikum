<header>
        <div class="header-menu">
            <div class="header-menu__logo">
                <img src="../img/Main page/лого.png" alt="logo" id="Logo">
            </div>
            <div class="header-menu__searth-form">
               <input type="text" class="header-menu__searth-form_input" placeholder="Введите в поиск название ресторана или блюда">
               <button class="header-menu__searth-form_button">
                    <img src="../img/Main page/Group 5.png" alt="poisk">
               </button>
            </div>
            <div class="header-menu__map-nav">
                <div class="header-menu__map-nav_map-icon">
                    <img src="../img/Main page/image 12.png" alt="map">
                </div>  
                <span class="header-menu__map-nav_text">Ул. Дмитрия Поварского 38</span>      
                      
            </div>
            <div class="header-menu__profil">
                <div class="header-menu__profil_lk">
                    <img src="../img/Main page/Group 3.png" alt="lk" id="user_name_lk">
                </div>
                <span class="header-menu__profil_name">NAME </span>
                <span class="header-menu__profil_surname"> SURNAME</span>
            </div>
            <div class="header-menu__setting">
                <div class="header-menu__setting_notification">
                    <img src="../img/Main page/alarm_alert_attention_bell_clock_notification_ring_icon_123203 1.png" alt="bell_clock">
                </div>
                <div class="header-menu__setting_setings" id="showSettings">
                    <img src="../img/Main page/Group 88.png" alt="seting">
                    
                </div>
            </div>
        </div>
        
        <div id="overlay"></div>

        <div id="settingsBlock">
                <div class = 'closeSettings' id="closeSettings">X</div>
                <span id ='link_add_card_details'>Добавить реквизиты для оплаты</span>
                <span id ='link_sent_message'>Задать вопрос</span>
                <span id ='link_reqwest_for_job'>Стать курьером</span>
                <span id ='link_reqwest_for_partners'>Стать партнером</span>
                <span id ='link_view_order'>Посмотреть мои заказы</span>
                <a href="/logout" id="exit">Выйти из акаунта</a>
        </div>
        <!-- добавление реквизитов -->
        <div class="add_card_details" id ='add_card_details'>
                <form action="#" class="form">
                <div class = 'closeSettings' id="closeSettings">X</div>
                    <h1 class="form-title">Добавление реквизитов</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" id ='number_card' required>
                        <label for="" class="form-label">Номер карты</label>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" required  id="#">
                        <label for="" class="form-label">Трех значный код</label>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" required  id="#dfs">
                        <label for="" class="form-label">Срок действия</label>
                    </div>

                    <div class="form-group">
                        <label class="showLabel">
                    </label>
                    <div class="form_group_checkbox"><input type="checkbox"> Даю согласие на <a href="">обработку личных данных</a></div>
                    </div>

                    <div class="bottom-box">
                    <button class="form-button"> Добавить</button>
                    </div>
                </form>
            </div>
            <!-- оптравка сообшения -->
            <div class="add_card_details" id ='sent_message'>
                <form action="#" class="form">
                    <div class = 'closeSettings' id="closeSettings">X</div>
                    <div class="form-group">
                    <h1 class="form-title">Связаться с администрацией</h1>
                        <select name="" id="" class="form-control_select" >
                            <option value="">Вопрос по работе сервиса</option>
                            <option value="">Жалоба на работу сайта</option>
                            <option value="">Жалоба на работу курьера</option>
                            <option value="">Предложение по работе сервиса</option>
                            <option value="">Своя тема</option>
                        </select>
                        <textarea name="" id="sent_message_arr" placeholder="Ваше сообшение..."></textarea>
                    </div>
                    <div class="bottom-box">
                    <button class="form-button">Отправить</button>
                    </div>
                </form>
            </div>
            <!-- Заявка на работу курьером -->
            <div class="add_card_details" id ='reqwest_for_job'>
               <form action="#" class="form">
                <div class = 'closeSettings' id="closeSettings">X</div>
                    <h1 class="form-title">Заявка на работу курьером</h1>
                    <div class="form-group">
                        <input type="text" class="form-control" id ='number_card' required>
                        <label for="" class="form-label">Имя</label>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" required  id="#">
                        <label for="" class="form-label">Фамилия</label>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" required  id="#dfs">
                        <label for="" class="form-label">Номре паспорта</label>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" required  id="#dfs">
                        <label for="" class="form-label">Серия паспорта</label>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" required  id="#dfs">
                        <label for="" class="form-label">Номер телефона</label>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" required  id="#dfs">
                        <label for="" class="form-label">Email</label>
                    </div>

                    <div class="form-group">
                                <input name="file" type="file" id="input__file" class="input input__file" multiple>
                        <label for="input__file" class="input__file-button">
                                <span class="input__file-icon-wrapper"><img class="input__file-icon" src="../img/Main page/download.svg" alt="Выбрать файл" width="25"></span>
                                <span class="input__file-button-text">Загрузить резюме</span>
                        </label>
                    </div>

                    <div class="bottom-box">
                    <button class="form-button">Отпраить заявку</button>
                    </div>
                </form>
            </div>
        
           <!-- Заявка на партнерство -->
           <div class="add_card_details" id ='reqwest_for_partners'>
                <form action="#" class="form_reqwest_for_partners">
                    @csrf
                <div class = 'closeSettings' id="closeSettings">X</div>
                    <h1 class="form-title">Добавление реквизитов</h1>

                            <h1 class="form-title">Личные данные</h1>
                            <div class="form-group">
                                <input type="text" class="form-control" id ='number_card' required>
                                <label for="" class="form-label">Имя</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required  id="#">
                                <label for="" class="form-label">Фамилия</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required  id="#dfs">
                                <label for="" class="form-label">Номер телефона</label>
                            </div>
                            <div class="form-group">
                                <input type="Email" class="form-control" required  id="#dfs">
                                <label for="" class="form-label">Email</label>
                            </div>
              
                            <h1 class="form-title">Информация о вашем ресторане</h1>
                            <div class="form-group">
                                <input type="text" class="form-control" id ='number_card' required>
                                <label for="" class="form-label">Название ресторана*</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required  id="#">
                                <label for="" class="form-label">Адрес</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required  id="#dfs">
                                <label for="" class="form-label">Кухня</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required  id="#dfs">
                                <label for="" class="form-label">Средний чек</label>
                            </div>

                    <div class="form-group">
                    <label class="showLabel">
                    </label>
                    <div class="form_group_checkbox"><input type="checkbox"> Даю согласие на <a href="">обработку личных данных</a></div>
                    </div>
                    <div class="bottom-box">
                    <button class="form-button"> Отправить заявку</button>
                    </div>
                </form>
            </div>
    </header>