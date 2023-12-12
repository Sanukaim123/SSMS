<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/custom.css')}}"/>


    <nav id="navbar">
		<div class="navdiv">
			<div class="main-topic"><a href="#">Students' Self-Management System</a>
			<br>

				<div class="sub-topic">SSMS</div>
				
			</div>
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="Contact">Contact</a></li>
				<button><a href="{{route('register')}}">SignIn</a></button>
				<button><a href="{{route('login')}}">Login</a></button>
			</ul>
		</div>
	</nav>


    <section id="main">
		<div id="login_box">
			<div id="left">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="topic">
                                            <h2><b>Login Form</b></h2>
                                    </div>
                                    <div class="top_link"><a href="{{ route('register') }}"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" 
				alt="">Create an account</a></div>
                <br><br>

                                    <!-- Email Address -->
                                    <div>
                                        
                                        <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" 
                                        placeholder="E-MAIL/USERNAME"/>
                                      
                                    </div>

                                    <!-- Password -->
                                    <div class="mt-4">
                                       

                                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="PASSWORD" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <br>
                                    <br>
                                    

                                    <button class="submit">LET'S START</button>

                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif


                       
                                       
                                    </div>
                                </form>
            </div>

            <div id="right">
				<div id="right-text">
					<h2>SSMS</h2>
					<h5>Guidance For Your Academic Activities</h5>
				</div>
				
			</div>


        </div>




    </div>


    <!--footer-->
<div id="footer">


<p>&copy; 2024 Self study system</p>


<li><a href="https://example.com">UOR Oficial Web</a></li>
<li><a href="https://example2.com">UOR Libry</a></li>
<li><a href="https://example3.com">LMS</a></li>
<li><a href="https://example3.com">FOSMIS</a></li>

</div>
</x-guest-layout>
