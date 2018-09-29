<div class="box-logister">
    <div class="logo js-link" data-link="{{url('/')}}">
        <img class="mx-auto d-block" src="{{url('asset/mt.png')}}">
    </div>
    @if(session('message'))
        <div class="alert alert-danger" role="alert">
            {{session('message')}}
        </div>
    @endif
    <form action="{{url('login')}}" class="form mt-3" method="post">
        @csrf
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fal fa-user-circle"></i>
                    </span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fal fa-unlock"></i>
                    </span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class="form-group m-0">
            <button class="btn btn-dark btn-block">MASUK</button>
        </div>
    </form>
    <div class="text my-2">Tidak punya akun ?</div>
    <button class="btn btn-block btn-outline-dark js-link" data-link="{{url('register')}}">DAFTAR</button>
    <div class="social-text my-3">
        <div class="text">atau login dengan</div>
        <hr class="line">
    </div>
    <div class="social-logister">
        <div class="g login js-link" data-link="{{url('auth/google')}}">
            <i></i>
            <div class="text">Masuk dengan Google</div>
        </div>
        <div class="f login mt-3 js-link" data-link="{{url('auth/facebook')}}">
            <i class="fab fa-facebook-f"></i>
            <div class="text">Masuk dengan Facebook</div>
        </div>
    </div>
</div>