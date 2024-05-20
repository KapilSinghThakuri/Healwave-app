@extends('admin_Panel.layout.main')
@section('Main-container')
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row align-items-center justify-content-between mb-4 breadcrumbs-div">
                    <div class="col-sm-6">
                        {{ Breadcrumbs::render() }}
                    </div>

                    <div class="col-sm-6 text-right">
                        <a class="btn btn-danger btn-rounded" href="{{ route('user.index') }}"><i class="fa fa-chevron-left"
                                aria-hidden="true"></i> Back</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('users.import') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="file" name="excelfile" class="form-control">
                                    @error('excelfile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-primary"><i class="fa fa-download"
                                            aria-hidden="true"></i> Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
