<!DOCTYPE html>
<html>

<head>
    <x-style></x-style>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex align-items-center">
            <div class="brand-logo">
                <a href="/">
                    <img src=@if (Request::getHost() == 'erp.kalinggakelingjati.site') "/img/image 6 big.png"
					@else
						"https://allureindustries.com/files/uploads/2016/03/600.png" @endif
                        style="height: 50%;" alt="" />
                </a>
            </div>
            @if (Request::getHost() == 'erp.kalinggakelingjati.site')
                <div class="login-menu">
                    <ul>
                        <li><a href="/">Kalingga Keling Jati</a></li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="login-wrap d-flex align-items-lg-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 d-flex justify-content-center">
                    <img src="vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="card pd-30 bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login To ERP</h2>
                        </div>
                        <form action="/login" method="post"> @csrf
                            <div class="input-group custom">
                                <input type="email" class="form-control form-control-lg" placeholder="Email"
                                    name="email" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" placeholder="**********"
                                    name="password" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">Remember</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <!--
           use code for form submit
           <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
          -->
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In
                                            </<button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-script></x-script>
</body>

</html>
