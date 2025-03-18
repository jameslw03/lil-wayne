<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="A website dedicated to Lil Wayne, showcasing his music, videos, and merchandise.">

  <!-- Page Title -->
  <title>Lil Wayne Website</title>

  <!-- Favicon -->
  <!-- Standard Favicon for Browsers (Multi-size .ico file) -->
  <link rel="icon" href="assets/favicons/favicon-16x16.ico" sizes="16x16" type="image/x-icon">
  <link rel="icon" href="assets/favicons/favicon-32x32.ico" sizes="32x32" type="image/x-icon">
  <link rel="icon" href="assets/favicons/favicon-48x48.ico" sizes="48x48" type="image/x-icon">

  <!-- PNG Icons for Higher Resolution and Modern Devices -->
  <link rel="icon" href="assets/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="icon" href="assets/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="assets/favicons/favicon-48x48.png" sizes="48x48" type="image/png">
  <link rel="icon" href="assets/favicons/favicon-64x64.png" sizes="64x64" type="image/png">
  <link rel="icon" href="assets/favicons/favicon-192x192.png" sizes="192x192" type="image/png">
  <link rel="icon" href="assets/favicons/favicon-512x512.png" sizes="512x512" type="image/png">

  <!-- SVG Icon for Modern Browsers with Infinite Scalability -->
  <link rel="icon" href="assets/favicons/favicon-scalable.svg" type="image/svg+xml">

  <!-- Apple Touch Icon for iOS and iPadOS -->
  <link rel="apple-touch-icon" href="/favicons/apple-touch-icon.png" sizes="180x180">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="stylesheet.css">

</head>

