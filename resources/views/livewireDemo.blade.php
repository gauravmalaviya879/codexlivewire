<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>livewire</title>
    {{-- import style in livewire --}}
    @livewireStyles
</head>
<body>
    
     @for ($i=0;$i<=5;$i++)
     <h2>extend live component</h2>
     @endfor
     @livewire('counter')

    {{-- import the script --}}
    @livewireScripts
</body>
</html>