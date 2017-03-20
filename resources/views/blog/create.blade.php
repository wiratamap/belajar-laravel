@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Create blog post</h1>

<form class="" action="{{ url('/blog') }}" method="post">
  <input type="text" name="title" value="" placeholder="judul"><br>
  {{ ($errors->has('title')) ? $errors->first('title') : '' }}<br>
  <textarea name="subject" rows="8" cols="40" placeholder="isi"></textarea>
  {{ ($errors->has('subject')) ? $errors->first('subject') : '' }}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="submit" name="name" value="post">
</form>
