<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel">Մուտքագրեք Ձեր էլհասցեն հղումը ստանալու համար</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{-- <form> --}}
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

            <div class="modal-body d-flex justify-content-between">
                <input value="" id="linkText">
                <i class="bi bi-copy" id="copyBtn"></i>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Փակել</button>
            <button type="submit" class="btn btn-primary">Պահպանել</button>
            </div>
        {{-- </form> --}}
      </div>
    </div>
  </div>
