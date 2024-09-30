<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
   <div class="justify-content-center">
        <div class="card mt-3">
            <div class="bg-secondary m-5">
                <h2 class="text-center text-light  pt-10 pb-10"> Hush kelibsiz {{$user->name}}! </h2>
            </div>
            <div style="border-radius:10px;background-color:#F5F5F5;padding:40px; ">
                <form method="Post" action="{{ route('result_store') }}" class="form-check">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="user" value="{{ $user->id }}">
                    @foreach($questions as $question)
                    <div class="card-header mb-3">
                       {{ $question->id }} . {{ $question->question_text }} 
                        <input type="hidden" name="data[{{ $loop->index }}][question_id]" value="{{ $question->id }}">
                    </div>
                    <ul type="none" class="list-group list-group-flush" style="margin-bottom: 20px;">
                        <li class="list-group-item">
                            <input type="radio" name="data[{{$loop->index}}][option]" id="answer1" value="{{ $question->option1 }}">
                            <label for="option1">{{ $question->option1 }}</label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" name="data[{{$loop->index}}][option]" id="answer2" value="{{ $question->option2 }}">
                            <label for="option2">{{ $question->option2 }}</label>
                        </li>
                    </ul>
                    <hr>
                    @endforeach
                    <div class="card">
                            <button type="submit" style="float:right" class="btn btn-primary btn-lg">Testniy Yakunlash</button>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</body>
</html>