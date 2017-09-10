@extends('layouts.master')
@include('apartment.partials.delete_apartments_js')

@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-list" aria-hidden="true"></i> لیست آپارتمان ها
        </h2>
        <p>تمامی آپارتمان های ثبت شده در سیستم در زیر لیست شده اند</p>
    </div>

    @include("layouts.flash")

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
        @foreach($apartments as $apartment)
            <tr>
                <td>{{ $apartment->id }}</td>
                <td>{{ $apartment->code }}</td>
                <td>{{ $apartment->manager_name }}</td>
                <td>{{ $apartment->manager_phone }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('apartment.show' , $apartment->id) }}">نمایش</a>
                    <a class="btn btn-success" href="{{ route ('apartment.edit' , $apartment->id) }}">ویرایش</a>
                    <a data-id="{{ $apartment->id }}" data-code="{{ $apartment->code }}"
                       class="delete_apartment btn btn-danger">حذف</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $apartments->links() }}
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

