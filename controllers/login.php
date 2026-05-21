<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | Class-ify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-root">
        <div class="login-card">
            <div class="login-brand">Class-ify</div>
            <h1>Sign in</h1>
            <p>Use any email and password to continue to your classroom dashboard.</p>
            <form id="login-form" class="login-form">
                <label for="login-email">Email address
                    <input id="login-email" type="email" required autocomplete="email" />
                </label>
                <label for="login-password">Password
                    <input id="login-password" type="password" required autocomplete="current-password" />
                </label>
                <button type="submit" class="action-btn">Sign in</button>
            </form>
            <p class="login-note">Your session is stored locally in the browser.</p>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>