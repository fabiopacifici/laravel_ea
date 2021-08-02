@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        {{ __('You are logged in!') }}
        <h4> Ciao, {{Auth::user()->name}} </h4>
        @if(Auth::user()->api_token)
        <h6>API TOKEN</h6>
        @if(session('token'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('token')}}</strong><br>
            <small>Salva il token in un lugo sicuro.</small>
        </div>
        @endif
        <p>Hai giá generato un token, se non lo ricordi generalo di nuovo.</p>
        <!-- <div class="form-group">
            <input type="password" class="form-control" value="{{Auth::user()->api_token}}">
            <small>Generate you token again if you forgot it.</small>
        </div> -->
        @endif

        <form action="{{route('admin.api_token')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Generate API Token</button>
        </form>
    </div>
</div>

@endsection
