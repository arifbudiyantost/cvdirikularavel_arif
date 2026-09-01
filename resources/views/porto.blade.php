<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $name ?? 'Arif Budiyanto' }} | Junior Web Developer</title>

    <meta
        name="description"
        content="Portfolio {{ $name ?? 'Arif Budiyanto' }} - Fresh Graduate SMK Rekayasa Perangkat Lunak."
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap"
        rel="stylesheet"
    >

    <style>
        :root {
            --bg: #070b14;
            --bg-secondary: #0c1220;
            --card: rgba(17, 24, 39, .72);
            --card-hover: rgba(20, 30, 48, .95);

            --text: #f8fafc;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;

            --primary: #38bdf8;
            --primary-dark: #0284c7;
            --secondary: #818cf8;

            --border: rgba(148, 163, 184, .13);

            --container: 1120px;
            --radius: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background:
                radial-gradient(
                    circle at 10% 10%,
                    rgba(56, 189, 248, .08),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 90% 30%,
                    rgba(129, 140, 248, .07),
                    transparent 30%
                ),
                var(--bg);

            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            opacity: .25;
            z-index: -1;

            background-image:
                linear-gradient(
                    rgba(255,255,255,.02) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,.02) 1px,
                    transparent 1px
                );

            background-size: 50px 50px;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(var(--container), calc(100% - 40px));
            margin: auto;
        }

        /* =========================
           NAVBAR
        ========================== */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;

            border-bottom: 1px solid transparent;
            transition: .3s ease;
        }

        .navbar.scrolled {
            background: rgba(7, 11, 20, .85);
            backdrop-filter: blur(18px);
            border-color: var(--border);
        }

        .nav-inner {
            height: 75px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-family: 'JetBrains Mono', monospace;
            font-size: 20px;
            font-weight: 600;
        }

        .logo span {
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;

            color: var(--text-secondary);
            font-size: 14px;
        }

        .nav-links a {
            transition: .2s ease;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-button {
            padding: 10px 18px;

            border: 1px solid rgba(56, 189, 248, .35);
            border-radius: 10px;

            color: var(--primary) !important;

            transition: .25s ease;
        }

        .nav-button:hover {
            background: rgba(56, 189, 248, .08);
        }

        .menu-button {
            display: none;

            background: none;
            border: none;

            color: white;
            font-size: 25px;

            cursor: pointer;
        }

        /* =========================
           HERO
        ========================== */

        .hero {
            min-height: 100vh;

            display: flex;
            align-items: center;

            padding-top: 100px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            align-items: center;
            gap: 80px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 8px 13px;

            background: rgba(56, 189, 248, .07);
            border: 1px solid rgba(56, 189, 248, .18);
            border-radius: 999px;

            color: var(--primary);

            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;

            margin-bottom: 25px;
        }

        .status-dot {
            width: 7px;
            height: 7px;

            border-radius: 50%;
            background: #22c55e;

            box-shadow: 0 0 12px #22c55e;
        }

        .hero h1 {
            font-size: clamp(42px, 6vw, 72px);
            line-height: 1.05;
            letter-spacing: -3px;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero-description {
            max-width: 620px;

            color: var(--text-secondary);
            font-size: 17px;

            margin-bottom: 32px;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 13px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            padding: 13px 20px;

            border-radius: 10px;

            font-size: 14px;
            font-weight: 600;

            transition: .25s ease;
        }

        .btn-primary {
            color: #03121b;

            background: var(--primary);

            box-shadow: 0 10px 30px rgba(56, 189, 248, .15);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            background: #67d3ff;
        }

        .btn-secondary {
            border: 1px solid var(--border);
            color: var(--text-secondary);
            background: rgba(255,255,255,.02);
        }

        .btn-secondary:hover {
            color: white;
            border-color: rgba(56, 189, 248, .3);
            transform: translateY(-2px);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social-links a {
            color: var(--text-muted);
            font-size: 14px;

            transition: .2s ease;
        }

        .social-links a:hover {
            color: var(--primary);
        }

        /* =========================
           PROFILE
        ========================== */

        .profile-wrapper {
            display: flex;
            justify-content: center;
        }

        .profile-card {
            position: relative;

            width: 320px;
            height: 390px;

            padding: 10px;

            border-radius: 28px;

            background:
                linear-gradient(
                    145deg,
                    rgba(56,189,248,.35),
                    rgba(129,140,248,.1),
                    rgba(255,255,255,.02)
                );

            transform: rotate(3deg);
        }

        .profile-card-inner {
            width: 100%;
            height: 100%;

            overflow: hidden;

            border-radius: 22px;

            background: #111827;

            transform: rotate(-3deg);

            border: 1px solid rgba(255,255,255,.08);
        }

        .profile-card img {
            width: 100%;
            height: 100%;

            object-fit: cover;
        }

        .profile-placeholder {
            height: 100%;

            display: flex;
            align-items: center;
            justify-content: center;

            color: var(--text-muted);

            text-align: center;
            padding: 30px;

            background:
                radial-gradient(
                    circle,
                    rgba(56,189,248,.12),
                    transparent 60%
                );
        }

        .profile-placeholder div {
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
        }

        .profile-card::after {
            content: "";

            position: absolute;

            width: 80px;
            height: 80px;

            right: -35px;
            bottom: -30px;

            border-radius: 50%;

            background: var(--primary);
            filter: blur(45px);
            opacity: .3;

            z-index: -1;
        }

        /* =========================
           SECTION
        ========================== */

        section {
            padding: 110px 0;
        }

        .section-header {
            max-width: 600px;
            margin-bottom: 50px;
        }

        .section-label {
            display: inline-block;

            margin-bottom: 12px;

            color: var(--primary);

            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
        }

        .section-title {
            font-size: clamp(30px, 4vw, 44px);
            letter-spacing: -1.5px;
            margin-bottom: 15px;
        }

        .section-description {
            color: var(--text-secondary);
        }

        /* =========================
           ABOUT
        ========================== */

        .about-grid {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            gap: 70px;
            align-items: center;
        }

        .about-box {
            padding: 30px;

            background: var(--card);

            border: 1px solid var(--border);
            border-radius: var(--radius);

            backdrop-filter: blur(12px);
        }

        .about-code {
            color: #64748b;
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            line-height: 2;
        }

        .about-code .key {
            color: #38bdf8;
        }

        .about-code .value {
            color: #a5f3fc;
        }

        .about-content p {
            color: var(--text-secondary);
            margin-bottom: 18px;
        }

        /* =========================
           SKILLS
        ========================== */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .skill-card {
            padding: 24px;

            background: var(--card);

            border: 1px solid var(--border);
            border-radius: 15px;

            transition: .25s ease;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            background: var(--card-hover);
            border-color: rgba(56,189,248,.25);
        }

        .skill-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 10px;

            margin-bottom: 15px;

            background: rgba(56,189,248,.08);
            color: var(--primary);

            font-family: 'JetBrains Mono', monospace;
            font-weight: 600;
        }

        .skill-card h3 {
            font-size: 16px;
            margin-bottom: 7px;
        }

        .skill-card p {
            color: var(--text-muted);
            font-size: 13px;
        }

        /* =========================
           PROJECT
        ========================== */

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .project-card {
            overflow: hidden;

            background: var(--card);

            border: 1px solid var(--border);
            border-radius: var(--radius);

            transition: .3s ease;
        }

        .project-card:hover {
            transform: translateY(-6px);
            border-color: rgba(56,189,248,.25);
        }

        .project-image {
            height: 210px;

            display: flex;
            align-items: center;
            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    rgba(56,189,248,.12),
                    rgba(129,140,248,.1)
                );

            color: var(--text-muted);

            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-content {
            padding: 25px;
        }

        .project-content h3 {
            margin-bottom: 10px;
        }

        .project-content p {
            color: var(--text-secondary);
            font-size: 14px;
            margin-bottom: 18px;
        }

        .tags {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .tag {
            padding: 5px 9px;

            background: rgba(56,189,248,.07);
            border: 1px solid rgba(56,189,248,.12);

            color: #7dd3fc;

            border-radius: 6px;

            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
        }

        /* =========================
           EDUCATION
        ========================== */

        .timeline {
            position: relative;

            max-width: 800px;
        }

        .timeline::before {
            content: "";

            position: absolute;

            top: 0;
            bottom: 0;
            left: 7px;

            width: 1px;

            background: var(--border);
        }

        .timeline-item {
            position: relative;

            padding-left: 40px;
            margin-bottom: 35px;
        }

        .timeline-dot {
            position: absolute;

            top: 5px;
            left: 0;

            width: 15px;
            height: 15px;

            border-radius: 50%;

            background: var(--bg);

            border: 3px solid var(--primary);
        }

        .timeline-date {
            color: var(--primary);

            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;

            margin-bottom: 5px;
        }

        .timeline-item h3 {
            font-size: 18px;
        }

        .timeline-item p {
            color: var(--text-secondary);
            font-size: 14px;
        }

        /* =========================
           CONTACT
        ========================== */

        .contact-box {
            position: relative;
            overflow: hidden;

            padding: 55px;

            text-align: center;

            background:
                radial-gradient(
                    circle at 50% 0%,
                    rgba(56,189,248,.12),
                    transparent 50%
                ),
                var(--card);

            border: 1px solid var(--border);
            border-radius: 25px;
        }

        .contact-box h2 {
            font-size: clamp(30px, 4vw, 45px);
            margin-bottom: 15px;
        }

        .contact-box p {
            max-width: 600px;

            margin: 0 auto 28px;

            color: var(--text-secondary);
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;

            margin-top: 25px;
        }

        .contact-info a {
            color: var(--text-secondary);
            font-size: 14px;

            transition: .2s ease;
        }

        .contact-info a:hover {
            color: var(--primary);
        }

        /* =========================
           FOOTER
        ========================== */

        footer {
            padding: 30px 0;

            border-top: 1px solid var(--border);

            color: var(--text-muted);

            font-size: 13px;
            text-align: center;
        }

        footer span {
            color: var(--primary);
        }

        /* =========================
           ANIMATION
        ========================== */

        .fade-up {
            opacity: 0;
            transform: translateY(25px);

            transition:
                opacity .7s ease,
                transform .7s ease;
        }

        .fade-up.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* =========================
           RESPONSIVE
        ========================== */

        @media (max-width: 850px) {

            .nav-links {
                position: absolute;

                top: 75px;
                left: 20px;
                right: 20px;

                display: none;
                flex-direction: column;
                align-items: stretch;

                padding: 20px;

                background: rgba(12,18,32,.97);

                border: 1px solid var(--border);
                border-radius: 15px;

                backdrop-filter: blur(20px);
            }

            .nav-links.active {
                display: flex;
            }

            .menu-button {
                display: block;
            }

            .hero-grid,
            .about-grid {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .hero {
                padding-top: 130px;
            }

            .profile-wrapper {
                order: -1;
            }

            .profile-card {
                width: 270px;
                height: 330px;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 550px) {

            .container {
                width: min(100% - 28px, var(--container));
            }

            section {
                padding: 80px 0;
            }

            .hero h1 {
                font-size: 42px;
                letter-spacing: -2px;
            }

            .hero-description {
                font-size: 15px;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .contact-box {
                padding: 35px 20px;
            }

            .profile-card {
                width: 240px;
                height: 295px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->

    <header class="navbar" id="navbar">
        <div class="container nav-inner">

            <a href="#home" class="logo">
                &lt;<span>Arif</span>/&gt;
            </a>

            <nav class="nav-links" id="navLinks">
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#education">Education</a>
                <a href="#contact" class="nav-button">Contact</a>
            </nav>

            <button
                class="menu-button"
                id="menuButton"
                aria-label="Menu"
            >
                ☰
            </button>

        </div>
    </header>


    <main>

        <!-- =========================
             HERO
        ========================== -->

        <section class="hero" id="home">

            <div class="container hero-grid">

                <div class="hero-content fade-up">

                    <div class="badge">
                        <span class="status-dot"></span>
                        Available for opportunity
                    </div>

                    <h1>
                        Halo, saya
                        <span>Arif Budiyanto.</span>
                    </h1>

                    <p class="hero-description">
                        Fresh Graduate SMK Rekayasa Perangkat Lunak
                        yang memiliki ketertarikan pada pengembangan
                        website, software, dan teknologi digital.
                    </p>

                    <div class="hero-actions">

                        <a href="#projects" class="btn btn-primary">
                            Lihat Portfolio
                            →
                        </a>

                        <a
                            href="{{ asset('cv/cv_arif.pdf') }}"
                            class="btn btn-secondary"
                            target="_blank"
                        >
                            Download CV
                        </a>

                    </div>

                    <div class="social-links">

                        <a
                            href="https://github.com/"
                            target="_blank"
                        >
                            GitHub
                        </a>

                        <a
                            href="https://linkedin.com/"
                            target="_blank"
                        >
                            LinkedIn
                        </a>

                        <a
                            href="mailto:emailkamu@gmail.com"
                        >
                            Email
                        </a>

                    </div>

                </div>


                <div class="profile-wrapper fade-up">

                    <div class="profile-card">

                        <div class="profile-card-inner">

                            <!--
                                Ganti dengan foto kamu:
                                public/images/profile.jpg
                            -->

                            <img
                                src="{{ asset('images/profile.png') }}"
                                alt="Foto Arif Budiyanto"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >

                            <div
                                class="profile-placeholder"
                                style="display:none;"
                            >
                                <div>
                                    Tambahkan foto kamu di
                                    <br>
                                    public/images/profile.jpg
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             ABOUT
        ========================== -->

        <section id="about">

            <div class="container">

                <div class="section-header fade-up">

                    <div class="section-label">
                        01. ABOUT ME
                    </div>

                    <h2 class="section-title">
                        Sedikit tentang saya.
                    </h2>

                </div>


                <div class="about-grid">

                    <div class="about-box fade-up">

                        <div class="about-code">

                            <div>
                                <span class="key">name</span>:
                                <span class="value">
                                    "Arif Budiyanto"
                                </span>,
                            </div>

                            <div>
                                <span class="key">education</span>:
                                <span class="value">
                                    "SMK Muhammadiyah 4 Yogyakarta"
                                </span>,
                            </div>

                            <div>
                                <span class="key">role</span>:
                                <span class="value">
                                    "Junior Developer"
                                </span>,
                            </div>

                            <div>
                                <span class="key">location</span>:
                                <span class="value">
                                    "Indonesia"
                                </span>,
                            </div>

                            <div>
                                <span class="key">learning</span>:
                                <span class="value">
                                    true
                                </span>
                            </div>

                        </div>

                    </div>


                    <div class="about-content fade-up">

                        <p>
                            Saya adalah lulusan SMK jurusan Rekayasa
                            Perangkat Lunak yang memiliki ketertarikan
                            besar terhadap dunia teknologi dan
                            pengembangan aplikasi.
                        </p>

                        <p>
                            Selama belajar di sekolah, saya mempelajari
                            dasar-dasar pemrograman, database,
                            pengembangan website, serta pembuatan
                            aplikasi menggunakan berbagai teknologi.
                        </p>

                        <p>
                            Saya senang mempelajari hal baru,
                            menyelesaikan masalah dengan teknologi,
                            dan terus mengembangkan kemampuan agar
                            dapat memberikan kontribusi yang baik
                            dalam tim maupun perusahaan.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             SKILLS
        ========================== -->

        <section id="skills">

            <div class="container">

                <div class="section-header fade-up">

                    <div class="section-label">
                        02. SKILLS
                    </div>

                    <h2 class="section-title">
                        Teknologi yang saya gunakan.
                    </h2>

                    <p class="section-description">
                        Beberapa teknologi dan tools yang saya
                        pelajari selama pendidikan dan project pribadi.
                    </p>

                </div>


                <div class="skills-grid">

                    <div class="skill-card fade-up">

                        <div class="skill-icon">
                            PHP
                        </div>

                        <h3>PHP</h3>

                        <p>
                            Pengembangan aplikasi web menggunakan PHP
                            dan konsep MVC.
                        </p>

                    </div>


                    <div class="skill-card fade-up">

                        <div class="skill-icon">
                            L
                        </div>

                        <h3>Laravel</h3>

                        <p>
                            Membuat aplikasi web menggunakan Laravel,
                            Blade, routing, dan database.
                        </p>

                    </div>


                    <div class="skill-card fade-up">

                        <div class="skill-icon">
                            JS
                        </div>

                        <h3>JavaScript</h3>

                        <p>
                            Membuat website yang interaktif dan
                            dinamis menggunakan JavaScript.
                        </p>

                    </div>


                    <div class="skill-card fade-up">

                        <div class="skill-icon">
                            HTML
                        </div>

                        <h3>HTML & CSS</h3>

                        <p>
                            Membuat interface website yang responsive
                            dan user-friendly.
                        </p>

                    </div>


                    <div class="skill-card fade-up">

                        <div class="skill-icon">
                            DB
                        </div>

                        <h3>MySQL</h3>

                        <p>
                            Mendesain database, membuat query,
                            relasi tabel, dan CRUD.
                        </p>

                    </div>


                    <div class="skill-card fade-up">

                        <div class="skill-icon">
                            Git
                        </div>

                        <h3>Git & GitHub</h3>

                        <p>
                            Version control dan pengelolaan source
                            code menggunakan Git.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             PROJECTS
        ========================== -->

        <section id="projects">

            <div class="container">

                <div class="section-header fade-up">

                    <div class="section-label">
                        03. PROJECTS
                    </div>

                    <h2 class="section-title">
                        Beberapa project saya.
                    </h2>

                    <p class="section-description">
                        Berikut beberapa project yang dapat
                        menunjukkan kemampuan saya dalam membuat
                        aplikasi.
                    </p>

                </div>


                <div class="projects-grid">

                    <!-- PROJECT 1 -->

                    <article class="project-card fade-up">

                        <div class="project-image">

                            <!--
                                Jika punya screenshot project:
                                public/images/project-1.jpg

                                Hapus komentar di bawah:
                            -->

                            <!--
                            <img
                                src="{{ asset('images/project-1.jpg') }}"
                                alt="Project 1"
                            >
                            -->

                            PROJECT PREVIEW
                        </div>

                        <div class="project-content">

                            <h3>
                                Sistem Informasi Sekolah
                            </h3>

                            <p>
                                Aplikasi web untuk mengelola data
                                siswa, guru, kelas, dan informasi
                                sekolah.
                            </p>

                            <div class="tags">

                                <span class="tag">
                                    Laravel
                                </span>

                                <span class="tag">
                                    PHP
                                </span>

                                <span class="tag">
                                    MySQL
                                </span>

                                <span class="tag">
                                    Bootstrap
                                </span>

                            </div>

                        </div>

                    </article>


                    <!-- PROJECT 2 -->

                    <article class="project-card fade-up">

                        <div class="project-image">
                            PROJECT PREVIEW
                        </div>

                        <div class="project-content">

                            <h3>
                                Website Kasir
                            </h3>

                            <p>
                                Aplikasi kasir sederhana dengan fitur
                                pengelolaan produk, transaksi, dan
                                laporan penjualan.
                            </p>

                            <div class="tags">

                                <span class="tag">
                                    PHP
                                </span>

                                <span class="tag">
                                    MySQL
                                </span>

                                <span class="tag">
                                    JavaScript
                                </span>

                                <span class="tag">
                                    CSS
                                </span>

                            </div>

                        </div>

                    </article>


                    <!-- PROJECT 3 -->

                    <article class="project-card fade-up">

                        <div class="project-image">
                            PROJECT PREVIEW
                        </div>

                        <div class="project-content">

                            <h3>
                                E-Commerce
                            </h3>

                            <p>
                                Website toko online sederhana dengan
                                katalog produk, keranjang belanja,
                                dan sistem pemesanan.
                            </p>

                            <div class="tags">

                                <span class="tag">
                                    Laravel
                                </span>

                                <span class="tag">
                                    MySQL
                                </span>

                                <span class="tag">
                                    Blade
                                </span>

                            </div>

                        </div>

                    </article>


                    <!-- PROJECT 4 -->

                    <article class="project-card fade-up">

                        <div class="project-image">
                            PROJECT PREVIEW
                        </div>

                        <div class="project-content">

                            <h3>
                                Portfolio Website
                            </h3>

                            <p>
                                Website portfolio pribadi untuk
                                menampilkan profil, kemampuan,
                                project, dan informasi kontak.
                            </p>

                            <div class="tags">

                                <span class="tag">
                                    Laravel
                                </span>

                                <span class="tag">
                                    Blade
                                </span>

                                <span class="tag">
                                    CSS
                                </span>

                                <span class="tag">
                                    JavaScript
                                </span>

                            </div>

                        </div>

                    </article>

                </div>

            </div>

        </section>


        <!-- =========================
             EDUCATION
        ========================== -->

        <section id="education">

            <div class="container">

                <div class="section-header fade-up">

                    <div class="section-label">
                        04. EDUCATION
                    </div>

                    <h2 class="section-title">
                        Pendidikan & pengalaman.
                    </h2>

                </div>


                <div class="timeline">

                    <div class="timeline-item fade-up">

                        <div class="timeline-dot"></div>

                        <div class="timeline-date">
                            2023 — 2026
                        </div>

                        <h3>
                            SMK Muhammadiyah 4 Yogyakarta
                        </h3>

                        <p>
                            Rekayasa Perangkat Lunak (RPL)
                        </p>

                        <p>
                            Mempelajari pemrograman, pengembangan
                            website, database, UI/UX, dan software
                            development.
                        </p>

                    </div>


                    <div class="timeline-item fade-up">

                        <div class="timeline-dot"></div>

                        <div class="timeline-date">
                            PKL / MAGANG
                        </div>

                        <h3>
                            PT. Global Intermedia Nusantara 
                        </h3>

                        <p>
                            Junior Web Developer / IT Intern
                        </p>

                        <h3>
                            PT. Carakan 
                        </h3>

                        <p>
                            Junior Mobile Developer / Flutter
                        </p>

                    </div>


                    <div class="timeline-item fade-up">

                        <div class="timeline-dot"></div>

                        <div class="timeline-date">
                            2026 — SEKARANG
                        </div>

                        <h3>
                            Personal Development
                        </h3>

                        <p>
                            Terus mengembangkan kemampuan di bidang
                            software development dan teknologi web.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             CONTACT
        ========================== -->

        <section id="contact">

            <div class="container">

                <div class="contact-box fade-up">

                    <div class="section-label">
                        05. CONTACT
                    </div>

                    <h2>
                        Mari bekerja sama.
                    </h2>

                    <p>
                        Saya terbuka untuk kesempatan kerja,
                        internship, freelance, maupun project
                        kolaborasi di bidang teknologi.
                    </p>

                    <a
                        href="mailto:emailkamu@gmail.com"
                        class="btn btn-primary"
                    >
                        Hubungi Saya
                        →
                    </a>


                    <div class="contact-info">

                        <a href="mailto:arifbudiyantost@gmail.com">
                            arifbudiyantost@gmail.com
                        </a>

                        <a
                            href="https://wa.me/6281234567890"
                            target="_blank"
                        >
                            WhatsApp
                        </a>

                        <a
                            href="https://github.com/username"
                            target="_blank"
                        >
                            GitHub
                        </a>

                        <a
                            href="https://linkedin.com/in/username"
                            target="_blank"
                        >
                            LinkedIn
                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        <div class="container">

            <p>
                © {{ date('Y') }}
                <span>Arif Budiyanto</span>.
                Built with Laravel.
            </p>

        </div>

    </footer>


    <!-- =========================
         JAVASCRIPT
    ========================== -->

    <script>

        // Navbar background ketika scroll

        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {

            if (window.scrollY > 30) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

        });


        // Mobile menu

        const menuButton = document.getElementById('menuButton');
        const navLinks = document.getElementById('navLinks');

        menuButton.addEventListener('click', () => {

            navLinks.classList.toggle('active');

        });


        // Tutup menu setelah klik

        document.querySelectorAll('.nav-links a').forEach(link => {

            link.addEventListener('click', () => {

                navLinks.classList.remove('active');

            });

        });


        // Scroll animation

        const observer = new IntersectionObserver(
            (entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add('show');

                    }

                });

            },
            {
                threshold: 0.12
            }
        );


        document
            .querySelectorAll('.fade-up')
            .forEach(element => {

                observer.observe(element);

            });

    </script>

</body>
</html>
