<!-- Jabatan Field -->
<div class="form-group">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    <p>{{ $gaji->jabatan }}</p>
</div>

<!-- Standar Gaji Field -->
<div class="form-group">
    {!! Form::label('standar_gaji', 'Standar Gaji:') !!}
    <p>{{ $gaji->standar_gaji }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $gaji->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $gaji->updated_at }}</p>
</div>

