<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Add New Game</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="game_add.php" >
        <div class="form-group">
            <label for="gamename" class="col-sm-3 control-label">Game Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="gamename" name="gamename" required>
            </div>
          </div>

          <div class="form-group">
            <label for="entry_fee" class="col-sm-3 control-label">Entry Fee</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="entry_fee" name="entry_fee" required>
            </div>
          </div>

          <div class="form-group">
            <label for="date" class="col-sm-3 control-label">Date</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="date" name="date" required>
            </div>
          </div>  

          <div class="form-group">
            <label for="time" class="col-sm-3 control-label">Time</label>
            <div class="col-sm-9">
              <input type="time" class="form-control" id="time" name="time" required>
            </div>
          </div>  

        <div class="form-group">
            <label for="team_numbers" class="col-sm-3 control-label">Team Numbers</label>
            <div class="col-sm-9">
              <select class="form-control" id="team_numbers" name="team_numbers" required>
              <option value="">Number</option>    
              <option value="1">1 Number</option>
              <option value="2">2 Numbers</option>
              <option value="4">4 Numbers</option>
              </select>
            </div>
          </div>
       
          <div class="form-group">
            <label for="win_amount" class="col-sm-3 control-label">Win Amount</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="win_amount" name="win_amount" required>
            </div>
          </div>

          <div class="form-group">
            <label for="team_limit" class="col-sm-3 control-label">Player Limit</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="team_limit" name="team_limit" required>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Edit Game</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="game_edit.php">

          <input type="hidden" class="gameid" name="id">

          <div class="form-group">
            <label for="edit_gamename" class="col-sm-3 control-label">Game Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_gamename" name="gamename" required>
            </div>
          </div>

          <div class="form-group">
            <label for="edit_entry_fee" class="col-sm-3 control-label">Entry Fee</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_entry_fee" name="entry_fee" required>
            </div>
          </div>

          <div class="form-group">
            <label for="edit_date" class="col-sm-3 control-label">Date</label>
            <div class="col-sm-9">
              <input type="date" class="form-control" id="edit_date" name="date" required>
            </div>
          </div>  

          <div class="form-group">
            <label for="edit_time" class="col-sm-3 control-label">Time</label>
            <div class="col-sm-9">
              <input type="time" class="form-control" id="edit_time" name="time" required>
            </div>
          </div>  

        <div class="form-group">
            <label for="edit_team_numbers" class="col-sm-3 control-label">Team Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_team_numbers" name="team_numbers" required>
            </div>
          </div>

          <div class="form-group">
            <label for="edit_win_amount" class="col-sm-3 control-label">Win Amount</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_win_amount" name="win_amount" required>
            </div>
          </div>

          <div class="form-group">
            <label for="edit_team_limit" class="col-sm-3 control-label">Player Limit</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="edit_team_limit" name="team_limit" required>
            </div>
          </div>

          <div class="form-group">
            <label for="room_code" class="col-sm-3 control-label">Room Code</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_room_id" name="room_code">
            </div>
          </div>

          <div class="form-group">
            <label for="Password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_password" name="password" >
            </div>
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Deleting...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="game_delete.php">
          <input type="hidden" class="gameid" name="id">
          <div class="text-center">
            <p>DELETE GAME</p>
            <h2 class="bold fullname"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Activate -->
<div class="modal fade" id="activate">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Activating...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="game_activate.php">
          <input type="hidden" class="gameid" name="id">
          <div class="text-center">
            <p>ACTIVATE GAME</p>
            <h2 class="bold fullname"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="activate"><i class="fa fa-check"></i> Activate</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Not Activate -->
<div class="modal fade" id="not_activate">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Deactivating...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="game_deactivate.php">
          <input type="hidden" class="gameid" name="id">
          <div class="text-center">
            <p>DEACTIVATE GAME</p>
            <h2 class="bold fullname"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="deactivate"><i class="fa fa-check"></i> Deactivate</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Complete -->
<div class="modal fade" id="complete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Completed...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="game_completed.php">
          <input type="hidden" class="gameid" name="id">
          <div class="text-center">
            <p>COMPLETED GAME</p>
            <h2 class="bold fullname"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="complete"><i class="fa fa-check"></i> Completed</button>
        </form>
      </div>
    </div>
  </div>
</div>
