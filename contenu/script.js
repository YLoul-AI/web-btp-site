
    function showSubmenu(id) {
        document.getElementById(id).style.display = "block";
    }

    function hideSubmenu(id) {
        document.getElementById(id).style.display = "none";
    }

    document.getElementById("services").addEventListener("mouseover", function() { showSubmenu("services-submenu"); });
    document.getElementById("services").addEventListener("mouseout", function() { hideSubmenu("services-submenu"); });
    document.getElementById("services-submenu").addEventListener("mouseover", function() { showSubmenu("services-submenu"); });
    document.getElementById("services-submenu").addEventListener("mouseout", function() { hideSubmenu("services-submenu"); });

    document.getElementById("projets").addEventListener("mouseover", function() { showSubmenu("projets-submenu"); });
    document.getElementById("projets").addEventListener("mouseout", function() { hideSubmenu("projets-submenu"); });
    document.getElementById("projets-submenu").addEventListener("mouseover", function() { showSubmenu("projets-submenu"); });
    document.getElementById("projets-submenu").addEventListener("mouseout", function() { hideSubmenu("projets-submenu"); });

    document.getElementById("equipes").addEventListener("mouseover", function() { showSubmenu("equipes-submenu"); });
    document.getElementById("equipes").addEventListener("mouseout", function() { hideSubmenu("equipes-submenu"); });
    document.getElementById("equipes-submenu").addEventListener("mouseover", function() { showSubmenu("equipes-submenu"); });
    document.getElementById("equipes-submenu").addEventListener("mouseout", function() { hideSubmenu("equipes-submenu"); });

    document.getElementById("certifications").addEventListener("mouseover", function() { showSubmenu("certifications-submenu"); });
    document.getElementById("certifications").addEventListener("mouseout", function() { hideSubmenu("certifications-submenu"); });
    document.getElementById("certifications-submenu").addEventListener("mouseover", function() { showSubmenu("certifications-submenu"); });
    document.getElementById("certifications-submenu").addEventListener("mouseout", function() { hideSubmenu("certifications-submenu"); });

    document.getElementById("contacts").addEventListener("mouseover", function() { showSubmenu("contacts-submenu"); });
    document.getElementById("contacts").addEventListener("mouseout", function() { hideSubmenu("contacts-submenu"); });
    document.getElementById("contacts-submenu").addEventListener("mouseover", function() { showSubmenu("contacts-submenu"); });
    document.getElementById("contacts-submenu").addEventListener("mouseout", function() { hideSubmenu("contacts-submenu"); });

    function loadExternalForm(url, container) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                container.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

    document.getElementById("Ajou_services").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/form/Services.html", document.getElementById("form-container"));
    });
    document.getElementById("Mod_services").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tServices.php", document.getElementById("form-container"));
    });
    document.getElementById("Sup_services").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tServices.php", document.getElementById("form-container"));
    });

    document.getElementById("Ajou_projets").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/form/Projets.html", document.getElementById("form-container"));
    });
    document.getElementById("Mod_projets").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tProjets.php", document.getElementById("form-container"));
    });
    document.getElementById("Sup_projets").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tProjets.php", document.getElementById("form-container"));
    });

    document.getElementById("Ajou_equipes").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/form/Equipes.html", document.getElementById("form-container"));
    });
    document.getElementById("Mod_equipes").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tEquipes.php", document.getElementById("form-container"));
    });
    document.getElementById("Sup_equipes").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tEquipes.php", document.getElementById("form-container"));
    });

    document.getElementById("Ajou_certifications").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/form/Certafications.html", document.getElementById("form-container"));
    });
    document.getElementById("Mod_certifications").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tCertafications.php", document.getElementById("form-container"));
    });
    document.getElementById("Sup_certifications").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tCertafications.php", document.getElementById("form-container"));
    });

    document.getElementById("Ajou_contacts").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/form/Contacts.html", document.getElementById("form-container"));
    });
    document.getElementById("Mod_contacts").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tContacts.php", document.getElementById("form-container"));
    });
    document.getElementById("Sup_contacts").addEventListener("click", function(event) {
        event.preventDefault();
        loadExternalForm("../function/table/tContacts.php", document.getElementById("form-container"));
    });
