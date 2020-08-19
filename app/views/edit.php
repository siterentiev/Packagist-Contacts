<?php
$this->layout('layout', ['title' => 'Edit Contact']) ?>

                <small>
                    <?= $this->e($name) ?>
                </small>
            </h1>

        </div>
        <form action="/update" method="post">
            <div class="row">
                <div class="col-xl-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-hdr">
                                <h2>General</h2>
                            </div>
                            <div class="panel-content">
                                <div class="panel-tag">
                                    Here you can edit the basic information
                                </div>
                                <!-- username -->
                                <div class="form-group">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>">
                                </div>

                                <!-- title -->
                                <div class="form-group">
                                    <label class="form-label" for="job">Job Title</label>
                                    <input type="text" name="job" id="job" class="form-control" value="<?= $user['job']; ?>">
                                </div>

                                <!-- tel -->
                                <div class="form-group">
                                    <label class="form-label" for="phone">Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="form-control" value="<?= $user['phone']; ?>">
                                </div>

                                <!-- address -->
                                <div class="form-group">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" value="<?= $user['address']; ?>">
                                </div>
                                <input type="hidden" name="id" id="id" class="form-control" value="<?= $user['id']; ?>">
                                <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                    <button class="btn btn-warning" type="submit">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
