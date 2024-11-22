

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Crear una Nueva Publicación</h1>
        <form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Titulo de la publicacion</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">breve Descripcion</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Coloca una imagen para tu post</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\blog7\resources\views/posts/create.blade.php ENDPATH**/ ?>