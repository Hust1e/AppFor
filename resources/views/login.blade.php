<?php

?>
@extends('layouts/default')
@section('content')
<div class="body-wrapper">
    <div class="form-login">
        <span>Авторизация</span>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Имя администратора</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Войти</button>
            </div>
        </form>
    </div>
</div>
@endsection
