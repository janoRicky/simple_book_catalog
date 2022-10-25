<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="AddModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddModal">ADD</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">TITLE</label>
            <input class="form-control" type="text" maxlength="255" id="inp_add_title">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">ISBN</label>
            <input class="form-control" type="text" maxlength="255" id="inp_add_isbn">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">AUTHOR</label>
            <input class="form-control" type="text" maxlength="255" id="inp_add_author">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">PUBLISHER</label>
            <input class="form-control" type="text" maxlength="255" id="inp_add_publisher">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">YEAR_PUBLISHED</label>
            <input class="form-control" type="number" maxlength="4" id="inp_add_year_published">
          </div>
        </div>
        <div class="form-row">
          <div class="col-auto">
            <label class="fw-bold">CATEGORY</label>
            <input class="form-control" type="text" maxlength="255" id="inp_add_category">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="add_book()">Add</button>
      </div>
    </div>
  </div>
</div>