
<style>
        /* Add the provided CSS here */
        /* General Form Styles */
        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }

        form .form-group {
            margin-bottom: 15px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        form input, 
        form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }

        form input:focus, 
        form select:focus {
            border-color: #007bff;
        }

        form input[type="checkbox"] {
            width: auto;
            margin-right: 5px;
        }

        form .checkbox label {
            display: inline-block;
            font-weight: normal;
            color: #666;
        }

        form .checkbox a {
            color: #007bff;
            text-decoration: none;
        }

        form .checkbox a:hover {
            text-decoration: underline;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #0056b3;
        }

        form button:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
        }

        form #message-name, 
        form #message-mobile, 
        form #message-email, 
        form #message-password, 
        form #message-city {
            font-size: 14px;
            color: red;
            margin-top: 5px;
        }
        .message-city{
            font-size: 14px;
            color: red;
            margin-top: 5px;
        }
        

        /* Add some spacing between form and terms text */
        form .checkbox {
            margin-top: 10px;
        }
    </style>
 
 @if($errors->any())
        @foreach($errors->all() as $error)
        <!-- <div>{{$error}}</div> -->
        @endforeach
        @endif 

<form id="regForm" action="adduser" method="POST">
    @csrf
        <div class="form-group">
            <input type="hidden" name="action" value="register">
            <label for="full_name">Enter your name</label>
            <input type="text" id="full_name" name="full_name" placeholder="Your full name">
            <div class="message-city">@error('full_name'){{$message}} @enderror</div>
        </div>
        <div id="message-name"></div>
        <div class="form-group">
            <label for="mobile_number">Enter your mobile number</label>
            <input type="number" id="mobile_number" name="mobile_number" placeholder="+91" >
            <div class="message-city">@error('mobile_number'){{$message}} @enderror</div>
        </div>
        <div id="message-mobile"></div>
        <div class="form-group">
            <label for="email">Enter your email address</label>
            <input type="email" id="email" name="email" placeholder="abc@example.com" >
            <div class="message-city">@error('email'){{$message}} @enderror</div>
        </div>
        <div id="message-email"></div>
        <div class="form-group">
            <label for="password">Enter your password</label>
            <input type="password" id="password" name="password" placeholder="password" >
            <div class="message-city">@error('password'){{$message}} @enderror</div>
        </div>
        <div id="message-password"></div>
        <div class="form-group">
            <label for="city">Select city of hall</label>
            <select id="city" name="city" >
                <option value="" disabled selected>Where your hall is located</option>
                <option value="Nanded">Nanded</option>
                <option value="Hingoli">Hingoli</option>
                <option value="Parbhani">Parbhani</option>
                <option value="Pune">Pune</option>
                <option value="Dhule">Dhule</option>
            </select>
        </div>
        <div class="message-city">@error('city'){{$message}} @enderror</div>
        <div >
        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
        @endif  -->
        </div>
        <div class="form-group">
            <button type="submit" id="register-btn" >Register Now</button>
        </div>
    </form>