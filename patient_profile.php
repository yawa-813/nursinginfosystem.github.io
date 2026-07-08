<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile - Nursing Information System</title>
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
                <li><a href="patient_profile.php" class="nav-link active">👤 Patient Profile</a></li>
                <li><a href="vitals.php" class="nav-link">💓 Vitals</a></li>
                <li><a href="nursing_notes.php" class="nav-link">📝 Notes</a></li>
                <li><a href="care_plan.php" class="nav-link">📋 Care Plan</a></li>
                <li><a href="medication.php" class="nav-link">💊 Medication</a></li>
                <li><a href="reports.php" class="nav-link">📈 Reports</a></li>
                <li><a href="settings.php" class="nav-link">⚙️ Settings</a></li>
                <li><a href="login.php" class="nav-link">🚪 Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="profile-header">
        <div class="container">
            <div style="display: flex; align-items: center; gap: 20px; flex-wrap: wrap;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4); border: 4px solid rgba(255, 255, 255, 0.3);">
                    <span style="font-size: 32px; color: white;">👤</span>
                </div>
                <div style="flex: 1;">
                    <h1 style="font-size: 28px; margin-bottom: 5px; font-weight: 800;">John Doe 👋</h1>
                    <p style="opacity: 0.9; font-size: 14px;">Patient ID: P-001 • Room: 302 • Age: 65</p>
                    <div style="margin-top: 8px; display: flex; gap: 8px;">
                        <span class="badge badge-danger" style="font-size: 12px;">🚨 Critical</span>
                        <span class="badge badge-warning" style="font-size: 12px;">⚠️ Allergies</span>
                    </div>
                </div>
                <div style="display: flex; gap: 10px;">
                    <div style="background: rgba(255,255,255,0.15); padding: 10px 20px; border-radius: 8px; backdrop-filter: blur(10px); text-align: center;">
                        <div style="font-size: 18px; font-weight: 700;">65</div>
                        <div style="font-size: 10px; opacity: 0.9;">Age</div>
                    </div>
                    <div style="background: rgba(255,255,255,0.15); padding: 10px 20px; border-radius: 8px; backdrop-filter: blur(10px); text-align: center;">
                        <div style="font-size: 18px; font-weight: 700;">302</div>
                        <div style="font-size: 10px; opacity: 0.9;">Room</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-3" style="margin-bottom: 20px;">
            <!-- Demographics -->
            <div class="card fade-in">
                <div class="card-header">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 20px;">📋</span>
                        <h3 class="card-title">Demographics</h3>
                    </div>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Full Name:</strong>
                    <span style="font-size: 13px;">John Michael Doe</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Date of Birth:</strong>
                    <span style="font-size: 13px;">March 15, 1959 (65 years)</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Gender:</strong>
                    <span style="font-size: 13px;">Male</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Blood Type:</strong>
                    <span style="font-size: 13px;">A+</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Marital Status:</strong>
                    <span style="font-size: 13px;">Married</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Occupation:</strong>
                    <span style="font-size: 13px;">Retired Teacher</span>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="card fade-in">
                <div class="card-header">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 20px;">📞</span>
                        <h3 class="card-title">Contact</h3>
                    </div>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Phone:</strong>
                    <span style="font-size: 13px;">(555) 123-4567</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Emergency:</strong>
                    <span style="font-size: 13px;">Jane Doe (Wife)</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Emergency Phone:</strong>
                    <span style="font-size: 13px;">(555) 987-6543</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Address:</strong>
                    <span style="font-size: 13px;">123 Main Street</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Email:</strong>
                    <span style="font-size: 13px;">john.doe@email.com</span>
                </div>
            </div>

            <!-- Medical Information -->
            <div class="card fade-in">
                <div class="card-header">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 20px;">🏥</span>
                        <h3 class="card-title">Medical Info</h3>
                    </div>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Admission:</strong>
                    <span style="font-size: 13px;">January 15, 2024</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Physician:</strong>
                    <span style="font-size: 13px;">Dr. Sarah Johnson</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Primary Dx:</strong>
                    <span style="font-size: 13px;">Acute MI</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Secondary Dx:</strong>
                    <span style="font-size: 13px;">HTN, T2DM</span>
                </div>
                <div class="patient-info-item" style="padding: 8px 12px;">
                    <strong style="font-size: 13px;">Insurance:</strong>
                    <span style="font-size: 13px;">BlueCross</span>
                </div>
            </div>
        </div>

        <!-- Allergies -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">⚠️</span>
                    <h3 class="card-title">Allergies & Alerts</h3>
                </div>
            </div>
            <div class="grid grid-3">
                <div style="padding: 15px; background: #fee2e2; border-radius: 8px; border-left: 4px solid var(--danger-color);">
                    <h4 style="color: #991b1b; margin-bottom: 8px; font-size: 14px;">💊 Drug Allergies</h4>
                    <ul style="list-style: none; color: #991b1b; font-size: 12px; margin: 0; padding: 0;">
                        <li style="padding: 4px 0;">• Penicillin (Severe)</li>
                        <li style="padding: 4px 0;">• Sulfa drugs (Moderate)</li>
                        <li style="padding: 4px 0;">• Aspirin (Mild)</li>
                    </ul>
                </div>
                <div style="padding: 15px; background: #fef3c7; border-radius: 8px; border-left: 4px solid var(--warning-color);">
                    <h4 style="color: #92400e; margin-bottom: 8px; font-size: 14px;">🍽️ Food Allergies</h4>
                    <ul style="list-style: none; color: #92400e; font-size: 12px; margin: 0; padding: 0;">
                        <li style="padding: 4px 0;">• Shellfish (Severe)</li>
                        <li style="padding: 4px 0;">• Peanuts (Moderate)</li>
                    </ul>
                </div>
                <div style="padding: 15px; background: #cffafe; border-radius: 8px; border-left: 4px solid var(--info-color);">
                    <h4 style="color: #0e7490; margin-bottom: 8px; font-size: 14px;">🚨 Other Alerts</h4>
                    <ul style="list-style: none; color: #0e7490; font-size: 12px; margin: 0; padding: 0;">
                        <li style="padding: 4px 0;">• Fall Risk (High)</li>
                        <li style="padding: 4px 0;">• DVT Prophylaxis</li>
                        <li style="padding: 4px 0;">• Isolation</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="card fade-in">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">⚡</span>
                    <h3 class="card-title">Quick Actions</h3>
                </div>
            </div>
            <div class="grid grid-4">
                <a href="vitals.php" class="btn btn-primary" style="text-align: center; padding: 12px; font-size: 13px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">💓 Vitals</a>
                <a href="nursing_notes.php" class="btn btn-secondary" style="text-align: center; padding: 12px; font-size: 13px; background: linear-gradient(135deg, #10b981, #059669); border: none;">📝 Note</a>
                <a href="medication.php" class="btn btn-outline" style="text-align: center; padding: 12px; font-size: 13px;">💊 Meds</a>
                <a href="care_plan.php" class="btn btn-outline" style="text-align: center; padding: 12px; font-size: 13px;">📋 Plan</a>
            </div>
        </div>
    </div>
</body>
</html>
