<?php ?>
@extends('layouts.bootstrap')

@section('content')
    <div class="body-wrapper">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Компания</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $request)
                    <tr>
                        <th scope="row"><?php echo $request->id ?></th>
                        <td><?php echo $request->agent_name ?></td>
                        <td><?php echo $request->company_name ?></td>
                        <td><?php echo $request->email ?></td>
                        <td><?php echo $request->phone_number ?></td>
                        <td><button type="button" class="btn btn-danger"><a href="/request/<?php echo $request->id ?>">Удалить</a></button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
