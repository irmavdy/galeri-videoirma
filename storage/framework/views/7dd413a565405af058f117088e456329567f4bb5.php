<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>IRMA VIDEO GALERI</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/examples/pricing/pricing.css" crossorigin="anonymous">
  </head>
  <body>
    
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">Galeri Video Irma</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="/videos/">Video Irma</a>
  </nav>
</header>

<main class="container">
  <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Video Irma</h1>
    <p class="lead">Welcome to my video galery!!!</p>
  </div>
  <a class="btn btn-outline-warning" href="/videos/upload">tambah video</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">judul</th>
      <th scope="col">keterangan</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($videos) > 0): ?>
    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($video->id); ?></th>
      <td><?php echo e($video->title); ?></td>
      <td>
          <a class="btn btn-warning" href="/videos/view/<?php echo e($video->id); ?>">Lihat</a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <tr>tidak ada video yang ditemukan</tr>
    <?php endif; ?>
  </tbody>
</table>
                    
</main>


    
  </body>
</html><?php /**PATH C:\xampp\htdocs\galeri video\resources\views/videos/index.blade.php ENDPATH**/ ?>