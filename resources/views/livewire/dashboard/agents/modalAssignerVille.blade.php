

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">

        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title text-center" id="staticBackdropLabel">Assigner une ville a un agent</h5>
              <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
            <form wire:submit.prevent='assignerVille'>
                <div class="modal-body">
                    <div class="form-layouts-area">
                        <div class="container-fluid">
                                <div class="card-box-style">
                                    <div class="mb-3">
                                        <select name="" id="" class="form-control" wire:model="ville_id">
                                            <option value="">Choisir une ville</option>
                                            @foreach ($villes as $ville)
                                            <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a wire:click.prevent='resetInputFields' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>

                    <button type="submit" class="btn btn-primary btn-sm">
                        Assigner
                    </button>

                </div>
            </form>

        </div>
    </div>
</div>

