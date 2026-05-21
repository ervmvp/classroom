const authStorageKey = 'classifyUser';

function getStoredUser() {
    const raw = localStorage.getItem(authStorageKey);
    if (!raw) return null;
    try {
        return JSON.parse(raw);
    } catch (error) {
        localStorage.removeItem(authStorageKey);
        return null;
    }
}

function saveUser(user) {
    localStorage.setItem(authStorageKey, JSON.stringify(user));
}

function logout() {
    localStorage.removeItem(authStorageKey);
    window.location.href = 'login.php';
}

function handleLoginForm(event) {
    event.preventDefault();
    const emailInput = document.getElementById('login-email');
    const passwordInput = document.getElementById('login-password');
    const email = emailInput?.value.trim();
    const password = passwordInput?.value;

    if (!email || !password) {
        alert('Please enter both email and password.');
        return;
    }

    const username = email.split('@')[0].replace(/[^a-zA-Z0-9]/g, '') || 'Student';
    const user = {
        email,
        name: username.charAt(0).toUpperCase() + username.slice(1),
    };

    saveUser(user);
    window.location.href = 'index.php';
}

function installPageProtection() {
    const currentPage = window.location.pathname.split('/').pop();
    const user = getStoredUser();

    if (currentPage === 'login.php') {
        if (user) {
            window.location.href = 'index.php';
            return;
        }

        const loginForm = document.getElementById('login-form');
        if (loginForm) {
            loginForm.addEventListener('submit', handleLoginForm);
        }
        return;
    }

    if (!user) {
        window.location.href = 'login.php';
        return;
    }

    const profileBadge = document.querySelector('.profile-badge');
    const welcomeEyebrow = document.querySelector('.eyebrow');
    const logoutButton = document.getElementById('logout-btn');

    if (profileBadge) {
        profileBadge.textContent = user.name.charAt(0).toUpperCase();
    }

    if (welcomeEyebrow) {
        welcomeEyebrow.textContent = `Welcome back, ${user.name}`;
    }

    if (logoutButton) {
        logoutButton.style.display = 'inline-flex';
        logoutButton.addEventListener('click', logout);
    }
}

document.addEventListener('DOMContentLoaded', installPageProtection);
