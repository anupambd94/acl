@extends('layouts.app')

@section('title', '| Users')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> User Administration <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="demo-dt-selection">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="min-desktop">Date/Time Added</th>
                    <th class="min-desktop">User Roles</th>
                    <th class="min-desktop">Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}

                    <td>
                   
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-icon icon-sm fa fa-edit" style="margin-right: 3px;"></a>

                    <button type="submit" class="btn btn-danger btn-icon icon-sm fa fa-trash"></button>
                    
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

</div>

@endsection
@section('script')
<script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>


@endsection