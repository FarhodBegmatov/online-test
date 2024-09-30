<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

</style>
</head>
    <body>

    <form action="{{ route('store') }}" method="post">
        @csrf
        @method('POST')
    <div class="imgcontainer">
        <h2>Frayburg Psixologik testi</h2>
        </div>

        <div class="container">
            <label for="uname"><b>F.I.SH</b></label>
            <input type="text" placeholder="F.I.SH ni kiriting" name="uname" value="{{ old('uname') }}" required>

            <label for="group_name"><b>Kafedra</b></label>
            <input type="text" placeholder="Guruhingizni kiriting" name="group_name" value="{{ old('group_name') }}" required>
                
            <button type="submit">Kirish</button>
        </div>

    </form>

    </body>
</html>
