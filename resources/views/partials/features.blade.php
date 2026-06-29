<section id="features" class="fade-in-section">
    <div class="container features-grid-container">
        <span class="section-subtitle">Features</span>
        <h2 class="section-title">Kompetensi & Skill</h2>
        
        <!-- Controls (Tab Switcher + Category Filters) -->
        <div class="skills-controls-wrapper">
            <!-- Page toggles -->
            <div class="page-toggle-container">
                <button class="page-toggle-btn active" id="pageToggle1" onclick="switchPage(1)">
                    <!-- Code Icon -->
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.1em" width="1.1em" xmlns="http://www.w3.org/2000/svg"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    Pemrograman & Web
                </button>
                <button class="page-toggle-btn" id="pageToggle2" onclick="switchPage(2)">
                    <!-- Camera Icon -->
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.1em" width="1.1em" xmlns="http://www.w3.org/2000/svg"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                    Video Editing
                </button>
            </div>
            
            <!-- Programming category filters -->
            <div class="tab-filters" id="programmingFilters">
                <button class="tab-btn active" onclick="filterSkills(event, 'all')">Semua</button>
                <button class="tab-btn" onclick="filterSkills(event, 'backend')">Backend</button>
                <button class="tab-btn" onclick="filterSkills(event, 'frontend')">Frontend</button>
                <button class="tab-btn" onclick="filterSkills(event, 'tools')">Tools</button>
            </div>
        </div>
        
        <!-- Skills Cards Grid -->
        <div class="skills-grid" id="skillsGrid">
            
            <!-- PAGE 1: PROGRAMMING SKILLS -->
            
            <!-- Laravel Skill -->
            <div class="card skill-card" data-category="backend" data-page="1">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                        </div>
                        <h3 class="skill-name">Laravel (PHP)</h3>
                    </div>
                    <p class="skill-desc">Pengembangan RESTful API, arsitektur MVC, Blade templating, Eloquent ORM, dan manajemen basis data migrasi Laravel secara modular.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>80%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="80%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">PHP</span>
                        <span class="keyword-tag">Eloquent</span>
                        <span class="keyword-tag">MVC</span>
                        <span class="keyword-tag">Blade</span>
                    </div>
                </div>
            </div>

            <!-- ASP.NET Core Skill -->
            <div class="card skill-card" data-category="backend" data-page="1">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </div>
                        <h3 class="skill-name">ASP.NET Core (C#)</h3>
                    </div>
                    <p class="skill-desc">Membangun Web API enterprise, implementasi Repository Pattern, Entity Framework Core (EF Core), serta pengelolaan Controller & DTO.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>85%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="85%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">C#</span>
                        <span class="keyword-tag">Web API</span>
                        <span class="keyword-tag">EF Core</span>
                        <span class="keyword-tag">Repository Pattern</span>
                    </div>
                </div>
            </div>

            <!-- Next.js Skill -->
            <div class="card skill-card" data-category="frontend" data-page="1">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        </div>
                        <h3 class="skill-name">Next.js / React</h3>
                    </div>
                    <p class="skill-desc">Pengembangan Single Page Application (SPA), routing dinamis berbasis file, optimasi server-side rendering (SSR), State Hooks, dan integrasi API.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>75%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="75%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">Next.js</span>
                        <span class="keyword-tag">React</span>
                        <span class="keyword-tag">SSR</span>
                        <span class="keyword-tag">JSX</span>
                    </div>
                </div>
            </div>

            <!-- Web Design Skill -->
            <div class="card skill-card" data-category="frontend" data-page="1">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                        <h3 class="skill-name">Web Design (CSS)</h3>
                    </div>
                    <p class="skill-desc">Mendesain tata letak yang kompleks menggunakan CSS Grid & Flexbox, transisi animasi halus, serta media query responsif di semua perangkat mobile.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>90%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="90%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">CSS Grid</span>
                        <span class="keyword-tag">Flexbox</span>
                        <span class="keyword-tag">Media Query</span>
                        <span class="keyword-tag">Interaktif</span>
                    </div>
                </div>
            </div>

            <!-- Databases Skill -->
            <div class="card skill-card" data-category="backend" data-page="1">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"></path></svg>
                        </div>
                        <h3 class="skill-name">Databases (SQL)</h3>
                    </div>
                    <p class="skill-desc">Pengelolaan query SQL, desain Entity-Relationship Diagram (ERD), relasi tabel, optimalisasi index query, serta normalisasi data relasional.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>80%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="80%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">SQL Server</span>
                        <span class="keyword-tag">MySQL</span>
                        <span class="keyword-tag">ERD</span>
                        <span class="keyword-tag">Optimasi Query</span>
                    </div>
                </div>
            </div>

            <!-- Git Skill -->
            <div class="card skill-card" data-category="tools" data-page="1">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><circle cx="18" cy="18" r="3"></circle><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><path d="M18 18V6.5A2.5 2.5 0 0 0 15.5 4H6"></path><path d="M6 6v12"></path></svg>
                        </div>
                        <h3 class="skill-name">Git Version Control</h3>
                    </div>
                    <p class="skill-desc">Pengelolaan kontrol versi kode, alur branching kolaboratif, penanganan merge conflict, pull request, dan pengarsipan commit di GitHub/GitLab.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>85%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="85%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">Git</span>
                        <span class="keyword-tag">GitHub</span>
                        <span class="keyword-tag">Branching</span>
                        <span class="keyword-tag">Merger</span>
                    </div>
                </div>
            </div>


            <!-- PAGE 2: VIDEO EDITING SKILLS (Hidden Initially) -->
            
            <!-- DaVinci Resolve Skill -->
            <div class="card skill-card" data-category="video" data-page="2" style="display: none; opacity: 0; transform: scale(0.95);">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
                        </div>
                        <h3 class="skill-name">DaVinci Resolve</h3>
                    </div>
                    <p class="skill-desc">Pengeditan video profesional, teknik color grading tingkat lanjut menggunakan Node System, pascaproduksi audio Fairlight, dan efek visual Fusion.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>85%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="85%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">Color Grading</span>
                        <span class="keyword-tag">Node System</span>
                        <span class="keyword-tag">Fusion VFX</span>
                        <span class="keyword-tag">Fairlight</span>
                    </div>
                </div>
            </div>

            <!-- CapCut Skill -->
            <div class="card skill-card" data-category="video" data-page="2" style="display: none; opacity: 0; transform: scale(0.95);">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="20" y1="4" x2="8.12" y2="15.88"></line><line x1="14.47" y1="14.48" x2="20" y2="20"></line><line x1="8.12" y1="8.12" x2="12" y2="12"></line></svg>
                        </div>
                        <h3 class="skill-name">CapCut Desktop & Mobile</h3>
                    </div>
                    <p class="skill-desc">Penyusunan alur cerita cepat, transisi dinamis, pembuatan subtitle otomatis berbasis suara (voice-to-text), serta pengeditan audio/video multi-layer.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>90%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="90%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">Fast Cut</span>
                        <span class="keyword-tag">Transitions</span>
                        <span class="keyword-tag">Auto Subtitle</span>
                        <span class="keyword-tag">Social Media</span>
                    </div>
                </div>
            </div>

            <!-- Alight Motion Skill -->
            <div class="card skill-card" data-category="video" data-page="2" style="display: none; opacity: 0; transform: scale(0.95);">
                <div>
                    <div class="skill-header">
                        <div class="skill-icon">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <h3 class="skill-name">Alight Motion</h3>
                    </div>
                    <p class="skill-desc">Pembuatan animasi motion graphics di perangkat mobile, kustomisasi keyframe kurva, efek visual berbasis vektor, serta pengelolaan layer grafis kompleks.</p>
                </div>
                <div>
                    <div class="progress-container">
                        <div class="progress-labels">
                            <span>Keahlian</span>
                            <span>80%</span>
                        </div>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill" data-width="80%"></div>
                        </div>
                    </div>
                    <div class="skill-keywords">
                        <span class="keyword-tag">Keyframe Kurva</span>
                        <span class="keyword-tag">Motion Graphics</span>
                        <span class="keyword-tag">Vector Art</span>
                        <span class="keyword-tag">VFX Mobile</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination Controls -->
        <div class="skills-pagination-container">
            <button class="pagination-btn" id="prevPageBtn" onclick="navigatePage(-1)" disabled>
                &larr; Sebelumnya
            </button>
            <span class="page-indicator" id="pageIndicator">Halaman 1 dari 2</span>
            <button class="pagination-btn" id="nextPageBtn" onclick="navigatePage(1)">
                Selanjutnya &rarr;
            </button>
        </div>
    </div>
</section>
