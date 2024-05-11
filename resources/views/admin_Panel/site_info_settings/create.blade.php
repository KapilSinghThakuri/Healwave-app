@extends('admin_Panel.layout.main')
@section('Main-container')

@section('title_link', route('websiteinfo.index'))
@section('title', 'Page')
@section('action', 'Create Info')
@section('button')
    <i class="fa fa-chevron-left" aria-hidden="true"></i> Back
@endsection
@section("button_link", route('websiteinfo.index'))
    <div class="page-wrapper">
        <div class="content">
            @include('admin_Panel.layout.breadcrumbs')
            <div class="row">
                <div class="col-lg-12">
                    <style type="text/css">
                        .form-group label {
                            color: black;
                        }
                    </style>
                    {!! Form::open(['route' => 'websiteinfo.store', 'method' => 'POST']) !!}

                        @csrf

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {{ Form::label('info_type', 'Choose Info Type') }} <span class="text-danger">*</span>
                                    {!! Form::select('info_type', config('website_info_type.info_types'), null, ['class'=>'form-select form-control','placeholder' => 'Select Info Type']) !!}
                                    @error('info_type')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {{ Form::label('label', 'Info Label') }} <span class="text-danger">*</span>
                                    {{ Form::text('label', null, ['class' => 'form-control', 'placeholder' => 'Enter Info Label']) }}
                                    @error('label')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {{ Form::label('value', 'Info Value or URL') }} <span class="text-danger">*</span>
                                    {{ Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Enter Info Value or URL']) }}
                                    @error('value')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {{ Form::label('icon', 'Info Icon') }}
                                    {{ Form::text('icon', null, ['class' => 'form-control', 'placeholder' => 'Enter Info Icon']) }}
                                    @error('icon')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {{ Form::label('display_order', 'Display Order') }} <span class="text-danger">*</span>
                                    {{ Form::text('display_order', null, ['class' => 'form-control', 'placeholder' => 'Display Order']) }}
                                    @error('display_order')<span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            {{ Form::submit('Create Info',['class' => 'btn btn-primary btn-lg']) }}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection