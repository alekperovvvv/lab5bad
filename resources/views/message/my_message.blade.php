@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ваши сообщения</h1>
    @foreach($messages as $message)
        <div>
            <h2>{{ $message->title }}</h2>
            <p>{{ $message->description }}</p>
            <a href="{{ route('message.index') }}">Вернутся назад</a>
            </form>
        </div>
    @endforeach
</div>
@endsection