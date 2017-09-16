@extends('layouts.master')


@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-plus-square-o" aria-hidden="true"></i> ویرایش اطلاعات مجتمع مسکونی با
            کد {{ $elevator_checklist->apartment->code }}
        </h2>
        <p>برای ویرایش اطلاعات پایه مجتمع فرم زیر را ثبت کنید</p>
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
                                بازدید سیم کشی تابلو برق(کاور دار بودن یا نبودن سیم ها)

                            </td>
                            <td>
                                <input type="checkbox" name="board_wire" class="checkbox"
                                @if($elevator_checklist->board_wire) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="board_wire_description" class="form-control"
                                value="{{ $elevator_checklist->board_wire_description }}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                سلامت سیم ها و فیوز ها ( عدم خال زدگی)

                            </td>
                            <td>
                                <input type="checkbox" name="wire_health" class="checkbox"
                                       @if($elevator_checklist->wire_health) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="wire_health_description" class="form-control"
                                       value="{{ $elevator_checklist->wire_health_description }}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                مرتب بودن یا نبودن سیم کشی
                            </td>
                            <td>
                                <input type="checkbox" name="wire_sort" class="checkbox"
                                       @if($elevator_checklist->wire_sort) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="wire_sort_description" class="form-control"
                                value="{{ $elevator_checklist->wire_sort_description }}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                کنترل تمیزی تابلو برق
                            </td>
                            <td>
                                <input type="checkbox" name="clean_board" class="checkbox"
                                       @if($elevator_checklist->clean_board) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="clean_board_description" class="form-control"
                                value="{{ $elevator_checklist->clean_board_description }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                نحوه ی کارکرد آسانسور در هنگام حرکت

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

                        <tr>
                            <td>
                                کنترل لنت ها و پاراشوت ها ( اتصال پاراشوت ها)
                            </td>
                            <td>
                                <input type="checkbox" name="brake" class="checkbox"
                                       @if($elevator_checklist->brake) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="brake_description" class="form-control"
                                value="{{ $elevator_checklist->brake_description }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                استحکام تسمه های کابین و تسمه

                            </td>

                            <td>
                                <input type="checkbox" name="cable_strength" class="checkbox"
                                       @if($elevator_checklist->cable_strength) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="cable_strength_description" class="form-control"
                                value="{{ $elevator_checklist->cable_strength_description }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                عدم وجود ضربه و تقه های شدید هنگام حرکت بر موتور

                            </td>
                            <td>
                                <input type="checkbox" name="strike" class="checkbox"
                                       @if($elevator_checklist->strike) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="strike_description" class="form-control"
                                value="{{ $elevator_checklist->strike_description }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بازدید روغن کاری آسانسور ( عدم روغن ریزی، روغن کاری )

                            </td>
                            <td>
                                <input type="checkbox" name="oil" class="checkbox"
                                       @if($elevator_checklist->oil) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="oil_description" class="form-control"
                                value="{{ $elevator_checklist->oil_description }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بازدید نور کابین

                            </td>
                            <td>
                                <input type="checkbox" name="light" class="checkbox"
                                       @if($elevator_checklist->light) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="light_description" class="form-control"
                                value="{{ $elevator_checklist->light_description }}">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بازدید سیم بکسل های اصلی و گاورنر

                            </td>
                            <td>
                                <input type="checkbox" name="main_cable" class="checkbox"
                                       @if($elevator_checklist->main_cable) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="main_cable_description" class="form-control"
                                value="{{ $elevator_checklist->main_cable_description }}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                بازدید از اتصال درب کابین به سقف کابین

                            </td>
                            <td>
                                <input type="checkbox" name="floor" class="checkbox"
                                       @if($elevator_checklist->floor) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="floor_description" class="form-control"
                                value="{{ $elevator_checklist->floor_description }}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                درستی عملکرد کلید ها

                            </td>
                            <td>
                                <input type="checkbox" name="keys" class="checkbox"
                                       @if($elevator_checklist->keys) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="keys_description" class="form-control"
                                value="{{ $elevator_checklist->keys_description }}">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                تنظیم درب ها نسبت به کابین ( شاقول بودن درب ها)


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
                                روان و بدون صدا بسته شدن درب ها
                            </td>
                            <td>
                                <input type="checkbox" name="sound" class="checkbox"
                                       @if($elevator_checklist->sound) checked @endif>
                            </td>
                            <td>
                                <input type="text" name="sound_description" class="form-control"
                                value="{{ $elevator_checklist->sound_description }}">
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