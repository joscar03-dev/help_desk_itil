document.addEventListener("DOMContentLoaded", function() {
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
