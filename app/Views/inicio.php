<?= $this->include('layout/header'); ?>



<div class="container-fluid p-0">
    <div class="container-fluid p-0">
    <div class="position-relative" style="height: 85vh;">
        <img src="https://cdn.pixabay.com/photo/2014/04/02/00/53/bird-of-paradise-flower-302889_1280.jpg"
                class="w-100 h-100"
                style="object-fit: cover; filter: brightness(60%);">

        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
            <h1 class="display-4 fw-bold" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">Plantas y macetas para el hogar</h1>
            <a href="<?= base_url('productos'); ?>" class="btn btn-dark btn-lg rounded-pill px-5 mt-4">Compra ya</a>
        </div>
    </div>
</div>

<!-- PRODUCTOS DESTACADOS -->
<div class="container py-5">

    <h2 class="text-center fw-bold mb-5">Productos Destacados</h2>

    <div class="row row-cols-1 row-cols-md-3 g-5">

        <!-- Producto 1 -->
        <div class="col">
            <div class="card h-100 shadow-sm transition">
                <img src="https://cdn.pixabay.com/photo/2012/06/24/10/00/orchid-50662_1280.jpg"
                        class="card-img-top"
                        style="height: 420px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title text-dark fw-bold">Producto 1</h5>
                    <p class="text-muted">129 €</p>
                    <a href="<?= base_url('productos/1'); ?>" class="btn btn-dark rounded-pill px-4">Comprar</a>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col">
            <div class="card h-100 shadow-sm transition">
                <img src="https://cdn.pixabay.com/photo/2020/02/14/15/45/orchid-4848687_1280.jpg"
                        class="card-img-top"
                        style="height: 420px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title text-dark fw-bold">Producto 2</h5>
                    <p class="text-muted">165 €</p>
                    <a href="<?= base_url('productos/2'); ?>" class="btn btn-dark rounded-pill px-4">Comprar</a>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col">
            <div class="card h-100 shadow-sm transition">
                <img src="https://cdn.pixabay.com/photo/2019/12/07/09/06/orchid-4678933_1280.jpg"
                        class="card-img-top"
                        style="height: 420px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title text-dark fw-bold">Producto 3</h5>
                    <p class="text-muted">120 €</p>
                    <a href="<?= base_url('productos/3'); ?>" class="btn btn-dark rounded-pill px-4">Comprar</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->include('layout/footer'); ?>