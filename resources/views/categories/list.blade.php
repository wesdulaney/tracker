@extends('layouts.master')

@section('js')
    @parent
@stop

@section('content')
    <div class="container">
        <div class="row vertical-align">
            <div class="col-xs-12 col-sm-6">
                <h1>Categories</h1>
            </div>
            <div class="col-xs-12 col-sm-6 text-right">
                <button class="btn btn-info js-remote-modal-trigger" type="button" data-route="/modal/categories/edit">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    Add Category
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
                                <th scope="col">Parent</th>
                                <th scope="col" class="text-right">Preferred %</th>
                                <th scope="col" class="text-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Stocks</td>
                                <td></td>
                                <td class="text-right">49</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/1">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/1">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>U.S. Stocks</td>
                                <td>Stocks</td>
                                <td class="text-right">34</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/7">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/7">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>International Stocks</td>
                                <td>Stocks</td>
                                <td class="text-right">15</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/8">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/8">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bonds</td>
                                <td></td>
                                <td class="text-right">41</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/2">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/2">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>U.S. Corporate Bonds</td>
                                <td>Bonds</td>
                                <td class="text-right">29</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/9">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/9">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>U.S. Treasury Bonds</td>
                                <td>Bonds</td>
                                <td class="text-right">12</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/11">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/11">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Hedges</td>
                                <td></td>
                                <td class="text-right">9</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/3">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/3">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gold</td>
                                <td>Hedges</td>
                                <td class="text-right">3</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/12">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/12">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Silver</td>
                                <td>Hedges</td>
                                <td class="text-right">3</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/13">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/13">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>REITs</td>
                                <td>Hedges</td>
                                <td class="text-right">3</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/14">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/14">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fixed Rate</td>
                                <td></td>
                                <td class="text-right">1</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/5">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/5">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Cash</td>
                                <td></td>
                                <td class="text-right">0</td>
                                <td class="text-right">
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/edit/6">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="#" class="js-remote-modal-trigger" data-route="/modal/categories/delete/6">
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
