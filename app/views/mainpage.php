<?php $this->layout('layout') ?>

<small>
    <?= $this->e($name) ?>
</small>
</h1>
<p>for <?= ($username); ?></p>
</div>
<div class="row">
    <div class="col-xl-12">

        <?php if ($admin) : ?>
        <a class="btn btn-success" href="/add">Add User</a>
        <a class="btn btn-warning" href="/roles">Set Access</a>
        <?php endif; ?>
        <a class="btn btn-info" href="/">Log Out</a>

        <div class="border-faded bg-faded p-3 mb-g d-flex mt-3">
            <input type="text" id="js-filter-contacts" name="filter-contacts" class="form-control shadow-inset-2 form-control-lg" placeholder="Filter contacts">
            <div class="btn-group btn-group-lg btn-group-toggle hidden-lg-down ml-3" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input type="radio" name="contactview" id="grid" checked="" value="grid"><i class="fas fa-table"></i>
                </label>
                <label class="btn btn-default">
                    <input type="radio" name="contactview" id="table" value="table"><i class="fas fa-th-list"></i>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" id="js-contacts">

    <?php foreach ($usersInView as $user) : ?>
    <div class="col-xl-4">
        <div id="c_1" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="oliver kopyov">
            <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                <div class="d-flex flex-row align-items-center">
                            <span class="status status-success mr-3">
                                <span class="rounded-circle profile-image d-block " style="background-image:url('img/demo/avatars/avatar-b.png'); background-size: cover;"></span>
                            </span>
                    <div class="info-card-text flex-1">
                        <a href="javascript:void(0);" class="fs-xl text-truncate text-truncate-lg text-info" data-toggle="dropdown" aria-expanded="false">
                            <?= $user['username']; ?>
                            <i class="fal fas fa-cog fa-fw d-inline-block ml-1 fs-md"></i>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>
                        </a>

                        <div class="dropdown-menu">
                            <?php if ($admin) : ?>
                            <a class="dropdown-item" href="/edit?id=<?= $user['id'] ?>">
                                <i class="fa fa-edit"></i>
                                Edit Information</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="/secure?id=<?= $user['id'] ?>">
                                <i class="fa fa-lock"></i>
                                Security</a>
                            <a class="dropdown-item" href="/status?id=<?= $user['id'] ?>">
                                <i class="fa fa-sun"></i>
                                Set Status</a>
                            <a class="dropdown-item" href="/photo?id=<?= $user['id'] ?>">
                                <i class="fa fa-camera"></i>
                                Change Media
                            </a>
                            <?php if ($admin) : ?>
                            <a href="/delete?id=<?= $user['id'] ?>" class="dropdown-item" onclick="return confirm('are you sure?');">
                                <i class="fa fa-window-close"></i>
                                Delete User
                            </a>
                            <?php endif; ?>
                        </div>

                        <span class="text-truncate text-truncate-xl"><?= $user['job']; ?></span>
                    </div>
                    <button class="js-expand-btn btn btn-sm btn-default d-none" data-toggle="collapse" data-target="#c_1 > .card-body + .card-body" aria-expanded="false">
                        <span class="collapsed-hidden">+</span>
                        <span class="collapsed-reveal">-</span>
                    </button>
                </div>
            </div>
            <div class="card-body p-0 collapse show">
                <div class="p-3">
                    <a href="tel:+13174562564" class="mt-1 d-block fs-sm fw-400 text-dark">
                        <i class="fas fa-mobile-alt text-muted mr-2"></i> <?= $user['phone']; ?></a>
                    <a href="mailto:oliver.kopyov@smartadminwebapp.com" class="mt-1 d-block fs-sm fw-400 text-dark">
                        <i class="fas fa-mouse-pointer text-muted mr-2"></i> <?= $user['email']; ?></a>
                    <address class="fs-sm fw-400 mt-4 text-muted">
                        <i class="fas fa-map-pin mr-2"></i> <?= $user['address']; ?></address>
                    <div class="d-flex flex-row">
                        <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#4680C2">
                            <i class="fab fa-vk"></i>
                        </a>
                        <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#38A1F3">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="javascript:void(0);" class="mr-2 fs-xxl" style="color:#E1306C">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
