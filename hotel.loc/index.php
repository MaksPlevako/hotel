<?php
$connect = mysqli_connect('localhost','root','root','hotel');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adaptive.css"> 
    <title>Hotel</title>
</head>
<body>
    <header>
        <a name="home"></a>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <h2>LOGO</h2>
                </div>
                <div class="nav">
                    <div class="nav_link">
                        <a href="#home">Головна</a>
                    </div>
                    <div class="nav_link">
                        <a href="nomers.html#booking">Номери</a>
                    </div>
                    <div class="nav_link">
                        <a href="#booking">Бронювання</a>
                    </div>
                    <div class="nav_link">
                        <a href="poslygi.html#poslygi">Послуги</a>
                    </div>
                    <div class="nav_link">
                        <a href="contact.html#contacts">Контакти</a>
                    </div>
                </div>    
            </div>
        </div>
    </header>
    <section id="home">
        <a name="booking"></a>
        <div class="container">
            <div class="home">
                <div class="home_back">
                    <div class="home_text">Ласкаво просимо в <br> "НАЗВАНИЕ"</div>
                    <div class="booking">
                        <form action="info.php" method="POST">
                            <div class="booking_block">
                                <div class="booking_text">Заїзд</div>
                                <div class="booking_form">
                                    <input type="date" name="arrival_date" id="arrival" required>
                                </div>
                            </div>
                            <div class="booking_block">
                                <div class="booking_text">Виїзд</div>
                                <div class="booking_form">
                                    <input type="date" name="departure_date" id="departure" required>
                                </div>
                            </div>
                            <div class="booking_block">
                                <div class="booking_text">Кількість гостей</div>
                                <div class="booking_form">
                                    <select name="people" id="number" required>
                                        <option disabled selected>Виберіть кількість гостей</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="booking_block">
                                <div class="booking_text">Номер</div>
                                <div class="booking_form"> 
                                    <select name="nomer" id="name_nomer" placeholder="" required>
                                        <option value="def" disabled selected>Виберіть номер</option>

                                        <?php 
                                            $numbers = mysqli_query($connect,"SELECT * FROM `nomers`");
                                            while($numbers_res = mysqli_fetch_assoc($numbers)):
                                        ?>

                                        <option value="<?php echo $numbers_res['id'] ?>"><?php echo $numbers_res['nomers_name'] ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="booking_button">
                                <input type="submit" value="Забронювати">
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <a name="about"></a>
        <div class="container">
            <div class="about">
                <div class="about_text">
                    <div class="about_text_main">Народження легенди</div>
                    <div class="about_text_sec">У 1907 р. відбулася історична подія: відчинив свої двері "НАЗВАНИЕ", що зайняв одну із знаменитих будівель району Ноб-Хілл. Цей відомий готель став одним із головних місць проведення розкішних балів, президентських візитів та політичних зустрічей, завдяки чому Fairmont стали називати «місцем, де трапляються події». Це стало благодатним підґрунтям для народження бренду Fairmont Hotels & Resorts.</div>
                </div>
                <a href="#about" class="about_button">Більше про готель</a>
                <div class="about_button_more">
                    <div class="more_content">
                        <span>Історія готелю</span>
						<button class="more_close">X</button>
                        <div class="more_text">
                            <hr>
                            <p> У 1907 р. відбулася історична подія: відчинив свої двері "НАЗВАНИЕ", що зайняв одну із знаменитих будівель району Ноб-Хілл. Цей відомий готель став одним із головних місць проведення розкішних балів, президентських візитів та політичних зустрічей, завдяки чому "НАЗВАНИЕ" стали називати «місцем, де трапляються події». Це стало благодатним підґрунтям для народження бренду "НАЗВАНИЕ". </p>
                            <h2>Розкішні номери у самому центрі міста.</h2>
                            <hr>
                            <p>Готелі "НАЗВАНИЕ" - це більше, ніж просто номери класу люкс, бари та ресторани світового класу та чудове розташування. Тут у гостей з'являються незабутні спогади. Можливо, саме тому так багато знаменитостей, представників королівських сімей, політиків та художників віддавали перевагу і продовжують віддавати перевагу готелям "НАЗВАНИЕ".</p>
                            <hr>
                            <p>Клод Моне малював знамениті лондонські пейзажі, зупиняючись у Savoy. Більше того, вчені визначили з яких саме балконів відкривається той вид, який малював художник, ґрунтуючись на висвітленні на його картинах (номери 610 та 611 у 1900 та номери 510 та 511 у 1901). Ноел Кауард одужував від грипу і завершував свою комедію «Приватні життя», перебуваючи у пентхаусі готелю "НАЗВАНИЕ" у Києві. Список найбільших голлівудських зірок та інших відомих особистостей на цьому не закінчується.</p>
                            <hr>
                            <p>Наші готелі грали найважливіші ролі у історичних подіях. Статут ООН було складено та підписано представниками 50 країн у залі «Garden» у готелі "НАЗВАНИЕ". У 1943 році Вільям Лайон Маккензі Кінг приймав Уїнстона Черчілля і Франкліна Д. Рузвельта в "НАЗВАНИЕ", де політичні діячі складали плани Нормандського вторгнення до Європи. Леннон та Йоко Оно влаштували історичну акцію «У ліжку за мир» у "НАЗВАНИЕ" у 1969 році. Саме під час цієї акції колишній соліст Beatles написав текст і записав пісню Give Peace a Chance, що стала гімном антивоєнного руху.</p>
                            <hr>
                            <p>Наші легендарні готелі користуються популярністю серед королівських осіб. Так, королева Єлизавета II зупинялася в кожну декаду свого правління. Крім того, ми приймали у себе місцевих знаменитостей під час їх перших балів, проводили численні чаювання з танцями та розкішні святкові трапези. Наша мета — подарувати незабутні враження кожному гостю, який прийшов на ваш захід, чи то легендарна подія, про яку будуть писати в газетах, чи місце для штаб-квартири британської розвідки на Бермудах, яка працює над зломом шифрів.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="services">
                <div class="services_text_main">Послуги</div>
                <div class="services_view">
                    <div class="servicesss">
                        <div class="services_img">
                            <img src="img/services_cam.png" alt="">
                        </div>
                        <div class="services_text">Камери зберігання</div>
                    </div>
                    <div class="servicesss">
                        <div class="services_img">
                            <img src="img/services_park.png" alt="">
                        </div>
                        <div class="services_text">Безкоштовна парковка</div>
                    </div>
                    <div class="servicesss">
                        <div class="services_img">
                            <img src="img/services_buis.png" alt="">
                        </div>
                        <div class="services_text">Бізнес зустрічі</div>
                    </div>
                    <div class="servicesss">
                        <div class="services_img">
                            <img src="img/services_rest.png" alt="">
                        </div>
                        <div class="services_text">Ресторан та кафе</div>
                    </div>
                    <div class="servicesss">
                        <div class="services_img">
                            <img src="img/services_feat.png" alt="">
                        </div>
                        <div class="services_text">Фітнес зал</div>
                    </div>
                    <div class="servicesss">
                        <div class="services_img">
                            <img src="img/services_game.png" alt="">
                        </div>
                        <div class="services_text">Більярд</div>
                    </div>
                    <div class="servicesss">
                        <div class="services_img">
                            <img src="img/services_spa.png" alt="">
                        </div>
                        <div class="services_text">Спа-салон</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="nomers">
        <div class="container">
            <div class="nomers">
                <div class="nomers_block">
                    <img src="img/nomer_1.png" alt="">
                    <img src="img/nomer_2.png" alt="">
                    <img src="img/nomer_3.png" alt="">
                </div>
                <div class="nomers_block">
                    <img src="img/nomer_4.png" alt="">
                    <a href="nomers.html#nomers" class="nomers_text"><hr><span> Всі номери </span><hr></a>
                    <img src="img/nomer_5.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <footer id="contact">
        <div class="container">
            <div class="contact">
                <div class="contacts">
                    <div class="contacts_main_text">Контакти</div>
                    <div class="contacts_sec_text">
                        <a href="https://www.google.com.ua/maps/place/ул.+Набережно-Крещатицкая,+3,+Киев,+02000/@50.4611825,30.5239672,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4ce471d281d2f:0xcfa5316fbb7b3543!8m2!3d50.4611797!4d30.5257944?hl=ru">вул. Набережно-Хрещатицька 3, Київ<br></a>                        Тел.: +38 (099) 999 9999<br>
                        Факс: +38 (099) 999 9999 <br>    
                        E-mail: hotel.com
                    </div>
                </div>
                <div class="follow_us">
                    <div class="contacts_main_text">Слідкуйте за нами</div>
                    <div class="follow_us_img">
                        <a href="#"> <img src="img/facebook.png" alt=""> </a>
                        <a href="#"> <img src="img/instagram.png" alt=""> </a>
                        <a href="#"> <img src="img/telegram.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>