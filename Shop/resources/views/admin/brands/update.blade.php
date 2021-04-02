<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="updateBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('admin.brandUpdate')}}" method="post">

                @csrf
                {{method_field('put')}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" value="{{$brand->name}}" name="name"  placeholder="Enter name">
                        <small id="emailHelp" class="form-text text-muted">Provide brand name</small>
                        <input type="hidden"  class="form-control" value="{{$brand->id}}" name="id" >

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
