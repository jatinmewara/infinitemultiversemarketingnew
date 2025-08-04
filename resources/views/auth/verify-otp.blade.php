<form method="POST" action="/verify-otp">
    @csrf
    <input type="text" name="otp" placeholder="Enter OTP" required>
    <button type="submit">Verify OTP</button>
</form>
