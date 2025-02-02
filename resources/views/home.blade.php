<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>crud</h2>
    <br>
    <a href="{{route('create')}}">
        <button class="btn btn-md btn-success">Create</button>
    </a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Password</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($stDatas as $stData)
            <tr>
                <td>{{ $stData->id }}</td>
                <td>{{ $stData->name }}</td>
                <td>{{ $stData->contact }}</td>
                <td>
                    <form action="{{ route('delete', $stData->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
