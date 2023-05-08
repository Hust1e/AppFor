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
        @if(isset($event->comments))
            @foreach($event->comments()->get() as $comment)
                <div class="event-comment-review">
                    <div class="event-comment-review-author-block">
                        <div class="event-comment-review-author-name"><?php echo $comment['author'] ?></div>
                        <div class="event-comment-review-author-name comment-date"><?php echo $comment['created_at']; ?></div>
                    </div>
                    <div class="event-comment-review-author-comment"><?php echo $comment['comment']; ?></div>
                </div>
            @endforeach
        @endif
        <div class="event-comment-block">
            <div class="event-comment-block-wrapper">
                <div class="event-comment-block-header">Отзывы и оценки</div>
                <div class="event-comment-form">
                    <form action="{{ route('comment.store', $event->id) }}" method="get">
                        @csrf
                        <div class="form-group r1">
                            <label for="">Как вас зовут?</label>
                            <input type="text" name="author">
                        </div>
                        <div class="form-group r3">
                            <label for="">Как вам событие?</label>
                            <textarea name="comment" id="" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit"><span>Оценить</span></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
