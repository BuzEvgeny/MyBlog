@section('aside')

        <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
            <h4 class="fst-italic">Authors</h4>
            <ol class="list-unstyled mb-0">

                @foreach($authors as $author)
                <li><a href="{!!route('show_user_articles',['author_articles' => $author->author])!!}">{{$author->author}}</a></li>
                @endforeach
            </ol>
        </div>

        <div class="p-4">
            <h4 class="fst-italic">Elsewhere</h4>
            <ol class="list-unstyled">
                <li><a href="#">GitHub</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
            </ol>
        </div>

@show()
