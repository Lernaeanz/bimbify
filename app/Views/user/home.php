<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<div class="p-6 space-y-4">
    <!-- Baris 1: Calendar + Queue -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        
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
            <div class="grid grid-cols-3 gap-2 border border-blue-500 rounded-lg p-2 text-center">
                <div>
                    <h3 class="font-semibold text-xs mb-1">Complete</h3>
                    <div class="space-y-1">
                        <div class="bg-gray-300 rounded h-6"></div>
                        <div class="bg-gray-300 rounded h-6"></div>
                        <div class="bg-gray-300 rounded h-6"></div>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-xs mb-1">In Progress</h3>
                    <div class="space-y-1">
                        <div class="bg-gray-300 rounded h-6"></div>
                        <div class="bg-gray-300 rounded h-6"></div>
                        <div class="bg-gray-300 rounded h-6"></div>
                    </div>
                </div>
                <div>
                    <h3 class="font-semibold text-xs mb-1">Waiting</h3>
                    <div class="space-y-1">
                        <div class="bg-gray-300 rounded h-6"></div>
                        <div class="bg-gray-300 rounded h-6"></div>
                        <div class="bg-gray-300 rounded h-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Baris 2: Info Sesi Hari Ini -->
    <div class="bg-white rounded-lg shadow p-4 flex justify-between text-sm">
        <span>SESI HARI INI</span>
        <span>OFFLINE</span>
        <span>09.30 - 10.00</span>
        <span>WAITING</span>
        <span>kp 301 UB Kepanjen</span>
    </div>

    <!-- Baris 3: History Bimbingan -->
    <div class="bg-white rounded-lg shadow p-4">
        <h2 class="text-sm font-bold mb-2">HISTORY TERKINI</h2>
        <div class="h-40 bg-gray-100 rounded flex items-center justify-center text-gray-400 text-sm">
            Tidak ada data
        </div>
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