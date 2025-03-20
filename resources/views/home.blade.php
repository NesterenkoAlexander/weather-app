<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Погода</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Погода в вашем городе</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('weather') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="city" class="form-control" placeholder="Введите город" required>
                        <button class="btn btn-outline-secondary" type="submit">Узнать погоду</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>