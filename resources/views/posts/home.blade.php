@extends ('../layouts/main')

    @section('header')

        <header class="container header"> 
            
            <div class="h_box logo_div">
                <img class="h_box_c" src="{{ asset('assets/Images/1.jpg')}}" width="50">
            </div>

            <nav class="h_box nav">
                    
                <a class="h_box_c" href="">More</a>
                <a class="h_box_c" href="">About Us</a>
                <a class="h_box_c" href="">Home</a>

            </nav>
        
        </header>

    @endsection

    
    @section('main_content')
    
        <form action=" {{url('formsubmitted') }}" class="content_frames main_form" method="post">
            @csrf
                <ul class="form_box input_box">
                
                    <input type="text" name="fullname" id="fullname" placeholder="">
                    <label for="fullname">FullName:</label>
                </ul>   

                <ul class="form_box input_box">  
            
                    <input type="email" name="email" id="email" placeholder="">
                        <label for="email">Email:</label>
                </ul>

                <ul class="form_box input_box">  
            
                    <input type="text" name="age" id="age" placeholder="">
                        <label for="age">Age</label>
                </ul>

                <ul class="form_box button_box">
                
                    <button type="submit">Submit</button>

                </ul>
                
        </form>


        <div class="content_frames  output_frame">

                <div class="form_box titlebox">
                    <span>Output</span>
                </div>

                <a href="{{ route('posts.create') }}"></a>

                <div class="form_box output_box">

                    <!-- @foreach ($posts as $post)
                        <p>{{ $post->title }}</p>
                        <p>{{ $post->body }}</p>
                    @endforeach -->

                </div>
         
        </div>

    @endsection
    
    @section('footer')
        <!-- @include('footer') -->
    @endsection