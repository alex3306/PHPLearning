<?php if(count($errors) > 0): ?>
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Баш сакатлък ефенди!</strong>

        <br><br>

        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
