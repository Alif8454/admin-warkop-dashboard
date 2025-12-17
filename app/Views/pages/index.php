<?php $this->extend("layouts/main") ?>
<?php $this->section("content") ?>

          
            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6"></div>        
              <div class="masonry-item col-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h4 class="c-grey-900 mB-20">Order</h4>
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
                            <td><a href="#" onclick="showOrderDetail(1, 'Ahmad Rahman', 5, 25000, 'Completed'); return false;">Lihat Detail</a></td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Siti Nurhaliza</td>
                            <td>3</td>
                            <td>45000</td>
                            <td>In Progress</td>
                            <td><a href="#" onclick="showOrderDetail(2, 'Siti Nurhaliza', 3, 45000, 'In Progress'); return false;">Lihat Detail</a></td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>7</td>
                            <td>30000</td>
                            <td>Pending</td>
                            <td><a href="#" onclick="showOrderDetail(3, 'Budi Santoso', 7, 30000, 'Pending'); return false;">Lihat Detail</a></td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Maya Sari</td>
                            <td>2</td>
                            <td>55000</td>
                            <td>Completed</td>
                            <td><a href="#" onclick="showOrderDetail(4, 'Maya Sari', 2, 55000, 'Completed'); return false;">Lihat Detail</a></td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Rizki Pratama</td>
                            <td>4</td>
                            <td>35000</td>
                            <td>In Progress</td>
                            <td><a href="#" onclick="showOrderDetail(5, 'Rizki Pratama', 4, 35000, 'In Progress'); return false;">Lihat Detail</a></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
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
    </script>

<?php $this->endSection() ?>





