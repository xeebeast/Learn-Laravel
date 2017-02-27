<div class="box-header">
    <h3 class="box-title">Clients Data Table</h3>                                    
</div><!-- /.box-header -->
<div data-datatable="users" class="box-body table-responsive">
<table class="table users-datatable" id="table">
    <thead>
        <tr>
            <th class="text-left">firstname</th>
            <th class="text-left">lastname</th>
            <th class="text-left">Email</th>
            <th class="text-left">Action</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td class="paginate-columns">{{ $user->firstname }}</td>
                <td class="paginate-columns">{{ $user->lastname }}</td>
                <td class="paginate-columns">{{ $user->email }}</td>
                <td class="paginate-columns">
                    
                    <a href="{{{ url('admin/user') }}}/{{ $user->id }}" title="Profile" target="_blank">
                        <i class="fa fa-fw fa-user user-icon"></i>
                    </a>
                    &nbsp;
                    @if ( $user->is_active == 1 )
                        <a data-userid="{{ $user->id }}" class="user-status" title="Active/Deactive">
                            <i class="fa fa-fw fa-unlock"></i>
                        </a>
                    @else
                        <a data-userid="{{ $user->id }}" class="user-status" title="Active/Deactive">
                            <i class="fa fa-fw fa-lock"></i>
                        </a>
                    @endif    

                </td>
            </tr>
         @endforeach
    </thead>
</table>
{{ $users->links() }}
</div><!-- /.box-body -->