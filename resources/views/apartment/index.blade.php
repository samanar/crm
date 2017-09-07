@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-list" aria-hidden="true"></i> لیست آپارتمان ها
        </h2>
        <p>تمامی آپارتمان های ثبت شده در سیستم در زیر لیست شده اند</p>
    </div>
    <table id="table" class="table table-striped">
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
                <td data-th="#">{{ $apartment->id }}</td>
                <td data-th="کد آپارتمان">{{ $apartment->code }}</td>
                <td data-th="نام مدیر">{{ $apartment->manager_name }}</td>
                <td data-th="شماره تماس مدیر">{{ $apartment->manager_phone }}</td>
                <td data-th="عملیات" class="bt-content">
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $apartments->links() }}
    </div>
@endsection

@section('scripts')
    <script src="/js/responsive_table.js"></script>
    <script>
        $('#table').basictable({
            showEmptyCells: true,
            tableWrap: true,
            forceResponsive: true
        });
    </script>
@endsection