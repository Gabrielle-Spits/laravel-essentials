@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>
                Room Number
            </th>
            <Th>
                Type
            </Th>
        </tr>
    </thead>
    <tbody>
        @foreach($rooms as $room)
        <tr>
            <td>{{$room->number}}</td>
            <td>{{$room->roomType->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection