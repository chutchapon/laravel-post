@extends("layouts.master")
@section('titel', 'My website')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>staus</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($todolists as $todolist)
                <tr>
                    <td>{{$todolist->id}}</td>
                    <td>{{$todolist->title}}</td>
                    <td>{{$todolist->status}}</td>
                    <td>
                        <a href="/edit/{{$todolist->id}}" class="btn btn-primary btn-xs"
                            ><i class="fa fa-edit"></i> edit</a
                        >
                        <a onclick="return confirm('แน่ใจหรือไม่ว่าจะลบข้อมูลนี้จริงๆ')" href="/delete/{{$todolist->id}}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> delete</a>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
    @endsection
