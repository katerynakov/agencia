<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакти</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3/css/bootstrap.min.css">
    <script defer src="../bootstrap-5.2.3/js/bootstrap.min.js"></script>
    <script defer src="../bootstrap-5.2.3/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">

    <script type=text/js defer src="../js/main.js"></script>
</head>

<body class="body">
<a id="buttontothetop"></a>

    <?php
    include('header-ua.php');
    ?>

    <section class="main">
        <section class="contacts">

            <!-- ФОРМА СВЯЗИ -->

            <div class="container-main">
                <div class="contacts__forma">
                    <div class="contacts__forma_title body-title">
                        <img class="h2_img" src="../img/bluearrow.svg" alt="">
                        <h2>Форма зворотнього зв'язку:</h2>
                    </div>

                    <div class="container-main">
                        <form class="row g-3" action="https://formsubmit.co/odesarda@gmail.com" method="POST">
                            <!-- Honeypot -->
                            <input type="text" name="_honey" style="display: none;">

                            <!-- Disable Captcha -->
                            <input type="hidden" name="_captcha" value="false">
                            <!-- 
              <input type="hidden" name="_next" value="https://5.75.227.96/" > -->

                            <div class="col-md-6">
                                <label for="firstName" class="form-label">Ваше ім'я</label>
                                <input type="text" class="form-control" name="name" id="firstName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName" class="form-label">Ваше прізвище</label>
                                <input type="text" class="form-control" name="Last&nbsp;Name" id="lastName" required>
                            </div>
                            <div class="col-md-8">
                                <label for="emailInfo" class="form-label">Електронна пошта</label>
                                <input type="email" class="form-control" name="email" id="emailInfo" required>
                            </div>
                            <div class="col-md-4">
                                <label for="phoneNumber" class="form-label">Номер телефону</label>
                                <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="(093) 387-35-55">
                            </div>
                            <div class="col-md-12">
                                <label for="comments" class="form-label">Ваше повідомлення</label>
                                <textarea class="form-control" id="comments" name="comments,&nbsp;questions" rows="3" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Відправити</button>
                            </div>
                        </form>

                    </div>



                </div>
            </div>


            <div class="container-main">
                <div class="contacts__body">
                    <div class="contacts__body_title body-title">
                        <img class="h2_img" src="../img/bluearrow.svg" alt="">
                        <h2>Контакти:</h2>
                    </div>
                    <div class="contacts__body_text">
                        <ul>
                            <li> <img src="../img/contact/placeholder.svg" alt=""> вул. Рішельєвська, 8, м. Одеса, Україна, 65026</li>
                            <li> <img src="../img/contact/telephone.svg" alt=""> <a href="tel:+380933873555">(093) 387-35-55</a></li>
                            <li> <img src="../img/contact/mail.svg" alt=""> <a href="mailto:odesarda@gmail.com">odesarda@gmail.com</a></li>
                            <li> <img src="../img/facebook.svg" alt=""> <a target="_blank" href="https://www.facebook.com/OdesaRDA">www.facebook.com/OdesaRDA</a></li>
                        </ul>
                        <div class="contacts__body_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.259031333229!2d30.73829161555556!3d46.483183079126135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6319842043dab%3A0x377386abafb82128!2z0YPQuy4g0KDQuNGI0LXQu9GM0LXQstGB0LrQsNGPLCA4LCDQntC00LXRgdGB0LAsINCe0LTQtdGB0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDY1MDAw!5e0!3m2!1sru!2sua!4v1670832002934!5m2!1sru!2sua" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </div>


        </section>
    </section>
    <footer class="footer">
        <div class="container-footer">
            <div class="footer__body">
                <div class="footer__logo"><a href="http://rdaod.com.ua/"><img src="../img/logo.png" alt=""></a></div>

            </div>
        </div>
    </footer>
</body>

</html>