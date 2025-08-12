<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Balas Pengaduan</h1>

    <!-- Menampilkan informasi pengaduan -->
    <div class="mb-4">
        <p><strong>Nama Pengadu:</strong> <?= esc($pengaduan['nama']); ?></p>
        <p><strong>Email Pengadu:</strong> <?= esc($pengaduan['email']); ?></p>
        <p><strong>Kategori:</strong> <?= esc($pengaduan['kategori']); ?></p>
        <p><strong>Deskripsi Pengaduan:</strong></p>
        <p class="border p-4"><?= esc($pengaduan['deskripsi']); ?></p>
    </div>

    <!-- Form balasan -->
    <form action="/email/balas/<?= esc($pengaduan['id']) ?>" method="POST">
        <?= csrf_field(); ?>
        
        <div class="mb-4">
            <label for="balasan" class="block text-sm font-medium text-gray-700">Balasan</label>
            <textarea name="balasan" id="balasan" rows="4" class="w-full border px-4 py-2 rounded" required></textarea>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim Balasan</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>
