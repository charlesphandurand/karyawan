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

<!-- Mulai Kerja Field -->
<div class="form-group">
    {!! Form::label('mulai_kerja', 'Mulai Kerja:') !!}
    <p>{{ $karyawan->mulai_kerja }}</p>
</div>

<!-- Lama Kerja Field -->
<div class="form-group">
    {!! Form::label('lama_kerja', 'Lama Kerja:') !!}
    <p>{{ $karyawan->lama_kerja }}</p>
</div>

<!-- Masa Kerja Gaji Field -->
<div class="form-group">
    {!! Form::label('masa_kerja_gaji', 'Masa Kerja Gaji:') !!}
    <p>{{ $karyawan->masa_kerja_gaji }}</p>
</div>

<!-- Prestasi Gaji Field -->
<div class="form-group">
    {!! Form::label('prestasi_gaji', 'Prestasi Gaji:') !!}
    <p>{{ $karyawan->prestasi_gaji }}</p>
</div>

<!-- Uang Makan Field -->
<div class="form-group">
    {!! Form::label('uang_makan', 'Uang Makan:') !!}
    <p>{{ $karyawan->uang_makan }}</p>
</div>

<!-- Uang Transport Field -->
<div class="form-group">
    {!! Form::label('uang_transport', 'Uang Transport:') !!}
    <p>{{ $karyawan->uang_transport }}</p>
</div>

<!-- Pengembalian Field -->
<div class="form-group">
    {!! Form::label('pengembalian', 'Pengembalian:') !!}
    <p>{{ $karyawan->pengembalian }}</p>
</div>

<!-- Tunai Gaji Field -->
<div class="form-group">
    {!! Form::label('tunai_gaji', 'Tunai Gaji:') !!}
    <p>{{ $karyawan->tunai_gaji }}</p>
</div>

<!-- Sisa Gaji Field -->
<div class="form-group">
    {!! Form::label('sisa_gaji', 'Sisa Gaji:') !!}
    <p>{{ $karyawan->sisa_gaji }}</p>
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

