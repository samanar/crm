@extends('layouts.master')


@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-plus-square-o" aria-hidden="true"></i> ویرایش چک لیست مجتمع مسکونی با
            کد {{ $elevator_checklist->apartment->code }}
        </h2>
        <p>برای ویرایش چک لیست مجتمع فرم زیر را ثبت کنید</p>
    </div>


    <div class="container">
        @include('layouts.errors')
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 well">
                <form method="post"
                      action="{{ route('elevator_checklist.update' , $elevator_checklist->id) }}"
                      class="form-horizontal"
                      data-toggle="validator" role="form">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
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
                                <input type="text" name="board_errors_description" class="form-control"
                                       value="{{ $elevator_checklist->board_errors_description }}">
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
                                <input type="text" name="motor_description" class="form-control"
                                value="{{ $elevator_checklist->motor_description }}">
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
                                <input type="text" name="display_description" class="form-control"
                                value="{{ $elevator_checklist->display_description }}">
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
                                <input type="text" name="door_description" class="form-control"
                                value="{{ $elevator_checklist->door_description }}">
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
                                <input type="text" name="clean_description" class="form-control"
                                value="{{ $elevator_checklist->clean_description }}">
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
                                <input type="text" name="micro_description" class="form-control"
                                value="{{ $elevator_checklist->micro_description }}">
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
                                <input type="text" name="movement_description" class="form-control"
                                value="{{ $elevator_checklist->movement_description }}">
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="ثبت اطلاعات">
                    </div>
                </form>
            </div>
        </div>
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
//            inverse : true
        });
    </script>
@endpush