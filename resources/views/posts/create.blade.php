<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

</head>


        <body>

            <h1>Create Post!</h1>

            <form method="POST" action={{ route('posts.store') }}>
                
                @csrf
                <label>Title:</label>
                <input type="text" name="title" value="{{ old('title') }}">

                <label>Body:</label>
                <textarea name="body">{{ old("body") }} </textarea>

                <button type="submit">Save</button>

            </form>
        
        </body>

</html>