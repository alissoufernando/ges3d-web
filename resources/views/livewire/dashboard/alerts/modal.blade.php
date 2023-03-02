

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">

        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title text-center" id="staticBackdropLabel">Ajouter un Agent a un alert</h5>
              <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if (Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
            <form wire:submit.prevent='afillier'>
                <div class="modal-body">
                    <div class="form-layouts-area">
                        <div class="container-fluid">
                                <div class="card-box-style">
                                    <div class="mb-3">
                                        <select name="" id="" class="form-control" wire:model.lazy='agent_id'>
                                            <option value="">Choisir un agent</option>
                                            @foreach ($agents as $agent)
                                            @if ($agent->hasRole('Agent'))
                                            <option value="{{ $agent->id }}">{{ $agent->nom }} {{ $agent->prenoms }}</option>
                                            @endif
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
                        Ajouter
                    </button>

                </div>
            </form>

        </div>
    </div>
</div>

