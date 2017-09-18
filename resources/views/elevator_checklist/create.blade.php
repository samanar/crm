@extends('layouts.master')


@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-plus-square-o" aria-hidden="1"></i> افزودن چک لیست آسانسور مجتمع با کد {{ $apartment->code }}
        </h2>
        <p>برای افزودن اچک لیست آسانسور مجتمع فرم زیر را پر کنید</p>
    </div>

    <div class="container">
        @include('layouts.errors')
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 well">
                <form method="POST" action="{{ route('elevator_checklist.store') }}"
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
                              بازدید آخرین خطاهای تابلو

                            </td>
                            <td>
                                <input type="checkbox" name="board_errors" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="board_errors_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                               بازدید از اکترو موتورو نحوه حرکت

                            </td>
                            <td>
                                <input type="checkbox" name="motor" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="motor_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                بازدید از شستی ها و نمایشگر ها
                            </td>
                            <td>
                                <input type="checkbox" name="display" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="display_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                             حرکت روان و عملکرد صحیح خود بسته شو درب ها
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
                               نظافت سیل درب ها

                            </td>
                            <td>
                                <input type="checkbox" name="clean" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="clean_description" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td>
                               بازدید میکروپیچ ها
                            </td>
                            <td>
                                <input type="checkbox" name="micro" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="micro_description" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                             نحوه ی حرکت آسانسور

                            </td>

                            <td>
                                <input type="checkbox" name="movement" class="checkbox">
                            </td>
                            <td>
                                <input type="text" name="movement_description" class="form-control">
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
        $(document).ready(function () {
            $('table').stacktable();
        });
        $('form').validator();
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