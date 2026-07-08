<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Plan - Nursing Information System</title>
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
                <li><a href="care_plan.php" class="nav-link active">📋 Care Plan</a></li>
                <li><a href="medication.php" class="nav-link">💊 Medication</a></li>
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
                    <h1 style="font-size: 28px; margin-bottom: 5px; font-weight: 800;">Care Plan 📋</h1>
                    <p style="opacity: 0.95; font-size: 14px;">Patient: John Doe (P-001) • Room: 302</p>
                </div>
                <div style="display: flex; gap: 10px;">
                    <div style="background: rgba(255,255,255,0.15); padding: 10px 20px; border-radius: 8px; backdrop-filter: blur(10px); text-align: center;">
                        <div style="font-size: 18px; font-weight: 700;">3</div>
                        <div style="font-size: 10px; opacity: 0.9;">Diagnoses</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- NANDA Diagnosis Section -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">🎯</span>
                    <h3 class="card-title">NANDA Diagnoses</h3>
                </div>
                <button class="btn btn-primary" style="padding: 8px 16px; font-size: 12px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">+ Add</button>
            </div>
            
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding: 8px; font-size: 11px;">Priority</th>
                            <th style="padding: 8px; font-size: 11px;">Diagnosis</th>
                            <th style="padding: 8px; font-size: 11px;">Factors</th>
                            <th style="padding: 8px; font-size: 11px;">Evidence</th>
                            <th style="padding: 8px; font-size: 11px;">Status</th>
                            <th style="padding: 8px; font-size: 11px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 8px;"><span class="badge badge-danger" style="font-size: 10px;">High</span></td>
                            <td style="padding: 8px; font-size: 12px;">Decreased Cardiac Output</td>
                            <td style="padding: 8px; font-size: 11px;">MI, HTN, Age</td>
                            <td style="padding: 8px; font-size: 11px;">BP 165/95, HR 92</td>
                            <td style="padding: 8px;"><span class="badge badge-warning" style="font-size: 10px;">Active</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-primary" style="padding: 4px 8px; font-size: 10px;">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 8px;"><span class="badge badge-warning" style="font-size: 10px;">Medium</span></td>
                            <td style="padding: 8px; font-size: 12px;">Acute Pain</td>
                            <td style="padding: 8px; font-size: 11px;">Myocardial ischemia</td>
                            <td style="padding: 8px; font-size: 11px;">Pain 3/10</td>
                            <td style="padding: 8px;"><span class="badge badge-warning" style="font-size: 10px;">Active</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-primary" style="padding: 4px 8px; font-size: 10px;">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 8px;"><span class="badge badge-info" style="font-size: 10px;">Low</span></td>
                            <td style="padding: 8px; font-size: 12px;">Risk for Falls</td>
                            <td style="padding: 8px; font-size: 11px;">Age, meds</td>
                            <td style="padding: 8px; font-size: 11px;">History of falls</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">Monitoring</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-primary" style="padding: 4px 8px; font-size: 10px;">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- NIC Interventions Section -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">💉</span>
                    <h3 class="card-title">NIC Interventions</h3>
                </div>
                <button class="btn btn-primary" style="padding: 8px 16px; font-size: 12px; background: linear-gradient(135deg, #10b981, #059669); border: none;">+ Add</button>
            </div>
            
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding: 8px; font-size: 11px;">Intervention</th>
                            <th style="padding: 8px; font-size: 11px;">Diagnosis</th>
                            <th style="padding: 8px; font-size: 11px;">Activities</th>
                            <th style="padding: 8px; font-size: 11px;">Freq</th>
                            <th style="padding: 8px; font-size: 11px;">Status</th>
                            <th style="padding: 8px; font-size: 11px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 8px; font-size: 12px;">Cardiac Care</td>
                            <td style="padding: 8px; font-size: 11px;">Decreased CO</td>
                            <td style="padding: 8px; font-size: 11px;">Monitor vitals, meds</td>
                            <td style="padding: 8px; font-size: 11px;">Continuous</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">In Progress</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-primary" style="padding: 4px 8px; font-size: 10px;">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; font-size: 12px;">Pain Management</td>
                            <td style="padding: 8px; font-size: 11px;">Acute Pain</td>
                            <td style="padding: 8px; font-size: 11px;">Assess, analgesics</td>
                            <td style="padding: 8px; font-size: 11px;">PRN/Q4H</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">In Progress</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-primary" style="padding: 4px 8px; font-size: 10px;">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; font-size: 12px;">Fall Prevention</td>
                            <td style="padding: 8px; font-size: 11px;">Risk for Falls</td>
                            <td style="padding: 8px; font-size: 11px;">Bed alarms, socks</td>
                            <td style="padding: 8px; font-size: 11px;">Continuous</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">In Progress</span></td>
                            <td style="padding: 8px;">
                                <button class="btn btn-primary" style="padding: 4px 8px; font-size: 10px;">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- NOC Outcomes Section -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">📊</span>
                    <h3 class="card-title">NOC Outcomes</h3>
                </div>
                <button class="btn btn-primary" style="padding: 8px 16px; font-size: 12px; background: linear-gradient(135deg, #f59e0b, #d97706); border: none;">+ Add</button>
            </div>
            
            <div class="grid grid-2">
                <div class="card fade-in" style="margin-bottom: 0;">
                    <div style="padding: 15px;">
                        <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">Cardiac Output</h4>
                        <div style="margin-bottom: 10px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 3px; font-size: 11px;">
                                <span>Current: 3/5</span>
                            </div>
                            <div class="progress-bar" style="height: 8px;">
                                <div class="progress-fill" style="width: 60%; height: 8px;"></div>
                            </div>
                        </div>
                        <p style="font-size: 11px; color: var(--gray-600); margin: 0;">BP normal, HR 60-100</p>
                    </div>
                </div>
                
                <div class="card fade-in" style="margin-bottom: 0;">
                    <div style="padding: 15px;">
                        <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">Pain Level</h4>
                        <div style="margin-bottom: 10px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 3px; font-size: 11px;">
                                <span>Current: 4/5</span>
                            </div>
                            <div class="progress-bar" style="height: 8px;">
                                <div class="progress-fill" style="width: 80%; height: 8px;"></div>
                            </div>
                        </div>
                        <p style="font-size: 11px; color: var(--gray-600); margin: 0;">Pain 0-2/10</p>
                    </div>
                </div>
                
                <div class="card fade-in" style="margin-bottom: 0;">
                    <div style="padding: 15px;">
                        <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">Fall Prevention</h4>
                        <div style="margin-bottom: 10px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 3px; font-size: 11px;">
                                <span>Current: 4/5</span>
                            </div>
                            <div class="progress-bar" style="height: 8px;">
                                <div class="progress-fill" style="width: 80%; height: 8px;"></div>
                            </div>
                        </div>
                        <p style="font-size: 11px; color: var(--gray-600); margin: 0;">No falls, uses call light</p>
                    </div>
                </div>
                
                <div class="card fade-in" style="margin-bottom: 0;">
                    <div style="padding: 15px;">
                        <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">Fluid Balance</h4>
                        <div style="margin-bottom: 10px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 3px; font-size: 11px;">
                                <span>Current: 3/5</span>
                            </div>
                            <div class="progress-bar" style="height: 8px;">
                                <div class="progress-fill" style="width: 60%; height: 8px;"></div>
                            </div>
                        </div>
                        <p style="font-size: 11px; color: var(--gray-600); margin: 0;">I&O balanced, no edema</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add New Care Plan Entry -->
        <div class="card fade-in">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">➕</span>
                    <h3 class="card-title">Add Entry</h3>
                </div>
            </div>
            <form>
                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label" style="font-size: 12px;">NANDA Diagnosis</label>
                        <select class="form-control" style="padding: 8px 12px; font-size: 13px;">
                            <option value="">Select...</option>
                            <option value="cardiac">Decreased Cardiac Output</option>
                            <option value="pain">Acute Pain</option>
                            <option value="falls">Risk for Falls</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-size: 12px;">Priority</label>
                        <select class="form-control" style="padding: 8px 12px; font-size: 13px;">
                            <option value="">Select...</option>
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">Related Factors</label>
                    <textarea class="form-control" style="padding: 8px 12px; font-size: 13px; min-height: 50px;" placeholder="Enter factors..."></textarea>
                </div>
                
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">NIC Intervention</label>
                    <select class="form-control" style="padding: 8px 12px; font-size: 13px;">
                        <option value="">Select...</option>
                        <option value="cardiac">Cardiac Care</option>
                        <option value="pain">Pain Management</option>
                        <option value="falls">Fall Prevention</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary" style="padding: 10px 20px; font-size: 13px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">💾 Add Entry</button>
            </form>
        </div>
    </div>
</body>
</html>
