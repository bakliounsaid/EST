<!DOCTYPE html>
<html @if (App::isLocale('ar')) dir="rtl" @endif>

<head>
    <title>{{ $title }}</title>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Fonts-->
        <link rel="shortcut icon" href="{{ asset('images/logo.jpg')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!--=======-->

        <!-- bootstrap 4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

        <!-- Alpine JS -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- stylesheets -->
        <!-- Custom Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('assets/css/admin-style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
    </head>
</head>

<body>
    <div class="content-wrapper d-flex ">
        @livewire('admin.layout.side-bar')
        <div class="main-container w-100">
            @livewire('admin.layout.nav-bar')
            {{ $slot }}
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <!-- Bootstrap 4.6.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

    @include('sweetalert::alert')
    @livewireScripts
    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/afqr2pea9mdtr823pnt8yi7j8yt8h8zw5syzs8kn8fxdnrp8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/printThis.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script type="text/javascript">
        var trixVariables = [];
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('triggerDelete', (
                records, event = "deleteRecords") => {
                Swal.fire({
                    title: @json(__('Are you sure')),
                    text: @json(__('This record and its details will be permanently deleted')),
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: @json(__('Delete')),
                    cancelButtonText: @json(__('Cancel'))
                }).then((result) => {
                    //if user clicks on delete
                    if (result.value) {
                        Livewire.emit(event, records);
                    } else {
                        Swal.fire({
                            title: @json(__('Operation Cancelled')),
                            icon: 'warning'
                        });
                    }
                });
            });
            Livewire.on('triggerUpdate', (
                param1, param2 = null, event = "updateRecords") => {
                Swal.fire({
                    title: @json(__('Are you sure')),
                    text: @json(__('This record will be permanently updated')),
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: @json(__('Update')),
                    cancelButtonText: @json(__('Cancel'))
                }).then((result) => {
                    //if user clicks on update
                    if (result.value) {
                        Livewire.emit(event, param1, param2);
                    } else {
                        Swal.fire({
                            title: @json(__('Operation Cancelled')),
                            icon: 'warning'
                        });
                    }
                });
            });
            Livewire.on('triggerStockDelete', (
                records, event = "deleteStockRecords") => {
                Swal.fire({
                    title: @json(__('Are you sure')),
                    text: @json(__('This record and its details will be permanently deleted')),
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: @json(__('Delete')),
                    cancelButtonText: @json(__('Cancel'))
                }).then((result) => {
                    //if user clicks on delete
                    if (result.value) {
                        Livewire.emit(event, records);
                    } else {
                        Swal.fire({
                            title: @json(__('Operation Cancelled')),
                            icon: 'warning'
                        });
                    }
                });
            });
            Livewire.on('showAlert', (
                params
            ) => {
                Swal.fire({
                    title: params.title,
                    text: params.text,
                    icon: params.icon
                });
                if (params.modal)
                    $(`#${params.modal}`).modal('hide')
            });
        })
    </script>
    @stack('scripts')
</body>

</html>
