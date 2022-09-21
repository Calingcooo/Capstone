
@vite('resources/css/app.css')


<div class="flex items-center">

    <div class="w-full max-w-sm p-6 m-auto mx-auto bg-white rounded-md shadow-md md:w-1/2">

        <!-- LOGO -->
        <div>
            <img src="images/Logo.png" alt="" class="w-full h-20" />
        </div>

        <!-- FORM -->
        <form class="mt-6">
            <div>
                <label for="username" class="block text-sm text-gray-800">Username</label>
                <input type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div class="mt-4">
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm text-gray-800">Password</label>
                </div>
                <input type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border rounded-md focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                
                <div class="mt-3">
                    <a href="#" class="text-xs text-gray-600 hover:underline">Forget Password?</a>
                </div>
            </div>

            <div class="mt-6">
                <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                    Login
                </button>
            </div>
            
            <div class="mt-3 text-center">
                <a href="#" class="text-xs text-blue-600 hover:underline">Already Registered?</a>
            </div>
        </form>
    </div>
</div>