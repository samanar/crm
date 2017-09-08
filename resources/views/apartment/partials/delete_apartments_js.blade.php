@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/alert.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/alert.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $(".delete_apartment").click(function () {
                var data_id = $(this).attr("data-id");
                var data_code = $(this).attr('data-code');

                swal({
                    title: 'حذف مجتمع با کد ' + data_code,
                    text: "آیا مطمئنید که میخواهید مجتمع را حذف کنید ؟",
                    type: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#18BC9C',
                    confirmButtonText: 'حذف',
                    cancelButtonText: 'بازگشت',
                    confirmButtonClass: 'btn btn-danger',
                    cancelButtonClass: 'btn btn-success',
                    buttonsStyling: true
                }).then(function () {
                    var data = {
                        _token: "{{ csrf_token() }}",
                        id: data_id
                    };
                    $.ajax({
                        method: "DELETE",
                        url: "/apartment/" + data_id,
                        data: data,
                        complete: function () {
                            location.reload();
                        }
                    });
                });
            });

            $("#delete_apartment").click(function () {
                var data_id = $(this).attr("data-id");
                var data_code = $(this).attr('data-code');

                swal({
                    title: 'حذف مجتمع با کد ' + data_code,
                    text: "آیا مطمئنید که میخواهید مجتمع را حذف کنید ؟",
                    type: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#18BC9C',
                    confirmButtonText: 'حذف',
                    cancelButtonText: 'بازگشت',
                    confirmButtonClass: 'btn btn-danger',
                    cancelButtonClass: 'btn btn-success',
                    buttonsStyling: true
                }).then(function () {
                    var data = {
                        _token: "{{ csrf_token() }}",
                        id: data_id
                    };
                    $.ajax({
                        method: "DELETE",
                        url: "/apartment/" + data_id,
                        data: data,
                        complete: function (data, status) {
                            window.location.href = "/apartment";
                        }
                    });
                });
            });
        });
    </script>
@endsection