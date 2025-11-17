<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Hairullah</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #333;
        }

        header {
            text-align: center;
            padding: 90px 20px;
            background: linear-gradient(135deg, #1f2937, #4b5563);
            color: white;
        }

        header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
            margin-bottom: 20px;
        }

        .container {
            width: 90%;
            max-width: 900px;
            margin: 40px auto;
        }

        .section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 35px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .skills span {
            background: #2563eb;
            color: white;
            margin: 5px;
            padding: 8px 14px;
            border-radius: 20px;
            display: inline-block;
            font-size: 14px;
        }

        .project-card {
            margin-bottom: 25px;
            background: #f9fafb;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid #2563eb;
        }

        .project-card img,
        .project-card video {
            width: 100%;
            border-radius: 10px;
            margin-top: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #1f2937;
            color: white;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <img src="foto.jpg" alt="Foto Hairullah">
    <h1>Hairullah</h1>
    <p>Freelance • Programmer • CCTV & LAN Specialist</p>
</header>

<div class="container">

    <div class="section">
        <h2>Tentang Saya</h2>
        <p>
            Saya Hairullah, seorang freelancer yang berfokus pada pemrograman, instalasi CCTV,
            konfigurasi LAN, dan layanan IT Support.  
            Saya menyediakan layanan instalasi, perbaikan, maintenance, dan pembuatan sistem sesuai kebutuhan client.
        </p>
    </div>

    <div class="section">
        <h2>Keahlian</h2>
        <div class="skills">
            <span>Programming Web PHP</span>
            <span>Programming Desktop VB 6.0</span>
            <span>Network LAN</span>
            <span>Instalasi CCTV</span>
            <span>IT Support</span>
            <span>Maintenance PC</span>
            <span>MySQL dan SQL Server 2000</span>
        </div>
    </div>

    <div class="section">
        <h2>Proyek (Foto & Video)</h2>

        <!-- PROYEK 1 -->
        <div class="project-card">
            <h3>Project Lab K3</h3>
            <p>Training Sistem Lab. K3</p>

            <!-- FOTO PROYEK -->
            <img src="k1.jpeg" alt="Foto Proyek CCTV">

            <!-- VIDEO PROYEK -->
            <video controls>
                <source src="kv1.mp4" type="video/mp4">
                Browser Anda tidak mendukung pemutaran video.
            </video>
        </div>

        <!-- PROYEK 2 -->
        <div class="project-card">
            <h3>Project Cab. Pertamina</h3>
            <p>Training Cab. Pertamina BJB</p>

            <!-- VIDEO PROYEK -->
            <video controls>
                <source src="pr1.mp4" type="video/mp4">
                <source src="pr2.mp4" type="video/mp4">
                Browser Anda tidak mendukung pemutaran video.
            </video>
            <video controls>
                <source src="pr2.mp4" type="video/mp4">
                Browser Anda tidak mendukung pemutaran video.
            </video>

        </div>

        <h2>Proyek (Foto)</h2>

        <!-- PROYEK 3 -->
        <div class="project-card">
            <h3>Project CCTV Lab Bruntung</h3>
            <p>Perbaikan CCTV Rusak</p>

            <!-- FOTO PROYEK -->
            <img src="L6.jpeg" alt="Foto Perbaikan CCTV">

        </div>

        <div class="project-card">
            <h3>Project CCTV Lab Bruntung</h3>
            <p>Perbaikan CCTV Rusak</p>

            <!-- FOTO PROYEK -->
            <img src="L3.jpeg" alt="Foto Perbaikan CCTV">

        </div>

        <div class="project-card">
            <h3>Project BOSS Billiard BJB (Sistem Desktop)</h3>
            <p>Instalasi Sistem BOSS</p>

            <!-- FOTO PROYEK -->
            <img src="B1.jpeg" alt="Foto Instalasi Sistem">

        </div>

        <div class="project-card">
            <h3>Laponda (Sistem Desktop)</h3>
            <p>Instalasi Sistem</p>

            <!-- FOTO PROYEK -->
            <img src="P1.jpeg" alt="Foto Instalasi Sistem">

        </div>

    </div>

    <div class="section">
        <h2>Kontak</h2>
        <p>Email: hairul.bolang.0002@gmail.com</p>
        <p>WhatsApp: 081528282810</p>
    </div>

</div>

<footer>
    © 2025 – Portofolio Hairullah
</footer>

</body>
</html>
