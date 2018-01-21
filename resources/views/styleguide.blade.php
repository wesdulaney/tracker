<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- IE Edge Meta Tag -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Minified CSS -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <title>Slate</title>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapsible-menu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Navbar</a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="collapsible-menu">
                        <ul class="nav navbar-nav">
                            <li><a class="nav-link" href="#">Home</a></li>
                            <li class="active"><a class="nav-link" href="#">Section One</a></li>
                            <li><a class="nav-link" href="#">Section Two</a></li>
                            <li><a class="nav-link" href="#">Section Three</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="jumbotron">
                <div class="container">
                    <h1>Jumbotron</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing $208,563.00 sed do eiusmod
                    tempor incididunt ut labore et $25.00 magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <section class="col-xs-12">
                        <h1>Buttons</h1>
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-default">Default</button>
                    </section>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <section class="col-xs-12">
                        <h1>Contextual Emphasis</h1>
                        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                        <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                        <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                        <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                    </section>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <section class="col-xs-12">
                        <h1>Table</h1>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Type</th>
                                        <th scope="col">Column heading</th>
                                        <th scope="col">Column heading</th>
                                        <th scope="col">Column heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="active">
                                        <th scope="row">Active</th>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Default</th>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr class="success">
                                        <th scope="row">Success</th>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr class="danger">
                                        <th scope="row">Danger</th>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr class="warning">
                                        <th scope="row">Warning</th>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                    <tr class="info">
                                        <th scope="row">Info</th>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                        <td>Column content</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <section class="col-xs-12">
                        <h1>Forms</h1>
                        <form>
                            <div class="form-group has-feedback">
                                <label class="control-label" for="select_one">Select (Default)</label>
                                <select class="form-control" id="select_one" name="select_default">
                                    <option value="">:: choose ::</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                </select>
                            </div>

                            <div class="form-group has-feedback has-success">
                                <label class="control-label" for="select_success">Select (Success)</label>
                                <select class="form-control" id="select_success" name="select_success" aria-describedby="select_success_sr_status">
                                    <option value="">:: choose ::</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2" selected="selected">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                </select>
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <span class="sr-only" id="select_success_sr_status">Success</span>
                                <div class="feedback-message">Well done!</div>
                            </div>

                            <div class="form-group has-feedback has-error">
                                <label class="control-label" for="select_error">Select (Error)</label>
                                <select class="form-control" id="select_error" name="select_error" aria-describedby="select_error_sr_status">
                                    <option value="">:: choose ::</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                </select>
                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                <span class="sr-only" id="select_error_sr_status">Error</span>
                                <div class="feedback-message">You must choose one of the available options.</div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label" for="input_default">Input (Default)</label>
                                <input class="form-control" type="text" id="input_default" name="input_default" placeholder="Enter your information here">
                            </div>

                            <div class="form-group has-feedback has-success">
                                <label class="control-label" for="input_success">Input (Default)</label>
                                <input class="form-control" type="text" id="input_success" name="input_success" placeholder="Enter your information here" value="Information" aria-describedby="input_success_sr_status">
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <span class="sr-only" id="input_success_sr_status">Success</span>
                                <div class="feedback-message">Well done!</div>
                            </div>

                            <div class="form-group has-feedback has-error">
                                <label class="control-label" for="input_error">Input (Error)</label>
                                <input class="form-control" type="text" id="input_error" name="input_error" placeholder="Enter your information here" value="" aria-describedby="input_error_sr_status">
                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                <span class="sr-only" id="input_error_sr_status">Error</span>
                                <div class="feedback-message">You must enter this information.</div>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label" for="textarea_default">Textarea (Default)</label>
                                <textarea class="form-control" id="textarea_default" name="textarea_default" placeholder="Enter your information here"></textarea>
                            </div>

                            <div class="form-group has-feedback has-success">
                                <label class="control-label" for="textarea_success">Textarea (Success)</label>
                                <textarea class="form-control" id="textarea_success" name="textarea_success" placeholder="Enter your information here" aria-describedby="textarea_success_sr_status">Information</textarea>
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <span class="sr-only" id="textarea_success_sr_status">Success</span>
                                <div class="feedback-message">Well done!</div>
                            </div>

                            <div class="form-group has-feedback has-error">
                                <label class="control-label" for="textarea_error">Textarea (Error)</label>
                                <textarea class="form-control" id="textarea_error" name="textarea_error" placeholder="Enter your information here" aria-describedby="textarea_error_sr_status"></textarea>
                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                <span class="sr-only" id="textarea_error_sr_status">Error</span>
                                <div class="feedback-message">You must enter this information.</div>
                            </div>

                            <label>Standard Checkboxes</label>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="input_cb_1" name="input_cb_1" />
                                        Standard Checkbox One
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="input_cb_2" name="input_cb_2" />
                                        Standard Checkbox Two
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="input_cb_3" name="input_cb_3" />
                                        Standard Checkbox Three
                                    </label>
                                </div>
                            </div>

                            <label>Inline Checkboxes</label>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inline_cb_1" name="inline_cb_1" />
                                    Inline Checkbox One
                                </label>

                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inline_cb_2" name="inline_cb_2" />
                                    Inline Checkbox Two
                                </label>

                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inline_cb_3" name="inline_cb_3" />
                                    Inline Checkbox Three
                                </label>
                            </div>

                            <label>Standard Radio Buttons</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="option_radio" name="option_radio" />
                                        Standard Radio Button One
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="option_radio" name="option_radio" />
                                        Standard Radio Button Two
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" id="option_radio" name="option_radio" />
                                        Standard Radio Button Three
                                    </label>
                                </div>
                            </div>

                            <label>Inline Radio Buttons</label>
                            <div class="form-group">
                                <label class="radio-inline">
                                    <input type="radio" id="inline_radio" name="inline_radio" />
                                    Inline Radio Button One
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" id="inline_radio" name="inline_radio" />
                                    Inline Radio Button Two
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" id="inline_radio" name="inline_radio" />
                                    Inline Radio Button Three
                                </label>
                            </div>

                        </form>
                    </section>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <section class="col-xs-12">
                        <h1>Tabs</h1>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active" role="presentation">
                                <a href="#section_1" role="tab" data-toggle="tab">Section 1</a>
                            </li>
                            <li role="presentation">
                                <a href="#section_2" role="tab" data-toggle="tab">Section 2</a>
                            </li>
                            <li role="presentation">
                                <a href="#section_3" role="tab" data-toggle="tab">Section 3</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="section_1" class="tab-pane active" role="tabpanel">
                                <h3>Section 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div id="section_2" class="tab-pane" role="tabpanel">
                                <h3>Section 2</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div id="section_3" class="tab-pane" role="tabpanel">
                                <h3>Section 3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <section class="col-xs-12">
                        <h1>Alerts</h1>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                            <h4>Success!</h4>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.
                        </div>
                    </section>
                    <section class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                            <h4>Info!</h4>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.
                        </div>
                    </section>
                    <section class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                            <h4>Warning!</h4>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.
                        </div>
                    </section>
                    <section class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                            <h4>Danger!</h4>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.
                        </div>
                    </section>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <section class="col-xs-12 styleguide-padding">
                        <h1>Modal</h1>
                        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#main_modal">Modal Content</button>
                        <div id="main_modal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="main_label">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 id="main_label" class="modal-title">Modal Heading</h3>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
