@extends('welcome')
@section('title')
    To Do
@endsection
@section('content')
    <form class="" action="/create/todo" method="post">
        {{ csrf_field() }}
        <input type="text" name="todo" placeholder="Enter New Todo">
        <input type="submit" name="submit" value="Add" class="btn btn-primary">
    </form>
    <hr><br><br>
    <table border='2'>
        <tr>
            <th>To Do</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $element)
            @if ($element->complete==false)
                <tr>
                    <td style="padding:5px">{{ $element->todo }}</td>
                    <td style="padding:5px"> <a href="/complete/todo/{{$element->id}}" >Complete </a> &nbsp <a href="/delete/todo/{{$element->id}}" >Delete </a></td>
                </tr>
            @endif
        @endforeach
        @foreach ($data as $element)
            @if ($element->complete==true)
                <tr>
                    <td style="padding:5px"><strike>{{ $element->todo }}</strike></td>
                    <td style="padding:5px"> <a href="/uncomplete/todo/{{$element->id}}" >Uncomplete</td>
                </tr>
            @endif
        @endforeach
    </table>
@endsection
