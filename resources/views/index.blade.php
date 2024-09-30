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
  <div class="row justify-content-center">
    <div class="col-md-10 mb-3 pt-5">
        <h2 class="mb-3">Kafedralar</h2>
        <div class="card">
            <!-- Select Dropdown -->
            <select class="form-select" aria-label="Default select example" id="group-select">
                <option disabled selected>Kafedrani tanlang</option>
                @foreach($groups as $group)
                    <option value="{{ route('getByGroup', $group->group_name) }}">{{ $group->group_name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @foreach($users as $user)
    <div class="col-md-10 mb-3">
        <div class="card">
            <div class="m-3">
                <!-- User Information Table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>F.I.SH</th>
                            <th>Kafedra</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->group_name }}</td>
                        </tr>
                    </tbody>
                </table>

                <h3>Natijalar</h3>
                <!-- Results Table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Shkala nomi</th>
                            <th>Natija 1</th>
                            <th>Natija2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Asabiylashganlik</th>
                            <td>{{ $user->scale1 }}</td>
                            <td>{{ $user->result->scale1 }}</td>
                        </tr>
                        <tr>
                            <th>O'z-o'zidan paydo bo'ladigan tajovuzkorlik</th>
                            <td>{{ $user->scale2 }}</td>
                            <td>{{ $user->result->scale2 }}</td>
                        </tr>
                        <tr>
                            <th>Ruhiy siqilish</th>
                            <td>{{ $user->scale3 }}</td>
                            <td>{{ $user->result->scale3 }}</td>
                        </tr>
                        <tr>
                            <th>Serjahllik, serzardalik, jizzakilik</th>
                            <td>{{ $user->scale4 }}</td>
                            <td>{{ $user->result->scale4 }}</td>
                        </tr>
                        <tr>
                            <th>Muloqotchanlik</th>
                            <td>{{ $user->scale5 }}</td>
                            <td>{{ $user->result->scale5 }}</td>
                        </tr>
                        <tr>
                            <th>Og'irlik, vazminlik</th>
                            <td>{{ $user->scale6 }}</td>
                            <td>{{ $user->result->scale6 }}</td>
                        </tr>
                        <tr>
                            <th>O'ta tajovuzkorlik</th>
                            <td>{{ $user->scale7 }}</td>
                            <td>{{ $user->result->scale7 }}</td>
                        </tr>
                        <tr>
                            <th>Tortinchoqlik</th>
                            <td>{{ $user->scale8 }}</td>
                            <td>{{ $user->result->scale8 }}</td>
                        </tr>
                        <tr>
                            <th>Ochiqlik, oshkoralik</th>
                            <td>{{ $user->scale9 }}</td>
                            <td>{{ $user->result->scale9 }}</td>
                        </tr>
                        <tr>
                            <th>Ekstroversiya-introversiya</th>
                            <td>{{ $user->scale10 }}</td>
                            <td>{{ $user->result->scale10 }}</td>
                        </tr>
                        <tr>
                            <th>Ta'sirchanlik, o'zgaruvchanlik</th>
                            <td>{{ $user->scale11 }}</td>
                            <td>{{ $user->result->scale11 }}</td>
                        </tr>
                        <tr>
                            <th>Mardlik-nazokatlik</th>
                            <td>{{ $user->scale12 }}</td>
                            <td>{{ $user->result->scale12 }}</td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
    @endforeach

    <!-- Pagination -->
     @if(count($users) > 2)
        <div class="card col-md-10 pt-3">
            {{ $users->links() }}
        </div>
    @endif
  </div>


<script>
    document.getElementById('group-select').addEventListener('change', function() {
        var selectedValue = this.value;
        if (selectedValue) {
            window.location.href = selectedValue; // Redirect to selected group's URL
        }
    });
</script>

</body>
</html>
