@extends('admin_Panel.layout.main')
@section('Main-container')
    <div class="page-wrapper">
        <div class="content">
            <div class="row align-items-center justify-content-between mb-4 breadcrumbs-div">
                <div class="col-sm-6">
                    {{ Breadcrumbs::render() }}
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('schedule.index') }}" class="btn btn btn-danger btn-rounded float-right"><i
                            class="fa fa-ban"></i> Cancel</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('schedule.update', ['schedule' => $schedule->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Doctor</label>
                                    <select name="doctor_id" class="form-control">
                                        <option disabled selected>Select Doctor<span class="text-danger">*</span></option>
                                        @foreach ($doctors as $doctor)
                                            <option
                                                value="{{ $doctor->id }}"{{ $schedule->doctor_id == $doctor->id ? 'selected' : '' }}>
                                                {{ $doctor->first_name }}{{ $doctor->middle_name }}{{ $doctor->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('doctor_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total Quota</label>
                                    <input name="total_quota" class="form-control" placeholder="Enter Total Quota"
                                        id="total_quota" value="{{ $schedule->total_quota }}">
                                    @error('total_quota')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {{ Form::label('days', 'Select Days', ['class' => 'control-label']) }}<span
                                        class="text-danger">*</span>
                                    {{ Form::select('days', config('dropdown.doctorScheduleDays'), $schedule->days, ['class' => 'form-control mutiple-value-select', 'multiple' => 'multiple']) }}
                                    @error('days')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Start Time<span class="text-danger">*</span></label>
                                    <input name="from" value="{{ $schedule->from }}" class="form-control"
                                        id="start_time" placeholder="Select Start Time">
                                    @error('from')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>End Time<span class="text-danger">*</span></label>
                                    <input name="to" value="{{ $schedule->to }}" class="form-control" id="end_time"
                                        placeholder="Select End Time">
                                    @error('to')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="display-block">Schedule Status<span class="text-danger">*</span></label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="doctor_active"
                                            value="available" {{ $schedule->status == 'available' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="doctor_active">
                                            Available
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="doctor_inactive"
                                            value="unavailable" {{ $schedule->status == 'unavailable' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="doctor_inactive">
                                            Unavailable
                                        </label>
                                    </div>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button type="submit" class="btn btn-primary schedule_submit">Update Schedule</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            flatpickr("#schedule_date", {
                dateFormat: "Y-m-d",
            });
            flatpickr("#start_time", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });
            flatpickr("#end_time", {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });
        });
    </script>
@endsection
