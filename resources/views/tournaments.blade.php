@extends('layout.layout')

@section('title', 'Tournaments')

@section('content')
<h2>Tournaments</h2>

<table class="table table-hover table-bordered text-center">
    <thead>
        <tr>
            <th scope='col'>No.</th>
            <th scope='col'>Tournament Name</th>
            <th scope='col'>Date</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($tourney_data as $name => $date)
        <tr>
            <td>{{$loop->index + 1}}</td>
            <td>{{$name}}</td>
            <td>{{$date}}</td>
        </tr>
        @empty
        <tr>
            <td colspan='3' class='text-center'>No data found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
