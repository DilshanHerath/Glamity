<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" id="addNewForm" action="{{ route('AddItem') }}"  enctype="multipart/form-data">
    @csrf

    <div class="form-row mb-2">
        <div class="col-2">
            <label>Name</label>
        </div>
        <div class="col-10">
            <input name="name" type="text" class="form-control form-control-sm"  maxlength="255" required>
        </div>
    </div>

    <div class="form-row mb-2">
        <div class="col-2">
            <label>Material</label>
        </div>
        <div class="col-10">
            <input name="material" type="text" class="form-control form-control-sm"  maxlength="255" required>
        </div>
    </div>

    <div class="form-row mb-2">
        <div class="col-2">
            <label>price</label>
        </div>
        <div class="col-10">
            <input name="price" type="number" class="form-control form-control-sm"  maxlength="255" required>
        </div>
    </div>

    <div class="form-row mb-2">
        <div class="col-2">
            <label>Cat_id</label>
        </div>
        <div class="col-10">
            <input name="cat_id" type="number" class="form-control form-control-sm"  maxlength="255" required>
        </div>
    </div>

    <div class="form-row mb-2">
        <div class="col-2">
            <label>Image</label>
        </div>
        <div class="col-1">
            <img id="blah"  class="w-100" />
        </div>
        <div class="col-9">
            <input name="image" type="file" class="form-control form-control-sm" required>

            <small class="text-danger"></small>
        </div>
    </div>



    <div class="form-row">
        <div class="col-12 text-right">
            <button type="submit" class="btn btn-primary btn-sm">Add</button>
            <a href="" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</a>
        </div>
    </div>


</form>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Category</div>

                <div class="card-body">

                    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($Category as $object)
                        <tr>
                            <th>{{ $object->id }}</th>
                            <th>{{ $object->name }}</th>
                            <th>
                                <img  src="{{url('storage/'.$object->image)}}"   height="50" class="d-block mx-auto w-100">
                            </th>
                            <th>{{ $object->created_at }}</th>

                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Date</th>
                        </tr>
                        </tfoot>
                    </table>


                </div>


            </div>
        </div>
    </div>
</div>


</body>
</html>
