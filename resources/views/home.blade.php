<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        .btn {
            margin-top: 10px;
        }

        .btn-primary, .btn-success {
            width: 100%;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .delete-btn {
            width: 100px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>CRUD</h2>
    <div class="d-flex justify-content-end">
        <a href="{{ route('create') }}">
            <button class="btn btn-success">Create</button>
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($stDatas as $stData)
            <tr>
                <td>{{ $stData->id }}</td>
                <td>{{ $stData->name }}</td>
                <td>{{ $stData->email }}</td>
                <td>{{ $stData->contact }}</td>
                <td>******</td> <!-- Password is hidden for security purposes -->
                <td>
                <a href="{{ route('edit', $stData->id) }}">
                        <button class="btn btn-md btn-success me-1 p-1">edit</button>
                      </a>
                    <form action="{{ route('delete', $stData->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
