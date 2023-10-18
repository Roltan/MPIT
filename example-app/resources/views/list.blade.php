<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script defer src="/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="header-container">
            <div class="header-logo">
                VoyageVoyage
            </div>
            <div class="header-nav">
                <a href="#" class="nav-item">Карта</a>
                <a href="#" class="nav-item">Рекомендации</a>
                <a href="#" class="nav-item">Партнеры</a>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="title-block">
            <div class="title-text">
                <div class="title-text-bold">Найдем что угодно</div>
                <div class="title-text-slim">Укажите хотя бы отель что бы мы поняли где искать</div>
                <button class="btn-hotel">Указать отель</button>
            </div>
        </div>

        <div class="main-title">
            <div class="main-title-text">Покажем всё</div>
            <div class="main-title-text">
                Результаты поиска
            </div>
        </div>
        
    <div class="main-block">
        
        <div class="main-form">
            <span class="title-text-slim text-dark">Укажите название отеля</span>
            <form action="/search" method="POST">
                @csrf
                <div class="main-form-search"> 
                    <input type="text" placeholder="Укажите отель" class="hotelname" name="hotel"> 
                </div> 
                <div class="main-form-sort"> 
                    <input type="text" name="radius"> 
                    <span>Радиус действия: км</span> 
                </div> 
                <div class="main-form-type"> 
                    <div class="checkbox-park"> 
                        <input type="checkbox" name="park" id=""> 
                        <span>Парк</span> 
                    </div> 
                    <div class="checkbox-monuments"> 
                        <input type="checkbox" name="monuments" id=""> 
                        <span>Кафе</span> 
                    </div> 
                    <!-- <span>Категория поиска</span> --> 
                </div> 
                <button class="btn-search">Найти</button> 
            </form>

            <div class="main-maps">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aec9283dbdb5047be809a5c4e9368fc8155790efaf915ec9b4464117d0d95e6b8&amp;width=620&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
    
            </div>
        </div>
        <div class="main-result">
            
            <!-- Сортировка -->

            <div class="main-sort">
                <div class="main-sort-text">
                    Сортировать по
                </div>
                <div class="btn-group dropend">
                    <select name="select" size="1">
                        <button><option selected value="s1">Популярности</option></button>
                        <button><option value="s2">Посещаемости</option></button>
                        <button><option value="s3">Пблизости</option></button>
                    </select>
                </div>
            </div>
            @for ($i = 0; $i < $count; $i++)
                <div class="card-block">
                    <div class="card" style="width: 18rem;">
                        <!-- Сюда картинка -->
                        <img src="/images/bg.jpg" class="card-img-top"> 
                        <div class="card-body">
                            <!-- сюда имя места -->
                        <h5 class="card-title">{{$listName[$i]}}</h5>
                        <!-- описание места -->
                        <p class="card-text">Какое-то описание места</p>
                        <!-- оценка места -->
                        <a href="#" class="btn btn-danger">{{$listReiting[$i]}}/5<img src="/images/Star 1.png" class="star"></a>
                        </div>
                    </div>
                </div>
            @endfor
                
        </div>
    </div>
      
    <div class="intermediate-block">
        <div class="intermediate-nav">
            <span class="intermediate-title">Часто посещаемые места</span>
        </div>
        <div class="card-popular-list">
            <div class="card popular" style="width: 18rem;">
                <!-- Сюда картинка -->
                <img src="/images/bg.jpg" class="card-img-top"> 
                <div class="card-body">
                    <!-- сюда имя места -->
                <h5 class="card-title">Имя места</h5>
                <!-- описание места -->
                <p class="card-text">Какое-то описание места</p>
                <!-- оценка места -->
                <a href="#" class="btn btn-danger">4.8/5 <img src="/images/Star 1.png" class="star"></a>
                </div>
            </div>
            <div class="card popular" style="width: 18rem;">
                <!-- Сюда картинка -->
                <img src="/images/bg.jpg" class="card-img-top"> 
                <div class="card-body">
                    <!-- сюда имя места -->
                <h5 class="card-title">Имя места</h5>
                <!-- описание места -->
                <p class="card-text">Какое-то описание места</p>
                <!-- оценка места -->
                <a href="#" class="btn btn-danger">4.8/5 <img src="/images/Star 1.png" class="star"></a>
                </div>
            </div>
            <div class="card popular" style="width: 18rem;">
                <!-- Сюда картинка -->
                <img src="/images/bg.jpg" class="card-img-top"> 
                <div class="card-body">
                    <!-- сюда имя места -->
                <h5 class="card-title">Имя места</h5>
                <!-- описание места -->
                <p class="card-text">Какое-то описание места</p>
                <!-- оценка места -->
                <a href="#" class="btn btn-danger">4.8/5 <img src="/images/Star 1.png" class="star"></a>
                </div>
            </div>
        </div>
    </div>

        
    </div>
</body>
</html>