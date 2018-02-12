<div id="remote-modal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="remote-label">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form action="{{ (!empty($id)) ? route('companies.patch', $id) : route('companies.post') }}" method="POST">
                {{ csrf_field() }}
                @if (!empty($id))
                    {{ method_field('PATCH') }}
                @endif
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 id="remote-label" class="modal-title">{{ (!empty($id)) ? 'Edit' : 'Add' }} Company</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group has-feedback">
                        <label class="control-label" for="input_name">Name</label>
                        <input class="form-control" type="text" id="input_name" name="input_name" placeholder="Company name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
