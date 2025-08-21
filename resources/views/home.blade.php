<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

</head>

        <body>

            <p>Home</p>
            <a href="{{ route("testpage")}}">Go To Link Page</a>

        </body>



        
</html>