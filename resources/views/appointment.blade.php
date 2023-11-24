@extends('layouts/app')
@section('content')
    <section class="container">
        <h2 class="mb-4">Schedule your car wash appointment</h2>

        <form action="{{ route('save-appointment') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="carModel" class="form-label">Car Model:</label>
                <input type="text" class="form-control" id="carModel" name="carModel" required>
            </div>

            <div class="mb-3">
                <label for="appointmentDate" class="form-label">Preferred Date:</label>
                <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
            </div>

            <div class="mb-3">
                <label for="appointmentTime" class="form-label">Preferred Time:</label>
                <input type="time" class="form-control" id="appointmentTime" name="appointmentTime" required>
            </div>

            <button type="submit" class="btn btn-dark">Schedule Appointment</button>
        </form>
    </section>

@endsection