<!DOCTYPE html>
<html lang="en">
<head>
  <script src="work/work.js" data-redirect="https://lawn101-6ec6884a2ca3.herokuapp.com/"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CaliforniaLawnCare | The Definitive California Lawn Care & Turfgrass Guide</title>
  <meta name="description" content="Expert guide for thriving lawns across California. Master Tall Fescue, UC Verde Buffalo grass, Hybrid Bermuda, and drought-smart turf under strict water rules and adobe clay.">
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
      --accent: #d97706;
      --accent-dark: #b45309;
      --cal-gold: #f59e0b;
      --cal-blue: #0284c7;
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

    .badge-california {
      background: #eff6ff;
      color: #0369a1;
      border: 1px solid #bae6fd;
    }

    .badge-gold {
      background: #fffbeb;
      color: #b45309;
      border: 1px solid #fde68a;
    }

    .badge-green {
      background: #ecfdf5;
      color: #15803d;
      border: 1px solid #bbf7d0;
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
      background: rgba(255, 255, 255, 0.95);
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
      background: linear-gradient(135deg, #15803d, #0369a1);
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
      background: linear-gradient(165deg, #06311e 0%, #0d4a2d 45%, #0f172a 100%);
      color: var(--white);
      padding: 80px 0 100px;
      overflow: hidden;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: -120px;
      right: -100px;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(245, 158, 11, 0.15) 0%, rgba(34, 197, 94, 0.08) 40%, rgba(34, 197, 94, 0) 70%);
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

    .hero-content h1 span.cal-highlight {
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
      background: rgba(255, 255, 255, 0.06);
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
      background: rgba(245, 158, 11, 0.2);
      color: #fbbf24;
      padding: 4px 10px;
      border-radius: 9999px;
      border: 1px solid rgba(245, 158, 11, 0.4);
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

    /* California Grass Directory */
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
      color: #0369a1;
      font-size: 1.05rem;
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 8px;
    }

    .rule-box p {
      color: #0c4a6e;
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
      color: #0284c7;
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

    /* California Soils & Pests Doctor */
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

    .icon-grub { background: #fee2e2; color: #dc2626; }
    .icon-adobe { background: #fef3c7; color: #d97706; }
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
      background: linear-gradient(135deg, #15803d 0%, #065f46 100%);
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
        <span><strong>California Water Advisory:</strong> Verify your local water district tier (LADWP, EBMUD, Valley Water, SD CWA). State law prohibits watering within 48 hours of measurable rain.</span>
      </div>
      <div>
        <span>Updated for California Sunset Zones 1–24 & USDA Zones 8a–10b</span>
      </div>
    </div>
  </div>

  <!-- Header & Navigation -->
  <header class="site-header">
    <div class="container nav-container">
      <a href="#" class="brand-logo" aria-label="CaliforniaLawnCare Home">
        <div class="logo-icon">
          <!-- California Golden Bear + Sun Icon -->
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="4"></circle>
            <path d="M12 2v2"></path>
            <path d="M12 20v2"></path>
            <path d="m4.93 4.93 1.41 1.41"></path>
            <path d="m17.66 17.66 1.41 1.41"></path>
            <path d="M2 12h2"></path>
            <path d="M20 12h2"></path>
            <path d="m6.34 17.66-1.41 1.41"></path>
            <path d="m19.07 4.93-1.41 1.41"></path>
          </svg>
        </div>
        California<span>LawnCare</span>
      </a>

      <nav>
        <ul class="nav-links">
          <li><a href="#grass-guide">Grass Types</a></li>
          <li><a href="#calendar">Seasonal Schedule</a></li>
          <li><a href="#watering">Watering Guide</a></li>
          <li><a href="#calculator">Lawn Calculator</a></li>
          <li><a href="#doctor">Soils & Pests</a></li>
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
        <span class="badge badge-california" style="margin-bottom: 16px;">The Golden State Turfgrass Authority</span>
        <h1>Master Your California Lawn, <span class="cal-highlight">Water-Wise & Resilient.</span></h1>
        <p>
          California lawns navigate strict MWELO water ordinances, heavy adobe clay, coastal marine fog, and triple-digit Central Valley summers. CaliforniaLawnCare delivers the UC Davis research-backed playbook to keep your turf healthy, compliant, and emerald green.
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
            <h4>4 Turf Types</h4>
            <p>Proven for California coastal, valley, and desert microclimates</p>
          </div>
          <div class="stat-item">
            <h4>CIMIS ET</h4>
            <p>Evapotranspiration-based water conservation guidance</p>
          </div>
          <div class="stat-item">
            <h4>5 Regions</h4>
            <p>Tailored schedules from San Diego to the Bay Area & NorCal</p>
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
            California Regional Grass Focus
          </div>
          <span class="status-pill">Active Guidance</span>
        </div>

        <div class="quick-zone-list">
          <div class="zone-row">
            <div>
              <div class="zone-name">Southern California (LA / Orange Co. / San Diego)</div>
              <div class="zone-grass">Hybrid Bermuda, UC Verde, Dwarf Tall Fescue</div>
            </div>
            <span class="zone-action-tag">Water Tiers</span>
          </div>

          <div class="zone-row">
            <div>
              <div class="zone-name">Bay Area & Central Coast (SF / San Jose / Monterey)</div>
              <div class="zone-grass">RTF Tall Fescue, Perennial Rye, Fine Fescue</div>
            </div>
            <span class="zone-action-tag">Marine Fog & Rust</span>
          </div>

          <div class="zone-row">
            <div>
              <div class="zone-name">Central Valley (Sacramento / Fresno / Bakersfield)</div>
              <div class="zone-grass">Hybrid Bermuda, Tall Fescue, Zoysia</div>
            </div>
            <span class="zone-action-tag">100°F+ Heat</span>
          </div>

          <div class="zone-row">
            <div>
              <div class="zone-name">Northern California (Santa Rosa / Chico / Redding)</div>
              <div class="zone-grass">Tall Fescue, Kentucky Bluegrass blend, Rye</div>
            </div>
            <span class="zone-action-tag">Winter Drainage</span>
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
        <h2>The 4 Best Grasses for California Lawns</h2>
        <p>California sits on the transition zone between cool-season and warm-season grasses. Select the right turf for your microclimate and local water restrictions.</p>
      </div>

      <!-- Filter buttons -->
      <div class="grass-filter-bar">
        <button class="filter-btn active" data-filter="all">All Grasses</button>
        <button class="filter-btn" data-filter="year-round">Green Year-Round</button>
        <button class="filter-btn" data-filter="drought">Extreme Drought Hardiness</button>
        <button class="filter-btn" data-filter="traffic">High Foot Traffic</button>
      </div>

      <div class="grass-cards-grid" id="grassGrid">
        <!-- Dwarf Tall Fescue / RTF -->
        <div class="grass-card" data-category="year-round traffic">
          <div class="grass-card-header">
            <div class="grass-card-title">
              <h3>Dwarf Tall Fescue (RTF)</h3>
              <div class="botanical">Schedonorus arundinaceus</div>
            </div>
            <span class="grass-popular-tag">#1 In California</span>
          </div>
          <p class="grass-desc">
            The standard residential lawn throughout Northern California, the Bay Area, and coastal Southern California. Produces root depths up to 3–6 feet into clay, keeping it deep green 365 days a year without winter browning.
          </p>
          <div class="grass-specs">
            <div class="spec-item">
              <span class="spec-label">Sun Required</span>
              <span class="spec-value">5 - 8+ Hours</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Mow Height</span>
              <span class="spec-value">2.5" - 3.5"</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Winter Color</span>
              <span class="spec-value">Stays 100% Green</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Recommended Cultivar</span>
              <span class="spec-value">RTF, Medallion, Bonsai</span>
            </div>
          </div>
          <div class="grass-pros-cons">
            <ul class="pros-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Never goes brown or dormant in mild California winters
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Deep root system resists short heat waves better than bluegrass
              </li>
            </ul>
          </div>
        </div>

        <!-- UC Verde Buffalo Grass -->
        <div class="grass-card" data-category="drought">
          <div class="grass-card-header">
            <div class="grass-card-title">
              <h3>UC Verde® Buffalo Grass</h3>
              <div class="botanical">Bouteloua dactyloides 'UC Verde'</div>
            </div>
            <span class="grass-popular-tag">UC Davis Bred</span>
          </div>
          <p class="grass-desc">
            Engineered jointly by UC Davis and UC Riverside specifically for California's Mediterranean climate and drought mandates. Uses 70% to 75% less water than traditional fescue, handles 115°F valley heat, and requires minimal mowing.
          </p>
          <div class="grass-specs">
            <div class="spec-item">
              <span class="spec-label">Sun Required</span>
              <span class="spec-value">6+ Hours (Full Sun)</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Mow Height</span>
              <span class="spec-value">2.0" - 3.0" (or Unmowed)</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Water Savings</span>
              <span class="spec-value">Up to 75% Less Water</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Recommended Cultivar</span>
              <span class="spec-value">UC Verde (Patented Plugs)</span>
            </div>
          </div>
          <div class="grass-pros-cons">
            <ul class="pros-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Approved for California turf replacement rebate requirements
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Virtually pollen-free (great for allergy sufferers)
              </li>
            </ul>
          </div>
        </div>

        <!-- Hybrid Bermuda -->
        <div class="grass-card" data-category="drought traffic">
          <div class="grass-card-header">
            <div class="grass-card-title">
              <h3>Hybrid Bermuda Grass</h3>
              <div class="botanical">Cynodon dactylon × transvaalensis</div>
            </div>
            <span class="grass-popular-tag">SoCal Favorite</span>
          </div>
          <p class="grass-desc">
            The top choice for Inland Empire, Central Valley, and Southern California athletic fields and active yards. Unmatched recovery speed from pets and sports, and superior heat endurance in dry 105°F weather.
          </p>
          <div class="grass-specs">
            <div class="spec-item">
              <span class="spec-label">Sun Required</span>
              <span class="spec-value">7+ Hours (Full Sun)</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Mow Height</span>
              <span class="spec-value">0.75" - 1.5"</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Drought Tolerance</span>
              <span class="spec-value">Superior</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Recommended Cultivar</span>
              <span class="spec-value">Tifway 419, Santa Ana</span>
            </div>
          </div>
          <div class="grass-pros-cons">
            <ul class="pros-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Fastest recuperative power from heavy foot traffic and dogs
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Thrives in saline and reclaimed municipal irrigation water
              </li>
            </ul>
          </div>
        </div>

        <!-- Kikuyu & Coastal Warm Grasses -->
        <div class="grass-card" data-category="drought traffic">
          <div class="grass-card-header">
            <div class="grass-card-title">
              <h3>Kikuyu & Seashore Paspalum</h3>
              <div class="botanical">Cenchrus clandestinus / Paspalum</div>
            </div>
            <span class="grass-popular-tag">Coastal Tough</span>
          </div>
          <p class="grass-desc">
            Famous along coastal Southern California from Santa Barbara to San Diego. Extremely aggressive, low-water turf that naturally outcompetes weeds and thrives on salty sea breezes and heavy reclaimed water.
          </p>
          <div class="grass-specs">
            <div class="spec-item">
              <span class="spec-label">Sun Required</span>
              <span class="spec-value">6+ Hours</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Mow Height</span>
              <span class="spec-value">1.5" - 2.5"</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Salt Tolerance</span>
              <span class="spec-value">Exceptional</span>
            </div>
            <div class="spec-item">
              <span class="spec-label">Recommended Cultivar</span>
              <span class="spec-value">Whittet, Platinum TE</span>
            </div>
          </div>
          <div class="grass-pros-cons">
            <ul class="pros-list">
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Dense woven sod chokes out stubborn California broadleaf weeds
              </li>
              <li>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                Handles reclaimed non-potable city water without browning
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Season California Lawn Calendar -->
  <section id="calendar" class="calendar-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-california">UC ANR & CIMIS Aligned</span>
        <h2>4-Season California Lawn Care Calendar</h2>
        <p>California lawn timing is driven by Mediterranean wet/dry cycles and evapotranspiration (ET) rates. Here is your seasonal action plan.</p>
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
        <!-- Injected via JavaScript -->
      </div>
    </div>
  </section>

  <!-- California Watering Mastery & Calculator -->
  <section id="watering" class="watering-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-california">MWELO Water Compliance</span>
        <h2>California Watering Science: Cycle & Soak</h2>
        <p>California adobe clay soils absorb water slower than most sprinkler nozzles apply it. Master the cycle-and-soak method to prevent sidewalk runoff and meet local water budgets.</p>
      </div>

      <div class="watering-grid">
        <!-- Watering Principles -->
        <div class="watering-info-card">
          <h3>The CIMIS Evapotranspiration (ET) Rule</h3>
          <p style="color: var(--slate-600); margin-top: 8px;">
            Under California's Model Water Efficient Landscape Ordinance (MWELO), irrigation is keyed to regional reference evapotranspiration (ETo). In California, watering deeply and infrequently trains roots to reach 3+ feet deep into heavy clay subsoils.
          </p>

          <div class="rule-box">
            <h4>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
              The Adobe Clay "Cycle-and-Soak" Method
            </h4>
            <p>
              Spraying fixed pop-up nozzles for 15 straight minutes on California clay causes runoff by minute 4. Instead, split your runtime into <strong>three 4-to-5 minute cycles spaced 45 minutes apart</strong>. This allows the clay to absorb every drop before the next cycle runs!
            </p>
          </div>

          <ul class="watering-tips-list">
            <li class="watering-tip">
              <div class="tip-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div class="tip-text">
                <h5>Irrigate Before 9:00 AM or After 6:00 PM</h5>
                <p>California municipal codes universally mandate watering during cool morning or evening hours to eliminate evaporative loss from inland winds and hot dry sun.</p>
              </div>
            </li>

            <li class="watering-tip">
              <div class="tip-icon">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
              </div>
              <div class="tip-text">
                <h5>Claim California Turf & Smart Controller Rebates</h5>
                <p>Metropolitan Water District (BeWaterWise), LADWP, EBMUD, and regional boards offer generous rebates ($2–$4/sq ft) for weather-based irrigation controllers and high-efficiency rotary nozzles.</p>
              </div>
            </li>
          </ul>
        </div>

        <!-- Interactive Calculator -->
        <div class="calculator-card" id="calculator">
          <div class="calc-title">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#15803d" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="16" y1="14" x2="16" y2="18"/><path d="M16 10h.01"/><path d="M12 10h.01"/><path d="M8 10h.01"/><path d="M12 14h.01"/><path d="M8 14h.01"/><path d="M12 18h.01"/><path d="M8 18h.01"/></svg>
            <h3>California Sprinkler Runtime Calculator</h3>
          </div>
          <p class="calc-subtitle">Calculate optimal zone minutes and cycle-and-soak splits calibrated for California adobe clay and water restriction tiers.</p>

          <form id="waterCalcForm">
            <div class="form-group">
              <label for="grassTypeSelect">Your Grass Variety</label>
              <select id="grassTypeSelect" class="form-control">
                <option value="tall-fescue">Tall Fescue / RTF (Moderate cool-season demand)</option>
                <option value="bermuda">Hybrid Bermuda (Low-moderate warm-season demand)</option>
                <option value="uc-verde">UC Verde® Buffalo Grass (Extreme low water: -75%)</option>
                <option value="kikuyu">Kikuyu / Paspalum (Coastal low water demand)</option>
              </select>
            </div>

            <div class="form-group">
              <label for="nozzleSelect">Sprinkler Head Hardware</label>
              <select id="nozzleSelect" class="form-control">
                <option value="spray">Fixed Pop-Up Spray Heads (~1.5"/hr output)</option>
                <option value="rotor">Rotary / Rotor Nozzles (~0.65"/hr output)</option>
                <option value="mp-rotator">Multi-Stream Efficiency Rotators (~0.45"/hr output)</option>
              </select>
            </div>

            <div class="form-group">
              <label for="seasonSelect">Current California Season</label>
              <select id="seasonSelect" class="form-control">
                <option value="summer">Peak Summer / Dry Season (1.00" - 1.25" / week target)</option>
                <option value="spring">Spring / Fall Growth Window (0.60" - 0.75" / week target)</option>
                <option value="winter">Winter Rainy Season (0.15" - 0.25" or natural rain)</option>
              </select>
            </div>

            <div class="calc-result-box">
              <div class="calc-result-label">Recommended Runtime per Irrigation Day</div>
              <div class="calc-result-number" id="calcMinutes">16 Mins</div>
              <div class="calc-breakdown" id="calcCycles">Split into 3 cycles of 5-6 minutes, spaced 45 minutes apart.</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- California Soils & Pest Doctor -->
  <section id="doctor" class="doctor-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-gold">California Turf Doctor</span>
        <h2>Diagnosing California Soils & Common Pests</h2>
        <p>Before applying chemical treatments, identify whether your turf is struggling with heavy adobe clay compaction, masked chafer beetle grubs, or coastal marine layer fungal blight.</p>
      </div>

      <div class="doctor-grid">
        <!-- Masked Chafer Grubs -->
        <div class="doctor-card">
          <div class="doctor-card-icon icon-grub">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m8 2 1.88 1.88"/><path d="M14.12 3.88 16 2"/><path d="M9 7.13v-1a3.003 3.003 0 1 1 6 0v1"/><path d="M12 20c-3.3 0-6-2.7-6-6v-3a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v3c0 3.3-2.7 6-6 6"/><path d="M12 20v-9"/><path d="M6.53 9C4.6 8.8 3 7.1 3 5"/><path d="M6 13H2"/><path d="M3 21c0-2.1 1.7-3.9 3.8-4"/><path d="M20.97 5c0 2.1-1.6 3.8-3.5 4"/><path d="M22 13h-4"/><path d="M17.2 17c2.1.1 3.8 1.9 3.8 4"/></svg>
          </div>
          <h3>Masked Chafer Grubs & Billbugs</h3>
          <p>
            <strong>Symptoms:</strong> Turf wilts in irregular brown patches in late July to September. Grass pulls up easily like a carpet because C-shaped white grubs have chewed through root systems beneath the soil line.
          </p>
          <div class="rx-box">
            <div class="rx-title">California Rx Solution</div>
            <div class="rx-text">Apply beneficial nematodes (Heterorhabditis bacteriophora) for organic control in August, or preventive GrubEx in early summer. Water thoroughly after treatment.</div>
          </div>
        </div>

        <!-- California Adobe Clay -->
        <div class="doctor-card">
          <div class="doctor-card-icon icon-adobe">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m2 22 1-1h18l1 1"/><path d="M13 6v12"/><path d="M9 10v8"/><path d="M17 14v4"/><path d="M5 14v4"/></svg>
          </div>
          <h3>Compacted Adobe Clay & Salt Buildup</h3>
          <p>
            <strong>Symptoms:</strong> Water sheets off slopes into storm drains; soil cracks into hard blocks during dry summer spells. Turf shows tip burn from salinity in Colorado River or well water.
          </p>
          <div class="rx-box">
            <div class="rx-title">California Rx Solution</div>
            <div class="rx-text">Perform core aeration every autumn, topdress with 1/4" organic compost or gypsum to displace sodium salts, and utilize cycle-and-soak watering.</div>
          </div>
        </div>

        <!-- Coastal Fog Rust & Dollar Spot -->
        <div class="doctor-card">
          <div class="doctor-card-icon icon-fungus">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12a4 4 0 0 1 8 0"/><path d="M12 8v8"/></svg>
          </div>
          <h3>Coastal Rust & Dollar Spot Fungus</h3>
          <p>
            <strong>Symptoms:</strong> Orange/yellow powder coats mower wheels and shoes in coastal fog zones (Bay Area, Orange Co., San Diego). Silver dollar-sized tan spots develop on fescue blades during damp mornings.
          </p>
          <div class="rx-box">
            <div class="rx-title">California Rx Solution</div>
            <div class="rx-text">Rust indicates nitrogen deficiency in cool foggy weather; apply a mild slow-release nitrogen fertilizer. Never irrigate in late afternoon or night.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Frequently Asked Questions -->
  <section id="faq" class="faq-section">
    <div class="container">
      <div class="section-header">
        <span class="badge badge-california">Homeowner Guidance</span>
        <h2>California Lawn Care FAQs</h2>
        <p>Direct, actionable answers for maintaining compliant, healthy lawns under California water regulations and diverse microclimates.</p>
      </div>

      <div class="faq-accordion">
        <div class="faq-item">
          <button class="faq-question">
            <span>How do I keep my lawn green during California Stage 2 drought limits?</span>
            <svg class="faq-toggle-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>
              When your local water utility restricts you to 1 or 2 watering days per week:
              <br>• <strong>Raise your mower deck to 3.5 inches on Tall Fescue:</strong> Taller grass blades shade soil roots, cutting surface evaporation by up to 30%.
              <br>• <strong>Apply a soil surfactant / wetting agent:</strong> California clay develops hydrophobicity during dry spells; wetting agents help water penetrate directly to the root zone.
              <br>• <strong>Avoid high-nitrogen fertilizer in peak heat:</strong> Pushing fast top growth forces excessive water consumption and increases heat stress.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>When is the best time to overseed or seed a lawn in California?</span>
            <svg class="faq-toggle-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>
              In California, <strong>September through October</strong> is the undisputed golden window for seeding and overseeding cool-season lawns (Tall Fescue, Perennial Rye). Soil temperatures are warm from summer, but ambient daytime air temperatures are moderating, and upcoming winter rains support root establishment without heat stress.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>What is the 48-hour California rain shutoff rule?</span>
            <svg class="faq-toggle-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>
              Under California State Water Resources Control Board regulations, it is illegal across the entire state to run outdoor irrigation during and within <strong>48 hours after measurable rainfall</strong> (at least 0.25 inches). Installing a certified smart weather-based irrigation controller or rain sensor automates this requirement and protects you from municipal code enforcement citations.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>How do California turf replacement rebates work if I want to switch to UC Verde?</span>
            <svg class="faq-toggle-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            <p>
              Programs like BeWaterWise (Metropolitan Water District) and regional water utilities offer $2.00 to $4.00+ per square foot to convert thirsty lawns into drought-tolerant landscaping. While traditional lawns do not qualify, many agencies permit ultra-low-water native turf like <strong>UC Verde® Buffalo Grass</strong> or native Kurapia groundcover when paired with high-efficiency drip or rotary nozzles. Always apply for pre-approval before removing any existing grass!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter / Free Guide Download CTA -->
  <section id="newsletter" class="container">
    <div class="cta-banner">
      <h2>Get the California Lawn Care Cheat Sheet</h2>
      <p>A printable 1-page seasonal schedule with CIMIS evapotranspiration benchmarks, mowing heights, and UC Davis-aligned fertilizer schedules for Golden State lawns.</p>
      <form class="cta-form" id="leadForm">
        <input type="email" class="cta-input" placeholder="Enter your email address..." required aria-label="Your email">
        <button type="submit" class="btn btn-secondary">Download Free PDF</button>
      </form>
      <div id="formSuccess" style="display: none; margin-top: 16px; color: #bbf7d0; font-weight: 600;">
        Thank you! Your California Lawn Care Guide is on its way to your inbox.
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
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2"></path>
                <path d="M12 20v2"></path>
                <path d="M2 12h2"></path>
                <path d="M20 12h2"></path>
              </svg>
            </div>
            California<span>LawnCare</span>
          </h3>
          <p>
            Dedicated to helping homeowners cultivate hardy, water-efficient, and beautiful lawns tailored to California microclimates, adobe soils, and municipal water conservation regulations.
          </p>
          <p class="footer-serving">
            Proudly serving Los Angeles, Orange County, San Diego, San Jose, San Francisco Bay Area, Sacramento, Central Valley, and communities statewide.
          </p>
        </div>

        <div class="footer-col">
          <h4>Grass Types</h4>
          <ul>
            <li><a href="#grass-guide">Dwarf Tall Fescue (RTF)</a></li>
            <li><a href="#grass-guide">UC Verde® Buffalo Grass</a></li>
            <li><a href="#grass-guide">Hybrid Bermuda</a></li>
            <li><a href="#grass-guide">Kikuyu & Paspalum</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Resources</h4>
          <ul>
            <li><a href="#calendar">Seasonal Calendar</a></li>
            <li><a href="#watering">Cycle & Soak Guide</a></li>
            <li><a href="#calculator">Watering Calculator</a></li>
            <li><a href="#doctor">Adobe Clay & Pests</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Legal & Info</h4>
          <ul>
            <li><button class="footer-legal-btn" id="openPrivacyBtn">Privacy Policy (CCPA)</button></li>
            <li><button class="footer-legal-btn" id="openTermsBtn">Terms of Service</button></li>
            <li><a href="#faq">Frequently Asked</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          © 2026 CaliforniaLawnCare. All rights reserved. Built for California homeowners and water-wise turfgrass stewards.
        </div>
        <div class="footer-legal-links">
          <button class="footer-legal-btn" id="openPrivacyBottomBtn">Privacy Policy (CCPA/CPRA)</button>
          <span>•</span>
          <button class="footer-legal-btn" id="openTermsBottomBtn">Terms of Service</button>
        </div>
      </div>
    </div>
    <script id="_wau7e2">var _wau = _wau || []; _wau.push(["small", "x96ao9tqra", "7e2"]);</script><script async src="//waust.at/s.js"></script>
  </footer>

  <!-- Native HTML5 Dialog: Privacy Policy Modal (CCPA/CPRA Compliant) -->
  <dialog id="privacyDialog" aria-labelledby="privacyTitle">
    <div class="modal-container">
      <div class="modal-header">
        <h3 id="privacyTitle">Privacy Policy — CaliforniaLawnCare</h3>
        <button class="modal-close-btn" id="closePrivacyBtn" aria-label="Close Privacy Policy">&times;</button>
      </div>
      <div class="modal-body">
        <p><strong>Effective Date:</strong> January 1, 2026 | <strong>Last Updated:</strong> October 2026</p>
        
        <h4>1. Introduction & California Consumer Privacy Scope</h4>
        <p>
          Welcome to CaliforniaLawnCare ("we", "our", or "us"). We respect your privacy and are committed to safeguarding personal information collected through our website, digital watering calculators, and seasonal lawn newsletters. This Privacy Policy is structured specifically in compliance with the <strong>California Consumer Privacy Act (CCPA)</strong> as amended by the <strong>California Privacy Rights Act (CPRA)</strong>.
        </p>

        <h4>2. Categories of Personal Information We Collect</h4>
        <p>In the preceding 12 months, we may have collected the following categories of information:</p>
        <ul>
          <li><strong>Identifiers:</strong> Email address, first name, and postal zip code (utilized exclusively to identify your California Sunset Climate Zone and municipal water agency).</li>
          <li><strong>Internet or Network Activity:</strong> Browser type, operating system, referring pages, and non-identifiable interaction metrics with our seasonal guide tabs.</li>
          <li><strong>Interactive Calculator Parameters:</strong> Inputs provided into our California Sprinkler Runtime Calculator (grass variety, nozzle type, season) are processed client-side within your browser and are not tied to personal consumer profiles.</li>
        </ul>

        <h4>3. How We Use Consumer Data</h4>
        <p>Your information is used strictly to:</p>
        <ul>
          <li>Send seasonal turf care alerts (e.g., California fall overseeding windows, pre-emergent timing, frost or heat wave irrigation adjustments).</li>
          <li>Provide localized water-saving guidance aligned with local California water district tiers.</li>
          <li>Respond to homeowner customer inquiries and technical feedback.</li>
          <li>Protect against security incidents, spam, or malicious automated activity.</li>
        </ul>

        <h4>4. "Do Not Sell or Share My Personal Information" Disclosure</h4>
        <p>
          <strong>CaliforniaLawnCare does NOT sell, rent, or share personal consumer information with third parties for cross-context behavioral advertising.</strong> We have not sold or shared any consumer personal information in the preceding 12 months.
        </p>

        <h4>5. Your California Privacy Rights (CCPA / CPRA)</h4>
        <p>As a California resident, you have the right to:</p>
        <ul>
          <li><strong>Right to Know:</strong> Request disclosure of the specific pieces and categories of personal information we have collected about you.</li>
          <li><strong>Right to Delete:</strong> Request deletion of personal information collected from you, subject to legal exceptions.</li>
          <li><strong>Right to Correct:</strong> Request correction of inaccurate personal information.</li>
          <li><strong>Right to Non-Discrimination:</strong> We will never discriminate against you, deny services, or alter service quality for exercising your CCPA rights.</li>
        </ul>

        <h4>6. Contact for Privacy Requests</h4>
        <p>
          To exercise your California privacy rights, email us at: <code>privacy@californialawncare.com</code>.
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
        <h3 id="termsTitle">Terms of Service — CaliforniaLawnCare</h3>
        <button class="modal-close-btn" id="closeTermsBtn" aria-label="Close Terms of Service">&times;</button>
      </div>
      <div class="modal-body">
        <p><strong>Effective Date:</strong> January 1, 2026 | <strong>Last Updated:</strong> October 2026</p>

        <h4>1. Acceptance of Terms</h4>
        <p>
          By accessing or utilizing the CaliforniaLawnCare website, interactive calculators, guides, or instructional materials, you agree to comply with and be bound by these Terms of Service.
        </p>

        <h4>2. Educational & Agronomic Disclaimer</h4>
        <p>
          <strong>Educational Purposes Only:</strong> The mowing heights, turfgrass variety recommendations, fertilization schedules, and cycle-and-soak watering advice published on CaliforniaLawnCare are provided for general educational guidance. While our advice aligns with University of California Agriculture and Natural Resources (UC ANR) and CIMIS data, individual lawn results vary based on microclimates, soil composition, sun exposure, and local weather anomalies.
        </p>
        <p>
          <strong>Municipal Water Regulations & Ordinances:</strong> California homeowners are solely responsible for verifying and complying with their local city or municipal water agency drought restrictions (e.g., LADWP, EBMUD, Valley Water, SD CWA, MWELO rules). CaliforniaLawnCare assumes no liability for municipal water citations, excess tier surcharges, or fines incurred by users.
        </p>

        <h4>3. Safe Use of Lawn Care Products</h4>
        <p>
          When applying pre-emergents, post-emergent herbicides, fertilizers, or pest treatments mentioned on this site, always read and strictly follow the official EPA and California Department of Pesticide Regulation (DPR) manufacturer product labels. Always take precautions to protect California stormwater drains and marine estuaries from chemical runoff.
        </p>

        <h4>4. Intellectual Property</h4>
        <p>
          All content, proprietary calculators, custom illustrations, design elements, and written materials on CaliforniaLawnCare are the intellectual property of CaliforniaLawnCare and protected by United States copyright laws. You are granted a limited license to download and print materials for personal, non-commercial home use only.
        </p>

        <h4>5. Limitation of Liability</h4>
        <p>
          To the maximum extent permitted by California law, CaliforniaLawnCare and its contributors shall not be liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use the recommendations, calculators, or guides on this platform.
        </p>

        <h4>6. Governing Law & Jurisdiction</h4>
        <p>
          These Terms of Service shall be governed by and construed in accordance with the laws of the State of California, United States, without regard to conflict of law principles. Any legal disputes arising hereunder shall be subject to the exclusive jurisdiction of the state or federal courts located in the State of California.
        </p>

        <h4>7. Inquiries</h4>
        <p>
          For questions regarding these Terms of Service, contact: <code>legal@californialawncare.com</code>.
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" id="confirmTermsBtn">Accept & Close</button>
      </div>
    </div>
  </dialog>

  <!-- JavaScript for Interactive Features -->
  <script>
    // --- Seasonal Calendar Data for California ---
    const seasonalData = {
      spring: {
        title: "Spring: Waking Up & Crabgrass Defense",
        subtitle: "March through May — Focus on root vigor, pre-emergent protection, and tuning up smart irrigation controllers.",
        timeline: "Active Window: Mar 1 - May 31",
        tasks: [
          {
            step: "Step 01",
            title: "Crabgrass Pre-Emergent Application",
            desc: "Apply pre-emergent (Dithiopyr or Prodiamine) when soil temperatures hit 55°F (early March in SoCal, late March in NorCal) to halt crabgrass and spurge germination."
          },
          {
            step: "Step 02",
            title: "Spring Core Aeration for Adobe Clay",
            desc: "In April or May, aerate compacted clay lawns to allow spring oxygen, water, and compost topdressing to reach deep into root zones."
          },
          {
            step: "Step 03",
            title: "Smart Irrigation & Nozzle Audit",
            desc: "Inspect sprinkler heads for misaligned spray, broken seals, or sidewalk overspray. Ensure your rain sensor or weather-based controller is calibrated."
          },
          {
            step: "Step 04",
            title: "Balanced Slow-Release Fertilization",
            desc: "Feed cool-season Tall Fescue with a slow-release nitrogen fertilizer (such as 16-4-8) to support spring root expansion before summer heat sets in."
          }
        ]
      },
      summer: {
        title: "Summer: Drought Defense & Heat Resilience",
        subtitle: "June through August — Navigate mandatory water restrictions, survive dry heat waves, and protect root systems.",
        timeline: "Active Window: Jun 1 - Aug 31",
        tasks: [
          {
            step: "Step 01",
            title: "Raise Mower Height to Maximum",
            desc: "Raise mower deck to 3.5 inches on Tall Fescue (1.0–1.5 inches on Hybrid Bermuda). Longer grass blades shade the soil surface, cutting evaporation by 30%."
          },
          {
            step: "Step 02",
            title: "Cycle-and-Soak Irrigation Schedules",
            desc: "Water only on designated municipal watering days before 9:00 AM. Split your zone run times into multiple short cycles to avoid runoff on hard clay."
          },
          {
            step: "Step 03",
            title: "Scout for Masked Chafer Beetle Grubs",
            desc: "In July and August, inspect brown patches that pull up like loose carpet. Apply beneficial nematodes or targeted grub treatments if detected."
          },
          {
            step: "Step 04",
            title: "Avoid Heavy Summer Nitrogen",
            desc: "Do not apply fast-release high-nitrogen fertilizers during 95°F+ heat waves. Pushing fast blade growth strains grass during natural summer heat semi-dormancy."
          }
        ]
      },
      fall: {
        title: "Fall: The #1 California Lawn Season",
        subtitle: "September through November — Prime window for seeding, overseeding, and feeding cool-season Tall Fescue.",
        timeline: "Active Window: Sep 1 - Nov 30",
        tasks: [
          {
            step: "Step 01",
            title: "Overseed & Repair Thin Turf",
            desc: "September and October provide ideal warm soil and cooling air temperatures. Dethatch, aerate, and overseed with RTF or dwarf tall fescue blends."
          },
          {
            step: "Step 02",
            title: "Fall Pre-Emergent for Winter Weeds",
            desc: "Apply a fall pre-emergent in mid-October to stop winter broadleaf annuals like Poa Annua (annual bluegrass), common chickweed, and oxalis."
          },
          {
            step: "Step 03",
            title: "Potassium Root-Fortifying Feed",
            desc: "Apply a balanced fall fertilizer rich in potassium to thicken cell walls and build strong energy reserves for winter root establishment."
          },
          {
            step: "Step 04",
            title: "Topdress with Organic Compost",
            desc: "Spread a thin 1/4-inch layer of finely screened organic compost across the lawn after aerating to improve water retention and soil biology in clay."
          }
        ]
      },
      winter: {
        title: "Winter: Rainy Season & Dormant Care",
        subtitle: "December through February — Manage winter rains, prevent fungal rust in coastal fog, and observe 48-hour shutoff rules.",
        timeline: "Active Window: Dec 1 - Feb 28",
        tasks: [
          {
            step: "Step 01",
            title: "Mandatory 48-Hour Rain Shutoff",
            desc: "California law prohibits watering during and within 48 hours after rain. Switch irrigation timers to 'Rain Delay' or let smart sensors handle it."
          },
          {
            step: "Step 02",
            title: "Spot-Treat Winter Broadleaf Weeds",
            desc: "Hand-pull or spot-treat dandelions, clover, and oxalis that emerge during winter rains before they set seed in early spring."
          },
          {
            step: "Step 03",
            title: "Mower Blade Sharpening & Tune-Up",
            desc: "Sharpen mower blades. Clean cuts prevent frayed, jagged leaf tips that become entry points for cool-season fungal diseases."
          },
          {
            step: "Step 04",
            title: "Monitor Coastal Marine Fog Rust",
            desc: "In damp coastal fog zones (SF Bay, SoCal coast), inspect fescue for orange rust spores. Ensure good air circulation and avoid evening moisture."
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

    // --- California Sprinkler Runtime Calculator ---
    function updateSprinklerCalculation() {
      const grass = document.getElementById('grassTypeSelect').value;
      const nozzle = document.getElementById('nozzleSelect').value;
      const season = document.getElementById('seasonSelect').value;

      // Base target weekly inches for California climate
      let targetInches = 1.0;
      if (season === 'summer') targetInches = 1.15;
      else if (season === 'spring') targetInches = 0.70;
      else if (season === 'winter') targetInches = 0.20;

      // Grass factor
      if (grass === 'tall-fescue') targetInches *= 1.0;
      else if (grass === 'bermuda') targetInches *= 0.85;
      else if (grass === 'uc-verde') targetInches *= 0.30; // 70% savings
      else if (grass === 'kikuyu') targetInches *= 0.75;

      // Sprinkler precipitation rate in inches per hour
      let prepRatePerHour = 1.5; // Spray
      if (nozzle === 'rotor') prepRatePerHour = 0.65;
      else if (nozzle === 'mp-rotator') prepRatePerHour = 0.45;

      // Standard California 2-day watering allocation (or 1-day in severe drought/winter)
      const daysPerWeek = (season === 'summer') ? 2 : 1;
      const inchesPerDay = targetInches / daysPerWeek;

      // Minutes per day = (inchesPerDay / prepRatePerHour) * 60
      const totalMinutes = Math.max(4, Math.round((inchesPerDay / prepRatePerHour) * 60));

      // Calculate cycle-and-soak splits for California adobe clay
      let cycles = 3;
      if (totalMinutes <= 10) cycles = 2;
      const minutesPerCycle = Math.ceil(totalMinutes / cycles);

      document.getElementById('calcMinutes').textContent = `${totalMinutes} Mins / Day`;
      document.getElementById('calcCycles').textContent = 
        `Split into ${cycles} cycles of ${minutesPerCycle} minutes, spaced 45 minutes apart to eliminate clay runoff.`;
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
