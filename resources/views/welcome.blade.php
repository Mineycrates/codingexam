<header>
    <h1>Top Section</h1>
</header>

<main>
    <header>
        <a href="/create-post">
            Create New Article
        </a>
    </header>
    <article>
            @foreach($posts as $post)
                <a href="/posts/{{ $post->id }}">{{$post->title}}</a>
                <h3>Upvotes: {{$post->upvotes}}</h3>
                <br>
                <h3>Downvotes: {{$post->downvotes}}</h3>
                <form method="POST" action="/delete">
                    <input hidden name="id" value="{{$post->id}}">
                    <button type="submit">Delete Post</button>

                </form>
                <br>
            @endforeach

    </article>
</main>