<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<h1 class="text-3xl font-bold mt-20 mb-6 text-center">Manajemen Bimbingan</h1>

<!-- Tab untuk Online / Offline -->
<div class="flex justify-center mb-6 space-x-8">
    <button id="online-tab" class="px-4 py-2 text-lg font-semibold text-blue-600 border-b-4 border-blue-600 hover:bg-gray-100 transition-all">
        Online
    </button>
    <button id="offline-tab" class="px-4 py-2 text-lg font-semibold text-gray-600 hover:bg-gray-100 transition-all">
        Offline
    </button>
</div>

<!-- Tabel -->
<div id="table-container" class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-6">
    <table class="min-w-full table-auto">
        <thead class="bg-gray-100 text-sm text-black">
            <tr>
                <th class="px-6 py-3 border text-center">No</th>
                <th class="px-6 py-3 border text-center">Nama</th>
                <th class="px-6 py-3 border text-center">Nim</th>
                <th class="px-6 py-3 border text-center">Waktu Bimbingan</th>
                <th class="px-6 py-3 border text-center">Date</th> <!-- Kolom Date di antara Waktu Bimbingan dan Program Studi -->
                <th class="px-6 py-3 border text-center">Program Studi</th>
                <th class="px-6 py-3 border text-center">Status</th>
                <th class="px-6 py-3 border text-center">Dokumen Pendukung</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200" id="online-data">
            <!-- Data Online -->
            <tr class="hover:bg-gray-100 transition-colors duration-200">
                <td class="px-6 py-4">1</td>
                <td class="px-6 py-4">John Doe</td>
                <td class="px-6 py-4">123456789</td>
                <td class="px-6 py-4">08:00 - 10:00</td>
                <td class="px-6 py-4">2023-07-15</td> <!-- Date -->
                <td class="px-6 py-4">Informatika</td>
                <td class="px-6 py-4 text-green-500">Active</td>
                <td class="px-6 py-4"><a href="#" class="text-blue-500">Download</a></td>
            </tr>
            <tr class="hover:bg-gray-100 transition-colors duration-200">
                <td class="px-6 py-4">2</td>
                <td class="px-6 py-4">Jane Smith</td>
                <td class="px-6 py-4">987654321</td>
                <td class="px-6 py-4">10:00 - 12:00</td>
                <td class="px-6 py-4">2023-07-16</td> <!-- Date -->
                <td class="px-6 py-4">Teknik Mesin</td>
                <td class="px-6 py-4 text-green-500">Active</td>
                <td class="px-6 py-4"><a href="#" class="text-blue-500">Download</a></td>
            </tr>
        </tbody>
        <tbody class="divide-y divide-gray-200 hidden" id="offline-data">
            <!-- Data Offline -->
            <tr class="hover:bg-gray-100 transition-colors duration-200">
                <td class="px-6 py-4">1</td>
                <td class="px-6 py-4">Michael Black</td>
                <td class="px-6 py-4">1122334455</td>
                <td class="px-6 py-4">08:00 - 10:00</td>
                <td class="px-6 py-4">2023-07-17</td> <!-- Date -->
                <td class="px-6 py-4">Fisika</td>
                <td class="px-6 py-4 text-red-500">Inactive</td>
                <td class="px-6 py-4"><a href="#" class="text-blue-500">Download</a></td>
            </tr>
            <tr class="hover:bg-gray-100 transition-colors duration-200">
                <td class="px-6 py-4">2</td>
                <td class="px-6 py-4">Linda Grey</td>
                <td class="px-6 py-4">9988776655</td>
                <td class="px-6 py-4">10:00 - 12:00</td>
                <td class="px-6 py-4">2023-07-18</td> <!-- Date -->
                <td class="px-6 py-4">Biologi</td>
                <td class="px-6 py-4 text-red-500">Inactive</td>
                <td class="px-6 py-4"><a href="#" class="text-blue-500">Download</a></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Script untuk Tab Switching -->
<script>
    document.getElementById("online-tab").addEventListener("click", function() {
        document.getElementById("online-tab").classList.add("text-blue-600", "border-b-4", "border-blue-600");
        document.getElementById("offline-tab").classList.remove("text-blue-600", "border-b-4", "border-blue-600");
        
        document.getElementById("online-data").classList.remove("hidden");
        document.getElementById("offline-data").classList.add("hidden");
    });

    document.getElementById("offline-tab").addEventListener("click", function() {
        document.getElementById("offline-tab").classList.add("text-blue-600", "border-b-4", "border-blue-600");
        document.getElementById("online-tab").classList.remove("text-blue-600", "border-b-4", "border-blue-600");
        
        document.getElementById("offline-data").classList.remove("hidden");
        document.getElementById("online-data").classList.add("hidden");
    });
</script>

<?= $this->endSection(); ?>
