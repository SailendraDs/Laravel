@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ ucfirst($typeIt seems my response was cut off. Let's continue with the Reports and Analytics feature.

### Continue with Reports and Analytics

#### Blade Template for Viewing Reports

**`resources/views/admin/reports/show.blade.php`:**
```blade
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ ucfirst($type) }} Report</h1>
    @if($data->isEmpty())
        <p>No data available for this report.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <!-- Add table headers based on the report type -->
                    @foreach(array_keys($data->first()->toArray()) as $header)
                        <th>{{ ucfirst($header) }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        @foreach($item->toArray() as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
