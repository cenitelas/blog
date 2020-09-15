@extends('layouts.app')
@section('content')
    <h1 class="h3 mb-3">
        Новая категория
    </h1>

    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('categories.store') }}" method="post" class="card card-body">
                @csrf
                <div class="form-group">
                    <label for="name">Название</label>
                    <input value="{{ old('name') }}" id="name" name="name" type="text" class="form-control  @error('name') is-invalid @enderror ">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
@endsection
