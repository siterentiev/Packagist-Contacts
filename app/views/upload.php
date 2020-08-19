<?php
$this->layout('layout', ['title' => 'Upload Image']) ?>

<small>
    <?= $this->e($name) ?>
</small>
</h1>
<p>for <?= ($username); ?></p>
</div>
<form action="/image" method="post">
    <div class="row">
        <div class="col-xl-6">
            <div id="panel-1" class="panel">
                <div class="panel-container">
                    <div class="panel-hdr">
                        <h2>General</h2>
                    </div>
                    <div class="panel-content">
                        <div class="panel-tag">
                            Specify the path to upload your photo
                        </div>

                        <div class="form-group">
                            <img src="img/demo/authors/josh.png" alt="" class="img-responsive" width="200">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="photo">Default file input</label>
                            <input type="file" name="photo" id="photo" class="form-control-file">
                        </div>


                        <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                            <button class="btn btn-warning">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
