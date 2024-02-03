<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
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

 
<form action="/up" method="post">
    @csrf
    <input type="hidden" class="form-control" placeholder="id" id="email" name="id" value="{{$row->id}}">

  <div class="form-group">
  <select value="{{$row->status}}" name="status">
                    <option>draft</option>
                    <option>pending</option>
                    <option>cenceled</option>
                    <option>delivered</option>
                    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>