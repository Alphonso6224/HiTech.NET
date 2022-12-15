<!-- CODE bootstrap modal de confirmation de supression -->

<div class="modal fade" id="success" data-backdrop="static"
    data-keyboard="false" tabindex="-1"
    aria-labelledby="successLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success"
                    id="successLabel">
                    <i class="bi bi-check-square-fill i-success mr-2"></i>Valider le stockage</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <p>Attention, le produit sera visible sur le
                    site</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">valider</button>
            </div>
        </div>
    </div>
</div>