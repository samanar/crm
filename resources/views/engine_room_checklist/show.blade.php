@extends('layouts.master')

@include('engine_room_checklist.partials.delete_engine_room_checklist')

@section('content')

    <div class="page-header">
        <h2><i class="fa fa-info-circle" aria-hidden="true"></i> اطلاعات پایه مجتمع با
            کد {{ $engine_room_checklist->apartment->code }} </h2>
        <p>در این قسمت میتواند تمام اطلاعات پایه مجتمع مورد نظر را مشاهده نمایید</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6">
                    <a href="{{ route('engine_room_checklist.edit' , $engine_room_checklist->id) }}"
                       class="btn btn-success btn-block btn-sm">ویرایش </a>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-danger btn-block btn-sm"
                            id="delete_engine_room_checklist"
                            data-id="{{ $engine_room_checklist->id }}"
                            data-code="{{ $engine_room_checklist->apartment->code }}"> حذف
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
                    تمییز بودن موتور خانه
                </td>
                <td>
                    <input type="checkbox" name="clean" class="checkbox"
                           @if($engine_room_checklist->clean) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->clean_description }}
                </td>
            </tr>

            <tr>
                <td>عدم وجود آب و رسوب در اطراف پمپ ها

                </td>
                <td>
                    <input type="checkbox" name="water" class="checkbox"
                           @if($engine_room_checklist->water) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->water_description }}
                </td>
            </tr>

            <tr>
                <td>
                    لوله ها
                </td>
                <td>
                    <input type="checkbox" name="pipes" class="checkbox"
                           @if($engine_room_checklist->pipes) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->pipes_description }}
                </td>
            </tr>

            <tr>
                <td>
                    عایق لوله ها
                </td>
                <td>
                    <input type="checkbox" name="insulation" class="checkbox"
                           @if($engine_room_checklist->insulation) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->insulation_description }}
                </td>
            </tr>
            <tr>
                <td>نوع مشعل موتور خانه
                </td>
                <td>
                    <input type="checkbox" name="torch_type" class="checkbox"
                           @if($engine_room_checklist->torch_type) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->torch_type_description }}
                </td>
            </tr>

            <tr>
                <td>
                    کارکرد مشعل موتور خانه
                </td>
                <td>
                    <input type="checkbox" name="torch_performance" class="checkbox"
                           @if($engine_room_checklist->torch_performance) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->torch_performance_description }}
                </td>
            </tr>
            <tr>
                <td>
                    نوع دیگ ها

                </td>

                <td>
                    <input type="checkbox" name="pot_type" class="checkbox"
                           @if($engine_room_checklist->pot_type) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->pot_type_description }}
                </td>
            </tr>
            <tr>
                <td>
                    کارکرد دیگ ها

                </td>
                <td>
                    <input type="checkbox" name="pot_performance" class="checkbox"
                           @if($engine_room_checklist->pot_performance) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->pot_performance_description }}
                </td>
            </tr>
            <tr>
                <td>
                    چیلر ( در صورت وجود)

                </td>
                <td>
                    <input type="checkbox" name="chiller" class="checkbox"
                           @if($engine_room_checklist->chiller) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->chiller_description }}
                </td>
            </tr>
            <tr>
                <td>
                    برج خنک کننده ( در صورت وجود)


                </td>
                <td>
                    <input type="checkbox" name="cooling_tower" class="checkbox"
                           @if($engine_room_checklist->cooling_tower) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->cooling_tower_description }}
                </td>
            </tr>
            <tr>
                <td>
                    پمپ ها

                </td>
                <td>
                    <input type="checkbox" name="pump" class="checkbox"
                           @if($engine_room_checklist->pump) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->pump_description }}
                </td>
            </tr>

            <tr>
                <td>
                    حصول اطمینان از عدم نشت و روغن ریزی

                </td>
                <td>
                    <input type="checkbox" name="oil" class="checkbox"
                           @if($engine_room_checklist->oil) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->oil_description }}
                </td>
            </tr>

            <tr>
                <td>
                    بازدید از فلکه های اصلی

                </td>
                <td>
                    <input type="checkbox" name="main_gates" class="checkbox"
                           @if($engine_room_checklist->main_gates) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->main_gates_description }}
                </td>
            </tr>

            <tr>
                <td>
                    بازدید از تابلو فرمان و تمییز کردن آن


                </td>
                <td>
                    <input type="checkbox" name="command_board" class="checkbox"
                           @if($engine_room_checklist->command_board) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->command_board_description }}
                </td>
            </tr>
            <tr>
                <td>
                    بررسی صدا ها و لرزش های غیر عادی در تجهیزات
                </td>
                <td>
                    <input type="checkbox" name="noise" class="checkbox"
                           @if($engine_room_checklist->noise) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->noise_description }}
                </td>
            </tr>
            <tr>
                <td>
                    بررسی و بازدید درجه حرارت آب رادیاتور
                </td>
                <td>
                    <input type="checkbox" name="temperature" class="checkbox"
                           @if($engine_room_checklist->temperature) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->temperature_description }}
                </td>
            </tr>
            <tr>
                <td>
                    بررسی وضعیت سیمان کاری پشت درب دیگ های فولادی
                </td>
                <td>
                    <input type="checkbox" name="door" class="checkbox"
                           @if($engine_room_checklist->door) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->door_description }}
                </td>
            </tr>
            <tr>
                <td>
                    وضعیت مناسب فشار و دمای دیگ و درجه حرارت بخار و آب
                </td>
                <td>
                    <input type="checkbox" name="pressure" class="checkbox"
                           @if($engine_room_checklist->pressure) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->pressure_description }}
                </td>
            </tr>
            <tr>
                <td>
                    وضعیت فشار ورودی و خروجی از پمپ
                </td>
                <td>
                    <input type="checkbox" name="pump_pressure" class="checkbox"
                           @if($engine_room_checklist->pump_pressure) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->pump_pressure_description }}
                </td>
            </tr>
            <tr>
                <td>
                    بازدید ظاهری از سالم بودن ترانس
                </td>
                <td>
                    <input type="checkbox" name="trans" class="checkbox"
                           @if($engine_room_checklist->trans) checked @endif>
                </td>
                <td>
                    {{ $engine_room_checklist->trans_description }}
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