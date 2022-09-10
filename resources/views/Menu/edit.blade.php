<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add a Menu Item</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <div class="card-header">
                    Create Menu Item
                    <a href="{{ route('Menu.create') }}" class="btn btn-primary float-right">Create Menu item</a>
                </div>

                <div class="card-body">


                    <form action="{{ route('Menu.update', ['Menu'=>$menu->id]) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group" id="createform">
                            <label for="item_name">Item Name :</label>
                            <input type="name" class="form-control" id="item_name" value="{{$menu->item_name}}" name="item_name" required>
                            <span class="text-danger">{{ $errors->first('item_name') }}</span>
                            <label for="item_price">Item Price :</label>
                            <input type="text" class="form-control" id="item_price" value="{{$menu->item_price}}" name="item_price" required>

                            <div class="mb-3">
                                <label for="item_image">Item Image :</label>
                                <img src="{{ asset('storage/uploads//menu_items_images/'.$menu->item_image) }}" alt="{{ $menu->item_image }}" width="200" class="img-thumbnail"> <br>

                                <input type="file" class="form-control" id="item_image" name="item_image">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save Item</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
