<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>All Items</title>
</head>
<body>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        @foreach($menu as $menu)
        <tr>
            <td>{{ $menu->item_name }}</td>
            <td>{{ $menu->item_price }}</td>
            <td><img src="{{ asset('/storage/uploads/menu_items_images/' . $menu->item_image) }}" style="width: 150px; height:100px;" alt=""></td>
            <td>
                <a href="{{ route('Menu.edit', ['Menu'=> $menu->id]) }}" class="btn btn-xs btn-info">Edit</a>
                <form action="{{ route('Menu.destroy', ['Menu'=> $menu->id]) }}" method="POST" style="display: inline-block;">
                    @method('DELETE')
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                </form>

            </td>

        </tr>
        @endforeach
    </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
