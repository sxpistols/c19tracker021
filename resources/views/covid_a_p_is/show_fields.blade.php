<!-- Country Field -->
<div class="col-sm-12">
    {!! Form::label('country', 'Nama Lengkap:') !!}
    <p>{{ $covidAPI->country }}</p>
</div>

<!-- Code Field -->
<div class="col-sm-12">
    {!! Form::label('code', 'Umur:') !!}
    <p>{{ $covidAPI->code }}</p>
</div>

<!-- Confirm Field -->
<div class="col-sm-12">
    {!! Form::label('confirm', 'Status:') !!}
    <p>{{ $covidAPI->confirm }}</p>
</div>

<!-- Recovered Field -->
<div class="col-sm-12">
    {!! Form::label('recovered', 'Asal:') !!}
    <p>{{ $covidAPI->recovered }}</p>
</div>

<!-- Critical Field -->
<div class="col-sm-12">
    {!! Form::label('critical', 'Tanggal Terkonfirmasi:') !!}
    <p>{{ $covidAPI->critical }}</p>
</div>

<!-- Death Field -->
<div class="col-sm-12">
    {!! Form::label('death', 'Kondisi Terakhir:') !!}
    <p>{{ $covidAPI->death }}</p>
</div>

<!-- Latitude Field -->
<div class="col-sm-12">
    {!! Form::label('latitude', 'Alamat:') !!}
    <p>{{ $covidAPI->latitude }}</p>
</div>

<!-- Longitude Field -->
<div class="col-sm-12">
    {!! Form::label('longitude', 'RT:') !!}
    <p>{{ $covidAPI->longitude }}</p>
</div>

