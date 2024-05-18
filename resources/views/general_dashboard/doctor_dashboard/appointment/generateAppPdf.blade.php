@include('general_dashboard.doctor_dashboard.layout.header')

<div class="row">
    <div class="col-md-12">
        <div class="card appointment-card">

            <div class="card-header m-0">
                <div class="page-title d-flex justify-content-between">
                    <h3>{{ $title }}</h3>
                    <p>Date: {{ $date }}</p>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="offset-md-2 col-md-10">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p class="card-text"><strong>Patient Name:</strong>
                                    {{ $appointments->patient->fullname }}</p>
                                <p class="card-text"><strong>Gender:</strong> {{ $appointments->patient->gender }}</p>
                                <p class="card-text"><strong>Address:</strong>
                                    {{ $appointments->patient->permanent_address }}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text"><strong>Phone:</strong> {{ $appointments->patient->phone }}</p>
                                <p class="card-text"><strong>Email:</strong> {{ $appointments->patient->email }}</p>
                            </div>
                        </div>
                        <p class="card-text"><strong>Reason for Appointment:</strong> {{ $appointments->reason }}</p>
                        <p class="card-text"><strong>Appointment Date:</strong> January 20, 2024</p>
                        <p class="card-text"><strong>Doctor:</strong> Dr. Smith</p>
                        <p class="card-text"><strong>Department:</strong> Cardiology</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
