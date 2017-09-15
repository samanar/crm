@extends('layouts.master')

@include('technical_information.partials.delete_technical_informations')

@section('content')

    <div class="page-header">
        <h2><i class="fa fa-info-circle" aria-hidden="true"></i> اطلاعات فنی مجتمع با
            کد {{ $technical_information->apartment->code }} </h2>
        <p>در این قسمت میتواند تمام اطلاعات فنی مجتمع مورد نظر را مشاهده نمایید</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <a href="{{ route('technical_information.edit' , $technical_information->id) }}"
                       class="btn btn-success btn-block btn-sm">ویرایش </a>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-danger btn-block btn-sm"
                            id="delete_technical_information"
                            data-id="{{ $technical_information->id }}"
                            data-code="{{ $technical_information->apartment->code }}"> حذف
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="container margin_top_20 basic_information_show col-sm-10 col-sm-offset-1 well">


        <div class="row margin_top_30">
            <div class="col-sm-6">
                <div class="col-sm-6">وضعیت آسانسور :</div>
                <div class="col-sm-6">
                    {{ ($technical_information->elevator_status) ? "تایید" : "عدم تایید" }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                توضیحات
            </div>
            <div class="col-sm-9">
                {{ $technical_information->elevator_description }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 margin_top_30">
                <div class="col-sm-6">تاسیسات موتورخانه :</div>
                <div class="col-sm-6">
                    {{ ($technical_information->engine_room_status) ? "تایید" : "عدم تایید" }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                توضیحات
            </div>
            <div class="col-sm-9">
                {{ $technical_information->engine_room_description }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 margin_top_30">
                <div class="col-sm-6">تاسیسات سرمایش و گرمایش :</div>
                <div class="col-sm-6">
                    {{ ($technical_information->heating_cooling_system_status) ? "تایید" : "عدم تایید" }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                توضیحات
            </div>
            <div class="col-sm-9">
                {{ $technical_information->heating_cooling_system_description }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 margin_top_30">
                <div class="col-sm-6">سیستم های برقی, درب اتوماتیک و آنتن مرکزی :</div>
                <div class="col-sm-6">
                    {{ ($technical_information->door_status) ? "تایید" : "عدم تایید" }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                توضیحات
            </div>
            <div class="col-sm-9">
                {{ $technical_information->door_description }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 margin_top_30">
                <div class="col-sm-6">وضعیت کلی مجتمع از لحاظ فنی :</div>
                <div class="col-sm-6">
                    {{ ($technical_information->total_status) ? "تایید" : "عدم تایید" }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                توضیحات
            </div>
            <div class="col-sm-9">
                {{ $technical_information->total_description }}
            </div>
        </div>


    </div>

@endsection