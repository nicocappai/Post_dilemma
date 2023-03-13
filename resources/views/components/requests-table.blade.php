<table class="table tableRevisor">
    <thead>
        <tr>
            <th scope="col" class="articoli-form">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody class="form-dashboard">
        @foreach ($roleRequests as $user)
        <tr>
            <th scope="row" class="articoli-form">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                @switch($role)
                 @case('amministratore')
                  <a href="{{route('admin.setAdmin' , compact('user'))}}" class="btn admin-btn">Attiva {{$role}}</a>
                  <a href="{{route('admin.setAdmin-r', compact('user'))}}" class="btn adminR-btn">Rimuovi {{$role}}</a>
                @break
                 @case('revisore')
                  <a href="{{route('admin.setRevisor', compact('user'))}}" class="btn admin-btn">Attiva {{$role}}</a>
                  <a href="{{route('admin.setRevisor-r', compact('user'))}}" class="btn adminR-btn">Rimuovi {{$role}}</a>
                @break
                 @case('redattore')
                  <a href="{{route('admin.setWriter', compact('user'))}}" class="btn admin-btn">Attiva {{$role}}</a>
                  <a href="{{route('admin.setWriter-r', compact('user'))}}" class="btn adminR-btn">Rimuovi {{$role}}</a>
                @break
                @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>





