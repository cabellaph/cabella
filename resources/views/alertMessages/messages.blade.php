@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    <style>
        .alert {
            border-radius: 10px;
            font-family: system-ui;
            font-weight: 400;
            padding: 20px;
            color: black;
            margin-bottom: 15px;
            background-color: #B1E693;
        }
    </style>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif

@if (session('resent'))
    <div class="alert alert-success" role="alert">
    {{ __('A fresh mail has been sent to your email address.') }}
    </div>
@endif

