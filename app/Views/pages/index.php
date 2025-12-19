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
                            <th>Foods</th>
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
                            <th>Foods</th>
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
                            <td>Nasi Goreng, Es Teh</td>
                            <td>Completed</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(1, 'Ahmad Rahman', 5, 25000, 'Completed')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="editOrder(1, this)">Edit</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(1, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Siti Nurhaliza</td>
                            <td>3</td>
                            <td>45000</td>
                            <td>Ayam Bakar, Jus Jeruk, Kerupuk</td>
                            <td>In Progress</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(2, 'Siti Nurhaliza', 3, 45000, 'In Progress')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="editOrder(2, this)">Edit</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(2, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>7</td>
                            <td>30000</td>
                            <td>Sate Ayam, Nasi Putih, Es Kelapa</td>
                            <td>Pending</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(3, 'Budi Santoso', 7, 30000, 'Pending')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="editOrder(3, this)">Edit</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(3, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Maya Sari</td>
                            <td>2</td>
                            <td>55000</td>
                            <td>Bakso, Mie Goreng, Es Campur, Pisang Goreng</td>
                            <td>Completed</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(4, 'Maya Sari', 2, 55000, 'Completed')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="editOrder(4, this)">Edit</button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="deleteOrder(4, this)">Delete</button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Rizki Pratama</td>
                            <td>4</td>
                            <td>35000</td>
                            <td>Rendang, Nasi Uduk, Kopi Hitam</td>
                            <td>In Progress</td>
                            <td>
                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-sm btn-info" onclick="showOrderDetail(5, 'Rizki Pratama', 4, 35000, 'In Progress')">View</button>
                                <button type="button" class="btn btn-sm btn-warning" onclick="editOrder(5, this)">Edit</button>
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
               <label class="form-label">Foods</label>
               <div class="input-group mb-2">
                 <input type="text" id="foodName" class="form-control" placeholder="Food name (e.g., Nasi Goreng)">
                 <input type="number" id="foodQty" class="form-control" placeholder="Qty" style="max-width:90px">
                 <input type="number" id="foodPrice" class="form-control" placeholder="Price" style="max-width:120px">
                 <button type="button" id="addFoodBtn" class="btn btn-outline-primary">Add</button>
               </div>
               <ul id="foodList" class="list-group"></ul>
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
      // Manage foods in the create/edit modal
      let formFoods = [];
      function renderFormFoodList() {
        const el = document.getElementById('foodList');
        el.innerHTML = '';
        formFoods.forEach((food, index) => {
          const li = document.createElement('li');
          li.className = 'list-group-item d-flex justify-content-between align-items-center';
          li.innerHTML = `
            <div>
              <strong>${food.name}</strong> <small class="text-muted">x${food.quantity}</small>
              <div class="text-muted small">Rp ${Number(food.price).toLocaleString()}</div>
            </div>
            <div>
              <button type="button" class="btn btn-sm btn-danger" data-index="${index}">Remove</button>
            </div>
          `;
          li.querySelector('button').addEventListener('click', (e) => {
            formFoods.splice(Number(e.target.dataset.index), 1);
            renderFormFoodList();
          });
          el.appendChild(li);
        });
      }

      document.getElementById('addFoodBtn').addEventListener('click', () => {
        const name = document.getElementById('foodName').value.trim();
        const qty = parseInt(document.getElementById('foodQty').value, 10) || 1;
        const price = parseInt(document.getElementById('foodPrice').value, 10) || 0;
        if (!name) return;
        formFoods.push({ name, quantity: qty, price });
        document.getElementById('foodName').value = '';
        document.getElementById('foodQty').value = '';
        document.getElementById('foodPrice').value = '';
        renderFormFoodList();
      });

      document.getElementById('createOrderBtn').addEventListener('click', function () {
        formFoods = [];
        renderFormFoodList();
        document.getElementById('foodName').value = '';
        document.getElementById('foodQty').value = '';
        document.getElementById('foodPrice').value = '';
        const form = document.getElementById('createOrderForm');
        delete form.dataset.editId;
        form.reset();
        document.getElementById('createOrderModalLabel').textContent = 'Create Order';
        form.querySelector('button[type="submit"]').textContent = 'Create';
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

        // Edit mode
        if (form.dataset.editId) {
          const editId = Number(form.dataset.editId);
          const rows = Array.from(tableBody.querySelectorAll('tr'));
          const tr = rows.find(r => parseInt(r.cells[0].textContent,10) === editId);
          if (tr) {
            tr.cells[1].textContent = nama;
            tr.cells[2].textContent = meja;
            tr.cells[3].textContent = total;
            tr.cells[4].textContent = formFoods.map(f => f.name).join(', ');
            tr.cells[5].textContent = status;

            // Reattach button handlers to capture updated values
            const buttons = tr.querySelectorAll('button');
            const [viewBtn, editBtn, deleteBtn] = buttons;

            const newView = viewBtn.cloneNode(true);
            newView.addEventListener('click', () => showOrderDetail(editId, nama, meja, total, status));
            viewBtn.parentNode.replaceChild(newView, viewBtn);

            const newEdit = editBtn.cloneNode(true);
            newEdit.addEventListener('click', () => editOrder(editId, newEdit));
            editBtn.parentNode.replaceChild(newEdit, editBtn);

            const newDelete = deleteBtn.cloneNode(true);
            newDelete.addEventListener('click', () => deleteOrder(editId, newDelete));
            deleteBtn.parentNode.replaceChild(newDelete, deleteBtn);
          }

          // Persist foods
          orderFoods[editId] = formFoods.map(f => ({ ...f }));

          delete form.dataset.editId;
          form.reset();
          formFoods = [];
          renderFormFoodList();
          document.getElementById('createOrderModalLabel').textContent = 'Create Order';
          form.querySelector('button[type="submit"]').textContent = 'Create';
          const createModalEl = document.getElementById('createOrderModal');
          const bsModal = bootstrap.Modal.getInstance(createModalEl);
          if (bsModal) bsModal.hide();
          return;
        }

        // Create mode
        const ids = Array.from(tableBody.querySelectorAll('tr')).map(r => parseInt(r.cells[0].textContent,10) || 0);
        const newId = ids.length ? Math.max(...ids) + 1 : 1;

        const tr = document.createElement('tr');
        const foodsText = formFoods.map(f => f.name).join(', ');
        tr.innerHTML = `
          <td>${newId}</td>
          <td>${nama}</td>
          <td>${meja}</td>
          <td>${total}</td>
          <td>${foodsText}</td>
          <td>${status}</td>
          <td>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-sm btn-info">View</button>
              <button type="button" class="btn btn-sm btn-warning">Edit</button>
              <button type="button" class="btn btn-sm btn-danger">Delete</button>
            </div>
          </td>
        `;

        const [viewBtn, editBtn, deleteBtn] = tr.querySelectorAll('button');
        viewBtn.addEventListener('click', () => showOrderDetail(newId, nama, meja, total, status));
        editBtn.addEventListener('click', () => editOrder(newId, editBtn));
        deleteBtn.addEventListener('click', () => deleteOrder(newId, deleteBtn));

        tableBody.appendChild(tr);
        orderFoods[newId] = formFoods.map(f => ({ ...f }));
        formFoods = [];
        renderFormFoodList();
        form.reset();
        const createModalEl = document.getElementById('createOrderModal');
        const bsModal = bootstrap.Modal.getInstance(createModalEl);
        if (bsModal) bsModal.hide();
      });


      function editOrder(id, button) {
        // Find the table row
        let tr = button ? button.closest('tr') : null;
        if (!tr) {
          const rows = document.querySelectorAll('#dataTable tbody tr');
          tr = Array.from(rows).find(r => parseInt(r.cells[0].textContent,10) === Number(id));
        }
        if (!tr) return;

        const nama = tr.cells[1].textContent.trim();
        const meja = tr.cells[2].textContent.trim();
        const total = tr.cells[3].textContent.trim();
        const status = tr.cells[5].textContent.trim();

        const form = document.getElementById('createOrderForm');
        form.dataset.editId = id;
        form.nama.value = nama;
        form.meja.value = meja;
        form.total.value = total;
        form.status.value = status;

        // Prefill foods from orderFoods if available
        formFoods = orderFoods[id] ? orderFoods[id].map(f => ({ ...f })) : [];
        renderFormFoodList();

        document.getElementById('createOrderModalLabel').textContent = 'Edit Order';
        form.querySelector('button[type="submit"]').textContent = 'Update';

        const createModal = new bootstrap.Modal(document.getElementById('createOrderModal'));
        createModal.show();
      }

      function deleteOrder(id, button) {
        if (!confirm('Delete order #' + id + '? This action cannot be undone.')) return;
        const tr = button.closest('tr');
        if (tr) tr.remove();
        if (orderFoods[id]) delete orderFoods[id];
      }
    </script>

<?php $this->endSection() ?>





