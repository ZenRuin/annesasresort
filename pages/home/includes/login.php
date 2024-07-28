<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-logo text-center">
                <img src="<?php echo $this->baseUrl; ?>assets/images/logo.png" alt="Logo" class="img-fluid">
            </div>

            <div class="modal-body">
                <form action="<?php echo $this->baseUrl; ?>index.php?action=login" method="POST">
                    <div class="mb-3">
                        <label for="usernamelogin" class="form-label">Email</label>
                        <input type="text" class="form-control" id="usernamelogin" name="username_login" placeholder="Username" autocomplete="true" required>
                    </div>
                    <div class="mb-3">
                        <label for="passwordlogin" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordlogin" name="password_login" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>
