<?php
$this->layout('layout', ['title' => 'Create Contact']) ?>

<small>
<?= $this->e($name) ?>
</small>
            </h1>

        </div>
        <form action="/new" method="post">
            <div class="row">
                <div class="col-xl-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-hdr">
                                <h2>General Information</h2>
                            </div>
                            <div class="panel-content">
                                <!-- username -->
                                <div class="form-group">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>

                                <!-- title -->
                                <div class="form-group">
                                    <label class="form-label" for="job">Job Title</label>
                                    <input type="text" name="job" id="job" class="form-control">
                                </div>

                                <!-- tel -->
                                <div class="form-group">
                                    <label class="form-label" for="phone">Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                </div>

                                <!-- address -->
                                <div class="form-group">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-hdr">
                                <h2>Security and Media</h2>
                            </div>
                            <div class="panel-content">
                                <!-- email -->
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>

                                <!-- password -->
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>


                                <!-- status -->
                                <div class="form-group">
                                    <label class="form-label" for="status">Choose Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="0">Online</option>
                                        <option value="1">Away</option>
                                        <option value="2">Busy</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="photo">Default file input</label>
                                    <input type="file" name="photo" id="photo" class="form-control-file">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-12">
                    <div id="panel-1" class="panel">
                        <div class="panel-container">
                            <div class="panel-hdr">
                                <h2>Social Media</h2>
                            </div>
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- vk -->
                                        <div class="input-group input-group-lg bg-white shadow-inset-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0 py-1 px-3">
                                                    <span class="icon-stack fs-xxl">
                                                        <i class="base-7 icon-stack-3x" style="color:#4680C2"></i>
                                                        <i class="fab fa-vk icon-stack-1x text-white"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <input type="text" name="vk" class="form-control border-left-0 bg-transparent pl-0">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- telegram -->
                                        <div class="input-group input-group-lg bg-white shadow-inset-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0 py-1 px-3">
                                                    <span class="icon-stack fs-xxl">
                                                        <i class="base-7 icon-stack-3x" style="color:#38A1F3"></i>
                                                        <i class="fab fa-telegram icon-stack-1x text-white"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <input type="text" name="telegram" class="form-control border-left-0 bg-transparent pl-0">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- instagram -->
                                        <div class="input-group input-group-lg bg-white shadow-inset-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent border-right-0 py-1 px-3">
                                                    <span class="icon-stack fs-xxl">
                                                        <i class="base-7 icon-stack-3x" style="color:#E1306C"></i>
                                                        <i class="fab fa-instagram icon-stack-1x text-white"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <input type="text" name="insta" class="form-control border-left-0 bg-transparent pl-0">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>