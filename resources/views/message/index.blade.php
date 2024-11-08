@extends('layouts.app')

@section('content')
    <h1>мессенджер</h1>
    @foreach($messages as $message)
        <div>
            <h2>{{ $message->title }}</h2>
            <p>{{ $message->description }}</p>
            <p>Дата размещения: {{ $message->created_at }}</p>
        </div>
    @endforeach
@endsection