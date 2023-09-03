<?php
require '../config.php';

// Fetches the state names
$state_sql = "SELECT * FROM states ORDER BY name ASC";
$state_prep = $con->prepare($state_sql);
$state_prep->execute();
$state_data = $state_prep->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en" style="background-color: white;">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css" />

</head>
<style>
	.showTab {
		display: none !important;
	}

	.active-tab {
		display: flex !important;
	}

	.loader {
		width: 100px;
		height: 100px;
		border: 12px solid rgba(0, 0, 0, .5);
		border-top: 12px solid black;
		border-radius: 50%;
		animation: spin 1s linear infinite;
	}


	@keyframes spin {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	.is-invalid {
		border: 2px solid red;
	}

	.blacktext {
		color: black;
	}

	.whitetext {
		color: white;
	}

	.centerdiv {
		position: fixed;
		left: 50%;
		top: 35%;
		transform: translate(-50%, -35%);
	}
</style>

<body class="centerdiv">

	<div class="mx-auto steps-icons flex w-full max-w-sm flex-col gap-6 mt-20">
		<ol class="steps lg:steps-horizontal">
			<li class="step">
				<div class="step-circle ">1</div>
				<h3 class="blacktext">Intro</h3>
			</li>
			<li class="step">
				<div class="step-circle">2</div>
				<h3 class="blacktext">Peronal Info</h3>
			</li>
			<li class="step">
				<div class="step-circle">3</div>
				<h3 class="blacktext">Done</h3>
			</li>
		</ol>
		<li class="step hidden">
			<div class="step-circle">4</div>
			<h3 class="blacktext">Registering</h3>
		</li>
	</div>


	<div class="mx-auto flex w-full max-w-sm flex-col gap-6 mt-20">

		<div class="flex flex-col items-center">
			<h1 class="text-3xl font-semibold signingUp blacktext">Sign Up</h1>
			<p class="text-sm wait blacktext">Create a new account</p>
		</div>
		<div class="form-group">
			<div class="showTab flex flex-col w-full">
				<div class="form-field">
					<label class="form-label blacktext">Full Name</label>
					<input placeholder="Type here" type="text" class="input max-w-full fullName" />
					<label class="form-label blacktext">
						<span class="form-label-alt nameError blacktext">Please enter your real name</span>
					</label>
				</div>
				<div class="form-field mt-3">
					<label class="form-label blacktext ">Birthday</label>
					<input type="date" class="input max-w-full birthday" required />
					<label class="form-label">
						<span class="form-label-alt birthdayError blacktext ">Please enter your birthday</span>
					</label>
				</div>
				<div>
					<div class="form-field mt-3">
						<label class="form-label blacktext ">Gender</label>
						<select class="select input max-w-full gender">
							<option value="" selected disabled>Select gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<label class="form-label">
							<span class="form-label-alt genderError blacktext ">Please enter your gender</span>
						</label>
					</div>
				</div>
			</div>

			<div class="showTab flex flex-col">
				<div>
					<div class="form-field">
						<label class="form-label blacktext ">Email</label>
						<input placeholder="Type here" type="email" class="input max-w-full email" />
						<label class="form-label">
							<span class="form-label-alt emailError blacktext">Please enter your email</span>
						</label>
					</div>
				</div>

				<div class="mt-3">
					<div class="form-field">
						<label class="form-label blacktext ">Phone number</label>
						<input placeholder="Type here" type="text" class="input max-w-full phone" />
						<label class="form-label">
							<span class="form-label-alt phoneError blacktext">Please enter your phone number</span>
						</label>
					</div>
				</div>

				<div class="mt-3">
					<label class="form-label blacktext">State</label>
					<select class="state input max-w-full">
						<option value="">Select state</option>
						<?php foreach ($state_data as $state): ?>
							<option value="<?= $state['name'] ?>"><?= $state['name'] ?></option>
						<?php endforeach; ?>
					</select>
					<label class="form-label">
						<span class="form-label-alt stateError blacktext">Please enter your state</span>
					</label>
				</div>

				<div class="mt-3">
					<label class="form-label blacktext">City</label>
					<select class="city input max-w-full">
						<option value="">Select city</option>
					</select>
					<label class="form-label">
						<span class="form-label-alt cityError blacktext">Please enter your state</span>
					</label>
				</div>

			</div>

			<div class="showTab flex-col">
				<div class="form-field">
					<label class="form-label blacktext">Username</label>
					<div class="form-control">
						<input placeholder="Type here" type="text" class="input max-w-full username" />
					</div>
					<label class="form-label">
						<span class="form-label-alt usernameError blacktext">Please enter your username</span>
					</label>
				</div>

				<div class="form-field mt-3">
					<label class="form-label blacktext">Password</label>
					<div class="form-control">
						<input placeholder="Type here" id="pass" type="password" class="input max-w-full password" />
					</div>
					<label class="form-label">
						<span class="form-label-alt passwordError blacktext">Please enter your password</span>
					</label>
				</div>

				<div class="form-field mt-3">
					<label class="form-label blacktext">Confrim password</label>
					<div class="form-control">
						<input placeholder="Type here" id="confirmpass" type="password"
							class="input max-w-full confirm_pass" />
					</div>
					<label class="form-label">
						<span class="form-label-alt confirmPass_error blacktext">Please confirm your password</span>
					</label>
				</div>

				<div class=" blacktext showPass_div flex justify-end gap-2">
					<label for="showPass">Show password</label>
					<input type="checkbox" id="showPass">
				</div>
			</div>

			<div class="showTab flex-col items-center">
				<div class="loader"></div>
			</div>


			<div class="form-field pt-5 register_btns">
				<div class="form-control justify-end">
					<button type="button" class="prev_btn  btn btn-outline-warning">Prev</button>
					<button type="button" class="next_btn btn btn-outline-warning">Next</button>
				</div>
			</div>

			<div class="form-field existingUser">
				<div class="form-control justify-center">
					<a href="../index.php" class="link link-underline-hover link-primary blacktext text-xl">Existing
						user?</a>
				</div>
			</div>

		</div>
	</div>

	<script>
		const passInput = document.getElementById('pass');
		const confirmPassInput = document.getElementById('confirmpass');
		const showPassCheckBox = document.getElementById('showPass');

		const showPass = () => {
			const passType = showPassCheckBox.checked ? 'text' : 'password';
			passInput.type = passType;
			confirmPassInput.type = passType;
		};

		showPassCheckBox.addEventListener('change', showPass);
	</script>





	<!-- External links -->

	<!-- JQuery link -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Register js script -->
	<script src="../js/register.js"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</body>

</html>