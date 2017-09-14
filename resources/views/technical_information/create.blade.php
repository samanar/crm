@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-plus-square-o" aria-hidden="true"></i> افزودن چک لیست اطلاعات فنی مجتمع با
            کد {{ $apartment->code }}
        </h2>
        <p>برای افزودن چک لیست اطلاعات فنی جدید به مجتمع فرم زیر را پر کنید</p>
    </div>


    <div class="container">
        @include('layouts.errors')
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 well">
                <form method="POST" action="{{ route('technical_information.store') }}" class="form-horizontal"
                      data-toggle="validator" role="form">
                    <fieldset>
                        {{ csrf_field() }}
                        <input type="hidden" name="apartment_id"
                               value="{{ Crypt::encrypt($apartment->id) }}"
                        >
                        <div class="form-group">
                            <div class="row"> {{--first chechbox row--}}
                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        وضعیت آسانسور
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="elevator_status" value="1">تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="elevator_status" value="0" checked>عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="elevator_description" class="control-label">توضیحات</label>
                                <textarea name="elevator_description"
                                          id="elevator_description"
                                          rows="3"
                                          class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row"> {{--first chechbox row--}}
                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        تاسیسات موتورخانه
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="engine_room_status" value="1">تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="engine_room_status" value="0" checked>عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="engine_room_description" class="control-label">توضیحات</label>
                                <textarea name="engine_room_description"
                                          id="engine_room_description"
                                          rows="3"
                                          class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row"> {{--first chechbox row--}}
                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        سیستم های سرمایش و گرمایش
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="heating_cooling_system_status" value="1">تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="heating_cooling_system_status" value="0" checked>عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="heating_cooling_system_descriptino" class="control-label">توضیحات</label>
                                <textarea name="heating_cooling_system_descriptino"
                                          id="heating_cooling_system_descriptino"
                                          rows="3"
                                          class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row"> {{--first chechbox row--}}
                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        سیستم های برقی , درب اتوماتیک و آنتن مرکزی
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="door_status" value="1">تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="door_status" value="0" checked>عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="door_descriptino" class="control-label">توضیحات</label>
                                <textarea name="door_descriptino"
                                          id="door_descriptino"
                                          rows="3"
                                          class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row"> {{--first chechbox row--}}
                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        وضعیت کلی مجتمع از لحاظ فنی
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="total_status" value="1">تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="total_status" value="0" checked>عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="total_descriptino" class="control-label">توضیحات</label>
                                <textarea name="total_descriptino"
                                          id="total_descriptino"
                                          rows="3"
                                          class="form-control"></textarea>
                            </div>
                        </div>

                    </fieldset>
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