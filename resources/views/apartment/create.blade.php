@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h2>
            <i class="fa fa-plus-square-o" aria-hidden="true"></i>  افزودن مجتمع مسکونی
        </h2>
        <p>برای افزودن مجتمع جدید به سیستم فرم زیر را پر کنید</p>
    </div>



    <div class="container">
        @include('layouts.errors')
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <form method="POST" action="{{ route('apartment.store') }}" class="form-horizontal"
                      data-toggle="validator" role="form">
                    <fieldset>
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="code" class="control-label">کد مجتمع :</label>
                            <input type="text" class="form-control" id="code" name="code"
                                   placeholder="کد آپارتمان را وارد کنید"
                                   data-error="وارد کردن کد آپارتمان اجباری است ."
                                   required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="manager_name" class="control-label">نام مدیر :</label>
                            <input type="text" class="form-control" id="manager_name" name="manager_name"
                                   placeholder="نام مدیر را وارد کنید"
                                   data-error="وارد کردن نام مدیر اجباری است ."
                                   required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="manager_phone" class="control-label">شماره تماس مدیر :</label>
                            <input type="text" class="form-control" id="manager_phone" name="manager_phone"
                                   placeholder="شماره تماس مدیر را وارد کنید"
                                   data-error="وارد کردن شماره تماس مدیر اجباری است ."
                                   required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="unit" class="control-label">تعداد واحد  :</label>
                                <input type="number" class="form-control" id="unit" name="unit"
                                       min="0"
                                       placeholder="تعداد واحد را وارد کنید">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-6">
                                <label for="age" class="control-label">عمر بنا :</label>
                                <input type="number" class="form-control" id="age" name="age"
                                       min="0"
                                       placeholder="عمر بنا را وارد کنید">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="unit" class="control-label">وضعیت :</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">---</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-sm-6">
                                <label for="unit" class="control-label">نحوه آشنایی  :</label>
                                <select name="introduction_method" id="introduction_method" class="form-control">
                                    <option value="5">---</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="control-label">آدرس مجتمع :</label>
                            <input type="text" class="form-control" id="address" name="address"
                                   placeholder="آدرس مجتمع را وارد کنید"
                                   data-error="وارد کردن آدرس مجتمع اجباری است ."
                                   required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="manager_phone" class="control-label">توضیحات :</label>
                            <textarea name="description" id="description" class="form-control" rows="5"
                                      placeholder="توضیحات اضافی درباره ی مجتمع"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">اضافه کردن</button>
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