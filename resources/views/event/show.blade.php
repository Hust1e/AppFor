@extends('layouts/default')
@section('content')
    <div class="body-wrapper">
        <div class="event-block">
            <img src="{{asset("images/event-page.png")}}" alt="">
            <div class="event-block-main">
                <div class="event-block-info">
                    <div class="event-block-name"><?php echo $event->event_name ?></div>
                    <div class="event-data-type"><?php echo $event->event_type ?></div>
                    <div class="event-data-date m3"><span><?php echo $event->event_date ?></span></div>
                    <div class="event-block-button"><a href="<?php echo $event->event_http ?>">На сайт</a></div>
                </div>
                <div class="event-block-description">
                    <span>О событии<br></span>
                    <div class="event-block-description-text">
                        <?php echo $event->event_description ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-price-block">
            <div class="event-price-block-wrapper">
                <div class="event-price-block-text">Стоимость посещения</div>
                <div class="event-price-block-price"><?php echo $event->event_price . ' ₽' ?></div>
            </div>
        </div>

        <div class="event-comment-block">
            <div class="event-comment-block-wrapper">
                <div class="event-comment-block-header">Отзывы и оценки</div>
                <div class="event-comment-form">
                    <form action="">
                        <div class="form-group">
                            <label for="">Как вам событие?</label>
                            <textarea name="" id="" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit"><a href="">Оценить</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
