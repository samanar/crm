@extends('layouts.master')
@include('apartment.partials.delete_apartments_js')

@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-list" aria-hidden="true"></i>چک لسیت های موتورخانه مجتمع ها
        </h2>
        <p>تمامی چک لسیت های موتورخانه ثبت شده برای مجتمع ها در زیر لیست شده اند</p>
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
        @foreach($engine_room_checklists as $engine_room_checklist)
            <tr>
                <td>{{ $engine_room_checklist->id }}</td>
                <td>{{ $engine_room_checklist->apartment->code }}</td>
                <td>{{ $engine_room_checklist->apartment->manager_name }}</td>
                <td>{{ $engine_room_checklist->apartment->manager_phone }}</td>
                <td>
                    <a class="btn btn-primary "
                       href="{{ route('apartment.show' , $engine_room_checklist->apartment->id) }}"> نمایش مجتمع</a>
                    <a class="btn btn-info "
                       href="{{ route('engine_room_checklist.show' , $engine_room_checklist->id) }}">نمایش اطلاعات</a>
                    <a class="btn btn-success "
                       href="{{ route('engine_room_checklist.edit' , $engine_room_checklist->id) }}">ویرایش اطلاعات</a>
                    <button class="btn btn-danger engine_room_checklist_delete"
                            data-id="{{ $engine_room_checklist->id }}"
                            data-code="{{ $engine_room_checklist->apartment->code }}"
                    >حذف
                        اطلاعات
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        {{ $engine_room_checklists->links() }}
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

