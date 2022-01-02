<div class="table-responsive">
    <table class="table" id="covidAPIs-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Umur</th>
        <th>Status Menikah</th>
        <th>Asal</th>
        <th>Tanggal Terkonfirmasi</th>
        <th>Kondisi Terakhir</th>
        <th>Alamat</th>
        <th>RT</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($covidAPIs as $covidAPI)
            <tr>
                <td>{{ $covidAPI->country }}</td>
            <td>{{ $covidAPI->code }}</td>
            <td>{{ $covidAPI->confirm }}</td>
            <td>{{ $covidAPI->recovered }}</td>
            <td>{{ $covidAPI->critical }}</td>
            <td>{{ $covidAPI->death }}</td>
            <td>{{ $covidAPI->latitude }}</td>
            <td>{{ $covidAPI->longitude }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['covidAPIs.destroy', $covidAPI->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('covidAPIs.show', [$covidAPI->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('covidAPIs.edit', [$covidAPI->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
