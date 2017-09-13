@extends('layouts.master')
@include('apartment.partials.delete_apartments_js')

@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-list" aria-hidden="true"></i> لیست آپارتمان ها
        </h2>
        <p>تمامی اطلاعات پایه ثبت شده برای مجتمع ها در زیر لیست شده اند</p>
    </div>

    @include("layouts.flash")

    @include('basic_information.partials.delete_basic_informations')

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
        @foreach($basic_informations as $basic_information)
            <tr>
                <td>{{ $basic_information->id }}</td>
                <td>{{ $basic_information->apartment->code }}</td>
                <td>{{ $basic_information->apartment->manager_name }}</td>
                <td>{{ $basic_information->apartment->manager_phone }}</td>
                <td>
                    <a class="btn btn-primary "
                       href="{{ route('apartment.show' , $basic_information->apartment->id) }}"> نمایش مجتمع</a>
                    <a class="btn btn-info "
                       href="{{ route('basic_information.show' , $basic_information->id) }}">نمایش اطلاعات</a>
                    <a class="btn btn-success "
                       href="{{ route('apartment.show' , $basic_information->apartment->id) }}">ویرایش اطلاعات</a>
                    <button class="btn btn-danger basic_information_delete"
                            data-id="{{ $basic_information->id }}"
                            data-code="{{ $basic_information->apartment->code }}"
                    >حذف
                        اطلاعات
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $basic_informations->links() }}
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

