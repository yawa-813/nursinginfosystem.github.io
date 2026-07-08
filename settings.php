<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings & Help - Nursing Information System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="dashboard.php" class="nav-brand">
                🏥 Nursing Information System
            </a>
            <ul class="nav-menu">
                <li><a href="dashboard.php" class="nav-link">📊 Dashboard</a></li>
                <li><a href="patient_profile.php" class="nav-link">👤 Patient Profile</a></li>
                <li><a href="vitals.php" class="nav-link">💓 Vitals</a></li>
                <li><a href="nursing_notes.php" class="nav-link">📝 Notes</a></li>
                <li><a href="care_plan.php" class="nav-link">📋 Care Plan</a></li>
                <li><a href="medication.php" class="nav-link">💊 Medication</a></li>
                <li><a href="reports.php" class="nav-link">📈 Reports</a></li>
                <li><a href="settings.php" class="nav-link active">⚙️ Settings</a></li>
                <li><a href="login.php" class="nav-link">🚪 Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="dashboard-header">
        <div class="container">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 15px;">
                <div>
                    <h1 style="font-size: 28px; margin-bottom: 5px; font-weight: 800;">Settings ⚙️</h1>
                    <p style="opacity: 0.95; font-size: 14px;">User: Sarah Johnson • RN</p>
                </div>
                <div style="display: flex; gap: 10px;">
                    <div style="background: rgba(255,255,255,0.15); padding: 10px 20px; border-radius: 8px; backdrop-filter: blur(10px); text-align: center;">
                        <div style="font-size: 18px; font-weight: 700;">v2.5</div>
                        <div style="font-size: 10px; opacity: 0.9;">Version</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-3" style="margin-bottom: 20px;">
            <!-- User Profile Settings -->
            <div class="card fade-in">
                <div class="card-header">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 20px;">👤</span>
                        <h3 class="card-title">Profile</h3>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <label class="form-label" style="font-size: 12px;">Name</label>
                        <input type="text" class="form-control" style="padding: 8px 12px; font-size: 13px;" value="Sarah Johnson">
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-size: 12px;">Username</label>
                        <input type="text" class="form-control" style="padding: 8px 12px; font-size: 13px;" value="sjohnson" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-size: 12px;">Email</label>
                        <input type="email" class="form-control" style="padding: 8px 12px; font-size: 13px;" value="sarah.johnson@hospital.com">
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; padding: 10px; font-size: 13px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">💾 Save</button>
                </form>
            </div>

            <!-- Notification Settings -->
            <div class="card fade-in">
                <div class="card-header">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 20px;">🔔</span>
                        <h3 class="card-title">Notifications</h3>
                    </div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 8px; background: var(--gray-100); border-radius: 6px; font-size: 12px;">
                        <input type="checkbox" checked style="width: 16px; height: 16px;">
                        <span>Med reminders</span>
                    </label>
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 8px; background: var(--gray-100); border-radius: 6px; font-size: 12px;">
                        <input type="checkbox" checked style="width: 16px; height: 16px;">
                        <span>Critical alerts</span>
                    </label>
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 8px; background: var(--gray-100); border-radius: 6px; font-size: 12px;">
                        <input type="checkbox" checked style="width: 16px; height: 16px;">
                        <span>Vitals alerts</span>
                    </label>
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 8px; background: var(--gray-100); border-radius: 6px; font-size: 12px;">
                        <input type="checkbox" style="width: 16px; height: 16px;">
                        <span>Email</span>
                    </label>
                    <label style="display: flex; align-items: center; gap: 10px; cursor: pointer; padding: 8px; background: var(--gray-100); border-radius: 6px; font-size: 12px;">
                        <input type="checkbox" style="width: 16px; height: 16px;">
                        <span>SMS</span>
                    </label>
                </div>
            </div>

            <!-- Display Settings -->
            <div class="card fade-in">
                <div class="card-header">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 20px;">🎨</span>
                        <h3 class="card-title">Display</h3>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">Theme</label>
                    <select class="form-control" style="padding: 8px 12px; font-size: 13px;">
                        <option value="light">Light</option>
                        <option value="dark">Dark</option>
                        <option value="auto">Auto</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">Language</label>
                    <select class="form-control" style="padding: 8px 12px; font-size: 13px;">
                        <option value="en">English</option>
                        <option value="es">Spanish</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 10px; font-size: 13px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">💾 Apply</button>
            </div>
        </div>

        <!-- Security Settings -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">🔒</span>
                    <h3 class="card-title">Security</h3>
                </div>
            </div>
            <div class="grid grid-2">
                <div>
                    <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">Change Password</h4>
                    <form>
                        <div class="form-group">
                            <label class="form-label" style="font-size: 12px;">Current</label>
                            <input type="password" class="form-control" style="padding: 8px 12px; font-size: 13px;" placeholder="Current">
                        </div>
                        <div class="form-group">
                            <label class="form-label" style="font-size: 12px;">New</label>
                            <input type="password" class="form-control" style="padding: 8px 12px; font-size: 13px;" placeholder="New">
                        </div>
                        <button type="submit" class="btn btn-primary" style="padding: 10px 20px; font-size: 13px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">🔐 Update</button>
                    </form>
                </div>
                <div>
                    <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">2FA</h4>
                    <div style="padding: 15px; background: var(--gray-100); border-radius: 8px; margin-bottom: 10px;">
                        <p style="margin-bottom: 5px; font-size: 11px;">Extra security layer</p>
                        <span class="badge badge-warning" style="font-size: 10px;">Not Enabled</span>
                    </div>
                    <button class="btn btn-secondary" style="padding: 8px 16px; font-size: 12px;">📱 Enable 2FA</button>
                </div>
            </div>
        </div>

        <!-- Help & Support -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">❓</span>
                    <h3 class="card-title">Help</h3>
                </div>
            </div>
            
            <div class="grid grid-2">
                <div>
                    <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">📚 Guides</h4>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <a href="#" class="btn btn-outline" style="text-align: left; padding: 8px 12px; font-size: 12px;">🎬 Getting Started</a>
                        <a href="#" class="btn btn-outline" style="text-align: left; padding: 8px 12px; font-size: 12px;">📝 Record Vitals</a>
                        <a href="#" class="btn btn-outline" style="text-align: left; padding: 8px 12px; font-size: 12px;">💊 Medication</a>
                        <a href="#" class="btn btn-outline" style="text-align: left; padding: 8px 12px; font-size: 12px;">📊 Reports</a>
                    </div>
                </div>
                
                <div>
                    <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">🆘 Contact</h4>
                    <div style="padding: 15px; background: var(--gray-100); border-radius: 8px;">
                        <div style="margin-bottom: 8px; font-size: 11px;">
                            <strong>📞 IT:</strong> (555) 100-2000
                        </div>
                        <div style="margin-bottom: 8px; font-size: 11px;">
                            <strong>📧 Email:</strong> support@hospital.com
                        </div>
                        <div style="font-size: 11px;">
                            <strong>🕐 Hours:</strong> 24/7
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">💡</span>
                    <h3 class="card-title">FAQ</h3>
                </div>
            </div>
            
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <div style="padding: 12px; background: var(--gray-100); border-radius: 6px; cursor: pointer;">
                    <h4 style="color: var(--primary-color); margin-bottom: 5px; font-size: 12px;">Reset password?</h4>
                    <p style="color: var(--gray-600); font-size: 11px; margin: 0;">Go to Settings > Security</p>
                </div>
                
                <div style="padding: 12px; background: var(--gray-100); border-radius: 6px; cursor: pointer;">
                    <h4 style="color: var(--primary-color); margin-bottom: 5px; font-size: 12px;">Add new patient?</h4>
                    <p style="color: var(--gray-600); font-size: 11px; margin: 0;">Contact admissions or supervisor</p>
                </div>
                
                <div style="padding: 12px; background: var(--gray-100); border-radius: 6px; cursor: pointer;">
                    <h4 style="color: var(--primary-color); margin-bottom: 5px; font-size: 12px;">System down?</h4>
                    <p style="color: var(--gray-600); font-size: 11px; margin: 0;">Call IT: (555) 100-2000</p>
                </div>
            </div>
        </div>

        <!-- System Information -->
        <div class="card fade-in">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">ℹ️</span>
                    <h3 class="card-title">System</h3>
                </div>
            </div>
            <div class="grid grid-3">
                <div style="padding: 15px; background: var(--gray-100); border-radius: 8px;">
                    <h4 style="color: var(--primary-color); margin-bottom: 5px; font-size: 11px;">Version</h4>
                    <p style="font-size: 18px; font-weight: 700; margin: 0;">v2.5.1</p>
                </div>
                <div style="padding: 15px; background: var(--gray-100); border-radius: 8px;">
                    <h4 style="color: var(--primary-color); margin-bottom: 5px; font-size: 11px;">Updated</h4>
                    <p style="font-size: 18px; font-weight: 700; margin: 0;">Jan 15</p>
                </div>
                <div style="padding: 15px; background: var(--gray-100); border-radius: 8px;">
                    <h4 style="color: var(--primary-color); margin-bottom: 5px; font-size: 11px;">Status</h4>
                    <p style="font-size: 18px; font-weight: 700; color: var(--success-color); margin: 0;">● Online</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
