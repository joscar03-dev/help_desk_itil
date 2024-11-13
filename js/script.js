/* document.addEventListener("DOMContentLoaded", function() {
    var menuToggles = document.querySelectorAll('.menu-toggle');
    var submenuToggles = document.querySelectorAll('.submenu-toggle');

    menuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            var parentLi = this.parentElement;
            var isOpen = parentLi.classList.contains('open');
            
            // Close all open menus
            document.querySelectorAll('.menu > li.open').forEach(function(openMenu) {
                if (openMenu !== parentLi) {
                    openMenu.classList.remove('open');
                    closeAllSubmenus(openMenu);
                }
            });

            // Toggle the current menu
            if (!isOpen) {
                parentLi.classList.add('open');
            } else {
                parentLi.classList.remove('open');
                closeAllSubmenus(parentLi);
            }
        });
    });

    submenuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            var parentLi = this.parentElement;
            var isOpen = parentLi.classList.contains('open');
            
            // Toggle the current submenu
            if (!isOpen) {
                parentLi.classList.add('open');
            } else {
                parentLi.classList.remove('open');
            }
        });
    });

    function closeAllSubmenus(menuItem) {
        menuItem.querySelectorAll('.submenu, .sub-submenu').forEach(function(submenu) {
            submenu.parentElement.classList.remove('open');
        });
    }
});
 */
/* 
document.addEventListener("DOMContentLoaded", function() {
    var menuToggles = document.querySelectorAll('.menu-toggle');
    var submenuToggles = document.querySelectorAll('.submenu-toggle');
    var toggleSidebar = document.querySelector('.toggle-sidebar');
    var menuItems = document.querySelector('.menu-items');

    menuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            var parentLi = this.parentElement;
            var isOpen = parentLi.classList.contains('open');
            
            // Close all open menus
            document.querySelectorAll('.menu > li.open').forEach(function(openMenu) {
                if (openMenu !== parentLi) {
                    openMenu.classList.remove('open');
                    closeAllSubmenus(openMenu);
                }
            });

            // Toggle the current menu
            if (!isOpen) {
                parentLi.classList.add('open');
            } else {
                parentLi.classList.remove('open');
                closeAllSubmenus(parentLi);
            }
        });
    });

    submenuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            var parentLi = this.parentElement;
            var isOpen = parentLi.classList.contains('open');
            
            // Toggle the current submenu
            if (!isOpen) {
                parentLi.classList.add('open');
            } else {
                parentLi.classList.remove('open');
            }
        });
    });

    function closeAllSubmenus(menuItem) {
        menuItem.querySelectorAll('.submenu, .sub-submenu').forEach(function(submenu) {
            submenu.parentElement.classList.remove('open');
        });
    }

    toggleSidebar.addEventListener('click', function(e) {
        e.preventDefault();
        menuItems.classList.toggle('hidden');
        // Optionally toggle the icon
        this.querySelector('i').classList.toggle('fa-chevron-left');
        this.querySelector('i').classList.toggle('fa-chevron-right');
    });
});

// prueba 2
 */
/* 
document.addEventListener("DOMContentLoaded", function() {
    var menuToggles = document.querySelectorAll('.menu-toggle');
    var submenuToggles = document.querySelectorAll('.submenu-toggle');
    var toggleSidebar = document.querySelector('.toggle-sidebar');
    var menuItems = document.querySelector('.menu-items');
    var sidebar = document.querySelector('.cuerpo-content__menulateral');

    menuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            var parentLi = this.parentElement;
            var isOpen = parentLi.classList.contains('open');
            
            // Close all open menus
            document.querySelectorAll('.menu > li.open').forEach(function(openMenu) {
                if (openMenu !== parentLi) {
                    openMenu.classList.remove('open');
                    closeAllSubmenus(openMenu);
                }
            });

            // Toggle the current menu
            if (!isOpen) {
                parentLi.classList.add('open');
            } else {
                parentLi.classList.remove('open');
                closeAllSubmenus(parentLi);
            }
        });
    });
    
    

    submenuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            var parentLi = this.parentElement;
            var isOpen = parentLi.classList.contains('open');
            
            // Toggle the current submenu
            if (!isOpen) {
                parentLi.classList.add('open');
            } else {
                parentLi.classList.remove('open');
            }
        });
    });

    function closeAllSubmenus(menuItem) {
        menuItem.querySelectorAll('.submenu, .sub-submenu').forEach(function(submenu) {
            submenu.parentElement.classList.remove('open');
        });
    }

    toggleSidebar.addEventListener('click', function(e) {
        e.preventDefault();
        sidebar.classList.toggle('hidden');
        // Optionally toggle the icon direction
        this.querySelector('i').classList.toggle('fa-chevron-left');
        this.querySelector('i').classList.toggle('fa-chevron-right');
    });
}); */

