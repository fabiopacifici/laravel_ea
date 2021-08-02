@extends('layouts.admin')


@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('admin.games.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Star wars" aria-describedby="nameHelper" maxlength="100" minlength="3" required value="{{old('name')}}">
        <small id="nameHelper" class="text-muted">Type the game name</small>
    </div>
    @error('name')
    <div class="alert alert-danger alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror

    <div class="form-group">
        <label for="thumb">Thumbnail</label>
        <input type="file" class="form-control-file" name="thumb" id="thumb" placeholder="" aria-describedby="Insert an image">
        <small id="Insert an image" class="form-text text-muted">Images only jpg, png, svg max: 50k</small>
    </div>
    @error('thumb')
    <div class="alert alert-danger alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror

    <button type="submit" class="btn btn-success"> <i class="fas fa-save fa-sm fa-fw"></i> Save</button>

</form>

@endsection
