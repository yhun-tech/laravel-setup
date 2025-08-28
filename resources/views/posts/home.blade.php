@extends ('../layouts/main')

    @section('header')

        <div class="h_box title_div"> 

            <span class="h_box_c">Worksapce</span>

        </div>

       <div class="h_box logo_div">
    
            <img class="h_box_c" src="{{ asset('assets/Images/1.jpg')}}" width="50">

        </div>
    
    @endsection

    
    @section('sidebar')
        <ul class="logo_frame">
            <span>C R U D</span>
        </ul>
        <ul class="button_frame">
            <a href="" class="sidebar-links dashboard">Dashboard</a>
            <a href="" class="sidebar-links reports">Reports</a>
            <a href="" class="sidebar-links "></a>
        </ul>
    @endsection



    @section('main_content')
    
        <div class="content_frames  output_frame">

            <!-- HEADER -->
            <div class="form_box header_box">

                <ul class="header_part left">
                    <span>Laravel Table</span>
                </ul>
                <ul class="header_part right">
                    <a href="{{ route('posts.create') }}">Create</a>
                </ul>
        
            </div>
            

            <!-- OUTPUT -->
            <div class="form_box output_box">


                <ul class="main_content_box">


                    <ol class="table_holder">

                        <table>  

                            <tr class="header_tr">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
       
                            @foreach ($posts as $post)
                            
                                <tr>
                                    <td class="data">{{ $post->id }}</td>
                                    <td class="data">{{ $post->title }}</td>
                                    <td class="data">{{ $post->body }}</td>
                                    <td class="data">{{ $post->created_at }}</td>
                                    <td class="data">{{ $post->updated_at }}</td>
                                    <td class="data action_frame">

                                        <a href="#" class="action-btn edit">Edit</a>
                                        <a href="#" class="action-btn delete">Delete</a>

                                    </td>
                                </tr>

                            @endforeach 

                        </table>                            

                    </ol>
              
                </ul>

            </div>

            <!-- END OF OUTPUT BOX -->
        </div>

    @endsection
