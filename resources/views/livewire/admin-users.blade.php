<div>
    <div class="card">
        <div class="card-header">
            <input wire:keydown='clear_page' wire:model="search" class="form-control w-100" type="text"
                placeholder="Escriba un nombre">
            {{-- <p>{{ $this->search }}</p> --}}
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width='10px'>
                                    <a class=" btn btn-primary rounded"
                                        href="{{ route('admin.users.edit', $user) }}"><i
                                            class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">{{ $users->links() }}</div>
        @else
            <div class="m-3 alert alert-info" role="alert">
                <strong>Información!</strong> No existen registros.
            </div>
        @endif
    </div>
</div>
