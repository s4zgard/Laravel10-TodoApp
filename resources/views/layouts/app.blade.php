<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Task App</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function showText() {
            document.getElementById('taskText').style.opacity = '1';
        }
    
        function hideText() {
            document.getElementById('taskText').style.opacity = '0';
        }
    </script>
    <style type="text/tailwindcss">
        .svg-icon:hover + span {
            opacity: 100;
        }

        .btn {
            @apply text-base text-white text-center py-1 px-2 rounded-lg shadow-lg focus:outline-none focus:ring focus:border-teal-300 transition duration-200
        }

        .bt-link{
            @apply mb-4 font-medium inline-flex items-center
        }

        label {
            @apply block uppercase text-slate-700 mb-2
        }
        input,textarea {
            @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:shadow-xl
        }
        .error-msg{
            @apply text-red-500 text-sm
        }
        .session {
            @apply mb-10 rounded border px-4 py-3 text-lg
        }
        .success{
            @apply border-green-400 bg-green-100 text-green-700
        }
        .danger{
            @apply border-red-400 bg-red-100 text-red-700
        }
       

    </style>
    @yield('styles')
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
   
    <div x-data="{flash : true}">

        @if (session()->has('success'))
            <div x-show="flash" class="relative session success" role="alert"> 
            
                
                <strong class="font-bold">Success!</strong>
                <div>{{ session('success') }}</div> 
                
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" @click="flash = false" class="cursor-pointer" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                </span>
            </div>

        @endif
        
        <h1 class="text-2xl mb-4">@yield('head')</h1>
        
        @yield('content')
    </div>
</body>
</html>