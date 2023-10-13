@extends('layouts.admin')

@section('content')
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <form action="http://sales.alluresystem.site/login" method="post">
                                <input type="hidden" name="user_id" value="{{ base64_encode(auth()->user()->id) }}">
                                <button type="submit" class="btn card-box height-100-p w-100 widget-style3">
                                    <div class="d-flex flex-wrap">
                                        <div class="widget-data">
                                            <div class="weight-700 font-24 text-dark">Sales</div>
                                            <div class="font-14 text-secondary weight-500">
                                                Sistem Sales
                                            </div>
                                        </div>
                                        <div class="widget-icon bg-warning">
                                            <div class="icon">
                                                <span class="icon-copy bi bi-currency-exchange"></span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <form action="http://purchasing.alluresystem.site/login" method="post">
                                <input type="hidden" name="user_id" value="{{ base64_encode(auth()->user()->id) }}">
                                <button type="submit" class="btn card-box height-100-p widget-style3 w-100">
                                    <div class="d-flex flex-wrap">
                                        <div class="widget-data">
                                            <div class="weight-700 font-24 text-dark">Purchasing</div>
                                            <div class="font-14 text-secondary weight-500">
                                                Sistem Purchasing
                                            </div>
                                        </div>
                                        <div class="widget-icon bg-danger">
                                            <div class="icon">
                                                <span class="icon-copy bi bi-cart4"></span>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <form action="http://finance.alluresystem.site/login" method="post">
                                <input type="hidden" name="user_id" value="{{ base64_encode(auth()->user()->id) }}">
                                <button type="submit" class="btn card-box height-100-p widget-style3 w-100">
                                    <div class="d-flex flex-wrap">
                                        <div class="widget-data">
                                            <div class="weight-700 font-24 text-dark">Finance</div>
                                            <div class="font-14 text-secondary weight-500">
                                                Sistem Finance
                                            </div>
                                        </div>
                                        <div class="widget-icon bg-success">
                                            <div class="icon">
                                                <i class="icon-copy bi bi-currency-dollar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <form action="http://manufacturing.alluresystem.site/login" method="post">
                                <input type="hidden" name="user_id" value="{{ base64_encode(auth()->user()->id) }}">
                                <button type="submit" class="btn card-box height-100-p widget-style3 w-100">
                                    <div class="d-flex flex-wrap">
                                        <div class="widget-data">
                                            <div class="weight-700 font-24 text-dark">Manufacture</div>
                                            <div class="font-14 text-secondary weight-500">
                                                Sistem Manufacture
                                            </div>
                                        </div>
                                        <div class="widget-icon bg-primary">
                                            <div class="icon">
                                                <i class="bi bi-gear-fill" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <form action="http://crm.alluresystem.site/login" method="post">
                                <input type="hidden" name="user_id" value="{{ base64_encode(auth()->user()->id) }}">
                                <button type="submit" class="btn card-box height-100-p widget-style3 w-100">
                                    <div class="d-flex flex-wrap">
                                        <div class="widget-data">
                                            <div class="weight-700 font-24 text-dark">CRM</div>
                                            <div class="font-14 text-secondary weight-500">
                                                Sistem CRM
                                            </div>
                                        </div>
                                        <div class="widget-icon" style="background-color: #FF1493;">
                                            <div class="icon">
                                                <i class="bi bi-door-open-fill" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <form action="https://astral.alluresystem.site/" method="post">
                                <input type="hidden" name="user_id" value="{{ base64_encode(auth()->user()->id) }}">
                                <button type="submit" class="btn card-box height-100-p widget-style3 w-100">
                                    <div class="d-flex flex-wrap">
                                        <div class="widget-data">
                                            <div class="weight-700 font-24 text-dark">Quotation</div>
                                            <div class="font-14 text-secondary weight-500">
                                                Sistem Quotation
                                            </div>
                                        </div>
                                        <div class="widget-icon" style="background-color: #99B898;">
                                            <div class="icon">
                                                <i class="bi bi-clipboard2-check-fill" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <form action="http://165.22.66.252/" method="post">
                                <input type="hidden" name="user_id" value="{{ base64_encode(auth()->user()->id) }}">
                                <button type="submit" class="btn card-box height-100-p widget-style3 w-100">
                                    <div class="d-flex flex-wrap">
                                        <div class="widget-data">
                                            <div class="weight-700 font-24 text-dark">Warehouse</div>
                                            <div class="font-14 text-secondary weight-500">
                                                Sistem Warehouse
                                            </div>
                                        </div>
                                        <div class="widget-icon" style="background-color: #45ADA8;">
                                            <div class="icon">
                                                <i class="bi bi-box-seam" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </form>
                        </div>
                        {{-- <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                            <a href="http://www.kalinggakelingjati.site/"
                                class="btn card-box height-100-p widget-style3 w-100">
                                <div class="d-flex flex-wrap">
                                    <div class="widget-data">
                                        <div class="weight-700 font-24 text-dark">Warehouse</div>
                                        <div class="font-14 text-secondary weight-500">
                                            Super Kalingga
                                        </div>
                                    </div>
                                    <div class="widget-icon" style="background-color: #45ADA8;">
                                        <div class="icon">
                                            <i class="bi bi-box-seam" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
