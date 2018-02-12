@extends('layouts.master')

@section('js')
    @parent
@stop

@section('content')
    <div class="container">
        <div class="row vertical-align">
            <div class="col-xs-12 col-sm-6">
                <h1>Contributions</h1>
            </div>
            <div class="col-xs-12 col-sm-6 text-right">
                <button class="btn btn-info js-remote-modal-trigger" type="button" data-route="/modal/contributions/edit">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    Add Contribution
                </button>
            </div>
        </div>

        <div class="row">
            <section class="col-xs-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Company</th>
                                <th scope="col" class="text-right">Amount</th>
                                <th scope="col" class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01/09/2018</th>
                                <td>Principal</td>
                                <td class="text-right">$217.20</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/edit/1">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/delete/1">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">12/26/2017</th>
                                <td>Principal</td>
                                <td class="text-right">$217.20</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/edit/2">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/delete/2">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">12/29/2017</th>
                                <td>Sentry</td>
                                <td class="text-right">$229.50</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/edit/3">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/delete/3">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">12/29/2017</th>
                                <td>Sentry</td>
                                <td class="text-right">$229.50</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/edit/4">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/delete/4">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">12/08/2017</th>
                                <td>Principal</td>
                                <td class="text-right">$217.20</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/edit/5">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/delete/5">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">11/30/2017</th>
                                <td>Sentry</td>
                                <td class="text-right">$229.50</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/edit/6">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/contributions/delete/6">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

        <div class="row">
            <div class="col-xs-12 text-right">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">&laquo;</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="remote-modal-container"></div>
@stop
