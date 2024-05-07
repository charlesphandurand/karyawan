<!-- Jabatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    {!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Standar Gaji Field -->
<div class="form-group col-sm-6">
    {!! Form::label('standar_gaji', 'Standar Gaji:') !!}
    {!! Form::number('standar_gaji', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('gajis.index') }}" class="btn btn-secondary">Cancel</a>
</div>
