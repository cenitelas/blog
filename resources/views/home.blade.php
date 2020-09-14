@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div>
                        @if(auth()->check())
                            {{ auth()->user()->name }}
                        @endif
                    </div>
                    <div>
                        {{ $message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
