<!-- Nama Karyawan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_karyawan', 'Nama Karyawan:') !!}
    {!! Form::text('nama_karyawan', null, ['class' => 'form-control']) !!}
</div>

<!-- Nomor Rekening Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_rekening', 'Nomor Rekening:') !!}
    {!! Form::text('nomor_rekening', null, ['class' => 'form-control']) !!}
</div>

<!-- Mulai Kerja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mulai_kerja', 'Mulai Kerja:') !!}
    {!! Form::text('mulai_kerja', null, ['class' => 'form-control','id'=>'mulai_kerja']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#mulai_kerja').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Lama Kerja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lama_kerja', 'Lama Kerja:') !!}
    {!! Form::number('lama_kerja', null, ['class' => 'form-control']) !!}
</div>

<!-- Masa Kerja Gaji Field -->
<div class="form-group col-sm-6">
    {!! Form::label('masa_kerja_gaji', 'Masa Kerja Gaji:') !!}
    {!! Form::number('masa_kerja_gaji', null, ['class' => 'form-control']) !!}
</div>

<!-- Prestasi Gaji Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prestasi_gaji', 'Prestasi Gaji:') !!}
    {!! Form::number('prestasi_gaji', null, ['class' => 'form-control']) !!}
</div>

<!-- Uang Makan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uang_makan', 'Uang Makan:') !!}
    {!! Form::number('uang_makan', null, ['class' => 'form-control']) !!}
</div>

<!-- Uang Transport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uang_transport', 'Uang Transport:') !!}
    {!! Form::number('uang_transport', null, ['class' => 'form-control']) !!}
</div>

<!-- Pengembalian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pengembalian', 'Pengembalian:') !!}
    {!! Form::number('pengembalian', null, ['class' => 'form-control']) !!}
</div>

<!-- Tunai Gaji Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tunai_gaji', 'Tunai Gaji:') !!}
    {!! Form::number('tunai_gaji', null, ['class' => 'form-control']) !!}
</div>

<!-- Sisa Gaji Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sisa_gaji', 'Sisa Gaji:') !!}
    {!! Form::number('sisa_gaji', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('karyawans.index') }}" class="btn btn-secondary">Cancel</a>
</div>
