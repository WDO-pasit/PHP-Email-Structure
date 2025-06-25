function SendEmail() {
  const statusEl = document.getElementById('result');
  statusEl.textContent = "⏳ waiting send eamil...";
  statusEl.style.color = "gray";

  try {
    fetch(`${BASE_URL}API/email/email.php`, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value
      })
    })
    .then(response => response.json())
    .then(data => {
      console.log("Response data:", data); // ✅ DEBUG

      if (data.success) {
        statusEl.textContent = "✅ Send Success!";
        statusEl.style.color = "green";
      } else {
        statusEl.textContent = `❌ Problem: ${data.error || "Uncontrol"}`;
        statusEl.style.color = "red";
      }
    })
    .catch(error => {
      console.error("Error:", error);
      statusEl.textContent = "❌ Wrong with server";
      statusEl.style.color = "red";
    });
  } catch (err) {
    console.error("Unexpected Error:", err);
    statusEl.textContent = "❌ System Problem";
    statusEl.style.color = "red";
  }
}
