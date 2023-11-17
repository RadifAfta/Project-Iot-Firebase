<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Boolean Value</title>
    <meta http-equiv="refresh" content="1">

    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
    <script src="{{ asset('assets/js/config.js') }}" defer></script>
    <script src="{{ asset('assets/js/script.js') }}" defer></script>
</head>

<body>
    <button id="toggleButton">CloseGate</button>
    @if ($isGateOpen)
        <p>Gerbang terbuka!</p>
    @else
        <p>Gerbang tertutup</p>
    @endif
    {{-- <div id="data-container"></div> --}}

</body>

{{-- <script>
    dataRef.on('value', (snapshot) => {
        const data = snapshot.val();

        // Logika untuk memperbarui tampilan
        console.log('Data Updated:', data);

        // Contoh menambahkan data ke dalam elemen HTML
        document.getElementById('data-container').innerHTML = data.message;
    });

    window.location = window.location.href;
    setInterval('autoRefresh()', 4000);
</script> --}}

</html>
