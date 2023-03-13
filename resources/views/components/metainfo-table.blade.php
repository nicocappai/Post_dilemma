<table class="table tableRevisor">
    <thead>
        <tr>
            <th scope="col" class="articoli-form">#</th>
            <th scope="col">Nome tag</th>
            <th scope="col" class="articoli-form">Q.ta articoli collegati</th>
            <th scope="col"><div class="aggiorna"></div>Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row" class="articoli-form">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td class="articoli-form">{{count($metaInfo->articles)}}</td>
            @if($metaType == 'tags')
            <td>
                <form action="{{route('admin.editTag' , ['tag'=> $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn admin-btn">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteTag' , ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn adminR-btn"><i class="fa-regular fa-trash-can"></i></button>
                </form>
            </td>
            @else
            <td>
                <form action="{{route('admin.editCategory' , ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn admin-btn">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory' , ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn adminR-btn text-dark"><i class="fa-regular fa-trash-can"></i></button>
                </form>
            </td>

            @endif
        </tr>
        @endforeach
    </tbody>
</table>

