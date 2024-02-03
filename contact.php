<?php
// Created by: janek22TheCoder
// Created on: 2022-07-14

echo '<h2>Contact The Most Secure Bank Solutions</h2>';
echo '<p>If you have any questions or concerns, please feel free to reach out to us using the form below. Our team is here to assist you promptly and securely.</p>';

echo '<form action="process.php" method="post" class="contact-form">';
echo '  <div class="form-group">';
echo '    <label for="name">Your Name:</label>';
echo '    <input type="text" id="name" name="name" required>';
echo '  </div>';
echo '  <div class="form-group">';
echo '    <label for="email">Your Email:</label>';
echo '    <input type="email" id="email" name="email" required>';
echo '  </div>';
echo '  <div class="form-group">';
echo '    <label for="message">Your Message:</label>';
echo '    <textarea id="message" name="message" rows="4" required></textarea>';
echo '  </div>';
echo '  <button type="submit">Submit</button>';
echo '</form>';