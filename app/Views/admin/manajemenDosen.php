<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<h1 class="text-3xl font-bold mt-20 mb-6">Manajemen Bimbingan</h1>

<!-- Tab untuk Online / Offline -->
<div class="flex space-x-6 mb-6">
    <button id="online-tab" class="px-4 py-2 text-lg font-semibold text-blue-600 border-b-2 border-blue-600 hover:bg-gray-100">
        Online
    </button>
    <button id="offline-tab" class="px-4 py-2 text-lg font-semibold text-gray-600 hover:bg-gray-100">
        Offline
    </button>
</div>

<!-- Tabel -->
<div id="table-container" class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-6">
    <table class="min-w-full table-auto">
        <thead class="bg-gray-100 text-sm text-black">
            <tr>
                <th class="px-6 py-3 border">No</th>
                <th class="px-6 py-3 border">Nama</th>
                <th class="px-6 py-3 border">Nim</th>
                <th class="px-6 py-3 border">Program Studi</th>
                <th class="px-6 py-3 border">Judul Tugas Akhir</th>
                <th class="px-6 py-3 border">Dokumen Pendukung</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200" id="online-data">
            <!-- Data Online -->
            <tr class="hover:bg-gray-100 transition-colors duration-200">
                <td class="px-6 py-4">1</td>
                <td class="px-6 py-4">John Doe</td>
                <td class="px-6 py-4">123456789</td>
                <td class="px-6 py-4">Informatika</td>
                <td class="px-6 py-4">Sistem Informasi Berbasis Web</td>
                <td class="px-6 py-4">Dokumen 1</td>
            </tr>
            <tr class="hover:bg-gray-100 transition-colors duration-200">
                <td class="px-6 py-4">2</td>
                <td class="px-6 py-4">Jane Smith</td>
                <td class="px-6 py-4">987654321</td>
                <td class="px-6 py-4">Teknik Mesin</td>
                <td class="px-6 py-4">Penerapan IoT di Industri</td>
                <td class="px-6 py-4">Dokumen 2</td>
            </tr>
        </tbody>
        <tbody class="divide-y divide-gray-200 hidden" id="offline-data">
            <!-- Data Offline -->
            <tr class="hover:bg-gray-100 transition-colors duration-200">
                <td class="px-6 py-4">1</td>
                <td class="px-6 py-4">Michael Black</td>
                <td class="px-6 py-4">1122334455</td>
                <td class="px-6 py-4">Fisika</td>
                <td class="px-6 py-4">Studi Gravitasi pada Benda</td>
                <td class="px-6 py-4">Dokumen 3</td>
            </tr>
            <tr class="hover:bg-gray-100 transition-colors duration-200">
                <td class="px-6 py-4">2</td>
                <td class="px-6 py-4">Linda Grey</td>
                <td class="px-6 py-4">9988776655</td>
                <td class="px-6 py-4">Biologi</td>
                <td class="px-6 py-4">Penelitian Genetik pada Tanaman</td>
                <td class="px-6 py-4">Dokumen 4</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Script untuk Tab Switching -->
<script>
document.getElementById("online-tab").addEventListener("click", function() {
    document.getElementById("online-tab").classList.add("text-blue-600", "border-b-2", "border-blue-600");
    document.getElementById("offline-tab").classList.remove("text-blue-600", "border-b-2", "border-blue-600");
    
    document.getElementById("online-data").classList.remove("hidden");
    document.getElementById("offline-data").classList.add("hidden");
});

document.getElementById("offline-tab").addEventListener("click", function() {
    document.getElementById("offline-tab").classList.add("text-blue-600", "border-b-2", "border-blue-600");
    document.getElementById("online-tab").classList.remove("text-blue-600", "border-b-2", "border-blue-600");
    
    document.getElementById("offline-data").classList.remove("hidden");
    document.getElementById("online-data").classList.add("hidden");
});
</script>

<?php $this->endSection(); ?>
