@extends('layouts.master')
@include('apartment.partials.delete_apartments_js')

@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-list" aria-hidden="true"></i>چک لسیت های آسانسور مجتمع ها
        </h2>
        <p>تمامی چک لسیت های آسانسور ثبت شده برای مجتمع ها در زیر لیست شده اند</p>
    </div>

    @include("layouts.flash")

    @include('elevator_checklist.partials.delete_elevator_checklist')

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
        @foreach($elevator_checklists as $elevator_checklist)
            <tr>
                <td>{{ $elevator_checklist->id }}</td>
                <td>{{ $elevator_checklist->apartment->code }}</td>
                <td>{{ $elevator_checklist->apartment->manager_name }}</td>
                <td>{{ $elevator_checklist->apartment->manager_phone }}</td>
                <td>
                    <a class="btn btn-primary "
                       href="{{ route('apartment.show' , $elevator_checklist->apartment->id) }}"> نمایش مجتمع</a>
                    <a class="btn btn-info "
                       href="{{ route('elevator_checklist.show' , $elevator_checklist->id) }}">نمایش اطلاعات</a>
                    <a class="btn btn-success "
                       href="{{ route('elevator_checklist.edit' , $elevator_checklist->id) }}">ویرایش اطلاعات</a>
                    <button class="btn btn-danger elevator_checklist_delete"
                            data-id="{{ $elevator_checklist->id }}"
                            data-code="{{ $elevator_checklist->apartment->code }}"
                    >حذف
                        اطلاعات
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $elevator_checklists->links() }}
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

