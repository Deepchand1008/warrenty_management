<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Electrovolt Service Support</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-5/assets/css/login-5.css">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body { 
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 100%;
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
           

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="https://electrovoltbatteries.com/wp-content/uploads/2024/06/elv.png">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-">
                        <h5 class="mt-4"><marquee style="color: #0d6efd; padding:10px;"
                             direction="right">Welcome : {{Auth::user()}}</marquee> </h5>

                        <h5 class="mt-4"><marquee direction="left">Elctrovolt Warranty Claim System </marquee>     </h5>


                        <div class="lg-12">
                            <section class="p-3 p-md-4 p-xl-5">
                                <div class="container">
                                    <div class="card border-light-subtle shadow-sm">
                                        <div class="row g-0">
                                            <div class="col-12 col-md-6 text-bg-primary">
                                                <div class="d-flex align-items-center justify-content-center h-100">
                                                    <div class="col-10 col-xl-8 py-3">
                                                        <hr class="border-primary-subtle mb-4">
                                                        <p class="lead m-0">ElectroVolt Battery Support System represents a 
                                                            comprehensive approach to battery management, focusing on improving longevity,
                                                             efficiency, and safety through advanced technologies and intelligent monitoring.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="card-body p-3 p-md-4 p-xl-5">

                                                    <div class="d-flex justify-content-center align-items-center mt-5">


                                                        <div class="card">

                                                            <ul class="nav nav-pills mb-3" id="pills-tab"
                                                                role="tablist">
                                                                <li class="nav-item text-center">
                                                                    <a class="nav-link active btl" id="pills-home-tab"
                                                                        data-toggle="pill" href="#pills-home"
                                                                        role="tab" aria-controls="pills-home"
                                                                        aria-selected="true">Login</a>
                                                                </li>
                                                                <li class="nav-item text-center">
                                                                    <a class="nav-link btr" id="pills-profile-tab"
                                                                        data-toggle="pill" href="#pills-profile"
                                                                        role="tab" aria-controls="pills-profile"
                                                                        aria-selected="false">Signup</a>
                                                                </li>

                                                            </ul>
                                                            <div class="tab-content border-1 shadow-lg pt-5 pl-1 pr-1 pb-5" id="pills-home-tab">
                                                                <div class="tab-pane fade show active" id="pills-home"
                                                                    role="tabpanel" aria-labelledby="pills-home-tab">

                                                                    <form method="POST" action="{{ route('login') }}">
                                                                        @csrf
                                                
                                                                        <div class="row mb-3">
                                                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                                
                                                                            <div class="col-md-6">
                                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                
                                                                                @error('email')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                
                                                                        <div class="row mb-3">
                                                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                                
                                                                            <div class="col-md-6">
                                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                
                                                                                @error('password')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-8 offset-md-4">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                
                                                                                    <label class="form-check-label" for="remember">
                                                                                        {{ __('Remember Me') }}
                                                                                    </label>

                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                
                                                                        <div class="row mb-0">
                                                                            <div class="col-md-8 offset-md-4">
                                                                                <button type="submit" class="btn btn-primary">
                                                                                    {{ __('Login') }}
                                                                                </button>
                                                
                                                                                @if (Route::has('password.request'))
                                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                                        {{ __('Forgot Your Password?') }}
                                                                                    </a>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <button class="open-button" onclick="openForm()">Open Form</button>

                                                                    </form>



                                                                </div>
                                                                <div class="tab-pane fade" id="pills-profile"
                                                                    role="tabpanel" aria-labelledby="pills-profile-tab">


                                                                    <div class="form px-4">

                                                                        <input type="text" name=""
                                                                            class="form-control" placeholder="Name">

                                                                        <input type="text" name=""
                                                                            class="form-control" placeholder="Email">

                                                                        <input type="text" name=""
                                                                            class="form-control" placeholder="Phone">

                                                                        <input type="text" name=""
                                                                            class="form-control"
                                                                            placeholder="Password">

                                                                        <button
                                                                            class="btn btn-dark btn-block">Signup</button>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

<style>
    .col-md-4 {
        height: 60px;
        width: 45.33333333%!important;
    }


    body{

  background-color: #ff0000;
}


.card{

  width: 800px;
  border:none;

}




.btr{

  border-top-right-radius: 5px !important;
}


.btl{

  border-top-left-radius: 5px !important;
}

.btn-dark {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
}


.btn-dark:hover {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
}


.nav-pills{

  display:table !important;
  width:100%;
}

.nav-pills .nav-link {
    border-radius: 0px;
        border-bottom: 1px solid #0d6efd40;

}

.nav-item{
      display: table-cell;
       background: #0d6efd2e;
}


.form{

  padding: 10px;
      height: 300px;
}

.form input{

  margin-bottom: 12px;
  border-radius: 3px;
}


.form input:focus{

  box-shadow: none;
}


.form button{

  margin-top: 20px;
}
    </style>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <style>

                            </style>


                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <img class="infobanner" src="{{ url('uploads/1.jpg') }}">

                        </div>
                        <style>
                            .infobanner {
                                width: 754px;
                                height: 1430;
                                border-radius: 15px;
                            }
                        </style>

                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a href="#" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>