<body>
  <a class="lil-wayne-logo" href="index.php">
    <img src="assets/svg's/main-logo.svg" alt="Lil Wayne text logo" class="main-logo">
  </a>
  <!-- Navigation Menu -->
  <nav class="nav-menu">
    <a href="#news">News</a>
    <a href="#tour-dates">Tour Dates</a>
    <a href="#lil-wayne">Lil Wayne</a>
    <a href="#discography">Discography</a>
    <a href="#gallery">Gallery</a>
  </nav>
  <!-- News -->
  <section id="news">
    <h1>Latest Lil Wayne News:</h1>
    <div class="news-section">
      <article class="main-article">
        <div class="main-article-image">
          <img src="assets/images/news/main-article.jpg" alt="Lil Wayne performing on stage">
        </div>
        <div class="main-article-content">
          <p class="article-date" data-published="2025-03-05T10:00:00Z"></p>
          <h2 class="article-title">Lil Wayne concert at Donald L. Tucker Civic Center canceled due to ‘unforeseen circumstances’.</h2>
          <p class="article-description">Lil Wayne was expected to play this Thursday with special guests Quavo and Anella...</p>
        </div>
      </article>
      <aside class="related-articles">
        <artile class="related-article">
          <div class="related-article-image">
            <img src="assets/images/news/related-article-1.jpg" alt="Lil Wayne stood in the middle of a full crowd stadium" class="related-article-image">
          </div>
          <div class="related-article-content">
            <p class="article-date" data-published="2025-03-05T10:00:00Z"></p>
            <h3 class="article-title">Lil Wayne feels hurt after being passed over as Super Bowl halftime headliner.</h3>
            <p class="article-description">Lil Wayne opens up about the super bowl performance...</p>
          </div>
        </artile>
        <artile class="related-article">
          <div class="related-article-image">
            <img src="assets/images/news/related-article-2.jpg" alt="Lil Wayne stood in the middle of a full crowd stadium" class="related-article-image">
          </div>
          <div class="related-article-content">
            <p class="article-date" data-published="2025-03-05T10:00:00Z"></p>
            <h3 class="article-title">Lil Wayne feels hurt after being passed over as Super Bowl halftime headliner.</h3>
            <p class="article-description">Lil Wayne opens up about the super bowl performance...</p>
          </div>
        </artile>
        <artile class="related-article">
          <div class="related-article-image">
            <img src="assets/images/news/related-article-3.jpg" alt="Lil Wayne stood in the middle of a full crowd stadium" class="related-article-image">
          </div>
          <div class="related-article-content">
            <p class="article-date" data-published="2025-03-05T10:00:00Z"></p>
            <h3 class="article-title">Lil Wayne feels hurt after being passed over as Super Bowl halftime headliner.</h3>
            <p class="article-description">Lil Wayne opens up about the super bowl performance...</p>
          </div>
        </artile>
      </aside>
    </div>
    <a href="#" class="see-more-articles">
      <p>See All</p>
      <img src="assets/svg's/red-right-arrow.svg" alt="Arrow to indicate next page">
    </a>
  </section>
  <!-- Tour Dates -->
  <section id="tour-dates">
    <h2 class="h1">Upcoming Tour Dates:</h2>
    <div class="tour-section">
      <img src="assets/svg's/i-am-music.svg" alt="I AM MUSIC svg the same as his face tattoo" class="i-am-music">
      <article class="tour-date one">
        <div class="arrow-text-wrapper">
          <img src="assets/svg's/red-right-arrow.svg" class="arrow-hover-state" alt="Arrow to idnicate hover on section">
          <h3 class="city">Birmingham, AL</h3>
        </div>
        <time class="date" datetime="2025-03-7">Mar 07</time>
        <p class="venue">Legacy Arena at The BKCC</p>
        <div class="tour-actions">
          <a href="#" class="btn btn-outline">Tickets</a>
          <a href="#" class="btn btn-rsvp">RSVP</a>
        </div>
      </article>
      <article class="tour-date two">
        <div class="arrow-text-wrapper">
          <img src="assets/svg's/red-right-arrow.svg" class="arrow-hover-state" alt="Arrow to idnicate hover on section">
          <h3 class="city">Norfolk, VA</h3>
        </div>
        <time class="date" datetime="2025-03-14">Mar 14</time>
        <p class="venue">Chartway Arena</p>
        <div class="tour-actions">
          <a href="#" class="btn btn-outline">Tickets</a>
          <a href="#" class="btn btn-rsvp">RSVP</a>
        </div>
      </article>
      <article class="tour-date three">
        <div class="arrow-text-wrapper">
          <img src="assets/svg's/red-right-arrow.svg" class="arrow-hover-state" alt="Arrow to idnicate hover on section">
          <h3 class="city">Raleigh, NC</h3>
        </div>
        <time class="date" datetime="2025-03-15">Mar 15</time>
        <p class="venue">Lenovo Center</p>
        <div class="tour-actions">
          <a href="#" class="btn btn-outline">Tickets</a>
          <a href="#" class="btn btn-rsvp">RSVP</a>
        </div>
      </article>
    </div>
    <a href="#" class="see-more-articles">
      <p>See All</p>
      <img src="assets/svg's/red-right-arrow.svg" alt="Arrow to indicate next page">
    </a>
  </section>
  <!-- Bio/Lil Wayne -->
  <section id="lil-wayne">
    <h2 class="h1">Bio:</h2>
    <div class="bio-section">
      <img src="assets/svg's/fear.svg" alt="Fear tattoo from Lil Waynes eyelid" class="fear-tattoo">
      <article class="bio-details">
        <h3 class="name">Name</h3>
        <p>Dwayne Michael Carter Jr., known professionally as Lil Wayne.</p>
        <h3 class="age">Age</h3>
        <p>Born: 27 September 1982 (age 42), New Orleans, Louisiana, United States.</p>
        <h3 class="record-labels">Record Labels</h3>
        <p>Young Money Entertainment.</p>
        <p class="description">Lil Wayne is an American rapper. He is often regarded as one of the most influential hip hop artists of his generation, as well as one of the greatest rappers of all time.</p>
      </article>
      <div class="rapper-rating">
        <div class="overall-rating">
          <h2 class="rapper-rating-title">Rapper Raiting</h2>
          <div class="rating-wheel-wrapper">
            <p class="overall-rating-text">92/100</p>
            <div class="rating-wheel">
              <?php
              $score = 92; // Dynamic Score
              $maxScore = 100;
              $radius = 45; // Circle Radius
              $circumference = 2 * pi() * $radius;

              // Calculate dynamic stroke-dashoffset
              $offset = $circumference - ($score / $maxScore) * $circumference;
              ?>
              <svg class="progress-circle" width="100" height="100" viewBox="0 0 100 100">
                <!-- Background Circle -->
                <circle class="circle-bg" cx="50" cy="50" r="45" stroke="#DDA09A" stroke-width="7" fill="none" />
                <!-- Foreground Progress Circle -->
                <circle class="circle-fill" cx="50" cy="50" r="<?php echo $radius; ?>"
                  stroke="#B42C1E" stroke-width="7"
                  stroke-linecap="round"
                  fill="none"
                  stroke-dasharray="<?php echo $circumference; ?>"
                  stroke-dashoffset="<?php echo $offset; ?>"
                  transform="rotate(-90 50 50)" />
              </svg>
            </div>
          </div>
        </div>
        <div class="rating-breakdown">
          <div class="column-one">
            <article class="rating-card lyricism">
              <img src="assets/svg's/microphone.svg" alt="Microphone to represent lyricism and rapping" class="microphone">
              <div class="rating-card-text">
                <h3>Lyricism</h3>
                <p>Measures wordplay, flow, storytelling, and lyrical creativity.</p>
              </div>
              <div class="rating-card-rating">
                <p class="score">23/25</p>
                <div class="score-bar-wrapper">
                  <div class="background-bar"></div>
                  <div class="fill-bar" style="width: <?php echo calculateRedBarWidth(23, 25); ?>px;"></div>
                  <img src="assets/svg's/pill-outline.svg" alt="Score pills to visually show amount" class="pill-outline">
                </div>
              </div>
            </article>
            <article class="rating-card influence">
              <img src="assets/svg's/world.svg" alt="World to represent influence" class="world">
              <div class="rating-card-text">
                <h3>Influence</h3>
                <p>Evaluates cultural impact, legacy, and industry reach.</p>
              </div>
              <div class="rating-card-rating">
                <p class="score">25/25</p>
                <div class="score-bar-wrapper">
                  <div class="background-bar"></div>
                  <div class="fill-bar" style="width: <?php echo calculateRedBarWidth(25, 25); ?>px;"></div>
                  <img src="assets/svg's/pill-outline.svg" alt="Score pills to visually show amount" class="pill-outline">
                </div>
              </div>
            </article>
          </div>
          <div class="column-two">
            <article class="rating-card discography">
              <img src="assets/svg's/music-symbol.svg" alt="Music symbol to represent music catalogue" class="music-symbol">
              <div class="rating-card-text">
                <h3>Discography</h3>
                <p>Rates the quality and consistency of albums and features.</p>
              </div>
              <div class="rating-card-rating">
                <p class="score">20/25</p>
                <div class="score-bar-wrapper">
                  <div class="background-bar"></div>
                  <div class="fill-bar" style="width: <?php echo calculateRedBarWidth(20, 25); ?>px;"></div>
                  <img src="assets/svg's/pill-outline.svg" alt="Score pills to visually show amount" class="pill-outline">
                </div>
              </div>
            </article>
            <article class="rating-card creativity">
              <img src="assets/svg's/light-bulb.svg" alt="Lightbulb to represent creativity and ideas" class="light-bulb">
              <div class="rating-card-text">
                <h3>Creativity</h3>
                <p>Assesses innovation, artistic vision, and originality.</p>
              </div>
              <div class="rating-card-rating">
                <p class="score">24/25</p>
                <div class="score-bar-wrapper">
                  <div class="background-bar"></div>
                  <div class="fill-bar" style="width: <?php echo calculateRedBarWidth(24, 25); ?>px;"></div>
                  <img src="assets/svg's/pill-outline.svg" alt="Score pills to visually show amount" class="pill-outline">
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="see-more-articles">
      <p>See All</p>
      <img src="assets/svg's/red-right-arrow.svg" alt="Arrow to indicate next page">
    </a>
  </section>
  <!-- Quotes -->
  <div class="quote-section">
    <div class="svg-wrapper">
      <img src="assets/svg's/c-tattoo.svg" alt="C tattoo from center of Lil Wayne's forehead" class="c-tattoo">
    </div>
    <div class="quote-container">
      <div class="quote-wrapper">
        <p class="quote">“I tried to pay attention but attention payed me”</p>
        <p class="credit">She Will | Tha Carter 4</p>
      </div>
      <div class="quote-wrapper">
        <p class="quote">“Jumped in the pool with her and her friend, none of us swim”</p>
        <p class="credit">Slip | Tha Fix Before Tha 6</p>
      </div>
      <div class="quote-wrapper">
        <p class="quote">“Didn't wear bullet proof and so I got shot and you can see the proof”</p>
        <p class="credit">Mr.Carter | Tha Carter 3</p>
      </div>
      <div class="quote-wrapper">
        <p class="quote">“Freedom was my girl until they f***ing took her”</p>
        <p class="credit">Blunt Blowing | Tha Carter 4</p>
      </div>
    </div>
  </div>
  <!-- Discography -->
  <section id="discography">
    <h2 class="h1 discography">Discography:</h2>
    <div class="tha-carter-series">
      <h3 class="carter-series-title">Tha Carter Series:</h3>
      <div class="column-one">
        <div class="flip-card carter-one">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="assets/images/carter-series/tha-carter-1.jpg" alt="Carter 1 album cover">
            </div>
            <div class="flip-card-back">
              <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/5POcKy926GgzFHZpGptJac?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        <div class="flip-card carter-two">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="assets/images/carter-series/tha-carter-2.jpg" alt="Carter 2 album cover">
            </div>
            <div class="flip-card-back">
              <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/7slHgsEMuJfnuft5LAPyw6?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="column-two">
        <div class="flip-card carter-three">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="assets/images/carter-series/tha-carter-3.jpg" alt="Carter 3 album cover">
            </div>
            <div class="flip-card-back">
              <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/1Do3y8IAcbYOToYQJnGwSO?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        <div class="flip-card carter-four">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="assets/images/carter-series/tha-carter-4.jpg" alt="Carter 4 album cover">
            </div>
            <div class="flip-card-back">
              <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/0pFydyko4Iw450abXlDPpp?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="column-three">
        <div class="flip-card carter-five">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="assets/images/carter-series/tha-carter-5.jpg" alt="Carter 5 album cover">
            </div>
            <div class="flip-card-back">
              <iframe style="border-radius:12px" src="https://open.spotify.com/embed/album/50yFYgKdwJANZ5O9MIbMkg?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        <div class="flip-card carter-six">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img src="assets/images/carter-series/tha-carter-6.jpg" alt="Carter 6 album cover">
            </div>
            <div class="flip-card-back">
              <h3>Coming Soon</h3>
              <p>June 06 2025</p>
              <a href="#" class="lean-more">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-wrapper">
      <div class="email-sign-up">
        <h3 class="sign-up-title">Keep up to date with Lil Wayne news</h3>
        <div class="enter-details">
          <!-- Form -->
          <form id="connect" class="contact-form" action="/includes/email-signup.php" method="POST">
            <fieldset>

              <!-- First Name -->
              <div class="contact-form__field name">
                <label for="full-name"></label>
                <input type="text" id="full-name" name="name" class="contact-form__input" placeholder="First Name" required>
              </div>

              <!-- Last Name (optional, add if needed) -->
              <div class="contact-form__field last-name">
                <label for="last-name"></label>
                <input type="text" id="last-name" name="last_name" class="contact-form__input" placeholder="Last Name">
              </div>

              <!-- Email -->
              <div class="contact-form__field email">
                <label for="email"></label>
                <input type="email" id="email" name="email" class="contact-form__input" placeholder="Email Address" required>
              </div>

              <!-- Submit Button -->
              <button type="submit" class="contact-form__submit button">Sign Up</button>
            </fieldset>
          </form>
          <p class="subscribe-text">Subscribe to lilwaynesource.com newsletter</p>
        </div>
      </div>
      <div class="footer-content">
        <div class="website-categories">
          <div class="website">
            <div class="website-text-wrapper">
              <h3>Website</h3>
              <a href="#">About</a>
              <a href="#">Contact</a>
              <a href="#">Disclaimer</a>
              <a href="#">Privacy Policy</a>
            </div>
          </div>
          <div class="categories">
            <div class="categories-text-wrapper">
              <h3>Categories</h3>
              <a href="#">News</a>
              <a href="#">Tour Dates</a>
              <a href="#">All Music</a>
              <a href="#">Rapper Rating</a>
            </div>
          </div>
        </div>
        <div class="support-website">
          <div class="support-website-text-wrapper">
            <p>Support the website</p>
            <a href="#" class="lean-more">Learn More</a>
          </div>
        </div>
      </div>
      <p class="copywrite-text">Copyright © 2025 LilWayneSource All rights reserved.</p>
    </div>
    <script src="assets/scripts/date-updater.js" defer></script>
  </footer>
</body>

</html>