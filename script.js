document.getElementById("uploadForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch("upload.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.json())
    .then((data) => {
      const msgDiv = document.getElementById("message");
      msgDiv.innerText = data.message;
      msgDiv.style.color = data.status === "success" ? "green" : "red";
      if (data.status === "success") {
        setTimeout(() => {
          location.reload(); // Reload to show the new image
        }, 1000);
      }
    })
    .catch((err) => console.error(err));
});
