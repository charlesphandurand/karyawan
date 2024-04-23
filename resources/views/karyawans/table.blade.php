<div class="table-responsive-sm">
    <table class="table table-striped" id="karyawans-table">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
        <th>Nomor Rekening</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->nama_karyawan }}</td>
            <td>{{ $karyawan->nomor_rekening }}</td>
                <td>
                    {!! Form::open(['route' => ['karyawans.destroy', $karyawan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('karyawans.show', [$karyawan->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('karyawans.edit', [$karyawan->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>