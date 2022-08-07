<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Counter</title>
        <livewire:styles />
        @vite('resources/css/app.css')
    </head>
    <body>
        <div>
            <livewire:counter />
        </div>
        <livewire:scripts />
        @vite('resources/js/app.js')
    </body>
</html>
