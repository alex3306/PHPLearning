

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <?php echo $__env->make('common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <!-- New Form -->
                    <form action="/form" method="POST" class="form-horizontal">
                        <?php echo e(csrf_field()); ?>


                        <!-- Form Name -->
                        <div class="form-group">
                            <label for="form-name" class="col-sm-3 control-label">Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="form-name" placeholder="Your name" class="form-control" value="<?php echo e(old('name')); ?>" maxlength="35">
                            </div>
                        </div>

                        <!-- Form phone -->
                        <div class="form-group">
                            <label for="form-phone" class="col-sm-3 control-label">Telephone</label>

                            <div class="col-sm-6">
                                <input type="text" name="phone" id="form-phone" placeholder="Phone" class="form-control" value="<?php echo e(old('phone')); ?>" maxlength="15">
                            </div>
                        </div>

                        <!-- Form Email -->
                        <div class="form-group">
                            <label for="form-email" class="col-sm-3 control-label">E-mail</label>

                            <div class="col-sm-6">
                                <input type="text" name="email" id="form-email" placeholder="example@email.com" class="form-control" value="<?php echo e(old('email')); ?>" maxlength="100">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <?php echo Recaptcha::render(); ?>

                            </div>
                        </div>
                    </form>
                </div>

            </div>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.masterForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>