@extends('layouts.admin')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mt-5">
                            <h4 class="card-title float-left mt-2">All List Users</h4>
                            <a href="{{ route('users/add/new') }}" class="btn btn-primary float-right veiwbutton" id="userDelete">Add User</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body booking_card">
                            <div class="table-responsive">
                                <table class="table table-stripped table table-hover table-center mb-0" id="UsersList">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Last Login</th>
                                            <th>Phone Number</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Modify</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @section('script')
    <script type="text/javascript">
        $(document).ready(function() {
           $('#UsersList').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                searching: true,
                ajax: {
                    url:"{{ route('get-users-data') }}",
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'last_login',
                        name: 'last_login'
                    },
                    {
                        data: 'phone_number',
                        name: 'phone_number'
                    },
                    {
                        data: 'role_name',
                        name: 'role_name'
                    },
                   
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ]
            });
        });
    </script>

    @endsection
@endsection