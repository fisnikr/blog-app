<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="flex flex-col items-center p-12 mx-auto space-y-4">
    <?php  foreach ($posts as $post) : ?>
     <article class="bg-gray-100 p-4 space-y-2 rounded-md shadow-md">

        
        <h2 class="font-bold text-xl">
            <a href="/posts/<?= $post->slug; ?>">
                <?= $post->title; ?>
            </a>
        </h2>
        <div>
        <?= $post->excerpt; ?>
        </div>
     </article>   
     <?php endforeach; ?>
    </div>
    
</body>
</html>