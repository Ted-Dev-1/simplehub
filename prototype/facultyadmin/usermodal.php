<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <form action="code1.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">

                            <label for="username"> Username:</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>

                        <div class="form-group">

                            <label for="email"> Email:</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="youremail@smart.com">
                        </div>

                        <div class="form-group">

                            <label for="usertype"> Usertype:</label>

                            <select name="usertype" class="form-control" id="usertype">
                                <option value="admin">Admin</option>
                                <option value="mechanic">Mechanic</option>
                            </select>

                        </div>

                        <div class="form-group">

                            <label for="password"> Password:</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="yourpassword">
                        </div>

                        <div class="form-group">

                            <label for="confirm_password"> Confirm password:</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="confirmyourpassword">
                        </div>

                    </div>


                    <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="registerbtn">Register</button>
                    </div>

                </form>

                
            </div>
        </div>
    </div>