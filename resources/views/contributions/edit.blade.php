<div id="remote-modal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="remote-label">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form action="{{ (!empty($id)) ? route('contributions.patch', $id) : route('contributions.post') }}" method="POST">
                {{ csrf_field() }}
                @if (!empty($id))
                    {{ method_field('PATCH') }}
                @endif
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 id="remote-label" class="modal-title">{{ (!empty($id)) ? 'Edit' : 'Add' }} Contribution</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group has-feedback">
                        <label class="control-label" for="select_one">Company</label>
                        <select class="form-control" id="select_one" name="select_default">
                            <option value="">:: choose ::</option>
                            <option value="Option 1">Option 1</option>
                            <option value="Option 2">Option 2</option>
                            <option value="Option 3">Option 3</option>
                        </select>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="control-label" for="input_amount">Amount</label>
                        <input class="form-control" type="text" id="input_amount" name="input_amount" placeholder="Contribution amount">
                    </div>

                    <div class="form-group has-feedback">
                        <label class="control-label" for="input_date">Date</label>
                        <input class="form-control" type="text" id="input_date" name="input_date" placeholder="Contribution date">
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
