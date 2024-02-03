<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">


        <div class="col-md-6">
            <table class="table table-dark">

                <tr>
                    <th colspan="2">
                        <center>Product Invoice</center>
                    </th>
                </tr>
                <tr>

                    <th>id</th>
                    <td>{{$row->id}}</td>
                <tr>
                    <th>customername</th>
                    <td>{{$row->customername}}</td>
                </tr>
                <tr>
                    <th>saleitem</th>
                    <td>{{$row->saleitem}}</td>
                </tr>

                <tr>
                    <th>grandtotal</th>
                    <td>{{$row->grandtotal}}</td>
                </tr>
                <tr>
                    <th>cgst</th>
                    <td>{{$row->cgst}}</td>
                </tr>

                <tr>
                    <th>sgst</th>
                    <td>{{$row->sgst}}</td>
                </tr>

                <tr>
                    <th>total</th>
                    <td>{{$row->total}}</td>
                </tr>
                <tr>
                    <th>status</th>
                    <td>{{$row->status}}</td>
                </tr>
                </tr>


            </table>
        </div>
    </div>
</body>

</html>