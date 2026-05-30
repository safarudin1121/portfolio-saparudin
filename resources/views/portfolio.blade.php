<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio Saparudin</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}
:root{
    --primary:#60a5fa;
}

html{
    scroll-behavior:smooth;
}

body{
    background:#0f172a;
    color:white;
    padding-top:90px;
}

nav{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 40px;
    background:#111827;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    z-index:999;
}

/* Styling untuk Bingkai Bulat Logo "SAPAR" */
.logo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-shrink: 0; /* Mencegah logo gepeng saat layar mengecil */

    font-size: 11px; 
    font-weight: bold;
    color: white;
    letter-spacing: 0.5px;

    border: 2px solid rgba(255, 170, 120, 0.8);
    box-shadow:
        0 0 10px rgba(255, 170, 120, 0.8),
        0 0 20px rgba(255, 170, 120, 0.6),
        inset 0 0 10px rgba(255, 170, 120, 0.3);

    background: rgba(15, 23, 42, 0.8);
}

nav ul{
    display:flex;
    list-style:none;
    gap:30px;
}

nav a{
    color:white;
    text-decoration:none;
}

nav a:hover{
    color:var(--primary);
}

.hero{
    min-height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:20px;
}

.profile{
    width:250px;
    height:250px;
    border-radius:50%;
    object-fit:cover;
    object-position:center 20%;
    border:4px solid white;
    margin-bottom:15px;
    box-shadow:0 0 30px rgba(137, 37, 37, 0.3);
}

.hero h1{
    font-size:72px;
    margin-bottom:10px;
}

.hero p{
    max-width:700px;
    color:#cbd5e1;
    line-height:1.8;
    font-size:20px;
    margin-bottom:25px;
}

.btn{
    background:white;
    color:black;
    text-decoration:none;
    padding:15px 30px;
    border-radius:12px;
    font-weight:bold;
}

section{
    padding:80px 10%;
}

h2{
    margin-bottom:25px;
    font-size:32px;
}

#about p{
    color:#cbd5e1;
    line-height:1.8;
}

.cards{
    display:flex;
    gap:20px;
    overflow-x:auto;
    padding-bottom:15px;
}

.cards::-webkit-scrollbar{
    height:8px;
}

.cards::-webkit-scrollbar-thumb{
    background:#334155;
    border-radius:10px;
}

.card{
    min-width:300px;
    background:#1e293b;
    padding:25px;
    border-radius:15px;
    flex-shrink:0;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-10px);
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

.card h3{
    margin-bottom:10px;
}

.card p{
    color:#cbd5e1;
}

.skill-card{
    text-align:center;
    font-weight:bold;
}

#contact a{
    color:var(--primary);
}

#contact p{
    margin-bottom:15px;
}

footer{
    text-align:center;
    padding:25px;
    background:#111827;
}

.theme-buttons{
    display:flex;
    gap:10px;
    align-items:center;
}

.theme-buttons button{
    border:none;
    background:none;
    font-size:22px;
    cursor:pointer;
}

/* RESPONSIVE LAYAR HP/TABLET */
@media(max-width:768px){
    nav{
        /* Tetap mempertahankan posisi kiri-kanan, tidak memaksa vertikal kolom */
        flex-direction: row; 
        justify-content: space-between;
        padding: 15px 20px;
    }

    nav ul{
        /* Membuat menu navigasi membungkus dengan rapi jika ruang tidak cukup */
        flex-wrap: wrap;
        justify-content: flex-end;
        gap: 15px;
    }

    .hero h1{
        font-size:48px;
    }

    .profile{
        width:200px;
        height:200px;
    }

    .hero p{
        font-size:18px;
    }
}
</style>
</head>

<body>

<nav>
    <div class="logo">
        SAPAR
    </div>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#project">Project</a></li>
        <li><a href="#skill">Skill</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

<div class="hero">
    <img src="{{ asset('profil.jpeg') }}" class="profile" alt="Foto Profil Saparudin">
    <h1>Saparudin</h1>
    <p>
        Mahasiswa Semester 2 Teknologi Rekayasa Perangkat Lunak (TRPL)
        yang sedang mempelajari Web Development, Database,
        dan Pengembangan Aplikasi.
    </p>
    <a href="#project" class="btn">Lihat Project</a>
</div>

<section id="about">
    <h2>Tentang Saya</h2>
    <p>
        Mahasiswa semester 2 Program Studi Teknologi Rekayasa
        Perangkat Lunak (TRPL). Saat ini saya sedang mempelajari HTML, CSS,
        JavaScript, PHP, Laravel, dan MySQL.
    </p>
</section>

<section id="project">
    <h2>Project</h2>
    <div class="cards">
        <div class="card">
            <h3>Chat Member PHP</h3>
            <p>Aplikasi chat sederhana menggunakan PHP dan MySQL.</p>
        </div>
        <div class="card">
            <h3>CRUD Mahasiswa</h3>
            <p>Sistem pengelolaan data mahasiswa berbasis web.</p>
        </div>
        <div class="card">
            <h3>Portfolio Laravel</h3>
            <p>Website portfolio pribadi menggunakan Laravel.</p>
        </div>
        <div class="card">
            <h3>Visualisasi Data</h3>
            <p>Project Python dan Excel untuk analisis data.</p>
        </div>
    </div>
</section>

<section id="skill">
    <h2>Skill</h2>
    <div class="cards">
        <div class="card skill-card">HTML</div>
        <div class="card skill-card">CSS</div>
        <div class="card skill-card">JavaScript</div>
        <div class="card skill-card">PHP</div>
        <div class="card skill-card">Laravel</div>
        <div class="card skill-card">MySQL</div>
    </div>
</section>

<section id="education">
    <h2>Pendidikan</h2>
    <div class="card">
        <h3>Politeknik Negeri Batam</h3>
        <p>Teknologi Rekayasa Perangkat Lunak (TRPL) - Semester 2</p>
    </div>
</section>

<section id="learning">
    <h2>Sedang Dipelajari</h2>
    <div class="cards">
        <div class="card">
            <h3>Laravel</h3>
            <p>Mempelajari MVC, Routing, Migration, dan Blade.</p>
        </div>
        <div class="card">
            <h3>Database Design</h3>
            <p>Belajar desain database dan relasi tabel.</p>
        </div>
        <div class="card">
            <h3>REST API</h3>
            <p>Mempelajari komunikasi data antar aplikasi.</p>
        </div>
    </div>
</section>

<section id="stats">
    <h2>Statistik</h2>
    <div class="cards">
        <div class="card skill-card">
            <h3>5+</h3>
            <p>Project</p>
        </div>
        <div class="card skill-card">
            <h3>6+</h3>
            <p>Skill</p>
        </div>
        <div class="card skill-card">
            <h3>2</h3>
            <p>Semester</p>
        </div>
        <div class="card skill-card">
            <h3>100%</h3>
            <p>Semangat Belajar</p>
        </div>
    </div>
</section>

<section id="contact">
    <h2>Kontak</h2>
    <p>Email :
        <a href="mailto:saparudinlimbong1@gmail.com">
            saparudinlimbong1@gmail.com
        </a>
    </p>
    <p>Instagram :
        <a href="https://www.instagram.com/saparrr1111" target="_blank">
            @saparrr1111
        </a>
    </p>
    <p>GitHub :
        <a href="https://github.com/saparudin1121" target="_blank">
            github.com/saparudin1121
        </a>
    </p>
</section>

<footer>
    <p>Portfolio © 2026</p>
</footer>

</body>
</html>