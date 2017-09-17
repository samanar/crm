@if( $apartment->basic_information )

    <div class="panel panel-default">
        <div class="panel-heading">چک لیست اطلاعات پایه مجتمع</div>
        <div class="panel-body">
            <div class="list-group">
                <a href="{{ route('basic_information.show' , $apartment->basic_information->id) }}"
                   class="list-group-item list-group-item-info">
                    <h4 class="list-group-item-heading">مشاهده</h4>
                    <p class="list-group-item-text">برای مشاهده اطلاعات پایه مجتمع اینجا کلیک کنید</p>
                </a>
                <a href="{{ route('basic_information.edit' , $apartment->basic_information->id) }}"
                   class="list-group-item list-group-item-success">
                    <h4 class="list-group-item-heading">ویرایش</h4>
                    <p class="list-group-item-text">برای ویرایش اطلاعات پایه مجتمع اینجا کلیک کنید</p>
                </a>
            </div>
        </div>
    </div>


@else

    <div class="panel panel-default">
        <div class="panel-heading"> اطلاعات پایه مجتمع</div>
        <div class="panel-body">
            <div class="list-group">
                <a href="{{ route('basic_information.create' , $apartment->id) }}"
                   class="list-group-item list-group-item-warning">
                    <h4 class="list-group-item-heading">ایجاد</h4>
                    <p class="list-group-item-text">
                        برای ایجاد چک لیست اطلاعات پایه مجتمع اینجا کلیک کنید
                    </p>
                </a>

            </div>
        </div>
    </div>


@endif