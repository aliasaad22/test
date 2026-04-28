<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=">
        <head>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>

    <body>
        
        <nav style="background:lightblue; padding:1em; text-align:center; ">
            <a style="color:red; padding:1em; ; " href="/">Home</a>
            <a style="color:red; padding:1em; ; " href="/contact">Contact</a>
             <a style="color:red; padding:1em; ; " href="/about">About</a>
             <a style="color:red; padding:1em; ; " href="/products">Products</a>
        </nav>
            {{ $slot }}
        
    </head>
    <body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-6">Product List</h1>
     <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    </body>
</html>
