<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LetterLift</title>
    <link rel="icon" type="image/svg+xml" href="icons/favicon.webp" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <!-- GDPR Banner -->
    <div id="gdpr-banner" class="gdpr-banner">
      <div class="gdpr-content">
        <div>
          <h4>We use cookies</h4>
          <p>
            This website uses cookies to improve your experience and analyze
            traffic. By continuing to use the site, you agree to our use of
            cookies.
            <a href="cookie-policy.php">Learn more</a>
          </p>
        </div>
        <div class="gdpr-buttons">
          <button id="accept-all" class="gdpr-btn accept">Accept All</button>
          <button id="customize" class="gdpr-btn customize">Customize</button>
          <button id="reject-all" class="gdpr-btn reject">Reject All</button>
        </div>
      </div>
    </div>

    <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="header-content">
          <div class="logo">
            <a href="index.php">
              <img
                src="icons/logo-header.webp"
                alt="LetterLift"
                class="logo-img"
              />
            </a>
          </div>
          <nav class="nav">
            <ul class="nav-list">
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#how-it-works">How It Works</a></li>
              <li><a href="index.php#benefits">Benefits</a></li>
              <li><a href="index.php#pricing">Pricing</a></li>
              <li><a href="about.php">About Us</a></li>
            </ul>
          </nav>
          <div class="header-cta">
            <a href="index.php#pricing" class="btn btn-primary">Get Started</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Contact Us Content -->
    <main class="contact-page">
      <section class="contact-hero">
        <div class="container">
          <div class="section-header">
            <h1 class="section-title">Contact Us</h1>
            <p class="section-subtitle">
              Get in touch with our team for personalized assistance and support
            </p>
          </div>
        </div>
      </section>

      <section class="contact-content">
        <div class="container">
          <div class="contact-container">
            <!-- Contact Form -->
            <div class="contact-form-wrapper">
              <form class="contact-form" id="contact-form-page">
                <h3>Send us a Message</h3>
                <div class="form-group">
                  <label for="contact-name">Name *</label>
                  <input type="text" id="contact-name" name="name" required />
                </div>
                <div class="form-group">
                  <label for="contact-phone">Phone Number *</label>
                  <input type="tel" id="contact-phone" name="phone" required />
                </div>
                <div class="form-group">
                  <label for="contact-email">Email *</label>
                  <input
                    type="email"
                    id="contact-email"
                    name="email"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="contact-message">Message</label>
                  <textarea
                    id="contact-message"
                    name="message"
                    rows="6"
                    placeholder="Tell us how we can help you..."
                  ></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-large">
                  Send Message
                </button>
              </form>
            </div>

            <!-- Contact Information -->
            <div class="contact-info-wrapper">
              <div class="contact-info-section">
                <h3>Get in Touch</h3>
                <p>
                  We're here to help you create compelling letters that get
                  results. Reach out to us through any of the channels below.
                </p>

                <div class="contact-details">
                  <div class="contact-item">
                    <div class="contact-icon">
                      <img src="icons/email-icon.svg" alt="Email" />
                    </div>
                    <div class="contact-text">
                      <h4>Email</h4>
                      <a href="mailto:support@letterliftapp.com"
                        >support@letterliftapp.com</a
                      >
                    </div>
                  </div>

                  <div class="contact-item">
                    <div class="contact-icon">
                      <img src="icons/phone-icon.webp" alt="Phone" />
                    </div>
                    <div class="contact-text">
                      <h4>Phone</h4>
                      <a href="tel:+14243250598">+1 (424) 325-05-98</a>
                    </div>
                  </div>

                  <div class="contact-item">
                    <div class="contact-icon">
                      <img src="icons/clock-icon.svg" alt="Hours" />
                    </div>
                    <div class="contact-text">
                      <h4>Business Hours</h4>
                      <p>Monday to Friday, 9AM to 6PM EST</p>
                    </div>
                  </div>

                  <div class="contact-item">
                    <div class="contact-icon">
                      <img src="icons/location-icon.svg" alt="Location" />
                    </div>
                    <div class="contact-text">
                      <h4>Address</h4>
                      <p>
                        1230 Rosecrans Ave Suite 300<br />Manhattan Beach, CA
                        90266
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Map Section -->
      <section class="map-section">
        <div class="container">
          <div class="map-container">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.4234567890123!2d-118.3925163!3d33.9013708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b40768160bcb%3A0xcc7d7de4d99212e3!2s1230%20Rosecrans%20Ave%20%23300%2C%20Manhattan%20Beach%2C%20CA%2090266!5e0!3m2!1sen!2sus!4v1234567890123!5m2!1sen!2sus"
              width="100%"
              height="400"
              style="border: 0; border-radius: 12px"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            >
            </iframe>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer-content">
          <div class="footer-brand">
            <a href="index.php">
              <img
                src="icons/logo-footer.webp"
                alt="LetterLift"
                class="footer-logo"
              />
            </a>
            <p class="footer-slogan">Professional letters made simple</p>
          </div>
          <div class="footer-column">
            <h4>Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#how-it-works">How It Works</a></li>
              <li><a href="index.php#benefits">Benefits</a></li>
              <li><a href="index.php#pricing">Pricing</a></li>
              <li><a href="about.php">About Us</a></li>
              <!-- <li><a href="contact.php">Contact Us</a></li> -->
            </ul>
          </div>
          <div class="footer-column">
            <h4>Legal</h4>
            <ul>
              <li><a href="privacy-policy.php">Privacy Policy</a></li>
              <li><a href="terms-of-service.php">Terms of Service</a></li>
              <li><a href="cookie-policy.php">Cookie Policy</a></li>
              <li><a href="refund-policy.php">Refund Policy</a></li>
              <li>
                <a href="cancel-subscription.php">Cancel Subscription</a>
              </li>
            </ul>
          </div>
          <div class="footer-column">
            <h4>Contact</h4>
            <ul>
              <li><a href="contact.php">Contact Us</a></li>
              <li>
                <a href="mailto:support@letterliftapp.com"
                  >support@letterliftapp.com</a
                >
              </li>
              <li><a href="tel:+14243250598">+1 (424) 325-05-98</a></li>
              <li>
                1230 Rosecrans Ave Suite 300<br />Manhattan Beach, CA 90266
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2025 LetterLift. All rights reserved.</p>
          <p>LetterLift is a service of Noventra Consulting Group</p>
        </div>
      </div>
    </footer>

    <!-- Pop-up Modals -->
    <div id="contact-success-modal" class="modal">
      <div class="modal-content">
        <h3>Thank You!</h3>
        <p>We will contact you shortly</p>
        <button class="btn btn-primary modal-close">Close</button>
      </div>
    </div>

    <script src="js/main.js"></script>
    <script>
      // Additional contact form handling
      document
        .getElementById("contact-form-page")
        .addEventListener("submit", function (e) {
          e.preventDefault();

          // Get form data
          const formData = new FormData(this);
          const name = formData.get("name");
          const phone = formData.get("phone");
          const email = formData.get("email");
          const message = formData.get("message");

          // Basic validation
          if (!name || !phone || !email) {
            alert("Please fill in all required fields.");
            return;
          }

          // Email validation
          if (!window.LetterLift.validateEmail(email)) {
            alert("Please enter a valid email address.");
            return;
          }

          // Phone validation
          if (!window.LetterLift.validatePhone(phone)) {
            alert("Please enter a valid phone number.");
            return;
          }

          // Simulate form submission
          setTimeout(() => {
            window.LetterLift.showModal("contact-success-modal");
            this.reset();
          }, 1000);
        });
    </script>
  </body>
</html>
