<?php
$this->layout('layout', ['title' => 'Change User Status']) ?>

<small>
    <?= $this->e($name) ?>
</small>
</h1>
<p>for <?= ($username); ?></p>
</div>
<form action="/set" method="post">
    <div class="row">
        <div class="col-xl-6">
            <div id="panel-1" class="panel">
                <div class="panel-container">
                    <div class="panel-hdr">
                        <h2>General</h2>
                    </div>
                    <div class="panel-content">
                        <div class="panel-tag">
                            Choose one of three statuses: online, away, busy
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- status -->
                                <div class="form-group">
                                    <label class="form-label" for="status">Choose Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="0">Online</option>
                                        <option value="1">Away</option>
                                        <option value="2">Busy</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="id" id="id" class="form-control" value="<?= $user['id']; ?>">
                            <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                <button class="btn btn-warning" type="submit">Set Status</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
