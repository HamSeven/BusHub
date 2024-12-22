<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form id="addLocationForm">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errMsgContainer mb-3"></div>

                    <div class="form-group">
                        <label for="name">Location Name:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Location Name">
                    </div>

                    <div class="form-group mt-2">
                        <label for="price">Location Price:</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Location Price">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_location">Save Location</button>
                </div>
            </div>
        </div>
    </form>
</div>
