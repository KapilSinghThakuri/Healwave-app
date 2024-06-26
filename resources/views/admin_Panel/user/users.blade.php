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
                        <a href="{{ route('users.trash') }}" class="btn mr-3 btn-danger btn-rounded float-right"><i
                                class="fa fa-trash-o" aria-hidden="true"></i> Trash</a>

                        @can('create user')
                            <a href="{{ route('user.create') }}" class="btn mr-3 btn-primary btn-rounded float-right"><i
                                    class="fa fa-plus"></i> Add User</a>
                        @endcan

                        <a href="{{ route('users.export') }}" class="btn mr-3 btn-success btn-rounded float-right"><i
                                class="fa fa-upload" aria-hidden="true"></i> Export</a>

                        <a href="{{ route('usersimport.view') }}" class="btn mr-3 btn-warning btn-rounded float-right"> <i
                                class="fa fa-download" aria-hidden="true"></i> Import</a>
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
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img width="28" height="28" src="#"
                                                    class="rounded-circle m-r-5" alt="">{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (!empty($user->getRoleNames()))
                                                    @foreach ($user->getRoleNames() as $name)
                                                        <span class="custom-badge status-green">{{ $name }}</span>
                                                    @endforeach
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @can('edit user')
                                                    <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                                        style="font-size: 20px;" title="Click for edit"><i
                                                            class="fa fa-pencil-square-o mr-2" aria-hidden="true"></i></a>
                                                @endcan

                                                @can('delete user')
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#delete_user_{{ $user->id }}"
                                                        style="font-size: 25px; color: red;" title="Click for delete"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                @endcan
                                                <!-- Delete Modal -->
                                                <div id="delete_user_{{ $user->id }}" class="modal fade delete-modal"
                                                    role="dialog">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center">
                                                                <img src="{{ asset('admin_Assets/img/sent.png') }}"
                                                                    alt="" width="50" height="46">
                                                                <h3>Are you sure want to delete this User?</h3>
                                                                <div class="m-t-20 d-flex justify-content-center">
                                                                    <button type="button" class="btn btn-white"
                                                                        data-dismiss="modal">Cancel</button>
                                                                    <form
                                                                        action="{{ route('user.destroy', ['user' => $user->id]) }}"
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
                        <div class="d-flex justify-content-center mt-3">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
