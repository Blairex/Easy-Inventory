<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }

    .sidebar {
      min-height: 100vh;
      background: #1f2937;
      /* neutral slate gray */
      color: #f9fafb;
      padding: 1rem;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      margin-bottom: 0.5rem;
      transition: all 0.2s ease;
      color: #d1d5db;
    }

    .sidebar a:hover {
      background: #374151;
      color: #fff;
    }

    .card {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 0.75rem;
      padding: 1.5rem;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .btn-primary {
      background: #2563eb;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
      transition: background 0.2s;
    }

    .btn-primary:hover {
      background: #1e40af;
    }
  </style>
</head>

<body class="bg-gray-100">
  <div class="flex">
    <!-- Sidebar -->
    <aside class="sidebar w-64">
      <h1 class="text-xl font-bold mb-8">EasyInventory</h1>
      <nav>
        <a href="#dashboard">🏠 Dashboard</a>
        <a href="#inventory">📦 Inventory</a>
        <a href="#reports">📊 Reports</a>
        <a href="#settings">⚙️ Settings</a>
        <a href="#" onclick="logout()">🚪 Logout</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <!-- Dashboard -->
      <section id="dashboard">
        <h2 class="text-2xl font-semibold mb-6">Dashboard Overview</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="card">
            <p class="text-gray-500">Total Items</p>
            <h3 class="text-2xl font-bold text-gray-800">1,245</h3>
          </div>
          <div class="card">
            <p class="text-gray-500">Low Stock</p>
            <h3 class="text-2xl font-bold text-red-600">23</h3>
          </div>
          <div class="card">
            <p class="text-gray-500">Pending Orders</p>
            <h3 class="text-2xl font-bold text-yellow-600">8</h3>
          </div>
          <div class="card">
            <p class="text-gray-500">Reports</p>
            <h3 class="text-2xl font-bold text-green-600">45</h3>
          </div>
        </div>
      </section>

      <!-- Add Item Form -->
      <section id="inventory" class="mt-12">
        <h2 class="text-xl font-semibold mb-4">Add New Item</h2>
        <form id="itemForm" class="card max-w-md space-y-3">
          <input type="text" id="itemName" placeholder="Item Name" class="w-full border p-3 rounded focus:ring-1 focus:ring-blue-500" required>
          <input type="number" id="itemQty" placeholder="Quantity" class="w-full border p-3 rounded focus:ring-1 focus:ring-blue-500" required>
          <input type="text" id="itemSupplier" placeholder="Supplier" class="w-full border p-3 rounded focus:ring-1 focus:ring-blue-500">
          <button type="submit" class="btn-primary">Save Item</button>
        </form>
      </section>

      <!-- Reports Section -->
      <section id="reports" class="mt-12">
        <h2 class="text-xl font-semibold mb-4">Reports</h2>
        <div class="card overflow-x-auto">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-gray-50">
                <th class="p-3 text-gray-600">Report Name</th>
                <th class="p-3 text-gray-600">Date</th>
                <th class="p-3 text-gray-600">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-t hover:bg-gray-50">
                <td class="p-3">Low Stock Items</td>
                <td class="p-3">2025-09-08</td>
                <td class="p-3"><button class="btn-primary text-sm">View</button></td>
              </tr>
              <tr class="border-t hover:bg-gray-50">
                <td class="p-3">Inventory Summary</td>
                <td class="p-3">2025-09-05</td>
                <td class="p-3"><button class="btn-primary text-sm">View</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </main>
  </div>

  <script>
    function logout() {
      alert("Logging out...");
    }

    document.getElementById("itemForm")?.addEventListener("submit", function(e) {
      e.preventDefault();
      const name = document.getElementById("itemName").value;
      const qty = document.getElementById("itemQty").value;
      const supplier = document.getElementById("itemSupplier").value;


      alert(`✅ Item Added!\nName: ${name}\nQuantity: ${qty}\nSupplier: ${supplier}`);
      form.reset();
    });
  </script>
</body>

</html>
