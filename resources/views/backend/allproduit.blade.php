<x-app-layout>
    @if (Auth::user()->roles[0]->name == 'admin')
        <div class=" d-none">
            {{ $createur = 1 }}
        </div>
    @else
        <div class=" d-none">
            {{ $createur = 0 }}
        </div>
    @endif
    <!-- Button trigger modal -->
    <div class=" text-center mt-20">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            add Produit
        </button>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <form action='{{ route('backend.storproduit') }} ' method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Titre</label>
                            <input type="text" name="titre" class="form-control" id="titre"
                                aria-describedby="titre">
                        </div>

                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix</label>
                            <input name="prix" type="number" min="0" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="image"
                                aria-describedby="image">
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input name="stock" type="number" min="0" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 d-none">
                            <input name="createur" type="number" min="0" value="{{ $createur }}" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <select name="categorie" class="form-select" aria-label="Default select example">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->name }} "> {{ $categorie->name }}</option>
                            @endforeach
                        </select>


                        <div class="modal-footer">
                            <div class="mb-3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>


    


    <table class="table container mt-10 ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Prix</th>
                <th scope="col">Image</th>
                <th scope="col">Stock</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supperimer</th>
            </tr>
        </thead>



        <tbody>

            @foreach ($produits as $produit)
                <tr>
                    <th scope="row">
                        {{ $produit->id }}
                    </th>
                    <td>
                        {{ $produit->titre }}
                    </td>
                    <td>
                        {{ $produit->prix }}
                    </td>
                    <td>
                        {{ $produit->image }}

                        <img src="" alt="">
                    </td>
                    <td>
                        {{ $produit->stock }}
                    </td>
                    <td>
                        @include('backend.comp.editproduit')
                    </td>
                    <td>

                        <form action="{{ route('backend.destroyproduit', $produit->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" btn btn-danger text-white "
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')"><i
                                    class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>

                </tr>
            @endforeach


            {{-- @foreach ($allusers as $alluser)
        @if ($alluser->name == 'admin')
            
        @else
            
        @endif
            
        @endforeach --}}

        </tbody>

    </table>
</x-app-layout>
