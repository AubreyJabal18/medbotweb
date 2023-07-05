<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @if(Session::has('download.qrcode'))
        <meta http-equiv="refresh" content="5;url={{ Session::get('download.qrcode') }}">
    @endif --}}
    <title>Dashboard</title>
</head>
<body>

    @if(Session::has('id'))
        <script>
            const id = {{session()->get('id')}};
            window.open('/get/qrcode?id='+id, '_self');
        </script>
    @endif


    
</body>
</html>