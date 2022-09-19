
@vite('resources/css/app.css')


<div class="flex justify-center items-center w-screen h-full">
    <div class="flex flex-col border-neutral-500 border-2 w-full h-full rounded-lg grid-cols-2 
            sm:flex-col md:flex-row md:w-4/5 md:h-3/4 ">
        <!-- LEFT IMAGE -->
        <div class="order-1 bg-slate-800 h-1/2 w-1/2 md:w-full md:h-full">

        </div>

        <div class="order-2 flex justify-center items-center bg-slate-500 h-1/2 w-1/2  md:w-full md:h-full">
        <form class="w-full flex flex-col">
            <h1>LOGIN</h1>
            <input class="mt-5" type="text" placeholder="Enter your branch no.">
            <input class="mt-2" type="password" placeholder="Password">
            <button class="bg-blue-500 px-5 py-2 mt-2"type="submit">Sign In</button>
        </form>
        </div>
    </div>

</div>