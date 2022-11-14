@extends('layout.layout')

@section('title', 'Team')

@section('content')

<h2>Meet our team</h2>

<?php $count = 0 ?>
<table class="table table-hover table-bordered text-center">
    <thead>
        <tr>
            <th scope='col'>No.</th>
            <th scope='col'>Name</th>
            <th scope='col'>Position</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($team as $name => $pos)
        <tr>
            <td>{{$loop->index + 1}}</td>
            <td>{{$name}}</td>
            @if (is_null($pos))
            <td>Backup Member</td>
            @else
            <td>{{$pos}}</td>
            @endif
            <?php $count++ ?>
        </tr>
        @endforeach
    </tbody>
</table>

@if ($count > 5)
<div class='alert alert-success'>
    We have a complete team
</div>
@elseif ($count == 5)
<div class='alert alert-warning'>
    We have a complete team, but recruitment may be needed for backups
</div>
@else
<div class='alert alert-danger'>
    We don't have a complete team, recruitment is needed
</div>
<p>We are recruiting!</p>
@endif

@endsection
