<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TexanLawnCare | The Definitive Texas Lawn Care & Grass Guide</title>
  <meta name="description" content="Expert guide for thriving lawns across Texas. Master St. Augustine, Bermuda, Zoysia, and Buffalo grass through summer droughts, clay soil, and water restrictions.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* CSS Variables & Theme */
    :root {
      --primary: #15803d;
      --primary-dark: #14532d;
      --primary-light: #22c55e;
      --primary-soft: #f0fdf4;
      --accent: #ca8a04;
      --accent-dark: #a16207;
      --slate-900: #0f172a;
      --slate-800: #1e293b;
      --slate-700: #334155;
      --slate-600: #475569;
      --slate-500: #64748b;
      --slate-300: #cbd5e1;
      --slate-200: #e2e8f0;
      --slate-100: #f1f5f9;
      --slate-50: #f8fafc;
      --white: #ffffff;
      --radius-sm: 8px;
      --radius-md: 12px;
      --radius-lg: 18px;
      --radius-xl: 24px;
      --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
      --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      --font-display: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
      --font-body: 'Inter', system-ui, -apple-system, sans-serif;
      --transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Base Reset */
    *, *::before, *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
      color-scheme: light;
    }

    body {
      font-family: var(--font-body);
      background-color: var(--slate-50);
      color: var(--slate-800);
      line-height: 1.6;
      font-size: 16px;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--font-display);
      color: var(--slate-900);
      line-height: 1.25;
      font-weight: 700;
    }

    a {
      color: inherit;
      text-decoration: none;
      transition: var(--transition);
    }

    button {
      font-family: inherit;
      cursor: pointer;
      border: none;
      outline: none;
      background: none;
      transition: var(--transition);
    }

    img, svg {
      display: block;
      max-width: 100%;
    }

    /* Container Utility */
    .container {
      width: 100%;
      max-width: 1240px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* Badges & Tags */
    .badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.813rem;
      font-weight: 600;
      padding: 6px 14px;
      border-radius: 9999px;
      letter-spacing: 0.02em;
      text-transform: uppercase;
    }

    .badge-texas {
      background: #eff6ff;
      color: #1d4ed8;
      border: 1px solid #bfdbfe;
    }

    .badge-green {
      background: #ecfdf5;
      color: #15803d;
      border: 1px solid #bbf7d0;
    }

    .badge-gold {
      background: #fefce8;
      color: #a16207;
      border: 1px solid #fef08a;
    }

    /* Buttons */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 12px 24px;
      font-size: 0.95rem;
      font-weight: 600;
      border-radius: var(--radius-md);
      transition: var(--transition);
      cursor: pointer;
      text-decoration: none;
    }

    .btn-primary {
      background-color: var(--primary);
      color: var(--white);
      box-shadow: 0 4px 12px rgba(21, 128, 61, 0.25);
    }

    .btn-primary:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(21, 128, 61, 0.35);
    }

    .btn-secondary {
      background-color: var(--white);
      color: var(--slate-800);
      border: 1px solid var(--slate-200);
    }

    .btn-secondary:hover {
      background-color: var(--slate-100);
      border-color: var(--slate-300);
      transform: translateY(-2px);
    }

    .btn-outline-white {
      background: rgba(255, 255, 255, 0.12);
      color: var(--white);
      border: 1px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(8px);
    }

    .btn-outline-white:hover {
      background: rgba(255, 255, 255, 0.25);
      border-color: var(--white);
      transform: translateY(-2px);
    }

    /* Top Bar */
    .top-bar {
      background-color: var(--slate-900);
      color: var(--slate-300);
      font-size: 0.813rem;
      padding: 8px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .top-bar-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 8px;
    }

    .top-bar-notice {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .pulse-dot {
      width: 8px;
      height: 8px;
      background-color: #22c55e;
      border-radius: 50%;
      box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7); }
      70% { box-shadow: 0 0 0 8px rgba(34, 197, 94, 0); }
      100% { box-shadow: 0 0 0 0 rgba(34, 197, 94, 0); }
    }

    /* Navigation */
    .site-header {
      position: sticky;
      top: 0;
      z-index: 100;
      background: rgba(255, 255, 255, 0.94);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--slate-200);
      transition: var(--transition);
    }

    .nav-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 74px;
    }

    .brand-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      font-family: var(--font-display);
      font-size: 1.35rem;
      font-weight: 800;
      color: var(--slate-900);
    }

    .brand-logo span {
      color: var(--primary);
    }

    .logo-icon {
      width: 36px;
      height: 36px;
      background: linear-gradient(135deg, #15803d, #14532d);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--white);
      box-shadow: 0 2px 8px rgba(21, 128, 61, 0.3);
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 28px;
      list-style: none;
    }

    .nav-links a {
      font-size: 0.938rem;
      font-weight: 500;
      color: var(--slate-700);
    }

    .nav-links a:hover {
      color: var(--primary);
    }

    .mobile-menu-btn {
      display: none;
      padding: 8px;
      border-radius: var(--radius-sm);
      color: var(--slate-800);
    }

    /* Hero Section */
    .hero {
      position: relative;
      background: linear-gradient(165deg, #092c19 0%, #0e3f24 45%, #0f172a 100%);
      color: var(--white);
      padding: 80px 0 100px;
      overflow: hidden;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: -100px;
      right: -100px;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(34, 197, 94, 0.15) 0%, rgba(34, 197, 94, 0) 70%);
      pointer-events: none;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.2fr 0.8fr;
      gap: 48px;
      align-items: center;
      position: relative;
      z-index: 2;
    }

    .hero-content h1 {
      font-size: 3.25rem;
      letter-spacing: -0.02em;
      color: var(--white);
      margin-bottom: 20px;
      line-height: 1.15;
    }

    .hero-content h1 span.texas-highlight {
      color: #4ade80;
      display: inline-block;
      position: relative;
    }

    .hero-content p {
      font-size: 1.15rem;
      color: #cbd5e1;
      margin-bottom: 32px;
      max-width: 580px;
      line-height: 1.7;
    }

    .hero-actions {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }

    .hero-stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.15);
      padding-top: 30px;
    }

    .stat-item h4 {
      font-size: 1.75rem;
      color: #4ade80;
      margin-bottom: 4px;
    }

    .stat-item p {
      font-size: 0.825rem;
      color: #94a3b8;
      margin-bottom: 0;
    }

    /* Hero Interactive Card */
    .hero-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: var(--radius-xl);
      padding: 32px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
    }

    .hero-card-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
      padding-bottom: 16px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .hero-card-title {
      font-size: 1.15rem;
      color: var(--white);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .status-pill {
      font-size: 0.75rem;
      background: rgba(74, 222, 128, 0.2);
      color: #4ade80;
      padding: 4px 10px;
      border-radius: 9999px;
      border: 1px solid rgba(74, 222, 128, 0.4);
    }

    .quick-zone-list {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .zone-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: rgba(255, 255, 255, 0.04);
      padding: 12px 16px;
      border-radius: var(--radius-md);
      border: 1px solid rgba(255, 255, 255, 0.06);
      transition: var(--transition);
    }

    .zone-row:hover {
      background: rgba(255, 255, 255, 0.08);
      border-color: rgba(74, 222, 128, 0.3);
    }

    .zone-name {
      font-weight: 600;
      font-size: 0.95rem;
      color: var(--white);
    }

    .zone-grass {
      font-size: 0.813rem;
      color: #94a3b8;
    }

    .zone-action-tag {
      font-size: 0.75rem;
      font-weight: 600;
      color: #fde047;
      background: rgba(250, 204, 21, 0.15);
      padding: 3px 8px;
      border-radius: 6px;
    }

    /* Section Headers */
    .section-header {
      text-align: center;
      max-width: 720px;
      margin: 0 auto 56px;
    }

    .section-header .badge {
      margin-bottom: 14px;
    }

    .section-header h2 {
      font-size: 2.35rem;
      letter-spacing: -0.02em;
      margin-bottom: 16px;
    }

    .section-header p {
      color: var(--slate-600);
      font-size: 1.05rem;
    }

    /* Texas Grass Directory */
    .grass-section {
      padding: 96px 0;
      background-color: var(--white);
    }

    .grass-filter-bar {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-bottom: 40px;
      flex-wrap: wrap;
    }

    .filter-btn {
      padding: 8px 20px;
      border-radius: 9999px;
      background-color: var(--slate-100);
      color: var(--slate-700);
      font-weight: 600;
      font-size: 0.875rem;
      transition: var(--transition);
      cursor: pointer;
    }

    .filter-btn.active, .filter-btn:hover {
      background-color: var(--primary);
      color: var(--white);
    }

    .grass-cards-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 28px;
    }

    .grass-card {
      background: var(--white);
      border: 1px solid var(--slate-200);
      border-radius: var(--radius-lg);
      padding: 28px;
      transition: var(--transition);
      display: flex;
      flex-direction: column;
      position: relative;
      box-shadow: var(--shadow-sm);
    }

    .grass-card:hover {
      border-color: var(--primary-light);
      box-shadow: var(--shadow-xl);
      transform: translateY(-4px);
    }

    .grass-card-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 16px;
    }

    .grass-card-title h3 {
      font-size: 1.4rem;
      margin-bottom: 4px;
    }

    .grass-card-title .botanical {
      font-size: 0.825rem;
      color: var(--slate-500);
      font-style: italic;
    }

    .grass-popular-tag {
      background: #f0fdf4;
      color: #166534;
      border: 1px solid #bbf7d0;
      font-size: 0.75rem;
      font-weight: 700;
      padding: 4px 10px;
      border-radius: 9999px;
    }

    .grass-desc {
      color: var(--slate-600);
      font-size: 0.925rem;
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .grass-specs {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 12px;
      padding: 16px;
      background-color: var(--slate-50);
      border-radius: var(--radius-md);
      margin-bottom: 20px;
    }

    .spec-item {
      display: flex;
      flex-direction: column;
    }

    .spec-label {
      font-size: 0.75rem;
      text-transform: uppercase;
      font-weight: 600;
      color: var(--slate-500);
      letter-spacing: 0.03em;
    }

    .spec-value {
      font-weight: 700;
      font-size: 0.95rem;
      color: var(--slate-800);
    }

    .grass-pros-cons {
      margin-top: auto;
      font-size: 0.85rem;
      border-top: 1px solid var(--slate-100);
      padding-top: 16px;
    }

    .pros-list {
      list-style: none;
      margin-bottom: 8px;
    }

    .pros-list li {
      display: flex;
      align-items: center;
      gap: 8px;
      color: var(--slate-700);
      margin-bottom: 4px;
    }

    .pros-list li svg {
      color: var(--primary);
      flex-shrink: 0;
    }

    /* Seasonal Care Calendar */
    .calendar-section {
      padding: 96px 0;
      background-color: var(--slate-50);
    }

    .season-tabs {
      display: flex;
      justify-content: center;
      gap: 12px;
      margin-bottom: 36px;
      flex-wrap: wrap;
    }

    .season-tab-btn {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 12px 28px;
      border-radius: var(--radius-md);
      background-color: var(--white);
      color: var(--slate-700);
      font-weight: 600;
      border: 1px solid var(--slate-200);
      box-shadow: var(--shadow-sm);
      cursor: pointer;
      transition: var(--transition);
    }

    .season-tab-btn.active {
      background-color: var(--slate-900);
      color: var(--white);
      border-color: var(--slate-900);
    }

    .season-tab-btn:hover:not(.active) {
      background-color: var(--slate-100);
      border-color: var(--slate-300);
    }

    .season-content-card {
      background: var(--white);
      border-radius: var(--radius-xl);
      border: 1px solid var(--slate-200);
      padding: 40px;
      box-shadow: var(--shadow-lg);
    }

    .season-content-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
      margin-bottom: 32px;
      padding-bottom: 24px;
      border-bottom: 1px solid var(--slate-100);
    }

    .season-title-group h3 {
      font-size: 1.75rem;
      color: var(--slate-900);
    }

    .season-title-group p {
      color: var(--slate-600);
      font-size: 0.95rem;
    }

    .season-timeline-pill {
      background-color: #ecfdf5;
      color: #15803d;
      font-weight: 700;
      padding: 8px 16px;
      border-radius: 9999px;
      font-size: 0.85rem;
    }

    .season-tasks-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 24px;
    }

    .task-card {
      background-color: var(--slate-50);
      border-radius: var(--radius-md);
      padding: 20px;
      border-left: 4px solid var(--primary);
      transition: var(--transition);
    }

    .task-card:hover {
      background-color: #f8fafc;
      transform: translateY(-2px);
    }

    .task-step {
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      color: var(--primary);
      margin-bottom: 4px;
    }

    .task-card h4 {
      font-size: 1.1rem;
      margin-bottom: 8px;
    }

    .task-card p {
      font-size: 0.875rem;
      color: var(--slate-600);
      line-height: 1.55;
    }

    /* Watering Guide & Calculator */
    .watering-section {
      padding: 96px 0;
      background-color: var(--white);
    }

    .watering-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px;
      align-items: start;
    }

    .watering-info-card {
      background: var(--slate-50);
      border: 1px solid var(--slate-200);
      border-radius: var(--radius-xl);
      padding: 36px;
    }

    .rule-box {
      background: #eff6ff;
      border: 1px solid #bfdbfe;
      border-radius: var(--radius-md);
      padding: 20px;
      margin: 24px 0;
    }

    .rule-box h4 {
      color: #1e40af;
      font-size: 1.05rem;
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 8px;
    }

    .rule-box p {
      color: #1e3a8a;
      font-size: 0.9rem;
      line-height: 1.5;
    }

    .watering-tips-list {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .watering-tip {
      display: flex;
      gap: 14px;
    }

    .tip-icon {
      width: 32px;
      height: 32px;
      background: #e0f2fe;
      color: #0369a1;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .tip-text h5 {
      font-size: 0.95rem;
      margin-bottom: 4px;
    }

    .tip-text p {
      font-size: 0.85rem;
      color: var(--slate-600);
    }

    /* Calculator Box */
    .calculator-card {
      background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
      border: 2px solid #bbf7d0;
      border-radius: var(--radius-xl);
      padding: 36px;
      box-shadow: var(--shadow-xl);
    }

    .calc-title {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 8px;
    }

    .calc-subtitle {
      font-size: 0.875rem;
      color: var(--slate-600);
      margin-bottom: 24px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: 600;
      font-size: 0.875rem;
      color: var(--slate-800);
      margin-bottom: 8px;
    }

    .form-control {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid var(--slate-300);
      border-radius: var(--radius-md);
      font-family: inherit;
      font-size: 0.95rem;
      background-color: var(--white);
      color: var(--slate-900);
      transition: var(--transition);
    }

    .form-control:focus {
      border-color: var(--primary);
      outline: none;
      box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.2);
    }

    .calc-result-box {
      background: #f0fdf4;
      border: 1px solid #86efac;
      border-radius: var(--radius-md);
      padding: 24px;
      text-align: center;
      margin-top: 24px;
    }

    .calc-result-label {
      font-size: 0.813rem;
      text-transform: uppercase;
      font-weight: 700;
      color: #166534;
      letter-spacing: 0.05em;
      margin-bottom: 4px;
    }

    .calc-result-number {
      font-size: 2.25rem;
      font-weight: 800;
      color: #15803d;
      font-family: var(--font-display);
    }

    .calc-breakdown {
      margin-top: 12px;
      font-size: 0.85rem;
      color: #166534;
    }

    /* Texas Soils & Pests Doctor */
    .doctor-section {
      padding: 96px 0;
      background-color: var(--slate-50);
    }

    .doctor-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 28px;
    }

    .doctor-card {
      background: var(--white);
      border: 1px solid var(--slate-200);
      border-radius: var(--radius-lg);
      padding: 28px;
      box-shadow: var(--shadow-sm);
    }

    .doctor-card-icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .icon-chinch { background: #fee2e2; color: #dc2626; }
    .icon-clay { background: #fef3c7; color: #d97706; }
    .icon-fungus { background: #e0e7ff; color: #4f46e5; }

    .doctor-card h3 {
      font-size: 1.25rem;
      margin-bottom: 8px;
    }

    .doctor-card p {
      font-size: 0.9rem;
      color: var(--slate-600);
      margin-bottom: 16px;
      line-height: 1.55;
    }

    .rx-box {
      background-color: var(--slate-50);
      border-radius: var(--radius-md);
      padding: 12px 16px;
      border-left: 3px solid var(--primary);
    }

    .rx-title {
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      color: var(--primary-dark);
      margin-bottom: 2px;
    }

    .rx-text {
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--slate-800);
    }

    /* FAQ Section */
    .faq-section {
      padding: 96px 0;
      background-color: var(--white);
    }

    .faq-accordion {
      max-width: 800px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .faq-item {
      border: 1px solid var(--slate-200);
      border-radius: var(--radius-md);
      overflow: hidden;
      transition: var(--transition);
    }

    .faq-item:hover {
      border-color: var(--slate-300);
    }

    .faq-question {
      width: 100%;
      text-align: left;
      padding: 20px 24px;
      font-size: 1.05rem;
      font-weight: 600;
      color: var(--slate-900);
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: var(--white);
      cursor: pointer;
    }

    .faq-toggle-icon {
      transition: transform 0.3s ease;
      color: var(--slate-500);
      flex-shrink: 0;
    }

    .faq-item.active .faq-toggle-icon {
      transform: rotate(180deg);
      color: var(--primary);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.35s ease, padding 0.35s ease;
      padding: 0 24px;
      background: var(--slate-50);
      color: var(--slate-600);
      font-size: 0.95rem;
      line-height: 1.65;
    }

    .faq-item.active .faq-answer {
      max-height: 400px;
      padding: 0 24px 20px;
    }

    /* CTA Banner */
    .cta-banner {
      background: linear-gradient(135deg, #15803d 0%, #166534 100%);
      color: var(--white);
      padding: 72px 0;
      border-radius: var(--radius-xl);
      text-align: center;
      margin: 40px auto 80px;
      max-width: 1200px;
      box-shadow: 0 20px 40px -15px rgba(21, 128, 61, 0.4);
    }

    .cta-banner h2 {
      color: var(--white);
      font-size: 2.25rem;
      margin-bottom: 16px;
    }

    .cta-banner p {
      font-size: 1.1rem;
      color: #dcfce7;
      max-width: 600px;
      margin: 0 auto 32px;
    }

    .cta-form {
      display: flex;
      justify-content: center;
      gap: 12px;
      max-width: 500px;
      margin: 0 auto;
      flex-wrap: wrap;
    }

    .cta-input {
      flex: 1;
      min-width: 260px;
      padding: 14px 20px;
      border-radius: var(--radius-md);
      border: 1px solid rgba(255, 255, 255, 0.4);
      background: rgba(255, 255, 255, 0.95);
      font-family: inherit;
      font-size: 0.95rem;
    }

    .cta-input:focus {
      outline: none;
      background: var(--white);
    }

    /* Footer */
    .site-footer {
      background-color: var(--slate-900);
      color: var(--slate-200);
      padding: 72px 0 32px;
      border-top: 1px solid rgba(255, 255, 255, 0.12);
      font-size: 0.9rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 48px;
      margin-bottom: 56px;
    }

    .footer-brand h3 {
      color: var(--white);
      font-size: 1.35rem;
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .footer-brand p {
      color: var(--slate-300);
      max-width: 340px;
      line-height: 1.65;
      margin-bottom: 16px;
    }

    .footer-serving {
      font-size: 0.85rem;
      color: var(--slate-300);
      line-height: 1.5;
    }

    .footer-col h4 {
      color: var(--white);
      font-size: 0.95rem;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      font-weight: 700;
    }

    .footer-col ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .footer-col a, .footer-col button {
      color: var(--slate-200);
      font-size: 0.9rem;
      text-align: left;
      transition: var(--transition);
    }

    .footer-col a:hover, .footer-col button:hover {
      color: #4ade80;
      transform: translateX(3px);
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.15);
      padding-top: 28px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 16px;
      color: var(--slate-300);
    }

    .footer-legal-links {
      display: flex;
      gap: 20px;
      align-items: center;
    }

    .footer-legal-btn {
      color: var(--slate-300);
      font-size: 0.85rem;
      text-decoration: underline;
      cursor: pointer;
      transition: var(--transition);
    }

    .footer-legal-btn:hover {
      color: #4ade80;
    }

    /* Native HTML5 Dialog (Modals) */
    dialog {
      border: none;
      border-radius: var(--radius-xl);
      padding: 0;
      background: var(--white);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
      max-width: 760px;
      width: 90%;
      margin: auto;
      max-height: 85vh;
      overflow: hidden;
      outline: none;
    }

    dialog::backdrop {
      background: rgba(15, 23, 42, 0.7);
      backdrop-filter: blur(4px);
    }

    .modal-container {
      display: flex;
      flex-direction: column;
      max-height: 85vh;
    }

    .modal-header {
      padding: 24px 32px;
      border-bottom: 1px solid var(--slate-200);
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: var(--slate-50);
    }

    .modal-header h3 {
      font-size: 1.4rem;
      color: var(--slate-900);
    }

    .modal-close-btn {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--white);
      border: 1px solid var(--slate-200);
      color: var(--slate-600);
      cursor: pointer;
      font-size: 1.25rem;
      line-height: 1;
    }

    .modal-close-btn:hover {
      background: var(--slate-100);
      color: var(--slate-900);
    }

    .modal-body {
      padding: 32px;
      overflow-y: auto;
      font-size: 0.938rem;
      color: var(--slate-700);
      line-height: 1.7;
    }

    .modal-body h4 {
      font-size: 1.15rem;
      margin: 20px 0 8px;
      color: var(--slate-900);
    }

    .modal-body p {
      margin-bottom: 16px;
    }

    .modal-body ul {
      margin: 0 0 16px 20px;
    }

    .modal-footer {
      padding: 16px 32px;
      border-top: 1px solid var(--slate-200);
      background: var(--slate-50);
      display: flex;
      justify-content: flex-end;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .hero-grid {
        grid-template-columns: 1fr;
      }
      .hero-content h1 {
        font-size: 2.6rem;
      }
      .watering-grid {
        grid-template-columns: 1fr;
      }
      .footer-grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      .mobile-menu-btn {
        display: block;
      }
      .hero-stats {
        grid-template-columns: 1fr;
        gap: 16px;
      }
      .footer-grid {
        grid-template-columns: 1fr;
      }
      .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
      .modal-body {
        padding: 20px;
      }
      .modal-header {
        padding: 16px 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Top Bar: Regional Notice -->
  <div class="top-bar">
    <div class="container top-bar-inner">
      <div class="top-bar-notice">
        <span class="pulse-dot"></span>
        <span><strong>Texas Seasonal Advisory:</strong> Prepare lawn for upcoming spring pre-emergent application when 2-inch soil temperature reaches 55°F.</span>
      </div>
      <div>
        <span>Updated for Texas Hardiness Zones 7a - 10a (USDA)</span>
      </div>
    </div>
  </div>

  <!-- Header & Navigation -->
  <header class="site-header">
    <div class="container nav-container">
      <a href="#" class="brand-logo" aria-label="TexanLawnCare Home">
        <div class="logo-icon">
          <!-- Lone Star + Grass Icon -->
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
          </svg>
        </div>
        Texan<span>LawnCare</span>
      </a>

      <nav>
        <ul class="nav-links">
          <li><a href="#grass-guide">Grass Types</a></li>
          <li><a href="#calendar">Seasonal Schedule</a></li>
          <li><a href="#watering">Watering Guide</a></li>
          <li><a href="#calculator">Lawn Calculator</a></li>
          <li><a href="#doctor">Texas Soil & Pests</a></li>
          <li><a href="#faq">FAQ</a></li>
          <li><a href="#newsletter" class="btn btn-primary" style="padding: 8px 18px; font-size: 0.85rem;">Get Cheat Sheet</a></li>
        </ul>
      </nav>

      <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Open mobile menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="4" y1="12" x2="20" y2="12"></line>
          <line x1="4" y1="6" x2="20" y2="6"></line>
          <line x1="4" y1="18" x2="20" y2="18"></line>
        </svg>
      </button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <span class="badge badge-texas" style="margin-bottom: 16px;">The Lone Star Turfgrass Authority</span>
        <h1>Master Your Texas Lawn, <span class="texas-highlight">Rain or Drought.</span></h1>
        <p>
          Texas lawns endure triple-digit summer heats, punishing winter freezes, alkaline blackland clay, and strict municipal water limits. TexanLawnCare gives you the science-backed playbook to keep your turf lush, green, and resilient.
        </p>

        <div class="hero-actions">
          <a href="#grass-guide" class="btn btn-primary">
            Explore Grass Guide
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="#calculator" class="btn btn-outline-white">
            Watering Calculator
          </a>
        </div>

        <div class="hero-stats">
          <div class="stat-item">
            <h4>4 Types</h4>
            <p>Proven warm-season grasses for Texas micro-climates</p>
          </div>
          <div class="stat-item">
            <h4>1 Inch/Wk</h4>
            <p>Gold-standard watering rule for drought conservation</p>
          </div>
          <div class="stat-item">
            <h4>5 Regions</h4>
            <p>Tailored schedules from Panhandle to Gulf Coast</p>
          </div>
        </div>
      </div>

      <!-- Quick Regional Status Card -->
      <div class="hero-card">
        <div class="hero-card-header">
          <div class="hero-card-title">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#4ade80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            Texas Regional Grass Focus
          </div>
          <span class="status-pill">Active Guidance</span>
        </div>

        <div class="quick-zone-list">
          <div class="zone-row">
            <div>
              <div class="zone-name">North Texas (DFW / Denton)</div>
              <div class="zone-grass">Bermuda, Zoysia, St. Augustine (Raleigh)</div>
            </div>
            <span class="zone-action-tag">Clay Soil Care</span>
          </div>

          <div class="zone-row">
            <div>
              <div class="zone-name">Central Texas (Austin / San Antonio)</div>
              <div class="zone-grass">Zoysia, Buffalo Grass, St. Augustine</div>
            </div>
            <span class="zone-action-tag">Water Restrictions</span>
          </div>

          <div class="zone-row">
            <div>
              <div class="zone-name">Gulf Coast (Houston / Galveston)</div>
              <div class="zone-grass">St. Augustine (Floratam), Bermuda</div>
            </div>
            <span class="zone-action-tag">Fungus Watch</span>
          </div>

          <div class="zone-row">
            <div>
              <div class="zone-name">West Texas & Panhandle (Lubbock / Amarillo)</div>
              <div class="zone-grass">Buffalo Grass, Blue Grama, Bermuda</div>
            </div>
            <span class="zone-action-tag">Freeze & Drought</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Grass Variety Guide Section -->
  <section id="grass-guide" class="grass-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-green">Turfgrass Comparison</span>
        <h2>The 4 Best Grasses for Texas Lawns</h2>
        <p>Choosing the correct warm-season grass is 80% of lawn success in Texas. Match your sunlight, soil depth, and irrigation capabilities.</p>
      </div>

      <!-- Filter buttons -->
      <div class="grass-filter-bar">
        <button class="filter-btn active" data-filter="all">All Grasses</button>
        <button class="filter-btn" data-filter="shade">Best for Shade</button>
        <button class="filter-btn" data-filter="drought">Extreme Drought Hardiness</button>
        <button class="filter-btn" data-filter="traffic">High Foot Traffic</button>
      </div>

      <div class="grass-cards-grid" id="grassGrid">
        <!-- St. Augustine -->
        <div class="grass-card" data-category="shade">
          <div class="grass-card-header">
            <div class="grass-card-title">
              <h3>St. Augustine</h3>
              <div class="botanical">Stenotaphrum secundatum</div>
            </div>
            <span class="grass-popular-tag">Most Common</span>
          </div>
          <p class="grass-desc">
            The traditional Texas favorite. Famous for broad, vibrant green blades that form a dense, plush carpet. Top choice for yards with mature shade trees.
          </p>
          <div class="grass-specs">
            <div class="spec-item">
              <span class="spec-label">Sun Required</span>
              <span class="spec-value">4 - 6+ Hours</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Mow Height</span>
              <span class="spec-value">2.5" - 3.5"</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Drought Tolerance</span>
              <span class="spec-value">Moderate</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Recommended Cultivar</span>
              <span class="spec-value">Palmetto, Raleigh</span>
            </div>
          </div>
          <div class="grass-pros-cons">
            <ul class="pros-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Excellent shade tolerance compared to Bermuda
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Quick establishment from sod
              </li>
            </ul>
          </div>
        </div>

        <!-- Bermuda -->
        <div class="grass-card" data-category="drought traffic">
          <div class="grass-card-header">
            <div class="grass-card-title">
              <h3>Bermuda Grass</h3>
              <div class="botanical">Cynodon dactylon</div>
            </div>
            <span class="grass-popular-tag">Sun King</span>
          </div>
          <p class="grass-desc">
            Tough as Texas boot leather. Thrives in scorching 100°F+ full Texas sun, repairs itself rapidly via aggressive rhizomes, and handles kids and dogs with ease.
          </p>
          <div class="grass-specs">
            <div class="spec-item">
              <span class="spec-label">Sun Required</span>
              <span class="spec-value">7+ Hours (Full Sun)</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Mow Height</span>
              <span class="spec-value">1.0" - 2.0"</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Drought Tolerance</span>
              <span class="spec-value">Superior</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Recommended Cultivar</span>
              <span class="spec-value">Tifway 419, Celebration</span>
            </div>
          </div>
          <div class="grass-pros-cons">
            <ul class="pros-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Unmatched recuperative power & foot traffic resistance
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Goes dormant in extreme drought, rebounds rapidly with rain
              </li>
            </ul>
          </div>
        </div>

        <!-- Zoysia -->
        <div class="grass-card" data-category="shade drought traffic">
          <div class="grass-card-header">
            <div class="grass-card-title">
              <h3>Zoysia Grass</h3>
              <div class="botanical">Zoysia japonica / matrella</div>
            </div>
            <span class="grass-popular-tag">Luxury Choice</span>
          </div>
          <p class="grass-desc">
            The premium Texas turfgrass. Combines the barefoot softness of fine turf with the heat resilience of Bermuda and the moderate shade tolerance of St. Augustine.
          </p>
          <div class="grass-specs">
            <div class="spec-item">
              <span class="spec-label">Sun Required</span>
              <span class="spec-value">4 - 5+ Hours</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Mow Height</span>
              <span class="spec-value">1.5" - 2.5"</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Drought Tolerance</span>
              <span class="spec-value">Very High</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Recommended Cultivar</span>
              <span class="spec-value">Palisades, Zeon</span>
            </div>
          </div>
          <div class="grass-pros-cons">
            <ul class="pros-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Dense growth naturally crowds out common Texas weeds
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Superior cold hardiness during sudden Texas winter freezes
              </li>
            </ul>
          </div>
        </div>

        <!-- Buffalo Grass -->
        <div class="grass-card" data-category="drought">
          <div class="grass-card-header">
            <div class="grass-card-title">
              <h3>Buffalo Grass</h3>
              <div class="botanical">Bouteloua dactyloides</div>
            </div>
            <span class="grass-popular-tag">Texas Native</span>
          </div>
          <p class="grass-desc">
            The original native Texas prairie grass. Requires up to 75% less water and almost zero synthetic fertilizer. Ideal for acreage, eco-conscious lawns, and Hill Country landscapes.
          </p>
          <div class="grass-specs">
            <div class="spec-item">
              <span class="spec-label">Sun Required</span>
              <span class="spec-value">6 - 8+ Hours</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Mow Height</span>
              <span class="spec-value">3.0" - 4.0" (or Unmowed)</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Drought Tolerance</span>
              <span class="spec-value">Maximum (Native)</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Recommended Cultivar</span>
              <span class="spec-value">609, Prairie, Sundancer</span>
            </div>
          </div>
          <div class="grass-pros-cons">
            <ul class="pros-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Survives on natural Texas rainfall once established
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Naturally immune to chinch bug infestations
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Season Texas Lawn Calendar -->
  <section id="calendar" class="calendar-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-texas">Texas A&M AgriLife Aligned</span>
        <h2>4-Season Texas Lawn Care Calendar</h2>
        <p>Timing in Texas is determined by soil temperatures, not just the Gregorian calendar. Here is your seasonal action plan.</p>
      </div>

      <!-- Season Tabs -->
      <div class="season-tabs">
        <button class="season-tab-btn active" data-season="spring">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v8M12 18v4M4.93 4.93l5.66 5.66M13.41 13.41l5.66 5.66M2 12h8M18 12h4M4.93 19.07l5.66-5.66M13.41 10.59l5.66-5.66"/></svg>
          Spring (Mar - May)
        </button>
        <button class="season-tab-btn" data-season="summer">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
          Summer (Jun - Aug)
        </button>
        <button class="season-tab-btn" data-season="fall">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
          Fall (Sep - Nov)
        </button>
        <button class="season-tab-btn" data-season="winter">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="2" y1="12" x2="22" y2="12"/><line x1="12" y1="2" x2="12" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg>
          Winter (Dec - Feb)
        </button>
      </div>

      <!-- Dynamic Seasonal Content Container -->
      <div class="season-content-card" id="seasonDisplay">
        <!-- Content will be injected by JavaScript -->
      </div>
    </div>
  </section>

  <!-- Texas Watering Mastery & Calculator -->
  <section id="watering" class="watering-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-texas">Water Conservation</span>
        <h2>Texas Watering Science: Cycle & Soak</h2>
        <p>Texas black clay soil cannot absorb water as fast as typical spray heads put it out. Master the cycle-and-soak technique to stop wasteful runoff.</p>
      </div>

      <div class="watering-grid">
        <!-- Watering Principles -->
        <div class="watering-info-card">
          <h3>The "1-Inch Per Week" Rule</h3>
          <p style="color: var(--slate-600); margin-top: 8px;">
            In Texas, deep and infrequent watering trains root systems to grow 6 to 8 inches deep into clay soil, keeping lawns green even during Stage 1 or Stage 2 water restrictions.
          </p>

          <div class="rule-box">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
              The "Cycle-and-Soak" Method Explained
            </h4>
            <p>
              Instead of running a sprinkler station for 20 continuous minutes (which causes water to run off hard clay after minute 6), split the run time into <strong>three 6-minute cycles spaced 45 minutes apart</strong>. The soil absorbs each cycle like a sponge!
            </p>
          </div>

          <ul class="watering-tips-list">
            <li class="watering-tip">
              <div class="tip-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div class="tip-text">
                <h5>Water Between 4:00 AM and 8:00 AM</h5>
                <p>Avoids up to 40% evaporative loss from Texas wind and blazing midday heat, while preventing fungal leaf wetness that occurs from evening watering.</p>
              </div>
            </li>

            <li class="watering-tip">
              <div class="tip-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
              </div>
              <div class="tip-text">
                <h5>The Tuna Can Catch-Cup Audit</h5>
                <p>Place 5 empty tuna cans around your lawn. Run your sprinklers for 15 minutes. Measure the average depth with a ruler to find your exact sprinkler precipitation rate.</p>
              </div>
            </li>
          </ul>
        </div>

        <!-- Interactive Calculator -->
        <div class="calculator-card" id="calculator">
          <div class="calc-title">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#15803d" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="16" y1="14" x2="16" y2="18"/><path d="M16 10h.01"/><path d="M12 10h.01"/><path d="M8 10h.01"/><path d="M12 14h.01"/><path d="M8 14h.01"/><path d="M12 18h.01"/><path d="M8 18h.01"/></svg>
            <h3>Texas Sprinkler Runtime Calculator</h3>
          </div>
          <p class="calc-subtitle">Calculate optimal sprinkler zone minutes and cycle-and-soak splits based on your Texas setup.</p>

          <form id="waterCalcForm">
            <div class="form-group">
              <label for="grassTypeSelect">Your Grass Type</label>
              <select id="grassTypeSelect" class="form-control">
                <option value="st-augustine">St. Augustine (Higher water demand)</option>
                <option value="bermuda">Bermuda (Moderate water demand)</option>
                <option value="zoysia">Zoysia (Moderate-low water demand)</option>
                <option value="buffalo">Buffalo Grass (Very low water demand)</option>
              </select>
            </div>

            <div class="form-group">
              <label for="nozzleSelect">Sprinkler Head Type</label>
              <select id="nozzleSelect" class="form-control">
                <option value="spray">Fixed Pop-Up Spray Heads (Fast output: ~1.5"/hr)</option>
                <option value="rotor">Rotary / Rotor Heads (Slow output: ~0.6"/hr)</option>
                <option value="mp-rotator">High-Efficiency Multi-Stream Rotators (~0.4"/hr)</option>
              </select>
            </div>

            <div class="form-group">
              <label for="seasonSelect">Current Texas Season</label>
              <select id="seasonSelect" class="form-control">
                <option value="summer">Peak Summer (1.00" - 1.25" / week target)</option>
                <option value="spring">Spring / Fall (0.50" - 0.75" / week target)</option>
                <option value="winter">Winter Dormancy (0.25" / 2-3 weeks target)</option>
              </select>
            </div>

            <div class="calc-result-box">
              <div class="calc-result-label">Recommended Run Time per Watering Day</div>
              <div class="calc-result-number" id="calcMinutes">18 Mins</div>
              <div class="calc-breakdown" id="calcCycles">Run 3 cycles of 6 minutes, spaced 45 minutes apart.</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Texas Soil & Pest Doctor -->
  <section id="doctor" class="doctor-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-gold">Texas Lawn Doctor</span>
        <h2>Diagnosing Texas Soil & Common Pests</h2>
        <p>Before you spend hundreds on fertilizer, diagnose whether your lawn is struggling with compacted blackland clay, root-eating grubs, or summer chinch bugs.</p>
      </div>

      <div class="doctor-grid">
        <!-- Chinch Bugs -->
        <div class="doctor-card">
          <div class="doctor-card-icon icon-chinch">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 2 1.88 1.88"/><path d="M14.12 3.88 16 2"/><path d="M9 7.13v-1a3.003 3.003 0 1 1 6 0v1"/><path d="M12 20c-3.3 0-6-2.7-6-6v-3a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v3c0 3.3-2.7 6-6 6"/><path d="M12 20v-9"/><path d="M6.53 9C4.6 8.8 3 7.1 3 5"/><path d="M6 13H2"/><path d="M3 21c0-2.1 1.7-3.9 3.8-4"/><path d="M20.97 5c0 2.1-1.6 3.8-3.5 4"/><path d="M22 13h-4"/><path d="M17.2 17c2.1.1 3.8 1.9 3.8 4"/></svg>
          </div>
          <h3>Chinch Bug Infestation</h3>
          <p>
            <strong>Symptoms:</strong> Patches of turf look dry and straw-like during July/August, typically starting along hot concrete sidewalks and driveways. Does not respond to watering.
          </p>
          <div class="rx-box">
            <div class="rx-title">Texas Rx Solution</div>
            <div class="rx-text">Test with floatation tin can method; treat early with Bifenthrin or neem oil for organic control. Keep turf hydrated along curbs.</div>
          </div>
        </div>

        <!-- Texas Blackland Clay -->
        <div class="doctor-card">
          <div class="doctor-card-icon icon-clay">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m2 22 1-1h18l1 1"/><path d="M13 6v12"/><path d="M9 10v8"/><path d="M17 14v4"/><path d="M5 14v4"/></svg>
          </div>
          <h3>Compacted Blackland Clay</h3>
          <p>
            <strong>Symptoms:</strong> Water pools on top or runs off quickly into the street. Soil cracks during drought and feels rock-hard. Root depth is shallow (&lt; 2 inches).
          </p>
          <div class="rx-box">
            <div class="rx-title">Texas Rx Solution</div>
            <div class="rx-text">Perform core aeration in late spring, then topdress with 1/4" screened compost. Apply humic acid and liquid aerators annually.</div>
          </div>
        </div>

        <!-- Large Patch / TARR Fungus -->
        <div class="doctor-card">
          <div class="doctor-card-icon icon-fungus">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12a4 4 0 0 1 8 0"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Take-All Root Rot & Large Patch</h3>
          <p>
            <strong>Symptoms:</strong> Circular yellowing rings in autumn or early spring when soil is damp and nights cool below 70°F. Grass stolons pull up effortlessly with rotted roots.
          </p>
          <div class="rx-box">
            <div class="rx-title">Texas Rx Solution</div>
            <div class="rx-text">Stop night irrigation; topdress with peat moss to lower surface pH, apply Azoxystrobin fungicide preventatively in late September.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Frequently Asked Questions -->
  <section id="faq" class="faq-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-texas">Got Questions?</span>
        <h2>Texas Lawn Care FAQs</h2>
        <p>Direct, actionable answers to the most common questions from Texas homeowners.</p>
      </div>

      <div class="faq-accordion">
        <div class="faq-item">
          <button class="faq-question">
            <span>When should I apply pre-emergent herbicide in Texas?</span>
            <svg class="faq-toggle-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>
              In Texas, pre-emergent should be applied twice a year based on soil temperature rather than fixed calendar dates:
              <br><br>
              <strong>1. Spring Application (Crabgrass, Sandburs):</strong> Apply when the 2-inch soil temperature reaches 55°F for 3 consecutive days (usually mid-February in South Texas, early March in DFW & Central Texas).
              <br><br>
              <strong>2. Fall Application (Poa Annua / Annual Bluegrass, Henbit):</strong> Apply when soil temperatures cool down to 70°F (typically late September to mid-October).
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>How do I protect my lawn during a Texas summer drought restriction?</span>
            <svg class="faq-toggle-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>
              When your municipality enforces 1-day-per-week watering:
              <br>• <strong>Raise your mower blade by 0.5 to 1 inch:</strong> Taller grass shades the soil surface, cooling root systems and reducing soil moisture evaporation by up to 30%.
              <br>• <strong>Skip high-nitrogen synthetic fertilizers:</strong> Fast top-growth demands more water and burns grass under extreme 100°F heat.
              <br>• <strong>Embrace dormancy:</strong> Warm-season Bermuda and Zoysia can survive weeks of drought dormancy without dying; they will green up when rains return.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Can I overseed my Texas lawn with Ryegrass for winter green?</span>
            <svg class="faq-toggle-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>
              You can overseed <strong>Bermuda</strong> lawns with perennial or annual ryegrass in October for a bright emerald winter lawn. However, we <strong>strongly advise against</strong> overseeding St. Augustine or Zoysia, as rye vigorously competes for water, nitrogen, and sunlight in spring when your permanent warm-season grass is trying to wake up from dormancy.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>What should I do if my lawn suffers a hard winter freeze like Uri?</span>
            <svg class="faq-toggle-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>
              If a severe Arctic blast is forecast:
              <br>1. <strong>Water your lawn 24-48 hours before the freeze:</strong> Moist soil retains heat significantly better than dry soil, insulating the root zone and crowns.
              <br>2. <strong>Wait until mid-spring to assess damage:</strong> Do not scalp or rip out turf prematurely. St. Augustine and Zoysia root systems often survive and emerge in late April once soil warms above 65°F.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter / Free Guide Download CTA -->
  <section id="newsletter" class="container">
    <div class="cta-banner">
      <h2>Get the Texas Lawn Care Cheat Sheet</h2>
      <p>A printable 1-page seasonal schedule with soil temperature benchmarks, mowing heights, and fertilizer N-P-K ratios for Texas turfgrass.</p>
      <form class="cta-form" id="leadForm">
        <input type="email" class="cta-input" placeholder="Enter your email address..." required aria-label="Your email">
        <button type="submit" class="btn btn-secondary">Download Free PDF</button>
      </form>
      <div id="formSuccess" style="display: none; margin-top: 16px; color: #bbf7d0; font-weight: 600;">
        Thank you! Your Texas Lawn Care Guide is on its way to your inbox.
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <h3>
            <div class="logo-icon" style="width: 28px; height: 28px;">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
            </div>
            Texan<span>LawnCare</span>
          </h3>
          <p>
            Dedicated to helping homeowners cultivate hardy, water-efficient, and beautiful lawns tailored to Texas climates, soils, and municipal regulations.
          </p>
          <p class="footer-serving">
            Proudly serving Austin, Dallas-Fort Worth, Houston, San Antonio, Lubbock, and surrounding Texas communities.
          </p>
        </div>

        <div class="footer-col">
          <h4>Grass Types</h4>
          <ul>
            <li><a href="#grass-guide">St. Augustine</a></li>
            <li><a href="#grass-guide">Bermuda Grass</a></li>
            <li><a href="#grass-guide">Zoysia Grass</a></li>
            <li><a href="#grass-guide">Buffalo Grass</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Resources</h4>
          <ul>
            <li><a href="#calendar">Seasonal Calendar</a></li>
            <li><a href="#watering">Cycle & Soak Guide</a></li>
            <li><a href="#calculator">Watering Calculator</a></li>
            <li><a href="#doctor">Pest Diagnostic</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Legal & Info</h4>
          <ul>
            <li><button class="footer-legal-btn" id="openPrivacyBtn">Privacy Policy</button></li>
            <li><button class="footer-legal-btn" id="openTermsBtn">Terms of Service</button></li>
            <li><a href="#faq">Frequently Asked</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          © 2026 TexanLawnCare. All rights reserved. Built for Texas homeowners and turfgrass stewards.
        </div>
        <div class="footer-legal-links">
          <button class="footer-legal-btn" id="openPrivacyBottomBtn">Privacy Policy</button>
          <span>•</span>
          <button class="footer-legal-btn" id="openTermsBottomBtn">Terms of Service</button>
        </div>
      </div>
    </div>
  </footer>

  <!-- Native HTML5 Dialog: Privacy Policy Modal -->
  <dialog id="privacyDialog" aria-labelledby="privacyTitle">
    <div class="modal-container">
      <div class="modal-header">
        <h3 id="privacyTitle">Privacy Policy — TexanLawnCare</h3>
        <button class="modal-close-btn" id="closePrivacyBtn" aria-label="Close Privacy Policy">&times;</button>
      </div>
      <div class="modal-body">
        <p><strong>Effective Date:</strong> January 1, 2026 | <strong>Last Updated:</strong> October 2026</p>
        
        <h4>1. Introduction & Texas Regional Scope</h4>
        <p>
          Welcome to TexanLawnCare ("we", "our", or "us"). We value your privacy and are committed to safeguarding personal information collected through our website, digital lawn calculators, newsletter forms, and educational resources. This Privacy Policy is structured in compliance with applicable United States privacy standards, including the <strong>Texas Data Privacy and Security Act (TDPSA)</strong>.
        </p>

        <h4>2. Information We Collect</h4>
        <p>We collect information in the following ways:</p>
        <ul>
          <li><strong>Directly Provided Information:</strong> When you subscribe to our seasonal lawn care guides, submit a question, or request a customized watering plan, you may provide your name, email address, postal zip code (to identify your Texas climate zone), and grass type preference.</li>
          <li><strong>Automated Usage Data:</strong> We may collect non-identifiable usage statistics including browser type, referring pages, device operating system, general geographic location (Texas metropolitan areas), and time spent reviewing seasonal guides.</li>
          <li><strong>Interactive Tools Input:</strong> Inputs into our Texas Sprinkler Runtime Calculator (e.g., grass variety, nozzle type) are processed client-side within your browser and are not sold or linked to personal profiles.</li>
        </ul>

        <h4>3. How We Use Your Information</h4>
        <p>Your information is used strictly to:</p>
        <ul>
          <li>Deliver requested Texas seasonal care alerts (e.g., pre-emergent timing reminders, drought freeze warnings).</li>
          <li>Refine and optimize our educational materials for Texas growing zones.</li>
          <li>Respond to homeowner inquiries, customer feedback, and technical support requests.</li>
          <li>Ensure website stability, detect security events, and protect against fraudulent activity.</li>
        </ul>

        <h4>4. Information Sharing & Third Parties</h4>
        <p>
          <strong>We do not sell, rent, or trade your personal information.</strong> We do not monetize your data with third-party data brokers. We may share information only with trusted service providers who assist us in operating our website, sending email newsletters, or hosting infrastructure, subject to strict confidentiality agreements.
        </p>

        <h4>5. Texas Data Privacy Rights (TDPSA)</h4>
        <p>
          Under Texas law, Texas residents possess specific rights regarding their personal data, including the right to confirm whether we process their data, the right to access and correct inaccuracies, the right to request deletion of personal information, and the right to opt-out of marketing communications at any time via the unsubscribe link in our emails.
        </p>

        <h4>6. Security & Contact Information</h4>
        <p>
          We employ industry-standard technical and organizational security controls to protect your data. If you have any questions or wish to exercise your data privacy rights, please contact us at: <code>privacy@texanlawncare.com</code>.
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="confirmPrivacyBtn">I Understand</button>
      </div>
    </div>
  </dialog>

  <!-- Native HTML5 Dialog: Terms of Service Modal -->
  <dialog id="termsDialog" aria-labelledby="termsTitle">
    <div class="modal-container">
      <div class="modal-header">
        <h3 id="termsTitle">Terms of Service — TexanLawnCare</h3>
        <button class="modal-close-btn" id="closeTermsBtn" aria-label="Close Terms of Service">&times;</button>
      </div>
      <div class="modal-body">
        <p><strong>Effective Date:</strong> January 1, 2026 | <strong>Last Updated:</strong> October 2026</p>

        <h4>1. Acceptance of Terms</h4>
        <p>
          By accessing or using the TexanLawnCare website, calculators, guides, or instructional materials, you agree to be bound by these Terms of Service. If you disagree with any part of these terms, please do not use our services.
        </p>

        <h4>2. Educational & Agronomic Disclaimer</h4>
        <p>
          <strong>Educational Purposes Only:</strong> The turfgrass recommendations, mowing heights, fertilization schedules, cycle-and-soak watering advice, and pest diagnostic guides published on TexanLawnCare are provided for general educational guidance. While our advice is aligned with Texas agronomic principles and Texas A&M AgriLife extension research, individual lawn outcomes vary based on micro-climates, soil chemistry, shade patterns, and unforeseen weather events.
        </p>
        <p>
          <strong>Municipal Regulations:</strong> Homeowners are solely responsible for ensuring compliance with their local city or municipal water utility drought restrictions (Stage 1, 2, or 3 schedules) and HOA bylaws. TexanLawnCare is not responsible for municipal citations or fines incurred from sprinkler usage.
        </p>

        <h4>3. Chemical Application Safety</h4>
        <p>
          When applying pre-emergents, post-emergent herbicides, fertilizers, insecticides, or fungicides mentioned on this site, always read and strictly follow the official EPA product manufacturer label instructions. Always protect Texas waterways and Edwards Aquifer drainage zones from chemical runoff.
        </p>

        <h4>4. Intellectual Property</h4>
        <p>
          All content, illustrations, custom calculators, design assets, and written guides on TexanLawnCare are the exclusive property of TexanLawnCare and protected by United States copyright laws. You may download and print our seasonal guides for personal, non-commercial home use only.
        </p>

        <h4>5. Limitation of Liability</h4>
        <p>
          To the fullest extent permitted by Texas law, TexanLawnCare and its contributors shall not be liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use the recommendations, calculators, or materials on this website.
        </p>

        <h4>6. Governing Law & Jurisdiction</h4>
        <p>
          These Terms of Service shall be governed by and construed in accordance with the laws of the State of Texas, United States, without regard to conflict of law principles. Any legal actions or proceedings arising hereunder shall be instituted in the state or federal courts located in Travis County, Texas.
        </p>

        <h4>7. Inquiries</h4>
        <p>
          For questions regarding these Terms of Service, contact: <code>legal@texanlawncare.com</code>.
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="confirmTermsBtn">Accept & Close</button>
      </div>
    </div>
  </dialog>

  <!-- JavaScript for Interactive Features -->
  <script>
    // --- Seasonal Calendar Data ---
    const seasonalData = {
      spring: {
        title: "Spring: Awakening & Weed Defense",
        subtitle: "March through May — Focus on root vigor, scalping winter thatch, and pre-emergent protection.",
        timeline: "Active Window: Mar 1 - May 31",
        tasks: [
          {
            step: "Step 01",
            title: "Scalp & Bag Winter Dormancy",
            desc: "In mid-March, drop mower deck 1-2 notches on Bermuda and Zoysia to remove dead brown blades and warm soil faster. (Never scalp St. Augustine)."
          },
          {
            step: "Step 02",
            title: "Spring Pre-Emergent Application",
            desc: "Apply Prodiamine or Dithiopyr when 2-inch soil temperature holds at 55°F to stop summer weeds like crabgrass, spurge, and sandburs before germination."
          },
          {
            step: "Step 03",
            title: "Core Aeration for Texas Clay",
            desc: "In late April or May once grass is 100% green and growing, rent a hollow-tine core aerator to relieve severe clay compaction."
          },
          {
            step: "Step 04",
            title: "First Slow-Release Nitrogen",
            desc: "Do not fertilize until you have mowed active green grass twice. Use a balanced 3-1-2 or 4-1-2 ratio slow-release nitrogen."
          }
        ]
      },
      summer: {
        title: "Summer: Heat Survival & Water Efficiency",
        subtitle: "June through August — Protect against triple-digit heat waves, drought stress, and chinch bugs.",
        timeline: "Active Window: Jun 1 - Aug 31",
        tasks: [
          {
            step: "Step 01",
            title: "Raise Mower Cutting Height",
            desc: "Raise mower blade by 0.5 inches. Taller grass creates canopy shade that keeps soil up to 10°F cooler and protects root zones from baking."
          },
          {
            step: "Step 02",
            title: "Cycle-and-Soak Irrigation",
            desc: "Deliver 1 to 1.25 inches of water per week in deep early-morning cycles (4:00 AM - 8:00 AM). Avoid shallow everyday sprinkling."
          },
          {
            step: "Step 03",
            title: "Scout for Chinch Bugs & Grubs",
            desc: "Inspect hot turf along driveways and curbs for chinch bugs. Apply curative grub control in early July if historical beetle pressure exists."
          },
          {
            step: "Step 04",
            title: "Skip Fast-Release Nitrogen",
            desc: "Avoid pushing excessive growth with quick-release nitrogen in 100°F weather, which burns tender blades and worsens drought vulnerability."
          }
        ]
      },
      fall: {
        title: "Fall: Winterization & Fungus Prevention",
        subtitle: "September through November — Prevent cool-season weeds and strengthen roots for cold hardiness.",
        timeline: "Active Window: Sep 1 - Nov 30",
        tasks: [
          {
            step: "Step 01",
            title: "Fall Pre-Emergent Application",
            desc: "Apply fall pre-emergent around mid-October (when soil cools to 70°F) to stop winter annual weeds like Poa Annua (annual bluegrass) and Henbit."
          },
          {
            step: "Step 02",
            title: "Potassium 'Winterizer' Feed",
            desc: "Apply a low-nitrogen, high-potassium fertilizer (such as 1-0-2 or 15-0-15) to fortify turf cell walls against sudden winter freezes."
          },
          {
            step: "Step 03",
            title: "Prevent Take-All & Large Patch",
            desc: "As night temperatures drop below 70°F, cut back watering frequency. St. Augustine is susceptible to fungus in moist cool soils."
          },
          {
            step: "Step 04",
            title: "Final Late Autumn Clean-up",
            desc: "Mulch or bag falling oak and pecan leaves so they do not mat down and smother dormant turf during wet winter months."
          }
        ]
      },
      winter: {
        title: "Winter: Dormancy & Equipment Prep",
        subtitle: "December through February — Protect dormant root crowns and prep equipment for spring.",
        timeline: "Active Window: Dec 1 - Feb 28",
        tasks: [
          {
            step: "Step 01",
            title: "Pre-Freeze Deep Watering",
            desc: "If an Arctic freeze is forecasted, run sprinklers for a quick cycle 24 hours prior. Moist soil holds thermal heat and insulates roots."
          },
          {
            step: "Step 02",
            title: "Mower Blade Sharpening & Tune-up",
            desc: "Sharpen or replace mower blades. Dull blades rip rather than slice grass, leaving frayed brown tips susceptible to spring disease."
          },
          {
            step: "Step 03",
            title: "Minimal Winter Hydration",
            desc: "Dormant warm-season lawns only need 0.5 inches of water every 3 to 4 weeks if Texas experiences an unseasonably dry winter."
          },
          {
            step: "Step 04",
            title: "Soil Test via Texas A&M",
            desc: "Send a soil sample to the Texas A&M AgriLife Extension Soil Testing Lab to discover your exact pH and nutrient levels before spring."
          }
        ]
      }
    };

    // Render Season Function
    function renderSeason(seasonKey) {
      const data = seasonalData[seasonKey];
      const container = document.getElementById('seasonDisplay');
      
      let tasksHtml = '';
      data.tasks.forEach(t => {
        tasksHtml += `
          <div class="task-card">
            <div class="task-step">${t.step}</div>
            <h4>${t.title}</h4>
            <p>${t.desc}</p>
          </div>
        `;
      });

      container.innerHTML = `
        <div class="season-content-header">
          <div class="season-title-group">
            <h3>${data.title}</h3>
            <p>${data.subtitle}</p>
          </div>
          <div class="season-timeline-pill">${data.timeline}</div>
        </div>
        <div class="season-tasks-grid">
          ${tasksHtml}
        </div>
      `;
    }

    // Initialize Season Tabs
    document.querySelectorAll('.season-tab-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.season-tab-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        renderSeason(btn.dataset.season);
      });
    });

    // Render default season (spring)
    renderSeason('spring');

    // --- Grass Filter Functionality ---
    const filterBtns = document.querySelectorAll('.filter-btn');
    const grassCards = document.querySelectorAll('#grassGrid .grass-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;

        grassCards.forEach(card => {
          if (filter === 'all') {
            card.style.display = 'flex';
          } else {
            const categories = card.dataset.category.split(' ');
            if (categories.includes(filter)) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          }
        });
      });
    });

    // --- Texas Sprinkler Runtime Calculator ---
    function updateSprinklerCalculation() {
      const grass = document.getElementById('grassTypeSelect').value;
      const nozzle = document.getElementById('nozzleSelect').value;
      const season = document.getElementById('seasonSelect').value;

      // Base target weekly inches
      let targetInches = 1.0;
      if (season === 'summer') targetInches = 1.2;
      else if (season === 'spring') targetInches = 0.75;
      else if (season === 'winter') targetInches = 0.3;

      // Grass factor
      if (grass === 'st-augustine') targetInches *= 1.1;
      else if (grass === 'bermuda') targetInches *= 0.95;
      else if (grass === 'zoysia') targetInches *= 0.85;
      else if (grass === 'buffalo') targetInches *= 0.45;

      // Sprinkler precipitation rate in inches per hour
      let prepRatePerHour = 1.5; // Spray
      if (nozzle === 'rotor') prepRatePerHour = 0.65;
      else if (nozzle === 'mp-rotator') prepRatePerHour = 0.45;

      // Divide by typical 2 watering days in summer/spring, 1 in drought/winter
      const daysPerWeek = (season === 'summer') ? 2 : 1;
      const inchesPerDay = targetInches / daysPerWeek;

      // Minutes per day = (inchesPerDay / prepRatePerHour) * 60
      const totalMinutes = Math.max(6, Math.round((inchesPerDay / prepRatePerHour) * 60));

      // Calculate cycle-and-soak splits
      let cycles = 3;
      if (totalMinutes <= 12) cycles = 2;
      const minutesPerCycle = Math.ceil(totalMinutes / cycles);

      document.getElementById('calcMinutes').textContent = `${totalMinutes} Mins / Day`;
      document.getElementById('calcCycles').textContent = 
        `Split into ${cycles} cycles of ${minutesPerCycle} minutes, spaced 45 minutes apart to avoid clay runoff.`;
    }

    document.getElementById('grassTypeSelect').addEventListener('change', updateSprinklerCalculation);
    document.getElementById('nozzleSelect').addEventListener('change', updateSprinklerCalculation);
    document.getElementById('seasonSelect').addEventListener('change', updateSprinklerCalculation);
    updateSprinklerCalculation();

    // --- FAQ Accordion ---
    document.querySelectorAll('.faq-question').forEach(button => {
      button.addEventListener('click', () => {
        const item = button.parentElement;
        const isActive = item.classList.contains('active');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
        if (!isActive) {
          item.classList.add('active');
        }
      });
    });

    // --- Modal Dialog Handlers (Native HTML5 <dialog>) ---
    const privacyDialog = document.getElementById('privacyDialog');
    const termsDialog = document.getElementById('termsDialog');

    // Privacy Open Buttons
    document.getElementById('openPrivacyBtn').addEventListener('click', () => privacyDialog.showModal());
    document.getElementById('openPrivacyBottomBtn').addEventListener('click', () => privacyDialog.showModal());
    // Privacy Close Buttons
    document.getElementById('closePrivacyBtn').addEventListener('click', () => privacyDialog.close());
    document.getElementById('confirmPrivacyBtn').addEventListener('click', () => privacyDialog.close());

    // Terms Open Buttons
    document.getElementById('openTermsBtn').addEventListener('click', () => termsDialog.showModal());
    document.getElementById('openTermsBottomBtn').addEventListener('click', () => termsDialog.showModal());
    // Terms Close Buttons
    document.getElementById('closeTermsBtn').addEventListener('click', () => termsDialog.close());
    document.getElementById('confirmTermsBtn').addEventListener('click', () => termsDialog.close());

    // Close when clicking outside dialog backdrop
    [privacyDialog, termsDialog].forEach(dialog => {
      dialog.addEventListener('click', (event) => {
        const rect = dialog.getBoundingClientRect();
        const isInDialog = (
          rect.top <= event.clientY &&
          event.clientY <= rect.top + rect.height &&
          rect.left <= event.clientX &&
          event.clientX <= rect.left + rect.width
        );
        if (!isInDialog) {
          dialog.close();
        }
      });
    });

    // --- Lead Form Simulation ---
    document.getElementById('leadForm').addEventListener('submit', (e) => {
      e.preventDefault();
      document.getElementById('leadForm').style.display = 'none';
      document.getElementById('formSuccess').style.display = 'block';
    });

    // --- Mobile Menu Toggle ---
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const navLinks = document.querySelector('.nav-links');
    mobileBtn.addEventListener('click', () => {
      if (navLinks.style.display === 'flex') {
        navLinks.style.display = 'none';
      } else {
        navLinks.style.display = 'flex';
        navLinks.style.flexDirection = 'column';
        navLinks.style.position = 'absolute';
        navLinks.style.top = '74px';
        navLinks.style.left = '0';
        navLinks.style.right = '0';
        navLinks.style.background = '#ffffff';
        navLinks.style.padding = '24px';
        navLinks.style.borderBottom = '1px solid #e2e8f0';
        navLinks.style.boxShadow = '0 10px 15px -3px rgba(0,0,0,0.1)';
      }
    });
  </script>
</body>
</html>

