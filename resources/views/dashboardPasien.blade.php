<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Dashboard Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\stylePasien.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\styleChatbot.css') }}">
    <style>

    </style>
</head>

<body>
    <!-- Navbar -->
    @include('navbarPasien')

    <!-- Hiasan Sudut -->
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan top-left" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan top-right" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan bottom-left" />
    <img src="{{ asset('assets/images/Hiasan Layar.png') }}" class="hiasan bottom-right" />

    <div class="text-center judul my-5 pt-5">
        <h3 class="fw-bold">Layanan Pengaduan Pasien RSHS Bandung</h3>
        <p>Kami berkomitmen untuk memberikan pelayanan terbaik. Sampaikan laporan Anda untuk
            membantu kami meningkatkan kualitas layanan.</p>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center mt-3">
                        <div class="circle-icon" style="background-color: #00B9AD;">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>
                        <h5 class="fw-bold pt-3 text-1">Laporkan Kendala</h5>
                        <small class="text-muted text-2">Sampaikan keluhan atau saran Anda</small>
                        <p class="mt-3 text-3">Buat laporan baru untuk menyampaikan kendala, keluhan, atau saran Anda
                            terkait layanan RSHS Bandung.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('pasien.buatLaporan') }}" class="btn text-light w-100"
                            style="background-color: #00B9AD;">Buat
                            Laporan <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center mt-3">
                        <div class="circle-icon" style="background-color: #60C0D0;">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <h5 class="fw-bold pt-3 text-1">Lacak Tiket</h5>
                        <small class="text-muted text-2">Periksa status laporan Anda</small>
                        <p class="mt-3 text-3">Masukkan nomor tiket untuk melacak status laporan Anda dan melihat
                            perkembangan penanganan.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('pasien.lacakTiket') }}" class="btn text-light w-100"
                            style="background-color: #60C0D0;">Lacak
                            Tiket <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center mt-3">
                        <div class="circle-icon" style="background-color: #CDDC29;">
                            <i class="bi bi-question-circle-fill"></i>
                        </div>
                        <h5 class="fw-bold pt-3 text-1">Soalan Sering Ditanya</h5>
                        <small class="text-muted text-2">Temukan jawaban untuk pertanyaan umum</small>
                        <p class="mt-3 text-3">Lihat jawaban untuk pertanyaan yang sering diajukan dan informasi bantuan
                            lainnya.</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('pasien.ssd') }}" class="btn text-light w-100"
                            style="background-color: #CDDC29;">Lihat SSD <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button id="chatbot-toggle" class="btn rounded-circle position-fixed bottom-0 end-0 shadow-lg" style=""
        aria-label="Toggle Chatbot">
        <i class="bi bi-robot fs-3"></i>
    </button>

    <div id="chatbot-window" class="card position-fixed bottom-0 end-0 m-3 shadow-lg d-none" style="">
        <div class="card-header text-white d-flex justify-content-between align-items-center"
            style="background-color: #00B9AD; border: none;">
            <h5 class="mb-2 fw-bold">RSHS Virtual Assistant</h5>
            <button id="chatbot-close" type="button" class="btn-close btn-close-white"
                aria-label="Close Chatbot"></button>
        </div>
        <div id="chatbot-messages" class="card-body overflow-auto chatbot-messages-padding"
            style="">
            <div class="chat-message bot-message">
                <p class="mb-0">Halo! Ada yang bisa saya bantu terkait layanan RSHS Bandung?</p>
                <small class="text-muted timestamp">Baru saja</small>
            </div>
        </div>
        <div class="card-footer bg-light border-top p-2">
            <div class="input-group">
                <input type="text" id="chatbot-input" class="form-control" placeholder="Ketik pesan Anda..."
                    aria-label="Message Input">
                <button id="chatbot-send" class="btn" style="background-color: #00B9AD; color: white;">
                    <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const chatbotToggle = document.getElementById('chatbot-toggle');
            const chatbotWindow = document.getElementById('chatbot-window');
            const chatbotClose = document.getElementById('chatbot-close');
            const chatbotSend = document.getElementById('chatbot-send');
            const chatbotInput = document.getElementById('chatbot-input');
            const chatbotMessagesContainer = document.getElementById('chatbot-messages');

            let isChatbotOpen = false;

            // Function to format current time for timestamp
            function getCurrentTime() {
                return new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            }

            // Function to add a message to the chat window
            function addMessageToChat(text, sender) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('chat-message', sender === 'user' ? 'user-message' : 'bot-message');

                const messageParagraph = document.createElement('p');
                messageParagraph.classList.add('mb-0');
                messageParagraph.textContent = text;

                const timestampSmall = document.createElement('small');
                timestampSmall.classList.add('text-muted', 'timestamp');
                timestampSmall.textContent = getCurrentTime();

                messageDiv.appendChild(messageParagraph);
                messageDiv.appendChild(timestampSmall);

                // Add animation class
                messageDiv.classList.add('new-message-animation');

                chatbotMessagesContainer.appendChild(messageDiv);
                chatbotMessagesContainer.scrollTop = chatbotMessagesContainer.scrollHeight; // Auto-scroll to bottom

                // Remove animation class after it plays to allow re-triggering
                setTimeout(() => {
                    messageDiv.classList.remove('new-message-animation');
                }, 300);
            }

            // Toggle chatbot window
            chatbotToggle.addEventListener('click', () => {
                isChatbotOpen = !isChatbotOpen;
                if (isChatbotOpen) {
                    chatbotWindow.classList.remove('d-none');
                    chatbotWindow.style.opacity = '1';
                    chatbotWindow.style.transform = 'translateY(0) scale(1)';
                    chatbotToggle.innerHTML = '<i class="bi bi-x-lg fs-3"></i>'; // Change to close icon
                    chatbotInput.focus();
                } else {
                    chatbotWindow.style.opacity = '0';
                    chatbotWindow.style.transform = 'translateY(20px) scale(0.95)';
                    setTimeout(() => { // Wait for transition to finish before adding d-none
                        chatbotWindow.classList.add('d-none');
                    }, 300);
                    chatbotToggle.innerHTML = '<i class="bi bi-robot fs-3"></i>'; // Change back to bot icon
                }
            });

            // Close chatbot window with 'X' button
            chatbotClose.addEventListener('click', () => {
                isChatbotOpen = false;
                chatbotWindow.style.opacity = '0';
                chatbotWindow.style.transform = 'translateY(20px) scale(0.95)';
                setTimeout(() => {
                    chatbotWindow.classList.add('d-none');
                }, 300);
                chatbotToggle.innerHTML = '<i class="bi bi-robot fs-3"></i>';
            });

            // Handle sending a message
            function handleSendMessage() {
                const messageText = chatbotInput.value.trim();
                if (messageText) {
                    addMessageToChat(messageText, 'user');
                    chatbotInput.value = ''; // Clear input

                    // --- Placeholder for Bot Response ---
                    // In a real application, you would send messageText to a backend
                    // and then display the bot's response.
                    setTimeout(() => {
                        // Simulate different bot responses based on input for demo
                        if (messageText.toLowerCase().includes("jadwal dokter")) {
                            addMessageToChat("Untuk informasi jadwal dokter, silakan kunjungi halaman jadwal di website kami atau hubungi call center.", "bot");
                        } else if (messageText.toLowerCase().includes("alamat")) {
                            addMessageToChat("RSHS Bandung beralamat di Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161.", "bot");
                        } else if (messageText.toLowerCase().includes("layanan")) {
                            addMessageToChat("Kami memiliki berbagai layanan unggulan. Bisa sebutkan layanan spesifik yang Anda cari?", "bot");
                        } else if (messageText.toLowerCase().match(/halo|hai|hi/gi)) {
                            addMessageToChat("Halo! Ada yang bisa saya bantu?", "bot");
                        }
                        else {
                            addMessageToChat("Terima kasih atas pesan Anda. Saat ini saya adalah bot sederhana. Untuk bantuan lebih lanjut, tim kami akan segera merespons jika ini adalah sesi live chat sungguhan.", "bot");
                        }
                    }, 1000 + Math.random() * 1000); // Simulate network delay
                    // --- End Placeholder ---
                }
            }

            chatbotSend.addEventListener('click', handleSendMessage);

            // Allow sending message with Enter key
            chatbotInput.addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault(); // Prevent form submission if it's in a form
                    handleSendMessage();
                }
            });

            // Optional: Add a few more example bot messages for a more complete look on load
            // setTimeout(() => {
            //     addMessageToChat("Anda dapat menanyakan tentang jadwal dokter, lokasi, atau layanan kami.", "bot");
            // }, 1500);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

</body>

</html>
