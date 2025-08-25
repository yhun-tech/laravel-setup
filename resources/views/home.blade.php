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


        <section class="wrapper home">


                    <div class="container header">
                        
                        <span class="h_content">LOGO</span>
                        <nav class="h_content">
                
                            <a href="#">Home</a>
                            <a href="#">About Us</a>
                            <a href="#">More</a>
                            <a href="{{ route("testpage")}}">Go To Link Page</a>
                      
                        </nav>

                    </div>

                    <div class="container auth_wrapper">

                       <form action=" {{url('formsubmitted') }}" class="main_form" method="post">
                            @csrf
                                <ul class="form_box input_box">
                                
                                    <input type="text" name="fullname" id="fullname" placeholder="">
                                    <label for="fullname">FullName:</label>
                                </ul>   

                                <ul class="form_box input_box">  
                            
                                    <input type="email" name="email" id="email" placeholder="">
                                        <label for="email">Email:</label>
                                </ul>

                                <ul class="form_box button_box">
                                
                                    <button type="submit">Submit</button>

                                </ul>
                            
      
                        </form>

      
                    </div>
                 



        </section>

     
        
        
    </body>

    

</html>