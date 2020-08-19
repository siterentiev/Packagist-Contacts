<?php
$this->layout('layout', ['title' => 'Manage Access']) ?>

<small>
    <?= $this->e($name) ?>
</small>
</h1>
<a class="btn btn-primary" href="/home">Main Page</a>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <br>
            <p>Click 'Set Admin Access' or 'Remove Admin Access' to manage access control</p>
            <br>
                    <h3>Users</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Job Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php foreach ($usersInView as $user) : ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['username'] ?></td>
                                <td><?= $user['job'] ?></td>
                                <td>

                                    <?php if ($user['roles_mask'] == 0) : ?>
                                        <a href="/access?id=<?= $user['id'] ?>" class="btn btn-success">Set Admin Access</a>
                                    <?php else : ?>
                                        <a href="/access?id=<?= $user['id'] ?>" class="btn btn-danger">Remove Admin Access</a>
                                    <?php endif; ?>

                                    <?php if ($user['roles_mask'] == 0) : ?>
                                    <a href="/loginas?id=<?= $user['id'] ?>" class="btn btn-warning">Login As This User</a>
                                    <?php endif; ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>

        </div>
    </div>
</div>
