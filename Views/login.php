<div class="container col-6 pt-5">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" novalidate action="" method="post">

                            <div class="col-md-12 my-4">
                                <input class="form-control" type="text" name="username" placeholder="username" required>
                                <div class="valid-feedback">Username field is valid!</div>
                                <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>


                            <div class="col-md-12 my-4">
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                       required>
                                <div class="valid-feedback">Password field is valid!</div>
                                <div class="invalid-feedback">Password field cannot be blank!</div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label">I confirm that all data are correct</label>
                                <div class="invalid-feedback">Please confirm that the entered data are all correct!
                                </div>
                            </div>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
