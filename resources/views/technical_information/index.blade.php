@extends('layouts.master')
@include('apartment.partials.delete_apartments_js')

@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-list" aria-hidden="true"></i> چک لیست اطلاعات فنی مجتمع ها
        </h2>
        <p>تمامی اطلاعات فنی ثبت شده برای مجتمع ها در زیر لیست شده اند</p>
    </div>

    @include("layouts.flash")

    @include('technical_information.partials.delete_technical_informations')

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>کد آپارتمان</th>
            <th>نام مدیر</th>
            <th>شماره تماس مدیر</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
        @foreach($technical_informations as $technical_information)
            <tr>
                <td>{{ $technical_information->id }}</td>
                <td>{{ $technical_information->apartment->code }}</td>
                <td>{{ $technical_information->apartment->manager_name }}</td>
                <td>{{ $technical_information->apartment->manager_phone }}</td>
                <td>
                    <a class="btn btn-primary "
                       href="{{ route('apartment.show' , $technical_information->apartment->id) }}"> نمایش مجتمع</a>
                    <a class="btn btn-info "
                       href="{{ route('technical_information.show' , $technical_information->id) }}">نمایش اطلاعات</a>
                    <a class="btn btn-success "
                       href="{{ route('technical_information.edit' , $technical_information->id) }}">ویرایش اطلاعات</a>
                    <button class="btn btn-danger technical_information_delete"
                            data-id="{{ $technical_information->id }}"
                            data-code="{{ $technical_information->apartment->code }}"
                    >حذف
                        اطلاعات
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $technical_informations->links() }}
    </div>
@endsection

@push('scripts')
    <script src="/js/responsive_table.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').stacktable();
        });
    </script>
@endpush

