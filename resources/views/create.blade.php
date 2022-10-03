<div>
    <form action="/create-post" method="POST" >
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title">
    <br>
    <br>
    <label for="title">Content</label>
    <textarea name="body"></textarea>
    <br>
    <br>
    <button type="submit">POST!</button>

    </form>
</div>