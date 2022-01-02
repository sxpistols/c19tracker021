<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Nama Warga:') !!}
    {!! Form::text('country', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code', 'Umur:') !!}
    {!! Form::text('code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Confirm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('confirm', 'Status:') !!}
    {!! Form::text('confirm', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Recovered Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recovered', 'Asal:') !!}
    {!! Form::text('recovered', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Critical Field -->
<div class="form-group col-sm-6">
    {!! Form::label('critical', 'Terkonfirmasi pada:') !!}
    {!! Form::text('critical', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Death Field -->
<div class="form-group col-sm-6">
    {!! Form::label('death', 'Kondisi Terakhir:') !!}
    {!! Form::text('death', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitude', 'Alamat:') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('longitude', 'RT:') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>