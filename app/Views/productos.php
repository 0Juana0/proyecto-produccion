<?= $this->include('layout/header'); ?>

<div class="bg-black min-vh-100 py-5">
    
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-black">Nuestra Colección</h2>
            <hr class="mx-auto text-success" style="width: 100px; height: 3px; opacity: 1;">
            <p class="text-secondary">Disponibilidad inmediata para entrega</p>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle text-center border-secondary">
                <thead>
                    <tr class="table-active">
                        <th scope="col" class="py-3">Producto</th>
                        <th scope="col" class="py-3 text-start">Detalles</th>
                        <th scope="col" class="py-3">Stock</th>
                        <th scope="col" class="py-3">Precio</th>
                        <th scope="col" class="py-3">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>
                            <img src="<?= base_url('img/orquideas2.jpg') ?>" 
                                 alt="Orquídea" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Orquídea Radiante</h5>
                            <small class="text-secondary">SKU: PLT-001</small>
                        </td>
                        <td>
                            <span class="badge bg-success rounded-pill px-3">15 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$70.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/miniorquideas2.jpg') ?>" 
                                 alt="Mini Orquídea" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Mini Orquídea</h5>
                            <small class="text-secondary">SKU: PLT-002</small>
                        </td>
                        <td>
                            <span class="badge bg-warning text-dark rounded-pill px-3">8 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$40.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/tulipanes2.jpg') ?>" 
                                 alt="Tulipanes" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Ramo de Tulipanes</h5>
                            <small class="text-secondary">SKU: PLT-003</small>
                        </td>
                        <td>
                            <span class="badge bg-success rounded-pill px-3">30 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$30.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/suculenta2.jpg') ?>" 
                                 alt="Suculenta" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Suculentas</h5>
                            <small class="text-secondary">SKU: PLT-004</small>
                        </td>
                        <td>
                            <span class="badge bg-danger rounded-pill px-3">5 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$35.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/minisuculenta2.jpg') ?>" 
                                 alt="Mini Suculenta" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Mini Suculenta</h5>
                            <small class="text-secondary">SKU: PLT-005</small>
                        </td>
                        <td>
                            <span class="badge bg-success rounded-pill px-3">25 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$30.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/rosas.jpg') ?>" 
                                 alt="Rosas" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Rosas</h5>
                            <small class="text-secondary">SKU: PLT-006</small>
                        </td>
                        <td>
                            <span class="badge bg-warning text-dark rounded-pill px-3">15 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$45.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/cerezos.jpg') ?>" 
                                 alt="Cerezos blancos" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Cerezos blancos</h5>
                            <small class="text-secondary">SKU: PLT-007</small>
                        </td>
                        <td>
                            <span class="badge bg-danger rounded-pill px-3">3 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$66.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/campanilla.jpg') ?>" 
                                 alt="Campanilla violeta" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Campanillas violetas</h5>
                            <small class="text-secondary">SKU: PLT-008</small>
                        </td>
                        <td>
                            <span class="badge bg-success rounded-pill px-3">25 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$40.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/jade.jpg') ?>" 
                                 alt="Jade" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Jade</h5>
                            <small class="text-secondary">SKU: PLT-009</small>
                        </td>
                        <td>
                            <span class="badge bg-success rounded-pill px-3">30 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$55.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="<?= base_url('img/azafran.jpg') ?>" 
                                 alt="Azafrán" 
                                 class="rounded border border-secondary"
                                 style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td class="text-start">
                            <h5 class="mb-0">Azafrán</h5>
                            <small class="text-secondary">SKU: PLT-010</small>
                        </td>
                        <td>
                            <span class="badge bg-warning text-dark rounded-pill px-3">10 disp.</span>
                        </td>
                        <td class="fs-5 fw-bold text-success">$79.000</td>
                        <td>
                            <button class="btn btn-outline-light btn-sm rounded-pill px-3">Ver</button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>
