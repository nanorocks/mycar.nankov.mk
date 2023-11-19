<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <title>BASE INFORMATION MANAGER!</title>
    @livewireStyles
</head>

<body>
    <main>
        <div class="container text-center text-muted small">
            You're logged in as: {{ Auth::user()->name }}
        </div>

        <livewire:create-edit-base-information />

        <div class="container">
            <hr />
            <h4>Needed Service
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-link small">Go back</a>
                <button class="btn btn-sm btn-link small" onclick="window.location.reload()">Create new</button>
            </h4>

            <livewire:base-information-table isEditMode="true" />
        </div>
    </main>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    @livewireScripts
</body>

</html>
