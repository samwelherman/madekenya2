<div>







    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">

        + </b>add mzigo

    </button>
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">
            <form wire:submit.prevent="submit">
                <div class="modal-body">

                    <div class="form-group form-group-float">
                        <label class="form-group-float-label">jina la mzigo</label>
                        <input type="text" wire:model="name" class="form-control" placeholder="jina la mzigo">
                    </div>

                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" class="custom-control-input" wire:model="showDiv" value="yes" name="gharama" id="cr_l_s_s" >
                        <label class="custom-control-label" for="cr_l_s_s">gharama za kusafirisha kwa kila moja</label>
                    </div>

                    <div class="custom-control custom-radio mb-3">
                        <input type="radio" class="custom-control-input" wire:model="showDiv" value="no" name="gharama" id="cr_l_s_u" >
                        <label class="custom-control-label" for="cr_l_s_u">gharama ya kusafirisha zote</label>
                    </div>
                    @if ($showDiv == 'yes')
                    <div class="form-group form-group-float">
                        <label class="form-group-float-label">idadi ya mizigo</label>
                        <input type="text" class="form-control" name="idadi" placeholder="idadi ya mizigo">
                    </div>
                    <div class="form-group form-group-float">
                        <label class="form-group-float-label">bei ya kila mzigo</label>
                        <input type="text" class="form-control" name="bei" placeholder="bei ya kila mzigo">
                    </div>
                    @endif
                    <div class="form-group form-group-float">
                        <label class="form-group-float-label">jumla kuu</label>
                        <input type="number"  class="form-control" wire:model="jumla"  @if($showDiv == 'yes') readonly @endif placeholder="jumla kuu">
                    </div>
                    <div class="form-group form-group-float">
                        <label class="form-group-float-label">ela iliyopokelewa</label>
                        <input type="text" class="form-control" wire:model="ela_iliyopokelewa"  placeholder="ela iliyopokelewa">
                    </div>
                    <div class="form-group form-group-float">
                        <label class="form-group-float-label">mzigo ulipotoka</label>
                        <input type="text" class="form-control"  wire:model="mzigo_unapotoka" placeholder="mzigo ulipotoka">
                    </div>
                    <div class="form-group form-group-float">
                        <label class="form-group-float-label">mzigo unapokwenda</label>wire:model="mzigo_ulipotoka" 
                        <input type="text" class="form-control" wire:model="mzigo_unapokwenda" placeholder="mzigo unapokwenda">
                    </div>

                    <div class="border p-3 rounded">
                        <label class="">Je ?</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" wire:model="risiti"  id="cr_l_i_s" checked>
                            <label class="custom-control-label" for="cr_l_i_s">Una Risiti</label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" wire:model="risiti" id="cr_l_i_u">
                            <label class="custom-control-label" for="cr_l_i_u">Hauna Risiti</label>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>

                    <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>

                </div>
                </form>
            </div>

        </div>

    </div>






</div>