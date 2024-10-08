<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?famildy=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color: #060606; margin: 0px; color: white; font-family:'Hanken Grotesk', sans-serif">

    <div style="padding-left: 25px; padding-right: 25px;">
        <nav style="display: flex; align-items: center; justify-content:space-between; padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #888888; widht: 100%;">
            <div style="display: flex; align-items: center; justify-content:start;">
                <a href="/" style="">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div style="flex: 1; display: flex; justify-content: center; padding-left:48px;">
                <div style="display: flex; align-items: center; justify-content:center; start: white; font-weight: bold;">
                    <a href="#" style="margin-left: 0px; color: white; text-decoration: none;">Jobs</a>
                    <a href="#" style="margin-left: 15px; color: white; text-decoration: none;">Carrers</a>
                    <a href="#" style="margin-left: 15px; color: white; text-decoration: none;">Salaries</a>
                    <a href="#" style="margin-left: 15px; color: white; text-decoration: none;">Companies</a>
                </div>
            </div>

            @auth
                <div style="display: flex; align-items: center; justify-content:right; font-size: 16px;">
                    @can('delete users')
                        <span style="margin-right: 10px;">Delete Job</span>
                    @endcan
                    <a href="/jobs/create" style="margin-left: 0px; color: white; text-decoration: none;">Post a job</a>

                    <form method="POST" action="/logout" style="margin: 0; padding: 0;">
                        @csrf
                        @method('DELETE')
                        <button class="dugme-komponenta-nav">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div style="display: flex; align-items: center; text-color: white; font-weight: bold;">
                    <a href="/register" style="margin-left: 0px; color: white; text-decoration: none;">Sign Up</a>
                    <a href="/login" style="margin-left: 15px; color: white; text-decoration: none;">Log In</a>
                </div>
            @endguest

        </nav>

        <main style="margin-top: 25px; max-width:986px; margin: auto;">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
