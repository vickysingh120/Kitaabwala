
<!-- The Modal -->
<div class="modal fade" id="myLogin">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title">Login Here</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="pages/logindb.php">
          <div class="form-group">
            <label>Mobile/Email</label>
            <input type="text" class="form-control" name="user_mob_email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="user_password">
          </div>
          <div class=" form-group" >
             <button style="width:100%" type="submit" class="btn btn-success" name="submit">Login</button>
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