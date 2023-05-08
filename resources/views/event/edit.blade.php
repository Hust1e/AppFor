@extends('layouts/bootstrap')
@section('content')
    <div class="body-wrapper">
        <div class="event-form">
            <form action="{{ route('event.update', $event->id ) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <input type="text" placeholder="Название мероприятия" name="event_name" value="{{ old('event_name', $event->event_name) }}">
                <input type="text" placeholder="Описание" name="event_description" value="{{ old('event_description', $event->event_description) }}">
                <input type="text" placeholder="Тип мероприятия" name="event_type" value="{{ old('event_type', $event->event_type) }}">
                <input type="text" placeholder="Дата" name="event_date" value="{{ old('event_date', $event->event_date) }}">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" name="event_img" value="{{ old('event_img', $event->event_img) }}">
                </div>
                <input type="text" placeholder="Стоимость" name="event_price" value="{{ old('event_price', $event->event_price) }}">
                <input type="text" placeholder="Ссылка" name="event_http" value="{{ old('event_http', $event->event_http) }}">
                <div class="button">
                    <button type="submit">Отправить</button>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
