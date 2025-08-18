<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="p-4">
    <!-- Baris 1: Calendar + Queue -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-12">
        
        <!-- Kalender -->
        <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-sm font-bold mb-2">DATE</h2>
            <div id="calendar" class="grid grid-cols-7 gap-1 text-center text-sm"></div>
        </div>

        <!-- Queue -->
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-sm font-bold">QUEUE</h2>
            </div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
    <!-- Complete -->
    <div class="bg-green-100 rounded-lg p-4 shadow-md hover:shadow-xl transition-shadow duration-300">
        <h3 class="font-semibold text-xs text-green-700 mb-2">Complete</h3>
        <div class="space-y-2">
            <div class="flex flex-col items-center justify-between bg-green-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">John Doe</div>
                <div class="text-xs text-gray-600">14:00 - 15:00</div>
            </div>
            <div class="flex flex-col items-center justify-between bg-green-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">Jane Smith</div>
                <div class="text-xs text-gray-600">15:00 - 16:00</div>
            </div>
            <div class="flex flex-col items-center justify-between bg-green-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">Michael Johnson</div>
                <div class="text-xs text-gray-600">16:00 - 17:00</div>
            </div>
        </div>
    </div>

    <!-- In Progress -->
    <div class="bg-yellow-100 rounded-lg p-4 shadow-md hover:shadow-xl transition-shadow duration-300">
        <h3 class="font-semibold text-xs text-yellow-700 mb-2">In Progress</h3>
        <div class="space-y-2">
            <div class="flex flex-col items-center justify-between bg-yellow-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">Sarah Connor</div>
                <div class="text-xs text-gray-600">13:00 - 14:00</div>
            </div>
            <div class="flex flex-col items-center justify-between bg-yellow-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">Linda Grey</div>
                <div class="text-xs text-gray-600">14:00 - 15:00</div>
            </div>
            <div class="flex flex-col items-center justify-between bg-yellow-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">Arnold Schwarzenegger</div>
                <div class="text-xs text-gray-600">15:00 - 16:00</div>
            </div>
        </div>
    </div>

    <!-- Waiting -->
    <div class="bg-gray-100 rounded-lg p-4 shadow-md hover:shadow-xl transition-shadow duration-300">
        <h3 class="font-semibold text-xs text-gray-700 mb-2">Waiting</h3>
        <div class="space-y-2">
            <div class="flex flex-col items-center justify-between bg-gray-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">Michael Black</div>
                <div class="text-xs text-gray-600">16:00 - 17:00</div>
            </div>
            <div class="flex flex-col items-center justify-between bg-gray-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">Rachel Green</div>
                <div class="text-xs text-gray-600">17:00 - 18:00</div>
            </div>
            <div class="flex flex-col items-center justify-between bg-gray-300 rounded-lg p-2">
                <div class="text-sm font-semibold text-gray-800 truncate w-full">Ross Geller</div>
                <div class="text-xs text-gray-600">18:00 - 19:00</div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>

    <!-- Baris 2: History Bimbingan (Diperbaiki agar tampil di bawah kalender dan queue) -->
<div class="bg-white rounded-lg shadow p-4 mt-4">
    <h2 class="text-sm font-bold mb-2">BIMBINGAN TERKINI</h2>
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-200 text-sm">
                <th class="px-4 py-2 border">No</th>
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Nim</th>
                <th class="px-4 py-2 border">Program Studi</th>
                <th class="px-4 py-2 border">Waktu Bimbingan</th>
                <th class="px-4 py-2 border">Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Baris data yang ada -->
            <tr>
                <td class="px-4 py-2 border">1</td>
                <td class="px-4 py-2 border">John Doe</td>
                <td class="px-4 py-2 border">123456789</td>
                <td class="px-4 py-2 border">Informatika</td>
                <td class="px-4 py-2 border">14:00 - 15:00</td>
                <td class="px-4 py-2 border text-green-500">Selesai</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">2</td>
                <td class="px-4 py-2 border">Jane Smith</td>
                <td class="px-4 py-2 border">987654321</td>
                <td class="px-4 py-2 border">Matematika</td>
                <td class="px-4 py-2 border">15:00 - 16:00</td>
                <td class="px-4 py-2 border text-yellow-500">Dalam Proses</td>
            </tr>
            <tr>
                <td class="px-4 py-2 border">3</td>
                <td class="px-4 py-2 border">Michael Johnson</td>
                <td class="px-4 py-2 border">1122334455</td>
                <td class="px-4 py-2 border">Fisika</td>
                <td class="px-4 py-2 border">16:00 - 17:00</td>
                <td class="px-4 py-2 border text-gray-500">Menunggu</td>
            </tr>
        </tbody>
    </table>
</div>

</div>

<!-- Script kalender -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const calendar = document.getElementById("calendar");

    let today = new Date();
    let month = today.getMonth();
    let year = today.getFullYear();

    // Nama hari
    const days = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];
    days.forEach(day => {
        let el = document.createElement("div");
        el.className = "font-bold";
        el.textContent = day;
        calendar.appendChild(el);
    });

    // Dapatkan hari pertama dan jumlah hari di bulan ini
    let firstDay = new Date(year, month, 1).getDay();
    let daysInMonth = new Date(year, month + 1, 0).getDate();

    // Kosongkan slot sebelum tanggal 1
    for (let i = 0; i < firstDay; i++) {
        let empty = document.createElement("div");
        calendar.appendChild(empty);
    }

    // Isi tanggal
    for (let d = 1; d <= daysInMonth; d++) {
        let el = document.createElement("div");
        el.textContent = d;
        el.className = "p-2 rounded cursor-pointer hover:bg-indigo-200";

        // Tandai hari ini
        if (d === today.getDate()) {
            el.classList.add("bg-indigo-500", "text-white", "font-bold");
        }

        calendar.appendChild(el);
    }
});
</script>

<?php $this->endSection(); ?>
