<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soalan Sering Ditanya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
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

    <div class="ssd-container">
        <!-- Tombol Kembali -->
        <a href="{{ route('pasien.dashboard') }}" class="btn btn-outline-secondary back-btn">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>

        <h3 class="ssd-title text-center mt-4">Soalan Sering Ditanya</h3>
        <p class="text-center">Lihat jawaban untuk pertanyaan yang sering diajukan dan informasi bantuan lainnya.</p>

        <div class="accordion mt-5" id="ssdAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne">
                        Bagaimana cara melacak status laporan saya?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Anda dapat melacak status laporan dengan memasukkan nomor tiket yang Anda terima setelah
                        mengirimkan laporan di tab 'Lacak Tiket'.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo">
                        Berapa lama waktu yang dibutuhkan untuk menindaklanjuti laporan?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Proses tindak lanjut biasanya dilakukan dalam 1-3 hari kerja tergantung tingkat prioritas
                        laporan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree">
                        Apakah saya bisa mengubah laporan yang sudah dikirim?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Anda dapat menghubungi admin atau membuka kembali tiket untuk melakukan perubahan jika laporan
                        belum diproses.
                    </div>
                </div>
            </div>

            <!-- Tambahan SSD lainnya -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour">
                        Apakah data saya akan aman?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Ya, semua data Anda akan disimpan dengan aman dan hanya digunakan untuk keperluan penanganan
                        laporan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive">
                        Siapa yang akan menangani laporan saya?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Laporan Anda akan ditangani oleh petugas resmi yang berwenang sesuai dengan jenis laporan yang
                        dikirimkan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix">
                        Berapa lama waktu yang diberikan untuk mengkonfirmasi penyelesaian tiket?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Anda memiliki waktu maksimal 3 hari setelah status selesai untuk mengkonfirmasi atau memberikan
                        masukan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven">
                        Bagaimana jika saya belum puas dengan penyelesaian masalah?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#ssdAccordion">
                    <div class="accordion-body">
                        Anda dapat membuka kembali tiket atau membuat laporan baru dengan mencantumkan detail tambahan
                        untuk ditindaklanjuti lebih lanjut.
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
        <div id="chatbot-messages" class="card-body overflow-auto chatbot-messages-padding" style="">
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

            function getCurrentTime() {
                return new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            }

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

                messageDiv.classList.add('new-message-animation');

                chatbotMessagesContainer.appendChild(messageDiv);
                chatbotMessagesContainer.scrollTop = chatbotMessagesContainer.scrollHeight;

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
                    chatbotToggle.innerHTML = '<i class="bi bi-x-lg fs-3"></i>';
                    chatbotInput.focus();
                } else {
                    chatbotWindow.style.opacity = '0';
                    chatbotWindow.style.transform = 'translateY(20px) scale(0.95)';
                    setTimeout(() => {
                        chatbotWindow.classList.add('d-none');
                    }, 300);
                    chatbotToggle.innerHTML = '<i class="bi bi-robot fs-3"></i>';
                }
            });

            chatbotClose.addEventListener('click', () => {
                isChatbotOpen = false;
                chatbotWindow.style.opacity = '0';
                chatbotWindow.style.transform = 'translateY(20px) scale(0.95)';
                setTimeout(() => {
                    chatbotWindow.classList.add('d-none');
                }, 300);
                chatbotToggle.innerHTML = '<i class="bi bi-robot fs-3"></i>';
            });

            function handleSendMessage() {
                const messageText = chatbotInput.value.trim();
                if (messageText) {
                    addMessageToChat(messageText, 'user');
                    chatbotInput.value = '';

                    setTimeout(() => {
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
                    }, 1000 + Math.random() * 1000);
                }
            }

            chatbotSend.addEventListener('click', handleSendMessage);

            chatbotInput.addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    handleSendMessage();
                }
            });

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
