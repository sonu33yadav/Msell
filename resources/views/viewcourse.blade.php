<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th,
    .table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table tr:hover {
        background-color: #f5f5f5;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f9fa;
        color: #333;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
        border-color: #dc3545;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Course Details</h1>
        <a href="{{ url('Add') }}" class="btn btn-primary">Add Details</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Dob</th>
                    <th>Courses</th>
                    <th>Course Duration</th>
                    <th>Course Type</th>
                    <th>Complication Year</th>
                    <th>CreatedAt</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>

                    <td>{{$d->name}}</td>
                    <td>{{$d->dob}}</td>
                    <td>
                        @foreach(json_decode($d->course) as $course)
                        {{ $course  }},
                        @endforeach
                    </td>

                    <td>{{$d->course_duration}}</td>
                    <td>{{$d->course_type }}</td>
                    <td>{{$d->year_of_completion  }}</td>
                    <td>{{$d->created_at}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
