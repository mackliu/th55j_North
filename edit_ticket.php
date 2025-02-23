<!-- Modal -->
<?php 
include 'db.php';
$ticket=$pdo->query("select * from `tickets` where `id`='{$_GET['id']}'")->fetch();
?>
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="save_ticket.php" method="post">
                <input type="hidden" name="id" value="<?=$ticket['id'];?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditModalLabel">Edit Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <div class="row">
                    <p class="col">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" value="<?=$ticket['firstname'];?>">
                    </p>
                    <p class="col">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="<?=$ticket['lastname'];?>">
                    </p>
                </div>
                <p class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="<?=$ticket['phone'];?>">
                </p>
            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>