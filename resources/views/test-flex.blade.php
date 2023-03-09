<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/flex.css') }}">
    <title>Test Grid</title>
</head>
<body>
<div class="container">
    <div class="wrapper">
        <section class="columns">
            <div class="column" id="flex-1">
                <button type="button" class="btn btn-primary btn-sm">{{ "Tambah" }}</button>
                <button type="button" class="btn btn-warning btn-sm">{{ "Import" }}</button>
                <button type="button" class="btn btn-info btn-sm">{{ "Export" }}</button>
            </div>
            <div class="column" id="flex-2">
                <input class="form-control form-control-sm" type="text" placeholder="Search">
            </div>
            <div class="column" id="flex-3">
                <select class="form-select form-control" aria-label="Default select example">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </section>
    </div>
</div>
</body>
</html>
