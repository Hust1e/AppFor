@extends('layouts/bootstrap')
@section('content')
    <div class="body-wrapper">
        <div class="event-form">
            <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Название мероприятия" name="event_name">
                <input type="text" placeholder="Описание" name="event_description">
                <input type="text" placeholder="Тип мероприятия" name="event_type">
                <input type="text" placeholder="Дата" name="event_date">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="event_img">
                </div>
                <input type="text" placeholder="Стоимость" name="event_price">
                <input type="text" placeholder="Ссылка" name="event_http">
                <div class="button">
                    <button type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
