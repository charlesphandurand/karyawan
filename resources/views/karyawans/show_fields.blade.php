<!-- Nama Karyawan Field -->
<div class="form-group">
    <b>{!! Form::label('nama_karyawan', 'Nama Karyawan:') !!}</b>
    <span>{{ $karyawan->nama_karyawan }}</span>
</div>

<!-- Nama Jabatan Field -->
<div class="form-group">
    <b>{!! Form::label('nama_jabatan', 'Nama Jabatan:') !!}</b>
    <span>{{ $karyawan->nama_jabatan }}</span>
</div>

<!-- Nomor Rekening Field -->
<div class="form-group">
    <b>{!! Form::label('nomor_rekening', 'Nomor Rekening:') !!}</b>
    <span> {{ $karyawan->nomor_rekening }}</span>
</div>

<!-- Mulai Kerja Field -->
<div class="form-group">
    <b>{!! Form::label('mulai_kerja', 'Mulai Kerja:') !!}</b>
    <span>{{ $karyawan->mulai_kerja->format('Y-m-d') }}</span>
</div>

<!-- Lama Kerja Field -->
<div class="form-group">
    <b>{!! Form::label('lama_kerja', 'Lama Kerja:') !!}</b>
    <span>{{ $karyawan->lama_kerja }} tahun</span>
</div>

<!-- Masa Kerja Gaji Field -->
<div class="form-group">
    <b>{!! Form::label('masa_kerja_gaji', 'Masa Kerja Gaji:') !!}</b>
    <span>{{ number_format($karyawan->masa_kerja_gaji, 0, ',', '.') }}</span>
</div>

<!-- Prestasi Gaji Field -->
<div class="form-group">
    <b>{!! Form::label('prestasi_gaji', 'Prestasi Gaji:') !!}</b>
    <span>{{ number_format($karyawan->prestasi_gaji, 0, ',', '.') }}</span>
</div>

<!-- Uang Makan Field -->
<div class="form-group">
    <b>{!! Form::label('uang_makan', 'Uang Makan:') !!}</b>
    <span>{{ number_format($karyawan->uang_makan, 0, ',', '.') }}</span>
</div>

<!-- Uang Transport Field -->
<div class="form-group">
    <b>{!! Form::label('uang_transport', 'Uang Transport:') !!}</b>
    <span>{{ number_format($karyawan->uang_transport, 0, ',', '.') }}</span>
</div>

<!-- Pengembalian Field -->
<div class="form-group">
    <b>{!! Form::label('pengembalian', 'Pengembalian:') !!}</b>
    <span>{{ number_format($karyawan->pengembalian, 0, ',', '.') }}</span>
</div>

<!-- Tunai Gaji Field -->
<div class="form-group">
    <b>{!! Form::label('tunai_gaji', 'Tunai Gaji:') !!}</b>
    <span>{{ number_format($karyawan->tunai_gaji, 0, ',', '.') }}</span>
</div>

<!-- Sisa Gaji Field -->
<div class="form-group">
    <b>{!! Form::label('sisa_gaji', 'Sisa Gaji:') !!}</b>
    <span>{{ number_format($karyawan->sisa_gaji, 0, ',', '.') }}</span>
</div>

<!-- Created At Field -->
<div class="form-group">
    <b>{!! Form::label('created_at', 'Created At:') !!}</b>
    <span>{{ $karyawan->created_at }}</span>
</div>

<!-- Updated At Field -->
<div class="form-group">
    <b>{!! Form::label('updated_at', 'Updated At:') !!}</b>
    <span>{{ $karyawan->updated_at }}</span>
</div>

