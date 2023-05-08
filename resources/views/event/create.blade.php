@extends('layouts/bootstrap')
@section('content')
    <div class="body-wrapper">
        <div class="event-form">
            <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" placeholder="Название мероприятия" name="event_name">
                <input type="text" class="form-control" placeholder="Описание" name="event_description">
                <input type="text" class="form-control" placeholder="Тип мероприятия" name="event_type">
                <input type="text" class="form-control" placeholder="Дата" name="event_date">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="event_img">
                </div>
                <input type="text" class="form-control" placeholder="Стоимость" name="event_price">
                <input type="text" class="form-control" placeholder="Ссылка" name="event_http">
                <div class="button">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
