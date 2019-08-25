@extends('layouts.app')

@section('title', '| Roles')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i> Roles

    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{  $role->permissions()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-warning btn-icon icon-sm fa fa-edit" style="margin-right: 3px;"></a>
                    <button type="submit" class="btn btn-danger btn-icon icon-sm fa fa-trash"></button>
                    
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a>
    </div>

    

</div>

@endsection
@section('script')
<script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>


@endsection