<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post"  action="{{route('store')}}">
    @csrf
  <div>
    Name:
    <input type="text" name="name"><br><br>
    Email:
    <input type="email" name="email" id=""><br><br>
    Contact:
    <input type="text" name="contact" id=""><br><br>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>