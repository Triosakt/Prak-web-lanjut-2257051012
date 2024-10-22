<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Link to Google Fonts for Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Link to Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'roboto': ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        'primary': '#7C90C7', /* Mengganti warna primary menjadi pink redup */
                        'secondary': '#E53E3E',
                        'accent': '#4299E1',
                        'background': '#EDF2F7',
                        'highlight': '#F7FAFC',
                        'gradientStart': '#7F7FD5',
                        'gradientEnd': '#86A8E7',
                        'gradientMiddle': '#91EAE4'
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: linear-gradient(to bottom right, #7F7FD5, #86A8E7, #91EAE4); /* Background gradient */
            min-height: 100vh;
        }
    </style>
</head>

<body class="text-gray-900">

    <!-- Header with Breadcrumb - positioned on the right -->
    <header class="bg-primary text-white">
        <div class="container mx-auto px-6 py-4 flex justify-end"> <!-- Header aligned to the right -->
            <h1 class="text-4xl font-bold">{{ $title }}</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-10 px-6 py-4"> <!-- Spacing made more distinct -->
        @yield('content')
    </main>

    <!-- Footer fixed at the bottom -->
    <footer class="bg-primary text-white text-center py-4 mt-10">
        <p>&copy; Utp WL-trio sakti ardika .</p>
    </footer>

    <!-- JavaScript for confirmation on delete -->
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this user?");
        }
    </script>
</body>

</html>
