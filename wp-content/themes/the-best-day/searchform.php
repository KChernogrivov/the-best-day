<form class="menu-slider" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="slider-container">
        <div class="profile-menu">
            <div class="profile-menu__items">
                <input class="events-table__button" placeholder="Поиск" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="8" />
                    <span class="profile-menu__link">Музеи и экскурсии</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="9" />
                    <span class="profile-menu__link">Кино</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="10" />
                    <span class="profile-menu__link">Еда</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="11" />
                    <span class="profile-menu__link">Мастер-класс</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="12" />
                    <span class="profile-menu__link">Для детей</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="13" />
                    <span class="profile-menu__link">Квест и ВР</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="14" />
                    <span class="profile-menu__link">Спорт</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="15" />
                    <span class="profile-menu__link">Вечеринки</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="16" />
                    <span class="profile-menu__link">Театр</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="17" />
                    <span class="profile-menu__link">Концерт</span>
                </label>
                <label>
                    <input type="submit" id="category" name="category" class="events-table__button" value="18" />
                    <span class="profile-menu__link">Полезно</span>
                </label>
            </div>
        </div>
    </div>
</form>

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
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="Один" id="solo" name="company[]" />
                    <label class="search__label" for="solo">Один</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="С другом/подругой" id="friend" name="company[]" />
                    <label class="search__label" for="friend">С другом/подругой</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="С детьми" id="children" name="company[]" />
                    <label class="search__label" for="children">С детьми</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="С родителями" id="parents" name="company[]" />
                    <label class="search__label" for="parents">С родителями</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="На свидание" id="lover" name="company[]" />
                    <label class="search__label" for="lover">На свидание</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="С компанией" id="group" name="company[]" />
                    <label class="search__label" for="group">С компанией</label>
                </div>
            </div>
        </div>
        <input class="search__submit" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Найти', 'submit button' ); ?>" />
    </div>
</form>

