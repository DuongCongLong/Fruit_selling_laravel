<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Đăng nhập hệ thống</title>
    <style>
        /* body {
            background: linear-gradient(45deg, rgb(65, 88, 208) 0%, rgb(200, 80, 192) 50%, rgb(255, 204, 112));
        } */

        .wrapper-login {
            max-width: 600px;
            min-height: 300px;
            border: 1px solid red;
            border-radius: 15px;
            margin: auto;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper-login mt-md-5">
        <h1 class="text-center text-danger fs-2">ĐĂNG NHẬP</h1>
        <form action="{{route('website.dologin')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="username">
                    <strong>Tên đăng nhập(*)</strong>
                </label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Tên đăng nhập">
            </div>
            <div class="mb-3">
                <label for="password">
                    <strong>Mật khẩu(*)</strong>
                </label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <div class="mb-3">
                <button type="submit" name="DANGNHAP" class="btn btn-danger form-control">Đăng nhập</button>
            </div>
        </form>
        <div class="mb-3">
            <i><strong>Chú ý:(*):Bắt buộc phải nhập</strong></i>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('message'))
    <script>
        toastr.options = {
            "progressBar": true,
            "closeButton": true
        }
        toastr.error("{{ Session::get('message') }}");
    </script>
    @endif
</body>

</html>
