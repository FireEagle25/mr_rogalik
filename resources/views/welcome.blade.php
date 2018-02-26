<!DOCTYPE html>
<!-- saved from url=(0042)http://craftxhtml.com/projects/kingbakers/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Mr.Rogalik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap -->
    <link href="/files/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/files/font-awesome.min.css" rel="stylesheet">

    <!-- Flat Icons -->
    <link href="/files/flaticon.css" rel="stylesheet">

    <!-- Custom Style Sheet -->
    <link href="/files/style.css" rel="stylesheet">
    <link rel="icon" href="/files/Cake-Chocolate.ico">
</head>

<body>

<header>
    <div class="overlay">
        <div class="container">
            <!-- Header Left -->
            <div class="col-sm-7">
                <div class="company">
                    <img style="width:70%;"src="/files/rogalik.png" alt=""></a>
                    <div class="ribbon">Кондитерская</div>
                </div>
                <h1 style="margin-bottom:30px;">Мы воплощаем в реальность ваши самые вкусные мечты</h1>
            </div>
        </div>
    </div>
</header>

<section class="clearfix hand-made">
    <div class="container">
        <!-- Left Part -->
        <div class="col-sm-6">
            <h2>Выпечка с любовью</h2>
            <div class="separator"></div>
            <p>Все наши торты, кексы, пирожные и многое другое выпекается из лучших ингридиентов. И всегда с любовью.</p>
            <a style="color:white" href="#products"><button>Посмореть все</button></a>
        </div>
        <!-- /End Left Part -->
        <!-- Right Part -->
        <div class="col-sm-6 big-cake"><img src="/files/big-cack.png" alt=""> </div>
        <!-- /End Right Part  -->
    </div>
</section>

<section style="padding: 25px 0; padding-bottom: 100px;" class="our-speciality" id="products">
    <div class="container">
        <h2>Торты и пирожные</h2>
        <div class="col-md-12" style="margin-top: 100px">
            @foreach(App\Product::all()->chunk(3) as $products_chunk)
                @foreach($products_chunk as $product)
                    <div class="col-md-4 product-box">
                        <div class="rate" style="border-bottom-right-radius: 25px;">{{$product->price}}р.</div>
                        <img src="/storage/{{$product->image}}" alt="">
                        <h3>{{$product->name}}</h3>
                        <p>{{mb_substr($product->description, 0, 150)}}...</p>
                        <span style="display: none;">{{$product->description}}</span>
                        <span style="display: none;">{{$product->weight}}</span>
                        <span style="display: none;">{{$product->price_for_kg}}</span>
                        <span style="display: none;">{{$product->servings_count}}</span>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            @endforeach
        </div>
    </div>
</section>

