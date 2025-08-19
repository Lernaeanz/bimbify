<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Open Register</title>
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet" />
    <style>
        body {
            background-image: url("/img/foto4.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            z-index: 10;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            color: #2d2d2d;
        }

        .text-yellow {
            color: #FFBE1A;
        }

        .button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #FFBE1A;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            font-weight: 700;
            transition: all 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #fbbd05;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        select,
        input[type="time"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input,
        .form-group select {
            margin-bottom: 10px;
        }

        .tab-button {
            padding: 10px 20px;
            width: 48%;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .tab-button:hover {
            background-color: #ececec;
        }

        .tab-active {
            background-color: #FFBE1A;
            color: white;
        }

        /* Back Button Styling */
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            color: #333;
            text-align: center;
            border-radius: 50%;
            cursor: pointer;
            font-size: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: rgba(255, 255, 255, 0.8);
        }

        .back-button svg {
            width: 24px;
            height: 24px;
        }
    </style>
</head>

<body>

    <!-- Tombol Back dengan Panah Kiri -->
    <a href="/manajemen_pertanyaan" class="back-button">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </a>

    <div class="form-container">
        <h1>Open Register</h1>

        <!-- Dropdown untuk memilih Quota Limit -->
        <!-- <div class="form-group">
            <label for="quota">Quota Limit</label>
            <select id="quota">
                <option value="quota">Quota Limit</option>
                <option value="time">Time Limit</option>
            </select>
        </div> -->

        <!-- Pilihan Online atau Offline -->
        <div class="form-group">
            <button id="offline-tab" class="tab-button tab-active">Offline</button>
            <button id="online-tab" class="tab-button">Online</button>
        </div>

        <!-- Formulir Waktu Mulai dan Selesai untuk Online -->
        <div id="online-form" class="hidden">
            <div class="form-group">
                <label for="start-time">Waktu Mulai</label>
                <input id="start-time" type="time" />
            </div>
            <div class="form-group">
                <label for="end-time">Waktu Berakhir</label>
                <input id="end-time" type="time" />
            </div>
        </div>

        <!-- Formulir Jumlah Antrian dan Sisa Kuota untuk Offline -->
        <div id="offline-form">
            <div class="form-group">
                <label for="queue">Jumlah Antrian</label>
                <input id="queue" type="number" placeholder="20" />
            </div>
            <!-- <div class="form-group">
                <label for="remaining-spot">Sisa Kuota</label>
                <input id="remaining-spot" type="number" placeholder="5" />
            </div> -->
        </div>

        <!-- Tombol Mulai -->
        <button id="start-button" class="button">Mulai</button>

        <!-- Nama Pembuat -->
        <div class="text-center text-sm text-gray-600 mt-6">
            Khainur Reza Maulana
        </div>
    </div>

    <script>
        // Event listener untuk memilih antara Online dan Offline
        document.getElementById('offline-tab').addEventListener('click', function () {
            document.getElementById('offline-form').classList.remove('hidden');
            document.getElementById('online-form').classList.add('hidden');
            this.classList.add('tab-active');
            document.getElementById('online-tab').classList.remove('tab-active');
        });

        document.getElementById('online-tab').addEventListener('click', function () {
            document.getElementById('online-form').classList.remove('hidden');
            document.getElementById('offline-form').classList.add('hidden');
            this.classList.add('tab-active');
            document.getElementById('offline-tab').classList.remove('tab-active');
        });
    </script>

</body>

</html>
