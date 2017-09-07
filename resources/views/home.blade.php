@extends('layouts.master')


@section('content')
    <div class="page-header">
        <h2>Satrap crm</h2>
        <p>this is going to be the satrap crm </p>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Apartments </h3>
        </div>
        <div class="panel-body">
            index ==> <a target="_blank" href="{{ route('apartment.index') }}">Apartment Index</a>
        </div>
        <div class="panel-body">
            create ==> <a target="_blank" href="{{ route('apartment.create') }}">Apartment Create</a>
        </div>
    </div>
@endsection

