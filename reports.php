<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports & Analytics - Nursing Information System</title>
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
                <li><a href="reports.php" class="nav-link active">📈 Reports</a></li>
                <li><a href="settings.php" class="nav-link">⚙️ Settings</a></li>
                <li><a href="login.php" class="nav-link">🚪 Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="dashboard-header">
        <div class="container">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 15px;">
                <div>
                    <h1 style="font-size: 28px; margin-bottom: 5px; font-weight: 800;">Reports 📈</h1>
                    <p style="opacity: 0.95; font-size: 14px;">Unit: ICU • Jan 1-24, 2024</p>
                </div>
                <div style="display: flex; gap: 10px;">
                    <div style="background: rgba(255,255,255,0.15); padding: 10px 20px; border-radius: 8px; backdrop-filter: blur(10px); text-align: center;">
                        <div style="font-size: 18px; font-weight: 700;">156</div>
                        <div style="font-size: 10px; opacity: 0.9;">Patient Days</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Report Filters -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">🔍</span>
                    <h3 class="card-title">Filters</h3>
                </div>
            </div>
            <div class="grid grid-4">
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">Type</label>
                    <select class="form-control" style="padding: 8px 12px; font-size: 13px;">
                        <option value="">Select...</option>
                        <option value="shift">Shift Summary</option>
                        <option value="workload">Workload</option>
                        <option value="outcomes">Outcomes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">Start</label>
                    <input type="date" class="form-control" style="padding: 8px 12px; font-size: 13px;">
                </div>
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">End</label>
                    <input type="date" class="form-control" style="padding: 8px 12px; font-size: 13px;">
                </div>
                <div class="form-group">
                    <label class="form-label" style="font-size: 12px;">Unit</label>
                    <select class="form-control" style="padding: 8px 12px; font-size: 13px;">
                        <option value="">Select...</option>
                        <option value="icu">ICU</option>
                        <option value="med surg">Med-Surg</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-primary" style="padding: 10px 20px; font-size: 13px; background: linear-gradient(135deg, #667eea, #764ba2); border: none;">📊 Generate</button>
        </div>

        <!-- Key Metrics -->
        <div class="grid grid-4" style="margin-bottom: 20px;">
            <div class="stat-card fade-in">
                <div class="stat-value" style="font-size: 28px;">156</div>
                <div class="stat-label" style="font-size: 11px;">Patient Days</div>
            </div>
            <div class="stat-card fade-in">
                <div class="stat-value" style="font-size: 28px;">1,248</div>
                <div class="stat-label" style="font-size: 11px;">Meds Given</div>
            </div>
            <div class="stat-card fade-in">
                <div class="stat-value" style="font-size: 28px;">892</div>
                <div class="stat-label" style="font-size: 11px;">Vitals</div>
            </div>
            <div class="stat-card fade-in">
                <div class="stat-value" style="font-size: 28px;">342</div>
                <div class="stat-label" style="font-size: 11px;">Notes</div>
            </div>
        </div>

        <!-- Shift Summary Report -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">📋</span>
                    <h3 class="card-title">Shift Summary</h3>
                </div>
                <button class="btn btn-outline" style="padding: 8px 16px; font-size: 12px;">🖨️ Print</button>
            </div>
            
            <div class="grid grid-2">
                <div>
                    <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">Day Shift (7AM-7PM)</h4>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="padding: 8px; font-size: 11px;">Metric</th>
                                    <th style="padding: 8px; font-size: 11px;">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Patients</td>
                                    <td style="padding: 8px; font-size: 11px;">12</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Admissions</td>
                                    <td style="padding: 8px; font-size: 11px;">3</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Discharges</td>
                                    <td style="padding: 8px; font-size: 11px;">2</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Meds Given</td>
                                    <td style="padding: 8px; font-size: 11px;">48</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Vitals</td>
                                    <td style="padding: 8px; font-size: 11px;">36</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div>
                    <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">Night Shift (7PM-7AM)</h4>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="padding: 8px; font-size: 11px;">Metric</th>
                                    <th style="padding: 8px; font-size: 11px;">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Patients</td>
                                    <td style="padding: 8px; font-size: 11px;">10</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Admissions</td>
                                    <td style="padding: 8px; font-size: 11px;">1</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Discharges</td>
                                    <td style="padding: 8px; font-size: 11px;">0</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Meds Given</td>
                                    <td style="padding: 8px; font-size: 11px;">32</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-size: 11px;">Vitals</td>
                                    <td style="padding: 8px; font-size: 11px;">24</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Workload Report -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">⚖️</span>
                    <h3 class="card-title">Workload</h3>
                </div>
                <button class="btn btn-outline" style="padding: 8px 16px; font-size: 12px;">🖨️ Print</button>
            </div>
            
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding: 8px; font-size: 11px;">Nurse</th>
                            <th style="padding: 8px; font-size: 11px;">Shift</th>
                            <th style="padding: 8px; font-size: 11px;">Pts</th>
                            <th style="padding: 8px; font-size: 11px;">Acuity</th>
                            <th style="padding: 8px; font-size: 11px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 8px; font-size: 11px;">Sarah J.</td>
                            <td style="padding: 8px; font-size: 11px;">Day</td>
                            <td style="padding: 8px; font-size: 11px;">4</td>
                            <td style="padding: 8px; font-size: 11px;">3.5</td>
                            <td style="padding: 8px;"><span class="badge badge-warning" style="font-size: 10px;">Heavy</span></td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; font-size: 11px;">Mike W.</td>
                            <td style="padding: 8px; font-size: 11px;">Day</td>
                            <td style="padding: 8px; font-size: 11px;">4</td>
                            <td style="padding: 8px; font-size: 11px;">3.0</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">Normal</span></td>
                        </tr>
                        <tr>
                            <td style="padding: 8px; font-size: 11px;">Emily C.</td>
                            <td style="padding: 8px; font-size: 11px;">Day</td>
                            <td style="padding: 8px; font-size: 11px;">4</td>
                            <td style="padding: 8px; font-size: 11px;">2.5</td>
                            <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">Normal</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Patient Outcomes -->
        <div class="card fade-in" style="margin-bottom: 20px;">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">📈</span>
                    <h3 class="card-title">Outcomes</h3>
                </div>
                <button class="btn btn-outline" style="padding: 8px 16px; font-size: 12px;">🖨️ Print</button>
            </div>
            
            <div class="grid grid-3">
                <div class="card fade-in" style="margin-bottom: 0;">
                    <div style="padding: 15px; text-align: center;">
                        <div style="font-size: 32px; font-weight: 700; color: var(--success-color); margin-bottom: 5px;">94%</div>
                        <div style="color: var(--gray-600); margin-bottom: 8px; font-size: 11px;">Satisfaction</div>
                        <div class="progress-bar" style="height: 8px;">
                            <div class="progress-fill" style="width: 94%; height: 8px; background: linear-gradient(90deg, var(--success-color), #4ade80);"></div>
                        </div>
                    </div>
                </div>
                
                <div class="card fade-in" style="margin-bottom: 0;">
                    <div style="padding: 15px; text-align: center;">
                        <div style="font-size: 32px; font-weight: 700; color: var(--primary-color); margin-bottom: 5px;">98%</div>
                        <div style="color: var(--gray-600); margin-bottom: 8px; font-size: 11px;">Meds Compliance</div>
                        <div class="progress-bar" style="height: 8px;">
                            <div class="progress-fill" style="width: 98%; height: 8px;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="card fade-in" style="margin-bottom: 0;">
                    <div style="padding: 15px; text-align: center;">
                        <div style="font-size: 32px; font-weight: 700; color: var(--warning-color); margin-bottom: 5px;">2.3%</div>
                        <div style="color: var(--gray-600); margin-bottom: 8px; font-size: 11px;">Readmission</div>
                        <div class="progress-bar" style="height: 8px;">
                            <div class="progress-fill" style="width: 2.3%; height: 8px; background: linear-gradient(90deg, var(--warning-color), #fb923c);"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="margin-top: 15px;">
                <h4 style="margin-bottom: 10px; color: var(--primary-color); font-size: 13px;">Metrics by Category</h4>
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="padding: 8px; font-size: 11px;">Category</th>
                                <th style="padding: 8px; font-size: 11px;">Target</th>
                                <th style="padding: 8px; font-size: 11px;">Actual</th>
                                <th style="padding: 8px; font-size: 11px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 8px; font-size: 11px;">Fall Rate</td>
                                <td style="padding: 8px; font-size: 11px;">&lt; 2%</td>
                                <td style="padding: 8px; font-size: 11px;">1.5%</td>
                                <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">On Target</span></td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; font-size: 11px;">HCAHPS</td>
                                <td style="padding: 8px; font-size: 11px;">&gt; 90%</td>
                                <td style="padding: 8px; font-size: 11px;">94%</td>
                                <td style="padding: 8px;"><span class="badge badge-success" style="font-size: 10px;">Exceeded</span></td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; font-size: 11px;">Pain Mgmt</td>
                                <td style="padding: 8px; font-size: 11px;">&gt; 95%</td>
                                <td style="padding: 8px; font-size: 11px;">92%</td>
                                <td style="padding: 8px;"><span class="badge badge-warning" style="font-size: 10px;">Below</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Export Options -->
        <div class="card fade-in">
            <div class="card-header">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span style="font-size: 20px;">📤</span>
                    <h3 class="card-title">Export</h3>
                </div>
            </div>
            <div class="grid grid-4">
                <button class="btn btn-primary" style="text-align: center; padding: 10px; font-size: 12px;">📄 PDF</button>
                <button class="btn btn-secondary" style="text-align: center; padding: 10px; font-size: 12px;">📊 Excel</button>
                <button class="btn btn-outline" style="text-align: center; padding: 10px; font-size: 12px;">📋 CSV</button>
                <button class="btn btn-outline" style="text-align: center; padding: 10px; font-size: 12px;">📧 Email</button>
            </div>
        </div>
    </div>
</body>
</html>
