<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<h1 class="text-3xl font-bold mt-10 mb-6 text-center">Open Register</h1>

<!-- Open Register Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <!-- Online Register Card -->
    <div id="online-card" class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 text-center">
        <h2 class="text-xl font-semibold text-blue-600">Online</h2>
        <div class="mt-4 space-y-2">
            <p class="text-sm">Status: <span class="text-green-500">✔️ Active</span></p>
            <p class="text-sm">Waktu Mulai: <strong>08:00</strong></p>
            <p class="text-sm">Waktu Berakhir: <strong>12:00</strong></p>
        </div>
        <button class="mt-6 bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition-colors">
            Open Register
        </button>
    </div>

    <!-- Offline Register Card -->
    <div id="offline-card" class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 text-center">
        <h2 class="text-xl font-semibold text-gray-600">Offline</h2>
        <div class="mt-4 space-y-2">
            <p class="text-sm">Status: <span class="text-red-500">❌ Closed</span></p>
            <p class="text-sm">Jumlah Antrian: <strong>20</strong></p>
            <p class="text-sm">Sisa Kuota: <strong>5</strong></p>
        </div>
        <button class="mt-6 bg-gray-500 text-white py-2 px-6 rounded-lg cursor-not-allowed opacity-50">
            Open Register
        </button>
    </div>
</div>

<?php $this->endSection(); ?>