<section class="clearfix contact">
    <div class="container" style="margin-bottom:30px;margin-top:30px;">
        <div class="row float-fix">
            <!-- Left Pert -->
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                <h3 class="clear-top">Время работы</h3>
                <ul class="time-list">
                    <li><span>Понедельник:</span>с 10.00 до 23.00</li>
                    <li><span>Вторник:</span>с 10.00 до 23.00</li>
                    <li><span>Среда:</span>с 10.00 до 23.00</li>
                    <li><span>Четверг:</span>с 10.00 до 23.00</li>
                    <li><span>Пятница:</span>с 10.00 до 23.00</li>
                    <li><span>Суббота:</span>с 10.00 до 23.00</li>
                    <li><span>Восресенье:</span>с 10.00 до 23.00</li>
                </ul>
                <h3>Контакты</h3>
                <p><strong>Адрес: </strong>
                    <em><a style="color: #5f3210;font-size: 1.6rem;" href="https://yandex.ru/maps/-/CBe6v6czCC">Владивосток, пр.Красного Знамени, 133в</a></em></p>
                <p><strong>E-mail:</strong><em> <a style="color: #5f3210;" href="mailto:mr.rogalik.vl@gmail.com">mr.rogalik.vl@gmail.com</a></em></p>
                <p><strong>Телефон:</strong><em> <a style="color: #5f3210;" href="tel:+79084422848">8 (908) 442-28-48</a></em></p>
                <p>
                    <a style="color: #5f3210;" href="https://api.whatsapp.com/send?phone=79084422848"><img style="width:4vh" src="/files/whatsapp.png"></a>
                    <a style="color: #5f3210;" href="tg://resolve?domain=fireeagle25"><img style="width:4vh" src="/files/telegram.png"></a>
                </p>

            </div>
            <!-- /End Left Pert -->

            <!-- Center Part -->
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
                <div id="join-us-form" class="footer-form">
                    <div id="join-us-results"></div>
                    <div class="footer-logo"><img src="/files/rogalik.png" alt=""></div>
                    <h3 style="color: #5f3210">Ждем вас</h3>
                    <!-- Form -->
                    <div class="form-group">
                        <input id="client_name" type="text" name="name" class="f-input input-field" placeholder="Как к вам обращаться?">
                    </div>
                    <div class="form-group">
                        <input id="client_email" type="text" name="email" class="f-input input-field" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input id="client_phone" type="text" name="phone" maxlength="15" class="f-input input-field" placeholder="Телефон">
                    </div>
                    <div class="form-group">
                        <textarea id="client_message" name="message" class="f-input input-field" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <button type="submit" class="submit-btn" id="submit_btn" onclick="sendMessage()">Отправить</button>
                </div>
            </div>
            <!-- /End Center Part -->
        </div>
    </div>
</section>

<footer class="clearfix">
    <div class="container">
        <p><strong>Mr.Rogalik © 2018. Все права защищены.</strong></p>
        <p class="clear-bottom"><small>Site Designed &amp; Developed: <a style="color:white" href="http://awake.su">Awake!</a></small></p>
    </div>
</footer>

<!-- Modal -->
<div id="product" class="modal fade" role="dialog">
    <div class="modal-dialog" style="color: #533537;">

        <!-- Modal content-->
        <div class="modal-content" style="background: #fdf2eb">

            <div class="modal-header" style="border-bottom: 7px double #f2a94e;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="name"></h4>
            </div>
            <div class="modal-body">
                <img src="" style="width: 100%; border-radius: 5px">
                <p id=description style="margin-top: 20px; font-size: 1.8rem;"></p>
                <p id=price style="margin-top: 25px;margin-bottom: 0; font-size: 2rem;"></p>
                <p id=weight style="margin-bottom: 10px; font-size: 2rem;"></p>
                <p id=price_for_kg style="margin: 0; font-size: 1.7rem;"></p>
                <p id=servings_count style="margin: 0; font-size: 1.7rem;"></p>
            </div>
        </div>

    </div>
</div>


<!-- =========================
     Scripts
============================== -->

<!-- Jquery -->
<script src="/files/jquery.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="/files/bootstrap.min.js"></script>

<!-- Custom -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.product-box').click(function (event) {
            event.preventDefault();
            var e = $(this);

            $('#price').text("Стоимость: " + $(e[0]).find('div')[0].innerHTML);
            $('#name').text($(e[0]).find('h3')[0].innerHTML);
            $('#description').text($(e[0]).find('span')[0].innerHTML);
            $('#weight').text("Вес: " + $(e[0]).find('span')[1].innerHTML + "кг");
            $('#price_for_kg').text("Цена за килограм: " + $(e[0]).find('span')[2].innerHTML + " р.");
            $('#servings_count').text("Количество порций: " + $(e[0]).find('span')[3].innerHTML);
            $('#description').text($(e[0]).find('span')[0].innerHTML);
            $('.modal-body').find('img').attr('src', $($(e[0]).find('img')[0]).attr('src'));

            $("#product").modal("show");
        });
    });

    function sendMessage() {
        var data = {
            message: $('#client_message').val(),
            phone: $('#client_phone').val(),
            email: $('#client_email').val(),
            name: $('#client_name').val(),
        };

        $.post( "/", data).done(function(data) {
            $('#submit_btn').css('background', '#47984b');
            $('#submit_btn').text('Отправлено');
            $('#submit_btn').attr("disabled", true);
        });
    }
</script>
</body></html>