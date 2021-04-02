<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="addBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('admin.brandInsert')}}" method="post">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
            <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" name="name"  placeholder="Enter name">
                                <small id="emailHelp" class="form-text text-muted">Provide brand name</small>
                            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Save changes</button>
            </div>
            </form>

        </div>
    </div>
</div>
