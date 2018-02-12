@extends('layouts.master')

@section('js')
    @parent
@stop

@section('content')
    <div class="container">
        <div class="row vertical-align">
            <div class="col-xs-12 col-sm-6">
                <h1>Companies</h1>
            </div>
            <div class="col-xs-12 col-sm-6 text-right">
                <button class="btn btn-info js-remote-modal-trigger" type="button" data-route="/modal/companies/edit">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    Add Company
                </button>
            </div>
        </div>

        <div class="row">
            <section class="col-xs-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col" class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fidelity</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/companies/edit/1">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/companies/delete/1">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Principal</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/companies/edit/2">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/companies/delete/2">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sentry</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/companies/edit/3">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/companies/delete/3">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Vanguard</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/companies/edit/4">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/companies/delete/4">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

    <div id="remote-modal-container"></div>
@stop
