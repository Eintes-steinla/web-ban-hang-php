function toggleLanguage() {
  // Lưu trữ ngôn ngữ hiện tại trong localStorage
  if (!localStorage.getItem("language")) {
    localStorage.setItem("language", "vi");
  }

  // Các phần tử DOM
  const toggleLang = document.getElementById("toggle-lang");
  const dropdownLang = document.getElementById("dropdown-lang");
  const langItems = document.querySelectorAll("#dropdown-lang li");

  // Áp dụng ngôn ngữ từ localStorage khi trang tải
  document.addEventListener("DOMContentLoaded", () => {
    const savedLang = localStorage.getItem("language");
    changeLanguage(savedLang);
  });

  // Thêm chức năng hiển thị/ẩn dropdown
  toggleLang.addEventListener("click", (e) => {
    e.stopPropagation(); // Ngăn sự kiện lan tỏa để không kích hoạt sự kiện click của document
    dropdownLang.classList.toggle("hidden");
  });

  // Ẩn dropdown khi click bên ngoài
  document.addEventListener("click", (event) => {
    if (!toggleLang.contains(event.target)) {
      dropdownLang.classList.add("hidden");
    }
  });

  // Thêm chức năng chuyển đổi ngôn ngữ cho các mục trong dropdown
  langItems.forEach((item) => {
    item.addEventListener("click", () => {
      const lang = item.getAttribute("data-lang");
      changeLanguage(lang);
      dropdownLang.classList.add("hidden");
    });
  });

  // Hàm chuyển đổi ngôn ngữ
  function changeLanguage(lang) {
    // Cập nhật thuộc tính lang của HTML
    document.documentElement.lang = lang;

    // Lưu ngôn ngữ đã chọn vào localStorage
    localStorage.setItem("language", lang);

    // Ẩn tất cả các phần tử ngôn ngữ
    document.querySelectorAll("[data-lang]").forEach((el) => {
      if (el.parentElement.id !== "dropdown-lang") {
        el.classList.add("hidden");
      }
    });

    // Hiển thị phần tử của ngôn ngữ đã chọn
    document.querySelectorAll(`[data-lang="${lang}"]`).forEach((el) => {
      if (el.parentElement.id !== "dropdown-lang") {
        el.classList.remove("hidden");
      }
    });

    // Thêm trạng thái active cho mục ngôn ngữ đã chọn (tùy chọn)
    langItems.forEach((item) => {
      if (item.getAttribute("data-lang") === lang) {
        item.classList.add("bg-blue-500");
        item.classList.add("text-gray-200");
      } else {
        item.classList.remove("bg-blue-500");
        item.classList.remove("text-gray-200");
      }
    });
  }
}

function toggleTheme() {
  // Dark/Light mode toggle
  document
    .getElementById("toggle-theme")
    .addEventListener("click", function () {
      const sun = document.getElementById("sun");
      const moon = document.getElementById("moon");

      // Kiểm tra xem chế độ hiện tại là gì và chuyển đổi
      if (document.documentElement.getAttribute("data-theme") === "dark") {
        // Chuyển sang chế độ sáng
        document.documentElement.setAttribute("data-theme", "light");
        sun.classList.remove("hidden");
        moon.classList.add("hidden");
        localStorage.theme = "light";
      } else {
        // Chuyển sang chế độ tối
        document.documentElement.setAttribute("data-theme", "dark");
        sun.classList.add("hidden");
        moon.classList.remove("hidden");
        localStorage.theme = "dark";
      }
    });
}

function loginNav() {
  const loginIcon = document.getElementById("login-icon");
  const loginLink = document.getElementById("login-link");

  loginIcon.addEventListener("click", (e) => {
    e.stopPropagation();
    loginLink.classList.toggle("hidden");
  });

  // Ẩn dropdown khi click bên ngoài
  document.addEventListener("click", (event) => {
    if (!loginIcon.contains(event.target)) {
      loginLink.classList.add("hidden");
    }
  });
}

// Khởi tạo các chức năng
toggleLanguage();
toggleTheme();
loginNav();
