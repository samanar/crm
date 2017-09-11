<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                Satrap Crm
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                @if( Auth::check() )
                    <li class="active theme_changer" data-toggle="modal" data-target="#myModal">
                        <a>
                            <i class="fa fa-slack" aria-hidden="true"></i>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                @endif
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>


            </ul>

            <ul class="nav navbar-nav navbar-left">
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">تغییر ظاهر سیستم</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.theme') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="theme" class="control-label">ظاهر جدید را انتخاب کنید :</label>
                        <select name="theme" id="theme" class="form-control">
                            @include('layouts.partials.themes')
                        </select>
                    </div>
                    <div class="form-group text-center">
                        @if( Auth::user()->rtl )
                            <input type="checkbox" class="form-control" name="rtl"
                                   id="checkbox">
                        @else
                            <input type="checkbox" class="form-control" name="rtl"
                                   id="checkbox" checked>
                        @endif
                    </div>
                    <input type="submit" style="display: none;" id="theme_submit">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
                <button type="button" class="btn btn-primary" id="theme_modal_submit">تغییر</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@push('scripts')
    <script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#checkbox').bootstrapSwitch({
                animate: true,
                size: 'large',
                onColor: 'success',
                offColor: 'warning',
                onText: 'چپ به راست',
                offText: 'راست به چپ',
                labelWidth: '50px',
                labelText: 'جهت سایت ؟',
                handleWidth: '90px'
            });

            $("#theme_modal_submit").click(function () {
                $("#theme_submit").click();
            });
        });
    </script>
@endpush

