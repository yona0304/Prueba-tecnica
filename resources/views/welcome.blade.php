<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/script.js'])
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div id="welcome"
            class="hidden max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bienvenido</h5>
            </a>
            <p id="message" class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
            <a href="#" id="logout-btn"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Cerrar sesion
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>

        <div id="app">
            <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden md:grid md:grid-cols-2">
                <div class="hidden md:block">
                    <img src="{{ asset('image/presentation.jpg') }}" alt="presentación"
                        class="object-cover w-full h-full">
                </div>

                <div class="p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 text-center">Bienvenido, afiliado! 👋</h2>
                    <p class="mt-2 text-sm text-gray-600 text-center">Por favor escribe tus credenciales para ingresar
                    </p>

                    <form action="" method="POST" class="mt-6" id="login-form">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-500">Correo
                                electrónico</label>
                            <input type="email" id="email" name="email" placeholder="example@example.com"
                                autocomplete="off"
                                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-300"
                                >
                        </div>

                        <div class="mt-4">
                            <label for="password" class="block text-sm font-medium text-gray-500">Contraseña</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" placeholder="••••••••"
                                    class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-300">
                            </div>
                        </div>

                        <div class="flex justify-between items-center mt-4">
                            <div class="flex items-center">
                                <input id="ver" type="checkbox" value=""
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="ver"
                                    class="ms-2 text-sm font-medium text-gray-600 dark:text-gray-300">Ver
                                    contraseña</label>
                            </div>
                            <a href="#" class="text-sm text-indigo-600 hover:underline">Olvidé mi contraseña</a>
                        </div>

                        <button type="submit" id="login-btn"
                            class="w-full mt-4 bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">Iniciar
                            sesión</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</body>

</html>
