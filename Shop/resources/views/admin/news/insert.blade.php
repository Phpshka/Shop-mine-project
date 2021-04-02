<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('admin.newInsert')}}" method="post">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title"  placeholder="Enter title">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Preview textarea</label>
                        <textarea class="form-control" name="small" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">News</label>
                        <textarea class="form-control" name="long" id="exampleFormControlTextarea1" rows="7"></textarea>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" ></button>
                </div>
            </form>

        </div>
    </div>
</div>