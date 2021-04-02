<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="updateItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{route('admin.itemUpdate', ['id'=>$item->id])}}" method="post">
                {{method_field('put')}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input value="{{$item->name}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="item name" name="name">
                        @error('name')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose category</label>
                        <select  name="category_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose brand</label>
                        <select name="brand_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                        @error('brand_id')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea  class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{$item->description}}</textarea>
                        @error('description')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Price</label>
                        <input value="{{$item->price}}" type="text" name="price" class="form-control" id="exampleFormControlInput2" placeholder="price for item">
                        @error('price')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Count</label>
                        <input value="{{$item->count}}" type="text" name="count" class="form-control" id="exampleFormControlInput3" placeholder="count of item">
                        @error('count')
                        <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-check form-check-radio form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" {{($item->gender==1) ? 'checked' : ''}} type="radio" name="gender" id="inlineRadio1" value="1"> Male
                            <span class="form-check-sign"></span>
                        </label>

                    </div>
                    <div class="form-check form-check-radio form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio"  {{($item->gender==2) ? 'checked' : ''}} name="gender" id="inlineRadio2" value="2"> Female
                            <span class="form-check-sign"></span>
                        </label>
                    </div>
                    @error('gender')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                    <input value="{{$item->id}}" type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="item name" name="id">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
