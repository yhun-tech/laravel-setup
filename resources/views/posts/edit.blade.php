@extends('layouts.main')

    @vite('resources/css/edit.css')


    @section('main_content')

        @section('sidebar')
            @section("logo")
            @endsection

            @section('buttons')
              <a href="" class="sidebar-links dashboard">Dashboard</a>
              <a href="" class="sidebar-links reports">Reports</a>
            @endsection

        @endsection

            <!-- Update the input base on posts requet update -->
        <form class="edit_form"  action="{{ route('posts.update',$post->id) }}" method="PUT">

            @csrf
            @method('PUT') <!-- TELLS LARAVEL TO TELL THIS AS PUT REQUEST -->

                <ul class="form_box input_box">         
             
                    <input type="text" placeholder="" name="title" value="{{ old('title', $post->title) }}" >
                    <label>Title</label>

                </ul>
                <ul class="form_box input_box">
                      
                    <textarea name="body" placeholder="">{{ old('body', $post->body) }} </textarea>
                    <label>Body:</label>

                </ul>


                <ul class="form_box input_box">

                    <input name="category" value="{{ old('category', $post->category) }}" placeholder=""></input>
                    <label>Category</label>

                </ul>
     
                <!-- <ul class="form_box ">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error )
                            <p>{{ $error }}</p>
                        @endforeach

                    @endif

                </ul> -->

                <ul class="form_box">

                    <button id="edit-btn" type="submit">Save</button>
                
                </ul>

            
        </form>

    @endsection

    <script src="../../js/app.js"></script>