@if (session()->has('message'))
    <script>
        swal({
            buttons: false,
            text: "{{ session('message') }}",
            timer: 3000,
            footer: false,
        });
    </script>
@endif
