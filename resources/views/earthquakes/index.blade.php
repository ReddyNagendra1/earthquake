@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Earthquakes</h1>
    <a href="{{ route('earthquakes.create') }}" class="btn btn-primary mb-3">Add New Earthquake</a>

    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Magnitude</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($earthquakes as $earthquake)
                <tr>
                    <td>{{ $earthquake->date }}</td>
                    <td>{{ $earthquake->magnitude }}</td>
                    <td>{{ $earthquake->location }}</td>
                    <td>
                        <a href="{{ route('earthquakes.show', $earthquake) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('earthquakes.edit', $earthquake) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('earthquakes.destroy', $earthquake) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection