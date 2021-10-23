const deleteButtons = document.querySelectorAll(".delete-button");
deleteButtons.forEach(form => {
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        const conf = confirm("Vuoi eliminare il post?");
        if (conf) {
            this.submit();
            /*setTimeout(function() {
                  let style = document.createElement("style");
                  style.type = "text/css";
                  styile.innerHTML = "d-none"
                  document.getElementById("alert").className = "d-none";
                }, 5000);*/
        }
    });
});
