<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])
</head>
<body style="background-color: black">

    <div>
        <nav style="display: flex;
    align-items: center;
    justify-content: space-between;">
            <div style="display: flex;
    align-items: center;">
                <a href="" style="margin-left: 15px;">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div style="display: flex;
    align-items: center;">
                <a href="#" style="margin-left: 15px;">Jobs</a>
                <a href="#" style="margin-left: 15px;">Carrers</a>
                <a href="#" style="margin-left: 15px;">Salaries</a>
                <a href="#" style="margin-left: 15px;">Companies</a>
            </div>

            <div style="display: flex;
    align-items: center;">
                <a href="#" style="margin-left: 15px;">Post a job</a>
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>
    
</body>
</html> 