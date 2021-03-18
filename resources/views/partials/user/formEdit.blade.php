@auth
<h1>Edit User</h1>
<form action="/user/{{Auth::id()}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{$userLog->name}}">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" name="age" class="form-control" value="{{$userLog->age}}">
    </div>
    <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value="{{$userLog->email}}">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" value="{{$userLog->password}}">
        <input type="password" name="password" class="form-control" value="{{$userLog->password}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endauth