// prueba 3
/* 
document.addEventListener("DOMContentLoaded", function() {
    var menuToggles = document.querySelectorAll('.menu-toggle');
    var submenuToggles = document.querySelectorAll('.submenu-toggle');
    var toggleSidebar = document.querySelector('.toggle-sidebar');
    var sidebar = document.querySelector('.cuerpo-content__menulateral');

    menuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            var parentLi = this.parentElement;
            var isOpen = parentLi.classList.contains('open');
            
            // Close all open menus
            document.querySelectorAll('.menu > li.open').forEach(function(openMenu) {
                if (openMenu !== parentLi) {
                    openMenu.classList.remove('open');
                    closeAllSubmenus(openMenu);
                }
            });

            // Toggle the current menu
            if (!isOpen) {
                parentLi.classList.add('open');
            } else {
                parentLi.classList.remove('open');
                closeAllSubmenus(parentLi);
            }
        });
    });

    submenuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            var parentLi = this.parentElement;
            var isOpen = parentLi.classList.contains('open');
            
            // Toggle the current submenu
            if (!isOpen) {
                parentLi.classList.add('open');
            } else {
                parentLi.classList.remove('open');
            }
        });
    });

    function closeAllSubmenus(menuItem) {
        menuItem.querySelectorAll('.submenu, .sub-submenu').forEach(function(submenu) {
            submenu.parentElement.classList.remove('open');
        });
    }

    toggleSidebar.addEventListener('click', function(e) {
        e.preventDefault();
        sidebar.classList.toggle('hidden');
        // Optionally toggle the icon direction
        this.querySelector('i').classList.toggle('fa-chevron-left');
        this.querySelector('i').classList.toggle('fa-chevron-right');
    });
});
 */

// prueba 4
document.addEventListener("DOMContentLoaded", function () {
    var menuToggles = document.querySelectorAll(".menu-toggle");
    var submenuToggles = document.querySelectorAll(".submenu-toggle");
    var toggleSidebar = document.querySelector(".toggle-sidebar");
    var sidebar = document.querySelector(".cuerpo-content__menulateral");
  
    menuToggles.forEach(function (toggle) {
      toggle.addEventListener("click", function (e) {
        e.preventDefault();
  
        var parentLi = this.parentElement;
        var isOpen = parentLi.classList.contains("open");
  
        document.querySelectorAll(".menu > li.open").forEach(function (openMenu) {
          if (openMenu !== parentLi) {
            openMenu.classList.remove("open");
            closeAllSubmenus(openMenu);
          }
        });
  
        if (!isOpen) {
          parentLi.classList.add("open");
        } else {
          parentLi.classList.remove("open");
          closeAllSubmenus(parentLi);
        }
      });
    });
  
    submenuToggles.forEach(function (toggle) {
      toggle.addEventListener("click", function (e) {
        e.preventDefault();
  
        var parentLi = this.parentElement;
        var isOpen = parentLi.classList.contains("open");
  
        if (!isOpen) {
          parentLi.classList.add("open");
        } else {
          parentLi.classList.remove("open");
        }
      });
    });
  
    function closeAllSubmenus(menuItem) {
      menuItem
        .querySelectorAll(".submenu, .sub-submenu")
        .forEach(function (submenu) {
          submenu.parentElement.classList.remove("open");
        });
    }
  
    toggleSidebar.addEventListener("click", function (e) {
      e.preventDefault();
      sidebar.classList.toggle("hidden");
  
      this.querySelector("i").classList.toggle("fa-chevron-left");
      this.querySelector("i").classList.toggle("fa-chevron-right");
    });
  });
  