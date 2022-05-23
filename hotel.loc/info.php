<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="info.css">
    <link rel="stylesheet" href="adaptive.css">
    <title>Info</title>
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
                        <a href="index.php#home">Головна</a>
                    </div>
                    <div class="nav_link">
                        <a href="nomers.html#booking">Номери</a>
                    </div>
                    <div class="nav_link">
                        <a href="index.php#booking">Бронювання</a>
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
    <section id="info">
        <div class="container">
            <div class="additional_info">
                <form action="main.php" method="POST">
                    <div class="inform_text">Заповніть дані</div>
                    <div class="info">
                        <div class="info_form">
                            <div class="inform">
                                <div class="info_text">Введіть ім'я</div>
                                <input type="text" id="name" name="name" placeholder="Макс" required>
                            </div>
                            <div class="inform">
                                <div class="info_text">Введіть номер телефону</div>
                                <input type="tel" id="num" name="phone" placeholder="+38(___)___-__-__" value="+38(___)___-__-__" required>
                            </div>
                        </div>
                        <div class="info_btn">
                            <input type="submit" value="Відправити">
                        </div>
                    </div>
                    <input type="hidden" name="arrival_date" value="<?php echo $_POST['arrival_date']; ?>">
                    <input type="hidden" name="departure_date" value="<?php echo $_POST['departure_date']; ?>">
                    <input type="hidden" name="people" value="<?php echo $_POST['people']; ?>">
                    <input type="hidden" name="nomer" value="<?php echo $_POST['nomer']; ?>">
                </form>
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
    <script src="script4.js"></script>
</body>
</html>