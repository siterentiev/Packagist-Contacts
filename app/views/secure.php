<?php
$this->layout('layout', ['title' => 'Security Page']) ?>

<small>
    <?= $this->e($name) ?>
</small>
</h1>
<p>for <?= ($username); ?></p>
</div>
<form action="/change" method="post">
    <div class="row">
        <div class="col-xl-6">
            <div id="panel-1" class="panel">
                <div class="panel-container">
                    <div class="panel-hdr">
                        <h2>General</h2>
                    </div>
                    <div class="panel-content">
                        <div class="panel-tag">
                            Here you can change your mail or/and password. Fill all the fields.
                        </div>
                        <!-- email -->
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?= $user['email']; ?>">
                        </div>

                        <!-- password -->
                        <div class="form-group">
                            <label class="form-label" for="newPassword">Password</label>
                            <input type="password" name="newPassword" id="newPassword" class="form-control">
                        </div>

                        <!-- password confirmation-->
                        <div class="form-group">
                            <label class="form-label" for="passwordAgain">Password Confirmation</label>
                            <input type="password" name="passwordAgain" id="passwordAgain" class="form-control">
                        </div>
                        <input type="hidden" name="id" id="id" class="form-control" value="<?= $user['id']; ?>">


                        <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                            <button class="btn btn-warning" type="submit">Submit</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>