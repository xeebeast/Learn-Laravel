<div class="box-header">
    <h3 class="box-title">Clients Data Table</h3>                                    
</div><!-- /.box-header -->
<div data-datatable="{{$table}}" class="box-body table-responsive">
<table class="table {{$table}}-datatable" id="table">
    <thead>
        <tr>
            <th class="text-left">name</th>
            <th class="text-left">ID</th>
        </tr>
        @foreach($table as $data)
            <tr>
                <td class="paginate-columns">{{ $data->name }}</td>
                <td class="paginate-columns">{{ $data->id }}</td>
                </td>
            </tr>
         @endforeach
    </thead>
</table>
{{ $table->links() }}
</div><!-- /.box-body -->