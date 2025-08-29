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

        @section('logo')
        @endsection

        @section('buttons')
          <a href="" class="sidebar-links dashboard">Dashboard</a>
          <a href="" class="sidebar-links reports">Reports</a>
        @endsection

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
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <!-- OUTPUT -->
            <div class="form_box output_box">


                <ul class="main_content_box">


                    <ol class="table_holder">
                        

                        <table>  

                            <tr class="header_tr">
                                <th class="theader" id="id-header">ID</th>
                                <th class="theader" id="title-header">Title</th>
                                <th class="theader" id="body-header">Body</th>
                                <th class="theader" id="category-header">Category</th>
                                <th class="theader" id="created-header">Created At</th>
                                <th class="theader" id="updated-header">Updated At</th>
                                <th class="theader" id="action-header">Actions</th>
                            </tr>
       
                            @foreach ($posts as $post)
                            
                                <tr>
                                    <td class="data" id="id-data">{{ $post->id }}</td>
                                    <td class="data" id="title-data">{{ $post->title }}</td>
                                    <td class="data" id="body-data">{{ $post->body }}</td>
                                    <td class="data" id="category-data">{{ $post->category }}</td>
                                    <td class="data" id="created-data">{{ $post->created_at }}</td>
                                    <td class="data" id="updated-data">{{ $post->updated_at }}</td>
                                    <td class="data" id="action-frame">

                                        <a href="{{ route('posts.edit',$post->id) }}" class="action-btn edit">Edit</a>
                                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="action-btn delete" onclick="return confirm('Are You Sure You Want To Delete?')">Delete</button>
                                        </form>

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
