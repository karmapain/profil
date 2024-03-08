<style>
    header {
        background-color: #FFD764;
        color: #fff;
        text-align: center;
        background-position: center top;
        background-size: cover;
        background-repeat: no-repeat;
        height: 20vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        background: url("<?php echo $your_base64_image_data; ?>");
        background-size: 100%;
    }

    nav {
        text-align: center;
        margin-top: auto;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
        margin: 0;
        display: inline-block;
        position: relative;
        z-index: 1;
    }

    nav a:before {
        background-color: #283544; /*#4C8891*/
        content: "";
        position: absolute;
        border-top: 2px solid rgba(255, 255, 255, 0.2);
        border-right: 2px solid rgba(255, 255, 255, 0.2);
        border-left: 2px solid rgba(255, 255, 255, 0.2);
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transform: skewX(-30deg);
        z-index: -1;
    }

    nav a:hover:before {
        background-color:#4C8891;
    }

    nav a.current:before {
        content: "";
        position: absolute;
        outline: 2px solid #4C8891; /* Цвет border */
        background-color:#4C8891;
        box-sizing: border-box;
        z-index: -1;
    }

    a {
        text-decoration: none;
        color: inherit;
        background-color: transparent;
    }

    #session {
        position: absolute;
        top: 10px;
        left: 10px;
        display: flex;
        width: 25%;
    }

    #session #timer_button {
        margin: 15px;
        height: 100%;
        width: 30%;
        background-color: #29354d55;
        color: #fffc;
        border: 1px solid #fffc;
        padding: 10px 5px;
        cursor: pointer;
        transition: background-color 3s ease;
    }

    #session #timer_button {
        /* Добавьте начальное значение для opacity */
        opacity: 1;
        transition: opacity 3s ease; /* Плавная анимация для opacity */
    }

    #session:hover #timer_button {
        opacity: 1;
        transition: opacity 3s ease;
    }

    /* Анимация появления */
    @keyframes fadeIn {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }

    /* Применяем анимацию только к видимой кнопке */
    #session #timer_button:not(:hover) {
        animation: fadeIn 1s 7s forwards; /* Запускаем анимацию fadeIn через 3 секунды и удерживаем конечное значение opacity */
    }

    #session #timer_button:hover {
        opacity: 1;
        transition: opacity 3s ease;
    }

    #timer_button.button_hover {
        opacity: 1;
    }

    #language-btns {
        position: absolute;
        top: 25px;
        right: 25px;
    }

    #language-btns button {
        margin-right: 5px;
        background-color: #29354d;
        color: #fff;
        border: 1px solid #fff;
        padding: 10px 15px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #language-btns button:hover {
        background-color: #4C8891cc;
        color: #fff;
        border: 1px solid #29354d;
    }

    #language-btns button.active,
    #language-btns button:active {
        color: #fff;
        border: 1px solid #29354d;
        background-color: #4C8891cc;
    }

    #language-btns button.active:hover,
    #language-btns button:active:hover {
        color: #29354d;
        border: 1px solid #29354d;
        background-color: #4C8891cc;
    }

    /* Новые стили для картинки в settings */
    .settings {
        display: inline-block; /* Добавляем этот стиль для размещения картинки в ряд с текстом */
        vertical-align: middle; /* Выравниваем вертикально относительно центра блока nav */
    }

    .settings img {
        width: 20px; /* Устанавливаем желаемую ширину картинки */
    }

    @keyframes blink {
        0%, 100% {
            border-color: red; /* Цвет бордера на половине времени анимации */
        }
        50% {
            border-color: transparent; /* Начальный и конечный цвет бордера */
        }
    }

    .connect_notification {
        background-color: #252;
        border: 1px solid #ddd;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 10px auto;
    }

    .connect_btn-ok {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }
</style>

<header>

    <nav>
        <div class="settings" style="margin-right: 5px;">
            <a href="search.php" style="align-items: center; display: flex" onclick="setPage('search.php')" class="<?php echo isset($_COOKIE['page']) && $_COOKIE['page'] === 'search.php' ? 'current' : ''; ?>">
                <?php echo $languages[$currentLanguage]['search_label']; ?>&nbsp;
                <img src="css/imgs/search.png" alt="" style="height: 20px; width: 20px;">
            </a>
        </div>
        <a href="univers.php"</a>

        <a href="project_info.php"></a>

        <a href="participation_order.php"></a>

        <a href="methodological_materials.php"></a>

        <a href="faq.php"></a>

        <a href="support.php"></a>

        <a href="announcements.php" onclick="setPage('announcements.php')" class="<?php echo isset($_COOKIE['page']) && $_COOKIE['page'] === 'announcements.php' ? 'current' : ''; ?>"><?php echo $languages[$currentLanguage]['announce_label']; ?></a>

        <div class="settings" style="margin-left: 5px;">
            <a href="options.php" style="align-items: center; display: flex" onclick="setPage('options.php')" class="<?php echo isset($_COOKIE['page']) && $_COOKIE['page'] === 'options.php' ? 'current' : ''; ?>">
                <?php echo $languages[$currentLanguage]['options_label']; ?>&nbsp;
                <img src="css/imgs/settings.png" alt="" style="height: 20px; width: 20px;">
            </a>
        </div>
    </nav>

    <div id="language-btns">
        <button id="kaz" onclick="changeLanguage('kaz')">KAZ</button>
        <button if="ru" onclick="changeLanguage('ru')">RU</button>
    </div>
</header>