<form role="search" method="get" id="searchformmobile" class="search-form--mobile" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-input--mobile">
        <svg onclick="submitForm()" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 20.9998L15.803 15.8028M15.803 15.8028C17.2096 14.3962 17.9998 12.4885 17.9998 10.4993C17.9998 8.51011 17.2096 6.60238 15.803 5.19581C14.3964 3.78923 12.4887 2.99902 10.4995 2.99902C8.51029 2.99902 6.60256 3.78923 5.19599 5.19581C3.78941 6.60238 2.99921 8.51011 2.99921 10.4993C2.99921 12.4885 3.78941 14.3962 5.19599 15.8028C6.60256 17.2094 8.51029 17.9996 10.4995 17.9996C12.4887 17.9996 14.3964 17.2094 15.803 15.8028Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="search__input--mobile" placeholder="Поиск" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <svg onclick="settingsSearch()" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5 6H20.25M10.5 6C10.5 6.39782 10.342 6.77936 10.0607 7.06066C9.77936 7.34196 9.39782 7.5 9 7.5C8.60218 7.5 8.22064 7.34196 7.93934 7.06066C7.65804 6.77936 7.5 6.39782 7.5 6M10.5 6C10.5 5.60218 10.342 5.22064 10.0607 4.93934C9.77936 4.65804 9.39782 4.5 9 4.5C8.60218 4.5 8.22064 4.65804 7.93934 4.93934C7.65804 5.22064 7.5 5.60218 7.5 6M7.5 6H3.75M10.5 18H20.25M10.5 18C10.5 18.3978 10.342 18.7794 10.0607 19.0607C9.77936 19.342 9.39782 19.5 9 19.5C8.60218 19.5 8.22064 19.342 7.93934 19.0607C7.65804 18.7794 7.5 18.3978 7.5 18M10.5 18C10.5 17.6022 10.342 17.2206 10.0607 16.9393C9.77936 16.658 9.39782 16.5 9 16.5C8.60218 16.5 8.22064 16.658 7.93934 16.9393C7.65804 17.2206 7.5 17.6022 7.5 18M7.5 18H3.75M16.5 12H20.25M16.5 12C16.5 12.3978 16.342 12.7794 16.0607 13.0607C15.7794 13.342 15.3978 13.5 15 13.5C14.6022 13.5 14.2206 13.342 13.9393 13.0607C13.658 12.7794 13.5 12.3978 13.5 12M16.5 12C16.5 11.6022 16.342 11.2206 16.0607 10.9393C15.7794 10.658 15.3978 10.5 15 10.5C14.6022 10.5 14.2206 10.658 13.9393 10.9393C13.658 11.2206 13.5 11.6022 13.5 12M13.5 12H3.75" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    <div class="search-menu--mobile">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="close-search-cross" onclick="settingsSearch()" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.3388 10.0188C11.492 10.1263 11.5922 10.1771 11.6685 10.2526C14.3098 12.8899 16.9475 15.5307 19.5888 18.1679C19.904 18.4824 20.0928 18.8282 19.9519 19.2865C19.7428 19.9677 18.9301 20.2227 18.3745 19.7745C18.2271 19.6554 18.0986 19.5131 17.9642 19.3787C15.3824 16.7974 12.8007 14.2161 10.2189 11.6348C10.1557 11.5716 10.0896 11.5106 10.0039 11.43C9.92115 11.5092 9.84272 11.5796 9.76792 11.6544C7.12225 14.2996 4.47585 16.9448 1.83235 19.5922C1.51717 19.9082 1.17075 20.0934 0.713227 19.9518C0.0429124 19.7433 -0.213448 18.9502 0.212851 18.3938C0.284022 18.3009 0.368992 18.2181 0.452509 18.1345C3.07857 15.5075 5.70464 12.8804 8.33215 10.2555C8.40841 10.1793 8.505 10.1248 8.61321 10.0442C8.49338 9.91782 8.42293 9.83938 8.34813 9.76457C5.71553 7.13243 3.0822 4.50029 0.449604 1.86743C-0.0885361 1.32923 -0.147361 0.739473 0.293463 0.296426C0.732835 -0.145896 1.32835 -0.0892436 1.86503 0.447497C4.49183 3.07382 7.11862 5.70015 9.74323 8.32793C9.81948 8.40419 9.87831 8.49789 9.964 8.60756C10.0817 8.49643 10.1594 8.42598 10.2334 8.3519C12.8856 5.69942 15.5386 3.04768 18.1879 0.393024C18.5067 0.0734492 18.8604 -0.0936014 19.3121 0.0545653C19.9541 0.265194 20.2061 1.03217 19.811 1.58126C19.7326 1.69094 19.6338 1.78681 19.538 1.88268C16.925 4.49739 14.312 7.11064 11.6968 9.72317C11.614 9.80596 11.516 9.87351 11.3388 10.0188Z" fill="#1E1E1E"/>
        </svg>
        <div class="search__field--mobile">
            <div id="time-field" class="search__button">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 4V10H14.5M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> Время
            </div>
            <div id="time-field__dropdown" class="search__time--mobile">
                <div class="search__dropdown-item">
                    <label class="search__label" for="time_start">От</label>
                    <input class="search__input-text" type="time" value="00:00" id="time_start" name="time_start" />
                </div>
                <div class="search__dropdown-item">
                    <label class="search__label" for="time_end">До</label>
                    <input class="search__input-text" type="time" value="23:59" id="time_end" name="time_end" />
                </div>
            </div>
        </div>
        <div class="search__field--mobile">
            <div id="money-field" class="search__button">
                <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.25 15.75C6.58561 15.7457 11.898 16.4522 17.047 17.851C17.774 18.049 18.5 17.509 18.5 16.755V15.75M2.75 1.5V2.25C2.75 2.44891 2.67098 2.63968 2.53033 2.78033C2.38968 2.92098 2.19891 3 2 3H1.25M1.25 3V2.625C1.25 2.004 1.754 1.5 2.375 1.5H19.25M1.25 3V12M19.25 1.5V2.25C19.25 2.664 19.586 3 20 3H20.75M19.25 1.5H19.625C20.246 1.5 20.75 2.004 20.75 2.625V12.375C20.75 12.996 20.246 13.5 19.625 13.5H19.25M1.25 12V12.375C1.25 12.6734 1.36853 12.9595 1.5795 13.1705C1.79048 13.3815 2.07663 13.5 2.375 13.5H2.75M1.25 12H2C2.19891 12 2.38968 12.079 2.53033 12.2197C2.67098 12.3603 2.75 12.5511 2.75 12.75V13.5M19.25 13.5V12.75C19.25 12.5511 19.329 12.3603 19.4697 12.2197C19.6103 12.079 19.8011 12 20 12H20.75M19.25 13.5H2.75M14 7.5C14 8.29565 13.6839 9.05871 13.1213 9.62132C12.5587 10.1839 11.7956 10.5 11 10.5C10.2044 10.5 9.44129 10.1839 8.87868 9.62132C8.31607 9.05871 8 8.29565 8 7.5C8 6.70435 8.31607 5.94129 8.87868 5.37868C9.44129 4.81607 10.2044 4.5 11 4.5C11.7956 4.5 12.5587 4.81607 13.1213 5.37868C13.6839 5.94129 14 6.70435 14 7.5ZM17 7.5H17.008V7.508H17V7.5ZM5 7.5H5.008V7.508H5V7.5Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> Деньги
            </div>
            <div id="money-field__dropdown" class="search__money--mobile">
                <div class="search__dropdown-item">
                    <label class="search__label" for="money_start">От</label>
                    <input class="search__input-text" placeholder="0" type="number" value="0" id="money_start" name="money_start" />
                </div>
                <div class="search__dropdown-item">
                    <label class="search__label" for="money_end">До</label>
                    <input class="search__input-text" placeholder="0" type="number" value="999999" id="money_end" name="money_end" />
                </div>
            </div>
        </div>
        <div class="search__field--mobile">
            <div id="emotion-field" class="search__button">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.182 13.182C12.7641 13.5999 12.2681 13.9313 11.7221 14.1575C11.1761 14.3836 10.591 14.5 10 14.5C9.40905 14.5 8.82388 14.3836 8.27791 14.1575C7.73194 13.9313 7.23586 13.5999 6.818 13.182M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10ZM7.75 7.75C7.75 8.164 7.582 8.5 7.375 8.5C7.168 8.5 7 8.164 7 7.75C7 7.336 7.168 7 7.375 7C7.582 7 7.75 7.336 7.75 7.75ZM7.375 7.75H7.383V7.765H7.375V7.75ZM13 7.75C13 8.164 12.832 8.5 12.625 8.5C12.418 8.5 12.25 8.164 12.25 7.75C12.25 7.336 12.418 7 12.625 7C12.832 7 13 7.336 13 7.75ZM12.625 7.75H12.633V7.765H12.625V7.75Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> Эмоции
            </div>
            <div id="emotion-field__dropdown" class="search__emotion--mobile">
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
        <span class="search__field--mobile">
            <span id="partner-field" class="search__button">
                <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.8078 12.771C16.2756 12.4515 16.8242 12.2711 17.3903 12.2504C17.9564 12.2298 18.5168 12.3699 19.0066 12.6544C19.4964 12.939 19.8956 13.3564 20.1581 13.8584C20.4206 14.3604 20.5356 14.9264 20.4898 15.491C19.2899 15.9103 18.0155 16.0735 16.7488 15.97C16.7449 14.8366 16.4185 13.7268 15.8078 12.772C15.2657 11.9218 14.5179 11.222 13.6336 10.7375C12.7493 10.253 11.7571 9.99932 10.7488 10C9.7406 9.99948 8.74859 10.2532 7.86449 10.7377C6.9804 11.2223 6.23277 11.9219 5.69076 12.772M16.7478 15.969L16.7488 16C16.7488 16.225 16.7368 16.447 16.7118 16.666C14.8971 17.7071 12.8409 18.2533 10.7488 18.25C8.57876 18.25 6.54176 17.674 4.78576 16.666C4.76006 16.4346 4.7477 16.2019 4.74876 15.969M4.74876 15.969C3.48239 16.0763 2.20867 15.9137 1.00976 15.492C0.964115 14.9276 1.07916 14.3617 1.34159 13.8599C1.60403 13.3581 2.00313 12.9408 2.49277 12.6563C2.9824 12.3718 3.54256 12.2317 4.10848 12.2521C4.67441 12.2726 5.22297 12.4528 5.69076 12.772M4.74876 15.969C4.75236 14.8357 5.08039 13.7269 5.69076 12.772M13.7488 4C13.7488 4.79565 13.4327 5.55871 12.8701 6.12132C12.3075 6.68393 11.5444 7 10.7488 7C9.95311 7 9.19005 6.68393 8.62744 6.12132C8.06483 5.55871 7.74876 4.79565 7.74876 4C7.74876 3.20435 8.06483 2.44129 8.62744 1.87868C9.19005 1.31607 9.95311 1 10.7488 1C11.5444 1 12.3075 1.31607 12.8701 1.87868C13.4327 2.44129 13.7488 3.20435 13.7488 4ZM19.7488 7C19.7488 7.29547 19.6906 7.58806 19.5775 7.86104C19.4644 8.13402 19.2987 8.38206 19.0898 8.59099C18.8808 8.79992 18.6328 8.96566 18.3598 9.07873C18.0868 9.1918 17.7942 9.25 17.4988 9.25C17.2033 9.25 16.9107 9.1918 16.6377 9.07873C16.3647 8.96566 16.1167 8.79992 15.9078 8.59099C15.6988 8.38206 15.5331 8.13402 15.42 7.86104C15.307 7.58806 15.2488 7.29547 15.2488 7C15.2488 6.40326 15.4858 5.83097 15.9078 5.40901C16.3297 4.98705 16.902 4.75 17.4988 4.75C18.0955 4.75 18.6678 4.98705 19.0898 5.40901C19.5117 5.83097 19.7488 6.40326 19.7488 7ZM6.24876 7C6.24876 7.29547 6.19057 7.58806 6.07749 7.86104C5.96442 8.13402 5.79869 8.38206 5.58975 8.59099C5.38082 8.79992 5.13278 8.96566 4.8598 9.07873C4.58682 9.1918 4.29424 9.25 3.99876 9.25C3.70329 9.25 3.41071 9.1918 3.13773 9.07873C2.86474 8.96566 2.61671 8.79992 2.40777 8.59099C2.19884 8.38206 2.03311 8.13402 1.92004 7.86104C1.80696 7.58806 1.74876 7.29547 1.74876 7C1.74876 6.40326 1.98582 5.83097 2.40777 5.40901C2.82973 4.98705 3.40203 4.75 3.99876 4.75C4.5955 4.75 5.1678 4.98705 5.58975 5.40901C6.01171 5.83097 6.24876 6.40326 6.24876 7Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> С кем
            </span>
            <div id="partner-field__dropdown" class="search__partner--mobile">
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="Один" id="solo" name="company[]" />
                    <label class="search__label" for="solo">Один</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="С другом/подругой" id="friend" name="company[]" />
                    <label class="search__label" for="friend">С другом/подругой</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="С детьми" id="children" name="company[]" />
                    <label class="search__label" for="children">С детьми</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="С родителями" id="parents" name="company[]" />
                    <label class="search__label" for="parents">С родителями</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="На свидание" id="lover" name="company[]" />
                    <label class="search__label" for="lover">На свидание</label>
                </div>
                <div class="search__dropdown-item">
                    <input class="search__input" placeholder="Поиск" type="checkbox" value="С компанией" id="group" name="company[]" />
                    <label class="search__label" for="group">С компанией</label>
                </div>
            </div>
        </span>
        <button class="search__save--mobile" type="button" onclick="settingsSearch()">Сохранить</button>
    </div>
</form>
