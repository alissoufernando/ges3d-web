

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">

        <div class="modal-content">
            <div class="modal-header">
                @if ($produit_id)
                <h5 class="modal-title text-center" id="staticBackdropLabel">Modifier {{ $this->nom }}</h5>
                @else
                <h5 class="modal-title text-center" id="staticBackdropLabel">Ajouter un Produit</h5>
                @endif
              <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
            <form wire:submit.prevent='saveProduit'>
                <div class="modal-body">
                    <div class="form-layouts-area">
                        <div class="container-fluid">
                                <div class="card-box-style">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="titre" aria-label="titre" wire:model.lazy='nom'>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="prix" aria-label="prix" wire:model.lazy='prix'>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="promo_prix" aria-label="promo_prix" wire:model.lazy='promo_prix'>
                                    </div>

                                    <div class="mb-3">
                                        <input type="file" class="form-control" placeholder="path" aria-label="path" wire:model.lazy='path'>
                                    </div>

                                    <div class="mb-3">
                                        <textarea class="form-control" aria-label="With textarea" placeholder="coute_decription" aria-label="coute_decription" wire:model.lazy='coute_decription'></textarea>

                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" aria-label="With textarea" placeholder="description" aria-label="description" wire:model.lazy='description'></textarea>

                                    </div>


                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a wire:click.prevent='resetInputFields' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>
                    @if ($produit_id)
                    <button type="submit" class="btn btn-primary btn-sm">
                        Modifier
                    </button>
                    @else
                    <button type="submit" class="btn btn-primary btn-sm">
                        Ajouter
                    </button>
                    @endif
                </div>
            </form>

        </div>
    </div>
</div>

