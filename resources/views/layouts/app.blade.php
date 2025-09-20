<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Scientific Initiatives Zambia')</title>

    <!-- Google Fonts for Modern Look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* === Color Palette === */
        :root {
            --primary: #00A651;
            --secondary: #FF6600;
            --accent: #E30613;
            --link: #0072BC;
            --text: #2C2C2C;
            --background: #FFFFFF;
            --light-gray: #F5F5F5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--background);
            color: var(--text);
            line-height: 1.6;
        }

        header {
            background: var(--primary);
            color: white;
            padding: 1rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        nav a {
            color: white;
            margin-left: 25px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--secondary);
        }

        main {
            min-height: 70vh;
        }

        footer {
            background: var(--primary);
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
            }
            nav a {
                margin: 10px 10px 0 10px;
            }
        }
    </style>

    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    <header>
        <h1>SiHDZ</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/projects') }}">Projects</a>
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Scientific Initiatives Zambia. All Rights Reserved.</p>
    </footer>

    @stack('scripts')
</body>
</html>
