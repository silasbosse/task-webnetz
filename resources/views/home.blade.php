<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Case Studies</title>
</head>
<body>
    <div>
        <h2>{{$heading}}</h2>
        @if(count($studies) == 0)
            <p>Keine Case Studies Gefunden</p>
        @endif

        @foreach($studies as $case)
            <p>{{$case['title']}}</p>
            <h2>{{$case['body']}}</h2>
        @endforeach

</body>
</html>
