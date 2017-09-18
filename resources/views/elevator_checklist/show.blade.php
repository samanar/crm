@extends('layouts.master')

@include('elevator_checklist.partials.delete_elevator_checklist')

@section('content')

    <div class="page-header">
        <h2><i class="fa fa-info-circle" aria-hidden="true"></i> اطلاعات پایه مجتمع با
            کد {{ $elevator_checklist->apartment->code }} </h2>
        <p>در این قسمت میتواند تمام اطلاعات پایه مجتمع مورد نظر را مشاهده نمایید</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <a href="{{ route('elevator_checklist.edit' , $elevator_checklist->id) }}"
                       class="btn btn-success btn-block btn-sm">ویرایش </a>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-danger btn-block btn-sm"
                            id="delete_elevator_checklist"
                            data-id="{{ $elevator_checklist->id }}"
                            data-code="{{ $elevator_checklist->apartment->code }}"> حذف
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="container margin_top_20 basic_information_show col-sm-10 col-sm-offset-1 well">
        <table class="table">
            <thead>
            <tr>
                <th>شرح</th>
                <th>عدم تایید / تایید</th>
                <th>توضیحات</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    بازدید آخرین خطاهای تابلو

                </td>
                <td>
                    <input type="checkbox" name="board_errors" class="checkbox"
                           @if($elevator_checklist->board_errors) checked @endif>
                </td>
                <td>
                    {{ $elevator_checklist->board_errors_description }}
                </td>
            </tr>

            <tr>
                <td>
                    بازدید از اکترو موتورو نحوه حرکت

                </td>
                <td>
                    <input type="checkbox" name="motor" class="checkbox"
                           @if($elevator_checklist->motor) checked @endif>
                </td>
                <td>
                    {{ $elevator_checklist->motor_description }}
                </td>
            </tr>

            <tr>
                <td>
                    بازدید از شستی ها و نمایشگر ها
                </td>
                <td>
                    <input type="checkbox" name="display" class="checkbox"
                           @if($elevator_checklist->display) checked @endif>
                </td>
                <td>
                    {{ $elevator_checklist->display_description }}
                </td>
            </tr>

            <tr>
                <td>
                    حرکت روان و عملکرد صحیح خود بسته شو درب ها
                </td>
                <td>
                    <input type="checkbox" name="door" class="checkbox"
                           @if($elevator_checklist->door) checked @endif>
                </td>
                <td>
                    {{ $elevator_checklist->door_description }}
                </td>
            </tr>
            <tr>
                <td>
                    نظافت سیل درب ها

                </td>
                <td>
                    <input type="checkbox" name="clean" class="checkbox"
                           @if($elevator_checklist->clean) checked @endif>
                </td>
                <td>
                    {{ $elevator_checklist->clean_description }}
                </td>
            </tr>

            <tr>
                <td>
                    بازدید میکروپیچ ها
                </td>
                <td>
                    <input type="checkbox" name="micro" class="checkbox"
                           @if($elevator_checklist->micro) checked @endif>
                </td>
                <td>
                    {{ $elevator_checklist->micro_description }}
                </td>
            </tr>
            <tr>
                <td>
                    نحوه ی حرکت آسانسور

                </td>

                <td>
                    <input type="checkbox" name="movement" class="checkbox"
                           @if($elevator_checklist->movement) checked @endif>
                </td>
                <td>
                    {{ $elevator_checklist->movement_description }}
                </td>
            </tr>

            </tbody>
        </table>
    </div>

@endsection

@push('scripts')
    <script src="/js/validator.min.js"></script>
    <script src="/js/bootstrap-switch.min.js"></script>
    <script src="/js/responsive_table.js"></script>
    <script>
        $('form').validator();
        $(document).ready(function () {
            $('table').stacktable();
        });
        $(".checkbox").bootstrapSwitch({
            animate: true,
            onText: 'تایید',
            offText: 'عدم تایید',
            onColor: 'success',
            offColor: 'danger',
            readonly: true
        });
    </script>
@endpush