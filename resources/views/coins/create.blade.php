<h1>Create your coin here!</p>

<form action="{{route('coins.store')}}" method="POST">
    @csrf
  <p>Short Name: <input type="text" name="short_name" size="20"></p>
  <p>Long Name: <input type="text" name="name" size="40"></p>
  <input type="submit" value="store">
</form>