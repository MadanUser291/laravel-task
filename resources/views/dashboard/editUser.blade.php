<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('POST')

        <div class="input-box">
            <label for="first_name">First Name:</label>
            <input name="first_name" id="first_name" type="text" placeholder="Enter your first name" value="{{ $user->first_name }}" required>
        </div>

        <div class="input-box">
            <label for="last_name">Last Name:</label>
            <input name="last_name" id="last_name" type="text" placeholder="Enter your last name" value="{{ $user->last_name }}" required>
        </div>

        <div class="input-box">
            <label for="email">Email:</label>
            <input name="email" id="email" type="email" placeholder="Enter your email" value="{{ $user->email }}" required>
        </div>

        <div class="input-box">
            <label for="phone_number">Phone Number:</label>
            <input name="phone_number" id="phone_number" type="text" placeholder="Enter your phone number" value="{{ $user->phone_number }}">
        </div>

        <div class="input-box">
            <label for="gender">Gender:</label>
            <input name="gender" id="gender" type="text" placeholder="Enter your gender" value="{{ $user->gender }}">
        </div>

        <div class="input-box">
            <label for="address">Address:</label>
            <input name="address" id="address" type="text" placeholder="Enter your address" value="{{ $user->address }}">
        </div>

        <div class="input-box">
            <label for="street">Street:</label>
            <input name="street" id="street" type="text" placeholder="Enter your street" value="{{ $user->street }}">
        </div>

        <div class="input-box">
            <label for="city">City:</label>
            <input name="city" id="city" type="text" placeholder="Enter your city" value="{{ $user->city }}">
        </div>

        <div class="input-box">
            <label for="state">State:</label>
            <input name="state" id="state" type="text" placeholder="Enter your state" value="{{ $user->state }}">
        </div>

        <div class="input-box">
            <label for="country">Country:</label>
            <input name="country" id="country" type="text" placeholder="Enter your country" value="{{ $user->country }}">
        </div>

        <div class="input-box">
            <label for="postal_code">Postal Code:</label>
            <input name="postal_code" id="postal_code" type="text" placeholder="Enter your postal code" value="{{ $user->postal_code }}">
        </div>

        <div class="input-box">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="Active" {{ $user->status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="In Active" {{ $user->status == 'In Active' ? 'selected' : '' }}>In Active</option>
            </select>
        </div>

        <div class="input-box button">
            <input type="submit" value="Update">
        </div>
    </form>
  </div>
</body>
</html>
