<table class="table tableRevisor">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Sottotitolo</th>
        <th scope="col">Redattore</th>
        <th scope="col" class="ms-5 ps-5">Azioni</th>
      </tr>
    </thead>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{substr($article->title, 0, 10)}}</td>
            <td>{{substr($article->subtitle, 0, 10)}}</td>
            <td>{{substr($article->user->name, 0, 30)}}</td>
            <td>
                @if(is_null($article->is_accepted))
                    <a href="{{route('article.show', compact('article'))}}" class="btn section-btn text-white">Leggi l'articolo</a>
                @else
                <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn section-btn-revisione text-white">Riporta in revisione</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>