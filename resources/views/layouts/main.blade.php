<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <body>  


        <section class="wrapper">

            <header class="container header">
                @yield('header')
            </header>
            
            <div class="container sidebar">
              @yield('sidebar')
            </div>

            <main class="container main_content">
                @yield('main_content')
                
            </main>

            <footer class="container footer">
                @yield('footer')    
            </footer>
                    
                 
        </section>

     
        
        
    </body>

    

</html>