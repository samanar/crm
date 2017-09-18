@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/alert.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/alert.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(".engine_room_checklist_delete").click(function () {
                var data_id = $(this).attr("data-id");
                var data_code = $(this).attr('data-code');
                swal({
                    title: 'حذف چک لیست آسانسور مجتمع با کد ' + data_code,
                    text: "آیا مطمئنید که میخواهید چک لیست آسانسور را حذف کنید ؟",
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
                        url: "/engine_room_checklist/" + data_id,
                        data: data,
                        complete: function () {
                            location.reload();
                        }
                    });
                });
            });


            $("#delete_engine_room_checklist").click(function () {
                var data_id = $(this).attr("data-id");
                var data_code = $(this).attr('data-code');

                swal({
                    title: 'حذف چک لیست آسانسور مجتمع با کد ' + data_code,
                    text: "آیا مطمئنید که میخواهید چک لیست آسانسور را حذف کنید ؟",
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
                        url: "/engine_room_checklist/" + data_id,
                        data: data,
                        complete: function (data, status) {
                            window.location.href = "/engine_room_checklist";
                        }
                    });
                });
            });
        });
    </script>
@endpush