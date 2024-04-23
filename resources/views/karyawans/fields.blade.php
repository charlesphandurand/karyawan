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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('karyawans.index') }}" class="btn btn-secondary">Cancel</a>
</div>
