<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DeenPath Registration</title>
  <link rel="icon" type="image/png" href="pics/logo.jpg">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Scheherazade&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* ===== Global Reset ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* ===== Body Styling ===== */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.85), rgba(51, 51, 51, 0.7)),
                  url('pics/quranbg.jpg') no-repeat center center/cover;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      color: white;
      position: relative;
    }

    /* ===== Floating Particles ===== */
    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      overflow: hidden;
    }

    .particle {
      position: absolute;
      border-radius: 50%;
      filter: blur(2px);
      animation: floatUp linear infinite;
    }

    @keyframes floatUp {
      0% { transform: translateY(100vh); opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { transform: translateY(-10vh); opacity: 0; }
    }

    /* ===== Form Container ===== */
    .registration-container {
      position: relative;
      z-index: 2;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(15px);
      padding: 35px;
      border-radius: 20px;
      width: 400px;
      max-width: 90%;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5),
                  0 0 50px rgba(255, 215, 0, 0.3);
      border: 1px solid rgba(255, 215, 0, 0.4);
      animation: fadeIn 1s ease-out;
      transform: translateY(0);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ===== Heading ===== */
    .registration-container h2 {
      text-align: center;
      font-size: 2rem;
      color: gold;
      margin-bottom: 25px;
      text-shadow: 0 0 10px rgba(255, 215, 0, 0.6);
    }

    /* ===== Input Groups ===== */
    .form-group {
      position: relative;
      margin-bottom: 20px;
    }

    .form-group i {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: gold;
      font-size: 18px;
    }

    .registration-container input,
    .registration-container select {
      width: 100%;
      padding: 12px 12px 12px 45px;
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.15);
      color: white;
      font-size: 15px;
      outline: none;
      transition: 0.3s;
    }

    .registration-container input:focus,
    .registration-container select:focus {
      background: rgba(255, 255, 255, 0.3);
      border: 1px solid gold;
      box-shadow: 0 0 10px rgba(255, 215, 0, 0.6);
    }

    /* ===== Password Toggle ===== */
    .password-toggle {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: gold;
      font-size: 16px;
    }

    /* ===== Checkboxes ===== */
    .checkbox-container {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 14px;
      margin-bottom: 15px;
    }

    .checkbox-container input {
      width: auto;
      transform: scale(1.2);
      cursor: pointer;
    }

    .checkbox-container label a {
      color: gold;
      text-decoration: none;
    }

    /* ===== Submit Button ===== */
    .registration-container input[type="submit"] {
      background: linear-gradient(135deg, goldenrod, gold);
      color: black;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .registration-container input[type="submit"]:hover {
      background: linear-gradient(135deg, gold, goldenrod);
      box-shadow: 0 5px 15px rgba(255, 215, 0, 0.5);
    }

    /* ===== Login Link ===== */
    .login-link {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: #ccc;
    }

    .login-link a {
      color: gold;
      text-decoration: none;
    }

    /* ===== Success Popup ===== */
    .success-message {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0);
      background: rgba(0, 77, 64, 0.95);
      color: white;
      padding: 25px;
      border-radius: 15px;
      text-align: center;
      width: 90%;
      max-width: 350px;
      opacity: 0;
      transition: 0.4s ease;
      z-index: 999;
    }

    .success-message.show {
      transform: translate(-50%, -50%) scale(1);
      opacity: 1;
    }

    .success-message i {
      font-size: 40px;
      color: gold;
      margin-bottom: 10px;
      animation: bounce 1s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
    }

    /* ===== Error Message ===== */
    .error-message {
      position: fixed;
      top: 20px;
      right: 20px;
      background: rgba(220, 53, 69, 0.9);
      color: white;
      padding: 15px;
      border-radius: 10px;
      max-width: 300px;
      transform: translateX(400px);
      transition: transform 0.3s ease;
      z-index: 1000;
    }

    .error-message.show {
      transform: translateX(0);
    }

    /* ===== Data Display Section ===== */
    .data-display {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 15px;
      border-radius: 10px;
      max-width: 300px;
      max-height: 200px;
      overflow-y: auto;
      transform: translateY(400px);
      transition: transform 0.3s ease;
      z-index: 1000;
    }

    .data-display.show {
      transform: translateY(0);
    }

    .data-display h4 {
      color: gold;
      margin-bottom: 10px;
    }

    .data-display button {
      background: gold;
      color: black;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    /* ===== Mobile Responsive ===== */
    @media (max-width: 480px) {
      .registration-container {
        padding: 25px;
      }
      .registration-container h2 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>
  <!-- Floating Background Particles -->
  <div class="particles" id="particles"></div>

  <!-- Success Popup -->
  <div class="success-message" id="successMessage">
    <i class="fas fa-check-circle"></i>
    <h3>Registration Successful!</h3>
    <p>Redirecting to home page...</p>
  </div>

  <!-- Error Message -->
  <div class="error-message" id="errorMessage"></div>

  <!-- Data Display Section -->
  <div class="data-display" id="dataDisplay">
    <h4>User Data</h4>
    <div id="userDataContent"></div>
    <button id="toggleDataDisplay">Hide Data</button>
  </div>

  <!-- Registration Form -->
  <form id="registrationForm" class="registration-container">
    <h2>Create Account</h2>

    <div class="form-group">
      <i class="fas fa-user"></i>
      <input type="text" name="fullName" placeholder="Full Name" required>
    </div>

    <div class="form-group">
      <i class="fas fa-envelope"></i>
      <input type="email" name="email" placeholder="Email Address" required>
    </div>

    <div class="form-group">
      <i class="fas fa-lock"></i>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <span class="password-toggle" onclick="togglePassword('password')">
        <i class="fas fa-eye"></i>
      </span>
    </div>

    <div class="form-group">
      <i class="fas fa-lock"></i>
      <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
      <span class="password-toggle" onclick="togglePassword('confirmPassword')">
        <i class="fas fa-eye"></i>
      </span>
    </div>

<div class="form-group">
  <i class="fas fa-globe"></i>
  <select name="country" required>
    <option value="" disabled selected>Select Country</option>
    <option value="afghanistan">Afghanistan</option>
    <option value="albania">Albania</option>
    <option value="algeria">Algeria</option>
    <option value="andorra">Andorra</option>
    <option value="angola">Angola</option>
    <option value="antigua-and-barbuda">Antigua and Barbuda</option>
    <option value="argentina">Argentina</option>
    <option value="armenia">Armenia</option>
    <option value="australia">Australia</option>
    <option value="austria">Austria</option>
    <option value="azerbaijan">Azerbaijan</option>
    <option value="bahamas">Bahamas</option>
    <option value="bahrain">Bahrain</option>
    <option value="bangladesh">Bangladesh</option>
    <option value="barbados">Barbados</option>
    <option value="belarus">Belarus</option>
    <option value="belgium">Belgium</option>
    <option value="belize">Belize</option>
    <option value="benin">Benin</option>
    <option value="bhutan">Bhutan</option>
    <option value="bolivia">Bolivia</option>
    <option value="bosnia-and-herzegovina">Bosnia and Herzegovina</option>
    <option value="botswana">Botswana</option>
    <option value="brazil">Brazil</option>
    <option value="brunei">Brunei</option>
    <option value="bulgaria">Bulgaria</option>
    <option value="burkina-faso">Burkina Faso</option>
    <option value="burundi">Burundi</option>
    <option value="cabo-verde">Cabo Verde</option>
    <option value="cambodia">Cambodia</option>
    <option value="cameroon">Cameroon</option>
    <option value="canada">Canada</option>
    <option value="central-african-republic">Central African Republic</option>
    <option value="chad">Chad</option>
    <option value="chile">Chile</option>
    <option value="china">China</option>
    <option value="colombia">Colombia</option>
    <option value="comoros">Comoros</option>
    <option value="congo">Congo</option>
    <option value="costa-rica">Costa Rica</option>
    <option value="croatia">Croatia</option>
    <option value="cuba">Cuba</option>
    <option value="cyprus">Cyprus</option>
    <option value="czech-republic">Czech Republic</option>
    <option value="denmark">Denmark</option>
    <option value="djibouti">Djibouti</option>
    <option value="dominica">Dominica</option>
    <option value="dominican-republic">Dominican Republic</option>
    <option value="ecuador">Ecuador</option>
    <option value="egypt">Egypt</option>
    <option value="el-salvador">El Salvador</option>
    <option value="equatorial-guinea">Equatorial Guinea</option>
    <option value="eritrea">Eritrea</option>
    <option value="estonia">Estonia</option>
    <option value="eswatini">Eswatini</option>
    <option value="ethiopia">Ethiopia</option>
    <option value="fiji">Fiji</option>
    <option value="finland">Finland</option>
    <option value="france">France</option>
    <option value="gabon">Gabon</option>
    <option value="gambia">Gambia</option>
    <option value="georgia">Georgia</option>
    <option value="germany">Germany</option>
    <option value="ghana">Ghana</option>
    <option value="greece">Greece</option>
    <option value="grenada">Grenada</option>
    <option value="guatemala">Guatemala</option>
    <option value="guinea">Guinea</option>
    <option value="guinea-bissau">Guinea-Bissau</option>
    <option value="guyana">Guyana</option>
    <option value="haiti">Haiti</option>
    <option value="honduras">Honduras</option>
    <option value="hungary">Hungary</option>
    <option value="iceland">Iceland</option>
    <option value="india">India</option>
    <option value="indonesia">Indonesia</option>
    <option value="iran">Iran</option>
    <option value="iraq">Iraq</option>
    <option value="ireland">Ireland</option>
    <option value="israel">Israel</option>
    <option value="italy">Italy</option>
    <option value="jamaica">Jamaica</option>
    <option value="japan">Japan</option>
    <option value="jordan">Jordan</option>
    <option value="kazakhstan">Kazakhstan</option>
    <option value="kenya">Kenya</option>
    <option value="kiribati">Kiribati</option>
    <option value="kuwait">Kuwait</option>
    <option value="kyrgyzstan">Kyrgyzstan</option>
    <option value="laos">Laos</option>
    <option value="latvia">Latvia</option>
    <option value="lebanon">Lebanon</option>
    <option value="lesotho">Lesotho</option>
    <option value="liberia">Liberia</option>
    <option value="libya">Libya</option>
    <option value="liechtenstein">Liechtenstein</option>
    <option value="lithuania">Lithuania</option>
    <option value="luxembourg">Luxembourg</option>
    <option value="madagascar">Madagascar</option>
    <option value="malawi">Malawi</option>
    <option value="malaysia">Malaysia</option>
    <option value="maldives">Maldives</option>
    <option value="mali">Mali</option>
    <option value="malta">Malta</option>
    <option value="marshall-islands">Marshall Islands</option>
    <option value="mauritania">Mauritania</option>
    <option value="mauritius">Mauritius</option>
    <option value="mexico">Mexico</option>
    <option value="micronesia">Micronesia</option>
    <option value="moldova">Moldova</option>
    <option value="monaco">Monaco</option>
    <option value="mongolia">Mongolia</option>
    <option value="montenegro">Montenegro</option>
    <option value="morocco">Morocco</option>
    <option value="mozambique">Mozambique</option>
    <option value="myanmar">Myanmar</option>
    <option value="namibia">Namibia</option>
    <option value="nauru">Nauru</option>
    <option value="nepal">Nepal</option>
    <option value="netherlands">Netherlands</option>
    <option value="new-zealand">New Zealand</option>
    <option value="nicaragua">Nicaragua</option>
    <option value="niger">Niger</option>
    <option value="nigeria">Nigeria</option>
    <option value="north-korea">North Korea</option>
    <option value="north-macedonia">North Macedonia</option>
    <option value="norway">Norway</option>
    <option value="oman">Oman</option>
    <option value="pakistan">Pakistan</option>
    <option value="palau">Palau</option>
    <option value="palestine">Palestine</option>
    <option value="panama">Panama</option>
    <option value="papua-new-guinea">Papua New Guinea</option>
    <option value="paraguay">Paraguay</option>
    <option value="peru">Peru</option>
    <option value="philippines">Philippines</option>
    <option value="poland">Poland</option>
    <option value="portugal">Portugal</option>
    <option value="qatar">Qatar</option>
    <option value="romania">Romania</option>
    <option value="russia">Russia</option>
    <option value="rwanda">Rwanda</option>
    <option value="saint-kitts-and-nevis">Saint Kitts and Nevis</option>
    <option value="saint-lucia">Saint Lucia</option>
    <option value="saint-vincent-and-the-grenadines">Saint Vincent and the Grenadines</option>
    <option value="samoa">Samoa</option>
    <option value="san-marino">San Marino</option>
    <option value="sao-tome-and-principe">Sao Tome and Principe</option>
    <option value="saudi-arabia">Saudi Arabia</option>
    <option value="senegal">Senegal</option>
    <option value="serbia">Serbia</option>
    <option value="seychelles">Seychelles</option>
    <option value="sierra-leone">Sierra Leone</option>
    <option value="singapore">Singapore</option>
    <option value="slovakia">Slovakia</option>
    <option value="slovenia">Slovenia</option>
    <option value="solomon-islands">Solomon Islands</option>
    <option value="somalia">Somalia</option>
    <option value="south-africa">South Africa</option>
    <option value="south-korea">South Korea</option>
    <option value="south-sudan">South Sudan</option>
    <option value="spain">Spain</option>
    <option value="sri-lanka">Sri Lanka</option>
    <option value="sudan">Sudan</option>
    <option value="suriname">Suriname</option>
    <option value="sweden">Sweden</option>
    <option value="switzerland">Switzerland</option>
    <option value="syria">Syria</option>
    <option value="taiwan">Taiwan</option>
    <option value="tajikistan">Tajikistan</option>
    <option value="tanzania">Tanzania</option>
    <option value="thailand">Thailand</option>
    <option value="timor-leste">Timor-Leste</option>
    <option value="togo">Togo</option>
    <option value="tonga">Tonga</option>
    <option value="trinidad-and-tobago">Trinidad and Tobago</option>
    <option value="tunisia">Tunisia</option>
    <option value="turkey">Turkey</option>
    <option value="turkmenistan">Turkmenistan</option>
    <option value="tuvalu">Tuvalu</option>
    <option value="uganda">Uganda</option>
    <option value="ukraine">Ukraine</option>
    <option value="united-arab-emirates">United Arab Emirates</option>
    <option value="united-kingdom">United Kingdom</option>
    <option value="united-states">United States</option>
    <option value="uruguay">Uruguay</option>
    <option value="uzbekistan">Uzbekistan</option>
    <option value="vanuatu">Vanuatu</option>
    <option value="vatican-city">Vatican City</option>
    <option value="venezuela">Venezuela</option>
    <option value="vietnam">Vietnam</option>
    <option value="yemen">Yemen</option>
    <option value="zambia">Zambia</option>
    <option value="zimbabwe">Zimbabwe</option>
    <option value="other">Other</option>
  </select>
</div>

    <div class="checkbox-container">
      <input type="checkbox" id="terms" required>
      <label for="terms">I agree to the <a href="#">Terms & Conditions</a></label>
    </div>

    <div class="checkbox-container">
      <input type="checkbox" id="newsletter">
      <label for="newsletter">Subscribe to our newsletter</label>
    </div>

    <input type="submit" value="Register Now">

    <div class="login-link">
      Already have an account? <a href="login.html">Login here</a>
    </div>
  </form>

  <script>
    // ===== Floating Particles Script =====
    document.addEventListener('DOMContentLoaded', () => {
      const particlesContainer = document.getElementById('particles');
      const colors = ['rgba(255,215,0,0.7)', 'rgba(255,255,255,0.6)', 'rgba(0,191,255,0.6)'];

      for (let i = 0; i < 40; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');

        const size = Math.random() * 5 + 3;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;

        particle.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        particle.style.left = `${Math.random() * 100}%`;

        const duration = Math.random() * 10 + 10;
        particle.style.animationDuration = `${duration}s`;

        particlesContainer.appendChild(particle);
      }
      
      // Initialize user data storage
      initializeUserDataStorage();
      
      // Check if there's existing user data and display it
      displayUserData();
    });

    // ===== Initialize User Data Storage =====
    function initializeUserDataStorage() {
      // Check if user data exists in localStorage
      if (!localStorage.getItem('deenpath_users')) {
        // If not, create an empty array
        localStorage.setItem('deenpath_users', JSON.stringify([]));
      }
    }

    // ===== Password Toggle =====
    function togglePassword(fieldId) {
      const field = document.getElementById(fieldId);
      const icon = field.nextElementSibling.querySelector('i');

      if (field.type === "password") {
        field.type = "text";
        icon.classList.replace('fa-eye', 'fa-eye-slash');
      } else {
        field.type = "password";
        icon.classList.replace('fa-eye-slash', 'fa-eye');
      }
    }

    // ===== Form Validation & Submission =====
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
      e.preventDefault();

      // Get form values
      const fullName = document.querySelector('input[name="fullName"]').value;
      const email = document.querySelector('input[name="email"]').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
      const country = document.querySelector('select[name="country"]').value;
      const termsAccepted = document.getElementById('terms').checked;
      const newsletterSubscribed = document.getElementById('newsletter').checked;
      
      // Validation
      if (password !== confirmPassword) {
        showError('Passwords do not match!');
        return;
      }
      
      if (password.length < 6) {
        showError('Password must be at least 6 characters long!');
        return;
      }
      
      if (!termsAccepted) {
        showError('You must accept the terms and conditions!');
        return;
      }
      
      // Create user object
      const newUser = {
        id: Date.now(), // Simple unique ID
        fullName,
        email,
        password, // In a real app, this should be hashed
        country,
        termsAccepted,
        newsletterSubscribed,
        registrationDate: new Date().toISOString()
      };
      
      // Save user data
      saveUserData(newUser);
      
      // Show success popup
      const successPopup = document.getElementById('successMessage');
      successPopup.classList.add('show');

      // Redirect after 2.5s
      setTimeout(() => {
        successPopup.classList.remove('show');
        window.location.href = 'index.html';
      }, 2500);
    });

    // ===== Save User Data =====
    function saveUserData(user) {
      // Get existing users from localStorage
      const users = JSON.parse(localStorage.getItem('deenpath_users')) || [];
      
      // Check if email already exists
      const emailExists = users.some(u => u.email === user.email);
      if (emailExists) {
        showError('An account with this email already exists!');
        return false;
      }
      
      // Add new user to the array
      users.push(user);
      
      // Save updated users array to localStorage
      localStorage.setItem('deenpath_users', JSON.stringify(users));
      
      // Also save to a JavaScript object for demonstration
      if (!window.deenpath_users) {
        window.deenpath_users = [];
      }
      window.deenpath_users.push(user);
      
      // Log user data to console (for demonstration)
      console.log('New user registered:', user);
      console.log('All users:', window.deenpath_users);
      
      // Update the data display
      displayUserData();
      
      return true;
    }

    // ===== Display User Data =====
    function displayUserData() {
      const users = JSON.parse(localStorage.getItem('deenpath_users')) || [];
      const dataDisplay = document.getElementById('dataDisplay');
      const userDataContent = document.getElementById('userDataContent');
      
      if (users.length === 0) {
        userDataContent.innerHTML = '<p>No users registered yet.</p>';
      } else {
        let html = '<ul>';
        users.forEach(user => {
          html += `<li><strong>${user.fullName}</strong> (${user.email}) - ${user.country}</li>`;
        });
        html += '</ul>';
        userDataContent.innerHTML = html;
      }
      
      // Show the data display
      dataDisplay.classList.add('show');
    }

    // ===== Toggle Data Display =====
    document.getElementById('toggleDataDisplay').addEventListener('click', function() {
      const dataDisplay = document.getElementById('dataDisplay');
      if (dataDisplay.classList.contains('show')) {
        dataDisplay.classList.remove('show');
        this.textContent = 'Show Data';
      } else {
        dataDisplay.classList.add('show');
        this.textContent = 'Hide Data';
      }
    });

    // ===== Show Error Message =====
    function showError(message) {
      const errorMessage = document.getElementById('errorMessage');
      errorMessage.textContent = message;
      errorMessage.classList.add('show');
      
      // Hide after 3 seconds
      setTimeout(() => {
        errorMessage.classList.remove('show');
      }, 3000);
    }
  </script>
  <?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO login (email, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! Please login now.'); window.location.href='login.html';</script>";
    } else {
        echo "<script>alert('Error: This email already exists!'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

</body>
</html>