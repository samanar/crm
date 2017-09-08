@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/alert.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/alert.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $(".delete_apartment").click(function () {
                var data_id = $(this).attr("data-id");
                swal({
                    title: "حذف مجتمع با کد " + data_id,
                    text: "آیا مطمئنید که میخواهید مجتمع را حذف کنید",
                    type: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'حذف',
                    cancelButtonText: 'بازگشت',
                    confirmButtonClass: 'btn btn-danger',
                    cancelButtonClass: 'btn btn-info',
                });
            });
        });
    </script>
@endsection