<?php $this->extend("layouts/main") ?>
<?php $this->section("content") ?>

          
            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6"></div>        
              <div class="masonry-item col-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="c-grey-900 mB-0">Order</h4>
                      <button id="createOrderBtn" class="btn btn-primary">Create Order</button>
                    </div>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Order ID</th>
                            <th>Nama</th>
                            <th>Meja</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Order ID</th>
                            <th>Nama</th>
                            <th>Meja</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Ahmad Rahman</td>
                            <td>5</td>
                            <td>25000</td>
                            <td>Completed</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(1, 'Ahmad Rahman', 5, 25000, 'Completed')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="removeOrder(1, this)">Remove</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(1, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Siti Nurhaliza</td>
                            <td>3</td>
                            <td>45000</td>
                            <td>In Progress</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(2, 'Siti Nurhaliza', 3, 45000, 'In Progress')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="removeOrder(2, this)">Remove</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(2, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>7</td>
                            <td>30000</td>
                            <td>Pending</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(3, 'Budi Santoso', 7, 30000, 'Pending')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="removeOrder(3, this)">Remove</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(3, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Maya Sari</td>
                            <td>2</td>
                            <td>55000</td>
                            <td>Completed</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(4, 'Maya Sari', 2, 55000, 'Completed')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="removeOrder(4, this)">Remove</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(4, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Rizki Pratama</td>
                            <td>4</td>
                            <td>35000</td>
                            <td>In Progress</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(5, 'Rizki Pratama', 4, 35000, 'In Progress')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="removeOrder(5, this)">Remove</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(5, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
              </div>
            </div>

    <!-- Create Order Modal -->
    <div class="modal fade" id="createOrderModal" tabindex="-1" aria-labelledby="createOrderModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form id="createOrderForm" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="createOrderModalLabel">Create Order</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <div class="mb-3">
               <label class="form-label">Nama</label>
               <input type="text" class="form-control" name="nama" required>
             </div>
             <div class="mb-3">
               <label class="form-label">Meja</label>
               <input type="number" class="form-control" name="meja" required>
             </div>
             <div class="mb-3">
               <label class="form-label">Total</label>
               <input type="number" class="form-control" name="total" required>
             </div>
             <div class="mb-3">
               <label class="form-label">Status</label>
               <select class="form-select" name="status">
                 <option>Pending</option>
                 <option>In Progress</option>
                 <option>Completed</option>
               </select>
             </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Create</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>

        
<?php $this->endSection() ?>
<?php $this->section("scripts") ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
          loader.classList.add('fadeOut');
        }, 300);
      });
    </script>
<script>
      // Sample food data for each order
      const orderFoods = {
        1: [
          { name: 'Nasi Goreng', quantity: 1, price: 15000 },
          { name: 'Es Teh', quantity: 2, price: 5000 }
        ],
        2: [
          { name: 'Ayam Bakar', quantity: 1, price: 25000 },
          { name: 'Jus Jeruk', quantity: 1, price: 10000 },
          { name: 'Kerupuk', quantity: 1, price: 10000 }
        ],
        3: [
          { name: 'Sate Ayam', quantity: 1, price: 20000 },
          { name: 'Nasi Putih', quantity: 1, price: 5000 },
          { name: 'Es Kelapa', quantity: 1, price: 5000 }
        ],
        4: [
          { name: 'Bakso', quantity: 1, price: 15000 },
          { name: 'Mie Goreng', quantity: 1, price: 12000 },
          { name: 'Es Campur', quantity: 1, price: 15000 },
          { name: 'Pisang Goreng', quantity: 1, price: 13000 }
        ],
        5: [
          { name: 'Rendang', quantity: 1, price: 20000 },
          { name: 'Nasi Uduk', quantity: 1, price: 10000 },
          { name: 'Kopi Hitam', quantity: 1, price: 5000 }
        ]
      };

      function showOrderDetail(orderId, nama, meja, total, status) {
        // Populate modal with order information
        document.getElementById('modalOrderId').textContent = orderId;
        document.getElementById('modalNama').textContent = nama;
        document.getElementById('modalMeja').textContent = meja;
        document.getElementById('modalTotal').textContent = total.toLocaleString();
        document.getElementById('modalStatus').textContent = status;

        // Set status badge color
        const statusElement = document.getElementById('modalStatus');
        statusElement.className = 'badge';
        if (status === 'Completed') {
          statusElement.classList.add('bg-success');
        } else if (status === 'In Progress') {
          statusElement.classList.add('bg-warning', 'text-dark');
        } else if (status === 'Pending') {
          statusElement.classList.add('bg-secondary');
        }

        // Populate food list
        const foodList = document.getElementById('modalFoodList');
        foodList.innerHTML = '';

        const foods = orderFoods[orderId] || [];
        foods.forEach(food => {
          const li = document.createElement('li');
          li.className = 'list-group-item d-flex justify-content-between align-items-center';
          li.innerHTML = `
            ${food.name} <span class="badge bg-primary rounded-pill">${food.quantity}x</span>
            <small class="text-muted">Rp ${food.price.toLocaleString()}</small>
          `;
          foodList.appendChild(li);
        });

        // Show the modal
        const modal = new bootstrap.Modal(document.getElementById('orderDetailModal'));
        modal.show();
      }

      // Create / Remove / Delete handlers
      document.getElementById('createOrderBtn').addEventListener('click', function () {
        const createModal = new bootstrap.Modal(document.getElementById('createOrderModal'));
        createModal.show();
      });

      document.getElementById('createOrderForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const form = e.target;
        const nama = form.nama.value.trim();
        const meja = parseInt(form.meja.value, 10) || 0;
        const total = parseInt(form.total.value, 10) || 0;
        const status = form.status.value;
        const tableBody = document.querySelector('#dataTable tbody');
        const ids = Array.from(tableBody.querySelectorAll('tr')).map(r => parseInt(r.cells[0].textContent,10) || 0);
        const newId = ids.length ? Math.max(...ids) + 1 : 1;

        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${newId}</td>
          <td>${nama}</td>
          <td>${meja}</td>
          <td>${total}</td>
          <td>${status}</td>
          <td>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-sm btn-info">View</button>
              <button type="button" class="btn btn-sm btn-warning">Remove</button>
              <button type="button" class="btn btn-sm btn-danger">Delete</button>
            </div>
          </td>
        `;

        const [viewBtn, removeBtn, deleteBtn] = tr.querySelectorAll('button');
        viewBtn.addEventListener('click', () => showOrderDetail(newId, nama, meja, total, status));
        removeBtn.addEventListener('click', () => removeOrder(newId, removeBtn));
        deleteBtn.addEventListener('click', () => deleteOrder(newId, deleteBtn));

        tableBody.appendChild(tr);
        orderFoods[newId] = [];
        form.reset();
        const createModalEl = document.getElementById('createOrderModal');
        const bsModal = bootstrap.Modal.getInstance(createModalEl);
        if (bsModal) bsModal.hide();
      });

      function removeOrder(id, button) {
        const tr = button.closest('tr');
        if (!tr) return;
        tr.classList.add('table-warning','text-muted');
        tr.dataset.removed = '1';
        Array.from(tr.querySelectorAll('button')).forEach(b => b.disabled = true);
        const badge = document.createElement('span');
        badge.className = 'badge bg-secondary ms-2';
        badge.textContent = 'Removed';
        button.parentNode.appendChild(badge);
      }

      function deleteOrder(id, button) {
        if (!confirm('Delete order #' + id + '? This action cannot be undone.')) return;
        const tr = button.closest('tr');
        if (tr) tr.remove();
        if (orderFoods[id]) delete orderFoods[id];
      }
    </script>

<?php $this->endSection() ?>





