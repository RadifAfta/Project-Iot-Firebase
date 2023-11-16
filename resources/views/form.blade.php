<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contoh Form</title>
</head>

<body>

    <div class="container">
        <form action="{{ route('send') }}" method="POST">
            @csrf
            <h2>Formulir Kontak</h2>

            <label for="id">id:</label>
            <input type="text" id="id" name="id" value="{{ $cardId }}" disabled>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Kirim</button>
        </form>
    </div>

</body>

</html>
