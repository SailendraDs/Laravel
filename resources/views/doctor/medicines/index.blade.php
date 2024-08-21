@extends('layouts.dash')

@section('content')
<div class="container-fluid py-4">
<div class="row">
  
<div class="card">
<h3>Medicine List</h3>

    <div class="col-sm">
        <a href="{{ route('doctor.medicines.create') }}" class="btn btn-primary">Add Medicine</a>
    </div>

  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Medicine</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Added Date</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Edit</th>
          <th class="text-secondary opacity-7"></th>

        </tr>
      </thead>
      <tbody>
      @foreach($medicines as $medicine)
        <tr>
         
          <td>
            <p class="text-xs font-weight-bold mb-0">{{ $medicine->name }}</p>
            <p class="text-xs font-weight-bold mb-0">{{ $medicine->dosage }}</p>
          </td>
          
          <td class="align-middle text-center">
            <span class="text-primary text-xs font-weight-bold">{{ $medicine->created_at->format('Y-m-d') }}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-primary text-xs font-weight-bold">{{ $medicine->description }}</span>
          </td>
          
          <td class="align-middle text-center">
            <a href="{{ route('doctor.medicines.edit', $medicine->id) }}" class="text-secondary font-weight-bold text-xs">
              Edit
            </a>
          </td>
          <td class="align-middle text-center text-sm">
            <span class="badge badge-sm badge-danger"><form action="{{ route('doctor.medicines.destroy', $medicine->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>

@endsection
