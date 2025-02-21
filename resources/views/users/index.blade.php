<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users List</title>
</head>

<body>
<h1>{{$title}}</h1>
<x-fundfairylayout>
    <ul>
        @forelse($users as $user)
            <li>{{ $user }}</li>
        @empty
            <li>No users Found</li>
        @endforelse
    </ul>
</x-fundfairylayout>

</body>
</html>
