<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle Boolean Value</title>

    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>

</head>

<body>
    <button id="toggleButton" onclick="GateClosed()">CloseGate</button>


</body>

<script>
    function GateClosed(){
        let status;
        alert('gerbang sukses di tutup ');

    }
    
</script>

<script type="module">
    const firebaseConfig = {
        apiKey: "AIzaSyBe03MvW0liDx7TBsGfi8KRT6XOHYsDNMk",
        authDomain: "cobatest-c4366.firebaseapp.com",
        databaseURL: "https://cobatest-c4366-default-rtdb.asia-southeast1.firebasedatabase.app",
        projectId: "cobatest-c4366",
        storageBucket: "cobatest-c4366.appspot.com",
        messagingSenderId: "352035156157",
        appId: "1:352035156157:web:5c2554c707e5131ff9c7d4",
        measurementId: "G-3M9Z9TR7DT"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    const database = firebase.database();

    status = database.ref('/isGateOpen').set(false);
</script>

</html>
