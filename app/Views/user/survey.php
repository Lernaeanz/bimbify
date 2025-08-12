<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Card 1: Available Session -->
        <div class="card border border-blue-500 bg-blue-50 rounded-lg shadow-lg p-6">
            <h3 class="font-semibold text-xl text-blue-700">Online</h3>
            <p class="text-sm text-gray-600">Status: <span class="text-green-500">✔️</span></p>
            <p class="text-sm text-gray-600">Waktu Mulai: 08:00</p>
            <p class="text-sm text-gray-600">Waktu Berakhir: 12:00</p>
            <button class="mt-4 w-full py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">Daftar</button>
        </div>

        <!-- Card 2: Full Session -->
        <div class="card border border-gray-300 bg-white rounded-lg shadow-lg p-6">
            <h3 class="font-semibold text-xl text-gray-700">Online</h3>
            <p class="text-sm text-gray-600">Status: <span class="text-red-500">❌</span></p>
            <p class="text-sm text-gray-600">Jumlah Antrean: 20</p>
            <p class="text-sm text-gray-600">Sisa Kuota: 5</p>
            <button class="mt-4 w-full py-2 bg-gray-300 text-gray-700 font-semibold rounded-lg cursor-not-allowed" disabled>Daftar</button>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
