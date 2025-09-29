   <script>
       const button = document.getElementById("theme-toggle");
       const html = document.documentElement;
       const moonIcon = document.getElementById("icon-moon");
       const sunIcon = document.getElementById("icon-sun");

       // بررسی تم ذخیره‌شده
       if (localStorage.getItem("theme") === "dark") {
           html.classList.add("dark");
           moonIcon.classList.add("hidden");
           sunIcon.classList.remove("hidden");
       }

       button.addEventListener("click", () => {
           if (html.classList.contains("dark")) {
               html.classList.remove("dark");
               localStorage.setItem("theme", "light");
               moonIcon.classList.remove("hidden");
               sunIcon.classList.add("hidden");
           } else {
               html.classList.add("dark");
               localStorage.setItem("theme", "dark");
               moonIcon.classList.add("hidden");
               sunIcon.classList.remove("hidden");
           }
       });
   </script>

   @livewireScripts
   </body>

   </html>
