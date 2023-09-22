<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $alluser->id }}">
    Modifier
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $alluser->id }}" tabindex="-1"
    aria-labelledby="exampleModal{{ $alluser->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                {{ $alluser->name }}
                
                <form action={{ route('backend.updateuser', $alluser->id) }} method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Email address</label>
                        <input type="text" name="name" value="{{ $alluser->name }}" class="form-control"
                            id="name" aria-describedby="name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" value=" {{ $alluser->email }}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <select name="role" class="form-select" aria-label="Default select example">
                        @foreach ($roles as $rolee)
                            @foreach ($alluser->roles as $role)
                                @if ($role->name == $rolee->name)
                                    <option selected value="{{ $rolee->name }}"> {{ $rolee->name }} </option>
                                @else
                                    <option value="{{ $rolee->name }}"> {{ $rolee->name }} </option>
                                @endif
                            @endforeach
                        @endforeach
                    </select>

                    <select class=" d-none" name="old_role" id="old_role">
                        @foreach ($alluser->roles as $role)
                            {{ $role->name }}
                            <option selected value="{{ $role->name }}"> {{ $role->name }} </option>
                        @endforeach
                    </select>

                    <div class="modal-footer">
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Modifier</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
