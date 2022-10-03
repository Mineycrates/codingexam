
<form action="/edit-post" method="POST" >
    @csrf
    <input type="hidden" name="id" value="{{ $post->id }}">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{$post->title}}">
    <br>
    <br>
    <label for="body">Content</label>
    <textarea name="body">{{ $post->body }}</textarea>
    <br>
    <br>
    <button type="submit">Apply Edits</button>

    </form>


   <form action="/upvote">
   @csrf
   <input type="hidden" name="id" value="{{ $post->id }}">
    <button type="submit">Upvote</button>
    
   </form>
   <form action="/downvote">
    @csrf
   <input type="hidden" name="id" value="{{ $post->id }}">
   <button type="submit">Downvote</button>
   </form>

