<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $post->title; ?></title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="flex items-center p-12 mx-auto space-y-4 bg-gray-50">
    <article class="bg-white p-4 rounded lg">
        <h2 class="font-bold text-3xl">
        <?= $post->title; ?>
        </h2>
        <div class="py-2">
        <?= $post->body; ?>
        </div>
    
   
    </article>

    
    </div>
    <div class="flex items-start p-12 mx-auto">
       <span class="text-blue-300 font-semibold uppercase">
       <a href="/">Go back</a>
       </span>
    </div>
    
    
</body>
</html>