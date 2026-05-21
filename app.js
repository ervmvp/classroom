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

function showProtectedContent() {
    const root = document.querySelector('.app-root');
    if (root) {
        root.style.visibility = 'visible';
    }
}

function handleLoginForm(event) {
    event.preventDefault();
    const emailInput = document.getElementById('login-email');
    const passwordInput = document.getElementById('login-password');
    const roleInput = document.getElementById('login-role');
    const email = emailInput?.value.trim();
    const password = passwordInput?.value;
    const role = roleInput?.value || 'student';

    if (!email || !password) {
        alert('Please enter both email and password.');
        return;
    }

    const username = email.split('@')[0].replace(/[^a-zA-Z0-9]/g, '') || 'student';
    const user = {
        email,
        name: username.charAt(0).toUpperCase() + username.slice(1),
        role,
        createdAt: new Date().toISOString(),
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
    const roleLabel = document.getElementById('user-role');
    const logoutButton = document.getElementById('logout-btn');

    if (profileBadge) {
        profileBadge.textContent = user.name.charAt(0).toUpperCase();
    }

    if (welcomeEyebrow) {
        welcomeEyebrow.textContent = `Welcome back, ${user.name}`;
    }

    if (roleLabel) {
        roleLabel.textContent = user.role?.charAt(0).toUpperCase() + user.role.slice(1);
    }

    if (logoutButton) {
        logoutButton.style.display = 'inline-flex';
        logoutButton.addEventListener('click', logout);
    }

    showProtectedContent();
}

document.addEventListener('DOMContentLoaded', installPageProtection);
