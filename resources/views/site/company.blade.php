@extends('layouts/default')
@section('content')
    <div class="body-wrapper">
        <div class="company-contact-form">
            <div class="mainpage-company-contact-form">
                <h2>Предложите мероприятие</h2>
                <form action="{{ route('request.store') }}" method="post">
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
    </div>
@endsection
