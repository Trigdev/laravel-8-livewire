<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/all.css') }}" type="text/css" rel="stylesheet">
    <title>Livewire</title>
    <style> 
        svg {
            width: 25px; 
            height: 25px;
        }
    </style>
    @livewireStyles 
</head>
<body>
    {{ $slot }}

    @livewireScripts 
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"> </script>
    <script src="{{ asset('assets/bootstrap/js/all.min.js') }}"> </script>      
    <script> 
        window.livewire.on('studentAdded', () => {
            $("#addStudent").modal('hide');
        });

        window.livewire.on('studentUpdated', () => {
            $("#updateStudent").modal('toggle'); 
        }); 

        window.livewire.on('fileUploaded', () => {
            $("#form-upload")[0].reset(); 
        });

        window.livewire.on('imagesUploaded', () => {
            $("#upload-images")[0].reset(); 
        });
    </script>   
</body>
</html>