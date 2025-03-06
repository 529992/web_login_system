<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laka - Technology & Events</title>
    
    <!-- Dark Theme Color Palette CSS -->
    <style>
        :root {
            --primary-color: #cc9900;    /* brand colour */
            --secondary-color:rgb(0, 0, 0);  /* Black */
            --accent-color:rgb(95, 95, 95);     /* light black */
            --background-color:rgb(105, 105, 105); /* Very Dark Background */
            --surface-color: #1e1e1e;    /* Slightly Lighter Dark */
            --text-color: #e0e0e0;       /* Light Gray Text */
            --text-accent: #ffffff;      /* Pure White for highlights */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--text-accent);
            text-align: center;
            padding: 100px 20px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--text-accent);
        }

        .cta-button {
            display: inline-block;
            background-color: var(--accent-color);
            color: var(--text-accent);
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .cta-button:hover {
            transform: scale(1.05);
            border-color: var(--text-accent);
        }

        .featured-services {
            margin-top: 50px;
        }

        .service-grid {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .service-card {
            background-color: var(--surface-color);
            padding: 30px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.7);
        }

        .service-card h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        /* Navigation Styles */
        .main-navigation {
            background-color: var(--surface-color);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: var(--text-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        /* Footer Styles */
        .main-footer {
            background-color: var(--surface-color);
            color: var(--text-color);
            padding: 40px 0;
            margin-top: 50px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }

        .footer-section {
            text-align: center;
        }

        .social-links a {
            color: var(--text-colorlor);
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--accent-color);
        }


/* Login Page Styles */
.login-page {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-color: #4a4a4a; /* Matching the grey background in the image */
}

.login-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
    padding: 20px;
}

.login-container {
    width: 100%;
    max-width: 400px;
}

.login-form {
    background-color: #1e1e1e;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

.login-form h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #f1c40f; /* Golden yellow for "Welcome Back" */
    font-size: 24px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #cccccc;
}

.form-group input {
    width: 100%;
    padding: 10px;
    background-color: #2c2c2c;
    border: none;
    border-radius: 5px;
    color: #ffffff;
}

.form-remember {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    color: #cccccc;
}

.form-remember input[type="checkbox"] {
    margin-right: 10px;
}

.login-button {
    width: 100%;
    padding: 12px;
    background-color: #f1c40f; /* Golden yellow */
    color: #000000;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.form-footer {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.forgot-password, .create-account {
    color: #cccccc;
    text-decoration: none;
    font-size: 14px;
}

.forgot-password:hover, .create-account:hover {
    color: var(--accent-color);
}

.error {
    color: red;
    align-items: center;
    border: 1px solid red;
    padding: 12px;
    display: flex;
    margin-bottom: 10px;
    justify-content: center; 
    text-align: center;
}

/* Signup Form Specific Styles */
.signup-form .form-footer {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 20px;
}

.signup-form .form-footer span {
    color: #cccccc;
}
    </style>

    <!-- JavaScript -->
    <script>
        // Login Form Validation
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.querySelector('.login-form');
            
            if (loginForm) {
                loginForm.addEventListener('submit', function(e) {
                    const username = document.getElementById('username');
                    const password = document.getElementById('password');
                    
                    // Basic validation
                    if (username.value.trim() === '') {
                        e.preventDefault();
                        alert('Please enter your username');
                        username.focus();
                        return false;
                    }
                    
                    if (password.value.trim() === '') {
                        e.preventDefault();
                        alert('Please enter your password');
                        password.focus();
                        return false;
                    }
                    
                    // Optional: Add more complex validation if needed
                });
            }
        });


        document.addEventListener('DOMContentLoaded', function() {
            console.log('Dark Theme Landing Page Loaded');
            
            // Smooth scroll for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Optional: Simple scroll-based animations
            window.addEventListener('scroll', function() {
                const serviceCards = document.querySelectorAll('.service-card');
                serviceCards.forEach(card => {
                    const cardPosition = card.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.2;
                    
                    if (cardPosition < screenPosition) {
                        card.style.opacity = 1;
                        card.style.transform = 'translateY(0)';
                    }
                });
            });
        });
    </script>
</head>