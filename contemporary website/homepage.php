<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Philippine Contemporary Architecture</title>
  <style>

    /* Basic Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body styles */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-image: url(1b.jpg);
      background-size: cover;
      color: black;
    }

    /* Header styles */
    header {
      background-color: #transparent;
      padding: 20px;
      color: black;
      position: sticky;
      top: 0;
      z-index: 1000;
        box-shadow: 2px 2px 10px rgba(0,0,0,0.6);
    }

    header h1 {
      margin-bottom: 10px;
    }

    nav {
      margin-top: 10px;
    }

    nav a {
      color: black;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    /* Container styles */
    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 0 20px;
    }

    /* Sections */
    section {
      margin-bottom: 40px;
    }

    /* Gallery styles */
    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
    }

    .gallery-item {
      flex: 1 1 calc(33.333% - 20px);
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.6);
      transition: transform 0.3s;
    }

    .gallery-item:hover {
      transform: scale(1.02);
    }

    .gallery-item img {
      width: 100%;
      height: auto;
      display: block;
    }

    .gallery-item h3 {
      padding: 10px;
      font-size: 1.1em;
      text-align: center;
    }

    /* Detailed project section styles */
    .project-details {
      background-color: transparent;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.6);
      max-width: 800px;
      margin: 20px auto;
    }

    /* Footer styles */
    footer {
      background-color: transparent;
      color: #fff;
      text-align: center;
      padding: 15px 0;
      margin-top: 40px;
      box-shadow: 2px 2px 10px rgba(0,0,0,0.6);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .gallery {
        flex-direction: column;
      }
      .gallery-item {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Philippine Contemporary Architecture</h1>
    <nav>
      <a href="#home">Home</a>
      <a href="#designs">Designs</a>
      <a href="#project1">The Mind Museum</a>
      <a href="#project2">Natural History Museum</a>
      <a href="#project3">SOLAire Resort</a>
    </nav>
  </header>

  <!-- Home / Introduction -->
  <section id="home" class="container">
    <h2>Welcome</h2>
    <p>Explore the innovative and modern structures that define contemporary Philippine architecture. From eco-friendly museums to luxury towers, discover the design trends shaping the Philippines today.</p>
    <h2 id="designs">Our Featured Structures</h2>
    <div class="gallery">
      <div class="gallery-item">
        <a href="#project1"><img src="1.jpg" alt="The Mind Museum" /></a>
        <h3>The Mind Museum</h3>
      </div>
      <div class="gallery-item">
        <a href="#project2"><img src="2.jpg" alt="Natural History Museum" /></a>
        <h3>Natural History Museum</h3>
      </div>
      <div class="gallery-item">
        <a href="#project3"><img src="3.jpeg" alt="SOLAire Resort" /></a>
        <h3>SOLAire Resort</h3>
      </div>
    </div>
  </section>

  <!-- Project 1: The Mind Museum -->
  <section id="project1" class="container">
    <div class="project-details">
      <h2>The Mind Museum, Taguig</h2>
      <img src="1.jpg" alt="The Mind Museum" style="width:100%; border-radius:8px; margin-bottom:15px;">
      <h3>Overview</h3>
      <p>The Mind Museum in Taguig is a leading example of modern Philippine architecture, emphasizing sustainability, innovation, and educational engagement. Designed by Cottera & Partners, it features extensive use of glass, open spaces, and eco-friendly materials.</p>
      <h3>Architect & Year</h3>
      <p>Designed by Cottera & Partners, 2015.</p>
      <h3>Features</h3>
      <ul>
        <li>Sustainable design with green roofs and solar panels</li>
        <li>Open, airy spaces with natural lighting</li>
        <li>Innovative use of glass and steel</li>
      </ul>
    </div>
  </section>

  <!-- Project 2: Natural History Museum -->
  <section id="project2" class="container">
    <div class="project-details">
      <h2>National Museum of Natural History</h2>
      <img src="2.jpg" alt="Natural History Museum" style="width:100%; border-radius:8px; margin-bottom:15px;">
      <h3>Overview</h3>
      <p>This eco-friendly museum in Manila features vertical gardens and sustainable materials, emphasizing conservation and environmental awareness. It was designed to blend modernity with ecological principles.</p>
      <h3>Architect & Year</h3>
      <p>Ryan Younghans & Associates, 2019.</p>
      <h3>Features</h3>
      <ul>
        <li>Vertical gardens and green architecture</li>
        <li>Use of sustainable materials</li>
        <li>Natural lighting and ventilation</li>
      </ul>
    </div>
  </section>

  <!-- Project 3: Solaire Resort -->
  <section id="project3" class="container">
    <div class="project-details">
      <h2>SOLAire Resort & Casino, Parañaque</h2>
      <img src="3.jpeg" alt="SOLAire Resort" style="width:100%; border-radius:8px; margin-bottom:15px;">
      <h3>Overview</h3>
      <p>A luxurious resort with a sleek, modern aesthetic, Solaire combines high-tech design with Filipino hospitality. It showcases contemporary architecture with extensive use of glass and steel.</p>
      <h3>Architect & Year</h3>
      <p>CallisonRTKL, 2013.</p>
      <h3>Features</h3>
      <ul>
        <li>High-tech design and smart features</li>
        <li>Extensive glass facades</li>
        <li>Luxurious interior and exterior design</li>
      </ul>
    </div>
  </section>

  <footer>
    <p>&copy; 2026 Philippine Architecture Showcase</p>
  </footer>
</body>
</html>