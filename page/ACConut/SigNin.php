<div class="Container-form-SigNin">
  <div class="Container-form">
    <div class="form-header-signin">
      <label>Sign in</label>
    </div>
    <form id="form-signin">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required />
      <button type="submit">Sign in</button>
    </form>
    <div class="form-footer-signin">
      <p>Don't have an account? <span><a href="index.php?page=Register">Register here</a></span></p>
    </div>
    <div id="error-message"></div>
  </div>
</div>
<script>
  const form = document.getElementById("form-signin");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const errorMessage = document.getElementById("error-message");

  form.addEventListener("submit", (event) => {
    event.preventDefault(); // Prevent the form from submitting
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          try {
            const response = JSON.parse(xhr.responseText);
            if (response.success) {
              alert("Login successful!");
              const userCookies = {
                user_id: response.user_id,
                user_email: emailInput.value,
                user_type: response.user_type,

              
              };
              for (const [key, value] of Object.entries(userCookies)) {
                document.cookie = `${key}=${value}; expires=${new Date(
                  Date.now() + 30 * 24 * 60 * 60 * 1000
                ).toUTCString()}; path=/`;
              }
              // Redirect to home page or other page
              window.location.href = "http://localhost/shopping/index.php?page=Home";
            } else {
              errorMessage.innerHTML = response.message;
            }
          } catch (error) {
            errorMessage.innerHTML = "Server error. Please try again later.";
            console.log(xhr.responseText);
          }
        } else {
          errorMessage.innerHTML = "Server error. Please try again later.";
          console.log(xhr.responseText);
        }
      }
    };
    xhr.open("POST", "http://localhost/shopping/page/Acconut/Api/ApiSigNin.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(`email=${emailInput.value}&password=${passwordInput.value}`);
  });
</script>