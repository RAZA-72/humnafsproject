<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Product Data</title>
</head>
<body>

<h2>Import Product Data</h2>

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div style="color: red;">
        {{ session('error') }}
    </div>
@endif

<form action="<?= base_url('/upload');?>" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="excel_file">Choose Excel File:</label>
    <input type="file" name="excel_file" required>
    <br><br>

    <button type="submit">Upload Data</button>
</form>

</body>
</html>
