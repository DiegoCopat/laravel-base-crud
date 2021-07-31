@extends('layout.main')

@section('main_content')
    <div class="wrapper">
        <h1>COMIC - lista completa dei comic</h1>
        <table >
            <thead class="color-h">
                <th>Id</th>
                <th>Title</th>
                <th>Series</th>
                <th>Description</th>
                <th colspan=3>Actions</th>
            </thead>
            <tbody>
                @foreach ($comics as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->series }}</td>
                        <td>{{ $item->description }}</td>
                        <td><button><a href="{{ route("comics.show", $item->id) }}">SHOW</a></button></td>
                        <td><button>EDIT</button></td>
                        <td><button>DELETE</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $comics->links() }}
    </div>
@endsection