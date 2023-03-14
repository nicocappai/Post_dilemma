<table class="table tableRevisor">
    <thead>
        <tr>
            <th scope="col" class="articoli-form">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Tags</th>
            <th scope="col">Creato il</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody class="form-dashboard">
        @foreach ($articles as $article)
        <tr>
            <th scope="row" class="articoli-form">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->category->name ?? 'Non Categorizzato'}}</td>
            <td>
                @foreach ($article->tags as $tag)
                {{$tag->name}},
                @endforeach
            </td>
            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning text-white">Modifica l' articolo</a>
                <a href="" class="btn btn-dark">Modifica l' articolo</a>
                <form action="{{route('article.destroy' , compact ('article'))}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina l' articolo</button>
                </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
