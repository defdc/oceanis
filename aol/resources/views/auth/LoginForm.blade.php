<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-gradient-to-br from-blue-600 to-cyan-300 flex flex-col justify-center items-center w-full overflow-hidden">

    <!-- Login Form -->
    <form method="POST" action="#">
        <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-xl max-w-sm">
            <div class="space-y-4">
                <h1 class="text-center text-2xl font-semibold text-gray-600">Login</h1>
                <hr>
                <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input class="pl-2 outline-none border-none w-full" type="email" name="email" value="" placeholder="Email" required/>
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input class="pl-2 outline-none border-none w-full" type="password" name="password" id="password" placeholder="Password" required/>
                </div>

                <!-- Show Password Checkbox -->
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="show-password" class="mr-2" />
                    <label for="show-password" class="text-sm text-gray-600">Show Password</label>
                </div>
            </div>
            <button type="submit" value="login" id="login" class="mt-6 w-full shadow-xl bg-gradient-to-tr from-blue-600 to-red-400 hover:to-red-700 text-indigo-100 py-2 rounded-md text-lg tracking-wide transition duration-1000">Login</button>
            <hr>
            <div class="flex justify-center items-center mt-4">
                <p class="inline-flex items-center text-gray-700 font-medium text-xs text-center">
                    <span class="ml-2">You don't have an account?<a href="#" class="text-xs ml-2 text-blue-500 font-semibold">Register now &rarr;</a>
                    </span>
                </p>
            </div>
        </div>
    </form>

    <!-- Home Button -->
    <div class="pt-6">
        <a href="/" class="shadow-xl bg-gradient-to-br from-green-500 to-green-700 hover:to-green-900 text-white font-bold py-2 px-6 rounded-md text-lg tracking-wide transition duration-500">
            &larr; Home
        </a>
    </div>

    <!-- Script to toggle password visibility -->
    <script>
        document.getElementById('show-password').addEventListener('change', function() {
            var passwordField = document.getElementById('password');
            if (this.checked) {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>

</body>
</html>
