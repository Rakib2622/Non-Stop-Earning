<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            font-family: 'Arial', sans-serif;
        }
        .register-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }
        .register-form {
            width: 100%;
            max-width: 600px;
            background-color: #f7f7f7;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            font-size: 1rem;
            padding: 10px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group .required {
            color: red;
        }
        .btn-black {
            background: linear-gradient(45deg, red, skyblue);
            color: white;
            font-size: 1.2rem;
            padding: 10px 20px;
            border: none;
            width: 100%;
        }
        .btn-black:hover {
            background-color: #333;
        }
        .text-link {
            color: rgb(46, 123, 174);
            font-size: 1rem;
        }
        .text-link:hover {
            color: #17a6d1;
        }
        .form-header {
            text-align: center;
            margin-top: 100px;
            margin-bottom: 20px;
        }
        .form-header h2 {
            margin-bottom: 10px;
        }
        .form-header p {
            margin: 0;
            color: #555;
        }
    </style>
</head>
<body>

<div class="register-container">
    <div class="register-form">
        <div class="form-header">
            <h2>Registration Form</h2>
            <p>Provide your necessary information here.</p>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="first_name">{{ __('First Name') }}<span class="required">*</span></label>
                    <input id="first_name" class="form-control" type="text" name="first_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name">{{ __('Last Name') }}<span class="required">*</span></label>
                    <input id="last_name" class="form-control" type="text" name="last_name" required>
                </div>
            </div>

            <div class="form-row mt-4">
                <div class="form-group col-md-6">
                    <label for="language">{{ __('Choose your language') }}<span class="required">*</span></label>
                    <select id="language" class="form-control" name="language" required>
                        <option value="" disabled selected>Select Language</option>
                        <!-- Add your language options here -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="country">{{ __('Choose your country') }}<span class="required">*</span></label>
                    <select id="country" class="form-control" name="country" required>
                        <option value="" disabled selected>Select Country</option>
                        <!-- Add your country options here -->
                    </select>
                </div>
            </div>

            <div class="form-group mt-4">
                <label for="whatsapp">{{ __('Enter WhatsApp No.') }}<span class="required">*</span></label>
                <input id="whatsapp" class="form-control" type="text" name="whatsapp" required>
            </div>

            <div class="form-row mt-4">
                <div class="form-group col-md-6">
                    <label for="email">{{ __('Enter Email') }}<span class="required">*</span></label>
                    <input id="email" class="form-control" type="email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="reference">{{ __('Enter Reference') }}<span class="required">*</span></label>
                    <input id="reference" class="form-control" type="text" name="reference">
                </div>
            </div>

            <div class="form-group mt-4">
                <label for="password">{{ __('Password') }}<span class="required">*</span></label>
                <input id="password" class="form-control" type="password" name="password" required>
            </div>

            <div class="form-group form-check mt-4">
                <input id="terms" type="checkbox" class="form-check-input" name="terms" required>
                <label for="terms" class="form-check-label">
                    {{ __('By clicking Register, you agree to Selfgar Learning Platform’s terms & conditions, Privacy Policy and Cookie Policy') }}<span class="required">*</span>
                </label>
            </div>

            <button type="submit" class="btn btn-black mt-4">
                {{ __('Sign Up') }}
            </button>

            <div class="mt-4 text-center">
                <span>{{ __('Already have an account?') }}</span>
                <a href="{{ route('login') }}" class="text-link">{{ __('Login here') }}</a>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
