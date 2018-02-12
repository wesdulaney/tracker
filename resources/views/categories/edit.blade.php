<div id="remote-modal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="remote-label">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form action="{{ (!empty($id)) ? route('categories.patch', $id) : route('categories.post') }}" method="POST">
                {{ csrf_field() }}
                @if (!empty($id))
                    {{ method_field('PATCH') }}
                @endif
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 id="remote-label" class="modal-title">{{ (!empty($id)) ? 'Edit' : 'Add' }} Category</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group has-feedback">
                        <label class="control-label" for="select_one">Parent Category</label>
                        <select class="form-control" id="select_one" name="select_default">
                            <option value="">:: choose ::</option>
                            <option value="Option 1">Option 1</option>
                            <option value="Option 2">Option 2</option>
                            <option value="Option 3">Option 3</option>
                        </select>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="control-label" for="input_name">Name</label>
                        <input class="form-control" type="text" id="input_name" name="input_name" placeholder="Category name">
                    </div>

                    <div class="form-group has-feedback">
                        <label class="control-label" for="input_preferred">Preferred %</label>
                        <input class="form-control" type="text" id="input_preferred" name="input_preferred" placeholder="Preferred percentage">
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
