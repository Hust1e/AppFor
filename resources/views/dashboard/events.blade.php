<?php ?>
@extends('layouts.bootstrap')

@section('content')
    <div class="body-wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Название мероприятия</th>
                <th scope="col">Тип мероприятия</th>
                <th scope="col">Дата</th>
                <th scope="col">Стоимость</th>
                <th scope="col">Ссылка</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <div class="events-table">
                    <tr>
                        <th scope="row"><?php echo $event->id ?></th>
                        <td><?php echo $event->event_name ?></td>
                        <td><?php echo $event->event_type ?></td>
                        <td><?php echo $event->event_date ?></td>
                        <td><?php echo $event->event_price ?></td>
                        <td><a href="<?php echo $event->event_http ?>">link</a></td>
                        <td>
                            <div class="event-buttons">
                                <form action="{{ route('event.edit', $event->id) }}" method="get">
                                    <input type="submit" class="btn btn-primary" value="Изменить">
                                </form>
                                <form action="{{ route('event.delete', $event->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                </form>
                            </div>
                        </td>
                    </tr>
                </div>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
