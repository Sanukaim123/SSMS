<x-guest-layout>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('CSS/custom.css')}}"/>
<nav id="navbar">
		<div class="navdiv">
			<div class="main-topic"><a href="#">Students' Self-Management System</a>
			<br>

				<div class="sub-topic">SSMS</div>
				
			</div>
			<ul>
				<li><a href="{{route('register')}}">Home</a></li>
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf


                                <div class="topic">
                                        <h2><b>Registration Form</b></h2>
                                    </div>

                                <!-- Name -->
                                <div class="mt-4">
                                    
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="USERNAME"/>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="E-MAIL"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" placeholder="PASSWORD" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRM PASSWORD" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <button class="submit">LET'S START</button>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                                <br>

                               
                               
                            </form>
            </div>

            <div id="right">
				<div id="right-text">
					<h2>SSMS</h2>
					<h5>Guidance For Your Academic Activities</h5>
				</div>
				</div>




        </div>
</section>

<!--footer-->
<div id="footer">


        <p>&copy; 2024 Self study system</p>
    
    
        <li><a href="https://example.com">UOR Oficial Web</a></li>
        <li><a href="https://example2.com">UOR Libry</a></li>
        <li><a href="https://example3.com">LMS</a></li>
        <li><a href="https://example3.com">FOSMIS</a></li>
    
</div>

</x-guest-layout>
