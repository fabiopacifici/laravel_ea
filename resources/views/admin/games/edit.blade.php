@extends('layouts.admin')


@section('content')


<h1>Edit Game</h1>
@include('partials.errors')
<form action="{{route('admin.games.update', $game->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Star wars" aria-describedby="nameHelper" maxlength="100" minlength="3" required value="{{ $game->name }}">
        <small id="nameHelper" class="text-muted">Type the game name</small>
    </div>
    @error('name')
    <div class="alert alert-danger alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror

    <div class="form-group">
        <img width="100" src="{{asset('storage/' . $game->thumb)}}" alt="">
        <label for="thumb">Change Thumbnail</label>
        <input type="file" class="form-control-file" name="thumb" id="thumb" placeholder="" aria-describedby="Insert an image">
        <small id="Insert an image" class="form-text text-muted">Images only jpg, png, svg max: 50k</small>
    </div>
    @error('thumb')
    <div class="alert alert-danger alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror

    <button type="submit" class="btn btn-success"> <i class="fas fa-save fa-sm fa-fw"></i> Update</button>

</form>

@endsection
