@extends('add-post')
@section('table')
    @if (Session::has('success_del'))
        <span class="alert alert-success">{{ Session::get('success_del') }}</span>
    @endif

    @if (Session::has('error'))
        <span class="alert alert-danger">{{ Session::get('error') }}</span>
    @endif
    <table class="table table-bordered mt-4">
    <caption>List of Posts</caption>
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $sr=0; ?>
            @foreach ($post as $p )
                <?php $sr+=1;?>
                <tr>
                    <td><?=$sr?></td>
                    <td>{{$p->title}}</td>
                    <td>{{$p->description}}</td>
                    <td>
                        <a href="/edit-post/{{$p->id}}" class="btn btn-primary" role="button">Edit</a> |
                        <a href="/delete-post/{{$p->id}}" class="btn btn-danger" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop