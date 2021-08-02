@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-between">
    <h1>Admin Games</h1>
    <div class="create"><a href="{{route('admin.games.create')}}" class="btn btn-primary btn-sm"> <i class="fas fa-gamepad fa-sm fa-fw"></i> Add Game</a></div>
</div>


@if(session('message'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>{{session('message')}}</strong>
</div>

@endif

<table class="table table-striped table-inverse">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>THUMB</th>
            <th>TITLE</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>

        @foreach($games as $game)
        <tr>
            <td scope="row">{{$game->id}}</td>
            <td><img width="100" src="{{asset('storage/' . $game->thumb)}}" alt="{{$game->name}} image"></td>
            <td>{{ $game->name }}</td>
            <td> VIEW | <a href="{{route('admin.games.edit', $game->id)}}">Edit</a> |

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#game-{{$game->id}}">
                    Delete
                </button>

                <!-- Modal -->
                <div class="modal fade" id="game-{{$game->id}}" tabindex="-1" role="dialog" aria-labelledby="{{Str::slug($game->name) .'-' . $game->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete {{$game->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are your sure you want to delete? This is a descturctive operation!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <form action="{{route('admin.games.destroy', $game->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{{$games->links()}}
@endsection
