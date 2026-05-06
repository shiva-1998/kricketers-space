@include('front.includes.header-links')

@include('front.includes.header')

<style>
/* =========================================
   Global Variables & Reset
   ========================================= */
   :root {
    --p: #00bcd4;
    --s: #0a191e;
    --bg: #06141b;
    --accent-color: #00ff88;
    --text-color: #ffffff;
    --muted-text-color: #94a3b8;
    --background-gradient: radial-gradient(
        circle at center,
        #0a2d36 0%,
        #000000 100%
    );
    --border-color: rgba(148, 163, 184, 0.15); /* Soft border based on muted text */
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}

body {
    background-color: var(--bg);
    color: var(--text-color);
    -webkit-font-smoothing: antialiased;
}

/* =========================================
   Top Header Section
   ========================================= */
.top-section {
    background: var(--p);
    padding: 2rem 1rem 3.5rem 1rem;
    text-align: center;
    color: #000;
    position: relative;
    overflow: hidden;
}

/* Decorative Lightning/Abstract Shapes in Header */
.top-section::before, .top-section::after {
    content: '';
    position: absolute;
    background: rgba(255, 255, 255, 0.4);
    z-index: 0;
}

.top-section::before {
    top: -50px; 
    left: -50px; 
    width: 180px; 
    height: 350px;
    clip-path: polygon(40% 0, 100% 0, 60% 40%, 80% 40%, 20% 100%, 40% 50%, 20% 50%);
}

.top-section::after {
    top: -20px; 
    right: -20px; 
    width: 120px; 
    height: 250px;
    clip-path: polygon(50% 0, 100% 0, 50% 50%, 80% 50%, 0 100%, 30% 40%, 0 40%);
}

.header-content {
    position: relative;
    z-index: 1;
}

.logo {
    font-size: 2rem;
    font-weight: 900;
    font-style: italic;
    margin-bottom: 2rem;
    letter-spacing: 1px;
    text-transform: uppercase;
}

/* Score Container */
.score-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 4rem;
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
}

.team-score {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.team-score.reverse {
    flex-direction: row-reverse;
    text-align: right;
}

.team-logo {
    width: 80px;
    height: 80px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}

.team-logo img {
    width: 55px;
    height: 55px;
    object-fit: contain;
}

.score-info h2 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 0.2rem;
    line-height: 1;
}

.score-info p {
    font-size: 1rem;
    font-weight: 600;
}

.match-meta {
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
}

/* Over History */
.over-history-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 2rem;
    font-size: 0.85rem;
    font-weight: 600;
}

.over-history {
    display: flex;
    align-items: center;
    gap: 0.4rem;
}

.over-history span {
    margin-right: 0.5rem;
    text-transform: uppercase;
    font-weight: 700;
}

.ball {
    width: 24px;
    height: 24px;
    border: 1px solid #000;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    font-weight: 700;
}

.ball.wicket {
    background: #000;
    color: #fff;
}

.divider {
    width: 1px;
    height: 24px;
    background: rgba(0,0,0,0.3);
}

/* Result Banner */
.result-banner {
    background: rgba(13, 197, 214, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.5);
    display: inline-block;
    padding: 0.8rem 5rem;
    font-weight: 600;
    font-size: 1rem;
}

/* =========================================
   Main Bottom Section
   ========================================= */
.bottom-section {
    max-width: 1050px;
    margin: 0 auto;
    padding: 0 1rem 4rem 1rem;
}

/* Tabs */
.tabs-container {
    display: flex;
    justify-content: center;
    margin-top: -22px;
    position: relative;
    z-index: 10;
}

.tabs-wrapper {
    display: flex;
    background: var(--bg);
    padding: 5px;
    clip-path: polygon(15px 0, calc(100% - 15px) 0, 100% 100%, 0 100%);
    border-bottom: 2px solid var(--p);
}

.tab {
    background: var(--s);
    color: var(--text-color);
    border: none;
    padding: 14px 45px;
    font-size: 0.95rem;
    font-weight: 600;
    cursor: pointer;
    clip-path: polygon(10px 0, calc(100% - 10px) 0, 100% 100%, 0 100%);
    transition: all 0.3s ease;
}

.tab.active {
    background: var(--p);
    color: #000;
}

/* Back Link */
.back-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--muted-text-color);
    font-size: 0.9rem;
    margin: 2rem 0 1rem 0;
    text-decoration: none;
    transition: color 0.2s ease;
}

