<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | Class-ify</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-root">
        <div class="login-card">
            <div class="login-brand">Class-ify</div>
            <h1>Sign in</h1>
            <p>Sign in or automatically register as a student, teacher, or admin.</p>
            <form id="login-form" class="login-form">
                <label for="login-email">Email address
                    <input id="login-email" type="email" required autocomplete="email" />
                </label>
                <label for="login-password">Password
                    <input id="login-password" type="password" required autocomplete="current-password" />
                </label>
                <label for="login-role">Account type
                    <select id="login-role" required>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="admin">Admin</option>
                    </select>
                </label>
                <button type="submit" class="action-btn">Continue</button>
            </form>
            <p class="login-note">This site stores your account locally in the browser for demo purposes.</p>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
