<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
            <div class="" >
                <h1><?php echo e($post->title); ?></h1>
                <p><?php echo e($post->body); ?></p>
                <h5>Author: <?php echo e($post->author); ?></h5>
                <p>active: <?php echo e($post->active); ?></p>
            </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <a href="/all"><button>ყველას ნახვა</button></a>
    

    <div class="text-center" style="padding-top:50px">
        <form action="/" method="post">
            <?php echo csrf_field(); ?>
            <input class="form-control d-inline-block w-25"  type="text" name="title" placeholder="title"> <br>
            <input class="form-control d-inline-block w-25"  type="text" name="body" placeholder="body"> <br>
            <input class="form-control d-inline-block w-25"  type="text" name="author" placeholder="author"> <br>
            <input class="form-control d-inline-block w-25"  type="number" name="active" placeholder="active"> <br>
            <button class="btn btn-success m-2 w-25">შექმნა</button>   
        </form>
    </div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\irakli\Desktop\php projects\irakli\resources\views/welcome.blade.php ENDPATH**/ ?>