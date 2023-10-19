<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="/js/script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="header" id="header">
        <div class="header-container">
            <button class="header-burger-btn" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="header-logo">
                VoyageVoyage
            </div>
            <div class="header-nav">
                <button class="nav-item" id="btn-scroll">Партнеры</button>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="title-block">
            <div class="title-text">
                <div class="title-text-bold">Найдем, где провести время</div>
                <div class="title-text-slim">Покажем, где погулять, поесть в шаговой доступности от Вас</div>
                <button class="btn-hotel shadow" id="btn-scroll2">Указать отель</button>
            </div>
        </div>

      
        
    <div class="main-block">
        
        <div class="main-form" id="main-form">
            <div class="main-title">
                <div class="main-title-text">Покажем всё</div>
            </div>
            <form action="/search" method="POST">
                @csrf
                <div class="main-form-search">
                    <span class="title-text-slim text-dark">Укажите название отеля</span>
                    <input type="text" class="input form-control border-danger-subtle shadow" style="width: 50%;" name="hotel">
                </div>
                <div class="main-form-sort">
                    <span class="title-text-slim text-dark">Радиус действия: м</span>
                    <input type="text" class="input form-control border-danger-subtle shadow" style="width: 50%;" name="radius"> 
                </div>
                <div class="main-form-type">
                    <div class="checkbox-park">
                        <label><input type="checkbox" name="park" id="checkbox1"><img src="/images/Park.png" class="input-img">
                        <span>Парк</span>
                    </label>
                    </div>
                    <div class="checkbox-park">
                        <label><input type="checkbox" name="eat" id="checkbox"><img src="/images/eat.png" alt="" class="input-img">
                         <span>Поесть</span>
                        </label>
                    </div>
                    <div class="checkbox-park">
                        <label><input type="checkbox" name="monuments" id="checkbox"><img src="/images/Monument.png" class="input-img">
                        <span>Монументы</span>
                        </label>
                    </div>
                    <div class="checkbox-park">
                        <label>
                            <input type="checkbox" name="torg_centr" id="checkbox"><img src="/images/torg_centr.png" class="input-img">
                        <span>Торговые центры</span>
                    </label>
                    </div>
                    <div class="checkbox-park">
                        <label>
                            <input type="checkbox" name="museum" id="checkbox"><img src="/images/Museum.png" class="input-img">
                            <span>Музеи</span>
                        </label>
                    </div>
                    <div class="checkbox-park">
                        <label><input type="checkbox" name="religion" id="checkbox"><img src="/images/Religion.png" class="input-img">
                        <span>Религия</span>
                    </label>
                    </div>
                    <!-- <span>Категория поиска</span> -->
                </div>
                <button class="btn-search shadow">Найти места</button>
            </form>
        </div>
    </div>
    <div class="main-result">
        <div class="main-title">
            <div class="main-title-text"> Результаты поиска</div>
        </div>
        
            <div class="card-block">

                @for ($i = 0; $i < $count; $i++)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="{{$listIMG[$i]}}" class="card-img-top" style="height: 284px">
                            <div class="card-title">
                                <h5 class="card-title">{{$listName[$i]}}</h5>
                                <p class="card-text">{{$listDecription[$i]}}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-danger">
                                {{$listReiting[$i]}}/5 
                                <img src="/images/Star 1.png" class="star ">
                            </button>
                        </div>
                    </div>
                @endfor

    </div>
        <div class="intermediate-block">
            <div class="intermediate-nav">
                <span class="intermediate-title float-end">Часто посещаемые места</span>
            </div>
            
            <div class="card-popular-list"> 
                <div class="card" style="width: 18rem;"> 
                    <div class="card-body"> 
                        <img src="/images/bg.jpg" alt="" class="card-img-top"> 
                        <div class="card-title-block"> 
                            <h5 class="card-title">Жиши Суши</h5> 
                            <p class="card-text">Суши-бар, доставка еды и обедов, кафе</p> 
                        </div> 
                    </div> 
                    <div class="card-footer"> 
                        <button class="btn btn-danger">5,0/5 <img src="/images/Star 1.png" class="star "></button> 
                    </div> 
                </div> 
                <div class="card" style="width: 18rem;"> 
                    <div class="card-body" > 
                        <img src="/images/bg.jpg" class="card-img-top"> 
                        <div class="card-title"> 
                            <h5 class="card-title">Дофамин</h5> 
                            <p class="card-text">Кофейня, кафе</p> 
                        </div> 
                    </div> 
                    <div class="card-footer"> 
                        <button class="btn btn-danger">4.8/5 <img src="/images/Star 1.png" class="star "></button> 
                    </div> 
                </div> 
                <div class="card" style="width: 18rem;"> 
                    <div class="card-body" > 
                        <img src="/images/bg.jpg" class="card-img-top"> 
                        <div class="card-title"> 
                            <h5 class="card-title">Муниципальное автономное учреждение культуры Белорецкий историко-краеведческий музей</h5> 
                            <p class="card-text">Хороший краеведческий музей с экспозициями о природе</p> 
 
                        </div> 
                    </div> 
                    <div class="card-footer"> 
                        <button class="btn btn-danger">4.3/5 <img src="/images/Star 1.png" class="star "></button> 
                    </div> 
                </div> 
                
            </div>
        </div>
        <footer class="footer" id="footer"> 
            <div class="footer-logo"><img src="/images/footer-logo.png" class="footer-logo-img" alt=""></div> 
            <div class="footer-partnes"> 
                <span class="footer-title">Наши партнеры</span> 
                <div class="footer-partness-img"> 
                    <a href="https://sferum.ru"><img src="/images/sferum.png" alt="" class="footer-img1"></a> 
                    <a href="expert.vk.com"><img src="/images/vk.png" alt="" class="footer-img2"></a> 
                    <a href="mpit.pro"><img src="/images/it.png" alt="" class="footer-img3"></a> 
                </div> 
            </div> 
        </footer>
        <div class="go" id="go"><img src="/images/Arrow1.png" class="go-img " alt=""></div>
    </div>

</body>
</html>