<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Akmal Fasyah Akhyari</title>
    <style>
        /* Sigma Male Color Theme */
        :root {
            --primary-color: #1a1a2e;
            --secondary-color: #16213e;
            --accent-color: #0f3460;
            --highlight-color: #e94560;
            --text-color: #f5f5f5;
            --text-secondary: #b0b0b0;
            --card-bg: #222538;
            --border-color: #30475e;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--text-color);
            min-height: 100vh;
            padding: 2rem;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: rgba(26, 26, 46, 0.7);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            border: 1px solid var(--border-color);
        }
        
        header {
            background: linear-gradient(to right, var(--secondary-color), var(--accent-color));
            padding: 2rem;
            text-align: center;
            color: var(--text-color);
            border-bottom: 3px solid var(--highlight-color);
            position: relative;
        }
        
        header h1 {
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            background-color: var(--secondary-color);
        }
        
        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 10px;
            object-fit: cover;
            border: 3px solid var(--highlight-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
        }
        
        .profile-name {
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            color: var(--text-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .profile-title {
            color: var(--highlight-color);
            margin-bottom: 1.5rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 1rem;
        }
        
        .info-section {
            padding: 2rem;
            background-color: var(--card-bg);
            margin: 1.5rem;
            border-radius: 5px;
            border-left: 3px solid var(--highlight-color);
        }
        
        .info-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--highlight-color);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 0.5rem;
        }
        
        .info-item {
            margin-bottom: 1.2rem;
            display: flex;
            align-items: flex-start;
        }
        
        .info-label {
            min-width: 180px;
            font-weight: 600;
            position: relative;
            padding-right: 10px;
            color: var(--text-secondary);
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        
        .info-label::after {
            content: ":";
            position: absolute;
            right: 0;
            color: var(--highlight-color);
        }
        
        .info-content {
            flex: 1;
            padding-left: 15px;
            font-weight: 500;
        }
        
        .about-me {
            padding: 2rem;
            background-color: var(--card-bg);
            margin: 1.5rem;
            border-radius: 5px;
            border-left: 3px solid var(--highlight-color);
        }
        
        .about-me p {
            line-height: 1.7;
            margin-bottom: 1rem;
            color: var(--text-secondary);
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            margin-top: 2rem;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 5px;
            background-color: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-color);
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid var(--border-color);
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
            background-color: var(--highlight-color);
            box-shadow: 0 5px 15px rgba(233, 69, 96, 0.4);
        }
        
        footer {
            text-align: center;
            padding: 1.5rem;
            background-color: var(--primary-color);
            color: var(--text-secondary);
            font-size: 0.9rem;
            border-top: 1px solid var(--border-color);
        }
        
        .section-divider {
            height: 3px;
            background: linear-gradient(to right, transparent, var(--highlight-color), transparent);
            margin: 0.5rem 0;
            width: 100%;
        }
        
        @media (max-width: 768px) {
            .info-item {
                flex-direction: column;
            }
            
            .info-label {
                margin-bottom: 0.5rem;
            }
            
            .info-label::after {
                content: ":";
                position: static;
                margin-left: 5px;
            }
            
            .info-content {
                padding-left: 0;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>BIODATA PERSONAL</h1>
        </header>
        
        <div class="profile-section">
            <!-- Menggunakan foto yang ada di folder public Laravel -->
            <img src="{{ asset('aku.jpg') }}" alt="Akmal Fasyah Akhyari" class="profile-img">
            
            <h2 class="profile-name">AKMAL FASYAH AKHYARI</h2>
            <p class="profile-title">MAHASISWA TEKNOLOGI INFORMASI</p>
        </div>
        
        <div class="info-section">
            <h3 class="info-title">
                <i class="fas fa-user-circle"></i> Informasi Pribadi
            </h3>
            
            <div class="info-item">
                <span class="info-label">Nama Lengkap</span>
                <span class="info-content">Akmal Fasyah Akhyari</span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Jenis Kelamin</span>
                <span class="info-content">Pria</span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Tempat, Tgl Lahir</span>
                <span class="info-content">Jakarta, 21 Juni 2004</span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Usia</span>
                <span class="info-content">20 Tahun</span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Alamat</span>
                <span class="info-content">Makasar, Kp. Melayu, Jakarta Timur</span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Hobi</span>
                <span class="info-content">Memasak</span>
            </div>
        </div>
        
        <div class="info-section">
            <h3 class="info-title">
                <i class="fas fa-graduation-cap"></i> Pendidikan
            </h3>
            
            <div class="info-item">
                <span class="info-label">Universitas</span>
                <span class="info-content">Bina Sarana Informatika</span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Fakultas</span>
                <span class="info-content">Teknik Informatika</span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Program Studi</span>
                <span class="info-content">Teknologi Informasi</span>
            </div>
            
            <div class="info-item">
                <span class="info-label">Semester</span>
                <span class="info-content">6 (Enam)</span>
            </div>
        </div>
        
        <div class="about-me">
            <h3 class="info-title">
                <i class="fas fa-quote-left"></i> Tentang Saya
            </h3>
            
            <p>Halo! Saya Akmal Fasyah Akhyari, seorang mahasiswa semester 6 di Universitas Bina Sarana Informatika jurusan Teknologi Informasi. Saya memiliki ketertarikan yang mendalam pada dunia teknologi dan informasi.</p>
            
            <div class="section-divider"></div>
            
            <p>Saat ini saya sedang fokus menyelesaikan studi di bidang Teknologi Informasi. Di waktu luang, saya senang mengeksplorasi dunia kuliner melalui hobi memasak saya. Memasak bagi saya bukan hanya sekadar aktivitas, tetapi juga bentuk kreativitas dan cara untuk berbagi kebahagiaan dengan orang lain.</p>
            
            <div class="section-divider"></div>
            
            <p>Sebagai seorang mahasiswa IT, saya selalu berusaha mengikuti perkembangan teknologi terbaru dan mengembangkan keterampilan yang relevan dengan bidang studi saya. Saya percaya bahwa kombinasi antara pendidikan formal dan pengembangan diri yang konsisten adalah kunci untuk mencapai kesuksesan di masa depan.</p>
            
            <div class="social-links">
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                <a href="#" class="social-icon"><i class="far fa-envelope"></i></a>
            </div>
        </div>
        
        <footer>
            <p>&copy; 2025 AKMAL FASYAH AKHYARI | PERSONAL WEBSITE</p>
        </footer>
    </div>
</body>
</html>
