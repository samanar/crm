@extends('layouts.master')

@include('basic_information.partials.delete_basic_informations')

@section('content')

    <div class="page-header">
        <h2><i class="fa fa-info-circle" aria-hidden="true"></i> اطلاعات پایه مجتمع با
            کد {{ $basic_information->apartment->code }} </h2>
        <p>در این قسمت میتواند تمام اطلاعات پایه مجتمع مورد نظر را مشاهده نمایید</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <a href="{{ route('apartment.edit' , $apartment->id) }}" class="btn btn-success btn-block btn-sm">ویرایش </a>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-danger btn-block btn-sm"
                            id="delete_basic_information"
                            data-id="{{ $apartment->id }}" data-code="{{ $apartment->code }}"> حذف
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="container margin_top_20 basic_information_show col-sm-10 col-sm-offset-1 well">
        <div class="row">
            <div class="col-sm-4">آدرس مجتمع</div>
            <div class="col-sm-8">{{ $apartment->address }}</div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">تعداد واحد</div>
                <div class="col-sm-6">{{ $apartment->unit }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">تعداد طبقه</div>
                <div class="col-sm-6">{{ $basic_information->floor }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">تعداد واحد در طبقه</div>
                <div class="col-sm-6">{{ $basic_information->unit_in_floor }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">عمر بنا</div>
                <div class="col-sm-6">{{ $apartment->age }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">نام مدیر</div>
                <div class="col-sm-6">{{ $apartment->manager_name }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">شماره تماس مدیر</div>
                <div class="col-sm-6">{{ $apartment->manager_phone }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">استخر</div>
                <div class="col-sm-6">{{ ($basic_information->pool) ? "دارد" : "ندارد" }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">آنتن مرکزی</div>
                <div class="col-sm-6">{{ ($basic_information->antenna) ? "دارد" : "ندارد" }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">سونا</div>
                <div class="col-sm-6">{{ ($basic_information->sauna) ? "دارد" : "ندارد" }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">درب اتوماتیک</div>
                <div class="col-sm-6">{{ ($basic_information->door) ? "دارد" : "ندارد" }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">کنتور مجزای برق</div>
                <div class="col-sm-6">{{ ($basic_information->power_meter) ? "دارد" : "ندارد" }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">برد اطلاعرسانی</div>
                <div class="col-sm-6">{{ ($basic_information->announcement_board) ? "دارد" : "ندارد" }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">کنتور مجزای گاز</div>
                <div class="col-sm-6">{{ ($basic_information->gas_meter) ? "دارد" : "ندارد" }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">سرایدار یا نگهبان</div>
                <div class="col-sm-6">{{ ($basic_information->guard) ? "دارد" : "ندارد" }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">کنتور مجزای آب</div>
                <div class="col-sm-6">{{ ($basic_information->water_meter) ? "دارد" : "ندارد" }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">تعداد آسانسور</div>
                <div class="col-sm-6">{{ $basic_information->elevator_count }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">ظرفیت آسانسور</div>
                <div class="col-sm-6">{{ $basic_information->elevator_capacity }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">سیستم سرمایش</div>
                <div class="col-sm-6">{{ $basic_information->cooling_system}}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">سیستم گرمایش</div>
                <div class="col-sm-6">{{ $basic_information->heating_system}}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">نحوه آشنایی</div>
                <div class="col-sm-6"></div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">نام بازاریاب</div>
                <div class="col-sm-6">{{ $basic_information->marketer_name }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">اولین مراجعه</div>
                <div class="col-sm-6">{{ $basic_information->first_visit }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">توضیحات</div>
                <div class="col-sm-8">{{ $basic_information->marketer_description }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-6">زمان تعیین شده جهت بازرسی فنی</div>
                <div class="col-sm-6">{{ $basic_information->technical_visit }}</div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">کارشناس فنی</div>
                <div class="col-sm-6">{{ $basic_information->technician_name }}</div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-4">توضیحات</div>
                <div class="col-sm-8">{{ $basic_information->technical_description }}</div>
            </div>
        </div>
    </div>

@endsection