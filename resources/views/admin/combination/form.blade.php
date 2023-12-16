<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Combination</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{ url('admin/combination/process') }}" method="post">
            @csrf
            <label for="Combination_name">Select Combination: </label>
            <select name="Combination_name" id="Combination_name">
                @foreach($combinations as $id => $combName)
                    <option value="{{ $combName }}">{{ $combName }}</option>
                @endforeach
            </select>

            <label>Select Subjects: </label>
            @foreach($subjects as $id => $sCode)
                <input type="checkbox" name="S_Codes[]"  value="{{ $sCode }}">{{ $sCode }}
            @endforeach

            <br><br><br>
            <input type="submit" value="Submit">
    </form>

</body>
</html>