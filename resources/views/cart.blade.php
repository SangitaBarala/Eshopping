
<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
    </head>
<body>


    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @php
                $total = 0;
            @endphp
            @if(session('cart'))
                @foreach(session('cart') as $id => $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-4 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive" /></div>
                                <div class="col-sm-8">
                                    <h4 class="no-margin">Product 1</h4>
                                    <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">$1.99</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td data-th="Subtotal" class="text-center">1.99</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total 1.99</strong></td>
            </tr>
            </tfoot>
        </table>

        <div class="totals">
            <div class="totals-item">
                <label>Subtotal</label>
                <div class="totals-value" id="cart-subtotal"></div>
            </div>
            <div class="totals-item">
                <label>Tax (5%)</label>
                <div class="totals-value" id="cart-tax"></div>
            </div>
            <div class="totals-item">
                <label>Shipping</label>
                <div class="totals-value" id="cart-shipping"></div>
            </div>
            <div class="totals-item totals-item-total">
                <label>Grand Total</label>
                <div class="totals-value" id="cart-total"></div>
            </div>
        </div>
        <button class="btn btn-success">Checkout</button>
        <a href="/mainPage"><button class="btn btn-dark">Continue shopping</button></a>

    </div>

</body>
</html>
