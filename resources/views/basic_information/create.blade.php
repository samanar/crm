@extends('layouts.master')


@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-plus-square-o" aria-hidden="1"></i> افزودن اطلاعات پایه مجتمع
        </h2>
        <p>برای افزودن اطلاعات پایه مجتمع فرم زیر را پر کنید</p>
    </div>



    <div class="container">
        @include('layouts.errors')
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <form method="POST" action="{{ route('basic_information.store') }}"
                      class="form-horizontal"
                      data-toggle="validator" role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="apartment_id" value="{{ Crypt::encrypt($apartment->id) }}">
                    <div class="form-group">
                        <label for="address">آدرس مجتمع :</label>
                        <input type="text" class="form-control" id="address" name="address"
                               value="{{ $apartment->address }}"
                               data-error="وارد کردن آدرس اجباری است"
                               required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="unit">تعداد واحد :</label>
                                <input type="number" class="form-control" id="address" name="unit"
                                       value="{{ $apartment->unit }}"
                                       data-error="تعداد واحد باید به عدد وارد شود">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="floor">تعداد طبقه :</label>
                                <input type="number" class="form-control" id="floor" name="floor"
                                       data-error="تعداد طبقه باید به عدد وارد شود">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="unit_in_floor">تعداد واحد در طبقه :</label>
                                <input type="number" class="form-control" id="unit_in_floor"
                                       name="unit_in_floor"
                                       data-error="تعداد واحد باید به عدد وارد شود">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="age">عمر بنا :</label>
                                <input type="number" class="form-control" id="age" name="age"
                                       value="{{ $apartment->age }}"
                                       data-error="عمر بنا باید به عدد وارد شود">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="manager_name">نام مدیر :</label>
                                <input type="text" class="form-control" id="manager_name"
                                       name="manager_name"
                                       value="{{ $apartment->manager_name }}"
                                       data-error="وارد کردن نام مدیر اجباری است"
                                       required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="manager_phone">شماره تماس :</label>
                                <input type="text" class="form-control" id="manager_phone"
                                       name="manager_phone"
                                       value="{{ $apartment->manager_phone }}"
                                       data-error="وارد کردن شماره تماس اجباری است"
                                       required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row"> {{--first chechbox row--}}
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                استخر :
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="pool" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="pool" value="0" checked>ندارد
                                </label>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                آنتن مرکزی :
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="antenna" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="antenna" value="0" checked>ندارد
                                </label>
                            </div>
                        </div>
                    </div> {{--end of first checkbox row--}}

                    <div class="row"> {{--second chechbox row--}}
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                سونا :
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="sauna" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="sauna" value="0" checked>ندارد
                                </label>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                درب اتوماتیک :
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="door" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="door" value="0" checked>ندارد
                                </label>
                            </div>
                        </div>
                    </div> {{--end of second checkbox row--}}
                    <div class="row"> {{--third chechbox row--}}
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                کنتور مجزای برق :
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="power_meter" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="power_meter" value="0" checked>ندارد
                                </label>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                برد اطلاع رسانی :
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="announcement_board" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="announcement_board" value="0" checked>ندارد
                                </label>
                            </div>
                        </div>
                    </div> {{--end of third checkbox row--}}
                    <div class="row"> {{--fourth chechbox row--}}
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                کنتر مجزای گاز :
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gas_meter" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gas_meter" value="0" checked>ندارد
                                </label>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                سرایدار یا نگهبان:
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="guard" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="guard" value="0" checked>ندارد
                                </label>
                            </div>
                        </div>
                    </div> {{--end of fourth checkbox row--}}
                    <div class="row"> {{--fifth chechbox row--}}
                        <div class="col-sm-6">
                            <div class="col-sm-4">
                                کنتور مجزای آب :
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="water_meter" value="1">‌دارد
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="water_meter" value="0" checked>ندارد
                                </label>
                            </div>
                        </div>
                    </div> {{--end of first checkbox row--}}

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="elevator_count" class="label-control">تعداد آسانسور:</label>
                            <input type="number" class="form-control" name="elevator_count"
                                   id="elevator_count"
                                   data-error="تعداد آسانسور باید به عدد وارد شود">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="" class="label-control">ظرفیت آسانسور :</label>
                            <input type="number" name="elevator_capacity" class="form-control"
                                   id="elevator_capacity"
                                   data-error="ظرفیت آسانسور باید به عدد وارد شود">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cooling" class="control-label">سیستم سرمایش :</label>
                            <input type="text" name="cooling_system" id="cooling_system"
                                   class="form-control"
                                   maxlength="255"
                                   data-error="سیستم سرمایشی نباید بیشتر از ۲۵۵ کاراکتر باشد">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="heating_system" class="control-label">سیستم گرمایش :</label>
                            <input type="text" name="heating_system" id="heating_system"
                                   class="form-control"
                                   maxlength="255"
                                   data-error="سیستم گرمایشی نباید بیشتر از ۲۵۵ کاراکتر باشد">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="first_visit" class="control-label">اولین مراجعه :</label>
                            <input type="text" name="first_visit" id="first_visit"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="introduction_method" class="control-label">نحوه آشنایی :</label>
                            <select name="introduction_method" id="introduction_method" class="form-control"></select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="marketer_name" class="control-label"> نام بازاریاب :</label>
                            <input type="text" name="marketer_name" id="marketer_name"
                                   class="form-control" maxlength="255"
                                   data-error="فیلد بازاریاب نباید بیشتر از ۲۵۵ کاراکتر باشد">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">توضیحات</label>
                        <textarea name="marketer_description" id="marketer_description" rows="5"
                                  class="form-control"></textarea>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="technical_visit" class="control-label">زمان تعیین شده جهت بازرسی فنی :</label>
                            <input type="text" name="technical_visit" id="technical_visit"
                                   class="form-control"
                                   maxlength="255"
                                   data-error="زمان تعیین شده نباید بیشتر از ۲۵۵ کاراکتر باشد">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="technician_name" class="control-label">کارشناس فنی :</label>
                            <input type="text" name="technician_name" id="technician_name"
                                   class="form-control"
                                   maxlength="255"
                                   data-error="فیلد کارشناس فنی نباید بیشتر از ۲۵۵ کاراکتر باشد">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label">توضیحات</label>
                        <textarea name="technical_description" id="technical_description" rows="5"
                                  class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" value="افزودن اطلاعات پایه ">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/js/validator.min.js"></script>
    <script>
        $('form').validator();
    </script>
@endpush