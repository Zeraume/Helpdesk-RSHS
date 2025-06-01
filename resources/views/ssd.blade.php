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

    <div class="ssd-container"> <a href="{{ route('pasien.dashboard') }}"
            class="btn btn-outline-secondary back-btn mb-4"> <i class="bi bi-arrow-left"></i> Kembali
        </a>

        <h3 class="ssd-title text-center">Soalan Sering Ditanya</h3>
        <p class="text-center mb-5">Lihat jawaban untuk pertanyaan yang sering diajukan dan informasi bantuan
            lainnya.</p>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="faq-group-card">
                    <h4 class="faq-group-title">
                        <i class="bi bi-search me-2"></i>Pelacakan dan Status Laporan
                    </h4>
                    <p class="faq-group-description">
                        Anda dapat memantau perkembangan laporan Anda secara langsung melalui sistem.
                    </p>
                    <div class="accordion" id="accordionGroupPelacakan">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPelacakanSatu">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePelacakanSatu" aria-expanded="false">
                                    Bagaimana cara melacak status laporan saya?
                                </button>
                            </h2>
                            <div id="collapsePelacakanSatu" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Anda dapat melacak status laporan dengan memasukkan nomor tiket yang Anda terima
                                    setelah
                                    mengirimkan laporan di tab 'Lacak Tiket'.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPelacakanDua">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePelacakanDua" aria-expanded="false">
                                    Apa arti dari setiap status laporan?
                                </button>
                            </h2>
                            <div id="collapsePelacakanDua" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Setiap status laporan memiliki arti spesifik, seperti 'Diajukan' (laporan baru
                                    diterima), 'Diproses' (sedang ditangani), 'Selesai' (tindakan telah selesai), atau
                                    'Ditutup' (kasus dianggap selesai sepenuhnya). Detail lebih lanjut akan tersedia
                                    pada informasi tiket Anda.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPelacakanTiga">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePelacakanTiga" aria-expanded="false">
                                    Apakah saya akan mendapat notifikasi saat status laporan berubah?
                                </button>
                            </h2>
                            <div id="collapsePelacakanTiga" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Ya, sistem kami akan mengirimkan notifikasi (biasanya melalui email atau SMS jika
                                    nomor Anda terdaftar) setiap kali ada pembaruan signifikan pada status laporan Anda.
                                    Pastikan kontak Anda selalu terbarui.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-group-card">
                    <h4 class="faq-group-title">
                        <i class="bi bi-clock-history me-2"></i>Proses dan Waktu Penanganan
                    </h4>
                    <p class="faq-group-description">
                        Di sini Anda dapat mengetahui estimasi waktu penanganan laporan Anda serta berapa lama waktu
                        yang dibutuhkan hingga masalah diselesaikan.
                    </p>
                    <div class="accordion" id="accordionGroupProses">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingProsesSatu">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseProsesSatu" aria-expanded="false">
                                    Berapa lama waktu yang dibutuhkan untuk menindaklanjuti laporan?
                                </button>
                            </h2>
                            <div id="collapseProsesSatu" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Proses tindak lanjut biasanya dilakukan dalam 1-3 hari kerja tergantung tingkat
                                    prioritas dan kompleksitas laporan. Untuk kasus yang memerlukan investigasi lebih
                                    lanjut, mungkin memerlukan waktu lebih lama.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingProsesDua">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseProsesDua" aria-expanded="false">
                                    Berapa lama waktu yang diberikan untuk mengkonfirmasi penyelesaian tiket?
                                </button>
                            </h2>
                            <div id="collapseProsesDua" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Anda memiliki waktu maksimal 3 (tiga) hari kerja setelah laporan dinyatakan
                                    'Selesai' oleh tim kami untuk memberikan konfirmasi apakah Anda puas dengan
                                    solusinya atau jika Anda ingin membuka kembali tiket tersebut.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingProsesTiga">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseProsesTiga" aria-expanded="false">
                                    Apakah ada prioritas khusus untuk jenis laporan tertentu?
                                </button>
                            </h2>
                            <div id="collapseProsesTiga" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Ya, laporan yang bersifat darurat atau menyangkut keselamatan pasien akan
                                    mendapatkan prioritas penanganan lebih tinggi. Namun, kami berusaha menangani semua
                                    laporan secepat dan seefektif mungkin.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-lg-6">
                <div class="faq-group-card">
                    <h4 class="faq-group-title">
                        <i class="bi bi-file-earmark-text me-2"></i>Perubahan dan Tindak Lanjut Laporan
                    </h4>
                    <p class="faq-group-description">
                        Jika Anda merasa penyelesaian yang diberikan belum sesuai harapan, kami menyediakan informasi
                        mengenai cara mengajukan keluhan lanjutan.
                    </p>
                    <div class="accordion" id="accordionGroupTindakLanjut">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTindakLanjutSatu">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTindakLanjutSatu">
                                    Apakah saya bisa mengubah laporan yang sudah dikirim?
                                </button>
                            </h2>
                            <div id="collapseTindakLanjutSatu" class="accordion-collapse collapse"
                                data-bs-parent="#accordionGroupTindakLanjutSatu">
                                <div class="accordion-body">
                                    Anda dapat menghubungi admin atau membuka kembali tiket untuk melakukan perubahan
                                    jika laporan belum diproses lebih lanjut oleh tim terkait.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTindakLanjutDua">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTindakLanjutDua">
                                    Bagaimana jika saya belum puas dengan penyelesaian masalah?
                                </button>
                            </h2>
                            <div id="collapseTindakLanjutDua" class="accordion-collapse collapse"
                                data-bs-parent="#accordionGroupTindakLanjutDua">
                                <div class="accordion-body">
                                    Ya, semua data Anda akan disimpan dengan aman sesuai dengan kebijakan privasi kami
                                    dan hanya digunakan untuk keperluan penanganan laporan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTindakLanjutTiga">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTindakLanjutTiga">
                                    Bisakah saya menambahkan informasi tambahan setelah laporan dikirim?
                                </button>
                            </h2>
                            <div id="collapseTindakLanjutTiga" class="accordion-collapse collapse"
                                data-bs-parent="#accordionGroupTindakLanjutTiga">
                                <div class="accordion-body">
                                    Ya, semua data Anda akan disimpan dengan aman sesuai dengan kebijakan privasi kami
                                    dan hanya digunakan untuk keperluan penanganan laporan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-group-card">
                    <h4 class="faq-group-title">
                        <i class="bi bi-shield-check me-2"></i>Keamanan dan Privasi
                    </h4>
                    <p class="faq-group-description">
                        Privasi dan keamanan data Anda adalah prioritas kami. Kategori ini menjelaskan bagaimana data
                        Anda disimpan dan dilindungi saat menggunakan layanan helpdesk.
                    </p>
                    <div class="accordion" id="accordionGroupKeamananSatu">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingKeamananSatu">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseKeamananSatu">
                                    Apakah data saya akan aman?
                                </button>
                            </h2>
                            <div id="collapseKeamananSatu" class="accordion-collapse collapse"
                                data-bs-parent="#accordionGroupKeamananDua">
                                <div class="accordion-body">
                                    Anda dapat menghubungi admin atau membuka kembali tiket untuk melakukan perubahan
                                    jika laporan belum diproses lebih lanjut oleh tim terkait.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingKeamananDua">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseKeamananDua">
                                    Siapa saja yang bisa melihat laporan saya?
                                </button>
                            </h2>
                            <div id="collapseKeamananDua" class="accordion-collapse collapse"
                                data-bs-parent="#accordionGroupKeamananDua">
                                <div class="accordion-body">
                                    Ya, semua data Anda akan disimpan dengan aman sesuai dengan kebijakan privasi kami
                                    dan hanya digunakan untuk keperluan penanganan laporan.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingKeamananTiga">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseKeamananTiga">
                                    Apakah laporan saya bisa dibuat anonim?
                                </button>
                            </h2>
                            <div id="collapseKeamananTiga" class="accordion-collapse collapse"
                                data-bs-parent="#accordionGroupKeamananTiga">
                                <div class="accordion-body">
                                    Ya, semua data Anda akan disimpan dengan aman sesuai dengan kebijakan privasi kami
                                    dan hanya digunakan untuk keperluan penanganan laporan.
                                </div>
                            </div>
                        </div>
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
