@extends('layouts.master')


@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-plus-square-o" aria-hidden="true"></i> ویرایش اطلاعات فنی مجتمع با
            کد {{ $technical_information->apartment->code }}
        </h2>
        <p>برای ویرایش اطلاعات فنی مجتمع فرم زیر را ویرایش ثبت کنید</p>
    </div>

    <div class="container">
        @include('layouts.errors')
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 well">
                <form method="POST" action="{{ route('technical_information.update' , $technical_information->id) }}" class="form-horizontal"
                      data-toggle="validator" role="form">
                    <fieldset>
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <div class="row"> {{--first chechbox row--}}
                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        وضعیت آسانسور
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="elevator_status" value="1"
                                                   @if( $technical_information->elevator_status) checked @endif
                                            >تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="elevator_status" value="0"
                                                   @if( !$technical_information->elevator_status) checked @endif>
                                            عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="elevator_description" class="control-label">توضیحات</label>
                                <textarea name="elevator_description"
                                          id="elevator_description"
                                          rows="3"
                                          class="form-control">{{ $technical_information->elevator_description }}</textarea>
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
                                            <input type="radio" name="engine_room_status" value="1"
                                                   @if( $technical_information->engine_room_status) checked @endif>تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="engine_room_status" value="0"
                                                   @if(! $technical_information->engine_room_status) checked @endif
                                            >عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="engine_room_description" class="control-label">توضیحات</label>
                                <textarea name="engine_room_description"
                                          id="engine_room_description"
                                          rows="3"
                                          class="form-control">{{ $technical_information->engine_room_description }}</textarea>
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
                                            <input type="radio" name="heating_cooling_system_status" value="1"
                                                   @if( $technical_information->heating_cooling_system_status) checked @endif
                                            >تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="heating_cooling_system_status" value="0"
                                                   @if(! $technical_information->heating_cooling_system_status) checked @endif
                                            >عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="heating_cooling_system_description" class="control-label">توضیحات</label>
                                <textarea name="heating_cooling_system_description"
                                          id="heating_cooling_system_description"
                                          rows="3"
                                          class="form-control">{{ $technical_information->heating_cooling_system_description }}</textarea>
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
                                            <input type="radio" name="door_status" value="1"
                                                   @if( $technical_information->door_status) checked @endif
                                            >تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="door_status" value="0"
                                                   @if(! $technical_information->door_status) checked @endif
                                            >عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="door_description" class="control-label">توضیحات</label>
                                <textarea name="door_description"
                                          id="door_description"
                                          rows="3"
                                          class="form-control">{{ $technical_information->door_description }}</textarea>
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
                                            <input type="radio" name="total_status" value="1"
                                                   @if( $technical_information->total_status) checked @endif
                                            >تایید
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" name="total_status" value="0"
                                                   @if( !$technical_information->total_status) checked @endif
                                            >عدم تایید
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grout">
                                <label for="total_description" class="control-label">توضیحات</label>
                                <textarea name="total_description"
                                          id="total_description"
                                          rows="3"
                                          class="form-control">{{ $technical_information->total_description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block" value="ویرایش اطلاعات">
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