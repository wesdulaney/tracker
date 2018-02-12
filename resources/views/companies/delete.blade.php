<div id="remote-modal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="remote-label">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form action="{{ route('companies.delete', $id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 id="remote-label" class="modal-title">Delete Company</h3>
                </div>
                <div class="modal-body">
                    <p>Please confirm you wish to delete the selected Company.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
