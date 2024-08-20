@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Medicine List</h1>
    <a href="{{ route('doctor.medicines.create') }}" class="btn btn-primary">Add Medicine</a>
    <ul>
        @foreach($medicines as $medicine)
            <li>
                {{ $medicine->name }} ({{ $medicine->dosage }})
                <a href="{{ route('doctor.medicines.edit', $medicine->id) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('doctor.medicines.destroy', $medicine->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
