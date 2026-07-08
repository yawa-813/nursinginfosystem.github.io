<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nursing Information System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card fade-in">
            <div class="login-logo">
                <div style="width: 100px; height: 100px; margin: 0 auto 20px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4); border: 4px solid rgba(255, 255, 255, 0.3);">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 17L12 22L22 17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12L12 17L22 12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h1 class="login-title">Nursing Information System</h1>
                <p class="login-subtitle">Secure Healthcare Management Portal</p>
            </div>
            
            <form method="POST" action="dashboard.php">
                <div class="form-group">
                    <label class="form-label" for="username">
                        <span style="margin-right: 8px;">👤</span>Username
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="form-control" 
                        placeholder="Enter your username"
                        required
                        style="padding-left: 45px;"
                    >
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">
                        <span style="margin-right: 8px;">🔒</span>Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control" 
                        placeholder="Enter your password"
                        required
                        style="padding-left: 45px;"
                    >
                </div>
                
                <div class="form-group">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; padding: 12px; background: rgba(102, 126, 234, 0.05); border-radius: 8px; transition: var(--transition);">
                        <input type="checkbox" name="remember" style="width: 18px; height: 18px; accent-color: #667eea;">
                        <span style="font-size: 14px; color: var(--gray-600);">Remember me on this device</span>
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 15px; font-size: 16px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">
                    <span style="margin-right: 10px;">🚀</span>Login to System
                </button>
                
                <div style="margin-top: 20px; text-align: center;">
                    <a href="#" style="color: #667eea; text-decoration: none; font-size: 14px; font-weight: 500; transition: var(--transition); display: inline-block; padding: 8px 16px; border-radius: 8px; background: rgba(102, 126, 234, 0.05);">Forgot Password?</a>
                </div>
            </form>
            
            <div style="margin-top: 30px; padding-top: 20px; border-top: 2px solid rgba(102, 126, 234, 0.1); text-align: center;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 10px;">
                    <span style="font-size: 20px;">🔒</span>
                    <p style="color: var(--gray-500); font-size: 13px; font-weight: 500; margin: 0;">Secure Access</p>
                    <span style="font-size: 20px;">🛡️</span>
                    <p style="color: var(--gray-500); font-size: 13px; font-weight: 500; margin: 0;">HIPAA Compliant</p>
                </div>
                <p style="color: var(--gray-400); font-size: 11px; margin-top: 10px;">Authorized Personnel Only • Version 2.5.1</p>
            </div>
        </div>
    </div>
</body>
</html>
