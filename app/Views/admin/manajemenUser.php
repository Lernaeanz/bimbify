<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<h1 class="text-3xl font-bold mt-14 mb-6">Manajemen User</h1>

<!-- Search Bar -->
<div class="flex justify-between items-center mb-4">
    <div class="flex items-center space-x-2">
        <form action="/manajemen_user" method="GET" class="flex">
            <input type="text" name="keyword" class="p-2 border rounded-lg" placeholder="Search" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
            <button type="submit" class="p-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                </svg>
            </button>
        </form>
    </div>
</div>

<!-- Table -->
<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-6">
    <table class="min-w-full table-auto">
        <thead class="bg-gray-100 text-sm text-black">
            <tr>
                <th class="px-6 py-3 border">No</th>
                <th class="px-6 py-3 border">Nama</th>
                <th class="px-6 py-3 border">Nim</th>
                <th class="px-6 py-3 border">Program Studi</th>
                <th class="px-6 py-3 border">Pembimbing</th>
                <th class="px-6 py-3 border">Judul Tugas Akhir</th>
                <th class="px-6 py-3 border">Jumlah Bimbingan</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
<tr class="hover:bg-gray-100 transition-colors duration-200">
    <td class="px-6 py-4">1</td>
    <td class="px-6 py-4">John Doe</td>
    <td class="px-6 py-4">123456789</td>
    <td class="px-6 py-4">Informatika</td>
    <td class="px-6 py-4">Dr. Smith</td>
    <td class="px-6 py-4">Sistem Informasi Berbasis Web</td>
    <td class="px-6 py-4">10</td>
</tr>
<tr class="hover:bg-gray-100 transition-colors duration-200">
    <td class="px-6 py-4">2</td>
    <td class="px-6 py-4">Jane Smith</td>
    <td class="px-6 py-4">987654321</td>
    <td class="px-6 py-4">Teknik Mesin</td>
    <td class="px-6 py-4">Dr. Johnson</td>
    <td class="px-6 py-4">Penerapan IoT di Industri</td>
    <td class="px-6 py-4">8</td>
</tr>
<tr class="hover:bg-gray-100 transition-colors duration-200">
    <td class="px-6 py-4">3</td>
    <td class="px-6 py-4">Michael Johnson</td>
    <td class="px-6 py-4">1122334455</td>
    <td class="px-6 py-4">Fisika</td>
    <td class="px-6 py-4">Prof. Williams</td>
    <td class="px-6 py-4">Studi Pengaruh Gravitasi pada Benda</td>
    <td class="px-6 py-4">12</td>
</tr>
<tr class="hover:bg-gray-100 transition-colors duration-200">
    <td class="px-6 py-4">4</td>
    <td class="px-6 py-4">Sarah Connor</td>
    <td class="px-6 py-4">3344556677</td>
    <td class="px-6 py-4">Biologi</td>
    <td class="px-6 py-4">Dr. Brown</td>
    <td class="px-6 py-4">Penelitian Genetik pada Tanaman</td>
    <td class="px-6 py-4">15</td>
</tr>
<tr class="hover:bg-gray-100 transition-colors duration-200">
    <td class="px-6 py-4">5</td>
    <td class="px-6 py-4">Linda Grey</td>
    <td class="px-6 py-4">9988776655</td>
    <td class="px-6 py-4">Kimia</td>
    <td class="px-6 py-4">Dr. Green</td>
    <td class="px-6 py-4">Sistem Kimia Berkelanjutan</td>
    <td class="px-6 py-4">5</td>
</tr>
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="mt-4 flex justify-center">
    <nav aria-label="Page navigation">
        <ul class="inline-flex items-center space-x-2">
            <li>
                <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Previous</a>
            </li>
            <li>
                <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">1</a>
            </li>
            <li>
                <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">2</a>
            </li>
            <li>
                <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Next</a>
            </li>
        </ul>
    </nav>
</div>

<?php $this->endSection(); ?>
