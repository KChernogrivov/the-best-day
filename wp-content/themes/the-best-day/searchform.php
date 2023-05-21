<div class="menu-slider">
    <div class="slider-container">
        <div class="profile-menu">
            <div class="profile-menu__items">
                <a class="profile-menu__link" href="?cat=8">Музеи и экскурсии</a>
                <a class="profile-menu__link" href="?cat=9">Кино</a>
                <a class="profile-menu__link" href="?cat=10">Еда</a>
                <a class="profile-menu__link" href="?cat=11">Мастер-класс</a>
                <a class="profile-menu__link" href="?cat=11">Для детей</a>
                <a class="profile-menu__link" href="?cat=13">Квест и ВР</a>
                <a class="profile-menu__link" href="?cat=14">Спорт</a>
                <a class="profile-menu__link" href="?cat=15">Вечеринки</a>
                <a class="profile-menu__link" href="?cat=16">Театр</a>
                <a class="profile-menu__link" href="?cat=17">Концерт</a>
                <a class="profile-menu__link" href="?cat=18">Полезно</a>
            </div>
        </div>
    </div>
</div>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrapper">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="search__input" placeholder="Поиск" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <div class="search__field">
            <div id="time-field" class="search__button">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 4V10H14.5M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> Время
            </div>
            <div id="time-field__dropdown" class="search__dropdown">
                <div class="search__dropdown-item typing-field">
                    <label class="search__label" for="time_start">От</label>
                    <input class="search__input-text" type="time" value="00:00" id="time_start" name="time_start" />
                </div>
                <div class="search__dropdown-item typing-field">
                    <label class="search__label" for="time_end">До</label>
                    <input class="search__input-text" type="time" value="23:59" id="time_end" name="time_end" />
                </div>
            </div>
        </div>
        <div class="search__field">
            <div id="money-field" class="search__button">
                    <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.25 15.75C6.58561 15.7457 11.898 16.4522 17.047 17.851C17.774 18.049 18.5 17.509 18.5 16.755V15.75M2.75 1.5V2.25C2.75 2.44891 2.67098 2.63968 2.53033 2.78033C2.38968 2.92098 2.19891 3 2 3H1.25M1.25 3V2.625C1.25 2.004 1.754 1.5 2.375 1.5H19.25M1.25 3V12M19.25 1.5V2.25C19.25 2.664 19.586 3 20 3H20.75M19.25 1.5H19.625C20.246 1.5 20.75 2.004 20.75 2.625V12.375C20.75 12.996 20.246 13.5 19.625 13.5H19.25M1.25 12V12.375C1.25 12.6734 1.36853 12.9595 1.5795 13.1705C1.79048 13.3815 2.07663 13.5 2.375 13.5H2.75M1.25 12H2C2.19891 12 2.38968 12.079 2.53033 12.2197C2.67098 12.3603 2.75 12.5511 2.75 12.75V13.5M19.25 13.5V12.75C19.25 12.5511 19.329 12.3603 19.4697 12.2197C19.6103 12.079 19.8011 12 20 12H20.75M19.25 13.5H2.75M14 7.5C14 8.29565 13.6839 9.05871 13.1213 9.62132C12.5587 10.1839 11.7956 10.5 11 10.5C10.2044 10.5 9.44129 10.1839 8.87868 9.62132C8.31607 9.05871 8 8.29565 8 7.5C8 6.70435 8.31607 5.94129 8.87868 5.37868C9.44129 4.81607 10.2044 4.5 11 4.5C11.7956 4.5 12.5587 4.81607 13.1213 5.37868C13.6839 5.94129 14 6.70435 14 7.5ZM17 7.5H17.008V7.508H17V7.5ZM5 7.5H5.008V7.508H5V7.5Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Деньги
            </div>
            <div id="money-field__dropdown" class="search__dropdown">
                <div class="search__dropdown-item typing-field">
                    <label class="search__label" for="money_start">От</label>
                    <input class="search__input-text" placeholder="0" type="number" value="0" id="money_start" name="money_start" />
                </div>
                <div class="search__dropdown-item typing-field">
                    <label class="search__label" for="money_end">До</label>
                    <input class="search__input-text" placeholder="0" type="number" value="999999" id="money_end" name="money_end" />
                </div>
            </div>
        </div>
        <div class="search__field">
            <div id="emotion-field" class="search__button">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.182 13.182C12.7641 13.5999 12.2681 13.9313 11.7221 14.1575C11.1761 14.3836 10.591 14.5 10 14.5C9.40905 14.5 8.82388 14.3836 8.27791 14.1575C7.73194 13.9313 7.23586 13.5999 6.818 13.182M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10ZM7.75 7.75C7.75 8.164 7.582 8.5 7.375 8.5C7.168 8.5 7 8.164 7 7.75C7 7.336 7.168 7 7.375 7C7.582 7 7.75 7.336 7.75 7.75ZM7.375 7.75H7.383V7.765H7.375V7.75ZM13 7.75C13 8.164 12.832 8.5 12.625 8.5C12.418 8.5 12.25 8.164 12.25 7.75C12.25 7.336 12.418 7 12.625 7C12.832 7 13 7.336 13 7.75ZM12.625 7.75H12.633V7.765H12.625V7.75Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Эмоции
            </div>
            <div id="emotion-field__dropdown" class="search__dropdown">
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="Тихо" id="silently" name="emotion[]" />
                    <label class="search__label" for="silently">Тихо</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="Спокойно" id="quietly" name="emotion[]" />
                    <label class="search__label" for="quietly">Спокойно</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="Весело" id="cheerfully" name="emotion[]" />
                    <label class="search__label" for="cheerfully">Весело</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="Новые ощущения" id="new_experience" name="emotion[]" />
                    <label class="search__label" for="new_experience">Новые ощущения</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="Отрыв" id="rave" name="emotion[]" />
                    <label class="search__label" for="rave">Отрыв</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="Развивает" id="smart" name="emotion[]" />
                    <label class="search__label" for="smart">Развивает</label>
                </div>
            </div>
        </div>
        <div class="search__field">
            <div id="partner-field" class="search__button">
                    <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8078 12.771C16.2756 12.4515 16.8242 12.2711 17.3903 12.2504C17.9564 12.2298 18.5168 12.3699 19.0066 12.6544C19.4964 12.939 19.8956 13.3564 20.1581 13.8584C20.4206 14.3604 20.5356 14.9264 20.4898 15.491C19.2899 15.9103 18.0155 16.0735 16.7488 15.97C16.7449 14.8366 16.4185 13.7268 15.8078 12.772C15.2657 11.9218 14.5179 11.222 13.6336 10.7375C12.7493 10.253 11.7571 9.99932 10.7488 10C9.7406 9.99948 8.74859 10.2532 7.86449 10.7377C6.9804 11.2223 6.23277 11.9219 5.69076 12.772M16.7478 15.969L16.7488 16C16.7488 16.225 16.7368 16.447 16.7118 16.666C14.8971 17.7071 12.8409 18.2533 10.7488 18.25C8.57876 18.25 6.54176 17.674 4.78576 16.666C4.76006 16.4346 4.7477 16.2019 4.74876 15.969M4.74876 15.969C3.48239 16.0763 2.20867 15.9137 1.00976 15.492C0.964115 14.9276 1.07916 14.3617 1.34159 13.8599C1.60403 13.3581 2.00313 12.9408 2.49277 12.6563C2.9824 12.3718 3.54256 12.2317 4.10848 12.2521C4.67441 12.2726 5.22297 12.4528 5.69076 12.772M4.74876 15.969C4.75236 14.8357 5.08039 13.7269 5.69076 12.772M13.7488 4C13.7488 4.79565 13.4327 5.55871 12.8701 6.12132C12.3075 6.68393 11.5444 7 10.7488 7C9.95311 7 9.19005 6.68393 8.62744 6.12132C8.06483 5.55871 7.74876 4.79565 7.74876 4C7.74876 3.20435 8.06483 2.44129 8.62744 1.87868C9.19005 1.31607 9.95311 1 10.7488 1C11.5444 1 12.3075 1.31607 12.8701 1.87868C13.4327 2.44129 13.7488 3.20435 13.7488 4ZM19.7488 7C19.7488 7.29547 19.6906 7.58806 19.5775 7.86104C19.4644 8.13402 19.2987 8.38206 19.0898 8.59099C18.8808 8.79992 18.6328 8.96566 18.3598 9.07873C18.0868 9.1918 17.7942 9.25 17.4988 9.25C17.2033 9.25 16.9107 9.1918 16.6377 9.07873C16.3647 8.96566 16.1167 8.79992 15.9078 8.59099C15.6988 8.38206 15.5331 8.13402 15.42 7.86104C15.307 7.58806 15.2488 7.29547 15.2488 7C15.2488 6.40326 15.4858 5.83097 15.9078 5.40901C16.3297 4.98705 16.902 4.75 17.4988 4.75C18.0955 4.75 18.6678 4.98705 19.0898 5.40901C19.5117 5.83097 19.7488 6.40326 19.7488 7ZM6.24876 7C6.24876 7.29547 6.19057 7.58806 6.07749 7.86104C5.96442 8.13402 5.79869 8.38206 5.58975 8.59099C5.38082 8.79992 5.13278 8.96566 4.8598 9.07873C4.58682 9.1918 4.29424 9.25 3.99876 9.25C3.70329 9.25 3.41071 9.1918 3.13773 9.07873C2.86474 8.96566 2.61671 8.79992 2.40777 8.59099C2.19884 8.38206 2.03311 8.13402 1.92004 7.86104C1.80696 7.58806 1.74876 7.29547 1.74876 7C1.74876 6.40326 1.98582 5.83097 2.40777 5.40901C2.82973 4.98705 3.40203 4.75 3.99876 4.75C4.5955 4.75 5.1678 4.98705 5.58975 5.40901C6.01171 5.83097 6.24876 6.40326 6.24876 7Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> С кем
            </div>
            <div id="partner-field__dropdown" class="search__dropdown">
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="" id="solo" name="with" />
                    <label class="search__label" for="solo">Один</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="" id="friend" name="with" />
                    <label class="search__label" for="friend">С другом/подругой</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="" id="children" name="with" />
                    <label class="search__label" for="children">С детьми</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="" id="parents" name="with" />
                    <label class="search__label" for="parents">С родителями</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="" id="lover" name="with" />
                    <label class="search__label" for="lover">На свидание</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="" id="group" name="with" />
                    <label class="search__label" for="group">С компанией</label>
                </div>
            </div>
        </div>
        <input class="search__submit" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Найти', 'submit button' ); ?>" />
    </div>
</form>

<script>
    const time = document.getElementById("time-field");
    const money = document.getElementById("money-field");
    const emotion = document.getElementById("emotion-field");
    const partner = document.getElementById("partner-field");

    const timeDropdown = document.getElementById("time-field__dropdown");
    const moneyDropdown = document.getElementById("money-field__dropdown");
    const emotionDropdown = document.getElementById("emotion-field__dropdown");
    const partnerDropdown = document.getElementById("partner-field__dropdown");

    const fields = [time, money, emotion, partner];
    const dropdowns = [timeDropdown, moneyDropdown, emotionDropdown, partnerDropdown];

    time.addEventListener('click', openMenu.bind(event, timeDropdown));
    money.addEventListener("click", openMenu.bind(event, moneyDropdown));
    emotion.addEventListener("click", openMenu.bind(event, emotionDropdown));
    partner.addEventListener("click", openMenu.bind(event, partnerDropdown));

    function openMenu(event) {
        let otherFields = dropdowns.filter((item) => item !== event);
        otherFields.forEach((field) => field.classList.remove("open"));
        event.classList.toggle("open");
        return "";
    }
</script>
