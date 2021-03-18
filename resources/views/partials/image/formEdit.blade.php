<h1>Edit Image</h1>
<form action="/images/{{$edit->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="src" class="form-control">
    </div>
    <div class="form-group">
      <label>Category</label>
      <select name="category_id" class="form-control">
          @foreach ($categories as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>