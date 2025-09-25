<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="edit-expirement">
      <h1>Edit Expirement</h1>
      <form  action="/edit/{{$expirement->id}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$expirement->title}}">
        <textarea name="description">{{$expirement->description}}</textarea>
        <input type="submit" name="save" value="Save Changes">
      </form>
    </div>
  </body>
</html>
