<div class="container">
    <h1 class="heading">signup</h1>
    <form method="POST" action="./server/requests.php">

  <div class="col-6 offset-sm-3 margin-bottom-15" >
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter User Email">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Confirm Your Password</label>
    <input type="password" name="c_password" class="form-control" id="_cpassword" placeholder="Enter your password">
  </div>

  <div class="col-6 offset-sm-3">
    <button type="submit" name="signup" class="btn btn-primary">signup</button>
  </div>

  </form>
</div>