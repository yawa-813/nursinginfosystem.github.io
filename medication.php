<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medication - Nursing Information System</title>
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
                <li><a href="medication.php" class="nav-link active">💊 Medication</a></li>
                <li><a href="reports.php" class="nav-link">📈 Reports</a></li>
                <li><a href="settings.php" class="nav-link">⚙️ Settings</a></li>
                <li><a href="login.php" class="nav-link">🚪 Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="dashboard-header">
        <div class="container">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 15px;">
                <div>
                    <h1 style="font-size: 28px; margin-bottom: 5px; font-weight: 800;">Medication 💊</h1>
                    <p style="opacity: 0.95; font-size: 14px;">Patient: John Doe (P-001) • Room: 302</p>
                </div>
                <div style="display: flex; gap: 10px;">
                    <div style="background: rgba(255,255,255,0.15); padding: 10px 20px; border-radius: 8px; backdrop-filter: blur(10px); text-align: center;">
                        <div style="font-size: 18px; font-weight: 700;">5</div>
                        <div style="font-size: 10px; opacity: 0.9;">Meds Due</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Barcode Scanner -->
        <div class="barcode-scan fade-in" style="margin-bottom: 20px; padding: 20px;">
            <div style="font-size: 36px; margin-bottom: 8px;">📷</div>
            <h3 style="margin-bottom: 5px; color: var(--primary-color); font-size: 16px;">Scan Barcode</h3>
            <p style="color: var(--gray-500); font-size: 12px;">Click to scan or enter ID manually</p>
        </div>

        <!-- Current Medications -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">💊</span>
                    <h3 class="card-title">Current Meds</h3>
                </div>
                <button class="btn btn-primary" style="padding: 8px 16px; font-size: 12px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">+ Add</button>
            </div>
            
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding: 8px; font-size: 11px;">Medication</th>
                            <th style="padding: 8px; font-size: 11px;">Dose</th>
                            <th style="padding: 8px; font-size: 11px;">Route</th>
                            <th style="padding: 8px; font-size: 11px;">Freq</th>
                            <th style="padding: 8px; font-size: 11px;">Next</th>
                            <th style="padding: 8px; font-size: 11px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 8px; font-size: 12px;">Aspirin</td>
                            <td style="padding: 8px; font-size: 11px;">81 mg</td>
                            <td style="padding: 8px; font-size: 11px;">PO</td>
                            <td style="padding: 8px; font-size: 11px;">Daily</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">Scheduled</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-primary" style="padding: 4px 8px; font-size: 10px;">Admin</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; font-size: 12px;">Metoprolol</td>
                            <td style="padding: 8px; font-size: 11px;">25 mg</td>
                            <td style="padding: 8px; font-size: 11px;">PO</td>
                            <td style="padding: 8px; font-size: 11px;">BID</td>
                            <td style="padding: 8px;"><span class="badge badge-warning" style="font-size: 10px;">Due Soon</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-primary" style="padding: 4px 8px; font-size: 10px;">Admin</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; font-size: 12px;">Lisinopril</td>
                            <td style="padding: 8px; font-size: 11px;">10 mg</td>
                            <td style="padding: 8px; font-size: 11px;">PO</td>
                            <td style="padding: 8px; font-size: 11px;">Daily</td>
                            <td style="padding: 8px;"><span class="badge badge-danger" style="font-size: 10px;">Overdue</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-danger" style="padding: 4px 8px; font-size: 10px;">Admin</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Medication Administration Record -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">📋</span>
                    <h3 class="card-title">MAR</h3>
                </div>
                <div class="search-box" style="margin-bottom: 0; width: 200px;">
                    <input type="text" style="padding: 8px 12px 8px 35px; font-size: 12px;" placeholder="Search...">
                </div>
            </div>
            
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding: 8px; font-size: 11px;">Time</th>
                            <th style="padding: 8px; font-size: 11px;">Med</th>
                            <th style="padding: 8px; font-size: 11px;">Dose</th>
                            <th style="padding: 8px; font-size: 11px;">Nurse</th>
                            <th style="padding: 8px; font-size: 11px;">Verified</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 8px; font-size: 11px;">08:00 AM</td>
                            <td style="padding: 8px; font-size: 11px;">Aspirin</td>
                            <td style="padding: 8px; font-size: 11px;">81 mg</td>
                            <td style="padding: 8px; font-size: 11px;">Sarah</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">✓</span></td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; font-size: 11px;">08:00 AM</td>
                            <td style="padding: 8px; font-size: 11px;">Metoprolol</td>
                            <td style="padding: 8px; font-size: 11px;">25 mg</td>
                            <td style="padding: 8px; font-size: 11px;">Sarah</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">✓</span></td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; font-size: 11px;">06:00 AM</td>
                            <td style="padding: 8px; font-size: 11px;">Lisinopril</td>
                            <td style="padding: 8px; font-size: 11px;">10 mg</td>
                            <td style="padding: 8px; font-size: 11px;">Mike</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">✓</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Add Medication Form -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">➕</span>
                    <h3 class="card-title">Add Medication</h3>
                </div>
            </div>
            <form>
                <div class="grid grid-3">
                    <div class="form-group">
                        <label class="form-label" style="font-size: 12px;">Name</label>
                        <input type="text" class="form-control" style="padding: 8px 12px; font-size: 13px;" placeholder="Med name">
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-size: 12px;">Dosage</label>
                        <input type="text" class="form-control" style="padding: 8px 12px; font-size: 13px;" placeholder="25 mg">
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-size: 12px;">Route</label>
                        <select class="form-control" style="padding: 8px 12px; font-size: 13px;">
                            <option value="">Select...</option>
                            <option value="PO">PO</option>
                            <option value="IV">IV</option>
                            <option value="IM">IM</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">Instructions</label>
                    <textarea class="form-control" style="padding: 8px 12px; font-size: 13px; min-height: 50px;" placeholder="Special instructions..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px; font-size: 13px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">💊 Add</button>
            </form>
        </div>

        <!-- Allergy Alerts -->
        <div class="alert alert-danger fade-in" style="padding: 12px; font-size: 12px;">
            <span>⚠️</span>
            <div>
                <strong>Allergy Alert:</strong> Penicillin (Severe), Sulfa (Moderate), Aspirin (Mild)
            </div>
        </div>

        <!-- Drug Interactions -->
        <div class="card fade-in">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">⚠️</span>
                    <h3 class="card-title">Drug Interactions</h3>
                </div>
            </div>
            <div style="padding: 15px; background: #fef3c7; border-radius: 8px; border-left: 4px solid var(--warning-color);">
                <h4 style="color: #92400e; margin-bottom: 8px; font-size: 13px;">Moderate Interaction</h4>
                <p style="color: #92400e; margin-bottom: 5px; font-size: 11px;">
                    <strong>Aspirin + Lisinopril:</strong> Renal impairment risk
                </p>
                <p style="color: #92400e; font-size: 11px;">
                    <strong>Metoprolol + Lasix:</strong> Hypotensive effects
                </p>
            </div>
        </div>
    </div>
</body>
</html>
