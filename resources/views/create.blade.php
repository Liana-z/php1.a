<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать заявку</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Создать заявку</h1>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="theme">Тема</label>
                <input type="text" class="form-control @error('theme') is-invalid @enderror" id="theme" name="theme" value="{{ old('theme') }}">
                @error('theme')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email для связи</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Создать заявку</button>
        </form>
    </div>
</body>
</html>
