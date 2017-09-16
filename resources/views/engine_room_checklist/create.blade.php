@extends('layouts.master')


@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-plus-square-o" aria-hidden="1"></i> افزودن چک لیست موتورخانه مجتمع با
            کد {{ $apartment->code }}
        </h2>
        <p>برای افزودن چک لیست موتورخانه مجتمع فرم زیر را پر کنید</p>
    </div>

    <div class="container">
        @include('layouts.errors')
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 well">
                <form method="POST" action="{{ route('engine_room_checklist.store') }}"
                      class="form-horizontal"
                      data-toggle="validator" role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="apartment_id" value="{{ Crypt::encrypt($apartment->id) }}">
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
                                <input type="checkbox" name="clean" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="clean_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>عدم وجود آب و رسوب در اطراف پمپ ها

                            </td>
                            <td>
                                <input type="checkbox" name="water" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="water_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                لوله ها
                            </td>
                            <td>
                                <input type="checkbox" name="pipes" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="pipes_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                عایق لوله ها
                            </td>
                            <td>
                                <input type="checkbox" name="insulation" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="insulation_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>نوع مشعل موتور خانه
                            </td>
                            <td>
                                <input type="checkbox" name="torch_type" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="torch_type_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                کارکرد مشعل موتور خانه
                            </td>
                            <td>
                                <input type="checkbox" name="torch_performance" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="torch_performance_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                نوع دیگ ها

                            </td>

                            <td>
                                <input type="checkbox" name="pot_type" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="pot_type_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                کارکرد دیگ ها

                            </td>
                            <td>
                                <input type="checkbox" name="pot_performance" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="pot_performance_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                چیلر ( در صورت وجود)

                            </td>
                            <td>
                                <input type="checkbox" name="chiller" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="chiller_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                برج خنک کننده ( در صورت وجود)


                            </td>
                            <td>
                                <input type="checkbox" name="cooling_tower" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="cooling_tower_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                پمپ ها

                            </td>
                            <td>
                                <input type="checkbox" name="pump" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="pump_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                حصول اطمینان از عدم نشت و روغن ریزی

                            </td>
                            <td>
                                <input type="checkbox" name="oil" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="oil_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                بازدید از فلکه های اصلی

                            </td>
                            <td>
                                <input type="checkbox" name="main_gates" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="main_gates_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                بازدید از تابلو فرمان و تمییز کردن آن


                            </td>
                            <td>
                                <input type="checkbox" name="command_board" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="command_board_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بررسی صدا ها و لرزش های غیر عادی در تجهیزات
                            </td>
                            <td>
                                <input type="checkbox" name="noise" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="noise_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بررسی و بازدید درجه حرارت آب رادیاتور
                            </td>
                            <td>
                                <input type="checkbox" name="temperature" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="temperature_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بررسی وضعیت سیمان کاری پشت درب دیگ های فولادی
                            </td>
                            <td>
                                <input type="checkbox" name="door" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="door_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                وضعیت مناسب فشار و دمای دیگ و درجه حرارت بخار و آب
                            </td>
                            <td>
                                <input type="checkbox" name="pressure" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="pressure_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                وضعیت فشار ورودی و خروجی از پمپ
                            </td>
                            <td>
                                <input type="checkbox" name="pump_pressure" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="pump_pressure_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                بازدید ظاهری از سالم بودن ترانس
                            </td>
                            <td>
                                <input type="checkbox" name="trans" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="trans_description" class="form-control">
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
    <script src="/js/bootstrap-switch.min.js"></script>
    <script src="/js/responsive_table.js"></script>
    <script>
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