<!-- Nama Karyawan Field -->
<div class="form-group">
    {!! Form::label('nama_karyawan', 'Nama Karyawan:') !!}
    <p>{{ $karyawan->nama_karyawan }}</p>
</div>

<!-- Nomor Rekening Field -->
<div class="form-group">
    {!! Form::label('nomor_rekening', 'Nomor Rekening:') !!}
    <p>{{ $karyawan->nomor_rekening }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $karyawan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $karyawan->updated_at }}</p>
</div>

