{{--<img src="{{asset('/images/1683457183.jpg')}}" alt="">--}}
@extends('layouts/default')
@section('content')
    <div class="body-wrapper">
        @foreach($events as $event)
            <div class="event-form">
                <div class="event-img">
                    <img src="{{asset("/images/$event->event_img")}}" alt="">
                </div>
                <div class="event-data">
                    <div class="event-data-name"><?php echo $event->event_name; ?></div>
                    <div class="event-data-type"><?php echo $event->event_type; ?></div>
                    <div class="event-data-date"><span><?php echo $event->event_date; ?></span></div>
                    <div class="event-data-description"><?php echo $event->event_description; ?></div>
                    <div class="event-data-button"><a href="<?php echo '/events/' . $event->id ?>">Подробнее</a></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
