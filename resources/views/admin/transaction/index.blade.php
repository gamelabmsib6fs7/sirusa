@extends('layouts.sidebar')

@section('container')
<div class="container">
    <h2>Transaction List  </h2>
    <h5>Total Revenue : {{ number_format($totalExpense, 0, ',', '.') }}</h5>
    <table id="datatable1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Drug</th>
                <th>Price</th>
                <th>Total Revenue</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($telemedicineDetails as $telemedicine)
                {{-- Check if drug is not empty --}}
                @if ($telemedicine->drug)
                    <tr>
                        <td>{{ $telemedicine->id }}</td>
                        <td>{{ number_format($telemedicine->amount, 0, ',', '.') }}</td>
                        <td>{{ $telemedicine->drug->drug_name }}</td>
                        <td>{{ number_format($telemedicine->drug->price, 0, ',', '.') }}</td>
                        <td>{{ number_format($telemedicine->amount * $telemedicine->drug->price, 0, ',', '.') }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
