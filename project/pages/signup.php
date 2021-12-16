
<!-- The Modal -->
<div class="modal fade" id="mySignup">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title">SignUp Now</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="pages/signupdb.php">
          <div class="row">
          <div class="col-md-6 form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="user_fname">
          </div>
          <div class="col-md-6 form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="user_lname">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
             <label>Email Id</label>
            <input type="email" class="form-control" name="user_email">
          </div>
          <div class="col-md-6">
            <label>Mobile Number</label>
            <input type="text" class="form-control" name="user_mobile">
          </div>
        </div>
         <div class="row">
          <div class="col-md-12 form-group">
             <label>Password</label>
            <input type="password" class="form-control" name="user_password">
          </div>
          </div>
          <div class=" form-group" >
             <button style="width:100%" type="submit" class="btn btn-success" name="submit">Signup</button>
          </div>
      

        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>