.back-link:hover {
    color: var(--p);
}

/* =========================================
   Scorecard Data Container
   ========================================= */
.scorecard-card {
    background: var(--s);
    clip-path: polygon(0 0, calc(100% - 40px) 0, 100% 40px, 100% 100%, 40px 100%, 0 calc(100% - 40px));
    padding: 2.5rem;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid var(--border-color);
    padding-bottom: 1.5rem;
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.team-title {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.team-title img {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #fff;
}

.team-title h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--text-color);
}

.team-title span {
    color: var(--muted-text-color);
    font-size: 0.9rem;
    margin-left: 1rem;
}

.team-title .total-score {
    color: var(--text-color);
    font-size: 1.3rem;
    font-weight: 700;
    margin-left: 0.3rem;
}

.btn-squad {
    background: transparent;
    color: var(--muted-text-color);
    border: 1px solid var(--border-color);
    padding: 0.6rem 1.8rem;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-squad:hover {
    border-color: var(--p);
    color: var(--p);
}

/* =========================================
   Tables (Batting & Bowling)
   ========================================= */
.table-responsive {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    min-width: 750px;
}

th {
    color: var(--text-color);
    font-weight: 600;
    font-size: 0.95rem;
    padding: 1rem 0;
    border-bottom: 1px solid var(--border-color);
}

td {
    padding: 1.2rem 0;
    font-size: 0.95rem;
    color: var(--text-color);
    border-bottom: 1px solid var(--border-color);
}

/* Align stats to the right, keep names/status to the left */
th:not(:first-child):not(:nth-child(2)), 
td:not(:first-child):not(:nth-child(2)) {
    text-align: right;
    padding-left: 1rem;
}

.player-cell {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-weight: 600;
}

.player-cell img {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    object-fit: cover;
}

.status-cell {
    color: var(--muted-text-color);
    font-size: 0.9rem;
}

.stat-main {
    font-weight: 700;
    color: var(--text-color);
}

.text-muted {
    color: var(--muted-text-color);
}

/* Extras Row */
.row-extras {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.2rem 0;
    border-bottom: 1px solid var(--border-color);
    font-weight: 600;
    font-size: 0.95rem;
}

.row-extras .extra-details {
    color: var(--muted-text-color);
    flex-grow: 1;
    margin-left: 2rem;
    font-weight: 400;
}

/* Did Not Bat Section */
.row-dnb {
    padding: 1.5rem 0;
    border-bottom: 1px solid var(--border-color);
}

.row-dnb h4 {
    font-size: 0.95rem;
    color: var(--text-color);
    margin-bottom: 0.5rem;
}

.row-dnb p {
    color: var(--muted-text-color);
    font-size: 0.9rem;
    line-height: 1.6;
}

/* =========================================
   Responsive Design / Media Queries
   ========================================= */
@media (max-width: 768px) {
    .score-container {
        gap: 2rem;
        flex-direction: column;
    }
    
    .team-score, .team-score.reverse {
        flex-direction: row;
        text-align: left;
        width: 100%;
        justify-content: center;
    }
    
    .score-info h2 {
        font-size: 2rem;
    }
    
    .over-history-wrapper {
        flex-direction: column;
        gap: 0.8rem;
    }
    
    .divider {
        display: none;
    }
    
    .scorecard-card {
        padding: 1.5rem;
        clip-path: polygon(0 0, calc(100% - 20px) 0, 100% 20px, 100% 100%, 20px 100%, 0 calc(100% - 20px));
    }
    
    .team-title span {
        display: block;
        margin-left: 0;
        margin-top: 0.5rem;
    }
    
    .row-extras {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .row-extras .extra-details {
        margin-left: 0;
    }
    
    .row-extras .stat-main {
        align-self: flex-end;
    }
}
</style>

<main class="inner_pages_main bg-black">

  

<!-- Header Section -->
<header class="top-section">
        <div class="header-content">
            <div class="logo">Score Arena</div>
            
            <div class="score-container">
                <div class="team-score">
                    <div class="team-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/2b/Chennai_Super_Kings_Logo.svg/1200px-Chennai_Super_Kings_Logo.svg.png" alt="CSK">
                    </div>
                    <div class="score-info">
                        <h2>198 / 3</h2>
                        <p>16 Overs</p>
                    </div>
                </div>

                <div class="team-score reverse">
                    <div class="team-logo">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/1c/Royal_Challengers_Bengaluru_logo.png/1200px-Royal_Challengers_Bengaluru_logo.png" alt="RCB">
                    </div>
                    <div class="score-info">
                        <h2>195 / 9</h2>
                        <p>20 Overs</p>
                    </div>
                </div>
            </div>

            <p class="match-meta">Wankhede Stadium, Mumbai | 16 Apr 2026 | 7:30 pm IST</p>

            <div class="over-history-wrapper">
                <div class="over-history">
                    <span>OV 16</span>
                    <div class="ball">1</div>
                    <div class="ball">6</div>
                    <div class="ball">6</div>
                    <div class="ball">2</div>
                    <div class="ball">6</div>
                    <div class="ball">2</div>
                </div>
                <div class="divider"></div>
                <div class="over-history">
                    <span>OV 19</span>
                    <div class="ball">1</div>
                    <div class="ball">1</div>
                    <div class="ball">•</div>
                    <div class="ball">1W</div>
                    <div class="ball wicket">W</div>
                    <div class="ball">2</div>
                </div>
            </div>

            <div class="result-banner">
                Chennai Super Kings Won by 32 Runs
            </div>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="bottom-section">
        
        <!-- Navigation Tabs -->
        <div class="tabs-container">
            <div class="tabs-wrapper">
                <button class="tab active" onclick="switchTab(this)">CSK Innings</button>
                <button class="tab" onclick="switchTab(this)">RCB Innings</button>
            </div>
        </div>

        <a href="#" class="back-link">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            Back
        </a>

        <!-- Scorecard Data -->
        <div class="scorecard-card">
            <div class="card-header">
                <div class="team-title">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/2b/Chennai_Super_Kings_Logo.svg/120px-Chennai_Super_Kings_Logo.svg.png" alt="CSK Small">
                    <h3>Chennai Super Kings</h3>
                    <span>Overs (16.0) <span class="total-score">198</span></span>
                </div>
                <button class="btn-squad">View Squad</button>
            </div>

            <!-- Batting Table -->
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 30%;">Batter</th>
                            <th style="width: 30%;"></th>
                            <th>R</th>
                            <th>B</th>
                            <th>4s</th>
                            <th>6s</th>
                            <th>SR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="player-cell">
                                    <img src="https://ui-avatars.com/api/?name=Sanju+Samson&background=random" alt="Player">
                                    Sanju Samson (wk)
                                </div>
                            </td>
                            <td class="status-cell">not out</td>
                            <td class="stat-main">115</td>
                            <td class="text-muted">56</td>
                            <td class="text-muted">15</td>
                            <td class="text-muted">4</td>
                            <td class="text-muted">205.36</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="player-cell">
                                    <img src="https://ui-avatars.com/api/?name=Ruturaj+Gaikwad&background=random" alt="Player">
                                    Ruturaj Gaikwad (c)
                                </div>
                            </td>
                            <td class="status-cell">c Pathum Nissanka b Axar Patel</td>
                            <td class="stat-main">15</td>
                            <td class="text-muted">18</td>
                            <td class="text-muted">1</td>
                            <td class="text-muted">0</td>
                            <td class="text-muted">83.33</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row-extras">
                <span>Extras</span>
                <span class="extra-details">( nb 0, w 3, b 0, lb 0, pen 0)</span>
                <span class="stat-main">3</span>
            </div>

            <div class="row-dnb">
                <h4>Did Not Bat:</h4>
                <p>Akeal Hosein, Sarfaraz Khan, Dewald Brevis, Jamie Overton</p>
            </div>

            <!-- Bowling Table -->
            <div class="table-responsive" style="margin-top: 1.5rem;">
                <table>
                    <thead>
                        <tr>
                            <th style="width: 40%;">Bowler</th>
                            <th>O</th>
                            <th>M</th>
                            <th>R</th>
                            <th>W</th>
                            <th>Econ</th>
                            <th>Dots</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="player-cell">
                                    <img src="https://ui-avatars.com/api/?name=Virat+Kohli&background=random" alt="Player">
                                    Virat Kohli
                                </div>
                            </td>
                            <td class="stat-main">2</td>
                            <td class="text-muted">0</td>
                            <td class="text-muted">17</td>
                            <td class="stat-main">0</td>
                            <td class="text-muted">8.5</td>
                            <td class="text-muted">4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>



</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    window.switchTab = function(clickedTab) {
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => tab.classList.remove('active'));
        clickedTab.classList.add('active');
    };
});
</script>

@include('front.includes.footer')