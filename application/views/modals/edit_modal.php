<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditModal">EDIT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="inp_edit_id">
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">TITLE</label>
            <input class="form-control" type="text" maxlength="255" id="inp_edit_title">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">ISBN</label>
            <input class="form-control" type="text" maxlength="255" id="inp_edit_isbn">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">AUTHOR</label>
            <input class="form-control" type="text" maxlength="255" id="inp_edit_author">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">PUBLISHER</label>
            <input class="form-control" type="text" maxlength="255" id="inp_edit_publisher">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">YEAR_PUBLISHED</label>
            <input class="form-control" type="number" maxlength="4" id="inp_edit_year_published">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">CATEGORY</label>
            <input class="form-control" type="text" maxlength="255" id="inp_edit_category">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="edit_book()">Edit</button>
      </div>
    </div>
  </div>
</div>