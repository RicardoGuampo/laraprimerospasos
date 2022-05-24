<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear Post</h1>
    @include('dashboard.fragment._errors-form')
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title">

        <label for="slug">Slug</label>
        <input type="text" name="slug">

        <select name="category_id">
            <option value="">--select--</option>
            @foreach ($categories as $title => $id)
                <option value="{{$id}}">{{$title}}</option>
            @endforeach
        </select>

        <label for="posted">Posteado</label>
        <select name="posted">
            <option value="not">No</option>
            <option value="yes">Si</option>
        </select>   

        <label for="content">Contenido</label>
        <textarea name="content" cols="30" rows="10"></textarea>

        <label for="description">Descripcion</label>
        <textarea name="description" cols="30" rows="10"></textarea>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>