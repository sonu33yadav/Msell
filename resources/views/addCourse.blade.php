<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet">
    <style>
    body {
        background-image: url('https://images.unsplash.com/photo-1556740714-6459f6849944?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
        background-size: cover;
        background-position: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        height: 40px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
    }

    .form-check-label {
        font-weight: normal;
    }

    .btn-primary {
        background-color: #337ab7;
        border-color: #2e6da4;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #23527c;
        border-color: #1d4354;
    }
    </style>
</head>
@if (session('message'))
<div class="alert">{{ session('message') }}</div>
@endif

<body>
    <div class="container">
        <h2 class="text-center">Educational Details</h2>
        <form method="post" action="{{ url('Addcourse') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="dob">
            </div>
            <div class="form-group">
                <label for="education_level">Education Level</label>
                <select class="form-control" id="education_level" name="education_level[]" multiple>
                    <option value="10th">10th</option>
                    <option value="12th">12th</option>
                    <option value="graduation">Graduation</option>
                    <option value="post_graduation">Post-Graduation</option>
                    <option value="phd">PhD</option>
                </select>
            </div>
            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Enter your course">
            </div>
            <div class="form-group">
                <label for="course_duration">Course Duration</label>
                <input type="text" class="form-control" id="course_duration"
                    placeholder="Enter course duration (e.g., 3 years)" name="duration">
            </div>
            <div class="form-group">
                <label for="course_type">Course Type</label>
                <select class="form-control" id="course_type" name="course_type">
                    <option value="">Select course type</option>
                    <option value="regular">Regular</option>
                    <option value="open">Open</option>
                    <option value="online">Online</option>
                </select>
            </div>
            <div class="form-group">
                <label for="year_of_completion">Year of Completion</label>
                <input type="number" class="form-control" id="year_of_completion" name="year_of_completion"
                    placeholder="Enter year of completion">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#education_level').select2({
            placeholder: 'Select Education Level',
            width: '100%',
            theme: 'bootstrap4'
        });
    });
    </script>
</body>

</html>