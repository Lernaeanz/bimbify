<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<div class="container mx-auto p-6">
    <div class="chat-container bg-gray-100 p-4 rounded-lg shadow-lg max-w-4xl mx-auto">
        <div class="messages-container space-y-4 overflow-y-auto max-h-96">
            <!-- Message Example -->
            <div class="message sent flex items-start justify-end space-x-4">
                <div class="message-text bg-blue-500 text-white p-4 rounded-lg max-w-xs">
                    <p class="font-semibold">You:</p>
                    <p>Apakah saya bisa melanjutkan bimbingan minggu depan?</p>
                </div>
                <div class="avatar w-8 h-8 rounded-full bg-blue-400 flex items-center justify-center text-white">K</div>
            </div>

            <div class="message received flex items-start space-x-4">
                <div class="avatar w-8 h-8 rounded-full bg-yellow-400 flex items-center justify-center text-white">A</div>
                <div class="message-text bg-gray-200 text-gray-800 p-4 rounded-lg max-w-xs">
                    <p class="font-semibold">Admin:</p>
                    <p>Ya, Anda bisa melanjutkan bimbingan minggu depan. Silakan cek jadwal di portal.</p>
                </div>
            </div>

            <!-- Additional Messages -->
            <div class="message sent flex items-start justify-end space-x-4">
                <div class="message-text bg-blue-500 text-white p-4 rounded-lg max-w-xs">
                    <p class="font-semibold">You:</p>
                    <p>Terima kasih atas bantuannya!</p>
                </div>
                <div class="avatar w-8 h-8 rounded-full bg-blue-400 flex items-center justify-center text-white">K</div>
            </div>

            <div class="message received flex items-start space-x-4">
                <div class="avatar w-8 h-8 rounded-full bg-yellow-400 flex items-center justify-center text-white">A</div>
                <div class="message-text bg-gray-200 text-gray-800 p-4 rounded-lg max-w-xs">
                    <p class="font-semibold">Admin:</p>
                    <p>Senang bisa membantu. Jangan ragu untuk menghubungi kami kapan saja!</p>
                </div>
            </div>
        </div>

        <!-- Input Area -->
        <div class="input-area mt-6 flex items-center border-t pt-4">
            <input type="text" class="message-input border border-gray-300 rounded-l-lg p-2 w-full" placeholder="Ketik pesan..." />
            <button class="send-btn bg-blue-500 text-white rounded-r-lg px-6 py-2 hover:bg-blue-600">Kirim</button>
        </div>
    </div>
</div>

<script>
    // Handle send message button click
    document.querySelector('.send-btn').addEventListener('click', function () {
        const messageInput = document.querySelector('.message-input');
        const messageText = messageInput.value.trim();

        if (messageText) {
            const messageContainer = document.querySelector('.messages-container');
            const newMessage = document.createElement('div');
            newMessage.classList.add('message', 'sent', 'flex', 'items-start', 'justify-end', 'space-x-4');
            newMessage.innerHTML = `
                <div class="message-text bg-blue-500 text-white p-4 rounded-lg max-w-xs">
                    <p class="font-semibold">You:</p>
                    <p>${messageText}</p>
                </div>
                <div class="avatar w-8 h-8 rounded-full bg-blue-400 flex items-center justify-center text-white">K</div>
            `;
            messageContainer.appendChild(newMessage);
            messageInput.value = ''; // Clear the input field
            messageContainer.scrollTop = messageContainer.scrollHeight; // Scroll to bottom
        }
    });
</script>

<?php $this->endSection(); ?>
