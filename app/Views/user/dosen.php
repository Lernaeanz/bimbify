<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-4">History Bimbingan Tugas Akhir</h2>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full text-left text-sm font-light">
            <thead class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white">
                <tr>
                    <th class="px-6 py-4">Nama</th>
                    <th class="px-6 py-4">NIM</th>
                    <th class="px-6 py-4">Jenis Bimbingan</th>
                    <th class="px-6 py-4">Waktu</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row 1 -->
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">John Doe</td>
                    <td class="px-6 py-4">123456789</td>
                    <td class="px-6 py-4">Offline</td>
                    <td class="px-6 py-4">2025-08-10 10:00 AM</td>
                    <td class="px-6 py-4 text-green-600">Completed</td>
                    <td class="px-6 py-4">
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">View</button>
                    </td>
                </tr>
                <!-- Example Row 2 -->
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4">Jane Smith</td>
                    <td class="px-6 py-4">987654321</td>
                    <td class="px-6 py-4">Online</td>
                    <td class="px-6 py-4">2025-08-09 02:00 PM</td>
                    <td class="px-6 py-4 text-yellow-600">Pending</td>
                    <td class="px-6 py-4">
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">View</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>

<?php $this->endSection(); ?>
