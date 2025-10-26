document.getElementById('open_btn').addEventListener('click', function(){
    document.getElementById('sidebar').classList.toggle('open-sidebar');
});

document.addEventListener("DOMContentLoaded", () => {
    // Seleciona todos os links
    document.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", (e) => {
            const href = link.getAttribute("href");
            if (!href || href.startsWith("#") || href.startsWith("http")) return;

            e.preventDefault();

            // Cria o fade-out rápido antes de trocar de página
            document.body.classList.add("fade-out");

            setTimeout(() => {
                window.location.href = href;
            }, 200); // tempo curto para não travar
        });
    });
});