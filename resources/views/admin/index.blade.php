<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.css">
</head>
<body>

    <h1>
        Admin Panel
    </h1>


    <div class="container-fluid">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
            <tbody> 
                @if ( count($posts) > 0 )
                    @foreach ($posts  as $key => $post)
                        <tr>
                            <th> {{ $post->id }} </th>
                            <th> {{ $post->title }} </th>
                            <th> {{ $post->body }} </th>
                            <th> {{ $post->created_at }} </th>
                            <th> {{ $post->updated_at }} </th>
                            <th> 
                                <a href="#" class="btn btn-sm btn-success">View</a>    
                                <a href="#" class="btn btn-sm btn-info">Edit</a>    
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>    
                            </th>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    
</body>
</html>