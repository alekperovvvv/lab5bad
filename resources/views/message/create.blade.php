@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Добавление message</h1>
    <form action="{{ route('message.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Тема вашего сообщения</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Ваше сообщение</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <button type="submit">Сохранить</button>
        <a href="{{ route('message.index') }}">Вернутся назад</a>
    </form>
</div>
@endsection
