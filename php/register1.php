<?php
require '../config.php';

// Fetches the state names
$state_sql = "SELECT * FROM states ORDER BY name ASC";
$state_prep = $con->prepare($state_sql);
$state_prep->execute();
$state_data = $state_prep->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link
   rel="stylesheet"
   href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
/>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    </style>

<body>

<div class="mx-auto flex w-full max-w-sm flex-col gap-6 mt-20">
<ol class="steps lg:steps-horizontal">
	<li class="step step-done">
		<div class="step-circle ">1</div>
		<h3>Intro</h3>
	</li>
	<li class="step">
		<div class="step-circle">2</div>
		<h3>Peronal Info</h3>
	</li>
	<li class="step">
		<div class="step-circle">3</div>
		<h3>Done</h3>
	</li>
</ol>
</div>


<div class="mx-auto flex w-full max-w-sm flex-col gap-6 mt-20">

	<div class="flex flex-col items-center">
		<h1 class="text-3xl font-semibold">Sign Up</h1>
		<p class="text-sm">Create a new account</p>
	</div>
	<div class="form-group">
		<div class="form-field">
			<label class="form-label">Full Name</label>

			<input placeholder="Type here" type="text" class="input max-w-full" required/>
			<label class="form-label">
				<span class="form-label-alt">Please enter your real name</span>
			</label>
		</div>
        <div >
		<label class="form-label">State</label>
            <select class="state input max-w-full">
                <option value="">Select state</option>
                 <?php foreach ($state_data as $state) : ?>
                 <option value="<?= $state['name'] ?>"><?= $state['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <label class="form-label">
				<span class="form-label-alt">Please enter your state</span>
			</label>
                <p class="stateError"></p>
        </div>
		<tab >
            <div class="form-field">
            		<label class="form-label">Gender</label>
            	<select class="select input max-w-full">
	        		<option>Male</option>
	        		<option>Female</option>
           		</select>
		    </div>
        </tab>
        <tab style="display: none;">
            <div class="form-field">
			<label class="form-label">Email</label>

			<input placeholder="Type here" type="email" class="input max-w-full" required/>
			<label class="form-label">
				<span class="form-label-alt">Please enter your email</span>
			</label>
		    </div>
        </tab>
        <tab style="display: none;">
		    <div class="form-field">
			<label class="form-label">Password</label>
			<div class="form-control">
				<input placeholder="Type here" type="password" class="input max-w-full" required />
			</div>
		    </div>
        </tab>
        <tab style="display: none;">
            <div class="form-field">
            <label class="form-label">Gender</label>
            <select class="select">
	        <option>Male</option>
	        <option>Female</option>
            </select>
		    </div>
        </tab>
		<div class="form-field">
		</div>
		<div class="form-field pt-5">
			<div class="form-control justify-between">
				<button type="button" id class="next_btn w-full btn btn-outline-secondary">Next</button>
			</div>
		</div>

		<div class="form-field">
			<div class="form-control justify-center">
				<a class="link link-underline-hover link-primary text-sm">Existing user?</a>
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
</body>

</html>