<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ThemeCustomizer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            feather.replace()

            // var exampleModal = document.getElementById('exampleModal')
            //     exampleModal.addEventListener('show.bs.modal', function (event) {
            //     // Button that triggered the modal
            //     var button = event.relatedTarget
            //     // Extract info from data-bs-* attributes
            //     var recipient = button.getAttribute('data-bs-whatever')
            //     // If necessary, you could initiate an AJAX request here
            //     // and then do the updating in a callback.
            //     //
            //     // Update the modal's content.
            //     var modalTitle = exampleModal.querySelector('.modal-title')
            //     var modalBodyInput = exampleModal.querySelector('.modal-body input')

            //     modalTitle.textContent = 'New message to ' + recipient
            //     modalBodyInput.value = recipient
            // })
        });
    </script>
</head>
<body>
    <div class="container-fluid">
        @include('ThemeCustomizer::partials.header')
        @yield('content')
    </div>
</body>
</html>