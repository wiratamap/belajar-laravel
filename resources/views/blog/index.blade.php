{{ Session::get('message') }}

All Blog List :

@foreach($blogs as $blog)
  <a href="{{ url('/blog') }}/{{ $blog->slug }}"><p> {{ $blog->title }} </p></a>
  <p> {{ $blog->subject}} </p>
  <br>
  {{ $blog->created_at}}

  <a href="{{ url('/blog') }}/{{ $blog->id }}/edit">Edit</a>
  <form class="" action="{{ url('/blog') }}/{{ $blog->id }}" method="post">
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="delete" value="delete">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

  <hr>
@endforeach

{!! $blogs->links() !!}
