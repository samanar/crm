@extends('layouts.master')

@include('apartment.partials.delete_apartments_js')

@section('content')

    <div class="page-header">
        <h2><i class="fa fa-info-circle" aria-hidden="true"></i> اطلاعات مجتمع </h2>
        <p>در این قسمت میتواند تمام اطلاعات مجتمع مورد نظر را مشاهده نمایید</p>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 well margin_top_20">
                <div class="row">
                    <div class="col-sm-3">کد مجتمع :</div>
                    <div class="col-sm-9">{{ $apartment->code }}</div>
                </div>
                <div class="row margin_top_5">
                    <div class="col-sm-3">نام مدیر :</div>
                    <div class="col-sm-9">{{ $apartment->manager_name }}</div>
                </div>
                <div class="row margin_top_5">
                    <div class="col-sm-3">شماره تماس مدیر :</div>
                    <div class="col-sm-9">{{ $apartment->manager_phone }}</div>
                </div>
                <div class="row margin_top_5">
                    <div class="col-sm-3">تعداد واحد :</div>
                    <div class="col-sm-9">{{ $apartment->unit }}</div>
                </div>
                <div class="row margin_top_5">
                    <div class="col-sm-3">عمر بنا :</div>
                    <div class="col-sm-9">{{ $apartment->age }}</div>
                </div>
                <div class="row margin_top_5">
                    <div class="col-sm-3">وضعیت :</div>
                    <div class="col-sm-9">{{ $apartment->status }}</div>
                </div>
                <div class="row margin_top_5">
                    <div class="col-sm-3">نحوه آشنایی:</div>
                    <div class="col-sm-9">{{ $apartment->introduction_method }}</div>
                </div>
                <div class="row margin_top_5">
                    <div class="col-sm-3">آدرس مجتمع :</div>
                    <div class="col-sm-9">{{ $apartment->address }}</div>
                </div>
                <div class="row margin_top_5">
                    <div class="col-sm-3">توضیحات :</div>
                    <div class="col-sm-9">{{ $apartment->description }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @include('apartment.partials.apartment_panel')
            </div>

            <div class="col-sm-6">
                @include('apartment.partials.basic_information_panel')
            </div>
        </div>

@endsection