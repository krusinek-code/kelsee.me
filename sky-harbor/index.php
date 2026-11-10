<?php
$pageTitle = 'From Takeoff to Touchdown — Phoenix Sky Harbor Case Study | Kelsee Rusinek';
$pageDescription = 'How I helped architect, build, and hand off a scalable digital experience for Phoenix Sky Harbor International Airport.';
$pageStylesheet = 'sky-harbor.css';
$headerMode = 'compact';
$activeNav = '';
require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>
<main id="main" tabindex="-1">
  <article class="flight-case" aria-labelledby="case-title">
    <section class="flight-hero" id="top">
      <div class="hero-content">
        <div class="flight-kicker"><span class="live-dot" aria-hidden="true"></span> CASE STUDY / DIGITAL EXPERIENCE / PHOENIX, AZ</div>
        <p class="flight-number">PROJECT PHX / 001 &nbsp;·&nbsp; JAN 2022 — FEB 2023</p>
        <h1 id="case-title">From <em>takeoff</em><br>to <span class="touchdown">touchdown.</span></h1>
        <p class="hero-deck">How I helped bring Phoenix Sky Harbor's digital experience in for a landing—through architecture, engineering, collaboration, and a thoughtful handoff.</p>
        <div class="hero-actions"><a class="flight-button" href="#flight-plan">Explore the flight plan <span aria-hidden="true">↘</span></a><span class="hero-caption">One project. Many hands on deck.</span></div>
      </div>
      <div class="runway-art" aria-hidden="true">
        <div class="radar-ring radar-one"></div><div class="radar-ring radar-two"></div><div class="radar-ring radar-three"></div>
        <div class="runway-axis"><span></span><span></span><span></span><span></span><span></span><span></span></div>
        <div class="plane-glyph">✈</div>
        <div class="runway-coord">33°26′ N<br>112°00′ W</div>
        <div class="runway-tag">PHX / APPROACH</div>
      </div>
      <div class="flight-status" aria-label="Case study at a glance">
        <div><span>DESTINATION</span><strong>Phoenix Sky Harbor</strong></div>
        <div><span>MY ROLE</span><strong>Technical strategy, front-end &amp; client leadership</strong></div>
        <div><span>CREW</span><strong>RIESTER, designers, developers &amp; airport stakeholders</strong></div>
        <div><span>MISSION</span><strong>Build for the long haul</strong></div>
      </div>
    </section>

    <section class="manifest" id="flight-plan" aria-labelledby="manifest-title">
      <div class="section-meta">00 / THE MISSION</div>
      <div class="manifest-grid">
        <h2 id="manifest-title">No one lands a plane <em>alone.</em></h2>
        <div class="manifest-copy">
          <p class="lead">There's something fitting about building a website for an airport.</p>
          <p>Departures. Arrivals. Changing conditions. Thousands of travelers relying on the right information at the right time. Behind the seemingly simple experience is a coordinated system—and a crew making it work.</p>
          <p>On the Phoenix Sky Harbor website project, I helped translate complex requirements into a cohesive digital experience. From the initial pitch through launch and handoff, I served as the primary development representative, helping shape technical strategy, meeting with the airport’s project manager and stakeholders, building the complete front end, and supporting the team through delivery.</p>
          <p><strong>I wasn't the only person in the cockpit.</strong> But I took responsibility for the systems I was piloting, communicated across disciplines, and helped make sure the work could fly without me.</p>
        </div>
      </div>
      <div class="capability-strip" aria-label="Areas of contribution">
        <span>FRONT-END ARCHITECTURE</span><span>COMPONENT SYSTEMS</span><span>INTEGRATIONS</span><span>CLIENT COLLABORATION</span><span>QA &amp; HANDOFF</span>
      </div>
    </section>

    <section class="journey" aria-labelledby="journey-title">
      <div class="section-heading"><div><div class="section-meta">01—04 / FLIGHT LOG</div><h2 id="journey-title">The flight <em>plan.</em></h2></div><p>From early decisions to the final handoff, every stage needed a different kind of attention.</p></div>
      <div class="flight-track" aria-hidden="true"><span class="flight-track-plane">✈</span></div>

      <div class="phase" id="preflight">
        <div class="phase-index"><span>01</span><small>PRE-FLIGHT</small></div>
        <div class="phase-body"><div class="phase-overline">SET THE COURSE</div><h3>Understand the destination before building the runway.</h3><p>Good technical decisions begin with an understanding of the people, systems, and constraints involved. I hosted meetings with the airport’s project manager and stakeholders, translated requirements into technical solutions, and partnered with designers to ensure their concepts were practical to implement and maintain.</p><div class="phase-tags"><span>Technical planning</span><span>Stakeholder conversations</span><span>Scalable architecture</span></div></div>
      </div>
      <div class="phase">
        <div class="phase-index"><span>02</span><small>TAKEOFF</small></div>
        <div class="phase-body"><div class="phase-overline">BUILD THE FOUNDATION</div><h3>Make the system reusable, not just the pages beautiful.</h3><p>I built the complete front-end implementation with modular patterns, reusable components, and structured content models supporting an evolving airport website. The goal was consistency for travelers, flexibility for content teams, and a maintainable foundation for the developers who would inherit it.</p><div class="phase-tags"><span>Front-end engineering</span><span>Reusable components</span><span>Umbraco CMS</span></div></div>
      </div>
      <div class="phase">
        <div class="phase-index"><span>03</span><small>CRUISING ALTITUDE</small></div>
        <div class="phase-body"><div class="phase-overline">CONNECT THE SYSTEMS</div><h3>Real-time information meets real-world journeys.</h3><p>An airport website has to do more than look the part. I developed a custom homepage flight finder and searchable, filterable flight information; integrated parking availability and security checkpoint wait times; and supported a third-party parking reservation-request flow. I also built the “At the Airport” filtering experience for restaurants, shops, services, and amenities.</p><p>I collaborated with supporting developers on a nightly synchronization process for directory content sourced from a third-party system. The result relied on coordination among designers, developers, content teams, and airport stakeholders—not a lone engineer working in isolation.</p><div class="phase-tags"><span>Flight information</span><span>Parking &amp; security data</span><span>Custom flight finder</span><span>Content filtering</span></div></div>
      </div>
      <div class="phase">
        <div class="phase-index"><span>04</span><small>FINAL APPROACH</small></div>
        <div class="phase-body"><div class="phase-overline">LAND IT WELL</div><h3>A successful landing means someone else can take the controls.</h3><p>My involvement continued through content entry, leading the QA process and hands-on testing, helping train content editors, and coordinating with the airport's development team. Handoff wasn't an afterthought: it was part of building a system that could keep serving people long after launch.</p><div class="phase-tags"><span>QA</span><span>Content support</span><span>Training</span><span>Developer handoff</span></div></div>
      </div>
    </section>

    <section class="systems" aria-labelledby="systems-title">
      <div class="section-meta">THE EXPERIENCE / SYSTEMS IN MOTION</div>
      <h2 id="systems-title">More than <em>pages.</em></h2>
      <p class="systems-intro">The front end had to bring together content, interfaces, and operational information in ways that felt useful to travelers.</p>
      <div class="systems-grid">
        <div class="system-card"><span class="system-icon" aria-hidden="true">↗</span><span class="system-label">01 / WAYFINDING</span><h3>Flight finder</h3><p>A custom homepage flight finder and searchable, filterable flight information.</p></div>
        <div class="system-card"><span class="system-icon" aria-hidden="true">▤</span><span class="system-label">02 / OPERATIONS</span><h3>Parking &amp; wait times</h3><p>Parking availability, security wait times, and a third-party parking reservation-request integration.</p></div>
        <div class="system-card"><span class="system-icon" aria-hidden="true">⌕</span><span class="system-label">03 / DISCOVERY</span><h3>At the Airport</h3><p>Custom filtering for restaurants, shops, services, and airport amenities.</p></div>
        <div class="system-card"><span class="system-icon" aria-hidden="true">▦</span><span class="system-label">04 / FOUNDATIONS</span><h3>Modular front end</h3><p>Reusable patterns built for consistency and continued evolution.</p></div>
      </div>
      <p class="asset-note">Developed at RIESTER in collaboration with designers, supporting developers, and airport stakeholders. Project screenshots, architecture details, and independently verified outcomes can be added after review.</p>
    </section>

    <section class="crew-credits" aria-labelledby="credits-title">
      <div class="section-meta">THE CREW / PROJECT CREDITS</div>
      <h2 id="credits-title">A shared <em>flight plan.</em></h2>
      <p>This work was developed at <a href="https://riester.com/" target="_blank" rel="noopener noreferrer">RIESTER</a> for Phoenix Sky Harbor International Airport. I led major front-end and technical implementation responsibilities as part of a larger group of designers, developers, project leads, content teams, integration partners, and airport stakeholders.</p>
      <div class="crew-grid">
        <div><span>AGENCY</span><strong><a href="https://riester.com/" target="_blank" rel="noopener noreferrer">RIESTER</a></strong><p>Creative and digital agency responsible for the broader project team.</p></div>
        <div><span>AGENCY FOUNDER</span><strong><a href="https://riester.com/people/tim-riester" target="_blank" rel="noopener noreferrer">Tim Riester</a></strong><p>Founder and CEO of RIESTER. Agency leadership context, not an assertion of hands-on project involvement.</p></div>
        <div><span>PROJECT TEAM</span><strong>Design, development &amp; client partners</strong><p>Individual collaborators and LinkedIn profiles can be added after their specific contributions are confirmed.</p></div>
      </div>
    </section>

    <section class="landing" aria-labelledby="landing-title">
      <div class="landing-stamp">PHX <span aria-hidden="true">✳</span> ARRIVED</div>
      <div class="section-meta">05 / TOUCHDOWN</div>
      <h2 id="landing-title">The work doesn't end when the wheels touch <em>down.</em></h2>
      <p>For me, technical leadership isn't about taking all the credit. It's about knowing what you're responsible for, making room for the expertise around you, and leaving the next crew equipped to succeed.</p>
      <blockquote>“I don't just build websites. I help get complex digital projects off the ground, navigate the unexpected, and bring them safely in for landing.”</blockquote>
      <div class="landing-footer"><span>BUILT WITH A CREW. DESIGNED TO KEEP MOVING.</span><a href="/" class="flight-button">Back to kelsee.me <span aria-hidden="true">↗</span></a></div>
    </section>
  </article>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
