<div id="sidebarMenu">
    <div class="d-flex flex-column h-100">
        <div class="flex-grow-1 d-flex flex-column gap-1 p-3">
            <a class="btn btn-light text-start fs-5 w-100" href="#"><i class="bi bi-building-fill me-2"></i> Obras</a>
            <a class="btn btn-light text-start fs-5 w-100" href="#"><i class="bi bi-bag-fill me-2"></i> Pedidos</a>
            <a class="btn btn-light text-start fs-5 w-100" href="#"><i class="bi bi-truck-front-fill me-2"></i> Equipos</a>
            <a class="btn btn-light text-start fs-5 w-100" href="#"><i class="bi bi-bar-chart-fill me-2"></i> Reportes</a>
            <a class="btn btn-light text-start fs-5 w-100" href="#"><i class="bi bi-journals me-2"></i> Referenciales</a>
            <a class="btn btn-light text-start fs-5 w-100" href="#"><i class="bi bi-people-fill me-2"></i> Usuarios</a>
            <a class="btn btn-light text-start fs-5 w-100" href="#"><i class="bi bi-shield-lock-fill me-2"></i> Permisos</a>
            <a class="btn btn-light text-start fs-5 w-100" href="#"><i class="bi bi-gear-fill me-2"></i> Configurar</a>
        </div>
    </div>
</div>
<script>
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarMenu = document.getElementById('sidebarMenu');
    let sidebarVisible = false;

    sidebarToggle.addEventListener('click', function () {
        sidebarVisible = !sidebarVisible;
        if (sidebarVisible) {
            sidebarMenu.classList.add('show');
        } else {
            sidebarMenu.classList.remove('show');
        }
    });

    // Cerrar el sidebar al hacer clic fuera de él
    document.addEventListener('click', function(event) {
        if (
            sidebarVisible &&
            !sidebarMenu.contains(event.target) &&
            event.target !== sidebarToggle &&
            !sidebarToggle.contains(event.target)
        ) {
            sidebarMenu.classList.remove('show');
            sidebarVisible = false;
        }
    });

    // Evitar que el sidebar desaparezca al hacer clic dentro de él
    sidebarMenu.addEventListener('click', function(event) {
        event.stopPropagation();
    });
</script>
<style>
    #sidebarMenu {
        transition: transform 0.25s ease, opacity 0.25s ease;
        transform: translateX(-100%);
        opacity: 0;
        top: 56px; /* Altura del navbar */
        left: 0;
        width: 240px;
        height: calc(100vh - 56px);
        z-index: 1050;
        background: #fff;
        box-shadow: 0 0.25rem 0.25rem rgba(0,0,0,.075);
        position: fixed;
        display: block;
    }
    #sidebarMenu.show {
        transform: translateX(0);
        opacity: 1;
    }
</style>