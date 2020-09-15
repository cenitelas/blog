@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header h3">{{$category->name}}</div>
        <div class="card-body blockquote">
            <label>Создатель:</label>
            <p>{{$creator->name}}</p>
            <label class="blockquote-footer">Дата создания: {{$category['created_at']}}</label>
        </div>
    </div>
@endsection
