
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
        <form class="form-horizontal" method="POST" action="add_coins_delete.php">
          <input type="hidden" class="del_add_coins_id" name="id">
          <div class="text-center">
            <p>DELETE ADD COINS</p>
            <h1 class="bold del_add_coins_amount"></h1>
            <h2 class="bold del_add_coins_utr"></h2>
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


<!-- Add -->
<div class="modal fade" id="add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Adding Coins...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="add_coins_add.php">
          <input type="hidden" class="add_coins_id" name="id">
          <div class="text-center">
            <p>ADD COINS</p>
            <h1 class="bold add_coins_amount"></h1>
            <h2 class="bold add_coins_utr"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-plus"></i> ADD</button>
        </form>
      </div>
    </div>
  </div>
</div>
