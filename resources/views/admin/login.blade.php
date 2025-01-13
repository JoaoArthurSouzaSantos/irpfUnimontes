# filepath: /C:/Users/narci/OneDrive/Área de Trabalho/Projetos IC/irpfUnimontes/resources/views/admin/login.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-primary text-white">{{ __('Admin Login') }}</div>
    
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
    
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" required autofocus>
                            </div>
    
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
    
                            <div class="form-group mb-3 text-center">
                                <button type="submit" class="btn btn-primary w-100">{{ __('Login') }}</button>
                            </div>
    
                            <div class="text-center">
                                <a href="{{ route('admin.register') }}" class="text-primary">Não tem uma conta? Registre-se</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>