<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2>Product</h2>
    <p>Select the category of product</p>
    <div class="dropdown">
        <button type="button" class="btn btn-info  dropdown-toggle" data-toggle="dropdown">
            Dropdown button
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#summer">Summer collection</a>
            <a class="dropdown-item" href="#winter">Winter collection</a>
            <a class="dropdown-item" href="#handbags">Handbags</a>
            <a class="dropdown-item" href="#boots">Boots </a>
        </div>
    </div>

    <table class="table thead-dark table-striped table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Total in Stock</th>
            <th>Price</th>
            <th>Images</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <ul style="list-style-type: none">
            <li>
        <tr>
            <form action="/upload"  method="get" enctype="multipart/form-data">


                <td> <input type="file" id="image" name="image"></td>
                <td><button type="submit" class="btn btn-primary">Add</button></td>
            </form>
        </tr>
            </li>
        </ul>

        </tbody>
    </table>
</div>

</body>
</html>
