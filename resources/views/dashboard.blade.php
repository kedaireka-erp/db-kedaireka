<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="http://crm.alluresystem.site/login" method="post">
    <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
    <button type="submit"> CRM</button>
    </form>
    <form action="http://sales.alluresystem.site/login" method="post">
        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
        <button type="submit"> Sales</button>
        </form>
    <form action="http://finance.alluresystem.site/login" method="post">
        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
        <button type="submit"> Finance</button>
    </form>
    <form action="http://manufacturing.alluresystem.site/login" method="post">
        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
        <button type="submit"> Manufacturing</button>
    </form>
    <form action="http://purchasing.alluresystem.site/login" method="post">
        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
        <button type="submit"> Purchasing</button>
    </form>
    <a href="/logout">logout</a>

</body>
</html> -->
@extends('layouts.admin')

@section('content')
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <form action="http://sales.alluresystem.site/login" method="post">
                <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
                <button type="submit">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">Sales</div>
                                </div>
                                <div class="widget-icon bg-warning">
                                    <div class="icon">
                                        <span class="icon-copy bi bi-currency-exchange"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </form>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <form action="http://purchasing.alluresystem.site/login" method="post">
        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
        <button type="submit">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">Purchasing</div>
                                </div>
                                <div class="widget-icon bg-danger">
                                    <div class="icon">
                                        <span class="icon-copy bi bi-cart4"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </button>
                </form>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <form action="http://finance.alluresystem.site/login" method="post">
        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
        <button type="submit">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">Finance</div>
                                </div>
                                <div class="widget-icon bg-success">
                                    <div class="icon">
                                        <i class="icon-copy bi bi-currency-dollar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </button>
                </form>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <form action="http://manufacturing.alluresystem.site/login" method="post">
        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
        <button type="submit">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">Manufacturing</div>
                                </div>
                                <div class="widget-icon bg-primary">
                                    <div class="icon">
                                        <i class="bi bi-gear-fill" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                </form>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <form action="http://crm.alluresystem.site/login" method="post">
                        <input type="hidden" name="user_id" value="{{base64_encode(auth()->user()->id)}}">
                        <button type="submit">
                        <div class="card-box height-100-p widget-style3">
                            <div class="d-flex flex-wrap">
                                <div class="widget-data">
                                    <div class="weight-700 font-24 text-dark">CRM</div>
                                </div>
                                <div class="widget-icon bg-primary">
                                    <div class="icon">
                                        <i class="bi bi-door-open-fill" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </button>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection