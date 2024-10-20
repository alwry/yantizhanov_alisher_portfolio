const sidebar = document.querySelector(".sidebar");
const showSidebarButton = document.querySelector(".desktop-hidden a");
const hideSidebarButton = document.querySelector(".sidebar li:first-child a");

function showSidebar() {
    sidebar.classList.add("show");
  }
  
  function hideSidebar() {
    sidebar.classList.remove("show");
  }

showSidebarButton.addEventListener("click", showSidebar);
hideSidebarButton.addEventListener("click", hideSidebar);