<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>HGenerate QR Code</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                <form action="{{route('view')}}" method="GET">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Test Text</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="test-text" name="text">
                        <div id="test-text" class="form-text">Type Any Text Or Number To Generate The QR Code.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
