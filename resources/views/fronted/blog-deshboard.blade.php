<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>This is a deshboard</h2>
    <h2>SideBar</h2>
    <hr>
    <br>
    <ul>
        @can('admin')
        <li>Backup</li>
        <li>Settings</li>
        <li>adminpanel</li>
        @endcan
        @can('editor')
        <li>user</li>
        <li>category</li>
        <li>blog</li>
        <li>tags</li>
        @endcan
       @can('author')
       <li>post</li>
       <li>view</li>
       <li>comment</li>
       <li>shere</li>
       @endcan
    
    </ul>
</body>
</html>