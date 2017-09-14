<div class="panel panel-default">
    <div class="panel-heading">اطلاعات مجتمع</div>
    <div class="panel-body">
        <div class="list-group">
            <a href="{{ route('apartment.edit' , $apartment->id) }}"
               class="list-group-item list-group-item-success">
                <h4 class="list-group-item-heading">ویرایش</h4>
                <p class="list-group-item-text">برای ویرایش اطلاعات مجتمع اینجا کلیک کنید</p>
            </a>

            <a href="#" data-id="{{ $apartment->id }}" data-code="{{ $apartment->code }}"
               id="delete_apartment"
               class="list-group-item list-group-item-danger">
                <h4 class="list-group-item-heading">حذف</h4>
                <p class="list-group-item-text">برای حذف مجتمع از سیستم اینجا کلیک کنید</p>
            </a>
        </div>
    </div>
</div>