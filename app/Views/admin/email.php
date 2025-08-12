<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Daftar Pengaduan</h1>
    
    <div class="mb-4">
        <a href="/pengaduan/create" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Pengaduan</a>
    </div>

    <table class="min-w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Nama</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Kategori</th>
                <th class="px-4 py-2 border">Deskripsi</th>
                <th class="px-4 py-2 border">Balasan</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($email as $a): ?>
            <tr>
                <td class="px-4 py-2 border"><?= esc($a['nama']) ?></td>
                <td class="px-4 py-2 border"><?= esc($a['email']) ?></td>
                <td class="px-4 py-2 border"><?= esc($a['kategori']) ?></td>
                <td class="px-4 py-2 border"><?= esc($a['deskripsi']) ?></td>
                <td class="px-4 py-2 border"><?= esc($a['balasan']) ?></td>
                <td class="px-4 py-2 border">
                    <a href="/email/edit/<?= esc($a['id']) ?>" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="/email/hapus/<?= esc($a['id']) ?>" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                    <a href="/email/balas/<?= esc($a['id']) ?>" class="bg-green-500 text-white px-3 py-1 rounded">Balas</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>
