<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Quizzes</title>

    <style>
        body {
            background-color: #f8f9fa; 
        }

        nav {
            border-bottom: 2px solid #ffc107; 
        }

        .container {
            background-color: #ffffff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px; 
        }

        h3 {
            color: #007bff; 
        }

        label {
            font-weight: bold; 
        }

        button.btn-primary {
            background-color: #007bff; 
            border: 1px solid #007bff; 
        }

        button.btn-primary:hover {
            background-color: #0056b3; 
            border: 1px solid #0056b3; 
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand h1" href="{{ route('quiz.index') }}">Quizzes</a>
        <div class="justify-content-end">
            <div class="col">
                <a class="btn btn-sm btn-success" href="{{ route('quiz.create') }}">Add Quiz</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Add a Quiz</h3>
            <form action="{{ route('quiz.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Create Quiz</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

