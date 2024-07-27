<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="teacherModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="teacherModalLabel">Add Teacher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="teacherForm">
          <div class="mb-3">
            <label for="name" class="form-label">Ad</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" required>
          </div>
          <div class="mb-3">
            <label for="surname" class="form-label">Haqqinda</label>
            <input type="text" class="form-control" name="about" placeholder="Enter surname" required>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="teacherForm" class="btn btn-primary save">Save changes</button>
      </div>
    </div>
  </div>
</div>