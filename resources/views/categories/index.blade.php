@extends('layouts.app')
@section('content')
    <div class="d-flex align-items-center mb-3">
        <h1 class="h3">
            Категории {{$user->name}}
        </h1>
        @if(auth()->id()==$user->id)
            <a href="{{ route('categories.create') }}" class="btn btn-success ml-auto">
                Добавить категорию
            </a>
        @endif
    </div>
        @if($categories->isNotEmpty())
            @foreach($categories as $category)
                <div class="col-md-3">
                    <a href="{{ route('categories.show', $category) }}" class="card card-body">
                        {{$category->name}}
                    </a>
                </div>
            @endforeach
        @else
            <div class="alert alert-secondary">
                Категории нет
            </div>
        @endif
@endsection
