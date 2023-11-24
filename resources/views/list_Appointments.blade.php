@extends('layouts\app')

@section('content')
<section class="container">
        <div class="row">
            @if($appointments)
                @foreach($appointments as $appointment)
                    <div class="col-md-4">
                        <div class="card appointment-card">
                            <div class="card-body">
                                <h5 class="card-title">Appointment #{{ $appointment->id }}</h5>
                                <p class="card-text">Name: {{ $appointment->name }}</p>
                                <p class="card-text">Email: {{ $appointment->email }}</p>
                                <p class="card-text">Phone: {{ $appointment->phone }}</p>
                                <p class="card-text">Car Model: {{ $appointment->model }}</p>
                                <p class="card-text">Date: {{ $appointment->date }}</p>
                                <p class="card-text">Time: {{ $appointment->time }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $appointments->links() }}
            @else
                <div class="col">
                    No Appointments yet.
                </div>
            @endif
        </div>
    </section>
@endsection