<!DOCTYPE html>
<html lang="en">
<head>
  <title>Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3"> 
    <table class="table table-striped"> 
        <tr>
            <th>ID</th>
            <th>F.I.O</th>
            <th>Kafedra</th>
        </tr>
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->group_name }}</td>
        </tr>
    </table>
    <hr>
    <h2>Natijalar</h2>
    <hr>
  <table class="table table-striped">
        <tr>
            <th>Asabiylashganlik</th>
            <td>{{ $user->result->scale1 }}</td>
            <td>{{ $user->scale1 }}</td>
        </tr>
        <tr>
            <th>O'z-o'zidan paydo bo'ladigan tajovuzkorlik</th>
            <td>{{ $user->result->scale2 }}</td>
            <td>{{ $user->scale2 }}</td>
        </tr>
        <tr>
            <th>Ruhiy siqilish</th>
            <td>{{ $user->result->scale3 }}</td>
            <td>{{ $user->scale3 }}</td>
        </tr>
        <tr>
            <th>Serjahllik, serzardalik, jizzakilik</th>
            <td>{{ $user->result->scale4 }}</td>
            <td>{{ $user->scale4 }}</td>
        </tr>
        <tr>
            <th>Muloqotchanlik</th>
            <td>{{ $user->result->scale5 }}</td>
            <td>{{ $user->scale5 }}</td>
        </tr>
        <tr>
            <th>Og'irlik, vazminlik</th>
            <td>{{ $user->result->scale6 }}</td>
            <td>{{ $user->scale6 }}</td>
        </tr>
        <tr>
            <th>O'ta tajovuzkorlik</th>
            <td>{{ $user->result->scale7 }}</td>
            <td>{{ $user->scale7 }}</td>
        </tr>
        <tr>
            <th>Tortinchoqlik</th>
            <td>{{ $user->result->scale8 }}</td>
            <td>{{ $user->scale8 }}</td>
        </tr>
        <tr>
            <th>Ochiqlik, oshkoralik</th>
            <td>{{ $user->result->scale9 }}</td>
            <td>{{ $user->scale9 }}</td>
        </tr>
        <tr>
            <th>Ekstroversiya-introversiya</th>
            <td>{{ $user->result->scale10 }}</td>
            <td>{{ $user->scale10 }}</td>
        </tr>
        <tr>
            <th>Ta'sirchanlik, o'zgaruvchanlik</th>
            <td>{{ $user->result->scale11 }}</td>
            <td>{{ $user->scale11 }}</td>
        </tr>
        <tr>
            <th>Mardlik-nazokatlik</th>
            <td>{{ $user->result->scale12 }}</td>
            <td>{{ $user->scale12 }}</td>
        </tr>
  </table>
</div>

</body>
</html>
