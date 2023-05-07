@extends('layouts.default')
@section('content')
    <div class="mainpage-background"></div>
    <div class="mainpage-line"></div>
    <div class="mainpage-line-img"><img src="{{ asset('/storage/mainpage-background.png') }}"></div>
    <div class="body-wrapper">
        <div class="mainpage-content">
            <div class="mainpage-main-text">Мы знаем, где ты <br> отдохнешь сегодня</div>
            <div class="mainpage-main-subtext">Добро пожаловать! Это сервис для нахождения <br> актуальных и, что важно,
                интересных <br> мероприятий в городе Казань для взрослых
            </div>
            <div class="mainpage-main-button"><a href="">ГОТОВ К ОТДЫХУ</a></div>
        </div>
    </div>
    <div class="mainpage-second-background"></div>
    <div class="mainpage-second-background-hamster"><img src="{{ asset('/storage/hamster.png') }}"></div>
    <div class="body-wrapper">
        <div class="mainpage-second-block">
            <div class="mainpage-second-title">
                Если редко тусить с <br> друзьями, то <br> портиться карма
            </div>
            <div class="mainpage-second-subtitle">
                мудрость Великого и непревзойденного <br> хомяка Пятница
            </div>
        </div>
        <div class="mainpage-about-us">
            <div class="mainpage-about-us-prev">
                О нас
            </div>
            <div class="mainpage-about-us-text">
                Сервис “Куда пойдем” на рынке уже давно, и не сочетать сколько. Мы появились тогда, когда люди придумали
                отдых. Представали миру в разных воплощениях, и вот, мы здесь, чтобы сделать твою жизнь легче и
                интереснее!
            </div>
        </div>
        <div class="mainpage-events">
            <div class="mainpage-events-text">Смотри, что есть для тебя</div>
            <div class="mainpage-events-button"><a href="/events">К мероприятиям</a></div>
        </div>
        <div class="mainpage-events-carousel">
            <div class="mainpage-events-carousel-item item-first">
                <div class="mainpage-events-carousel-item-info">
                    <div class="mainpage-events-carousel-item-name">
                        <li>Hans Zimmer’s Universe</li>
                    </div>
                    <div class="mainpage-events-carousel-item-date">Концерт 24 мая, 19:00</div>
                </div>
            </div>
            <div class="mainpage-events-carousel-item item-second">
                <div class="mainpage-events-carousel-item-info">
                    <div class="mainpage-events-carousel-item-name">
                        <li>Руки Вверх!</li>
                    </div>
                    <div class="mainpage-events-carousel-item-date">Концерт 17 июня, 20:00</div>
                </div>
            </div>
            <div class="mainpage-events-carousel-item item-third">
                <div class="mainpage-events-carousel-item-info">
                    <div class="mainpage-events-carousel-item-name">
                        <li>Я рядом. Яратам</li>
                    </div>
                    <div class="mainpage-events-carousel-item-date">Выставка</div>
                </div>
            </div>
        </div>
{{--    COMPANY BLOCK     --}}
        <div class="mainpage-company">
            <div class="mainpage-company-img"><img src="{{asset('/storage/kremlin.png')}}"></div>
            <div class="mainpage-company-form">
                <span>Компаниям</span>
                <h3>Компания? <br> Есть что предложить?</h3>
                <h4>Заполняй форму, отвечаем в течение дня</h4>
                <div class="mainpage-company-contact-form">
                    <form action="" method="post">
                        @csrf
                        <input type="text" placeholder="Имя представителя компании" name="agent_name">
                        <input type="text" placeholder="Название компании" name="company_name">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" placeholder="Телефон" name="phone_number">
                        <span>Проблемы? Пиши на почту helpkudapoiti@gmail.com</span>
                        <div class="button">
                            <button type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{--        SOCIAL MEDIA      --}}
        <div class="mainpage-social">
            <img src="{{asset('/storage/mainpage-footer.png')}}" alt="" height="360" width="570">
            <div class="mainpage-social-icons">
                <img src="{{asset('/storage/icons/whatsapp.png')}}" alt="">
                <img src="{{asset('/storage/icons/telegram.png')}}" alt="">
                <img src="{{asset('/storage/icons/vk.png')}}" alt="">
            </div>
        </div>
    </div>
@stop
