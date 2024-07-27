<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="signupForm" action="<?php echo $this->baseUrl; ?>index.php?action=register" method="POST">
                    <div class="mb-3">
                        <label for="fName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fName" name="Fname_signup" placeholder="First Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="lName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lName" name="Lname_signup" placeholder="Last Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username_signup" placeholder="Username" autocomplete="true" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailsignup" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailsignup" name="Email_signup" placeholder="Email" autocomplete="true" required>
                    </div>
                    <div class="mb-3">
                        <label for="phonenumbersignup" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phonenumbersignup" name="Phonenumber_signup" maxlength="11" placeholder="09" required>
                    </div>
                    <div class="mb-3">
                        <label for="passwordsignup" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordsignup" name="password_signup" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="Cpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="Cpassword" name="Confirm_password" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>