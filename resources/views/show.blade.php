<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
</head>
<body>
<table id="table_id" class="table table-striped table-bordered table-active" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>customername</th>
                <th>saleitem</th>
                <th>grandtotal</th>
                <th>cgst</th>
                <th>sgst</th>
                <th>total</th>
                <th>status</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->customername}}</td>
                <td>{{$row->saleitem}}</td>
                <td>{{$row->grandtotal}}</td>
                <td>{{$row->cgst}}</td>
                <td>{{$row->sgst}}</td>
                <td>{{$row->total}}</td>
                <td>{{$row->status}}</td>
                
               
<td>

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$row->id}}">
  action
</button>

<!-- The Modal -->
<div class="modal" id="myModal{{$row->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
      <a href="invoice/{{$row->id}}" class="btn btn-warning">view</a>
        <a href="update/{{$row->id}}" class="btn btn-info">update</a>
      </div>

     
    </div>
  </div>
</div>

    
</td>
                
            </tr>
         @endforeach
        </tbody>
     
    </table>



<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
    $('#table_id').DataTable();
} );</script>

</body>
</html>