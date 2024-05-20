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
                        <div class="table-responsive">
                            <table class="table table-border text-center table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($softDeletedUsers as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img width="28" height="28" src="#"
                                                    class="rounded-circle m-r-5" alt="">{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (empty($user->getRoleNames()))
                                                    <span> - </span>
                                                @else
                                                    @foreach ($user->getRoleNames() as $name)
                                                        <span class="custom-badge status-green">{{ $name }}</span>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('user.restore', ['user' => $user->id]) }}"
                                                    style="font-size: 20px;" title="Click for restore"><i class="fa fa-undo"
                                                        aria-hidden="true"></i></a>

                                                @can('delete user')
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#delete_user_{{ $user->id }}"
                                                        style="font-size: 25px; color: red;"
                                                        title="Click for permanent delete"><i class="fa fa-trash-o ml-2"
                                                            aria-hidden="true"></i></a>
                                                @endcan
                                                <!-- Delete Modal -->
                                                <div id="delete_user_{{ $user->id }}" class="modal fade delete-modal"
                                                    role="dialog">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center">
                                                                <img src="{{ asset('admin_Assets/img/sent.png') }}"
                                                                    alt="" width="50" height="46">
                                                                <h3>Are you sure want to delete this user permanently?</h3>
                                                                <div class="m-t-20 d-flex justify-content-center">
                                                                    <button type="button" class="btn btn-white"
                                                                        data-dismiss="modal">Cancel</button>
                                                                    <form
                                                                        action="{{ route('user.permanentDelete', ['user' => $user->id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit"
                                                                            class="btn btn-danger ml-2">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
