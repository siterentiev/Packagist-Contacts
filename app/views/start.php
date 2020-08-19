<?php
$this->layout('layout', ['title' => 'Start Page']) ?>

<small>
    <?= $this->e($name) ?>
</small>
</h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <br>
            <br>
            <br>

            <p>Enter your email and password and press Submit</p>
            <form action="/login" method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

