# filepath: /C:/Users/narci/OneDrive/Área de Trabalho/Projetos IC/irpfUnimontes/resources/views/admin/register.blade.php
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
                    <div class="card-header text-center bg-primary text-white">{{ __('Admin Register') }}</div>
    
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('admin.register') }}">
                            @csrf
    
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
    
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>
    
                            <div class="form-group mb-3">
                                <label for="cpf" class="form-label">{{ __('CPF') }}</label>
                                <input id="cpf" type="text" class="form-control" name="cpf" required>
                            </div>
    
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
    
                            <div class="form-group mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
    
                            <div class="form-group mb-3 text-center">
                                <button type="submit" class="btn btn-primary w-100">{{ __('Register') }}</button>
                            </div>
    
                            <div class="text-center">
                                <a href="{{ route('admin.login') }}" class="text-primary">Já tem uma conta? Faça login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>