@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i>Available Permissions

    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a></h1>
    <hr>
    <div class="table-responsive">
        <table id="demo-dt-basic" class="table table-striped table-bordered">

            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td> 
                    <td>
                    
                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-warning btn-icon icon-sm fa fa-edit" style="margin-right: 3px;"></a>

                    <button type="submit" class="btn btn-danger btn-icon icon-sm fa fa-trash"></button>
                    <!-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} -->
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>
    </div>


</div>

@endsection
@section('script')
<script src="{{ asset('plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>


@endsection