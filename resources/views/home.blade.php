<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Initiatives Zambia</title>

    <!-- Google Fonts for Modern Look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* === Color Palette === */
        :root {
            --primary: #00A651; /* Green */
            --secondary: #FF6600; /* Orange */
            --accent: #E30613; /* Red */
            --link: #0072BC; /* Blue */
            --text: #2C2C2C;
            --background: #FFFFFF;
            --light-gray: #F5F5F5;
        }

        /* === Global Styles === */
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

        a {
            text-decoration: none;
            color: inherit;
        }

        /* === Navbar === */
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

        /* === Hero Section === */
        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 80vh;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 2rem;
        }

        .hero h2 {
            font-size: 3rem;
            font-weight: 700;
            max-width: 800px;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.3rem;
            max-width: 700px;
            margin-bottom: 2rem;
        }

        .btn {
            background: var(--accent);
            color: white;
            border: none;
            padding: 12px 28px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .btn:hover {
            background: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 6px 14px rgba(0,0,0,0.3);
        }

        /* === Highlight Section === */
        .highlights {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 4rem 3rem;
            background: var(--light-gray);
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin-bottom: 0.8rem;
            color: var(--primary);
            font-size: 1.5rem;
        }

        /* === Footer === */
        footer {
            background: var(--primary);
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
            font-size: 0.9rem;
        }

        /* === Responsive Design === */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
            }
            nav a {
                margin: 10px 10px 0 10px;
            }
            .hero h2 {
                font-size: 2rem;
            }
            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header>
        <h1>SiHDZ</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Projects</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h2>Building a Healthier & More Developed Zambia</h2>
        <p>Empowering communities by connecting local ideas, initiatives & innovations to the global health & development agenda.</p>
        <button class="btn">Learn More</button>
    </section>

    <!-- Highlights Section -->
    <section class="highlights">
        <div class="card">
            <h3>Community Health</h3>
            <p>Programs to improve access to healthcare and promote sustainable health practices.</p>
        </div>
        <div class="card">
            <h3>Education & Innovation</h3>
            <p>Supporting science-driven innovations and education for community development.</p>
        </div>
        <div class="card">
            <h3>Entrepreneurship</h3>
            <p>Equipping youth and women with skills to create sustainable livelihoods.</p>
        </div>
        <div class="card">
            <h3>Environmental Action</h3>
            <p>Promoting green solutions and climate-friendly initiatives for future generations.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Scientific Initiatives Zambia. All Rights Reserved.</p>
    </footer>

</body>
</html>
