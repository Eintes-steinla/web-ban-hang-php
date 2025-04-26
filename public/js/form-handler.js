function handleFormSignup(formId, actionUrl, successRedirect) {
  document.getElementById(formId).addEventListener("submit", function (e) {
    e.preventDefault();

    // Xóa tất cả thông báo lỗi cũ
    const errorElements = document.querySelectorAll('[id$="-error"]');
    errorElements.forEach((element) => (element.innerText = ""));

    const formData = new FormData(this);
    if (formId === "signup-form") {
      formData.append("signup", "true");
    }

    let status = document.getElementById("status");
    if (!status.classList.contains("hidden")) {
      status.classList.add("hidden");
    }

    fetch(actionUrl, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "error") {
          // Hiển thị lỗi cho từng trường
          if (data.errors) {
            Object.keys(data.errors).forEach((field) => {
              const errorElement = document.getElementById(field + "-error");
              if (errorElement) {
                errorElement.innerText = data.errors[field];
                // Focus vào trường đầu tiên có lỗi
                const inputElement = document.getElementById(field);
                if (inputElement) {
                  inputElement.focus();
                }
              }
            });
          }
        } else if (data.status === "success") {
          if (status.classList.contains("hidden")) {
            status.classList.remove("hidden");
          }
          status.innerText = data.message;
          status.style.opacity = "1"; // hiện rõ

          // Cho hiệu ứng fade out sau 1s
          setTimeout(() => {
            status.style.transition = "opacity 1s";
            status.style.opacity = "0";
          }, 1000); // hiện 1 giây rồi bắt đầu mờ dần

          // Chờ thêm 2s nữa rồi chuyển trang
          setTimeout(() => {
            if (successRedirect) {
              window.location.href = successRedirect;
            }
          }, 2000); // tổng thời gian 3s trước khi chuyển trang
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        status.innerText = "An error occurred, please try again later";
      });
  });
}
